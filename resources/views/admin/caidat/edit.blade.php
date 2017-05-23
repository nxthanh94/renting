@extends('templates.admin.template')

@section('main')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Cài đặt chính
                </h1>
                @if( Session::get('msg') != '')
                    <p style="color: red">{{ Session::get('msg') }}</p>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <?php
                $id = $arLoaisp['id'];
                $tenloai = $arLoaisp['name'];
                $tenloai_vn = $arLoaisp['name_vn'];
                $tenloai1 = $arLoaisp['name1'];
                $tenloai1_vn = $arLoaisp['name1_vn'];
                $tenloai2 = $arLoaisp['name2'];
                $tenloai2_vn = $arLoaisp['name2_vn'];
                $tenloai3 = $arLoaisp['name3'];
                $tenloai4 = $arLoaisp['name4'];
                $tenloai5 = $arLoaisp['name5'];
                $tenloai6 = $arLoaisp['name6'];
                $tenloai7 = $arLoaisp['name7'];
                $tenloai8 = $arLoaisp['name8'];
                $tenloai8_vn = $arLoaisp['name8_vn'];
                $tenloai9 = $arLoaisp['name9'];
                $tenloai10 = $arLoaisp['name10'];
                $tenloai11 = $arLoaisp['name11'];
                $tenloai12 = $arLoaisp['name12'];
                $tenloai13 = $arLoaisp['name13'];
                $tenloai13_vn = $arLoaisp['name13_vn'];
                $tenloai14 = $arLoaisp['name14'];
                $tenloai15 = $arLoaisp['name15'];
                $tenloai15_vn = $arLoaisp['name15_vn'];
                $tenloai16 = $arLoaisp['name16'];
                $tenloai17 = $arLoaisp['name17'];
                $tenloai18 = $arLoaisp['name18'];
                $tenloai19 = $arLoaisp['name19'];
                $picture = $arLoaisp['hinhanh1'];
                $picUrl     = asset("storage/app/files/{$picture}");
                $picture1 = $arLoaisp['hinhanh2'];
                $picUrl1     = asset("storage/app/files/{$picture1}");
            ?>
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.caidat.edit', $id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Thẻ title</label>
                        <input class="form-control" name="name" placeholder="Vui lòng nhập ( ENG )"  value="{{ $tenloai }}" /><br />
                         @if ($errors->Has ('name'))
                           <p style="color:red"> {!!  $errors->First ('name') !!} </p>
                        @endif
                        <input class="form-control" name="name_vn" placeholder="Vui lòng nhập ( VN ) "  value="{{ $tenloai_vn }}" />
                    </div>
                    <div class="form-group">
                        <label>Thẻ meta mô tả</label>
                        <input class="form-control" name="name1" placeholder="Vui lòng nhập  ( ENG )"  value="{{ $tenloai1 }}" /><br />
                        <input class="form-control" name="name1_vn" placeholder="Vui lòng nhập ( VN ) "  value="{{ $tenloai1_vn }}" />
                    </div>
                    <div class="form-group">
                        <label>Thẻ meta keywords</label>
                        <input class="form-control" name="name2" placeholder="Vui lòng nhập ( ENG )"  value="{{ $tenloai2 }}" /><br />
                        <input class="form-control" name="name2_vn" placeholder="Vui lòng nhập ( VN )"  value="{{ $tenloai2_vn }}" />
                    </div>
                    <div class="form-group">
                        <label>Link facebook</label>
                        <input class="form-control" name="name3" placeholder="Vui lòng nhập"  value="{{ $tenloai3 }}" />
                    </div>
                    <div class="form-group">
                        <label>Link Tumblr</label>
                        <input class="form-control" name="name4" placeholder="Vui lòng nhập "  value="{{ $tenloai4 }}" />
                    </div>
                    <div class="form-group">
                        <label>Link google</label>
                        <input class="form-control" name="name5" placeholder="Vui lòng nhập"  value="{{ $tenloai5 }}" />
                    </div>
                    <div class="form-group">
                        <label>Link twitter</label>
                        <input class="form-control" name="name6" placeholder="Vui lòng nhập"  value="{{ $tenloai6 }}" />
                    </div>
                    <div class="form-group">
                        <label>Link Pin it</label>
                        <input class="form-control" name="name17" placeholder="Vui lòng nhập"  value="{{ $tenloai17 }}" />
                    </div>
                    <div class="form-group">
                        <label>Link Reddit</label>
                        <input class="form-control" name="name18" placeholder="Vui lòng nhập"  value="{{ $tenloai18 }}" />
                    </div>
                    <div class="form-group">
                        <label>Link Linkedln</label>
                        <input class="form-control" name="name19" placeholder="Vui lòng nhập"  value="{{ $tenloai19 }}" />
                    </div>
                    <div class="form-group">
                        <label>Footer copy right</label>
                        <input class="form-control" name="name7" placeholder="Vui lòng nhập"  value="{{ $tenloai7 }}" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="name8" placeholder="Vui lòng nhập ( ENG )"  value="{{ $tenloai8 }}" /><br />
                        <input class="form-control" name="name8_vn" placeholder="Vui lòng nhập ( VN )"  value="{{ $tenloai8_vn }}" />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" name="name9" placeholder="Vui lòng nhập"  value="{{ $tenloai9 }}" />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại 2</label>
                        <input class="form-control" name="name10" placeholder="Vui lòng nhập"  value="{{ $tenloai10 }}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="name11" placeholder="Vui lòng nhập"  value="{{ $tenloai11 }}" />
                    </div>
                    <div class="form-group">
                        <label>Bản đồ</label>
                        <input class="form-control" name="name12" placeholder="Vui lòng nhập"  value="{{ $tenloai12 }}" />
                    </div>
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cài đặt thêm
                        </h1>
                    </div>
                    <div class="form-group">
                        <label>Phòng ban 1</label>
                        <input class="form-control" name="name13" placeholder="Vui lòng nhập ( ENG )"  value="{{ $tenloai13 }}" /><br />
                        <input class="form-control" name="name13_vn" placeholder="Vui lòng nhập ( VN )"  value="{{ $tenloai13_vn }}" />
                    </div>
                    <div class="form-group">
                        <label>SĐT phòng ban 1</label>
                        <input class="form-control" name="name14" placeholder="Vui lòng nhập"  value="{{ $tenloai14 }}" />
                    </div>
                    <div class="form-group">
                        <label>Avata</label>
                        <input type="file" name="picture">
                    </div>
                    <div class="form-group">
                        <label>Avata cũ</label>
                        <img src="{{ $picUrl }}" width="100px" />
                    </div>
                    <div class="form-group">
                        <label>Phòng ban 2</label>
                        <input class="form-control" name="name15" placeholder="Vui lòng nhập ( ENG )"  value="{{ $tenloai15 }}" /><br />
                        <input class="form-control" name="name15_vn" placeholder="Vui lòng nhập ( VN )"  value="{{ $tenloai15_vn }}" />
                    </div>
                    <div class="form-group">
                        <label>SĐT phòng ban 2</label>
                        <input class="form-control" name="name16" placeholder="Vui lòng nhập"  value="{{ $tenloai16 }}" />
                    </div>
                    <div class="form-group">
                        <label>Avata1</label>
                        <input type="file" name="picture1">
                    </div>
                    <div class="form-group">
                        <label>Avata1 cũ</label>
                        <img src="{{ $picUrl1 }}" width="100px" />
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@endsection