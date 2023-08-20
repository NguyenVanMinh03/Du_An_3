
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
            <h1>Quản Trị Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Danh Mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            @can('create_category')


            <div class="col-sm-6">
              <a href="/category/create_category">Thêm Mới</a >
            </div>
            @endcan
          </div>
        </div><!-- /.container-fluid -->
      </section>
      {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif --}}

        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <table class="table table-striped projects">
     <thead>
         <tr>
             <th style="width: 1%">
                 ID
             </th>
             <th style="width: 20%">
                 Tên Danh Mục
             </th>
             <th style="width: 10%">
              Hình Ảnh
          </th>
             <th style="width: 10%">
                 Desription
             </th>
             <th style="width: 20%">

            </th>

         </tr>
     </thead>

     <tbody>
        @foreach ($category as $cate)


         <tr>
            <td>{{$cate->id}}</td>
            <td>{{$cate->name}}</td>
            <td>
<img src="{{asset("storage/img/".$cate->img)}}" alt="" style="height:50px;width:100px">
              </td>

              <td>{{$cate->desription}}</td>
             <td class="project-actions text-right">
                 @can('edit_category')


                 <a class="btn btn-info btn-sm" href="/category/edit_category/{{$cate->id}}">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                 </a>
@endcan
                 @can('delete_category')


                 <a class="btn btn-danger btn-sm" href="/category/delete_category/{{$cate->id}}" onclick="return confirm('Bạn có muốn xóa không')">
                     <i class="fas fa-trash">

                     </i>
                     Delete
                 </a>
                 @endcan
             </td>
         </tr>
       @endforeach
     </tbody>

 </table>
 {{$category->links()}}
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @endsection
