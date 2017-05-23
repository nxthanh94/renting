@extends('templates.admin.template')

@section('main')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách tin tức
                </h1>
                @if( Session::get('msg') != '')
                    <p style="color: red">{{ Session::get('msg') }}</p>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th >Tên</th>
                        <th >Hình ảnh</th>
                        <th>Thời hạn</th>
                        <th >Thành phố</th>
                        <th >Quận</th>
                        <th >Loại hình</th>
                        <th >DM loại hình</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($arItems as $key => $arItem)
                <?php
                    $id     = $arItem['pid'];
                    $name     = $arItem['ten'];
                    $htenhsx     = $arItem['htenhsx'];
                    $dmname     = $arItem['dmname'];
                    $dmucname     = $arItem['dmucname'];
                    $dmuc1name     = $arItem['dmuc1name'];
                    $thoihan     = $arItem['thoihan'];
                    $thanhpho     = $arItem['id_hangsx'];
                    $quan     = $arItem['id_danhmuchsx'];
                    $id_danhmuc     = $arItem['id_danhmuc'];
                    $id_danhmuc1     = $arItem['id_danhmuc1'];
                    $hinhanh     = $arItem['hinhanh'];
                    $picUrl         = asset("storage/app/files/{$hinhanh}");
                    $urlDel  = route('admin.phong.del', $id);
                    $urlEdit = route('admin.phong.edit', $id);
                    $urlCT = route('admin.phong.chitiet', $id);
                    $urladd = route('admin.phong.editpic', $id);
                ?>
                    <tr class="odd gradeX" align="center">
                        <td>{{ $id }}</td>
                        <td><a href="{{ $urlCT }}">{{ $name }}</a></td>
                        <td>
                            @if($hinhanh != '')
                            <a href="{{$urladd}}"><img src="{{ $picUrl }}" width="100px" height="60px" /></a>
                            
                            @else
                            <span>--Chua up hinh--</span>
                            @endif
                        </td>
                        @if($thoihan == 0)
                        <td>Ngắn hạn</td>
                        @else
                        <td>Dài hạn</td>
                        @endif
                        <td>{{ $htenhsx }}</td>
                        <td>{{ $dmname }}</td>
                        <td>{{ $dmucname }}</td>
                        <td>{{ $dmuc1name }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                            <a href="{{ $urlDel }}" onclick="return confirm('Bạn chắc muốn xóa không ?');"> Xóa</a>
                        </td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i>
                            <a href="{{ $urlEdit }}">Sửa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


@endsection