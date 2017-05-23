<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trang quản trị admin">
    <meta name="author" content="">
    <title>Admin</title>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="{{ $url_admin }}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ $url_admin }}/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ $url_admin }}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ $url_admin }}/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ $url_admin }}/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ $url_admin }}/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <script type="text/javascript" src="{{ $url_admin }}/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="{{ $url_admin }}/js/ckfinder/ckfinder.js"></script>
    <script type="text/javascript">
        var baseURL = "{!! url('/') !!}";
    </script>
    <script type="text/javascript" src="{{ $url_admin }}/js/func_ckfinder.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#theloai").change(function(){
                var idtheloai = $(this).val();
                $.get("/admin/ajax/loai-phong/"+idtheloai,function(data){
                    $("#loaitin").html(data);
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#hangsx").change(function(){
                var idtheloai = $(this).val();
                $.get("/admin/ajax/danh-muc-hang-san-xuat/"+idtheloai,function(data){
                    $("#danhmuchsx").html(data);
                });
            });
        });
    </script>
    <style type="text/css">
        #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    </style>
    
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin"><img src="{{ $url_admin }}/admin/images/logo.png" width="240px" height="50px" style="margin-left: -15px;"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" >
                    <?php
                        $chao = "";
                    ?>
                    @if(Auth::check())
                        <?php 
                            $chao = Auth::user()->username;
                        ?>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> {{ $chao }}</a>
                        </li>
                    @else
                    @endif
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('public.auth.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.lienhe.index') }}"><i class="fa fa-envelope fa-fw"></i> Liên hệ<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.users.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.users.add') }}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Dự án<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.news.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.news.add') }}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Danh mục dự án<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.listnews.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.listnews.add') }}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('admin.gioithieu.edit', 1) }}"><i class="glyphicon glyphicon-book"></i> Giới thiệu<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-resize-horizontal"></i> Slider<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.slider.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.slider.add') }}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('admin.caidat.edit', 1) }}"><i class="fa fa-cog"></i> Cài đặt<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> Bất động sản<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.danhmuc.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.danhmuc.add') }}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> Danh mục BĐS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.danhmuc1.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.danhmuc1.add') }}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> Danh sách BĐS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.phong.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.phong.add') }}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> Tiện ích<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.tienich.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.tienich.add') }}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('admin.thuvien.index') }}"><i class="fa fa-cog"></i> Thư viện<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

