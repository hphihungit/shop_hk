<!-- @extends('admin.main')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Giá Sản Phẩm</th>
            <th>Giá Khuyến Mãi</th>
            <th>Active</th>
            <th>Update</th>
            <th style=""></th>
        </tr>
    </thead>

    <tbody>
        @foreach($product as $key => $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->menu->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->price_sale }}</td>
            <td>{{ \App\Helpers\Helper::active($product->active) }}</td>
            <td>{{ $product->updated_at }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/menus/edit/' . $menu->id . '">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>

                <a href="#" class="btn btn-danger btn-sm" onclick="removeRow(' . $menu->id . ', \'/admin/menus/destroy\')">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection -->