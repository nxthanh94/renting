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
                    <tr>
                        <th>Mô tả</th>
                        <th>Chi tiết</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    $mota     = $arItem['mota'];
                    $chitiet     = $arItem['chitiet'];
                ?>
                    <tr class="odd gradeX" >
                        <td>{!! $mota !!}</td>
                        <td>{!! $chitiet !!}</td>
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