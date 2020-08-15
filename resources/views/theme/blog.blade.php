@extends('theme.layout.master')
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
            <h1>Blog</h1>
          </div>
        </div>
        <!--col-xs-12--> 
      </div>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <!-- BEGIN Main Container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-left sidebar col-sm-3 blog-side">
          <div id="secondary" class="widget_wrapper13" role="complementary">
            <div id="recent-posts-4" class="popular-posts widget widget__sidebar wow bounceInUp animated animated" style="visibility: visible;">
              <h2 class="widget-title">Most Popular Posts</h2>
              <div class="widget-content">
                <ul class="posts-list unstyled clearfix">
                  <li>
            <figure class="featured-thumb"> <a href="#"> <img src={{asset('theme/images/blog.jpg')}} alt="blog image" title="blog image"> </a> </figure>
                    <!--featured-thumb-->
                    <div class="content-info">
                      <h4><a href="#" title="Lorem ipsum dolor sit amet">Powerful and flexible premium Ecommerce themes</a></h4>
                      <p class="post-meta">
                        <time class="entry-date">Jan 10, 2018 </time>
                        </p>
                    </div>
                  </li>
                  <li>
            <figure class="featured-thumb"> <a href="#"> <img src={{asset('theme/images/blog.jpg')}} alt="blog image" title="blog image"> </a> </figure>
                    <!--featured-thumb-->
                    <div class="content-info">
                      <h4><a href="#" title="Lorem ipsum dolor sit amet">Awesome template with lot's of features on the board!</a></h4>
                      <p class="post-meta">
                        <time class="entry-date">Feb 26, 2018 </time>
                        </p>
                    </div>
                  </li>
                   <li>
            <figure class="featured-thumb"> <a href="#"> <img src={{asset('theme/images/blog.jpg')}} alt="blog image"> </a> </figure>
                    <!--featured-thumb-->
                    <div class="content-info">
                      <h4><a href="#" title="Lorem ipsum dolor sit amet">Premium template with unlimited colours, and fully Customizable</a></h4>
                      <p class="post-meta">
                        <time class="entry-date">Mar 14, 2018 .</time>
                        </p>
                    </div>
                  </li>
                   <li>
            <figure class="featured-thumb"> <a href="#"> <img src={{asset('theme/images/blog.jpg')}} alt="blog image"> </a> </figure>
                    <!--featured-thumb-->
                    <div class="content-info">
                      <h4><a href="#" title="Lorem ipsum dolor sit amet">
  Powerful and flexible premium Ecommerce themes</a></h4>
                      <p class="post-meta">
                        <time class="entry-date">Apr 18, 2018 </time>
                        </p>
                    </div>
                  </li>
                </ul>
              </div>
              <!--widget-content--> 
            </div>
            <div id="categories-2" class="widget widget_categories wow bounceInUp animated animated" style="visibility: visible;">
              <h2 class="widget-title">Categories</h2>
              <div class="content">
              <ul>
      <li><a href="#">PhotoShop</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Illustration</a></li>
      <li><a href="#">Foods and Drinks</a></li>
      <li><a href="#">Social</a></li>
      <li><a href="#">Technology</a></li>
      <li><a href="#">Uncategorized</a></li>
      <li><a href="#">Videos</a></li>
          </ul>
              </div>
            </div>
            <!-- Banner Ad Block -->
  <div class="custom-slider">
            <div>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active"><img src={{asset('theme/images/blog.jpg')}} alt="slide3" title="slide3">
                    <div class="carousel-caption">
                    <h4>Todays Offer</h4>
                      <h3><a title=" Sample Product" href="product-detail.html">Up to 70% Off</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a class="link" href="#">Buy Now</a></div>
                  </div>
                  <div class="item"><img src={{asset('theme/images/blog.jpg')}} alt="slide1" title="slide1">
                    <div class="carousel-caption">
                     <h4>Black Flowers</h4>
                      <h3><a title=" Sample Product" href="#">Mega Sale</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                       <a class="link" href="#">Buy Now</a>
                    </div>
                  </div>
                  <div class="item"><img src={{asset('theme/images/blog.jpg')}} alt="slide2">
                    <div class="carousel-caption">
                    <h4>Flowers Farm</h4>
                      <h3><a title=" Sample Product" href="product-detail.html">Up to 50% Off</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                       <a class="link" href="#">Buy Now</a>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>
            </div>
          </div>
            <!-- Banner Text Block -->
            <div class="text-widget widget widget__sidebar">
              <h2 class="widget-title">Custom Widget</h2>
              <div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque cursus. Praesent nunc vitae magna pellentesque auctor. Quisque id lectus.<br>
                <br>
                Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada pharetra. Nulla neque sapien, sollicitudin non ornare quis, malesuada.</div>
            </div>
          </div>
        </div>
        <div class="col-main col-sm-9">
          <div id="main" class="blog-wrapper">
            <div id="primary" class="site-content">
              <div id="content" role="main">
                <article id="post-29" class="blog_entry clearfix wow bounceInUp animated animated" style="visibility: visible;">
                  <div class="blog_entry-header clearfix">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> <a href="blog-detail.html" rel="bookmark">Powerful and flexible premium Ecommerce themes</a> </h2>
                      
                    </div>
                    <!--blog_entry-header-inner--> 
                  </div>
                  <div class="entry-content">
                    <div class="featured-thumb">
                    <div class="entry-meta">
                        <div class="entry-date">Jul 10, 2018</div></div>
                    <a href="#"><img src={{asset('theme/images/blog.jpg')}} alt="blog-img3"  title="blog-img3"></a></div>
                    <div class="entry-content">
                      <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                      <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. </p>
                     
                    </div>
                    
                  </div>
                </article>
                <article id="post-30" class="blog_entry clearfix wow bounceInUp animated animated" style="visibility: visible;">
                  <div class="blog_entry-header clearfix">
                    <h2 class="blog_entry-title"> <a href="blog-detail.html" rel="bookmark">Awesome template with lot's of features on the board!</a> </h2>
               
                    <!--blog_entry-header-inner--> 
                  </div>
                  <div class="entry-content">
                    <div class="featured-thumb">
                         <div class="entry-meta">
                      <div class="entry-date">Jul 10, 2018</div></div>
                    <a href="#"><img src={{asset('theme/images/blog.jpg')}} alt="blog-img2" title="blog-img2"></a></div>
                    <div class="entry-content">
                      <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                      <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis.</p>
                    </div>
                   
                  </div>
                </article>
                <article id="post-31" class="blog_entry clearfix wow bounceInUp animated animated" style="visibility: visible;">
                  <div class="blog_entry-header clearfix">
                    <h2 class="blog_entry-title"> <a href="blog-detail.html" rel="bookmark">Premium template with unlimited colours, and fully Customizable</a> </h2>
                    
                    <!--blog_entry-header-inner--> 
                  </div>
                  <div class="entry-content">
                    <div class="featured-thumb">
                    <div class="entry-meta">
                      <div class="entry-date">Jul 10, 2018</div></div>
                    <a href="#"><img src={{asset('theme/images/blog.jpg')}} alt="blog-img1" title="blog-img1"></a></div>
                    <div class="entry-content">
                      <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                      <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis.</p>
                    </div>
                 
                  </div>
                </article>              
              </div>
            </div>
            <div class="pager">
              <div class="pages"> 
                <!--<strong></strong>-->
                <ol class="pagination">
                  <li class="active"><a href="">1</a></li>
                  <li><a class="button" href="blog.html?p=2">2</a></li>
                  <li> <a class="button next i-next" href="blog.html?p=2" title="Next"> » </a> </li>
                </ol>
              </div>
            </div>
          </div>
          <!--#main wrapper grid_8--> 
          
        </div>
        <!--col-main col-sm-9--> 
      </div>
    </div>
    <!--main-container--> 
    
  </div>
@endsection