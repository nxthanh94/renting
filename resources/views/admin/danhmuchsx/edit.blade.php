@extends('templates.admin.template')

@section('main')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Sửa
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php
                $id = $arNews['id'];
                $tenloai = $arNews['name'];
            ?>
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.danhmuchsx.edit', $id) }}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                    <label>Danh mục</label>
                    <select class="form-control" name="id_list">
                    @foreach($arQCao as $key => $arQC)
                    @if($arQC['id'] == $id)
                        <option selected="selected" value="{{ $arQC['id'] }} ">{{ $arQC['name'] }}</option>
                    @else
                        <option  value="{{ $arQC['id'] }}">{{ $arQC['name'] }}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="name" placeholder="Vui lòng nhập tên thể loại" required value="{{ $tenloai }}" />
                         @if ($errors->Has ('name'))
                           <p style="color:red"> {!!  $errors->First ('name') !!} </p>
                        @endif
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