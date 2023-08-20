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
            <h1>Quản Trị Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
                <h3 class="card-title"> Update</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

                <form id="quickForm" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label >Mã Sản Phẩm</label>
                      <input type="text" name="mahang" class="form-control"  placeholder="Mã Sản Phẩm" value="{{$product->mahang}}">



                        @error('mahang')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div>
                     <div class="form-group">
                      <label >Tên Product</label>
                      <input type="text" name="name" class="form-control"  placeholder="Tên Product" value="{{$product->name}}">
                         @error('name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Hình Ảnh</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="hinhanh" value="{{$product->hinhanh}}">
                            @error('hinhanh')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <label >Price</label>
                      <input type="text" name="price" class="form-control"  placeholder="Price" value="{{$product->price}}">
                        @error('price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label >Old Price</label>
                      <input type="text" name="old_price" class="form-control"  placeholder="Old Price" value="{{$product->old_price}}">
                        @error('old_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label >Khối Lượng</label>
                      <input type="text" name="khoiluong" class="form-control"  placeholder="Khối Lượng" value="{{$product->khoiluong}}">
                        @error('khoiluong')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label></label>
                      <input type="hidden" name="active" value="1" class="form-control"
                          placeholder="Khối Lượng">

                    </div>
                    <div class="form-group">
                      <label >Desription</label>
                      <textarea name="desription" id="" cols="30" rows="5"class="form-control"placeholder="Desription">{{$product->desription}}</textarea>
                        @error('desription')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label>Loại Brand</label>
                      <select class="form-control" name="brand">
                        @foreach ($brand as $brandr)
                             <option value="{{$brandr->id}}" {{($brandr->id==$product->brand)?"selected":""}} >{{$brandr->name}}</option>
                             {{-- <option value="{{$brandr->id}}" >{{$brandr->name}}</option> --}}

                        @endforeach

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Loại Category</label>
                      <select class="form-control" name="danhmuc">
                        @foreach ($category as $cate)
                             <option value="{{$cate->id}}" {{($cate->id==$product->danhmuc)?"selected":""}} >{{$cate->name}}</option>
                             {{-- <option value="{{$cate->id}}" >{{$cate->name}}</option> --}}

                        @endforeach

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Trạng Thái</label>

                      <div>
                          <div ><input style="margin-right: 10px" value="1" {{$product->tinhtrang_id==1 ?'checked':''}} type="radio" name="tinhtrang_id" ><label
                                  for="">Còn Hàng</label></div>
                          <div ><input style="margin-right: 10px" value="0" {{$product->tinhtrang_id==0 ?'checked':''}} type="radio" name="tinhtrang_id" ><label
                                  for="">Hết Hàng</label></div>
                      </div>


                  </div>

                  <div class="form-group">
                    <label>Màu Sắc</label>
                    <br>
                    @foreach ($color as $item)
                        <div class="form-check form-check-inline">


                            <input class="form-check-input" name="color_id[]" type="checkbox"
                                id=""   value="{{ $item->id }}">



                            <label class="form-check-label" for="">{{ $item->name }}</label>
                        </div>
                    @endforeach

                </div>
                <div class="form-group">
                    <label>Size</label>
                    <br>
                    @foreach ($size as $item)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="size_id[]" type="checkbox"
                                id="inlineCheckbox1" value="{{ $item->id }}">
                            <label class="form-check-label"
                                for="inlineCheckbox1">{{ $item->name }}</label>
                        </div>
                    @endforeach


                </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
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
