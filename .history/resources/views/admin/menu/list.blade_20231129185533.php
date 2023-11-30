@extends('admin.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header">
            <h3 class="page-title">Thêm Danh Mục</h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nhập Thông Tin Chi Tiết</h4>
                        @include('admin.alert')
                        <p class="card-description"></p>
                        <div class="table-responsive">
                            <table overflow="scroll" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 50px">ID</th>
                                        <th>Tên Danh Mục</th>
                                        <th>Active</th>
                                        <th>Update</th>
                                        <th style="width: 100px">&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {!! \App\Helpers\Helper::menu($menus) !!}
                                </tbody>
                            </table>

                            {!! $menus->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function scrollUp() {
    var table = document.querySelector("table");
    table.scrollTop += 100;
}
</script>
@endsection