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
        <form class="form" action="{{ route('reset.passwordpost') }}" method="post">
            <h2>Mật khẩu mới</h2>
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="input-box">
                <span class="icon">
                    <i class='bx bxl-gmail'></i>
                </span>
                <input id="email" type="email" name="email" value="{{ $email ?? old('email')}}">
                <label for="">Email</label>
                <span class="form-message"></span>
            </div>

            <div class="input-box">
                <span class="icon">
                    <i class='bx bxs-lock-alt'></i>
                </span>
                <input type="password" id="password" name="password">
                <label for="password">New Password</label>
                <span id="password-error" class="error-message"></span>
            </div>

            <div class="input-box">
                <span class="icon">
                    <i class='bx bxs-lock-alt'></i>
                </span>
                <input type="password" id="confirmpassword" name="password_confirmation">
                <label for="confirmpassword">Confirm Password</label>
                <span id="password-error" class="error-message"></span>
                @include('admin.alert')
            </div>

            <button type="submit">ResetPassword</button>

            <div class="login-register">
                <p>Don't have an account? <a href="/register" class="login-link">Sign Up</a> </p>
            </div>
            @csrf
        </form>
    </div>
    </div>
</body>

</html>