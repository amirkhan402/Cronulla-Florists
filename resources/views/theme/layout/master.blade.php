<!DOCTYPE html>
<html lang="en">
  @include('theme.layout.partials.head')
  @yield('custom-style')
<body>
 <div class="loader" id="loader"></div>
<div id="page">
	@include('theme.layout.partials.navigation')
  <!--container-->
  <div class="content">
  
  	@yield('content')
  
  	@include('theme.layout.partials.footer')
  
	</div>
	<!-- container -->
</div>
<!--page-->
	@include('theme.layout.partials.mobile_menu')
	@include('theme.layout.partials.quick_view')
<!-- JavaScript -->
	@include('theme.layout.partials.script')
	
</body>
@yield('custom-script')
</html>
