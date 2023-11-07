@extends('admin.main')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Tên Danh Mục</th>
            <th>Giá Sản Phẩm</th>
            <th>Active</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>' . $menu->id . '</td>
            <td>' . $char . $menu->name . '</td>
            <td>' . self::active($menu->active) . '</td>
            <td>' . $menu->updated_at . '</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/menus/edit/' . $menu->id . '">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>

                <a href="#" class="btn btn-danger btn-sm" onclick="removeRow(' . $menu->id . ', \'/admin/menus/destroy\')">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>
@endsection