<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body> <!--class="animsition" -->

    <!-- Header -->
    @include('headeruser')

    <!-- Cart -->
    @include('cart')

    @yield('content')

    @include('footer')

</body>

</html>