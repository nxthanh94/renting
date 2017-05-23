@extends('vn.templates.public.template')

@section('main')
 <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="single-property">
          <?php
            $name = $arNews['ten_vn'];
            $name12 = $name;
            $id = $arNews['id'];
            $id5 = $id;
            $chitiet = $arNews['chitiet_vn'];
            $diachi = $arNews['diachi'];
            $gia = $arNews['gia'];
            $thoihan = $arNews['thoihan'];
            $phong = $arNews['phongtam'];
            $giuong = $arNews['giuong'];
            $huong = $arNews['huong_vn'];
            $rong = $arNews['rong'];
            $id_hangsx = $arNews['hname'];
            $nameSeo = str_slug($name);
            $hinhanh     = $arNews['hinhanh'];
            $picUrl         = asset("storage/app/files/{$hinhanh}");
            $url = route('vn.public.phong.detail',['slug' => $nameSeo,'id' => $id]);
          ?>
            <span class ="property_zoom_level" id ="4"></span>
              <h2 class="page-title">{{$name}} <a class="accent-color" data-original-title="{{$diachi}}" data-toggle="tooltip" style="cursor:default; text-decoration:none;" href="javascript:void(0);"><span class="location sort_by_location">{{$diachi}}</span></a></h2>
              
<div id="printableArea">
             <div style="border: 1px solid #dddddd; padding:3px;background-color: #ffffff;    border-radius: 3px;    transition: all 0.2s ease-in-out;">
              <div class="property-slider" style="margin-bottom:0px;">
                <div id="property-images" class="flexslider">
                                  <ul class="slides">
                                  <?php
                                    $arCat = DB::table('thuvien')->where('id_list','=',$id5)
                                    ->get();
                                  ?>
                                  @foreach($arCat as $key => $GioiThieu)
                                  <?php
                                    $id = $GioiThieu['id'];
                                    $hinhanh     = $GioiThieu['hinhanh'];
                                    $picUrl         = asset("storage/app/files/{$hinhanh}");
                                  ?>
                                      <li class="item"> <img src="{{$picUrl}}" alt=""> </li>
                                  @endforeach   
                                    </ul>
                </div>
                                <div id="property-thumbs" class="flexslider">
                                    <ul class="slides">
                                    <?php
                                      $arCat = DB::table('thuvien')->where('id_list','=',$id5)
                                      ->get();;
                                    ?>
                                    @foreach($arCat as $key => $GioiThieu)
                                    <?php
                                      $id = $GioiThieu['id'];
                                      $hinhanh     = $GioiThieu['hinhanh'];
                                      $picUrl         = asset("storage/app/files/{$hinhanh}");
                                    ?>
                                      <li class="item"> <img src="{{$picUrl}}" alt=""> </li>
                                    @endforeach 
                                    </ul>
                </div>              </div>
              
			                <div class="property-amenities clearfix printhidden"> 
              <span class="area"><strong>@if($thoihan == 1) Dài hạn @else Ngắn hạn @endif</strong></span>         <span class="parking"><span style="font-weight:bold;color:#ff0000;">${{$gia}}</span> /Tháng</span>
              <span class="area"><strong>{{$rong}}</strong><span class="visible-xs"></span>m<sup style="font-size:8px;">2</sup></span>               <span class="baths"><strong>{{$phong}}</strong><span class="visible-xs"></span> Phòng</span>
              <span class="beds"><strong>{{$giuong}}</strong><span class="visible-xs"></span>Giường</span>
              <span class="parking"><strong>{{$huong}}</strong></span>  </div>
        			  
			 </div> 
