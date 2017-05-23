@extends('templates.admin.template')

@section('main')


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Giới thiệu
                </h1>
                 @if( Session::get('msg') != '')
                    <p style="color: red">{{ Session::get('msg') }}</p>
                @endif
            </div>
            <!-- /.col-lg-12 -->
             <?php
                $id = $arGioithieu['id'];
                $content = $arGioithieu['content'];
                $content_vn = $arGioithieu['content_vn'];
                $content1 = $arGioithieu['content1'];
                $content1_vn = $arGioithieu['content1_vn'];
                $content2 = $arGioithieu['content2'];
                $content2_vn = $arGioithieu['content2_vn'];
                $content3 = $arGioithieu['content3'];
                $content3_vn = $arGioithieu['content3_vn'];
                $content4 = $arGioithieu['content4'];
                $content4_vn = $arGioithieu['content4_vn'];
                $content5 = $arGioithieu['content5'];
                $content5_vn = $arGioithieu['content5_vn'];
                $content6 = $arGioithieu['content6'];
                $content6_vn = $arGioithieu['content6_vn'];
                $name = $arGioithieu['name'];
                $name_vn = $arGioithieu['name_vn'];
            ?>
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.gioithieu.edit',$id) }}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Vui lòng nhập thông tin ( ENG )" value="{{ $name }}" required /><br />
                        <input class="form-control" name="name_vn" placeholder="Vui lòng nhập thông tin ( VN )" value="{{ $name_vn }}" required />
                    </div>
                    <div class="form-group">
                        <label>Chi tiết</label>
                        <textarea class="form-control" rows="3" name="mota">{{$content}}</textarea>
                        <script type="text/javascript">ckeditor ("mota")</script><br />
                        <textarea class="form-control" rows="3" name="mota_vn">{{$content_vn}}</textarea>
                        <script type="text/javascript">ckeditor ("mota_vn")</script>
                    </div>
                    <div class="form-group">
                        <label>We provide professional services</label>
                        <textarea class="form-control" rows="3" name="content1">{{$content1}}</textarea><br />
                        <textarea class="form-control" rows="3" name="content1_vn">{{$content1_vn}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Friendly Agent</label>
                        <textarea class="form-control" rows="3" name="content2">{{$content2}}</textarea><br />
                        <textarea class="form-control" rows="3" name="content2_vn">{{$content2_vn}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Notifications for your rent payments</label>
                        <textarea class="form-control" rows="3" name="content3">{{$content3}}</textarea><br />
                        <textarea class="form-control" rows="3" name="content3_vn">{{$content3_vn}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Who are our clients?</label>
                        <textarea class="form-control" rows="3" name="content4">{{$content4}}</textarea><br />
                        <textarea class="form-control" rows="3" name="content4_vn">{{$content4_vn}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Do us have any real estate certificate?</label>
                        <textarea class="form-control" rows="3" name="content5">{{$content5}}</textarea><br />
                        <textarea class="form-control" rows="3" name="content5_vn">{{$content5_vn}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Where will you send your complaints about our services?</label>
                        <textarea class="form-control" rows="3" name="content6">{{$content6}}</textarea><br />
                        <textarea class="form-control" rows="3" name="content6_vn">{{$content6_vn}}</textarea>
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