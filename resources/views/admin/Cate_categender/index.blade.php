
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
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <a href="/create_cate_categender">Thêm Mới</a >
            </div>
            
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
             
             <th style="width: 10%">
                 Tên Categorygender
             </th>
             <th style="width: 10%">
                 Tên Category
             </th>
             <th style="width: 10%">
                
            </th>
            
         </tr>
     </thead>
   
     <tbody>
        @foreach ($categorygender as $categorygendere)
            
       
         <tr>
            <td>{{$categorygendere->id}}</td>

              <td>
              @foreach ($category as $categoryr)
                  <small>{{($categoryr->id==$categender->category_gender_id)?$categenderr->name:""}}</small>
              @endforeach
              {{-- {{$categorygendere->category_gender_id}} --}}
            </td>
            <td>
              @foreach ($category as $cate)
                  <small>{{($cate->id==$categorygendere->category_id)?$cate->name:""}}</small>
              @endforeach
              
              {{-- {{$categorygendere->category_id}} --}}
            </td>
          
             
             <td class="project-actions text-right">
                 
                 <a class="btn btn-info btn-sm" href="/edit_cate_categender/{{$categorygendere->id}}">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                 </a>
                 <a class="btn btn-danger btn-sm" href="/delete_cate_categender/{{$categorygendere->id}}" onclick="return confirm('Bạn có muốn xóa không')">
                     <i class="fas fa-trash">
                       
                     </i>
                     Delete
                 </a>
             </td>
         </tr>
       @endforeach
     </tbody>
     
 </table>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @endsection