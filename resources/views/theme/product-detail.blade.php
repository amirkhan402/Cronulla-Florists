@extends('theme.layout.master')

@section('head-style')
<script type="application/ld+json">
{
"@context": "https://schema.org/", 
"@type": "Product", 
"name": "{!! $product->name !!}",
"image": "{{'https://'.$product->feature_image}}",
"description": "{{$product->description}}",
"brand": "Petals",
"sku": "{{$product->product_id}}",
"offers": {
"@type": "AggregateOffer",
"url": "{!!url('product/'.$product->slug) !!}",
"priceCurrency": "AUD",
"price": "{{$product->price}}",
"lowPrice": "{{$product->price}}",
"highPrice": "{{$product->price}}",
"offerCount": "1",
"itemCondition": "https://schema.org/NewCondition",
"availability": "instock",
"seller": {
"@type": "Organization",
"name": "cronullaflorists.com.au"
}
},
"aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "5",
"bestRating": "5",
"worstRating": "4.5",
"ratingCount": "1",
"reviewCount": "1"
},
"review": {
"@type": "Review",
"name": "Marcus Miller",
"reviewBody": "Highly recommended online flower shop, fastest same day delivery in Australia. I will come back soon for more.",
"reviewRating": {
"@type": "Rating",
"ratingValue": "5",
"bestRating": "5",
"worstRating": "4.5"
},
"author": {"@type": "Person", "name": "Marcus Miller"},
"publisher": {"@type": "Organization", "name": "Cronulla Florists"}
}
}
</script>
@endsection
@section('content')
<div class="page-heading">
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div>
            <?php
            $type = str_replace('-', ' ', $product['type']);
            $type = ucwords($type);
            ?>
            <ul>
              <li class="home"> <a href="{{url('/')}}" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
              <li class="category1599"> <a href="{{ url('categories') }}" title="Categories">Categories</a> <span>&rsaquo; </span> </li>
              <li class="category1600"> <a href="{{ url('category').'/'.$product['type'] }}" title="categories">{{$type}}</a> <span>&rsaquo; </span> </li>
              <li class="category1601"> <strong>{{$product['name']}}</strong> </li>
            </ul>
          </div>
          <!--col-xs-12--> 
        
    <div class="page-title">
      <h2>{{$product['name']}}</h2>
    </div>
     <!--row--> 
     </div>
      </div>
      <!--container--> 
    </div>
  </div>
  <p class="alert alert-success succ" style="display: none"></p>
  <p class="alert alert-danger err" style="display: none"></p>
    <!-- BEGIN Main Container -->
    <div class="main-container col1-layout wow bounceInUp animated">
      <div class="main">
        <div class="col-main">
          <!-- Endif Next Previous Product -->
          <div class="product-view wow bounceInUp animated" >
            <div id="messages_product_view"></div>
            <!--product-next-prev-->
            <div class="product-essential container">
              <div class="row">
                <form action="#" method="post" id="product_addtocart_form">
                  <!--End For version 1, 2, 6 -->
                  <!-- For version 3 -->
                  <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                      <div class="new-label new-top-left">Hot</div>
        
                      <div class="product-image">
                        <div class="product-full"> <img id="product-zoom" class="feature-image" src="{{'https://'.$product['feature_image']}}" data-zoom-image="{{'https://'.$product['feature_image']}}" alt="{{$product['name']}}" title="{{$product['name']}}"/> 
                      </div>
                   
                      </div>
                      <!-- end: more-images --> 
                    </div>
                  <!--End For version 1,2,6-->
                  <!-- For version 3 -->
                  <div class="col-sm-7 col-xs-12">
                  <div class="product-shop">
                    <div class="product-name">
                      <h1 itemprop="name"  class="item-name">{{$product['name']}}</h1>
                    </div>
                    <!--product-name-->
            
                    <div class="price-block">
                      <input type="hidden" name="product-id" class="product-id" value="{{$product['product_id']}}">
                    <input type="hidden" name="hidden-price" class="hidden-price" value="{{$product['price']}}">
                      <div class="price-box"> <span class="regular-price price" id="product-price-123">{{$product['currency']}} <span class="price" id="product-price"> {{$product['price']}}</span> </span> </div>
                      
                    </div>
                    <!--price-block-->
                    <div class="short-description">
                      <h2>Description</h2>
                      <p>{{$product['description']}} .</p>
                    </div>
                    <div class="add-to-box">
                      <div class="add-to-cart">
                        <div class="pull-left">
                          <div class="custom pull-left">
                           <button class="items-count" onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus"></i></button>
                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                             <button class="items-count" onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus"></i></button>
                          </div>
                          <!--custom pull-left-->
                        </div>
                        <!--pull-left-->
                        <button type="button" title="Add to Cart" class="button btn-cart cart-submit"><span>Add to Cart</span></button>
                      </div>
                      <!--add-to-cart-->
                      <!-- <div class="email-addto-box">
                         <p class="email-friend"><a href="#" title="Email to a Friend"><span>Email to a Friend</span></a></p> 
                        <ul class="add-to-links">
                          <li> <a class="link-wishlist" href="wishlist.html" onClick="" title="Add To Wishlist"><span>Add To Wishlist</span></a> </li>
                          <li> <span class="separator">|</span> <a class="link-compare" href="Compare.html" title="Add To Compare"><span>Add To Compare</span></a> </li>
                        </ul> -->
                        <!--add-to-links-->
                      <!-- </div> -->
                      <!--email-addto-box-->
                    </div>
                    <!--add-to-box-->
                    <!-- thm-mart Social Share-->
                    
                    <!-- thm-mart Social Share Close-->
                  </div>
                  <!--product-shop-->
                  </div>
                  <!--Detail page static block for version 3-->
                </form>
              </div>
            </div>
            <!--product-essential-->
            <div class="product-collateral">
            <div class="other-info">
            <div class="container">
            <div class="row">
              <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                <li class="active"> <a href="#product_tabs_description" data-toggle="tab" title="product description"> Product Description </a> </li>
                {{-- <li><a href="#product_tabs_tags" data-toggle="tab" title="tags">Tags</a></li> --}}
                {{--<li> <a href="#reviews_tabs" data-toggle="tab" title="reviews">Reviews</a> </li>--}}
                {{-- <li> <a href="#product_tabs_custom" data-toggle="tab" title="custom">Custom Tab</a> </li> --}}
           
              </ul>
              
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="product_tabs_description">
                  <div class="std">
                  <h2>Product Information</h2>
                  <p>{{$product['description']}}</p>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                    <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p> --}}
                  </div>
                </div>
                <div class="tab-pane fade" id="reviews_tabs">
                  <div class="woocommerce-Reviews">
  <div>
  <h2 class="woocommerce-Reviews-title">2 reviews for <span>Retis lapen casen</span></h2>
  <br>
  <ol class="commentlist">
  <li class="comment">
  <div>
  <img alt="" src={{asset('theme/images/product-image.jpg')}} class="avatar avatar-60 photo">
  <div class="comment-text">
  <div class="ratings">
                        <div class="rating-box">
                          <div style="width:100%" class="rating"></div>
                        </div>
                        
                      </div>
  <p class="meta">
  <strong>John Doe</strong> 
  <span>–</span> April 19, 2018
  </p>
  <div class="description"><p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
  </div>
  </div>
  </div>
  </li><!-- #comment-## -->
  <li class="comment">
  <div>
  <img alt="new arrival" src="images/member2.png" class="avatar avatar-60 photo">
  <div class="comment-text">
  <div class="ratings">
                        <div class="rating-box">
                          <div style="width:100%" class="rating"></div>
                        </div>
                        
                      </div>
  <p class="meta">
  <strong>Stephen Smith</strong> <span>–</span> June 02, 2018
  </p>
  <div class="description"><p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  </div>
  </div>
  </li><!-- #comment-## -->
  </ol>
  </div>
  <div>
  <div>
  <div class="comment-respond">
  <span class="comment-reply-title">Add a Review </span>			
  <form action="#" method="post" class="comment-form" novalidate>
  <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
  <div class="comment-form-rating">
  <label id="rating">Your rating</label>
  <p class="stars">
  <span>
  <a class="star-1" href="#" title="1">1</a>
  <a class="star-2" href="#" title="2">2</a>
  <a class="star-3" href="#" title="3">3</a>
  <a class="star-4" href="#" title="4">4</a>
  <a class="star-5" href="#" title="15">5</a>
  </span>
  </p>
  </div>
  <p class="comment-form-comment">
  <label>Your review <span class="required">*</span></label>
  <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
  </p>
  <p class="comment-form-author">
  <label for="author">Name <span class="required">*</span></label> 
  <input id="author" name="author" type="text" value="" size="30" required></p>
  <p class="comment-form-email">
  <label for="email">Email <span class="required">*</span></label> 
  <input id="email" name="email" type="email" value="" size="30"  required></p>
  <p class="form-submit">
  <input name="submit" type="submit" id="submit" class="submit" value="Submit"> 
  </p>
  </form>
  </div><!-- #respond -->
  </div>
  </div>
  <div class="clear"></div>
  </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_custom">
                  <div class="product-tabs-content-inner clearfix">
                  <h2>Other Information</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
                    <p> Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                  </div>
                </div>
                
              </div>
              </div>
              </div>
            </div>
            </div>
       
        <br>
          </div>
          <!--box-additional-->
          <!--product-view-->
        </div>
      </div>
      <!--col-main-->
    </div>
@endsection