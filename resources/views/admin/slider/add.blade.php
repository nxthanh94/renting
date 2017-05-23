@extends('templates.admin.template')

@section('main')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm slider
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="{{ route('admin.slider.add') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" placeholder="Vui lòng nhập tên ( ENG )" required /><br />
                    @if ($errors->Has ('name'))
                           <p style="color:red"> {!!  $errors->First ('name') !!} </p>
                    @endif
                    <input class="form-control" name="name_vn" placeholder="Vui lòng nhập tên ( VN )" required />
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="picture">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="3" name="chitiet">Vui lòng nhập mô tả ( ENG )</textarea>
                    <script type="text/javascript">ckeditor ("chitiet")</script><br />
                     @if ($errors->Has ('mota'))
                           <p style="color:red"> {!!  $errors->First ('mota') !!} </p>
                        @endif
                    <textarea class="form-control" rows="3" name="chitiet_vn">Vui lòng nhập mô tả ( VN )</textarea>
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