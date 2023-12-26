<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.users.head')
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