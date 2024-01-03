<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/template/css/register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="wrapper">
    <form action="/admin/users/login/store" method="post">
      <h1>Chào mừng</h1>
      <div style="text-align: left;">
        @include('admin.alert')
      </div>
      <div class="input-box">
        <input type="email" id="email" class="form-control" placeholder="Email" name="email">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" id="password" class="form-control" placeholder="Mật khẩu" name="password">
        <i class='bx bxs-key'></i>
      </div>

      <button style="margin-bottom: 16px;" type="submit" class="btn">ĐĂNG NHẬP</button>

      <div class="separate">
        <div class="line"></div>
        <span class="text_separate">
          HOẶC
        </span>
        <div class="line"></div>
      </div>

      <div class="different">
        <div class="btn-social-login">
          <a class="btn-text" href="{{ route('login.facebook') }}">
            <img src="/template/images/facebook.png" class="gg" alt="">
            Facebook
          </a>
        </div>

        <div class="btn-social-login">
          <a class="btn-text" href="{{ route('login.google') }}">
            Google
          </a>
        </div>
      </div>


      <div class="register-link">
        <p>Bạn chưa có tài khoản? <a href="/admin/users/register">Đăng ký</a></p>
      </div>
      @csrf
    </form>
  </div>
</body>

</html>