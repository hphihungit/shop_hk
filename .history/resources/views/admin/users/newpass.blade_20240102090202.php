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
                <input id="email" type="email" name="email" value="{{ $email ?? old('email')}}" placeholder="Email">
                <span class="form-message"></span>
            </div>

            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Mật khẩu cũ">
                <span id="password-error" class="error-message"></span>
            </div>

            <div class="input-box">
                <input type="password" id="confirmpassword" name="password_confirmation" placeholder="Mật khẩu mới">
                <span id="password-error" class="error-message"></span>
                @include('admin.alert')
            </div>

            <button style="margin-bottom: 16px;" type="submit" class="btn">XÁC NHẬN</button>

            <div class="register-link">
                <p>Bạn chưa có tài khoản? <a href="/admin/users/register">Đăng ký</a></p>
            </div>
            @csrf
        </form>
    </div>
    </div>
</body>

</html>