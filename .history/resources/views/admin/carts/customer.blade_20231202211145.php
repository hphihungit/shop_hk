@extends('admin.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header">
            <h3 class="page-title">Danh Sách Danh Mục</h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông Tin Chi Tiết</h4>
                        @include('admin.alert')
                        <p class="card-description"></p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <div class="main-panel">
                                            <div class="content-wrapper pb-0">
                                                <div class="page-header">
                                                    <h3 class="page-title">Danh Sách Danh Mục</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Thông Tin Chi Tiết</h4>
                                                                @include('admin.alert')
                                                                <p class="card-description"></p>
                                                                <div class="table-responsive">
                                                                    <th style="width: 50px">ID</th>
                                                                    <th>Tên Khách Hàng</th>
                                                                    <th>Số Điện Thoại</th>
                                                                    <th>Email</th>
                                                                    <th>Ngày Đặt hàng</th>
                                                                    <th style="width: 100px">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $key => $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->created_at }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{ $customer->id }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm" onclick="removeRow('{{ $customer->id }}', '/admin/customers/destroy')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $customer->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection