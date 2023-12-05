@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header">
            <h3 class="page-title">Chỉnh Sửa Tài Khoản</h3>
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
                                <label>Tên Tài Khoản</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Nhập Tên Tài Khoản">
                            </div>
                            <div class="form-group">
                                <label>SĐT</label>
                                <textarea name="description" class="form-control">{{ $user->phone_number }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <textarea name="content" id="content" class="form-control">{{ $user->email }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <textarea name="content" id="content" class="form-control">{{ $user->role }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <textarea name="content" id="content" class="form-control">{{ $user->password }}</textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập Nhật Tài Khoản</button>
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