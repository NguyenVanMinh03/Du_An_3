
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
                    <h1>Quản Trị Pay</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Pay</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
{{--    <section class="content-header">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row mb-2">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <a href="/create_product">Thêm Mới</a >--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </section>--}}
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
                Name
            </th>
            <th style="width: 10%">
                Address
            </th>
            <th style="width: 8%">
                Phone
            </th>
            <th style="width: 10%">
               Email
            </th>
            <th style="width:15%">
                Thanh Toán
            </th>

<th style="width: 15%"></th>

        </tr>
        </thead>

        <tbody>

        @foreach ($pays as $item)


        <tr>
            <td>{{$item->id }}</td>
            <td>
                {{$item->name}}
            </td>

            <td>{{$item->address}}</td>

            <td>{{$item->phone}}</td>

            <td>{{$item->email}}</td>
            <td style="font-weight: bold;color: #00b44e">
                {{($item->pay==1)?"CHUYỂN KHOẢN":"THANH TOÁN KHI NHẬN HÀNG"}}
            </td>



            <td class="project-actions text-right">

                <a class="btn btn-info btn-sm" href="/detailpay/{{$item->id}}">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Detail Pay
                </a>
                <a class="btn btn-danger btn-sm" href="/deletepay/{{$item ->id}}" onclick="return confirm('Bạn có muốn xóa không')">
                    <i class="fas fa-trash">

                    </i>
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
{{--    {{$products->links()}}--}}
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
@endsection
