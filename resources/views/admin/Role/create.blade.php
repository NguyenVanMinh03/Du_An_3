@extends('admin.contact_admin.main')
<!-- Content Wrapper. Contains page content -->

@section('contact')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản Trị Role</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Role</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">

                            <div class="card-header">
                                <h3 class="card-title"> Thêm Mới</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <form id="quickForm" method="post" enctype="multipart/form-data" style="width: 100%">
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label>Tên Role</label>
                                        <input type="text" name="name" class="form-control" placeholder="Tên Role">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Display_name</label>
                                        <input type="text" name="display_name" class="form-control"
                                            placeholder="Dispaly_name">
                                        @error("display_name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>

                                @foreach ($permisstion as $item)
                                    <div class="col-md-12">

                                        <div class="card-header text-bg-secondary"><span> {{ $item->name }}</span></div>
                                        <div class="row">
                                            @foreach ($item->pomissionchidrent as $item)
                                                <div class="  " style="max-width: 18rem;">


                                                    <div class="card-body"><input type="checkbox"
                                                            value="{{ $item->id }}" name="permission_id[]"
                                                            style="margin-right: 6px"><span>{{ $item->name }}</span></div>

                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                @endforeach
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Thêm Mới</button>
                                </div>
                                @csrf
                            </form>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->

            <!-- /.row -->
            <!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
