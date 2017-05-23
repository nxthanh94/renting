@extends('templates.admin.template')

@section('main')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Sửa tin tức
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <?php
            $id = $arNews['id'];
            $name = $arNews['name'];
            $name_vn = $arNews['name_vn'];
            $mota = $arNews['preview'];
            $mota_vn = $arNews['preview_vn'];
            $chitiet = $arNews['detail'];
            $chitiet_vn = $arNews['detail_vn'];
            $picture = $arNews['picture'];
            $picUrl     = asset("storage/app/files/{$picture}");
        ?>
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="{{ route('admin.news.edit', $id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên tin tức</label>
                    <input class="form-control" name="name" placeholder="Vui lòng nhập tên tin tức ( ENG )" required value="{{ $name }}"/><br />
                    <input class="form-control" name="name_vn" placeholder="Vui lòng nhập tên tin tức ( VN )" required value="{{ $name_vn }}"/>
                </div>
                 <div class="form-group">
                    <label>Loại tin tức</label>
                    <select class="form-control" name="id_list">
                    @foreach($arQCao as $key => $arQC)
                    @if($arQC['id'] == $id)
                        <option selected="selected" value="{{ $arQC['id'] }} ">{{ $arQC['name'] }}</option>
                    @else
                        <option  value="{{ $arQC['id'] }}">{{ $arQC['name'] }}</option>
                    @endif
                    @endforeach
                    </select><br />
                    <select class="form-control" name="id_list">
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
                    <label>Mô tả</label>
                    <input class="form-control" name="mota" placeholder="Vui lòng nhập mô tả ( ENG )" required value="{{ $mota }}" /><br />
                    <input class="form-control" name="mota_vn" placeholder="Vui lòng nhập mô tả ( VN )" required value="{{ $mota_vn }}" />
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="picture">
                </div>
                <div class="form-group">
                    <label>Ảnh cũ</label>
                    <img src="{{ $picUrl }}" width="100px" />
                </div>
                <div class="form-group">
                    <label>Chi tiết</label>
                    <textarea class="form-control" rows="3" name="chitiet">{{ $chitiet }}</textarea>
                    <script type="text/javascript">ckeditor ("chitiet")</script><br />
                    <textarea class="form-control" rows="3" name="chitiet_vn">{{ $chitiet_vn }}</textarea>
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