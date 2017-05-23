@extends('vn.templates.public.template')

@section('main')
 <!-- Start Content -->
  <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
                                <div class="col-md-9">          
              
        
                      <!-- <div class="block-heading">
                          <a href="http://renting.com.vn/full-width-grid/" class="btn btn-primary btn-sm pull-right">View all types <i class="fa fa-long-arrow-right"></i></a>
                          <h4><span class="heading-icon"><i class="fa fa-home"></i></span>Villas</h4>
                      </div> -->
                    <div class="property-grid">
                      <ul class="grid-holder col-3">
                      @foreach($arItems as $key => $GioiThieu)
                      <?php
                        $name = $GioiThieu['ten_vn'];
                        $id = $GioiThieu['id'];
                        $diachi = $GioiThieu['diachi'];
                        $thoihan = $GioiThieu['thoihan'];
                        $gia = $GioiThieu['gia'];
                        $phong = $GioiThieu['phongtam'];
                        $giuong = $GioiThieu['giuong'];
                        $huong = $GioiThieu['huong_vn'];
                        $rong = $GioiThieu['rong'];
                        $id_hangsx = $GioiThieu['hname'];
                        $nameSeo = str_slug($name);
                        $hinhanh     = $GioiThieu['hinhanh'];
                        $picUrl         = asset("storage/app/files/{$hinhanh}");
                        $url = route('vn.public.phong.detail',['slug' => $nameSeo,'id' => $id]);
                      ?>
                        <li class="grid-item type-Long term">
                          <div class="property-block"><a href="{{$url}}" class="property-featured-image"> <img src="{{$picUrl}}" class="attachment-600-400-size size-600-400-size wp-post-image" alt="EVFeature" /> <span class="images-count"><i class="fa fa-picture-o"></i>
                           <?php 
                                $arMang1 = DB::table('thuvien')->where('id_list','=',$id)
                                
                                ->get();
                                $dem123 = count($arMang1);
                                echo $dem123;
                              ?>

                          </span> <span class="badges">@if($thoihan == 0) Dài hạn @else Ngắn hạn @endif</span>  </a>                            <div class="property-info">
                              <h4><a href="{{$url}}">{{$name}}</a></h4>
                              <div style="display:inline-block;width:100%;">
                              <div style="float:left;"><a class="accent-color" data-original-title="{{$diachi}}" data-toggle="tooltip" style="cursor:default; text-decoration:none;" href="javascript:void(0);"><span class="location sort_by_location"><!--Son Tra->Da Nang, -->
                              <?php 
                                $arMang = DB::table('phong as p')
                                ->join('hangsx as h','p.id_hangsx','=','h.id')
                                ->where('p.id','=',$id)
                                ->select('*','p.id as pid','h.id as hid', 'h.tenhsx as hname')
                                ->get();
                              ?>
                              @foreach($arMang as $key => $Mang)
                              <?php 
                              $hname = $Mang['hname'];
                              ?>
                              {{$hname}}
                              @endforeach
                              </span></a><br></div>
                              <div style="float:right;color:#00a9e0;font-weight:bold;padding-top:1px;">${{$gia}}/Tháng</div>
                              </div>
                              <!-- <div class="price"><strong>&#36;</strong><span>$2,800</span></div> -->
                            </div>
                            <div class="property-amenities clearfix"> <span class="area"><strong>{{$rong}}</strong>m<sup style="font-size:8px;">2</sup></span> <span class="baths"><strong>{{$phong}}</strong>Phòng</span> <span class="beds"><strong>{{$giuong}}</strong>Giường</span> <span class="parking"><strong>{{$huong}}</strong>Hướng</span> </div>
                          </div>
                        </li>
                        @endforeach
                                              </ul>
                    </div>
                   <center></center>
                  </div>
                 @include('vn.index.right_bar')

                   
              </div>
          </div>
      </div>
  </div>
@endsection
@section('title')
Tổng hợp - Villa | Apartment | House | Hotel | Vocation Rentals | Room for Rent in Danang
@endsection