<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\WebProfile;
use PayPal\Api\ItemList;
use PayPal\Api\InputFields;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use Validator;
use Cart;
use App\Order;
use App\CronullaOrder;
use Str;
use Auth;
use Config;
use Response,Stripe;
use App\Mail\OrderEmail;
use App\Product;
use Mail;

class PaymentController extends Controller
{    
    private $apiContext;
    public function __construct()
    {
        # Main configuration in constructor
        $paypalConfig = Config::get('paypal');
        $this->apiContext = new ApiContext(new OAuthTokenCredential(
                $paypalConfig['client_id'],
                $paypalConfig['secret'])
        );
        $this->apiContext->setConfig($paypalConfig['settings']);
    }
    
    public function payWithpaypal(Request $request)
    {
        
        $validator = $this->validate($request, [
                'recipient_name' => 'required',
                'recipient_telephone'  => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'postal_code' => 'required',
                'date' => 'required',
                'time' => 'required',
                'delivery_availability' => 'required',
                'sender_name' => 'required',
                'sender_email' => 'required',
                'sender_phone' => 'required',
        ]);

            // insert data into database
            $randomNumber1 = rand(100, 1000);
            $randomNumber2 = rand(600, 1000);
            $submitOrder = new Order;
            $submitOrder->order_id = $randomNumber1.$randomNumber2;
            $submitOrder->payment_id = 0;
            $submitOrder->payment_type = "paypal";
            $submitOrder->r_name = $request->recipient_name;
            $submitOrder->r_telephone = $request->recipient_telephone;
            $submitOrder->r_occassion = $request->deliver_occassion;
            $submitOrder->r_message = $request->delivery_message;
            $submitOrder->address = $request->address;
            $submitOrder->city = $request->city;
            $submitOrder->state = $request->state;
            $submitOrder->postal_code = $request->postal_code;
            $submitOrder->date = $request->date;
            $submitOrder->time = $request->time;
            $submitOrder->r_unavailable = $request->delivery_availability;
            $submitOrder->s_name = $request->sender_name;
            $submitOrder->s_email = $request->sender_email;
            $submitOrder->s_phone = $request->sender_phone;
            $submitOrder->user_type = $request->user_type;
            $cartData = Cart::getContent()->pluck('id');
            $submitOrder->products = json_encode($cartData);
            $submitOrder->quantity = Cart::getTotalQuantity();
            $qty = Cart::getSubTotal();
            $submitOrder->total_amount = number_format((float)$qty, 2, '.', '');
            $submitOrder->payment_status = "in-process";
            $submitOrder->save();

            // get order ID and save in session
            Session::put('api_order_id', $submitOrder->id);

        # We initialize the payer object and set the payment method to PayPal
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        
        # We get all the items from the cart and parse the array into the Item object
        $items = [];
        foreach (Cart::getContent() as $item) {
            $items[] = (new Item())
                ->setName($item->name)
                ->setCurrency('AUD')
                ->setQuantity($item->quantity)
                ->setPrice($item->price);
        }
        //for single item
        // $items = new Item();
        // $items->setName("Amir")
        //         ->setCurrency('USD')
        //         ->setQuantity(3)
        //         ->setPrice(12.8);
        
        # We create a new item list and assign the items to it
        $itemList = new ItemList();
        $itemList->setItems($items);
        # Disable all irrelevant PayPal aspects in payment
        $inputFields = new InputFields();
        $inputFields->setAllowNote(true)
            ->setNoShipping(1)
            ->setAddressOverride(0);
        $webProfile = new WebProfile();
        $webProfile->setName(uniqid())
            ->setInputFields($inputFields)
            ->setTemporary(true);
        $createProfile = $webProfile->create($this->apiContext);
        
        # We get the total price of the cart
        //convert to two decimal places
        // $qty = Cart::getSubTotal();
        // $cartAmount = number_format((float)$qty, 2, '.', '');
        $amount = new Amount();
        $amount->setCurrency('AUD')
            ->setTotal(Cart::getSubTotal());

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setItemList($itemList)
            ->setDescription('Cronulla Florists transaction Details');

        $redirectURLs = new RedirectUrls();
        $redirectURLs->setReturnUrl(URL::to('status'))
            ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectURLs)
            ->setTransactions(array($transaction));

