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
            <h1>Quản Trị User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                      <label >Tên User</label>
                      <input type="text" name="name" class="form-control"  placeholder="Tên User"value="">
                    </div>
                    <div class="form-group">
                      <label >Email</label>
                      <input type="text" name="email" class="form-control"  placeholder="Email"value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Hình Ảnh</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="hinhanh"value="">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label >Phone</label>
                      <input type="text" name="phone" class="form-control"  placeholder="Phone"value="">
                    </div>
                    <div class="form-group">
                      <label >Password</label>
                      <input type="text" name="password" class="form-control"  placeholder="Password"value="">
                    </div>
                    <div class="form-group">
                      <label >Address</label>
                      <input type="text" name="address" class="form-control"  placeholder="Address"value="">
                      
                     
                    </div>
                    
                    <div class="form-group">
                      <label >Vai Trò</label>
                    <select name="role_id" id="" class="form-control" >
                      @foreach ($role as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                      
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