<div class="printshow" style="margin-top:15px;">
		              <div style="margin-bottom:15px; padding-left: 150px;"> 
              FOR Long term | 			  Price : <span style="font-weight:bold;color:#ff0000 !important;">${{$gia}}</span> | 
              Area : {{$rong}}</strong> m2 |               Bath room : {{$phong}} |               Bed room : {{$giuong}} |               Direction : {{$huong}}<br> </div>
			     <div style="background: #26abe2 !important; -webkit-print-color-adjust: exact; color: #fff !important; font-size: 15px; font-weight: bold; padding: 5px 10px;">Description</div>
      <div style="font-family: Helvetica, Arial, sans-serif !important; margin: 15px;  font-size: 12px !important; text-align: justify !important; list-style: none !important;"><p>{{$name}}:</p>
{!!$chitiet!!}
<p>&nbsp;</p>
</div>
    <div style="background: #26abe2 !important; -webkit-print-color-adjust: exact; color: #fff !important; font-size: 15px; font-weight: bold; padding: 5px 10px;">Amenities</div>
      <div style="font-family: Helvetica, Arial, sans-serif !important; margin: 15px 15px;  font-size: 12px !important; text-align: justify !important; list-style: none !important;"><input type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> Air Conditioning</span> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> Balcony</span> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> Internet</span> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> Fridge</span> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> Cable TV</span> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> Fans</span> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> Furnished</span> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> Cupboards</span> &nbsp;&nbsp;&nbsp;</div>
    <div style="background: #26abe2 !important; -webkit-print-color-adjust: exact; color: #fff !important; font-size: 15px; font-weight: bold; padding: 5px 10px;">Maps</div>
      <div style="font-family: Helvetica, Arial, sans-serif !important; margin: 15px 15px;  font-size: 12px !important; text-align: justify !important; list-style: none !important;"><center><img src='https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=600x300&maptype=roadmap&markers=color:red%7Clabel:C%7C16.054901698889253,108.23143496477053
&key='</center></div>
<!-- <div style="background: #26abe2 !important; -webkit-print-color-adjust: exact; color: #fff !important; font-size: 15px; font-weight: bold; padding: 5px 10px;">Procedure</div>
      <div style="font-family: Helvetica, Arial, sans-serif !important; margin: 15px;  font-size: 12px !important; text-align: justify !important; list-style: none !important;"></div> -->
  <div style="margin-top: 20px; text-align: center; color: #999 !important; font-size: 12px;">
Visit http://renting.com.vn/?property=villa-euro-village-4br to view more.<br><br><b>ɠCopyright by SECONDHOMES CO.,LTD. All Rights Reserved.<br>Address: 2nd Floor, 155 Tran Phu Street, Hai Chau District, Danang City, Vietnam<br>Hotline: ֠Vietnamese: (+84) 925.030.999 ֠English: (+84) 905.80.83.88<br>Email: info@secondhomes.com.vn ֠Website: www.secondhomes.com.vn</b>
  </div>
</div>
</div>
              
					<div class="share-bar">
          <ul class="share-buttons">
              <li class="share-title"><i class="fa fa-share-alt fa-2x"></i></li>
              <li class="facebook-share"><a href="https://www.facebook.com/sharer/sharer.php?u={{$url}}" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
              <li class="twitter-share"><a href="https://twitter.com/intent/tweet?source={{$url}}" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li>
              <li class="google-share"><a href="https://plus.google.com/share?url={{$url}}" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li>
              <li class="tumblr-share"><a href="http://www.tumblr.com/share?v=3&u={{$url}}"><i class="fa fa-tumblr"></i></a></li>
              <li class="pinterest-share"><a href="http://pinterest.com/pin/create/button/?url={{$url}}" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li>
              <li class="reddit-share"><a href="http://www.reddit.com/submit?url={{$url}}" target="_blank" title="Submit to Reddit"><i class="fa fa-reddit"></i></a></li>
              <li class="linkedin-share"><a href="http://www.linkedin.com/shareArticle?mini=true&url={{$url}}" target="_blank" title="Share on LinkedIn"><i class="fa fa-linkedin"></i></a></li>
              <li class="email-share"><a href="mailto:?subject={{$name}}: {{$giuong}} bedrooms + {{$phong}} bathrooms , &nbsp;:{{$url}}" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li>
              <li class="email-share"><a href="" onclick="printDiv('printableArea')" title="Print"><i class="fa fa-print"></i></a></li>
          </ul>
            </div>                            <div class="tabs">
                <ul class="nav nav-tabs property-tab ul5">
                  <li class="active"> <a data-toggle="tab" href="#description"><span class="hidden-xs"> Mô tả </span><span class="visible-xs fa fa-info"></span></a> </li>
                  <li> <a data-toggle="tab" href="#amenities"><span class="hidden-xs"> Tiện nghi </span><span class="visible-xs fa fa-check-square-o"></span></a> </li>
                  <li> <a data-toggle="tab" href="#maps"><span class="hidden-xs"> Bản đồ </span><span class="visible-xs fa fa-map-marker"></span></a> </li>
				  <li style="display:none;"> <a data-toggle="tab" href="#viewmap"><span class="hidden-xs">View Map </span><span class="visible-xs">[M]</span></a> </li>
                  <!-- <li> <a data-toggle="tab" href="#procedure"><span class="hidden-xs"> Procedures </span><span class="visible-xs fa fa-briefcase"></span></a> </li> -->
                  <li> <a data-toggle="tab" href="#sendmail"><span class="hidden-xs"> Gửi yêu cầu </span><span class="visible-xs fa fa-at"></span></a> </li>
                </ul>
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <p>{{$name}}:</p>
{!!$chitiet!!}
<p>&nbsp;</p>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-building" aria-hidden="true"></i> ABOUT - {{$TenDM}}</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
    {!! $MotaDM !!}
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-briefcase" aria-hidden="true"></i> ABOUT THE DEVELOPER</a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        {!!$ChitietDM!!}
      </div>
    </div>
  </div>
		</div>
                  </div>
                  <div id="amenities" class="tab-pane">
                    	<div class="additional-amenities" style="margin-bottom:20px;">
                        <ul class="navailable">
                        
                          @foreach($tienichDM as $DM)
                          <li><input checked type="checkbox" name="amenities" value="40"></input><span class="available"><!-- <i class="fa fa-check-square"></i> <img src="checkmark.png">--> {{$DM['name_vn']}}</span></li>
                          @endforeach

                       </ul>                     	</div>
                  </div>

                  <div id="maps" class="tab-pane">
                    <iframe width='100%' height='500px' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?q=16.054901698889253,108.23143496477053&hl=es;z=7&amp;output=embed'></iframe>                  </div>
				<div id="viewmap">
                    
                  </div>
                  
                  <!-- <div id="procedure" class="tab-pane"></div> -->
					<div id="sendmail" class="tab-pane">
						<div id="form-messages"></div>
				<form id="ajax-contact" method="post" action="{{ route('public.contactus') }}">
        {{ csrf_field() }}
					<div class="row">
            <div class="form-group col-sm-6">
