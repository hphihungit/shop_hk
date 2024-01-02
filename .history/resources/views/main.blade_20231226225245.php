<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body> <!--class="animsition" -->

    <!-- Header -->
    @if(!$user)
        @include('header')
    @else
        @include('headeruser')
    @endif

    <!-- Cart -->
    @include('cart')

    @yield('content')

    @include('footer')

</body>

</html>