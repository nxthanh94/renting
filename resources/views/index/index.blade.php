@extends('templates.public.template')

@section('main')



   <!-- Start Content -->
          <div class="main" role="main"><div id="content" class="content full">      <div class="container"><div class="row"><div class="col-md-9">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#home" data-toggle="tab" id="long" class="hometab">Long term</a>
              </li>
              <li>
                <a href="#info" data-toggle="tab" id="short" class="hometab">Short term</a>
              </li>
              <li>
                <a href="#lienquan" data-toggle="tab" id="office" class="hometab">Office - Store</a>
              </li>
            </ul> 
<div class="tab-content">

<div id="home" class="tab-pane in active">
  <div class="property-grid">   
			   
  </div> 
  
</div>
<div id="info" class="tab-pane">
  <div class="property-grid">   
         
  </div>
</div>
<div id="lienquan" class="tab-pane ">
  <div class="property-grid">   
         
  </div>
</div>
</div>		 
</div>
			 @include('index.right_bar')

    </div></div>	</div>

                          

@endsection
@section('title')
<?php
  $arCat = DB::table("caidat")->get();
?>
@foreach($arCat as $key => $GioiThieu)
  <?php
    $name = $GioiThieu['name'];
  ?>
{{$name}}
@endforeach
@endsection