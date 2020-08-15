@extends('theme.layout.master')
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h1>Shopping Cart</h1>
</div>
        </div>
      </div>
    </div>
  </div>
       
<!-- BEGIN Main Container -->   
    <div class="main-container col1-layout wow bounceInUp animated">     
              
	   <div class="main container">                     
        <div class="cart wow bounceInUp animated">
        <div class="table-responsive shopping-cart-tbl  container">
    @if (\Cart::isEmpty() == true)
    <div class="col-sm-6 col-sm-offset-3">
        <img src="{{asset('theme/images/empty_cart.png')}}" class="shoppimg" style="width:80%;margin-left: 10%;" alt="Flower Patels" title="Flower Patels">
    </div>
     @else
     <div class="col-sm-6 col-sm-offset-3 cart-empty" style="display:none;">
        <img src="{{asset('theme/images/empty_cart.png')}}" class="shoppimg" style="width:80%;margin-left: 10%;" alt="Flower Patels" title="Flower Patels">
    </div>    
    <form action="remove-cart" method="post" id="cart-data">
        {{csrf_field()}}
        <fieldset>
            <table id="shopping-cart-table" class="data-table cart-table table-striped">
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
                            <button type="button" title="Continue Shopping" class="button btn-continue" onclick="window.location.href = '/categories';"><span>
                                <span>Continue Shopping</span></span>
                            </button>

                            <button type="submit" name="clear_cart_action" value="empty_cart" title="Clear Cart" class="button btn-empty" id="empty_cart_button"><span><span>Clear Cart</span></span>
                            </button>
                  
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
                        <img src="{{$cart->attributes->image}}" width="75" alt="{{$cart->name}}" class="item-image{{$key}}" title="{{$cart->name}}">
                        @else
                        <img src="{{asset('theme/images/product-image.jpg')}}" width="75" alt="Flower Patels" title="Flower Patels">
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
                        <a href="#" id="item-id{{$key}}" data-id="{{$key}}" title="Remove item" class="button remove-item"><span><span>Remove item</span></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table> 
        </fieldset>   
    </form>
    @endif
</div>

   <!-- BEGIN CART COLLATERALS -->

@if (\Cart::isEmpty() == false)
<div class="cart-collaterals container cart-checkout"> 
<!-- BEGIN COL2 SEL COL 1 -->

<div class="row">

<div class="col-sm-offset-8 col-sm-4">
 <div class="totals">
<h3>Shopping Cart Total</h3>
<div class="inner">

    <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
        <tfoot >
            <tr>
                <td style="" class="a-left" colspan="1" style="padding-top: 10px;">
                    <strong>SubTotal</strong>
                </td>
                <td style="" class="a-right" style="padding-top: 10px;">
                    <strong><span class="price checkout-price"> ${{\Cart::getSubTotal()}}</span></strong>
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
<button id="checkout-button" type="button" title="Proceed to Checkout" class="button btn-proceed-checkout"><span><a href="{{url('/checkout')}}" title="Proceed to Checkout">Proceed to Checkout</a></span></button>
</li>
</ul>                
</div><!--inner-->
 </div><!--totals-->
</div> <!--col-sm-4-->


</div> <!--cart-collaterals-->

</div>
@endif

</div>  <!--cart-->
</div><!--main-container-->
</div>

@endsection