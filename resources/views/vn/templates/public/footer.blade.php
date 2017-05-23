<!-- Start Site Footer -->
<footer class="site-footer-bottom" >
<div class="container">
<div class="footer-link">
<div style="float: left; text-align: left;">
<p><strong>SECONDHOMES CO.,LTD</strong><br />
<?php
  $arCat = DB::table("caidat")->get();
?>
  @foreach($arCat as $key => $GioiThieu)
  <?php
    $name3 = $GioiThieu['name3'];
    $name4 = $GioiThieu['name4'];
    $name5 = $GioiThieu['name5'];
    $name6 = $GioiThieu['name6'];
    $name7 = $GioiThieu['name7'];
    $name8 = $GioiThieu['name8_vn'];
    $name9 = $GioiThieu['name9'];
    $name10 = $GioiThieu['name10'];
    $name11 = $GioiThieu['name11'];
  ?>
{{$name8}}<br />
<i class="fa fa-phone"></i> Hotline: Vietnamese: {{$name9}} &#8211; English: {{$name10}}<br />
<i class="fa fa-whatsapp"></i> Viber, Whatsapp, Kakao Talk: {{$name10}}<br />
<i class="fa fa-envelope"></i> Email: {{$name11}}<br />
Website: <a href="http://renting.com.vn" target="_blank">www.renting.com.vn<br />
F</a>acebook: <a href="{{$name3}}" target="_blank">facebook.com/ApartmentsDanang</a></p>
</div>
<div class="footer-mobile-right">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>{{$name7}}<br />
All rights reserved.</p>
@endforeach
</div></div>

<!-- <div class="row">
<div class="copyrights-col-left col-md-6 col-sm-6">
<p>&copy; 2017 Villa | Apartment | House | Hotel | Vocation Rentals | Room for Rent in Danang. All Rights Reserved</p>
 </div>
  <div class="copyrights-col-right col-md-6 col-sm-6">
<div class="social-icons">
</div>
</div>
</div> -->
</div>
</footer>
<!-- End Site Footer -->
<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>  
</div>
<script type='text/javascript'>
/* <![CDATA[ */
var url_front_ajax = {"ajaxurl":"http:\/\/renting.com.vn\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='{{ $url_public }}/js/property.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var tmpurl = {"plugin_path":"http:\/\/renting.com.vn\/wp-content\/plugins\/favorite_property\/"};
/* ]]> */
</script>
<script type='text/javascript' src='{{ $url_public }}/js/favorite.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/newslatter.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/prettyphoto.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/jquery.flexslider.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/helper-plugins.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/bootstrap.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/waypoints.js'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&#038;ver=1.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var urlajax = {"url":"http:\/\/renting.com.vn\/wp-admin\/admin-ajax.php","tmpurl":"http:\/\/renting.com.vn\/wp-content\/themes\/real-spaces","is_property":"","sticky":"0","is_contact":"","home_url":"http:\/\/renting.com.vn","is_payment":"","register_url":"http:\/\/renting.com.vn\/register-as-agent\/","is_register":"","is_login":"","is_submit_property":"","basic":"Basic","advanced":"Advanced"};
/* ]]> */
</script>
<script type='text/javascript' src='{{ $url_public }}/js/init.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/profile_validate.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/comment-reply.min.js'></script>
<script type='text/javascript' src='{{ $url_public }}/js/wp-embed.min.js'></script>
<script>
jQuery(document).ready(function($){
    var qcsb = $('.widget-sticky');
    var origOffsetY = qcsb.offset().top;
    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            $('.widget-sticky').addClass('qc-sticky');
        } else {
            $('.widget-sticky').removeClass('qc-sticky');
        }
    }
    document.onscroll = scroll;
});
</script>
<script type='text/javascript' src='http://phanvananh.com/api/js/fbchat.js'></script>
<link rel='stylesheet' href='http://phanvananh.com/api/css/fbchat.css' type='text/css' />
<script type="text/javascript">jQuery(document).ready(function(t){t(window).scroll(function(){t(window).width()})}),setTimeout(function(){var t=f_read_cki("check_fist_vist_f");"1"==t?f_ck_chat():(f_ck_chat(),fb_ehide("f-chat-conent"),f_create_cki("f_chat_open","0",1),f_bt_start_chat())},1e3);</script>
<a title="Open Chat" id="chat_f_b_smal" onclick="chat_f_show()" class="chat_f_vt">Open Chat</a>
    <div id="b-c-facebook" class="chat_f_vt">
    	<div id="chat-f-b" onclick="b_f_chat()" class="chat-f-b">
    		<img class="chat-logo" src="http://phanvananh.com/api/img/fbchat/facebook.png" alt="logo chat" />
    		<label>Facebook Chat</label>
    		<span id="fb_alert_num">
    			1
    		</span>
    		<div id="t_f_chat">
    			<a title="Close Chat" href="javascript:;" onclick="chat_f_close()" id="chat_f_close" class="chat-left-5"><img src="http://phanvananh.com/api/img/fbchat/close.png" alt="Close chat" title="Close chat" /></a>
    		</div>
    	</div>
    	<div id="f-chat-conent" class="f-chat-conent">
    		<div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/ApartmentsDanang/" data-width="250" data-height="310" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true"
    		data-show-facepile="false" data-show-posts="true">
    		</div>
    		<div id="fb_chat_start">
    			<div id="f_enter_1" class="msg_b fb_hide">
    				Chào bạn! Cảm ơn bạn đã ghé thăm chúng tôi. Hãy nhấn nút Start để trò chuyện với sự hỗ trợ của chúng tôi :)
    			</div>
    			
    			<p id="f_enter_3" class="fb_hide" align="center">
    				<a href="javascript:;" onclick="f_bt_start_chat()" id="f_bt_start_chat">Start</a>
    			</p>
    			
    		</div>
    
    	</div>
    </div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1751148995166514',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84033600-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 940290876;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/940290876/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>