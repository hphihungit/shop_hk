    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="/template/admin/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/template/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/template/admin/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="/template/admin/assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="/template/admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css"/>
    <link rel="stylesheet" href="/template/admin/assets/css/style.css" />
    <link rel="shortcut icon" href="/template/admin/assets/images/favicon.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')
    <style>
        .hidden {
            display: none;
        }
    </style>