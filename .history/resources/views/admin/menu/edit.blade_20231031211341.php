@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label>Tên Danh Mục</label>
            <input type="text" name="name" value="{{ $menu->name }}" class="form-control" placeholder="Nhập Tên Danh Mục">
        </div>
        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="parent_id">
                <option value="0" {{ $menu->parent_id == 0 ? 'selected' : ''}}>Danh Mục Cha</option>
                @foreach($menus as $menuParent)
                    <option value="{{ $menuParent->id }}" 
                        {{ $menu->parent_id == $menuParent->id ? 'selected' : ''}}>
                        {{ $menuParent->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="desciption" class="form-control">{{ $menu->desciption }}</textarea>
        </div>
        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control">{{ $menu->content }}</textarea>
        </div>
        <div class="form-group">
            <label>Kích hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active"
                name="active" {{ $menu->active == 1 ? 'checked=""' : ''}}>
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active"
                name="active" {{ $menu->active == 1 ? 'checked=""' : ''}}>
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

@section('footer')
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('content');
</script>
@endsection