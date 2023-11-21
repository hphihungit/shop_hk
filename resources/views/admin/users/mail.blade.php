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
                    <a href=""><i class='bx bxl-facebook-square'></i></a>
                    <a href=""><i class='bx bxl-instagram-alt'></i></a>
                    <a href=""><i class='bx bxl-gmail'></i></a>
                </div>
            </div>
        </div>
        @include('admin.alert')
        <div class="logreg-box">
            <div class="form-box login">
                <form class="form" action="{{ route('forget.passwordpost') }}" method="post">
                    @csrf
                    <h2>Forgot Password</h2>
                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxl-gmail'></i>
                        </span>
                        <input id="email" type="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
                        <label for="">Email</label>
                        <span class="form-message"></span>
                    </div>

                    <div class="remember-forgot">
                        <a href="{{ route('login') }}">Back Login</a>
                    </div>
                    <button type="submit">Send Password Link</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>