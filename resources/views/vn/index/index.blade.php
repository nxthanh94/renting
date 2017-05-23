@extends('vn.templates.public.template')

@section('main')



   <!-- Start Content -->
          <div class="main" role="main"><div id="content" class="content full">      <div class="container"><div class="row"><div class="col-md-9">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#home1" data-toggle="tab" id="long1" class="hometab">Dài hạn</a>
              </li>
              <li>
                <a href="#info1" data-toggle="tab" id="short1" class="hometab">Ngắn hạn</a>
              </li>
              <li>
                <a href="#lienquan1" data-toggle="tab" id="office1" class="hometab">Tổng hợp</a>
              </li>
            </ul> 
<div class="tab-content">

<div id="home1" class="tab-pane in active">
  <div class="property-grid">   
			   
  </div> 
  
</div>
<div id="info1" class="tab-pane">
  <div class="property-grid">   
         
  </div>
</div>
<div id="lienquan1" class="tab-pane ">
  <div class="property-grid">   
         
  </div>
</div>
</div>		 
</div>
			 @include('vn.index.right_bar')

    </div></div>	</div>

                          

@endsection
@section('title')
<?php
  $arCat = DB::table("caidat")->get();
?>
@foreach($arCat as $key => $GioiThieu)
  <?php
    $name = $GioiThieu['name_vn'];
  ?>
{{$name}}
@endforeach
@endsection