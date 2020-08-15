<div class="popup" style="display: none;">
  <div class="quick-view-box">
    <img src="{{asset('theme/images/close-icon.png')}}" alt="close" class="x" onClick="HideMe();">
        <div class="product-view product-essential container">
          <div class="row">            
            <form action="" method="post" id="product_addtocart_form">
              <!--End For version 1, 2, 6 -->
              <!-- For version 3 -->
              <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                  <!-- <div class="new-label new-top-left">Hot</div>
                  <div class="sale-label sale-top-left">-15%</div> -->
                  <div class="product-image">
                    <div class="product-full"> <img id="product-zoom" alt="product-image"/> </div>
                    <div class="more-views">
                      <div class="slider-items-products">
                        <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">

                         <!--  <div class="slider-items slider-width-col4 block-content">
                            <div class="more-views-items"> <a href="#" id="data-product-zoom0"> <img id="product-zoom0" alt="product-image"/> </a></div>

                            <div class="more-views-items"> <a href="#" id="data-product-zoom1"> <img id="product-zoom1" alt="pr aoduct-image"/> </a></div>
                           
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end: more-images --> 
                </div>
              <!--End For version 1,2,6-->
              <!-- For version 3 -->
              <div class="product-shop col-sm-6 col-xs-12">
              
                <!-- <div class="product-name">
                  <h2 itemprop="name" class="item-name"></h2>
                </div> -->
          
                <div class="price-block">
                  <input type="hidden" name="product-id" class="product-id" value="">
                  <input type="hidden" name="hidden-price" class="hidden-price" value="">
                  <div class="price-box"> <span class="regular-price" id="product-price-123">$<span class="price" id="product-price"> </span></span> </div>
                  <p class="availability in-stock">
                    <link itemprop="availability" href="http://schema.org/InStock">
                    <span>In stock</span></p>
                </div>
                <!--price-block-->
                <div class="short-description">
                  <h2>Product Description</h2>
                  <p class="item-detail"></p>
                </div>
                <div class="add-to-box">
                  <div class="add-to-cart">
                    <div class="pull-left">
                      <div class="custom pull-left">
                       <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus"></i></button>
                        <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                         <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus"></i></button>
                      </div>
                      <!--custom pull-left-->
                    </div>
                    <!--pull-left-->
                    <button type="button" title="Add to Cart" class="button btn-cart cart-submit"><span><i class="icon-basket"></i>Add to Cart</span></button>
                  </div>
                 
                </div>
                <!--add-to-box-->
                <!-- thm-mart Social Share-->
                <div class="social">
                  <ul class="link">
                    <li class="fb"> <a href="http://www.facebook.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                    <li class="linkedin"> <a href="http://www.linkedin.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                    <li class="tw"> <a href="http://twitter.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                    <li class="pintrest"> <a href="http://pinterest.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                    <li class="googleplus"> <a href="https://plus.google.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                  </ul>
                </div>
                <!-- thm-mart Social Share Close-->
              </div>
              <!--product-shop-->
              <!--Detail page static block for version 3-->
            </form>
          </div>
        </div> 
  </div> 
</div>
<!-- for fadding background on QuickView -->
<div class="quick-view-modal"></div>