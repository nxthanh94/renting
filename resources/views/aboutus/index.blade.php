@extends('templates.public.template')

@section('main')  
  <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
              <div class="col-md-12">
                  <div class="row">
<div class="col-md-6 " >
<?php
  $arGioiThieu = DB::table('gioithieu')->where('id','=','1')->get(); 
?>
@foreach($arGioiThieu as $key => $arGT)
<?php
  $name = $arGT['name'];
  $content = $arGT['content'];
  $content1 = $arGT['content1'];
  $content2 = $arGT['content2'];
  $content3 = $arGT['content3'];
  $content4 = $arGT['content4'];
  $content5 = $arGT['content5'];
  $content6 = $arGT['content6'];
?>
<h3 class="">{{$name}}</h3>
<p class="">{!!$content!!}</p>
</div>
<div class="col-md-6 " >
<h3 class="">Why you should choose our services</h3>
<div class="accordion" id="accordionsb">
<div class="accordion-group panel">
<div class="accordion-heading accordionize"> <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionsb" href="#sb0">  We provide professional services<br />
 <i class="fa fa-angle-down"></i> </a> </div>
<div id="sb0" class="accordion-body in collapse">
		<div class="accordion-inner"> 
      {!!$content1!!}
    </div>
</div>
<div class="accordion-group panel"></div>
<div class="accordion-heading accordionize"> <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordionsb" href="#sb1">  Friendly Agent<br />
 <i class="fa fa-angle-down"></i> </a> </div>
<div id="sb1" class="accordion-body  collapse">
			<div class="accordion-inner">  {!!$content2!!}
      </div>
</div>
</div>
<div class="accordion-group panel">
<div class="accordion-heading accordionize"> <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordionsb" href="#sb2">  Notifications for your rent payments<br />
 <i class="fa fa-angle-down"></i> </a> </div>
<div id="sb2" class="accordion-body  collapse">
					  <div class="accordion-inner">  {!!$content3!!}</div>
					</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 " >
<div class="block-heading"><h4 class=""><span class="heading-icon"><i class="fa fa-question"></i></span>FAQ</h4></div>
<div class="accordion" id="toggless">
<div class="accordion-group panel">
<div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#ss0"> Who are our clients?<br />
 <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
<div id="ss0" class="accordion-body collapse">
              <div class="accordion-inner">{!!$content4!!}</div>
            </div>
</div>
<div class="accordion-group panel">
<div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#ss1"> Do us have any real estate certificate?  <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
<div id="ss1" class="accordion-body collapse">
              <div class="accordion-inner">{!!$content5!!}</div>
            </div>
</div>
<div class="accordion-group panel">
<div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#ss2">  Where will you send your complaints about our services? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
<div id="ss2" class="accordion-body collapse">
              <div class="accordion-inner">{!!$content6!!}</div>
            </div>
@endforeach
</div>
</div>
</div>
</div>
<div class="share-bar">
<?php
  $arCaiDat = DB::table('caidat')->where('id','=','1')->get(); 
?>
@foreach($arCaiDat as $key => $arCD)
<?php
  $name3 = $arCD['name3'];
  $name6 = $arCD['name6'];
  $name4 = $arCD['name4'];
  $name17 = $arCD['name17'];
  $name18 = $arCD['name18'];
  $name19 = $arCD['name19'];
  $name11 = $arCD['name11'];
  $name5 = $arCD['name5'];
?>
  <ul class="share-buttons">
    <li class="share-title"><i class="fa fa-share-alt fa-2x"></i></li>
    <li class="facebook-share"><a href="{{$name3}}" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
    <li class="twitter-share"><a href="{!!$name6!!}" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li>
    <li class="google-share"><a href="{!!$name5!!}" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li>
    <li class="tumblr-share"><a href="{{$name4}}" target="_blank" title="Post to Tumblr"><i class="fa fa-tumblr"></i></a></li>
    <li class="pinterest-share"><a href="{!!$name17!!}" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li>
    <li class="reddit-share"><a href="{{$name18}}" target="_blank" title="Submit to Reddit"><i class="fa fa-reddit"></i></a></li>
    <li class="linkedin-share"><a href="{!!$name19!!}" target="_blank" title="Share on LinkedIn"><i class="fa fa-linkedin"></i></a></li>
    <li class="email-share"><a href="mailto:{{ $name11 }}"><i class="fa fa-envelope"></i></a></li>
    <li class="email-share"><a href="#" onclick="printDiv('printableArea')" title="Print"><i class="fa fa-print"></i></a></li>
  </ul>
@endforeach
            </div>                  </div>
                  <!-- Start Sidebar -->
                   
              </div>
          </div>
      </div>
  </div>
@endsection
@section('title')
About us - Villa | Apartment | House | Hotel | Vocation Rentals | Room for Rent in Danang
@endsection