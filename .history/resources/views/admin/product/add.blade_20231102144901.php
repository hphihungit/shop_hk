@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label>Tên Sản Phẩm</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập Tên Sản Phẩm">
        </div>
        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="menu_id">
                <option value="0">Giáo Án Tham Khảo</option>
            </select>
        </div>
        <div class="form-group">
            <label>Giá Gốc</label>
            <select class="form-control" name="price">
                <option value="0"></option>
            </select>
        </div>
        <div class="form-group">
            <label>Giá Giảm</label>
            <select class="form-control" name="price_sale">
                <option value="0"></option>
            </select>
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label class="form-label">Ảnh Sản Phẩm</label>
            <input class="form-control" type="file" id="upload" name="file">
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
        <button type="submit" class="btn btn-primary">Tạo Sản Phẩm</button>
    </div>

    @csrf
</form>
@endsection

@section('footer')
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('content');
</script>
@endsection