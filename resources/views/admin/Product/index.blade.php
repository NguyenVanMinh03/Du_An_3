
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
            <h1>Quản Trị Prduct</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Prduct</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <a href="/create_product">Thêm Mới</a >
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
             <th style="width: 12%">
                 Tên Product
             </th>
             <th style="width: 10%">
                 Hình Ảnh
             </th>
             <th style="width: 5%">
              Giá
          </th>
          <th style="width: 10%">
            Tình Trạng
        </th>
        <th style="width:10%">
         Khối Lượng
      </th>
      <th style="width: 10%">
        Danh Mục
    </th>
          <th style="width: 25%">
            Desription
        </th>
             <th style="width: 20%">
                
            </th>
            
         </tr>
     </thead>
   
     <tbody>
        @foreach ($product as $producte)
            
       
         <tr>
            <td>{{$producte->id}}</td>
            <td>{{$producte->name}}</td>
            <td>
              <img src="{{asset("storage/img/".$producte->hinhanh)}}" alt="" style="width:100px;height:50px">
              </td>
            <td>${{$producte->price}}.00</td>
            
            <td style="color: crimson; font-weight: 900">
              {{($producte->tinhtrang_id==1)?"Còn Hàng":"Hết Hàng"}}
              </td>
            <td>{{$producte->khoiluong}} kg  </td>
           <td> 
             @foreach ($category as $item)
               
                  <small>{{($item->id==$producte->danhmuc)?$item->name:""}}</small> 
            @endforeach
            </td>
            <td style="font-size: 12px"> {{$producte->desription}}</td>
             
             <td class="project-actions text-right">
                 
                 <a class="btn btn-info btn-sm" href="/edit_product/{{$producte->id}}">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                 </a>
                 <a class="btn btn-danger btn-sm" href="/delete_product/{{$producte->id}}" onclick="return confirm('Bạn có muốn xóa không')">
                     <i class="fas fa-trash">
                       
                     </i>
                     Delete
                 </a>
             </td>
         </tr>
       @endforeach
     </tbody>
     
 </table>
 {{$product->links()}}
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @endsection