<!--
                <label for="name" class="h4">Full Name</label>
-->
                <input type="text" class="form-control" id="name" name="name" placeholder="" required>
            </div>
            <div class="form-group col-sm-6">
<!--
                <label for="email" class="h4">Email</label>
-->
                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
            </div>
			<div class="form-group col-sm-6">
<!--
                <label for="name" class="h4">Phone</label>
-->
                <input type="text" class="form-control" id="phone" name="phone" placeholder="" required>
            </div>
            <div class="form-group col-sm-6">
<!--
                <label for="email" class="h4">Company</label>
-->
                <input type="email" class="form-control" id="company" name="company" placeholder="">
            </div>
        </div>
        <div class="form-group">
<!--
            <label for="message" class="h4 ">Message</label>
-->
            <textarea id="message" name="noidung" class="form-control" rows="5" placeholder="" required></textarea>
        </div>
		<!-- <div class="g-recaptcha" data-sitekey="6LcJBicTAAAAACLPGLggEbJJY5wVv5oZzOH1kpFQ"></div> -->
        <button type="submit" class="btn btn-success btn-lg pull-right ">Submit</button>
	</form>
	<!-- <script src="http://phanvananh.com/api/js/contact.js"></script> -->


					</div>
                </div>
              </div>
               			   <br><br><div class="fb-comments" data-href="{{$url}}" data-numposts="5" data-width="100%"></div><br><br>
            </div>
            <!-- Start Related Properties -->
                        <h3>Chuyên mục liên quan</h3><hr>
            <div class="property-grid">
              <ul class="grid-holder col-3">
              @foreach($sPhamlienquan as $key => $GioiThieu)
              <?php
                $name = $GioiThieu['ten'];
                $id = $GioiThieu['id'];
                $diachi = $GioiThieu['diachi'];
                $gia = $GioiThieu['gia'];
                $phong = $GioiThieu['phongtam'];
                $giuong = $GioiThieu['giuong'];
                $huong = $GioiThieu['huong'];
                $rong = $GioiThieu['rong'];
                $nameSeo = str_slug($name);
                $hinhanh     = $GioiThieu['hinhanh'];
                $picUrl         = asset("storage/app/files/{$hinhanh}");
                $url = route('vn.public.phong.detail',['slug' => $nameSeo,'id' => $id]);
              ?>
                    <li class="grid-item type-Long term">
                <div class="property-block"><a href="{{$url}}" class="property-featured-image"> <img src="{{$picUrl}}" class="attachment-772-515-size size-772-515-size wp-post-image" alt="EVFeature" /> <span class="images-count"><i class="fa fa-picture-o"></i> <?php 
                                $arMang1 = DB::table('thuvien')->where('id_list','=',$id)
                                
                                ->get();
                                $dem123 = count($arMang1);
                                echo $dem123;
                              ?></span> <span class="badges">@if($thoihan == 0) Long term @else Short term @endif</span> </a>                            <div class="property-info">
                    <h4><a href="{{$url}}">{{$name}}</a></h4>
                    <div style="display:inline-block;width:100%;">
                    <div style="float:left;"><a class="accent-color" data-original-title="{{$diachi}}" data-toggle="tooltip" style="cursor:default; text-decoration:none;" href="javascript:void(0);"><span class="location sort_by_location"><!--Son Tra->Da Nang, -->{{$tenhsx}}</span></a><br></div>
                    <div style="float:right;color:#00a9e0;font-weight:bold;padding-top:1px;">${{$gia}}/month</div>
                    </div>
                    <!-- <div class="price"><strong>&#36;</strong><span>$2,800</span></div> -->
                  </div>
                  <div class="property-amenities clearfix"> <span class="area"><strong>{{$rong}}</strong>m<sup style="font-size:8px;">2</sup></span> <span class="baths"><strong>{{$phong}}</strong>Baths</span> <span class="beds"><strong>{{$giuong}}</strong>Beds</span> <span class="parking"><strong>{{$huong}}</strong>Direction</span> </div>
                </div>
              </li>
            @endforeach              
                             
                                
                              
                              </ul>
            </div>
                      </div>
         @include('vn.index.right_bar')






          </div>
      </div>
    </div>
  </div>
