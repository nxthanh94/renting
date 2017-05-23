@extends('templates.admin.template')

@section('main')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Chi tiết
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th >Tên</th>
                        <th >Diện tích</th>
                        <th>Phòng tắm</th>
                        <th >Giường</th>
                        <th >Giá</th>
                        <th >Hướng</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $ten     = $arItem['ten'];
                    $id     = $arItem['id'];
                    $rong     = $arItem['rong'];
                    $phongtam     = $arItem['phongtam'];
                    $giuong     = $arItem['giuong'];
                    $gia     = $arItem['gia'];
                    $huong     = $arItem['huong'];
                    $urlEdit = route('admin.phong.edit', $id);
                ?>
                    <tr class="odd gradeX" >
                        <td><a href="{{route('admin.phong.index')}}">{{ $ten }}</a></td>
                        <td>{!! $rong !!}</td>
                        <td>{!! $phongtam !!}</td>
                        <td>{!! $giuong !!}</td>
                        <td>{!! $gia !!}</td>
                        <td>{!! $huong !!}</td>
                         <td class="center"><i class="fa fa-pencil fa-fw"></i>
                            <a href="{{ $urlEdit }}">Sửa</a>
                        </td>
                    </tr>
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