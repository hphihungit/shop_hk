@extends('admin.main')

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label>Tên Danh Mục</label>
            <input type="text" name="menu" class="form-control" id="menu" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="parent_id">
                <option value="0">Danh Mục Cha</option>
            </select>
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="desciption" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Kích hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                <label for="no_active" class="custom-control-label">Custom Radio checked</label>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>
</form>
@endsection