@extends('theme.layout.master')
@section('content')
<div class="page-heading">
        <div class="breadcrumbs">
          <div class="container">
            <div class="row">
              <div>
                <ul>
                  <li class="home"> <a href="{{url('/')}}" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
                  <li class="category1601"> <strong>Categories</strong> </li>
                </ul>
              </div>
              <!--col-xs-12--> 
            
           
        <div class="page-title">
          <h1>Categories</h1>
        </div>
         <!--row--> 
         </div>
          </div>
          <!--container--> 
        </div>
      </div>
      <!--breadcrumbs--> 
      <!-- BEGIN Main Container col2-left -->
      <section class="main-container col2-left-layout bounceInUp animated categories-container">  
        <!-- For version 1, 2, 3, 8 --> 
        <!-- For version 1, 2, 3 -->
        <div class="container">
          <div class="row">
            <div class="col-main product-grid">
            <div class="pro-coloumn">
              <article class="col-main">
               
                <div class="col-main col-sm-12 product-grid">
                <div class="category-description std">
                </div>
                  <ul class="products-grid">
                      <div class="row">
                            <li class="col-lg-3 col-md-43 col-sm-3 col-xs-6">
                                    <div class="item">
                                                      <div class="item-inner">
                                                        <div class="item-img">
                                                          {{-- <div class="pro--quickview"><a class="link-quickview" href="{{url('/category/designer-choice')}}"> Quick View </a> </div> --}}
                                                        <div class="item-img-info"> <a class="product-image" title="Designer's Choice" href="{{url('/category/designer-choice')}}"> <img alt="Designer's Choice" src="{{'https://'.$products[0]['feature_image']}}"> </a> </div>
                                                        </div>
                                                        <div class="item-info">
                                                          <div class="info-inner">
                                                            <div class="item-title"> <a title="Designer's Choice" href="{{url('/category/designer-choice')}}"> Designer's Choice </a> </div>
                                                          </div>
                
                                                        </div>
                                                      </div>
                                                    </div>
                                            
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <div class="item">
                                                              <div class="item-inner">
                                                                <div class="item-img">
                                                                  {{-- <div class="pro--quickview"><a class="link-quickview" href="{{url('/category/bouquet')}}"> Quick View </a> </div> --}}
                                                                  <div class="item-img-info"> <a class="product-image" title="Bouquet" href="{{url('/category/bouquet')}}"> <img alt="Bouquet" src="{{'https://'.$products[1]['feature_image']}}"> </a> </div>
                                                                </div>
                                                                <div class="item-info">
                                                                  <div class="info-inner">
                                                                    <div class="item-title"> <a title="Bouquet" href="{{url('/category/bouquet')}}"> Bouquet </a> </div>
                                                                  </div>
                        
                                                                </div>
                                                              </div>
                                                            </div>
                                                    
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <div class="item">
                                                                      <div class="item-inner">
                                                                        <div class="item-img">
                                                                          {{-- <div class="pro--quickview"><a class="link-quickview" href="{{url('/category/arrangement')}}" title="arrangement"> Quick View </a> </div> --}}
                                                                          <div class="item-img-info"> <a class="product-image" title="Arrangments" href="{{url('/category/arrangement')}}"> <img alt="Arrangments" src="{{'https://'.$products[2]['feature_image']}}" title="Arrangments" > </a> </div>
                                                                        </div>
                                                                        <div class="item-info">
                                                                          <div class="info-inner">
                                                                            <div class="item-title"> <a title="Arrangments" href="{{url('/category/arrangement')}}"> Arrangments </a> </div>
                                                                          </div>
                                
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                            
                                                    </li>
                      </div>
                      <div class="row">
                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="item">
                                                      <div class="item-inner">
                                                        <div class="item-img">
                                                          {{-- <div class="pro--quickview"><a class="link-quickview" href="{{url('/category/plant')}}"> Quick View </a> </div> --}}
                                                          <div class="item-img-info"> <a class="product-image" title="Plants" href="{{url('/category/plant')}}"> <img alt="Plants" src="{{'http://'.$products[3]['feature_image']}}" title="Plants"> </a> </div>
                                                        </div>
                                                        <div class="item-info">
                                                          <div class="info-inner">
                                                            <div class="item-title"> <a title="Plants" href="{{url('/category/plant')}}"> Plants </a> </div>
                                                          </div>
                
                                                        </div>
                                                      </div>
                                                    </div>
                                            
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <div class="item">
                                                              <div class="item-inner">
                                                                <div class="item-img">
                                                                  {{-- <div class="pro--quickview"><a class="link-quickview" href="{{url('/category/flower')}}" title="Quick View"> Quick View </a> </div> --}}
                                                                  <div class="item-img-info"> <a class="product-image" title="Flowers" href="{{url('/category/flower')}}" title="flower"> <img alt="Flowers" src="{{'http://'.$products[4]['feature_image']}}" title="flower"> </a> </div>
                                                                </div>
                                                                <div class="item-info">
                                                                  <div class="info-inner">
                                                                    <div class="item-title"> <a title="Flowers" href="{{url('/category/flower')}}"> Flowers </a> </div>
                                                                  </div>
                        
                                                                </div>
                                                              </div>
                                                            </div>
                                                    
                                            </li>

                                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <div class="item">
                                           <div class="item-inner">
                                             <div class="item-img">
                                               <div class="item-img-info"> <a class="product-image" title="Christmas Flowers" href="{{url('category/christmas-flowers')}}" title="flower"> <img alt="Christmas Flowers" src="{{asset('theme/images/christmas.jpg')}}" title="flower"> </a> </div>
                                             </div>
                                             <div class="item-info">
                                               <div class="info-inner">
                                                 <div class="item-title"> <a title="Christmas Flowers" href="{{url('category/christmas-flowers')}}"> Christmas Flowers </a> </div>
                                               </div>
    
                                             </div>
                                           </div>
                                         </div>
                                                    
                                            </li>
                      </div>
                                                  
                  </ul>
                  <div class="toolbar">
                </div>
                </div>
                
                
              </article>
              </div>
              <!--	///*///======    End article  ========= //*/// --> 
            </div>
           
          </div>
          <!--row--> 
        </div>
        <!--container--> 
      </section>
@endsection