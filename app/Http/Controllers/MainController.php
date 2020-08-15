<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Mail\ContactForm;
use Mail;
use DB;
use Session;
use Cart;
class MainController extends Controller
{
    //
    public function index(Request $request) {

    	// array for meta data
        $metaData = array();
        $metaData['title'] = 'Cronulla Florists - Same Day Flower Delivery in Cronulla';
		$metaData['description'] = 'Cronulla Florists is Australian\'s 1st choice for same day flower delivery in Cronulla. Order 24/7. Sales up to 70% off.';
		$metaData['keyword'] = 'Cronulla Florist, florist cronulla, flower delivery in cronulla';

    		$products = Product::all();
    		// array for data
			$listingData = [];
			foreach ($products as $key => $value) {

				if ($value['type'] == 'designer-choice') {
					$listingData['Choice'][] = array(
						"product_id" => $value['product_id'],
						"attribute1" => $value['attribute1'],
					    "attribute2" => $value['attribute2'],
					    'name' => $value['name'],
					    'slug' => $value['slug'],
					    "description" => $value['description'],
					    "product_url" => $value['product_url'],
					    "feature_image" => 'https://'.$value['feature_image'],
					    "secondary_image" => 'https://'.$value['secondary_image'],
					    "shipment_cost" => $value['shipment_cost'],
					    "price" => $value['price'],
	    				"currency" => $value['currency'],
	    				"type" => 'designer-choice'
					);
				} elseif ($value['type'] == 'arrangement') {
					$listingData['Arrangement'][] = array(
						"product_id" => $value['product_id'],
						"attribute1" => $value['attribute1'],
					    "attribute2" => $value['attribute2'],
					    'name' => $value['name'],
					    'slug' => $value['slug'],
					    "description" => $value['description'],
					    "product_url" => $value['product_url'],
					    "feature_image" => 'https://'.$value['feature_image'],
					    "secondary_image" => 'https://'.$value['secondary_image'],
					    "shipment_cost" => $value['shipment_cost'],
					    "price" => $value['price'],
	    				"currency" => $value['currency'],
	    				"type" => 'arrangement'
					);
				} elseif ($value['type'] == 'bouquet') {
					$listingData['Bouquet'][] = array(
						"product_id" => $value['product_id'],
						"attribute1" => $value['attribute1'],
					    "attribute2" => $value['attribute2'],
					    'name' => $value['name'],
					    'slug' => $value['slug'],
					    "description" => $value['description'],
					    "product_url" => $value['product_url'],
					    "feature_image" => 'https://'.$value['feature_image'],
					    "secondary_image" => 'https://'.$value['secondary_image'],
					    "shipment_cost" => $value['shipment_cost'],
					    "price" => $value['price'],
	    				"currency" => $value['currency'],
	    				"type" => 'bouquet'
					);
				} elseif ($value['type'] == 'plant') {
					$listingData['Plant'][] = array(
						"product_id" => $value['product_id'],
						"attribute1" => $value['attribute1'],
					    "attribute2" => $value['attribute2'],
					    'name' => $value['name'],
					    'slug' => $value['slug'],
					    "description" => $value['description'],
					    "product_url" => $value['product_url'],
					    "feature_image" => 'https://'.$value['feature_image'],
					    "secondary_image" => 'https://'.$value['secondary_image'],
					    "shipment_cost" => $value['shipment_cost'],
					    "price" => $value['price'],
	    				"currency" => $value['currency'],
	    				"type" => 'plant'
					);
				} else {
					$listingData['Flower'][] = array(
						"product_id" => $value['product_id'],
						"attribute1" => $value['attribute1'],
					    "attribute2" => $value['attribute2'],
					    'name' => $value['name'],
					    'slug' => $value['slug'],
					    "description" => $value['description'],
					    "product_url" => $value['product_url'],
					    "feature_image" => 'https://'.$value['feature_image'],
					    "secondary_image" => 'https://'.$value['secondary_image'],
					    "shipment_cost" => $value['shipment_cost'],
					    "price" => $value['price'],
	    				"currency" => $value['currency'],
	    				"type" => 'flower'
					);
				}
				// elseif ends
			} 
			// loop ends
            // pass the data to the view
            return view('theme.home', ['listingData' => $listingData, 'metaData' => $metaData]);
		}
		
