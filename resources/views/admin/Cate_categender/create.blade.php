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
            <h1>Quản Trị Cate_categender</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Cate_categender</li>
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
              
                <form id="quickForm" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Loại Category</label>
                      <select class="form-control" name="category_id">
                        @foreach ($category as $cate)
                             {{-- <option value="{{$cate->id}}" {{($cate->id==$cate->cate)?"selected":""}} >{{$cate->name}}</option> --}}
                             <option value="{{$cate->id}}" >{{$cate->name}}</option>
                        
                        @endforeach
                       
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Loại CategoryGender</label>
                      <select class="form-control" name="category_gender_id">
                        {{-- <option value="0"></option> --}}

                        @foreach ($categorygender as $categender)
                             {{-- <option value="{{$categender->id}}" {{($categender->id==$categender->danhmuc)?"selected":""}} >{{$categender->name}}</option> --}}
                             <option value="{{$categender->id}}" >{{$categender->name}}</option>
                        
                        @endforeach
                       
                      </select>
                    </div>
                    <div class="form-group mb-0">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm Mới</button>
                  </div>
                  @csrf
                </form>
                <!-- /.card-body -->
                
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->

  </div>
  <!-- /.content-wrapper -->
@endsection