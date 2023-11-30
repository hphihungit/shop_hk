    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="/template/admin/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/template/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/template/admin/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="/template/admin/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/template/admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="/template/admin/assets/css/style.css" />
    <link rel="shortcut icon" href="/template/admin/assets/images/favicon.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')
    <style>
        .hidden {
            display: none;
        }

        .scroll {
            overflow-x: scroll;
            display: block;
        }
    </style>