		public function products(Request $request) {
			
			$q = Product::query();
			$url = request()->segments();
			// side price query
			$sideprice = [];
			$sideprice['low'] = Product::where('type', $url[1])
								->where('price', '<', 100)
								->count();
			$sideprice['medium'] = Product::where('type', $url[1])
								->whereBetween('price', array(100, 199.99))
								->count();
			$sideprice['high'] = Product::where('type', $url[1])
								->where('price', '>', 200)
								->count();
			// array for meta data
			$metaData = array();
			if ($url[1] == 'designer-choice') {
				$breakeUrl = explode('-',$url[1]);
				$name1 = ucfirst($breakeUrl[0]);
				$name2 = ucfirst($breakeUrl[1]);
				$metaData['title'] = $name1.' '.$name2.' - Cronulla Florists';
				$metaData['description'] = 'Check out our '.$name1.' '.$name2.' package available on same day flower delivery in Cronulla and Australia wide.';
				$metaData['keyword'] = $name1.' '.$name2.', Cronulla Florist, flower delivery in Cronulla';
			} else {
				$metaData['title'] = ucfirst($url[1]).' - Cronulla Florists';
				$metaData['description'] = 'Check out our '.ucfirst($url[1]).' package available on same day flower delivery in Cronulla and Australia wide.';
				$metaData['keyword'] = ucfirst($url[1]).', Cronulla Florist, flower delivery in Cronulla';
			}
			
			// if ($request->q != null) {
			// 	$products = $q->where('type', $url[1])
			// 	->where('name', 'like', '%' .$request->q. '%');
			// 	$category = "Search results for: '".$request->q."'";
			// } 
			if ($request->price != null) {
				$price = $request->price;
				$price = explode('-', $price);
				if ($price[1] == 100) {
					$products = $q->where('type', $url[1])
								->where('price', '<', 100);
								$category = "Price: $0 - $99.99";
				} elseif ($price[1] == 200) {
					$products = $q->where('type', $url[1])
								->whereBetween('price', array($price[0], $price[1]));
								$category = "Price: $100 - $199.99";
				} elseif ($price[0] == 200) {
					$products = $q->where('type', $url[1])
								->where('price', '>', 200);
								$category = "Price: $200 & above";
				}
			} else {
				if ($url[1] === 'designer-choice') {
					$products = $q->where('type', 'designer-choice');
					$category = "Designer's Choice";
				} elseif ($url[1] === 'arrangement') {
					$products = $q->where('type', 'arrangement');
					$category = "Arrangements";
				} elseif ($url[1] === 'bouquet') {
					$products = $q->where('type', 'bouquet');
					$category = "Bouquets";
				} elseif ($url[1] === 'plant') {
					$products = $q->where('type', 'plant');
					$category = "Plants";
				} elseif ($url[1] === 'flower') {
					$products = $q->where('type', 'flower');
					$category = "Flower";
				}
			}

			if($url[1] == 'christmas-flowers') {
				$title = 'Christmas';
				$metaData['title'] = $title . ' Flowers - Holiday Flowers - Cronulla Florists';
				$metaData['description'] = 'Brighten up your ' . $title . ' celebration with our wide range of ' . $title . ' flowers that includes classy bouquets, poses, Lilies, and floral gifts.';
				$metaData['keyword'] = $title.' Flowers';
				$products = Product::paginate(12);
				// return $products;
				return view('theme.product-events', ['products' => $products, 'metaData' => $metaData, 'sideprice' => $sideprice, 
								'title' => $title]);
			} else {
				$products = $products->orderBy('price', 'asc')->paginate(12);
				return view('theme.products' , ['products' => $products, 'category' => $category, 'metaData' => $metaData, 'sideprice' => $sideprice]);
			}
		}

		public function searchResult(Request $request) {
			$metaData = [];
			$metaData['title'] = '';
			$metaData['description'] = '';
			$metaData['keyword'] = '';
			if ($request->q) {
				$products = Product::where('name', 'like', '%' .$request->q. '%')
									->orderBy('price', 'asc')
									->paginate(12);
				$category = "Search results for: '".$request->q."'";
			}
			return view('theme.search_result' , ['products' => $products, 'category' => $category, 'metaData' => $metaData]);
		}
		
