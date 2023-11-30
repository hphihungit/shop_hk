@extends('admin.main')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Danh Mục</th>
            <th>Active</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        {!! \App\Helpers\Helper::menu($menus) !!}
    </tbody>
</table>

{!! $menus->links() !!}
@endsection