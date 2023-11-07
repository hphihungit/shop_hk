<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.head')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>HPH</a>
  </div> -->
  <!-- /.login-logo -->
  <!-- <div class="card">
    <div class="card-body login-card-body"> 
      <p class="login-box-msg">Chào mừng bạn đến với shop chúng tôi</p>
      @include('admin.alert')
      <form action="/admin/users/login/store" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <!-- <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div> -->
          <!-- /.col -->
        <!-- </div>
        @csrf
      </form>
    </div> -->
    <!-- /.login-card-body -->
  <!-- </div>
</div> -->
<!-- /.login-box -->
<!-- @include('admin.footer')
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section>
    <div class="form-box">
      <form action="">
        <h2>Login</h2>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email">
          <label>Username</label>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password">
          <label>Username</label>
        </div>
      </form>
    </div>
  </section>
</body>
</html>