@extends('theme.layout.master')
@section('content')
<div class="page-heading">
        <div class="breadcrumbs">
          <div class="container">
            <div class="row">
              <div>
                <ul>
                
                  <li class="home"> <a href="{{ url('/') }}" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
                  <li class="category1599"> <a href="{{ url('categories') }}" title="">Categories</a> <span>&rsaquo; </span> </li>
                  <li class="category1601"> <strong>{{$category}}</strong> </li>
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
        @endphp      
        <div class="page-title">
        <h1>{{$category}}</h1>
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
                  <div class="sorter">
                    <div class="view-mode">
                      @if (isset(request()->product_list_mode))
                        <a href="{{$grid}}" title="List" class="button-list">Grid</a> 
                        <span title="Grid" class="button button-active button-grid">List</span>
                      @else
                        <span title="Grid" class="button button-active button-grid">Grid</span>
                        <a href="{{$list}}" title="List" class="button-list">List</a>
                      @endif
                    </div>
                  </div>
                  </div>
                </div>
                @endif
                <!-- check which mode is selected -->
                @if(!isset(request()->product_list_mode))
                  <ul class="products-grid">
                    @if(!$products->isEmpty())
                    @foreach($products as $product)

                    @if(request()->segment(2) == 'flower')
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="item" style="min-height: 400px">
                                      <div class="item-inner">
                                        <div class="item-img">
                                          <div class="pro--quickview"><a class="link-quickview" href='javascript:quickView("{{$product["product_id"]}}", "{{$product["name"]}}", "{{$product["description"]}}", "{{"https://".$product["feature_image"]}}", "{{$product["secondary_image"]}}", "{{$product["shipment_cost"]}}", "{{$product["price"]}}", "{{$product["currency"]}}")'> Quick View </a> </div>
                                        <div class="item-img-info"> <a class="product-image" title="{{$product->name}}" href="{{url('product/'.$product['slug'])}}"> <img  class="featureimage" style="height: 300px" alt="{{$product->name}}" src="https://{{$product->feature_image}}"> <img style="display:none" class="secondaryimage"  alt="{{$product->name}}" src="https://{{$product->secondary_image}}" > </a> </div>
                                        </div>
                                        <div class="item-info">
                                          <div class="info-inner">
                                            <div class="item-title"> <a title="{{$product['ame']}}" href="{{url('product/'.$product['slug'])}}"> {{$product->name}} </a> </div>
                                            <div class="item-price">
                                              <div class="price-box"> <span class="regular-price"> <span class="price">{{$product->price}} {{$product->currency}}</span> </span> </div>
                                            </div>
                                            
                                          </div>
                                          <div class="action">
                                            <ul class="add-to-links">
                                              <li>
                                               <a href="{{url('product/'.$product['slug'])}}" class="button btn-cart btncart-home" type="button" title="" data-original-title="Add to Cart">Add to cart </a>
                                              </li>
                                              <!-- <li class="mgk-wishlist"><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i></a> </li> -->
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                    </li>
                    @else
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="item category-others">
                                          <div class="item-inner">
                                            <div class="item-img" style="min-height: 300px">
                                              <div class="pro--quickview"><a class="link-quickview" href='javascript:quickView("{{$product["product_id"]}}", "{{$product["name"]}}", "{{$product["description"]}}", "{{"https://".$product["feature_image"]}}", "{{$product["secondary_image"]}}", "{{$product["shipment_cost"]}}", "{{$product["price"]}}", "{{$product["currency"]}}")'> Quick View </a> </div>
                                            <div class="item-img-info"> <a class="product-image" title="{{$product->name}}" href="{{url('product/'.$product['slug'])}}"> <img style="max-height: 300px !important;" alt="{{$product->name}}" src="https://{{$product->feature_image}}"> </a> </div>
                                            </div>
                                            <div class="item-info">
                                              <div class="info-inner">
                                                <div class="item-title"> <a title="{{$product['name']}}" href="{{url('product/'.$product['slug'])}}"> {{$product->name}} </a> </div>
                                                <div class="item-price">
                                                  <div class="price-box"> <span class="regular-price"> <span class="price">{{$product->price}} {{$product->currency}}</span> </span> </div>
                                                </div>
                                                
                                              </div>
                                              <div class="action">
                                                <ul class="add-to-links">
                                                  <li>
                                                    <a href="{{url('product/'.$product['slug'])}}" class="button btn-cart btncart-home" type="button" title="" data-original-title="Add to Cart">Add to cart </a>
                                                  </li>
                                                  <!-- <li class="mgk-wishlist"><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i></a> </li> -->
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                        </li>
                    @endif
                    @endforeach
                    @else
                    <div class="row">
                      <div class="col-lg-12 text-center">
                      <img style="height: 388px ; width: 40%" src="{{asset('theme/images/no-products.png')}}">
                      </div>
                    </div>
                    @endif
                  </ul>
                  @else
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
                    @endif
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
              <div class="block block-layered-nav">
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
              </div>
  
            
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