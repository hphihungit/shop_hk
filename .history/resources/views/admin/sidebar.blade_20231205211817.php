<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="/template/admin/assets/images/logo.svg" alt="logo"></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="/template/admin/assets/images/logo-mini.svg" alt="logo"></a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="/template/admin/assets/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column pr-3">
                    <span class="font-weight-medium mb-2">Henry Klein</span>
                    <span class="font-weight-normal">$8,753.00</span>
                </div>
                <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/main">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Trang Chủ</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-account-circle menu-icon"></i>
                <span class="menu-title">Tài khoản</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/accounts/list">Danh Sách Tài Khoản</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Danh Mục</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/menus/add">Thêm danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/menus/list">Danh sách danh mục</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-shopping menu-icon"></i>
                <span class="menu-title">Sản Phẩm</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/products/add">Thêm Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/products/list">Danh sách sản phẩm</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-sliders menu-icon"></i>
                <span class="menu-title">Slider</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/sliders/add">Thêm Slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/sliders/list">Danh Sách Slider</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-cart menu-icon"></i>
                <span class="menu-title">Giỏ Hàng</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/customers">Danh Sách Đơn Hàng</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/users/login">
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Đăng xuất</span>
            </a>
          </li>
    </ul>
</nav>