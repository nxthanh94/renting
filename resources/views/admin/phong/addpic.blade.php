@extends('templates.admin.template')

@section('main')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm hình ảnh
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <?php
            $id = $arphong['id'];
            $name = $arphong['ten'];
            
        ?>
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="{{ route('admin.phong.editpic',$id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @for($i = 1; $i <= 9; $i++)
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="picture[]">
                </div>
            @endfor
                
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