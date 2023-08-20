
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
    {{-- <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">

            @can('create_user')
                
           
            <div class="col-sm-6">
              <a href="/create_user">Thêm Mới</a >
            </div>
             @endcan
          </div>
        </div><!-- /.container-fluid -->
      </section> --}}
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
                 Tên User
             </th>
             <th style="width: 10%">
                 Hình Ảnh
             </th>
             <th style="width: 10%">
              Email
          </th>
          <th style="width: 10%">
            Phone
        </th>
        <th style="width: 10%">
          Address
      </th>         
             <th style="width: 10%">
                
            </th>
            
         </tr>
     </thead>
   
     <tbody>
        @foreach ($users as $item)
            
       
         <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
              <img src="{{asset("storage/img/".$item->hinhanh)}}" alt="" style="width:100px;height:50px">
              </td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
            
             <td class="project-actions text-right">
                 @can('edit_user')
                     
                 
                 <a class="btn btn-info btn-sm" href="/edit_user/{{$item->id}}">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                 </a>
@endcan
                 {{-- @can('delete_user')
                     
                
                 <a class="btn btn-danger btn-sm" href="/delete_user/{{$item->id}}" onclick="return confirm('Bạn có muốn xóa không')">
                     <i class="fas fa-trash">
                       
                     </i>
                     Delete
                 </a>
                  @endcan --}}
             </td>
         </tr>
       @endforeach
     </tbody>
     
 </table>
 {{-- {{$user->links()}} --}}
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @endsection