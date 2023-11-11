<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <!--===============================================================================================-->
</head>

<body class="animsition">
    <!-- class="animsition" -->
    <!-- Header -->
    @include('header')

    <!-- cart -->
    @include('cart')

    @include('home')

    @yield('content')

    @include('footer')
</body>

</html>