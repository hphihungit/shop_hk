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
            <h1>Quên mật khẩu</h1>
            <div style="text-align: left;">
                @include('admin.alert')
            </div>
            <div class="input-box">
                <span class="icon">
                    <i class='bx bxl-gmail'></i>
                </span>
                <input id="email" type="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
                <label for="">Email</label>
                <span class="form-message"></span>
                @include('admin.alert')
            </div>

            <button style="margin-bottom: 16px;" type="submit" class="btn">ĐĂNG NHẬP</button>
            @csrf
        </form>
    </div>
</body>

</html>