<!--Favourite Login Form-->
<div id="login-modal" class="modal fade" aria-hidden="true" aria-labelledby="mymodalLabel" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" aria-hidden="true" data-dismiss="modal" type="button">׼/button>
<h4 id="mymodalLabel" class="modal-title"> Login</h4>
</div>
<div class="modal-body"><form id="login" action="login" method="post">
<input type ="hidden" class ="redirect_login" name ="redirect_login" value =""/>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input class="form-control input1" id="loginname" type="text" name="loginname">
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-lock"></i></span>
<input class="form-control input1" id="password" type="password" name="password">
</div>
<div class="checkbox">
<input type="checkbox" checked="checked" value="true" name="rememberme" id="rememberme" class="checkbox"> Remember Me!</div>
<input class="submit_button btn btn-primary button2" type="submit" value="Login Now" name="submit">
<input type="hidden" id="security" name="security" value="00dda44cb5" /><input type="hidden" name="_wp_http_referer" value="/?property=villa-euro-village-4br" /><p class="status"></p>
</form></div>
<div class="modal-footer">
<button class="btn btn-default inverted" data-dismiss="modal" type="button">Close</button>
</div>
</div>
</div>
</div>
<!--Contact Agent Form-->
<div id="agentmodal" class="modal fade" aria-hidden="true" aria-labelledby="mymodalLabel" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" aria-hidden="true" data-dismiss="modal" type="button">׼/button>
<h4 id="mymodalLabel" class="modal-title"> Contact Agent</h4>
</div>
<div class="modal-body">
<div class="agent-contact-form">
                                      <h4>Contact Agent For <span class="accent-color">Classical Euro Village &#8211; 4BR</span></h4>
<form method="post" id="agentcontactform" name="agentcontactform" class="agent-contact-form" action="http://renting.com.vn/wp-content/themes/real-spaces/mail/agent_contact.php">
                                          <input type="email"  id="email" name="Email Address" class="form-control" placeholder="Email Address">
                                      	  <textarea name="comments" id="comments" class="form-control" placeholder="Your message" cols="10" rows="5"></textarea>
                                          <input type="hidden" name="image_path" id="image_path" value="http://renting.com.vn/wp-content/themes/real-spaces">
                                          <input id="agent_email" name="agent_email" type="hidden" value="ad.andytruong@gmail.com">
                                          <input type="hidden" value="Classical Euro Village &#8211; 4BR" name="subject" id="subject">
                                          <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                      </form> </div>
                                   <div class="clearfix"></div>
                                <div id="message"></div>
</div>
<div class="modal-footer">
<button class="btn btn-default inverted" data-dismiss="modal" type="button">Close</button>
</div>
</div>
</div>
</div>

  
@endsection
@section('title')
{{$name12}} - Villa | Apartment | House | Hotel | Vocation Rentals | Room for Rent in Danang
@endsection