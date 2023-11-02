@extends('admin.main')

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label>Tên Danh Mục</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập Tên Danh Mục">
        </div>
        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="parent_id">
                <option value="0">Danh Mục Cha</option>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="desciption" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Kích hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>

    @csrf
</form>
@endsection