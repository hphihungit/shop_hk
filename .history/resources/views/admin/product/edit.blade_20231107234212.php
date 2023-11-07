@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="row" data-select2-id="29">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" name="name" value="{{ $product->name }}" class="select2 select2-hidden-accessible form-control" placeholder="Nhập Tên Sản Phẩm">
                </div>
                <div class="form-group">
                    <label>Giá Sản Phẩm</label>
                    <input type="number" value="{{ $product->price }}" name="price" class="form-control select2 select2-hidden-accessible">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Danh Mục</label>
                    <select class="form-control select2 select2-hidden-accessible" name="menu_id">
                        @foreach($menus as $menu)
                            <option value="{{ $menu->id }}" {{ $product->menu_id == $menu_id ? 'selected' : '' }}>
                                {{ $menu->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Giá Giảm</label>
                    <input type="number" value="{{ $product->price_sale }}" name="price_sale" class="form-control select2 select2-hidden-accessible">
                </div>
            </div>
            <!-- /.col -->
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input class="form-control" type="file" id="upload">
            <div class="image_show">

            </div>
            <input type="hidden" name="thumb" id="thumb">
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