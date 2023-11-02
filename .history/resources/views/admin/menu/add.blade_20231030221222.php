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
            <label for="menu">Mô tả</label>
            <textarea name="desciption" class="form-control"></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection