<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body> <!--class="animsition" -->

    <!-- Header -->
    @include('header')

    <!--Results -->
    @yield('content')

    @include('footer')

</body>

</html>