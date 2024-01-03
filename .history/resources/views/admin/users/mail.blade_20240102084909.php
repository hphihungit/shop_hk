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
      <h1>Đăng nhập</h1>
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

      <div class="remember-forgot">
        <label> <input type="checkbox">Remember me</label>
        <a href="{{ route('forget.password') }}">Forgot Password</a>
      </div>

      <button style="margin-bottom: 16px;" type="submit" class="btn">ĐĂNG NHẬP</button>

      <div class="separate">
        <div class="line"></div>
        <span class="text_separate">
          HOẶC
        </span>
        <div class="line"></div>
      </div>
      @csrf
    </form>
  </div>
</body>

</html>