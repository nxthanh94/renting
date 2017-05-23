@extends('templates.public.template')

@section('main')
 <div class="main" role="main">
    <div id="content" class="content full">
        <span class ="property_zoom_level" id ="15"></span>      <div class="container">
        <div class="page">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h3>Quick Contact Form</h3>
              <div class="row">
                <form method="post" id="ajax-contact" action="{{ route('public.contactus') }}">
                {{ csrf_field() }}
                  <div class="col-md-12 margin-15">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control input-lg" placeholder="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control input-lg" placeholder="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="">
                    </div>
                 
                    <div class="form-group">
                      <textarea cols="6" rows="5" id="message" name="noidung" class="form-control input-lg" placeholder=""></textarea>
                     <br><div id="form-messages">
                       @if(Session::get('msg') != "")
                        <p style="color: red">{{ Session::get('msg') }}</p>
                      @endif
                     </div><br>
                      <input  type="submit" class="btn btn-primary btn-lg btn-block" value="Submit now!">
                    </div>
                  </div>
                </form>
        <!-- <script src="http://phanvananh.com/api/js/contact.js"></script> -->
              </div>
              <div class="clearfix"></div>
              <div id="message"></div>
            </div>
            <div class="col-md-6 col-sm-6">
              <h3>Our Location</h3>
              <div class="padding-as25 lgray-bg">
                  <p><strong>SECONDHOMES CO.,LTD</strong><br />
<?php
  $arCaiDat = DB::table('caidat')->where('id','=','1')->get(); 
?>
@foreach($arCaiDat as $key => $arCD)
<?php
  $name3 = $arCD['name3'];
  $name6 = $arCD['name6'];
  $name8 = $arCD['name8'];
  $name9 = $arCD['name9'];
  $name10 = $arCD['name10'];
  $name4 = $arCD['name4'];
  $name17 = $arCD['name17'];
  $name18 = $arCD['name18'];
  $name19 = $arCD['name19'];
  $name11 = $arCD['name11'];
  $name5 = $arCD['name5'];
?>
{{$name8}}<br />
<i class="fa fa-phone"></i> Hotline: Vietnamese: {{$name9}} ֠English: {{$name10}}<br />
<i class="fa fa-whatsapp"></i> Viber, Whatsapp, Kakao Talk: {{$name10}}<br />
<i class="fa fa-envelope"></i> Email: {{$name11}}<br />
Facebook: <a href="{!!$name3!!}" target="_blank">facebook.com/ApartmentsDanang</a></p>
<div id="contact51" class ="property_container" style="display:none;"><span class ="property_address">155 Tran Phu Street, Hai Chau, Danang City, Vietnam</span><span class ="latitude">16.0669313</span><span class ="longitude">108.22395529999994</span><span class ="property_image_url">http://renting.com.vn/wp-content/themes/real-spaces/images/map-marker.png</span></div>              </div>
          <div class="share-bar">
            <ul class="share-buttons">
    <li class="share-title"><i class="fa fa-share-alt fa-2x"></i></li>
    <li class="facebook-share"><a href="{!!$name3!!}" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
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
            </div>            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Site Showcase -->
              <div class="site-showcase"> 
              <!-- Start Page Header -->
                                                        <div class="clearfix map-single-page" id="onemap"></div>                                                       
                                                        <!-- End Page Header --> 
              </div>  
@endsection
@section('title')
Contact us - Villa | Apartment | House | Hotel | Vocation Rentals | Room for Rent in Danang
@endsection