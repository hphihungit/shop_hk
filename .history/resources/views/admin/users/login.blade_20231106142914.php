
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.head')
</head>

<body>
  <section>
    <div class="form-box">
      <form action="">
        <h2>Đăng nhập</h2>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email">
          <label>Tên tài khoản</label>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password">
          <label>Mật khẩu</label>
        </div>
        <div class="forget">
          <label><input type="checkbox">Lưu mật khẩu<a href="#">Quên mật khẩu</a></label>
        </div>

        <button>Đăng nhập</button>
        <div class="register">
          <p>Bạn chưa có tài khoản <a href="">Đăng ký</a></p>
        </div>
      </form>
    </div>
  </section>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  @include('admin.footer')
</body>
</html>