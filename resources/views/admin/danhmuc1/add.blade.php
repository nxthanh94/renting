@extends('templates.admin.template')

@section('main')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thêm
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.danhmuc1.add') }}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select class="form-control" name="id_list">
                        @foreach($arQCao as $key => $arQC)
                        <?php
                            $id = $arQC['id'];
                            $name = $arQC['name'];
                        ?>
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                        </select><br />
                        <select class="form-control" name="id_list">
                        @foreach($arQCao as $key => $arQC)
                        <?php
                            $id = $arQC['id'];
                            $name_vn = $arQC['name_vn'];
                        ?>
                            <option value="{{ $id }}">{{ $name_vn }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="name" placeholder="Vui lòng nhập thể loại ( ENG )" required /><br />
                         @if ($errors->Has ('name'))
                           <p style="color:red"> {!!  $errors->First ('name') !!} </p>
                        @endif
                        <input class="form-control" name="name_vn" placeholder="Vui lòng nhập thể loại ( VN )" required />
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" rows="3" name="mota">Vui lòng nhập mô tả ( ENG )</textarea>
                        <script type="text/javascript">ckeditor ("mota")</script><br />
                        <textarea class="form-control" rows="3" name="mota_vn">Vui lòng nhập mô tả ( VN )</textarea>
                        <script type="text/javascript">ckeditor ("mota_vn")</script>
                    </div>
                    <div class="form-group">
                        <label>Chi tiết</label>
                        <textarea class="form-control" rows="3" name="chitiet">Vui lòng nhập chi tiết ( ENG )</textarea>
                        <script type="text/javascript">ckeditor ("chitiet")</script><br />
                         <textarea class="form-control" rows="3" name="chitiet_vn">Vui lòng nhập chi tiết ( VN )</textarea>
                        <script type="text/javascript">ckeditor ("chitiet_vn")</script>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
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