<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Dan Aleko</title>
  <link rel="stylesheet" href="/template/css/register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="wrapper">
    <form action="/admin/users/register/store" method="post">
      <h1>Register</h1>
      <div style="text-align: center;"></div>
      <div class="input-box">
        <input type="text" class="form-control" placeholder="Full name" name="name">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
        <i class='bx bxs-user'></i>
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