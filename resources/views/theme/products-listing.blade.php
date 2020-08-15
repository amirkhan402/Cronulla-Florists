@extends('theme.layout.master')
@section('content')
<div class="page-heading">
        <div class="breadcrumbs">
          <div class="container">
            <div class="row">
              <div>
                <ul>
                
                  <li class="home"> <a href="{{ url('/') }}" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
                  <!-- <li class="category1599"> <a href="{{ url('categories') }}" title="">Categories</a> <span>&rsaquo; </span> </li> -->
                  <li class="category1601"> <strong>Flower Delivery {{$title}}</strong> </li>
                </ul>
              </div>
              <!--col-xs-12--> 
         @php
         $pageUrl = request()->segment(2);
          $grid = url('category/'.$pageUrl);
          $list = url('category/'.$pageUrl.'?product_list_mode=list');
            $price1 = "";
            $price2 = "";
            $price3 =  "";
          if (isset(request()->product_list_mode)) {
            $price1 = url('/category/'.$pageUrl.'?product_list_mode=list&&price=-100');
            $price2 = url('/category/'.$pageUrl.'?product_list_mode=list&&price=100-200');
            $price3 = url('/category/'.$pageUrl.'?product_list_mode=list&&price=200-');
          } else {
            $price1 = url('/category/'.$pageUrl.'?price=-100');
            $price2 = url('/category/'.$pageUrl.'?price=100-200');
            $price3 = url('/category/'.$pageUrl.'?price=200-');
          }
          //if (isset(request()->q)) {
          //  $grid = url('category/'.$pageUrl.'?q='.request()->q);
          //  $list = url('category/'.$pageUrl.'?q='.request()->q.'&&product_list_mode=list');
         // }
        @endphp       
        <div class="page-title">
        <h1>Flower Delivery {{$title}}</h1>
        </div>
         <!--row--> 
         </div>
          </div>
          <!--container--> 
        </div>
      </div>
      <!--breadcrumbs--> 
      <!-- BEGIN Main Container col2-left -->
      <section class="main-container col2-left-layout bounceInUp animated"> 
        <!-- For version 1, 2, 3, 8 --> 
        <!-- For version 1, 2, 3 -->
        <div class="container">
          <div class="row">
            <div class="col-main product-grid">
            <div class="pro-coloumn">
              <article class="col-main">
              
                <div class="col-main col-sm-9 col-sm-push-3 product-grid">
                @if(!$products->isEmpty())
                <div class="toolbar">
                <div class="pager">
                  @if($products->total() > 12)
                  <div class="pages">
                    <ul class="pagination">
                      <li class="active">
                        {{ $products->appends(['q' => Request::get('q'), 'price' => Request::get('price'), 'product_list_mode' => Request::get('product_list_mode')])->links('pagination::default') }}
                      </li>
                    </ul>
                  </div>
                  @endif              
                  <!-- <div class="sorter">
                    <div class="view-mode">
                      @if (isset(request()->product_list_mode))
                        <a href="{{$grid}}" title="List" class="button-list">Grid</a> 
                        <span title="Grid" class="button button-active button-grid">List</span>
                      @else
                        <span title="Grid" class="button button-active button-grid">Grid</span>
                        <a href="{{$list}}" title="List" class="button-list">List</a>
                      @endif
                    </div>
                  </div> -->
                  </div>
                </div>
                @endif
                <!-- check which mode is selected -->
                  <!-- Grid ends here -->
                   <ol class="products-list" id="products-list">
                      @if(!$products->isEmpty())
                      @foreach($products as $product)
                        <li class="item first">
                            <div class="product-image">
                                <a href="{{url('product/'.$product['slug'])}}" title="{{$product->name}}"> <img class="featureimage1" src="{{'https://'.$product->feature_image}}" alt="{{$product->name}}"> 
                                <!-- <img style="display:none" class="secondaryimage1" src="{{'https://'.$product->secondary_image}}" alt="{{$product->name}}">  -->
                              </a>
                            </div>
                            <div class="product-shop">
                                <h2 class="product-name"><a href="{{url('product/'.$product['slug'])}}" title="{{$product->name}}">{{$product->name}}</a></h2>
                              
                                <div class="desc std">
                                    <p>{{$product->description}}<a class="link-learn" title="">Learn More</a> </p>
                                </div>
                                <div class="price-box">
                                    <p class="special-price"> <span class="price-label"></span>{{$product->currency}}<span id="product-price-212" class="price"> {{$product->price}}</span> </p>
                                </div>
                                <div class="actions">
                                    <a href="{{url('product/'.$product['slug'])}}" class="button btn-cart btncart-home" type="button" title="" data-original-title="Add to Cart">Add to cart </a>
                                    <!-- <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist"><span>Add to Wishlist</span></a> </span> -->

                                </div>
                            </div>
                        </li>
                        @endforeach
                        @else
                        <div class="row">
                          <div class="col-lg-12 text-center">
                          <img style="height: 388px ; width: 40%" title="no products" src="{{asset('theme/images/no-products.png')}}" alt="no products">
                          </div>
                        </div>
                        @endif
                    </ol>

                    <!-- List ends here -->
                  @if($products->total() > 12)
                  <div class="toolbar">  
                  <div class="pager">
                    <div class="pages">
                      <ul class="pagination">
                        <li class="active">
                          {{ $products->appends(['q' => Request::get('q'), 'price' => Request::get('price'), 'product_list_mode' => Request::get('product_list_mode')])->links('pagination::default') }}
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endif
                <h2 class="terms-heading">Send Flowers to {{$title}}</h2>
                <p class="new-para-terms">
                With Cronulla Florists, you can Buy cheap flowers online in {{$title}} for Christmas delivery, you also can avail the {{$title}} Australia florist same-day delivery option. 
                </p>
                <p class="new-para-terms">
                Feel free to send flowers to {{$title}} Australia from the UK, USA, NZ, India, China, Indonesia, Malaysia any destination overseas or within Australia.
                </p>
                <p class="new-para-terms">
                Cronulla Florists arranged free "flower delivery included", no more to pay fully inclusive cheaper prices, flowers made to order. 
                </p>
                <p class="new-para-terms">
                Whatever the occasion, send flowers to {{$title}} for Christmas, valentines’ delivery, mothers’ day, birthday, anniversary, get well, funeral wreath spray, a gift basket.
                </p>
                <p class="new-para-terms">
                If you need to send sympathy flowers to {{$title}} for a funeral, send get well soon flowers or acknowledge a birth for a loved couple for {{$title}} hospital delivery, our same-day delivery option is ideal for you. furthermore, you can have birthday or anniversary flowers delivered quickly through a rush order for any kind of urgent event. 
                </p>
                <!-- <p class="new-para-terms">
                Same day delivery & Christmas flower delivery cut of time and dates apply.
                </p>
                <p class="new-para-terms">
                Buy flowers to send to {{$title}} free delivery same day florist flowers made to order.
                </p> -->
                <p class="new-para-terms">
                Buy flowers {{$title}} delivering to {{$title}} CBD, Cullen Bay, Durack, Nightcliff all suburbs, major Australia towns Alice Springs, etc... or overseas, whatever the occasion, mothers’ day, valentines’ day, birthday, anniversary, get well, funeral wreath spray, gift baskets. 
                </p>
                <p class="new-para-terms">
                Send flowers to {{$title}} and order flowers online, via local Cronulla Florists, with cheap flower delivery across {{$title}} and throughout Australia ordering from anywhere in Australia or overseas. 
                </p>
                <p class="new-para-terms">
                Sending flowers to {{$title}} is easy, flowers online Cronulla Florists are conveniently located for local delivery in or near all suburbs and accessible to deliver flowers across {{$title}} and to send flowers from {{$title}} as well. 
                </p>
                <p class="new-para-terms">
                We have been Delivering flowers in {{$title}} for quite some time now, it doesn’t matter where you are ordering from anywhere in Australia
                or international location, sending flowers from overseas to {{$title}} from locations worldwide is now easier than ever. 
                </p>
                <p class="new-para-terms">
                If you are one of the people who are go and look up the term "local florist near me" in {{$title}}, we are your solution. You can simply order flowers online from our website and Cronulla Florists will dispatch your order. We will make sure to pick handpicked flowers from florist a located in the flower recipient’s delivery area. 
                </p>
                <p class="new-para-terms">
                Products are available for same-day delivery via a local Cronulla Florist
                </p>
                <p class="new-para-terms">
                Florists near me delivery suburbs, order cheap fresh flowers for local dispatch,  buy flowers for {{$title}} delivery on ANZAC day, Valentine day, Mother day, birthdays and more.
                </p>
                <p class="new-para-terms">
                Delivering to CBD, Cullen Bay, Durack, Nightcliff all suburbs, major NT and Australia towns including Alice Springs etc... no matter what the occasion is; whether you are looking for a pretty Mothers day gift, a romantic Valentine day present, a birthday present, an anniversary present, get well soon wish, a funeral wreath spray, or some gift baskets, let us know and we will take care of it for you.  
                </p>
                </div>


                
                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated"> 
              <!-- BEGIN SIDE-NAV-CATEGORY -->
              <div class="side-nav-categories">
                <div class="block-title"> Categories </div>
                <!--block-title--> 
                <!-- BEGIN BOX-CATEGORY -->
                <div class="box-content box-category">
                  <ul>
                    <!--level 0-->
                    <li> <a href="{{ url('/category/designer-choice')}}" title="Designer-choice">Designer's Choice&lrm;</a> </li>
                     <li> <a href="{{ url('/category/bouquet')}}" title="Bouquets">Bouquets&lrm;</a> </li>
                     <li> <a href="{{ url('/category/arrangement')}}" title="Arrangments">Arrangments&lrm;</a> </li>
                     <li> <a href="{{ url('/category/plant')}}" title="Plants">Plants&lrm;</a> </li>
                     <li> <a href="{{ url('/category/flower')}}" title="Flowers">Flowers&lrm;</a> </li>
                     <li> <a href="{{ url('category/christmas-flowers')}}" title="Christmas">Christmas&lrm;</a> </li>

                    <!--level 0-->    
                    
                  </ul>
                </div>
                <!--box-content box-category--> 
              </div>
              <!--side-nav-categories-->
              <!-- <div class="block block-layered-nav">
                <div class="block-title"> Shop By </div>
                <div class="block-content">
                    <p class="block-subtitle">Shopping Options</p>
                    <dl id="narrow-by-list">
                      <dt class="odd">Price</dt>

                      <dd class="odd">
                        <ol>
                          <li> <a href="{{$price1}}" title="{{$price1}}"><span class="price">$0.00</span> - <span class="price">$99.99</span> ({{$sideprice['low']}}) </a>
                          </li>
                          <li> <a href="{{$price2}}" title="{{$price2}}"><span class="price">$100.00</span> - <span class="price">$199.99</span> ({{$sideprice['medium']}}) </a>
                          </li>
                          <li> <a href="{{$price3}}" title="{{$price3}}"><span class="price">$200.00</span> and above ({{$sideprice['high']}})</a>
                          </li>
                        </ol>
                      </dd>
                    </dl>
                  </div>
              </div> -->
  
            
              <div class="block block-list block-cart">
                <div class="block-title"> My Cart </div>
                <div class="block-content">
                  <div class="summary">
                  @if (\Cart::isEmpty() == true)
                    <p class="amount">There is <span class="sidebar-qty">0</span> item in your cart.</p>
                    <p class="subtotal"> <span class="label">Cart Subtotal:</span> $<span class="price sidebar-price">0.00</span> </p>
                  @else
                    <p class="amount">There is <span class="sidebar-qty">{{\Cart::getTotalQuantity()}}</span> item in your cart.</p>
                    <p class="subtotal"> <span class="label">Cart Subtotal:</span> $<span class="price sidebar-price">{{\Cart::getSubTotal()}}</span> </p>
                  @endif
                  </div>
                  @if (\Cart::isEmpty() == false)
                  <div class="ajax-checkout sidebar-checkout">
                    <a href="{{url('checkout')}}">
                    <button type="button" title="Checkout" class="button button-checkout"> <span>Checkout</span> </button>
                    </a>  
                  </div>
                  @endif
                  
                </div>
              </div>

              <div class="side-nav-categories">
                <div class="block-title"> Australia </div>
                <!--block-title--> 
                <!-- BEGIN BOX-CATEGORY -->
                <div class="box-content box-category">
                  <ul>
                    <!--level 0-->
                    <li> <a href="{{ url('flower-delivery-adelaide')}}" title="Designer-choice">Adelaide&lrm;</a> </li>
                     <li> <a href="{{ url('flower-delivery-brisbane')}}" title="Bouquets">Brisbane&lrm;</a> </li>
                     <li> <a href="{{ url('flower-delivery-darwin')}}" title="Arrangments">Darwin&lrm;</a> </li>
                     <li> <a href="{{ url('flower-delivery-canberra')}}" title="Plants">Canberra&lrm;</a> </li>
                     <li> <a href="{{ url('flower-delivery-hobart')}}" title="Flowers">Hobart&lrm;</a> </li>
                     <li> <a href="{{ url('flower-delivery-melbourne')}}" title="Flowers">Melbourne&lrm;</a> </li>
                     <li> <a href="{{ url('flower-delivery-perth')}}" title="Flowers">Perth&lrm;</a> </li>
                     <li> <a href="{{ url('flower-delivery-sydney')}}" title="Flowers">Sydney&lrm;</a> </li>
                    <!--level 0-->    
                    
                  </ul>
                </div>
                <!--box-content box-category--> 
              </div>
              <!--block block-list block-compare--> 
            </aside> 
              </article>
              </div>
              <!--    ///*///======    End article  ========= //*/// --> 
            </div>
          
          </div>
          <!--row--> 
        </div>
        <!--container--> 
      </section>
@endsection