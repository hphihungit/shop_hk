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
                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                <label for="customRadio1" class="custom-control-label">Custom Radio</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked="">
                <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>
</form>
@endsection