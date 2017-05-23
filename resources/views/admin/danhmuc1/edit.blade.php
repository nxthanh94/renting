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
                $tenloai_vn = $arNews['name_vn'];
                $mota = $arNews['mota'];
                $mota_vn = $arNews['mota_vn'];
                $chitiet = $arNews['chitiet'];
                $chitiet_vn = $arNews['chitiet_vn'];
            ?>
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.danhmuc1.edit', $id) }}" method="POST">
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
                    </select><br />
                    <select class="form-control" name="id_list_vn">
                    @foreach($arQCao as $key => $arQC)
                    @if($arQC['id'] == $id)
                        <option selected="selected" value="{{ $arQC['id'] }} ">{{ $arQC['name_vn'] }}</option>
                    @else
                        <option  value="{{ $arQC['id'] }}">{{ $arQC['name_vn'] }}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="name" placeholder="Vui lòng nhập tên thể loại ( ENG )" required value="{{ $tenloai }}" /><br />
                         @if ($errors->Has ('name'))
                           <p style="color:red"> {!!  $errors->First ('name') !!} </p>
                        @endif
                        <input class="form-control" name="name_vn" placeholder="Vui lòng nhập tên thể loại ( VN )" required value="{{ $tenloai_vn }}" />
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" rows="3" name="mota">{!!$mota!!}</textarea>
                        <script type="text/javascript">ckeditor ("mota")</script><br />
                        <textarea class="form-control" rows="3" name="mota_vn">{!!$mota_vn!!}</textarea>
                        <script type="text/javascript">ckeditor ("mota_vn")</script>
                    </div>
                    <div class="form-group">
                        <label>Chi tiết</label>
                        <textarea class="form-control" rows="3" name="chitiet">{!!$chitiet!!}</textarea>
                        <script type="text/javascript">ckeditor ("chitiet")</script><br />
                        <textarea class="form-control" rows="3" name="chitiet_vn">{!!$chitiet_vn!!}</textarea>
                        <script type="text/javascript">ckeditor ("chitiet_vn")</script>
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