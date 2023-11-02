@extends('admin.main')

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="menu">Tên Danh Mục</label>
            <input type="text" name="menu" class="form-control" id="menu" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="menu">Danh Mục</label>
            <select class="form-control" name="parent_id">
                <option value="0">Danh Mục Cha</option>
            </select>
        </div>
        <div class="form-group">
            <label for="menu">Mô Tả</label>
            <textarea name="desciption" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="menu">Mô Tả Chi Tiết</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>
</form>
@endsection