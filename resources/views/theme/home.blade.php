@extends('theme.layout.master')
@section('custom-style')
<link rel="stylesheet" type="text/css" href="{{url('theme/stylesheet/flexslider.css')}}">
@endsection
@section('content')
<div id="tmg-slideshow" class="tmg-slideshow">
    <div class="container">
      <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container' >
        <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{asset('theme/images/home-banner.jpg')}}"><img src="{{asset('theme/images/home-banner.jpg')}}"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image1" title="slider-image1" />
              <div class="info">
                   <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap; left: 0px !important;'><span><h1 style="font-size:60px">Cronulla's No 1 Florist Shop</h1></span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='430'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href="{{url('categories')}}" class="buy-btn" title="category">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='320'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;padding-top: 5px !important;'>Get your favorite flowers at your doorstep</div>
              </div>
            </li>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{asset('theme/images/home-banner-2.jpg')}}"><img src="{{asset('theme/images/home-banner-2.jpg')}}"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image2"  title="slider-image2"  />
              <div class="info">
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span><h2 style="font-size:60px">Leading Flower Shop in Australia</h2></span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='430'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href="{{url('categories')}}" class="buy-btn" title="category">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='320'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;padding-top: 5px !important;'>Surprise your loved ones by sending your favorite flowers</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!--Category slider Start-->
  <div class="bestsellers6">
    <div class="bestseller">
      <div class="container">
        <div class="row">
          <div class="category-product">
            <div class="navbar nav-menu">
              <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a data-toggle="tab" href="#tab-1" title="Designer's choice">Designer's Choice</a></li>
                  <li><a data-toggle="tab" href="#tab-2" title="arrangement">Arrangement</a></li>
                   <li><a data-toggle="tab" href="#tab-3" title="Bouquet">Bouquet</a></li>
                   <li><a data-toggle="tab" href="#tab-4" title="Plant">Plant</a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->               
            </div>
            <div class="product-bestseller">
              <div class="product-bestseller-content">
                <div class="product-bestseller-list">
                  <div class="tab-container"> 
                    <!-- tab product -->
                    <div class="tab-panel active animated fadeInUp" id="tab-1">
                      <div class="products-grid">
                        <div class="slider-items-products">
                          <div id="latest-pro-slider" class="product-flexslider">
                            <div class="slider-items">
                              @if($listingData['Choice'] != null)
                              @php
                               $count = 0;
                              @endphp
                              @foreach($listingData['Choice'] as $key => $value)
                              @if ($count < 4)
                              <div class="item" style="min-height: 370px;">
                                <div class="item-inner">
                                  <div class="item-img">
                                    <div class="pro--quickview"><a class="link-quickview" href='javascript:quickView("{{$value["product_id"]}}", "{{$value["name"]}}", "{{$value["description"]}}", "{{$value["feature_image"]}}", "{{$value["secondary_image"]}}", "{{$value["shipment_cost"]}}", "{{$value["price"]}}", "{{$value["currency"]}}")'> Quick View </a> </div>
                                    <div class="item-img-info">
                                     <div class="new-label new-top-left">Hot</div>
                                     <a class="product-image" title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}">
                                      <img alt="Retis lapen casen" src="{{$value['feature_image']}}" class="designer-img-large"> 
                                      <!-- <img alt="Retis lapen casen" src="{{$value['secondary_image']}}" class="designer-img-small" >  -->
                                      </a> </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner" style="margin-top: 43px;">
                                      <div class="item-title"> <a title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}"> {{$value['name']}} </a> </div>
                                      
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">{{'$'.$value['price'].' '.$value['currency']}}</span> </span> </div>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <ul class="add-to-links">
                                        <li>
                                          <a href="{{url('product/'.$value['slug'])}}" class="button btn-cart btncart-home" type="button" title="" data-original-title="Add to Cart">Add to cart </a>
                                        </li>
                                        <!-- <li class="mgk-wishlist"><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i></a> </li> -->
                                       <!--  <li class="mgk-compare"><a class="link-compare" href="compare.html"><i class="fa fa-signal"></i></a> </li> -->
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @php
                              $count++;
                              @endphp
                              @endif
                              @endforeach
                              @endif
                              <!-- Single Item Div Ends -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- tab product -->
                    <div class="tab-panel animated fadeInUp" id="tab-2">
                      <div class="products-grid ">
                        <div class="slider-items-products">
                          <div id="latest-pro-slider" class="product-flexslider">
                            <div class="slider-items">
                              @if($listingData['Arrangement'] != null)
                              @php
                               $count = 0;
                              @endphp
                              @foreach($listingData['Arrangement'] as $key => $value)
                              @if ($count < 4)                              
                               <div class="item" style="min-height: 370px;">
                                <div class="item-inner">
                                  <div class="item-img">
                                    <div class="pro--quickview"><a class="link-quickview" href='javascript:quickView("{{$value["product_id"]}}", "{{$value["name"]}}", "{{$value["description"]}}", "{{$value["feature_image"]}}", "{{$value["secondary_image"]}}", "{{$value["shipment_cost"]}}", "{{$value["price"]}}", "{{$value["currency"]}}")'> Quick View </a> </div>
                                    <div class="item-img-info">
                                     <div class="new-label new-top-left">Hot</div>
                                    <a class="product-image" title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}"> <img alt="Retis lapen casen" src="{{$value['feature_image']}}" style="max-height: 240px;"> </a> </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner" style="margin-top: 43px;">
                                      <div class="item-title"> <a title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}"> {{$value['name']}} </a> </div>
                                      
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">{{'$'.$value['price'].' '.$value['currency']}}</span> </span> </div>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <ul class="add-to-links">
                                        <li>
                                          <a href="{{url('product/'.$value['slug'])}}" class="button btn-cart btncart-home" type="button" title="add to cart" data-original-title="Add to Cart">Add to cart </a>
                                        </li>
                                        <!-- <li class="mgk-wishlist"><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i></a> </li> -->
                                       <!--  <li class="mgk-compare"><a class="link-compare" href="compare.html"><i class="fa fa-signal"></i></a> </li> -->
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @php
                              $count++;
                              @endphp
                              @endif
                              @endforeach
                              @endif
                              <!-- Single Item Div Ends -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="tab-panel animated fadeInUp" id="tab-3">
                      <div class="products-grid ">
                        <div class="slider-items-products">
                          <div id="latest-pro-slider" class="product-flexslider">
                            <div class="slider-items">
                              @if($listingData['Bouquet'] != null)
                              @php
                               $count = 0;
                              @endphp
                              @foreach($listingData['Bouquet'] as $key => $value)
                              @if ($count < 4)
                                <div class="item" style="min-height: 370px;">
                                <div class="item-inner">
                                  <div class="item-img">
                                    <div class="pro--quickview"><a class="link-quickview" href='javascript:quickView("{{$value["product_id"]}}", "{{$value["name"]}}", "{{$value["description"]}}", "{{$value["feature_image"]}}", "{{$value["secondary_image"]}}", "{{$value["shipment_cost"]}}", "{{$value["price"]}}", "{{$value["currency"]}}")' title="Quick View"> Quick View </a> </div>
                                    <div class="item-img-info">
                                     <div class="new-label new-top-left">Hot</div>
                                     <a class="product-image" title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}"> <img alt="Retis lapen casen" src="{{$value['feature_image']}}" style="max-height: 240px;" title="feature image"> </a> </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner" style="margin-top: 43px;">
                                      <div class="item-title"> <a title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}"> {{$value['name']}} </a> </div>
                                      
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">{{'$'.$value['price'].' '.$value['currency']}}</span> </span> </div>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <ul class="add-to-links">
                                        <li>
                                          <a href="{{url('product/'.$value['slug'])}}" class="button btn-cart btncart-home" type="button" title="Add to Cart" data-original-title="Add to Cart">Add to cart </a>
                                        </li>
                                        <!-- <li class="mgk-wishlist"><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i></a> </li> -->
                                       <!--  <li class="mgk-compare"><a class="link-compare" href="compare.html"><i class="fa fa-signal"></i></a> </li> -->
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @php
                              $count++;
                              @endphp
                              @endif
                              @endforeach
                              @endif
                              <!-- Single Item Div Ends -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                    
                   
                    <div class="tab-panel animated fadeInUp" id="tab-4">
                      <div class="products-grid ">
                        <div class="slider-items-products">
                          <div id="latest-pro-slider" class="product-flexslider">
                            <div class="slider-items">
                              @if($listingData['Plant'] != null)
                              @php
                               $count = 0;
                              @endphp
                              @foreach($listingData['Plant'] as $key => $value)
                              @if ($count < 4)
                                <div class="item item-min-height">
                                <div class="item-inner">
                                  <div class="item-img">
                                    <div class="pro--quickview"><a class="link-quickview" href='javascript:quickView("{{$value["product_id"]}}", "{{$value["name"]}}", "{{$value["description"]}}", "{{$value["feature_image"]}}", "{{$value["secondary_image"]}}", "{{$value["shipment_cost"]}}", "{{$value["price"]}}", "{{$value["currency"]}}")' title="Quick View "> Quick View </a> </div>
                                    <div class="item-img-info">
                                     <div class="new-label new-top-left">Hot</div>
                                     <a class="product-image" title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}"> <img alt="Retis lapen casen" src="{{$value['feature_image']}}" style="max-height: 240px;"> </a> </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner" style="margin-top: 43px;">
                                      <div class="item-title"> <a title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}"> {{$value['name']}} </a> </div>
                                      
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">{{'$'.$value['price'].' '.$value['currency']}}</span> </span> </div>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <ul class="add-to-links">
                                        <li>
                                          <a href="{{url('product/'.$value['slug'])}}" class="button btn-cart btncart-home" type="button" title="Add to Cart" data-original-title="Add to Cart">Add to cart </a>
                                        </li>
                                        <!-- <li class="mgk-wishlist"><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i></a> </li> -->
                                       <!--  <li class="mgk-compare"><a class="link-compare" href="compare.html"><i class="fa fa-signal"></i></a> </li> -->
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @php
                              $count++;
                              @endphp
                              @endif
                              @endforeach
                              @endif
                              <!-- Single Item Div Ends -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Category silder End--> 
  
  
  <!--top products-->  
	<section class=" wow bounceInUp animated">
    <div class="top-banner slider-items-products">
    <div class="container">
      <div class="row">
      
      <div id="top-deals" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
          <div class="item">
          <div class="item-inner">
        &nbsp;
          <div class="homeslider-description">
          <div class="wrap-desc">
		<h2>Sale up to 70%</h2>
		<p>Clearance Up To 70% Off. Hurry Last Chance! While Supplies Last!</p>
		<div class="box-timer">
		                      <div class="countbox_1 timer-grid"></div>
		                    </div>
		<div><a href="{{url('categories')}}" class="learnmore">Learn More</a></div>
		</div></div>
		          
		          </div>
		          </div>
		           <div class="item">
		         <div class="item-inner">
		         &nbsp;
		          <div class="homeslider-description">
		          <div class="wrap-desc">
		<h2>Birthday Flower</h2>
		<p>Order happy birthday flowers for that special someone to show just how much you care.</p>
		<div><a href="{{url('category')}}" class="learnmore" title="Learn More">Learn More</a></div>
		</div></div>
		          
		          </div>
		          </div>
		           
		          </div>
		          </div>
		          </div>
		          </div>
		          </div>
   	</section>
    <!--top products end-->         
          
  
  
   <!-- best Pro Slider -->
  <section class=" wow bounceInUp animated">
    <div class="best-pro slider-items-products container">
      <div class="new_title">
        <h2>Best Flowers</h2>
      </div>
      
      <div id="best-seller" class="product-flexslider hidden-buttons">
        <div class="slider-items products-grid">
            @if($listingData['Flower'] != null)
            @php
             $count = 0;
            @endphp
            @foreach($listingData['Flower'] as $key => $value)
            @if ($count < 4)
            <div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="pro--quickview"><a class="link-quickview" href='javascript:quickView("{{$value["product_id"]}}", "{{$value["name"]}}", "{{$value["description"]}}", "{{$value["feature_image"]}}", "{{$value["secondary_image"]}}", "{{$value["shipment_cost"]}}", "{{$value["price"]}}", "{{$value["currency"]}}")' title="Quick View"> Quick View </a> </div>
                  <div class="item-img-info"> <a class="product-image" title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}"> <img alt="Retis lapen casen" src="{{$value['feature_image']}}" title="feature image" style="max-height: 340px;"> </a> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                   
                    <div class="item-title"> <a title="{{$value['name']}}" href="{{url('product/'.$value['slug'])}}">{{$value['name']}}</a> </div>
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">{{'$'.$value['price'].' '.$value['currency']}}</span> </span> </div>
                    </div>
                  </div>
                  <div class="action">
                    <ul class="add-to-links">
                      <li>
                        <a href="{{url('product/'.$value['slug'])}}" class="button btn-cart btncart-home" type="button" title="Add to Cart" data-original-title="Add to Cart">Add to cart </a>
                      </li>
                      <!-- <li class="mgk-wishlist"><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a> </li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @php
            $count++;
            @endphp
            @endif
            @endforeach
            @endif
            <!-- Item Ends -->                    
        </div>
      </div>
    </div>
  </section>
  
  
     <!-- best Pro Slider -->
  
 <div class="our-features-box wow bounceInUp animated animated">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box free-shipping">
            <div class="icon-truck"></div>
            <div class="content">Free returns and exchanges
  
            </div>
          </div>
        </li>
        <li>
          <div class="feature-box need-help">
            <div class="icon-support"></div>
            <div class="content">Need Help  1300 310 498

            </div>
          </div>
        </li>
       
        <li class="last">
          <div class="feature-box return-policy">
            <div class="icon-return"></div>
            <div class="content">30 days return Service
   
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div> 
   
 
 
  
   <!-- Logo Brand Block -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="new-heading">
        <h2>Online Flower Delivery in Cronulla</h2>
       </div>
          <p class="new-para">Welcome to <a href="https://cronullaflorists.com.au/" title="Cronulla Florist">Cronulla Florist</a>. Are you wanting to send flowers to Cronulla, or surrounding suburbs? If so, let Cronulla Florists take care of everything for you. We gladly offer same day flower delivery for orders going to Cronulla so long as the flower order is received before 2.30pm. Cronulla Florists has been a premier provider of beautiful floral <a href="{{ url('/category/bouquet') }}" title="bouquet">bouquet</a>, <a href="{{ url('/category/arrangement') }}" title="arrangements">arrangements</a>, <a href="{{ url('/category/flower') }}" title="flowers">flowers</a> and <a href="{{ url('/category/plant') }}" title="plants">plants</a> for many years. Whatever the occasion, our classic collection of colorful stems, blossoming plants, and fragrant arrangements have warmed millions of hearts across the country. At Cronulla Florists, we celebrate the little things in life and cherish the timeless charm a single flower embodies. From birthday flowers to wedding flowers, all of our hand-picked floral arrangements are worth more than a thousand words.</p>

