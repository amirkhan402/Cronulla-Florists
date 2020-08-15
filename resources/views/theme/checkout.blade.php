@extends('theme.layout.master') @section('content')
@section('custom-style')
<style>
    /* @import url(https://fonts.googleapis.com/css?family=Lato:400,900,700,300); */
.heading4{font-size:18px;font-weight:400;font-family:'Lato', sans-serif;color:#111111;margin:0px 0px 5px 0px;}
.heading1{font-size:30px;line-height:20px;font-family:'Lato', sans-serif;text-transform:uppercase;color:#1b2834;font-weight:900;}
.content-quality{float:left;width:193px;}
.content-quality p{margin-left:10px;font-family:'Open Sans', sans-serif;font-size:14px;font-weight:600;line-height:17px;}
.content-quality p span{display:block;}
.tabtop li a{font-family:'Lato', sans-serif;font-weight:700;color:#1b2834;border-radius:0px;margin-right:22.008px;border:1px solid #ebebeb !important;}
.tabtop .active a:before{content:"♦";position:absolute;top:15px;left:82px;color:#cc053e;font-size:30px;}
.tabtop li a:hover{color:#cc053e !important;text-decoration:none;}
.tabtop .active a:hover{color:#fff !important;}
.tabtop .active a{background-color:#cc053e !important;color:#FFF !important;}
.margin-tops{margin-top:30px;}
.tabtop li a:last-child{padding:10px 70px;}
.thbada{padding:10px 28px !important;}
section p{font-family:'Lato', sans-serif;}
.margin-tops4{margin-top:20px;}
.tabsetting{border-top:5px solid #ebebeb;padding-top:6px;}
.services{background-color:#d4d4d4;min-height:710px;padding:65px 0 27px 0;}
.services a:hover{color:#000;}
.services h1{margin-top:0px !important;}
.heading-container p{font-family:'Lato', sans-serif;text-align:center;font-size:16px !important;text-transform:uppercase;}
button.button.btn-proceed-checkout:before {
    content: "";
}
</style>
@endsection
<div class="page-heading">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h1>Checkout</h1>
                    </div>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--breadcrumbs-->
</div>

<!-- BEGIN Main Container col2-right -->
<div class="main-container col2-right-layout">
    <div class="main container container-checkout">
        <div class="row">
            <section class="col-main col-sm-12 wow bounceInUp animated animated">
                    <div class="tabbable-panel margin-tops4 ">
                        <div class="tabbable-line">
                              <ul class="nav nav-tabs tabtop  tabsetting showdesk">
                                <li class="active"> <a href="#tab_default_1" data-toggle="tab"> Recipient Details </a> </li>
                                <li> <a href="#tab_default_2" class="tab-click" data-toggle="tab"> Delivery Details</a> </li>
                                <li> <a href="#tab_default_3" class="tab-click" data-toggle="tab"> Your Details </a> </li>
                                <li> <a href="#tab_default_4" class="tab-click" data-toggle="tab"> Payment</a> </li>
                              </ul>
                              <ul class="nav nav-tabs tabtop  tabsetting showmobile">
                                <li class="active"> <a href="#tab_default_1" data-toggle="tab"> 1</a> </li>
                                <li> <a href="#tab_default_2 " class="tab-click" data-toggle="tab">2</a> </li>
                                <li> <a href="#tab_default_3 " class="tab-click" data-toggle="tab"> 3 </a> </li>
                                <li> <a href="#tab_default_4 " class="tab-click" data-toggle="tab"> 4</a> </li>
                              </ul>
                                <form id="co-billing-form" method="post">
                                    {{csrf_field()}}
                                <div class="tab-content margin-tops">
                                    <input type="hidden" name="user_type" @if (\Session::get('user_id')) value="{{\Session::get('user_id')}}" @else value="guest_user" @endif id="user_id">
                                    <input type="hidden" name="token_response" id="token_response" value="">
                                    <input type="hidden" name="s_id" id="s_id" value="">
                                    
                                    <div class="tab-pane active fade in" id="tab_default_1">
                                      <div class="col-md-4">
                                        <div class="row"> <img src="{{url('theme/images/cart.png')}}" class="img-responsive"> </div>
                                      </div>
                                      <div class="col-md-8">
                                
                                                    <fieldset class="group-select">
                                                        <ul class="">
                                                            <li id="billing-new-address-form">
                                                             <fieldset>
                                                                <ul>
                                                                    <li class="wide">
                                                                        <label for="billing:Receipient Name">Recipient Full Name<em ></em></label><br>
                                                                        
                                                                        <input type="text" id="rname" name="recipient_name" value="{{old('recipient_name')}}" title="Recipient  Name" maxlength="255" class="input-text required-step-1" placeholder="e.g.  Jane Smith">

                                                                    </li>  
                                                                    <!-- <li class="wide">

                                                                        <div class="customer-name">
                                                                            <div class="input-box name-firstname">
                                                                                <label for="billing:firstname">Recipient Full Name<span class="required">*</span></label>
                                                                                <div class="input-box1">
                                                                                    <input type="text" id="recipient_firstname" name="rname" value="{{old('recipient_firstname')}}" title="First Name" maxlength="255" class="input-text required-step-1">

                                                                                </div>
                                                                            </div>
                                                                            <div class="input-box name-lastname">
                                                                                <label for="billing:lastname">Last Name<span class="required">*</span></label>
                                                                                <div class="input-box1">
                                                                                    <input type="text" id="recipient_lastname" name="recipient_lastname" value="{{old('recipient_lastname')}}" title="Last Name" maxlength="255" class="input-text required-step-1">
                                                                                </div>
                                                                            </div> 
                                                                        </div>
                                                                    </li> -->
                                                                    
                                                                    <li class="fields">
                                                                        <div class="input-box">
                                                                            <label for="billing:telephone">Telephone<em class="required">*</em></label>
                                                                            
                                                                            <input type="text" name="recipient_telephone" value="{{old('recipient_telephone')}}" title="Telephone" class="input-text required-step-1" id="telephone" placeholder="Telephone">
                                                                        </div>
                                                                        <div class="field">
                                                                            <label for="billing:occassion">Occasion</label><br>
                                                                            <div class="input-box">
                                                                                <select id="deliver_occassion" name="deliver_occassion" title="Occassion" class="validate-select">

                                                                                    <option value="Birthday">Birthday</option>
                                                                                    <option value="Romantic Gift">Romantic Gift</option>
                                                                                    <option value="Sympathy">Sympathy</option>
                                                                                    <option value="Just Because">Just Because</option>
                                                                                    <option value="Get Well">Get Well</option>
                                                                                    <option value="New Baby">New Baby</option>
                                                                                    <option value="Anniversary">Anniversary</option>
                                                                                    <option value="Thank You">Thank You</option>
                                                                                    <option value="Congratulations">Congratulations</option>
                                                                                    <option value="Funeral">Funeral</option>
                                                                                    <option value="Sorry">Sorry</option>
                                                                                    <option value="Wedding">Wedding</option>
                                                                                    <option value="Farewell">Farewell</option>
                                                                                    <option value="Friendship">Friendship</option>
                                                                                    <option value="House Warming">House Warming</option>
                                                                                    <option value="Christmas">Christmas</option>
                                                                                    <option value="Valentine's Day">Valentine's Day</option>
                                                                                    <option value="Mother's Day">Mother's Day</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select> 
                                                                            </div>
                                                                        </div>  
                                                                    </li>
                                                                    <li class="wide">
                                                                        <label for="billing:street1">Card Message<em class="required">*</em></label><br>
                                                                        
                                                                        <input type="text" title="Message" name="delivery_message" id="delivery_message" value="{{old('delivery_message')}}" class="input-text required-step-1" placeholder="Card Message">
                                                                    </li>  
                                                                                                          
                                                                </ul>
                                                        
                                                            </fieldset>
                                                            </li>  
                                                        </ul>
                                                            <div class="buttons-set" id="billing-buttons-container">
                                                                <p class="required">* Required Fields</p>
                                                                <button type="button" title="Next" class="button next"><span>Next</span></button>
                                                            </div>
                                                    </fieldset>
                                    </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab_default_2">
                                        <div class="col-md-4">
                                            <div class="row"> <img src="{{url('theme/images/cart.png')}}" class="img-responsive"> </div>
                                        </div>
                                        <div class="col-md-8">
                                            <fieldset class="group-select">
                                                <ul class="">
                                                    <li id="billing-new-address-form">
                                                     <fieldset>
                                                        <ul>
                                                            <li class="wide">
                                                                <label for="billing:address">Address<em class="required">*</em></label><br>                                                            
                                                                <textarea type="text" title="Street Address" name="address" id="address" value="" class="input-text required-step-2" placeholder="Address">{{old('address')}}</textarea>
                                                            </li>
                                                    
                                                            <li class="fields">
                                                            <div class="input-box">
                                                                    <label for="billing:state">State<em class="required">*</em></label>
                                                                    <select name="state" value="{{old('state')}}" class="input-text required-step-2" id="state">
                                                                    <option value="">-- Select State --</option>
                                                                        <option value="Australian Capital Territory">Australian Capital Territory</option>
                                                                        <option value="New South Wales">New South Wales</option>
                                                                        <option value="Northern Territory">Northern Territory</option>
                                                                        <option value="Queensland">Queensland</option>
                                                                        <option value="South Australia">South Australia</option>
                                                                        <option value="Tasmania">Tasmania</option>
                                                                        <option value="Victoria">Victoria</option>
                                                                        <option value="Western Australia">Western Australia</option>
                                                                    </select>
                                                                        <!-- <input type="text" title="State" name="state" value="{{old('state')}}" class="input-text required-step-2" id="state"> -->
                                                                </div>
                                                                <div class="input-box">
                                                                    <label for="billing:city" class="label-margin">City<em class="required">*</em></label>
                                                                    <input type="text" title="City" name="city" value="{{old('city')}}" class="input-text required-step-2" id="city" placeholder="City Name">
                                                                </div>

                                                                                                                             
                                                            </li>
                                                            <li class="wide">
                                                                
                                                                    <label for="billing:postal">Postal Code<em class="required">*</em></label>  
                                                                                                                
                                                                         <input type="text" title="postal" name="postal_code" value="{{old('postal_code')}}" class="input-text required-step-2" id="postal" placeholder="Postal Code">
                                                                </li>
                                                            <li class="fields">
                                                            <div class="input-box">
                                                                <label for="billing:date">Delivery Date<em class="required">*</em></label><br>                                                            
                                                            
                                                                <input type="date" id="txtDate" title="Delivery Date" name="date" id="datepicker112" value="{{old('date')}}" class="input-text  required-step-2 date-inputs" required />

                                                            
                                                            </div> 
                                                            <div class="input-box">
                                                                <label for="billing:time" class="label-margin">Delivery Time<em class="required">*</em></label><br>                                                            
                                                                <input type="time" title="Delivery Time" name="time" id="time" value="{{old('time')}}" class="input-text  required-step-2 date-inputs " >
                                                            </div>
                                                            </li>   


                                                            <li class="wide">
                                                                <label for="billing:time">If recipient is unavailable<em class="required">*</em></label><br>                                                            
                                                                <select style="width: 98%" id="delivery_availability" name="delivery_availability" title="Occassion" class="validate-select required-step-2">
                                                                    <option value="Leave at front door">Leave at front door</option>
                                                                    <option value="Leave at reception">Leave at reception</option>
                                                                    <option value="Return to shop">Return to shop</option>
                                                                </select> 
                                                            </li>                               
                                                        </ul>
                                                
                                                    </fieldset>
                                                    </li>  
                                                </ul>
                                                    
                                                <p class="required">* Required Fields</p>
                                                <button type="button" title="Previous" class="button previous"><span>Previous</span></button>
                                                <button type="button" title="Next" class="button next"><span>Next</span></button>
                                                   
                                            </fieldset>             
                                        </div>
                                        <!-- col-md-8 -->  
                                    </div>

                                    <div class="tab-pane fade" id="tab_default_3">
                                      <div class="col-md-4">
                                       <div class="row"> <img src="{{url('theme/images/cart.png')}}" class="img-responsive"> </div>
                                      </div>
                                      <div class="col-md-8">
                                        <fieldset class="group-select">
                                            <ul class="">
                                                <li id="billing-new-address-form">
                                                 <fieldset>
                                                    <ul>
                                                        <!-- <li class="fields">
                                                            <div class="customer-name">
                                                                <div class="input-box name-firstname">
                                                                    <label for="billing:firstname">Your First Name<span class="required">*</span></label>
                                                                    <div class="input-box1">
                                                                        <input type="text" id="sender_firstname" name="sender_firstname" value="{{old('sender_firstname')}}" title="First Name" maxlength="255" class="input-text required-step-3">

                                                                    </div>
                                                                </div>
                                                                <div class="input-box name-lastname">
                                                                    <label for="billing:lastname">Your Last Name<span class="required">*</span></label>
                                                                    <div class="input-box1">
                                                                        <input type="text" id="sender_lastname" name="sender_lastname" value="{{old('sender_lastname')}}" title="Last Name" maxlength="255" class="input-text required-step-3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li> -->
                                                        <li class="wide">
                                                                        <label for="billing:Sender Name">Sender Full Name<em ></em></label><br>
                                                                        
                                                                        <input type="text" id="sender_name" name="sender_name" value="{{old('sender_name')}}" title="Sender Name" maxlength="255" class="input-text required-step-3">


                                                                    </li>
                                                        <li class="fields">
                                                            <div class="customer-name">
                                                                <div class="input-box name-firstname">
                                                                    <label for="billing:firstname">Sender Email<span class="required">*</span></label>
                                                                    <div class="input-box1">
                                                                        <input type="email" id="sender_email" name="sender_email" value="{{old('sender_email')}}" title="Your Email" maxlength="255" class="input-text required-step-3">
                                                                    </div>
                                                                </div>
                                                                <div class="input-box name-lastname " >
                                                                    <label for="billing:lastname" class="label-margin">Sender Phone<span class="required">*</span></label>
                                                                    <div class="input-box1">
                                                                        <input type="tel" id="sender_phone" name="sender_phone" value="{{old('sender_phone')}}" title="Your Phone" maxlength="255" class="input-text required-step-3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <hr>
                                                        <h3>Payment Method</h3>
                                                        <li class="">
                                                        <div class="input-box">
                                                            <input type="radio" name="cart_billing_method" id="billing_method_paypal" value="paypal" title="Pay with Paypal" checked="checked" class="radio payment_method">
                                                            <label for="billing:use_for_paypal"><i class="fa fa-paypal" style="font-size: 12px;"></i> Pay with Paypal</label>
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="radio" name="cart_billing_method" id="billing_method_stripe" value="stripe" title="Pay with Stripe" class="radio payment_method">
                                                            <label for="billing:use_for_stripe" class="stripe-class"><i class="fa fa-cc-stripe" style="font-size: 12px;"></i> Pay with Credit Card</label>
                                                        </div>
                                                        </li>
                                                    </ul>                                        
                                                </fieldset>
                                                </li>  
                                            </ul>                                            
                                            <p class="required">* Required Fields</p>
                                            <button type="button" title="Previous" class="button previous"><span>Previous</span></button>
                                            <button type="button" title="Next" class="button next"><span>Next</span></button>
                                        </fieldset>          
                                    </div>
                                         
                                    </div>
                                    <div class="tab-pane fade" id="tab_default_4">
                                      <div class="col-md-12 column-nopad">
                                            <div class="main-container col1-layout wow bounceInUp animated">     
                  
                                                    <div class="main container column-nopad">                     
                                                     <div class="cart wow bounceInUp animated">
                                                     <div class="table-responsive shopping-cart-tbl  container">
                                                
                                                  <div class="col-sm-6 col-sm-offset-3 cart-empty" style="display:none;">
                                                     <img src="{{asset('theme/images/success_order.png')}}" style="width:80%" class="shoppimg" alt="Flower Patels">
                                                 </div>
                                                 <form action="remove-cart" method="post" class="cart-data">
                                                     {{csrf_field()}}
                                                     <fieldset class="cart-data">
                                                         <table style="width: 95%" id="shopping-cart-table" class="data-table cart-table table-striped">
                                                             <thead>
                                                                 <tr class="first last">
                                                                     <th rowspan="1">&nbsp;</th>
                                                                     <th rowspan="1"><span class="nobr">Product Name</span></th>
                                                                     <th class="a-center" colspan="1"><span class="nobr">Unit Price</span></th>
                                                                     <th rowspan="1" class="a-center">Qty</th>
                                                                     <th class="a-center" colspan="1">Subtotal</th>
                                                                     <th rowspan="1" class="a-center">&nbsp;</th>
                                                                 </tr>
                                                             </thead>
                                                             <tfoot>
                                                                 <tr class="first last">
                                                                     <td colspan="7" class="last">
                                                                     </td>
                                                                 </tr>
                                                             </tfoot>
                                                         <tbody>
                                             
                                                             @foreach ($viewCart as $key => $cart)                   
                                                             <tr class="first last odd" id="{{$key}}">
                                                                 <input type="hidden" name="product_id[{{$key}}]" class="product-id{{$key}}" value="{{$key}}">
                                                                 <td class="image hidden-table">
                                                                     <a href="#" title="{{$cart->name}}" class="product-image">
                                                                     @if ($cart->attributes->image != null)
                                                                     <img src="{{$cart->attributes->image}}" width="75" alt="{{$cart->name}}" class="item-image{{$key}}">
                                                                     @else
                                                                     <img src="{{asset('theme/images/product-image.jpg')}}" width="75" alt="Flower Patels">
                                                                     @endif
                                                                     </a>
                                                                 </td>
                                                                 <td>
                                                                     <h2 class="product-name item-name{{$key}}">
                                                                         <a href="#">{{$cart->name}}</a>
                                                                     </h2>
                                                                 </td>
                                                               
                                                                 <td class="hidden-table">
                                                                     <span class="cart-price">
                                                                         <span class="price item-price{{$key}}">{{$cart->price}}</span>                
                                                                     </span>
                                                                 </td>
                                                                 <td class="a-center movewishlist">
                                                                     <input type="number" name="quantity[{{$key}}]" value="{{$cart->quantity}}" size="4" title="Qty" class="input-text qty item-qty{{$key}}" maxlength="12" min="1" onchange="updateCart('{{$key}}')">
                                                                 </td>
                                                                 <td class="movewishlist">
                                                                     <span class="cart-price">
                                                                         <span class="price item-total{{$key}}">{{$cart->price * $cart->quantity}}</span>                            
                                                                     </span>
                                                                 </td>
                                                                 <td class="a-center last">
                                                                     <a href="#" id="item-id{{$key}}" data-id="{{$key}}" title="Remove item" class="remove-item-order"><i class="fa fa-trash" style="color: #000;"></i></a>
                                                                 </td>
                                                             </tr>
                                                             @endforeach
                                                         </tbody>
                                                         </table> 
                                                     </fieldset>   
                                                 </form>
                                             </div>
                                             
                                                <!-- BEGIN CART COLLATERALS -->
                                             
                                             <div class="cart-collaterals container cart-checkout"> 
                                             <!-- BEGIN COL2 SEL COL 1 -->
                                             
                                             <div class="row" style="width: 95%">
                                             
                                             <div class="col-sm-offset-8 col-sm-4">
                                              <div class="totals">
                                             <h3>Shopping Cart Total</h3>
                                             <div class="inner">
                                             
                                                 <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                                     <tfoot style="margin-top:5px">
                                                         <tr>
                                                             <td style="" class="a-left" colspan="1">
                                                                 <strong>SubTotal</strong>
                                                             </td>
                                                             <td style="" class="a-right">
                                                                 <strong>$<span class="price checkout-price"> {{\Cart::getSubTotal()}}</span></strong>
                                                             </td>
                                                         </tr>
                                                     </tfoot>
                                                     <tbody>
                                                         <tr>
                                                             <td style="" class="a-left" colspan="1">
                                                                 Quantity    
                                                             </td>
                                                             <td style="" class="a-right">
                                                                 <span class="price checkout-qty">{{\Cart::getTotalQuantity()}}</span>
                                                             </td>
                                                         </tr>
                                                     </tbody>
                                                 </table>
                                               
                                             <ul class="checkout">           
                                             <li>
                                             <button id="checkout-button" type="button" title="Proceed to Checkout" class="button btn-proceed" onclick="checkOrderForm()" style="color: #fff; padding: 15px 20px 21px; font-size: 50px; width: 100%; background: #88be4c;"><span>Pay Now</span></button>
                                             </li>
                                             </ul>
                                             </div><!--inner-->
                                              </div><!--totals-->
                                             </div> <!--col-sm-4-->
                                             
                                             
                                             </div> <!--cart-collaterals-->
                                             
                                             </div>
                                             
                                             </div>  <!--cart-->
                                             </div><!--main-container-->
                                             </div>
                                          
                                        </div>
                                     
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                <br>
            </section>
        </div>
        <!--row-->
    </div>
    <!--main-container-inner-->
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection 