		public function product(Request $request) {
				//dd($request->id);
			$product = Product::where('slug', $request->slug)->first();
			// array for meta data
			$metaData = array();
			$metaData['title'] = $product->name.' - Cronulla Florists';
			$metaData['description'] = 'Check out our '.$product->name.' package available on same day flower delivery in Cronulla and Australia wide.';
			$metaData['keyword'] = $product->name.' cronulla florist, florist cronulla, flower delivery in cronulla';
					return view('theme.product-detail', ['product' => $product, 'metaData' => $metaData]);
				}

		public function categories(Request $request) {

			// array for meta data
			$metaData = array();
			$metaData['title'] = 'Categories- Cronulla Florists';
			$metaData['description'] = 'Check out our categories package available on same day flower delivery in Cronulla and Australia wide.';
			$metaData['keyword'] = 'Flower categories, Cronulla Florist, flower delivery in Cronulla';
			$products = Product::select('products.feature_image','products.type')
			->groupBy('type')
			->get();
			return view('theme.category', ['products' => $products, 'metaData' => $metaData]);
		}

		public function contact(Request $request) {
			// array for meta data
	        $metaData = array();
	        $metaData['title'] = 'Contact us - Customer Service - Cronulla Florists';
			$metaData['description'] = 'Contact us and shipping information for cronullaflorists.com.au or get in touch with our customer service.';
			$metaData['keyword'] = 'Contact-Us, Cronulla Florist, flower delivery in Cronulla ';
			return view('theme.contact', ['metaData' => $metaData]);
		}

		public function submitContactForm(Request $request) {
			// check for empty fields
	        $validator = $this->validate($request, [
	            'name'  => 'required|max:20',
	            'email' => 'required',
	            'comment' => 'required',
	        ]);
	        Mail::to('cronullaflorists@gmail.com')->send(new ContactForm($request));
	      	// get the form values and send email
	        Session::flash('success', 'Email sent successfully.');
	        return redirect (url('contact-us'));
		}

		public function AboutUs(Request $request) {
			// array for meta data
	        $metaData = array();
	        $metaData['title'] = 'Cronulla Florists - Same Day Deliver Flower Shop in Australia';
			$metaData['description'] = 'Cronulla Florists is the largest and most reliable online flower shop in Australia. Same Day Delivery anywhere in the country.';
			$metaData['keyword'] = 'About-Us, Cronulla Florist, flower delivery in Cronulla';
			return view('theme.about', ['metaData' => $metaData]);
		}

		public function faq(Request $request) {
			// array for meta data
	        $metaData = array();
	        $metaData['title'] = 'FAQS - Cronulla Florists';
			$metaData['description'] = 'Visit this page for frequesntly asked questions about material, shipping, delivery and other issues about flowers.';
			$metaData['keyword'] = 'FAQ,  Cronulla Florists, flower delivery in Cronulla';
			return view('theme.faq', ['metaData' => $metaData]);
		}

		public function customerServices(Request $request) {
			// array for meta data
	        $metaData = array();
	        $metaData['title'] = 'Customer Service - Cronulla Florists';
			$metaData['description'] = 'Feel free to contact our customer service for any kind of questions, querries or issues regarding flower delivery.';
			$metaData['keyword'] = 'Customer-Service,  Cronulla Florists, flower delivery in Cronulla';
			return view('theme.customer_services', ['metaData' => $metaData]);
		}

