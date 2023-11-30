@extends('admin.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header">
            <h3 class="page-title">Danh Sách Slider</h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nhập Thông Tin Chi Tiết</h4>
                        @include('admin.alert')
                        <p class="card-description"></p>
                        <div class="table-responsive">
                            <table class="table table-striped scroll">
                                <thead>
                                    <tr>
                                        <th style="width: 50px">ID</th>
                                        <th>Tiêu Đề</th>
                                        <th>Link</th>
                                        <th>Ảnh</th>
                                        <th>Trang Thái</th>
                                        <th>Cập Nhật</th>
                                        <th style="width: 100px">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sliders as $key => $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        <td>{{ $slider->name }}</td>
                                        <td class="scroll">{{ $slider->url }}</td>
                                        <td><a href="{{ $slider->thumb }}" target="_blank">
                                                <img src="{{ $slider->thumb }}" height="40px">
                                            </a>
                                        </td>
                                        <td>{!! \App\Helpers\Helper::active($slider->active) !!}</td>
                                        <td>{{ $slider->updated_at }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="/admin/sliders/edit/{{ $slider->id }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm" onclick="removeRow('{{ $slider->id }}', '/admin/sliders/destroy')">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {!! $sliders->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection