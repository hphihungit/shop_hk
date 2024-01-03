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
        <input type="password" id="password" class="form-control" placeholder="Password" name="password">
        <i class='bx bxs-envelope bx-rotate-90'></i>
      </div>

      <button type="submit" class="btn">Đăng nhập</button>
      <div class="register-link">
        <p>Bạn chưa có tài khoản? <a href="/admin/users/register">Đăng ký</a></p>
      </div>
      @csrf
    </form>
  </div>
</body>

</html>