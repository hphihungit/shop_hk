@extends('admin.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header">
            <h3 class="page-title">Danh Sách Người Dùng</h3>
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
                                        <th style="width: 50px">ID</th>
                                        <th>Tên Người Dùng</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Mật Khẩu</th>
                                        <th style="width: 100px">&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($accounts as $key => $account)
                                    <tr>
                                        <td>{{ $account->id }}</td>
                                        <td>{{ $account->name }}</td>
                                        <td>{{ $account->phone_number }}</td>
                                        <td>{{ $account->email }}</td>
                                        <td>{{ $account->price_sale }}</td>
                                        <td>{!! \App\Helpers\Helper::active($account->active) !!}</td>
                                        <td>{{ $account->updated_at }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <a href="#" class="btn btn-danger btn-sm" onclick="removeRow('{{ $product->id }}', '/admin/products/destroy')">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection