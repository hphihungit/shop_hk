@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header">
            <h3 class="page-title">Thêm Sản Phẩm</h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <form action="" method="POST">
                        <div class="card-body">
                        <h4 class="card-title">Nhập Thông Tin Chi Tiết</h4>
                        @include('admin.alert')
                        <p class="card-description"></p>
                            <div class="row" data-select2-id="29">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nhập Tên Sản Phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá Sản Phẩm</label>
                                        <input type="number" value="0" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Danh Mục</label>
                                        <select class="form-control" name="menu_id">
                                            @foreach($menus as $menu)
                                            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá Giảm</label>
                                        <input type="number" value="0" name="price_sale" class="form-control">
                                    </div>
                                </div>
                                <!-- /.col -->
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
                                <label for="menu">Ảnh Sản Phẩm</label>
                                <input class="form-control" type="file" id="upload">
                                <div id="image_show">

                                </div>
                                <input type="hidden" name="thumb" id="thumb">
                            </div>
                            <div class="form-group">
                                <label>Kích hoạt</label>
                                <div class="form-check">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                                        <label for="active" class="form-check-label custom-control-label">Có</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                                        <label for="no_active" class="form-check-label custom-control-label">Không</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tạo Sản Phẩm</button>
                        </div>

                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('content');
</script>
@endsection