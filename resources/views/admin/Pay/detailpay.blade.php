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
        {{--    <section class="content-header"> --}}
        {{--        <div class="container-fluid"> --}}
        {{--            <div class="row mb-2"> --}}
        {{--                <div class="col-sm-6"> --}}
        {{--                    <a href="/create_product">Thêm Mới</a > --}}
        {{--                </div> --}}

        {{--            </div> --}}
        {{--        </div><!-- /.container-fluid --> --}}
        {{--    </section> --}}
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif --}}

        @if (session('success'))
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
                        Product
                    </th>
                    <th style="width: 10%">
                    Hình Ảnh
                    </th>
                    <th style="width: 10%">
                        Số Lượng
                    </th>
                    <th style="width: 8%">
                        Price
                    </th>
                    <th style="width: 10%">
                        Tổng
                    </th>




                </tr>
            </thead>

            <tbody>


                @php
                    $total = 0;
                @endphp

                @foreach ($cart as $carts)
                    @php
                        $price = $carts->price;
                        $priceEnd = $price * $carts->soluong;
                        $total += $priceEnd;
                    @endphp
                    <tr>
                        <td>{{ $carts->id }}</td>
                        <td>
                            @foreach ($product as $item)
                                {{ $item->id == $carts->product_id ? $item->name : '' }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($product as $item)
                                <img class="h-10 w-25"   src="{{ $item->id == $carts->product_id ? asset("storage/img/".$item->hinhanh): '' }}" alt="">
                            @endforeach
                        </td>
                        <td>{{ $carts->soluong }}</td>

                        <td>{{ $carts->price }}</td>

                        <td>{{ $carts->tong }}</td>





                    </tr>


            </tbody>
            @endforeach
        </table>
        <h4 style="background-color: rgba(0, 0, 0, 0.17);line-height: 60px;color: rgba(0, 0, 0, 0.712);padding-left: 20px;">
            Tổng = {{ $total }} $ </h4>
        {{--    {{$products->links()}} --}}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
@endsection