		public function addCart(Request $request) {
			// check for ajax call
			if($request->ajax()) {
				// define variables
				$message = [];
				$cartData = [];
				// find product
				$getProduct = Product::where('product_id', $request->id)->first();
				// check if item is aleady added in the cart
				if ($request->session()->has('cart_keys')) {		
					if (in_array($request->id, Session::get('cart_keys'))) {
						Cart::remove($request->id);
						// update Cart item
						$addCart = Cart::add(['id' => $request->id, 'name' => $getProduct->name, 'price' => $getProduct->price, 'quantity' => $request->qty,'attributes' => array('image' => 'https://'.$getProduct->feature_image, 'description' => $getProduct->description)]);
						if ($addCart) {									
							$message['success'] = "Congratulation! Product added to cart successfully.";	
							$message['cartQty'] = Cart::getTotalQuantity();
							$message['cartTotal'] = Cart::getSubTotal();
						} else {
							$message['error'] = "Sorry! Something went wrong.";
						}
					} else {
						// add cart item
						$addCart = Cart::add(['id' => $request->id, 'name' => $getProduct->name, 'price' => $getProduct->price, 'quantity' => $request->qty, 'attributes' => array('image' => 'https://'.$getProduct->feature_image, 'description' => $getProduct->description)]);
						if ($addCart) {
							$cartData = Session::get('cart_keys');
							$cartData[] = $request->id;
							Session::put('cart_keys', $cartData);			
							$message['success'] = "Congratulation! Product added to cart successfully.";
							$message['cartQty'] = Cart::getTotalQuantity();
							$message['cartTotal'] = Cart::getSubTotal();	
						} else {
							$message['error'] = "Sorry! Something went wrong.";
						}					
					}
				// if else ends
				}  else {
					// add cart item
					$addCart = Cart::add(['id' => $request->id, 'name' => $getProduct->name, 'price' => $getProduct->price, 'quantity' => $request->qty, 'attributes' => array('image' => 'https://'.$getProduct->feature_image, 'description' => $getProduct->description)]);
					if ($addCart) {
						$cartData[] = $request->id;
						Session::put('cart_keys', $cartData);			
						$message['success'] = "Congratulation! Product added to cart successfully.";
						$message['cartQty'] = Cart::getTotalQuantity();
						$message['cartTotal'] = Cart::getSubTotal();	
					} else {
						$message['error'] = "Sorry! Something went wrong.";
					}
				}
				
				// session if else ends
				// return response
				return response()->json($message);
			}
			// ajax ends	
		}
		// functions ends

		public function viewShoppingCart(Request $request) {
			// foreach(Cart::getContent() as $data) {
   //              dd($data->id);
   //      	}

			$viewCart = Cart::getContent();
			// array for meta data
	        $metaData = array();
	        $metaData['title'] = 'Check Your Cart - Cronulla Florists';
			$metaData['description'] = 'Look at the summary of your shopping cart, check the products present, conclude your purchase on Cronulla Florists';
			$metaData['keyword'] = 'View-Cart, Cronulla Florists, flower delivery in Cronulla';
			// dd($viewCart['R29']['attributes']['description']);
			// return cart data to cart view
			return view('theme.cart', ['viewCart' => $viewCart,'metaData' => $metaData]);
		}

		public function updateCart(Request $request) {
				// check ajax call
				if ($request->ajax()) {
					$message = [];
						$item = Product::where('product_id',$request->id)->first();
						if ($request->qty < 1) {
							$message['error'] = "Please select valid quantity.";
						} else {
							Cart::remove($request->id);
							// update Cart item
							$updateCart = Cart::add(['id' => $request->id, 'name' => $item->name, 'price' => $item->price, 'quantity' => $request->qty,'attributes' => array('image' => 'https://'.$item->feature_image, 'description' => $item->description)]);
							if ($updateCart) {
								$cartData = Cart::getContent();
								$message['success'] = $cartData;
								$message['cartQty'] = Cart::getTotalQuantity();
								$message['cartTotal'] = Cart::getSubTotal();
							} else {
								$message['error'] = "Sorry! Something went wrong.";
							}
						}
						// if else ends
					// return response
					return response()->json($message);
				}				
		}

		public function removeItem(Request $request) {
			$message = [];
			$removeItem = Cart::remove($request->id);
			if($removeItem) {
				$cartData = Session::get('cart_keys');
				if (($key = array_search($request->id, $cartData)) !== false) {
				    unset($cartData[$key]);
				    Session::put('cart_keys', $cartData);
				}

				$checkCart = Cart::isEmpty();
				if ($checkCart == true) {
					$request->session()->forget('cart_key');
					$message['empty'] = "No items available in the cart.";
				} else {
					$message['success'] = "Cart item removed successfully.";
					$message['cartQty'] = Cart::getTotalQuantity();
					$message['cartTotal'] = Cart::getSubTotal();
				}
			} else {
				$message['error'] = "Sorry! Something went wrong.";
			}
			// return response
			return response()->json($message);
		}

		public function removeCart(Request $request) {

			// remove cart one by one
			foreach($request->product_id as $value) {
				$removeItem = Cart::remove($value);
			}
			$request->session()->forget('cart_key');
			Session::flash('success', 'Cart remove successfully.');
			return redirect(url('shopping-cart'));
		}

