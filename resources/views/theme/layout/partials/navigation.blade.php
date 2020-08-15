<header> 
  <div id="header">
    <div class="header-container container">
	 <div class="row">
      <div class="logo"> 
        <a href="{{url('/')}}" title="Cronulla Florists" class="svg-click">
          <div><embed src="{{asset('theme/images/cronulla-florist-white.svg')}}" style="max-height:200px;"></div>
        </a> 
      </div>
      <div class="fl-nav-menu">
       
          <nav>
            <div class="mm-toggle-wrap">
              <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
            </div>
            <div class="nav-inner">
              <!-- BEGIN NAV -->
              <ul id="nav" class="hidden-xs">
                <li class="mega-menu"> <a class="level-top" href="{{ url('/category/designer-choice') }}"><span>Designer's Choice</span></a> </li>
                <li class="mega-menu"> <a class="level-top" href="{{ url('/category/bouquet') }}"><span>Bouquet</span></a> </li>
                <li class="mega-menu"> <a class="level-top" href="{{ url('/category/arrangement') }}"><span>Arrangement </span></a> </li>
                <li class="mega-menu"> <a class="level-top" href="{{ url('/category/plant') }}"><span>Plant</span></a> </li>
                <li class="mega-menu"> <a class="level-top" href="{{ url('/category/flower') }}"><span>Flower</span></a> </li>

              </ul>
              <!--nav-->
              </div>
              </nav>
        </div>
        <!--row-->
      </div>
      <div class="fl-header-right">
        <!-- <div class="fl-links">
          <div class="no-js"> <a title="Company" class="clicker"></a>
            <div class="fl-nav-links">
              <div class="language-currency">
                <div class="fl-language">
                  <ul class="lang">
                    <li><a href="#"> <img src="{{asset('theme/images/english.png')}}" alt="English"> <span>English</span> </a></li>
                    <li><a href="#"> <img src="{{asset('theme/images/francais.png')}}" alt="French"> <span>French</span> </a></li>
                    <li><a href="#"> <img src="{{asset('theme/images/german.png')}}" alt="German"> <span>German</span> </a></li>
                  </ul>
                </div> -->
                <!--fl-language-->
                <!-- END For version 1,2,3,4,6 -->
                <!-- For version 1,2,3,4,6 -->
                <!-- <div class="fl-currency">
                  <ul class="currencies_list">
                    <li><a href="#" title="EGP"> £</a></li>
                    <li><a href="#" title="EUR"> €</a></li>
                    <li><a href="#" title="USD"> $</a></li>
                  </ul>
                </div> -->
                <!--fl-currency-->
                <!-- END For version 1,2,3,4,6 -->
              <!-- </div>
              <ul class="links">
                <li><a href="dashboard.html" title="My Account">My Account</a></li>
                <li><a href="wishlist.html" title="Wishlist">Wishlist</a></li>
                <li><a href="checkout.html" title="Checkout">Checkout</a></li>
                {{-- <li><a href="blog.html" title="Blog"><span>Blog</span></a></li> --}}
                <li class="last"><a href="{{ url('/account') }}" title="Login"><span>Login</span></a></li>
              </ul>
            </div>
          </div>
          
        </div> -->
        <div class="fl-cart-contain">
          <div class="mini-cart">
          <div class="basket basketsmall" style="display:none" > 
              <a href="{{url('/shopping-cart')}}">
              <span class="badge badge-notify top-count">@if (Cart::isEmpty() == true)0 @else {{\Cart::getTotalQuantity()}} @endif</span></a> 
            </a> 
            </div>
            <div class="basket basketlarge"> 
              <a href="#"> 
              <span class="badge badge-notify top-count">@if (Cart::isEmpty() == true)0 @else {{\Cart::getTotalQuantity()}} @endif</span>
              </a> 
            </div>
            <div class="fl-mini-cart-content">
              <div class="block-subtitle" style="min-width: 330px;">
                <div class="top-subtotal"><span class="top-qty"> </span><span class="price" id="top-total"> </span></div>

                <!--top-subtotal-->
                <!--pull-right-->
              </div>
              <!--block-subtitle-->
              <ul class="mini-products-list" id="cart-sidebar">
                <li class="item first">
                </li>
              </ul>
              <div class="actions" style="display: none;">
                <button class="btn-checkout" title="View Cart" type="button" onClick="window.location.href='/shopping-cart'"><span>View Cart</span></button>               
              </div>
              <!--actions-->
            </div>
            <!--fl-mini-cart-content-->
          </div>
        </div>
        <!--mini-cart-->
        
          <div class="collapse navbar-collapse">
              <form class="navbar-form" role="search" method="GET" action="{{url('result/')}}">
                <div class="input-group">

                 <input class="GlobalNavSearch js-globalSearchInput" name="q" value="" placeholder="Search" id="desktopSearchInput"  data-reactid=".1.0.0.0">
                 <label class="GlobalNavSearch-searchIcon" for="desktopSearchInput" data-reactid=".1.0.0.1" style="margin-top:0px !important"></label>	
                 </div>
              </form>
          </div>
          <!--links-->
       
      </div>
    </div>
    </div>
	</div>	
  </header>