@extends('theme.layout.master')
@section('content')
<!-- Main Container -->
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
       <div class="page-title"><h2>404 Page</h2></div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>

<section class="content-wrapper">
  <div class="container">
    <div class="std">
      <div class="page-not-found">
      <br>
        <div><img src="{{url('theme/images/404-img.png')}}" class="image404" alt="error image"></div>
        <h3>Oops! The Page you requested was not found!</h3>
        <div><a href="{{url('/')}}" class="btn-home"><span>Back To Home</span></a></div>
      </div>
    </div>
  </div>
</section>
<!-- Main Container End -->
@endsection