		public function getCartData(Request $request) {
			$message = [];
			if (Cart::isEmpty() == false) {
				$message['cartData'] = Cart::getContent();
				$message['cartQty'] = Cart::getTotalQuantity();
				$message['cartTotal'] = Cart::getSubTotal();

			} else {
				$message['empty'] = "Cart is Empty";
			}
			return response()->json($message);
		}

		public function checkout(Request $request) {
			$viewCart = "";
			if(Cart::isEmpty() == true) {
				$viewCart = "";
			} else {
				$viewCart = Cart::getContent();
			}
			// array for meta data
	        $metaData = array();
	        $metaData['title'] = 'Checkout - Cronulla Florists';
			$metaData['description'] = 'Thank you for shopping with Cronulla Florists, we hope you enjoy our best quality products and same day delivery in Australia.';
			$metaData['keyword'] = 'Check-Out,  Cronulla Florists, flower delivery in Cronulla';
			return view('theme.checkout', ['viewCart' => $viewCart,'metaData' => $metaData]);
		}


    // sitemap
    public function sitemap(Request $request) {
        $productUrl = Product::all();
        return response()->view('sitemap', [
            'productUrl' => $productUrl,
        ])->header('Content-Type', 'text/xml;charset=utf-8');
	}
	
	public function terms(Request $request) {
		// array for meta data
		$metaData = array();
		$metaData['title'] = 'Terms and Conditions Policy - Cronulla Florists';
		$metaData['description'] = 'Our Terms and Conditions Policy about sending flowers online and same day flower delivery in Cronulla, Australia.';
		$metaData['keyword'] = 'Terms and Conditions Policy - Cronulla Florists';
		return view('theme.terms', ['metaData' => $metaData]);
	}

	public function privacy(Request $request) {
		// array for meta data
		$metaData = array();
		$metaData['title'] = 'Privacy Policy - Cronulla Florists Delivery Network';
		$metaData['description'] = "Cronulla Florists' Privacy Policy and safe handling of information and payment details. Read our FAQs or contact us for more information.";
		$metaData['keyword'] = 'Privacy Policy - Cronulla Florists Delivery Network';
		return view('theme.privacy', ['metaData' => $metaData]);
	}

	public function substitution(Request $request) {
		// array for meta data
		$metaData = array();
		$metaData['title'] = 'Substitutions Policy - Cronulla Florists Delivery Network';
		$metaData['description'] = "Cronulla Florists is one of Australia's largest florist network and offers flower delivery in the country. Read our Substitution Policy.";
		$metaData['keyword'] = 'Substitutions Policy - Cronulla Florists Delivery Network';
		return view('theme.substitution', ['metaData' => $metaData]);
	}

	public function disclaimer(Request $request) {
		// array for meta data
		$metaData = array();
		$metaData['title'] = 'Terms of Use - Cronulla Florists Delivery Network';
		$metaData['description'] = "Cronulla Florists Terms of Use about online flowers delivery and same day flower delivery in Australia.";
		$metaData['keyword'] = 'Terms of Use - Cronulla Florists Delivery Network';
		return view('theme.disclaimer', ['metaData' => $metaData]);
	}

	public function productListing(Request $request) {
		$url = request()->segments();
		$url = implode('-',$url);
		$title = explode('-', $url);
		$title = ucfirst($title[2]);
		$sideprice = [];
		$sideprice['low'] = Product::where('price', '<', 100)
							->count();
		$sideprice['medium'] = Product::whereBetween('price', array(100, 199.99))
							->count();
		$sideprice['high'] = Product::where('price', '>', 200)
							->count();
		$metaData = array();
		$metaData['title'] = 'Flower Delivery '. $title . ' - Send Flowers to ' . $title .' - Cronulla Florists';
		$metaData['description'] = "Flower Delivery " . $title ." provides same-day flower delivery in " . $title .". Send flowers to your loved one in Australia. Christmas flowers are also available.";
		$metaData['keyword'] = 'Flower delivery '. $title;
		$products = Product::paginate(12);
		// return $products;
		return view('theme.products-listing', ['products' => $products, 'metaData' => $metaData, 'sideprice' => $sideprice, 
						'title' => $title]);
	}

}
