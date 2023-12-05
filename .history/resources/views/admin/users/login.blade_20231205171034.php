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
          <a href="{{ route('/login/facebbok') }}"><i class='bx bxl-facebook-square'></i></a>
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

          <div class="login-register">
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