        $payment->setExperienceProfileId($createProfile->getId());
        $payment->create($this->apiContext);
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirectURL = $link->getHref();
                break;
            }
        }
        # We store the payment ID into the session
        Session::put('paypalPaymentId', $payment->getId());
        if (isset($redirectURL)) {
            return Redirect::away($redirectURL);
        }
        Session::flash('error', 'There was a problem processing your payment. Please contact support.');
        return Redirect::to('/shopping-cart');
    }

    public function getPaymentStatus(Request $request)
    {
        $paymentId = \Request::get('paymentId');
        # We now erase the payment ID from the session to avoid fraud
        $request->session()->forget('paypalPaymentId');
        # If the payer ID or token isn't set, there was a corrupt response and instantly abort
        if (empty(\Request::get('PayerID')) || empty(\Request::get('token'))) {
            Session::flash('error', 'There was a problem processing your payment. Please contact support.');
            return Redirect::to('/shopping-cart');
        }
        $payment = Payment::get($paymentId, $this->apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId(\Request::get('PayerID'));
        $result = $payment->execute($execution, $this->apiContext);
        if ($result->getState() == 'approved') {
            $updateOrder = Order::find(Session::get('api_order_id'));
            $updateOrder->payment_id = $paymentId;
            $updateOrder->payment_status = "completed";
            $updateOrder->save();
            // send data to Petals order function
            $petalsData = $this->petalsOrderXML();

            if($petalsData == 'success') {
                // remove order id
                //$request->session()->forget('api_order_id');
                // remove session
                $request->session()->forget('cart_key');

                 // get all product list
                $p_id = json_decode($updateOrder->products);
                //dd($p_id);

                $getList = Product::whereIn('product_id', $p_id)->pluck('name')->toArray();
                $getList = implode(',', $getList);
                //dd($getList);

                $updateOrder->product_name = $getList;

                // send mail to sender and admin
                Mail::to($updateOrder->s_email)->send(new OrderEmail($updateOrder));
                Mail::to('faizanpws@gmail.com')->send(new OrderEmail($updateOrder));
                Mail::to('cronullaflorists@gmail.com')->send(new OrderEmail($updateOrder));

                Session::flash('success', 'Your payment was successful. Thank you.');
                return Redirect::to('/thank-you');
            } else {
                Session::flash('error', 'Something went wrong. Please contact support.');
                return Redirect::to('/shopping-cart');
            }  
        }
        Session::flash('error', 'There was a problem processing your payment. Please contact support.');
        return Redirect::to('/shopping-cart');
    }

    public function petalsOrderXML() {
        // get order Data
        $updateOrder = Order::find(Session::get('api_order_id'));

        foreach(Cart::getContent() as $data) {
            $r_name = str_replace(' ', '+', $updateOrder->r_name);
            $address = str_replace(' ', '+', $updateOrder->address);
            $city = str_replace(' ', '+', $updateOrder->city);
            $postal_code = $updateOrder->postal_code;
            $c_code = 'AU';
            $state = str_replace(' ', '+', $updateOrder->state);
            $r_phone = $updateOrder->r_telephone;
            $description = str_replace(' ', '+', $data->attributes->description);
            $r_message = str_replace(' ', '+', $updateOrder->r_message);
            $date1 = date("Ymd", strtotime($updateOrder->date));
            $time1 = $updateOrder->time;
            $tvalue = $data->price;

            // save in cronulla order table
            $saveCronullaOrder = new CronullaOrder;
            // insert data into database
            $conullaNumber1 = rand(100, 1000);
            $conullaNumber2 = rand(600, 1000);
            $saveCronullaOrder->order_id = $updateOrder->order_id;
            $saveCronullaOrder->cronulla_order_id = $conullaNumber1.$conullaNumber2;
            $saveCronullaOrder->save();

            $url = 'http://pin.petals.com.au';
            $headers = array(
                            "Content-type: text/xml;charset=\"utf-8\"",
                            "Accept: text/xml",
                            "Cache-Control: no-cache",
                            "Pragma: no-cache",
                        );

            //open connection
            $ch = curl_init();

            // set the url
            curl_setopt($ch, CURLOPT_URL, $url);

            // tell curl we want to do a HTTP POST
            // curl_setopt($ch, CURLOPT_POST, true);

            // we want to capture the result in a variable
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // change the content type header to be text/xml as we aren't sending
            // the data as formencoded
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            // add the xml data to the curl request
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data);

            //execute post
            $result = curl_exec($ch);

            //close connection
            curl_close($ch);
            // remove cart
            //Cart::remove($data['id']);
        }
        // foreach ends
        return "success";

           
    }

    public function thankYou(Request $request) {

        return view('theme.thank_you');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function checkOrderForm(Request $request) {
        if ($request->ajax()) {

            $validator = Validator::make($request->all(), [
                'recipient_name' => 'required',
                'recipient_telephone'  => 'required',
                'delivery_message' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'postal_code' => 'required',
                'date' => 'required',
                'time' => 'required',
                'delivery_availability' => 'required',
                'sender_name' => 'required',
                'sender_email' => 'required',
                'sender_phone' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()->first()]); 
            }
                return response()->json(['success'=>'Form is validated.']); 
        }
    }

    public function storeStripe(Request $request)
    {
        if ($request->ajax()) {

            $qty = Cart::getSubTotal();
            $amount = number_format((float)$qty, 2, '.', '');
            
            $stripe = Stripe::charges()->create([
            'source' => $request->tokenId,
            'currency' => 'AUD',
            'amount' => $amount
        ]);
            return $stripe;
        }
         
    }

    public function submitStripeOrder(Request $request)
    {
        if ($request->ajax()) {
           // insert data into database
            $randomNumber1 = rand(100, 1000);
            $randomNumber2 = rand(600, 1000);
            $message = [];
            $submitOrder = new Order;
            $submitOrder->order_id = $randomNumber1.$randomNumber2;
            $submitOrder->payment_id = $request->s_id;
            $submitOrder->payment_type = "stripe";
            $submitOrder->r_name = $request->recipient_name;
            $submitOrder->r_telephone = $request->recipient_telephone;
            $submitOrder->r_occassion = $request->deliver_occassion;
            $submitOrder->r_message = $request->delivery_message;
            $submitOrder->address = $request->address;
            $submitOrder->city = $request->city;
            $submitOrder->state = $request->state;
            $submitOrder->postal_code = $request->postal_code;
            $submitOrder->date = $request->date;
            $submitOrder->time = $request->time;
            $submitOrder->r_unavailable = $request->delivery_availability;
            $submitOrder->s_name = $request->sender_name;
            $submitOrder->s_email = $request->sender_email;
            $submitOrder->s_phone = $request->sender_phone;
            $submitOrder->user_type = $request->user_type;
            $cartData = Cart::getContent()->pluck('id');
            $submitOrder->products = json_encode($cartData);
            $submitOrder->quantity = Cart::getTotalQuantity();
            $qty = Cart::getSubTotal();
            $submitOrder->total_amount = number_format((float)$qty, 2, '.', '');
            $submitOrder->payment_status = "completed";
            $submitOrder->save();

            // get all product list
            $p_id = json_decode($submitOrder->products);
            //dd($p_id);

            $getList = Product::whereIn('product_id', $p_id)->pluck('name')->toArray();
            $getList = implode(',', $getList);
            //dd($getList);

            $submitOrder->product_name = $getList;

            // send mail to sender and admin
            Mail::to($submitOrder->s_email)->send(new OrderEmail($submitOrder));
            Mail::to('faizanpws@gmail.com')->send(new OrderEmail($submitOrder));
            Mail::to('cronullaflorists@gmail.com')->send(new OrderEmail($submitOrder));

            foreach(Cart::getContent() as $data) {
                $r_name = str_replace(' ', '+', $submitOrder->r_name);
                $address = str_replace(' ', '+', $submitOrder->address);
                $city = str_replace(' ', '+', $submitOrder->city);
                $postal_code = $submitOrder->postal_code;
                $c_code = 'AU';
                $r_phone = $submitOrder->r_telephone;
                $state = str_replace(' ', '+', $submitOrder->state);
                $description = str_replace(' ', '+', $data->attributes->description);
                $r_message = str_replace(' ', '+', $submitOrder->r_message);
                $date1 = date("Ymd", strtotime($submitOrder->date));
                $time1 = $submitOrder->time;
                $tvalue = $data->price;

                 // save in cronulla order table
                $saveCronullaOrder = new CronullaOrder;
                // insert data into database
                $conullaNumber1 = rand(100, 1000);
                $conullaNumber2 = rand(600, 1000);
                $saveCronullaOrder->order_id = $submitOrder->order_id;
                $saveCronullaOrder->cronulla_order_id = $conullaNumber1.$conullaNumber2;
                $saveCronullaOrder->save();

                $url = 'http://pin.petals.com.au';
                $headers = array(
                                "Content-type: text/xml;charset=\"utf-8\"",
                                "Accept: text/xml",
                                "Cache-Control: no-cache",
                                "Pragma: no-cache",
                            );

                // $xml_data = 'recordtype=01&seller=8833&sendid='.$random.'&password=digitial&affilref=1258&recipient='.$r_firstname.'&surname='. $r_lastname.'&address='.$address.'&town='.$city.'&postalcode=15897&crtycode='.$c_code.'&phone='.$r_phone.'&description='.$description.'&message='.$r_message.'&deldate='.$date1.'&deltime='.$time1.'&tvalue='.$tvalue; 

                //open connection
                $ch = curl_init();

                // set the url
                curl_setopt($ch, CURLOPT_URL, $url);

                // tell curl we want to do a HTTP POST
                // curl_setopt($ch, CURLOPT_POST, true);

                // we want to capture the result in a variable
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // change the content type header to be text/xml as we aren't sending
                // the data as formencoded
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                // add the xml data to the curl request
                // curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data);

                //execute post
                $result = curl_exec($ch);

                //close connection
                curl_close($ch);

                // remove cart
                //Cart::remove($data['id']);
            }
            // remove session
            $request->session()->forget('cart_key');
            $message['success'] = "Order placed successfully.";
            return response()->json($message);   
        }
         
    }

}