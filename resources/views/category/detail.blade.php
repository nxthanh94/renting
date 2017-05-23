@extends('templates.public.template')

@section('main')
<div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
                <?php
                  $id = $arNews['id'];
                  $preview = $arNews['preview'];
                  $name = $arNews['name'];
                  $name1 = $name;
                  $detail = $arNews['detail'];
                  $date = $arNews['created_at'];
                  $hinhanh = $arNews['picture'];
                  $picUrl = asset("storage/app/files/{$hinhanh}");
                  $nameSeo = str_slug($name);
                  $url = route('public.category.detail',['slug' => $nameSeo,'id' => $id]);
                ?>
             
                                <div class="col-md-9">				  <h3>{{$name}}</h3>
				  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          {!!$detail!!}
				  </div>
				<br>
                    <div class="property-grid">
                      <ul class="grid-holder col-3">
                      @foreach($arSanPham as $key => $SP)
                        <?php
                          $name = $SP['ten'];
                          $id = $SP['id'];
                          $chitiet = $SP['chitiet'];
                          $diachi = $SP['diachi'];
                          $gia = $SP['gia'];
                          $thoihan = $SP['thoihan'];
                          $phong = $SP['phongtam'];
                          $giuong = $SP['giuong'];
                          $huong = $SP['huong'];
                          $rong = $SP['rong'];
                          $nameSeo = str_slug($name);
                          $hinhanh     = $SP['hinhanh'];
                          $picUrl         = asset("storage/app/files/{$hinhanh}");
                          $url = route('public.phong.detail',['slug' => $nameSeo,'id' => $id]);
                        ?>                      
                          <li class="grid-item type-Long term">
                            <div class="property-block"><a href="{{$url}}" class="property-featured-image"> <img src="{{$picUrl}}" class="attachment-600-400-size size-600-400-size wp-post-image" alt="{{$nameSeo}}" /> <span class="images-count"><i class="fa fa-picture-o"></i> <?php 
                                $arMang1 = DB::table('thuvien')->where('id_list','=',$id)
                                
                                ->get();
                                $dem123 = count($arMang1);
                                echo $dem123;
                              ?></span> <span class="badges">@if($thoihan == 0) Long term @else Short term @endif</span>  </a>                            <div class="property-info">
                                <h4><a href="{{$url}}">{{$name}}</a></h4>
                                <div style="display:inline-block;width:100%;">
                                <div style="float:left;"><a class="accent-color" data-original-title="{{$diachi}}" data-toggle="tooltip" style="cursor:default; text-decoration:none;" href="javascript:void(0);"><span class="location sort_by_location"><!--Ngu Hanh Son, --><?php 
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
                                <div style="float:right;color:#00a9e0;font-weight:bold;padding-top:1px;">${{$gia}}/month</div>
                                </div>
                                <!-- <div class="price"><strong></strong><span>$1,700</span></div> -->
                              </div>
                              <div class="property-amenities clearfix"> <span class="area"><strong>{{$rong}}</strong>m<sup style="font-size:8px;">2</sup></span> <span class="baths"><strong>{{$phong}}</strong>baths</span> <span class="beds"><strong>{{$giuong}}</strong>beds</span> <span class="parking"><strong>{{$huong}}</strong>direction</span> </div>
                            </div>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                   <center></center>
                  </div>
                 @include('index.right_bar')
                   
              </div>
          </div>
      </div>
  </div>
@endsection
@section('title')
{{$name1}} - Villa | Apartment | House | Hotel | Vocation Rentals | Room for Rent in Danang
@endsection