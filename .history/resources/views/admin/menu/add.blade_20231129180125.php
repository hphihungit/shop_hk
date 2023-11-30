@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

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
                    <h4 class="card-title">Striped Table</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>User</th>
                            <th>First name</th>
                            <th>Progress</th>
                            <th>Amount</th>
                            <th>Deadline</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image">
                            </td>
                            <td>Herman Beck</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$ 77.99</td>
                            <td>May 15, 2015</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-2.png" alt="image">
                            </td>
                            <td>Messsy Adam</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$245.30</td>
                            <td>July 1, 2015</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-3.png" alt="image">
                            </td>
                            <td>John Richards</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$138.00</td>
                            <td>Apr 12, 2015</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-4.png" alt="image">
                            </td>
                            <td>Peter Meggik</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$ 77.99</td>
                            <td>May 15, 2015</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image">
                            </td>
                            <td>Edward</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$ 160.25</td>
                            <td>May 03, 2015</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-2.png" alt="image">
                            </td>
                            <td>John Doe</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$ 123.21</td>
                            <td>April 05, 2015</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-3.png" alt="image">
                            </td>
                            <td>Henry Tom</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$ 150.00</td>
                            <td>June 16, 2015</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <h4 class="card-title">Nhập Thông Tin Chi Tiết</h4>
                            @include('admin.alert')
                            <p class="card-description"></p>
                            <div class="form-group">
                                <label>Tên Danh Mục</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập Tên Danh Mục">
                            </div>
                            <div class="form-group">
                                <label>Danh Mục</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Danh Mục Cha</option>
                                    @foreach($menus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                    @endforeach
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
                            <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
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