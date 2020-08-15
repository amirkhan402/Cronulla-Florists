@extends('theme.layout.master')
@section('head-style')
<!-- Event snippet for Purchase conversion page -->
<script>
gtag('event', 'conversion', {
'send_to': 'AW-686937235/kwTjCJaY0LcBEJOpx8cC',
'transaction_id': ''
});
</script>

<script>
  gtag('event', 'purchase', {
    "transaction_id": "",
    "affiliation": "Google online store",
    "value": "{{\Cart::getSubTotal()}}",
    "currency": "AUD",
    "tax": 0,
    "shipping": 0,
    "items": [
      @foreach(\Cart::getContent() as $key => $cart)
      {
        "id": "{{$cart->id}}",
        "name": "{{$cart->name}}",
        "list_name": "Search Results",
        "brand": "Cronulla Florists",
        "category": "",
        "variant": "",
        "list_position": 1,
        "quantity": "{{$cart->quantity}}",
        "price": "{{$cart->price}}"
      },
      @endforeach 
    ]
  });
</script>
      @foreach(\Cart::getContent() as $key => $cart)
        {{\Cart::remove($cart['id'])}}
      @endforeach 
@endsection
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
        <h1 style="display:none">Thank You</h1>
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
                    <div class="col-sm-6 col-sm-offset-3">
                        <img src="{{asset('theme/images/success_order.png')}}"  style="width:80%;margin-left: 10%;" class="shoppimg" alt="Flower Patels" title="Flower Patels">
                    </div>
                </div>
            </div>  <!--cart-->
        </div><!--main-container-->
    </div>
@endsection