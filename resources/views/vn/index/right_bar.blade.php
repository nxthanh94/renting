<div class="sidebar right-sidebar col-md-3">	  
<form id="qsearchbox" method="get" action="{{ route('public.phong.timkiem') }}">
                    <input type="hidden" class="form-control" name="s" id="s" value="Search1" />
                    <div style="margin-bottom:25px;">
    
<div class="search_by">
    <div class="search-field"><!-- <label>T? kh󡼯label> -->
     	<input type="text" name="tukhoa" class="form-control input-lg search_by_keyword" placeholder="Từ khóa">
    </div>
</div>

	<div class="search-field">
    <select id="longshort" name="longshort" class="form-control ">
        <option selected>Thời hạn</option>
        <option value='1'>Dài hạn (Khoảng 6 tháng)</option>
        <option value='2'>Ngắn hạn</option>
    </select>
  </div>	

	<div class="search-field">
    <select id="theloai" class="form-control" name="danhmuc">
      <option selected value='0'>Bất động sản</option>
      <?php 
        $arDMuc = DB::table('danhmuc')->get();
      ?>
      @foreach($arDMuc as $key => $arDM)
        <?php
            $id = $arDM['id'];
            $name = $arDM['name_vn'];
        ?>
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach

    </select>
  </div>

  <div class="hide1">
    <select id="loaitin" class="form-control" name="danhmuc1">
      <option selected value='0'>Bất động sản</option>
      <?php 
        $arDMuc1 = DB::table('danhmuc1')->get();
      ?>
      @foreach($arDMuc1 as $key => $arDM1)
        <?php
            $id = $arDM1['id'];
            $name = $arDM1['name_vn'];
        ?>
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach

    </select>
  </div>

  <div class="search-field">
    <select id="hangsx" class="form-control" name="tinh">
      <option selected value='0'>Thành phố</option>
      <optgroup label="Vietnam">
      <?php 
        $arTinh = DB::table('hangsx')->get();
      ?>
      @foreach($arTinh as $key => $arQC1)
        <?php
            $id = $arQC1['id'];
            $name = $arQC1['tenhsx_vn'];
        ?>
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
  </div>

  <div class="form-group">
    <select class="form-control " id="danhmuchsx" name="huyen">
    <option value='0' >Huyện</option>
    <?php 
      $arHuyen = DB::table('danhmuchsx')->get();
      ?>
      @foreach($arHuyen as $key => $arH)
      <?php
      $id = $arH['id'];
      $name = $arH['name_vn'];
      ?>
      <option class="hide" value="{{ $id }}">{{ $name }}</option>
      @endforeach
    </select>
  </div>
<div id="minmax">
  <select id="loaitin" class="form-control" name="min">
      <option selected value='0'>Giá thấp nhất(tháng)</option>
      <?php 
        $arPhong = DB::table('phong')->orderBy('gia','asc')->get();
      ?>
      @foreach($arPhong as $key => $arP)
        <?php
            $id = $arP['id'];
            $gia = $arP['gia'];
        ?>
            <option value="{{ $id }}">${{ $gia }}</option>
        @endforeach

    </select>
    <select id="loaitin" class="form-control" name="max">
      <option selected value='0'>Giá cao nhất(tháng)</option>
      <?php 
        $arPhong1 = DB::table('phong')->orderBy('gia','asc')->get();
      ?>
      @foreach($arPhong1 as $key => $arP1)
        <?php
            $id = $arP1['id'];
            $gia = $arP1['gia'];
        ?>
            <option value="{{ $gia }}">${{ $gia }}</option>
        @endforeach

    </select>
</div>

    <div class="search-field">
        <!-- <label>Max</label> -->
        <input type="text" name="min_area"  class="form-control input-lg search_by_m2" placeholder="Min m2">
    </div>
    <div class="search-field">
        <!-- <label>Min</label> -->
        <input type="text" name="max_area"  class="form-control input-lg search_by_m2" placeholder="Max m2">
    </div>

	<div class="search-button"> <button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-search"></i> Tìm kiếm </button> </div> 

                      </div>
                </form>
                
					
<p></p>

 
  <div id="text-5" class="widget sidebar-widget widget_text">			<div class="textwidget"><div class="widget-sticky">
<h3 class="widgettitle">Hỗ trợ</h3>
<div class="textwidget">

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
    $name13 = $GioiThieu['name13_vn'];
    $name14 = $GioiThieu['name14'];
    $name15 = $GioiThieu['name15_vn'];
    $name16 = $GioiThieu['name16'];
    $hinhanh     = $GioiThieu['hinhanh1'];
    $picUrl         = asset("storage/app/files/{$hinhanh}");
    $hinhanh1     = $GioiThieu['hinhanh2'];
    $picUrl1         = asset("storage/app/files/{$hinhanh1}");
  ?>
<div class="widget-support" style="margin-top:-13px;"><div class="ava"><img src="{{$picUrl}}"></div><div style="float:left;"><span class="name">{{$name13}}</span><br><i class="fa fa-phone"></i>&nbsp; {{$name14}}<br><i class="fa fa-envelope"></i> {{$name11}}</div></div>

<div class="widget-support"><div class="ava"><img src="{{$picUrl1}}"></div><div style="float:left;"><span class="name">{{$name15}}</span><br><i class="fa fa-phone"></i>&nbsp; {{$name16}}<br><i class="fa fa-envelope"></i> {{$name11}}</div></div>

</div></div></div>
		</div></div>
@endforeach