@extends('admin.main')

@section('content')<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header">
            <h3 class="page-title">Danh Sách Sản Phẩm</h3>
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
                                        <th>Tên Sản Phẩm</th>
                                        <th>Danh Mục</th>
                                        <th>Giá Sản Phẩm</th>
                                        <th>Giá Khuyến Mãi</th>
                                        <th>Active</th>
                                        <th>Update</th>
                                        <th style="width: 100px">&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->menu->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->price_sale }}</td>
                                        <td>{!! \App\Helpers\Helper::active($product->active) !!}</td>
                                        <td>{{ $product->updated_at }}</td>
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