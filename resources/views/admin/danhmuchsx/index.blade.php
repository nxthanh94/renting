@extends('templates.admin.template')

@section('main')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   Thể loại
                </h1>
                @if( Session::get('msg') != '')
                    <p style="color: red">{{ Session::get('msg') }}</p>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($arItems as $key => $arItem)
                <?php
                    $id         = $arItem['did'];
                    $dname         = $arItem['hname'];
                    $tenloai    = $arItem['dname'];
                    $urlDel     = route('admin.danhmuchsx.del', $id);
                    $urlEdit    = route('admin.danhmuchsx.edit', $id);
                ?>
                    <tr class="odd gradeX">
                        <td>{{ $id }}</td>
                        <td>{{ $tenloai }}</td>
                        <td>{{ $dname }}</td>
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