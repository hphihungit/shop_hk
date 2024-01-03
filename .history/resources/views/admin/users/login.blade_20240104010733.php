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
        <label></label>
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

      <div class="different">
        <div class="btn-social-login">
          <a class="btn-text" href="{{ route('login.facebook') }}">
            <img src="/template/images/facebook.png" class="icon" alt="">
            Facebook
          </a>
        </div>

        <div class="btn-social-login">
          <a class="btn-text" href="{{ route('login.google') }}">
            <img src="/template/images/google.png" class="icon" alt="">
            Google
          </a>
        </div>
      </div>


      <<<<<<< HEAD <div class="remember-forgot">
        <label> <input type="checkbox">Remember me</label>
        <a href="{{ route('forget.password') }}">Forgot Password</a>
  </div>

  <button type="submit">Log In</button>

  <div class="google-btn">
    <div class="google-icon-wrapper">
      <img class="google-icon" src="https://i.pinimg.com/originals/74/65/f3/7465f30319191e2729668875e7a557f2.png" />
    </div>
    <a class="btn-text" href="{{ route('login.google') }}">Continue With Google</a>
  </div>

  <div class="facebook-btn">
    <div class="facebook-icon-wrapper">
      <img class="facebook-icon" src="https://static-00.iconduck.com/assets.00/facebook-icon-512x512-seb542ju.png" />
    </div>
    <a class="btn-text-facebook" href="{{ route('auth.facebook') }}">Continue With Facebook</a>
  </div>
  <div class=" login-register">
    <p>Don't have an account? <a href="/admin/users/register" class="login-link">Sign Up</a> </p>
  </div>

  @csrf
  </form>
  =======
  <div class="register-link">
    <p>Bạn chưa có tài khoản? <a href="/admin/users/register">Đăng ký</a></p>
    >>>>>>> 9283b5135e24c90ec2f5d84acb168a9be1b75824
  </div>
  @csrf
  </form>
  </div>
</body>

</html>