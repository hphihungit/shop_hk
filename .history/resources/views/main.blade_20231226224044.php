<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body> <!--class="animsition" -->

    <!-- Header -->
    @if($user)
        @include('headeruser')
    @else
        @include('header')
    @endif

    <!-- Cart -->
    @include('cart')

    @yield('content')

    @include('footer')

</body>

</html>