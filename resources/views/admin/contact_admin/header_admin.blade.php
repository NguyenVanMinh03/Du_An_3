<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/temblate/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/temblate/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/temblate/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/temblate/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/temblate/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/temblate/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/temblate/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/temblate/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->


            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="/logout" role="button">
                    Đăng Xuất
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        {{-- <a href="/admin" class="brand-link"> --}}
        {{-- <img src="{{asset("storage/img/".Auth::user()->hinhanh)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        {{-- <img src="{{asset("storage/img/".Auth::user()->hinhanh)}}" alt="" style="width:100px;height:50px"> --}}
        {{-- <span class="brand-text font-weight-light">Website</span>
      </a> --}}

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset("storage/img/".Auth::user()->hinhanh)}}" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="/account_user" class="d-block">
                        {{Auth::user()->name}}
                    </a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->


                    <li class="nav-item menu-open">
                        @can('create_category')
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Category
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview">
                            @can('create_category')
                                <li class="nav-item">
                                    <a href="/category/create_category" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Category </p>
                                    </a>
                                </li>
                            @endcan
                            @can('index_category')
                                <li class="nav-item">
                                    <a href="/category/index_category" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Index Category</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        @can('create_product')
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Product
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview">
                            @can('create_product')

                                <li class="nav-item">
                                    <a href="/create_product" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Product</p>
                                    </a>
                                </li>
                            @endcan
                            @can('index_product')
                                <li class="nav-item">
                                    <a href="/index_product" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Index Product</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>

                    {{-- <li class="nav-item menu-open">
                      <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Category Gender
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                          <a href="/create_category_gender" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Category Gender</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="/index_category_gender" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Index Category Gender</p>
                          </a>
                        </li>
                  </ul>
                </li> --}}

                    <li class="nav-item menu-open">
                        @can('create_page')
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Page
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview">
                            @can('create_page')

                                <li class="nav-item">
                                    <a href="/create_page" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Page</p>
                                    </a>
                                </li>
                            @endcan
                            @can('index_page')
                                <li class="nav-item">
                                    <a href="/index_page" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Index Page</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>

                    {{-- <li class="nav-item menu-open">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Color
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/create_color" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Color</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/index_color" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Index Color</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
{{-- 
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Size
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/create_size" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Size</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/index_size" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Index Size</p>
                                </a>
                            </li>

                        </ul>
                    </li> --}}
                    <li class="nav-item menu-open">
                        @can('create_user')
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    User
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview">

                            @can('index_user')
                                <li class="nav-item">
                                    <a href="/index_user" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Index User</p>
                                    </a>
                                </li>
                            @endcan
                            @can('account')

                                <li class="nav-item">
                                    <a href="/account_user" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Account</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        @can('create_brand')
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Brand
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview">
                            @can('create_brand')
                                <li class="nav-item">
                                    <a href="/create_brand" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Brand</p>
                                    </a>
                                </li>
                            @endcan
                            @can('index_brand')
                                <li class="nav-item">
                                    <a href="/index_brand" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Index Brand</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        @can('create_role')
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Role
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview">
                            @can('create_role')
                                <li class="nav-item">
                                    <a href="/create_role" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Role</p>
                                    </a>
                                </li>
                            @endcan
                            @can('index_role')
                                <li class="nav-item">
                                    <a href="/index_role" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Index Role</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                    {{-- <li class="nav-item menu-open">
                      <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Cate_categender
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                          <a href="/create_cate_categender" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Cate_categender</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="/index_cate_categender" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Index Cate_categender</p>
                          </a>
                        </li>

                    </ul>
                    </li> --}}


                    <li class="nav-item menu-open">

                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Pay
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">



                            <li class="nav-item">
                                <a href="/index_paycart" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Index Pay</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
