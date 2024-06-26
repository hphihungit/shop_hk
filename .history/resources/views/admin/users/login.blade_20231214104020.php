<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.users.head')
</head>
<script src="./public/js/jquery-3-7-1-min.js"></script>

<body>
  <div class="background"></div>
  <div class="container">
    <div class="content">
      <h2 class="ten"><i class='bx bxl-firefox'></i>The K&H Corner Shop</h2>
      <div class="text-sci">
        <h2>Welcome <br> <span>To Our Website Coffee.</span> </h2>
        <p>Whether you're in the mood for a classic latte or something
          more unique like a lavender honey cappuccino, we have a drink to suit your taste</p>
        <div class="social-icons">
          <a href=""><i class='bx bxl-linkedin-square'></i></a>
          <a href="{{ route('login.facebook') }}"><i class='bx bxl-facebook-square'></i></a>
          <a href=""><i class='bx bxl-instagram-alt'></i></a>
          <a href=""><i class='bx bxl-gmail'></i></a>
        </div>
      </div>
    </div>
    <!-- Form login -->
    <div class="logreg-box">
      <div class="form-box login">
        <form class="form" action="/admin/users/login/store" method="post">
          <h2>Log In</h2>
          <div class="input-box">
            <span class="icon">
              <i class='bx bxl-gmail'></i>
            </span>
            <input id="email" type="email" name="email">
            <label for="">Email</label>
            <span class="form-message"></span>
          </div>

          <div class="input-box">
            <span class="icon">
              <i class='bx bxs-lock-alt'></i>
            </span>
            <input type="password" id="password" name="password">
            <label for="">Password</label>
            <span id="password-error" class="error-message"></span> <br>
            @include('admin.alert')
          </div> <br>

          <div class="remember-forgot">
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

          <div class=" login-register">
            <p>Don't have an account? <a href="/admin/users/register" class="login-link">Sign Up</a> </p>
          </div>

          @csrf
        </form>
      </div>
      <!-- registist -->
    </div>
  </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="/template/css/register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="wrapper">
    <form action="/admin/users/register/store" method="post">
      <h1>Welcome</h1>
      <div style="text-align: left;">
        @include('admin.alert')
      </div>
      <div class="input-box">
        <input type="text" class="form-control" placeholder="Full name" name="name">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <i class='bx bxs-envelope bx-rotate-90'></i>
      </div>
      <div class="input-box">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
        <i class='bx bxs-phone bx-rotate-90'></i>
      </div>

      <button type="submit" class="btn">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="/admin/users/login">Log In</a></p>
      </div>
      @csrf
    </form>
  </div>
</body>

</html>