<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul class="mobile-menu">
         @php
         $pageUrl = request()->segment(2);
         @endphp
    <li>
      @if($pageUrl == null)<div class="home"> @endif
        <a href="{{url('/')}}" title="Home"><i class="icon-home"></i> Home</a>
      @if($pageUrl == null) </div> @endif
    </li>
    <li>
      @if($pageUrl == 'designer-choice')<div class="home"> @endif
       <a href="{{ url('/category/designer-choice') }}" title="Designer's Choice">Designer's Choice</a>
      @if($pageUrl == 'designer-choice') </div> @endif 
    </li>

    <li>
      @if($pageUrl == 'bouquet')<div class="home"> @endif
      <a href="{{ url('/category/bouquet') }}" title="Bouquet">Bouquet</a>  
      @if($pageUrl == 'bouquet') </div> @endif 
    </li>  
    <li>
      @if($pageUrl == 'arrangement')<div class="home"> @endif
        <a href="{{ url('/category/arrangement') }}" title="Arrangments">Arrangement</a>  
      @if($pageUrl == 'arrangement') </div> @endif 
    </li>
    <li>
      @if($pageUrl == 'plant')<div class="home"> @endif
        <a href="{{ url('/category/plant') }}" title="Plant">Plant</a> 
      @if($pageUrl == 'plant') </div> @endif 
    </li>
    <li>
      @if($pageUrl == 'flower')<div class="home"> @endif
        <a href="{{ url('/category/flower') }}" title="Flower">Flower</a> 
      @if($pageUrl == 'flower') </div> @endif 
    </li>
  </ul>
</div>