<p class="new-para">We deliver to the following areas: <a href="https://www.google.com/maps/place/Cronulla+NSW+2230,+Australia/@-34.0582922,151.1366897,14z/data=!3m1!4b1!4m5!3m4!1s0x6b12c81235d88f33:0x5017d681632b360!8m2!3d-34.05744!4d151.15219">Cronulla</a>, <a href="https://www.google.com/maps/place/Woolooware+NSW+2230,+Australia/@-34.0413968,151.1227458,14z/data=!3m1!4b1!4m5!3m4!1s0x6b12c7fd2d6664c5:0x5017d681632d0f0!8m2!3d-34.04788!4d151.14113">Woolooware </a>, <a href="https://www.google.com/maps/place/Burraneer+NSW+2230,+Australia/@-34.033116,151.0875373,14z/data=!4m5!3m4!1s0x6b12c8761b8e9b0f:0x5017d681632ae90!8m2!3d-34.06996!4d151.13664">Burraneer</a>, <a href="https://www.google.com/maps/place/Caringbah+NSW+2229,+Australia/data=!4m2!3m1!1s0x6b12c7f6b253e00d:0x5017d681632afc0?sa=X&ved=2ahUKEwjkl4iWqajmAhVixYUKHYvKC-AQ8gEwAHoECGUQAQ">Caringbah</a>, <a href="https://www.google.com/maps/place/Miranda+NSW+2228,+Australia/@-34.033116,151.0875373,14z/data=!3m1!4b1!4m5!3m4!1s0x6b12b84572e5978d:0x5017d681632c180!8m2!3d-34.0299364!4d151.1055499" title="Miranda">Miranda</a>, and many other parts of <a href="https://www.google.com/maps/place/Australia/@-21.0543552,95.2807226,3z/data=!3m1!4b1!4m5!3m4!1s0x2b2bfd076787c5df:0x538267a1955b1352!8m2!3d-25.274398!4d133.775136" title="Australia">Australia</a>. Our florists are in Cronulla, NSW, 2230, and on different parts of the country. Located in the state of New South Wales, 26 kilometers south of the Sydney central business district, <a href="https://www.sutherlandshire.nsw.gov.au/Outdoors/Beaches/Beach-Locations/Cronulla-Beach" title="Cronulla">Cronulla is the beachside</a> suburb of <a href="https://ssroc.nsw.gov.au/" title="southern Sydney">southern Sydney</a>. It is in the local government area of Sutherland Shire. Situated on a peninsula boarded by Botany Bay to the north, <a hef="https://en.wikipedia.org/wiki/Port_Hacking" title="Port Hacking">Port Hacking</a> to the south, Bate Bay to the east, and Gunnamatta Bay to the west, Cronulla also shares a wall with the neighboring suburb of Woolooware.</p>
<p class="new-para">You can order quickly and safely online; our friendly florists will gladly assist you with any kind of advice you may need in order to arrange the most suitable flowers for your budget and occasion. When you order with Cronulla Florists, you can be confident that your flowers will be lovingly arranged by Cronulla ‘s finest local florists. Our florists bring a wealth of experience and knowledge, along with a list of hundreds of happy customers. The company has a wonderful talent to understand exactly what the customer needs and has extensive experience in a diverse range of styles – ensuring total customer satisfaction. We look forward to servicing your flower order today in a timely and professional manner. The team at Cronulla Florists is experienced enough to make your events wonderful and perfectly surprise your loved ones.
</p>
        </div>     
      </div>
    </div>
  </div>

  </div>

  <!-- For version 1,2,3,4,6 -->
  <div class="footer-banner">
	  <div class="banner-block1">
	   <div class="thumbnail_block">
	  <img src="{{asset('theme/images/product-image.jpg')}}" alt="">
	  <div class="caption hovered">
	                                    <div class="caption-wrapper">
	                                        <div class="caption-inner">
	                                            <h3>Top Collection</h3>
	                                             <p>Find our top-rated flowers in one place and bring happiness on the faces of your loved ones.</p>
	                                            <p><a href="{{url('/category/designer-choice')}}" title="view All">View All</a></p>
	                                        </div>
	                                    </div>
	                                </div>
	  </div>
	  </div>
	<div class="banner-block2">
	  <div class="block1">
	  <strong>New Arrivals</strong>
	 <p>Check out the latest flowers collection and enlighten your events.</p>
	  <!-- <a href="#">Learn More</a> -->
	  </div>
	  </div>
	  
	<div class="banner-block3">
	   <div class="thumbnail_block">
	  <img src="{{asset('theme/images/product-image.jpg')}}" alt="product image">
	  <div class="caption hovered">
	                                    <div class="caption-wrapper">
	                                        <div class="caption-inner">
	                                            <h3>Christmas Special</h3>
	                                            <p>Bring extra joy with Christmas special flowers and express your love to others.</p>
	                                            <p><a href="{{url('/category/flower')}}" title="view all">View All</a></p>
	                                        </div>
	                                    </div>
	                                </div>
	  </div>
	  </div>
	<div class="banner-block2">
	  <div class="block1">
	  <strong>Birthday Special</strong>
	 <p>Make your birthday parties beautiful with the birthday flower collection</p>
	  <!-- <a href="#">Learn More</a> -->
	  </div>
	  </div>
  </div>

  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 testimonials-section">
        <div class="">
          <ul class="bxslider">
            <li>
            <div class="avatar"><img src="{{asset('theme/images/testimonial-user.jpg')}}" alt="Image"></div>
            <div class="testimonials"> Thanks a lot for successful delivery of flowers to my mother on Mother's Day.
            Received with perfect timing and very generous bunch, lovely colours. Will use your service again, I am very satisfied.</div>
            <div class="clients_author">Marcus	</div>
            </li>
            <li>
            <div class="avatar"><img src="{{asset('theme/images/testimonial-user2.jpg')}}" alt="Image" title="testimonial"></div>
            <div class="testimonials"> Thank you so much for processing my order so quickly. The flowers are beautiful and hopefully they will help my father on the road to a speedy recovery. Again thank you and I look forward to using Cronulla florists shop again very soon.</div>
            <div class="clients_author">Jake</div>
            </li>  
          </ul>
        </div>
        </div>     
  </div>
    </div>
  </div>
  <br>
  <!-- Footer Version 3 -->

   <!---<div class="popup1">
     <div class="newsletter-sign-box">
    <div class="newsletter">
    <img src="{{asset('theme/images/close-icon.png')}}" alt="close" class="x1" onClick="HideMe();">
        <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
            <h3>Newsletter Sign up</h3>           
            <h4>Qualis flowers store is updated regularly with offers.</h4>
         <div class="newsletter-form">
            <div class="input-box">
               <input type="text" name="email" id="newsletter2" title="Sign up for our newsletter" placeholder="Enter your email address" class="input-text required-entry validate-email">        
               <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>            
            </div> input-box
         </div> newsletter-form
            <label class="subscribe-bottom"><input type="checkbox" name="notshowpopup" id="notshowpopup">Don’t show this popup again</label>
        </form> -->
    <!-- </div> newsletter -->
    <!-- </div> newsletter-sign-box -->
  <!-- </div> -->
<!-- for fadding background on subscription modal -->
<!-- <div id="fade"></div> -->
@endsection
@section('custom-script')
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
@endsection