@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header">
            <h3 class="page-title">Chỉnh Sửa Danh Mục</h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <form action="" method="POST">
                        <div class="card-body">
                            <h4 class="card-title">Chỉnh Sửa Thông Tin Chi Tiết</h4>
                            @include('admin.alert')
                            <p class="card-description"></p>
                            <div class="form-group">
                                <label>Tên Danh Mục</label>
                                <input type="text" name="name" value="{{ $menu->name }}" class="form-control" placeholder="Nhập Tên Danh Mục">
                            </div>
                            <div class="form-group">
                                <label>Danh Mục</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0" {{ $menu->parent_id == 0 ? 'selected' : ''}}>Danh Mục Cha</option>
                                    @foreach($menus as $menuParent)
                                    <option value="{{ $menuParent->id }}" {{ $menu->parent_id == $menuParent->id ? 'selected' : ''}}>
                                        {{ $menuParent->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea name="description" class="form-control">{{ $menu->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả Chi Tiết</label>
                                <textarea name="content" id="content" class="form-control">{{ $menu->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Kích hoạt</label>
                                <div class="form-check">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" value="1" type="radio" id="active" name="active" {{ $menu->active == 1 ? 'checked=""' : ''}}>
                                        <label for="active" class="custom-control-label">Có</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" {{ $menu->active == 0 ? 'checked=""' : ''}}>
                                        <label for="no_active" class="custom-control-label">Không</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
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