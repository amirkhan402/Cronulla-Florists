@extends('theme.layout.master')
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h1>My Wishlist</h1>
</div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- BEGIN Main Container col2-right -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="my-account">
            
            <div class="my-wishlist">
              <form id="wishlist-view-form" action="#" method="post">
                <fieldset>
                  <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
				  <div class="table-responsive">
                  <table class="clean-table linearize-table data-table table-striped" id="wishlist-table">
                    <thead>
                      <tr class="first last">
                        <th class="customer-wishlist-item-image"></th>
                        <th class="customer-wishlist-item-info"></th>
                        <th class="customer-wishlist-item-quantity">Quantity</th>
                        <th class="customer-wishlist-item-price">Price</th>
                        <th class="customer-wishlist-item-cart"></th>
                        <th class="customer-wishlist-item-remove"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr id="item_32" class="first odd">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="#" title="Slim Fit Casual Shirt"> <img src={{asset('theme/images/product-image.jpg')}} width="80" height="80" alt="Slim Fit Casual Shirt" title="Slim Fit Casual Shirt"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="#" title="Slim Fit Casual Shirt">Retis lapen casen</a></h3>
                          <div class="description std">
                            <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[32]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[32]" value="1">
                            </div>
                          </div></td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-2"> <span class="price">$55.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(32);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" onClick="return confirmRemoveWishlistItem();" title="Clear Cart" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                      <tr id="item_34" class="even">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="product-detail.html" title="Vivante Gorgeous Cotton"> <img src={{asset('theme/images/product-image.jpg')}} width="80" height="80" alt="Vivante Gorgeous Cotton"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="product-detail.html" title="Vivante Gorgeous Cotton">Retis lapen casen</a></h3>
                          <div class="description std">
                            <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[34]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[34]" value="1">
                            </div>
                          </div></td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-24"> <span class="price">$99.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(34);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" onClick="return confirmRemoveWishlistItem();" title="Clear Cart" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                    </tbody>
                  </table>
				  </div>
                 
                  <div class="buttons-set buttons-set2">
                    <button type="submit" name="save_and_share" title="Share Wishlist" class="button btn-share"><span>Share Wishlist</span></button>
                    <button type="button" title="Add All to Cart" onClick="addAllWItemsToCart()" class="button btn-add"><span>Add All to Cart</span></button>
                    <button type="submit" name="do" title="Update Wishlist" class="button btn-update"><span>Update Wishlist</span></button>
                  </div>
                </fieldset>
              </form>
              <form id="wishlist-allcart-form" action="#" method="post">
                <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                <div class="no-display">
                  <input type="hidden" name="wishlist_id" id="wishlist_id" value="1">
                  <input type="hidden" name="qty" id="qty" value="">
                </div>
              </form>
             
            </div>
           
          </div>
        </section>
        <!--col-main col-sm-9 wow bounceInUp animated-->
        <aside class="col-right sidebar col-sm-3 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="block block-account">
            <div class="block-title"> My Account </div>
            <div class="block-content">
              <ul>
                <li><a href="#" title=" Account Dashboard"><span> Account Dashboard</span></a></li>
                <li><a href="#" title=" Account Information"><span> Account Information</span></a></li>
                <li><a href="#" title=" Address Book"><span> Address Book</span></a></li>
                <li><a href="#" title=" My Orders"><span> My Orders</span></a></li>
                <li><a href="#" title=" Billing Agreements"><span> Billing Agreements</span></a></li>
                <li><a href="#" title=" Recurring Profiles"><span> Recurring Profiles</span></a></li>
                <li><a href="#" title=" My Product Reviews"><span> My Product Reviews</span></a></li>
                <li class="current"><a title="My Wishlist">My Wishlist</a></li>
                <li><a href="#" title=" My Applications"><span> My Applications</span></a></li>
                <li><a href="#" title="Newsletter Subscriptions"><span> Newsletter Subscriptions</span></a></li>
                <li class="last"><a href="#" title="My Downloadable Products"><span> My Downloadable Products</span></a></li>
              </ul>
            </div>
            <!--block-content--> 
          </div>
          <!--block block-account-->
          
          
        </aside>
        <!--col-right sidebar col-sm-3 wow bounceInUp animated--> 
      </div>
      <!--row--> 
    </div>
    <!--main container--> 
  </section>
@endsection