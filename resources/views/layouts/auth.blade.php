<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wieldy - A fully responsive, HTML5 based admin template">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
    <!-- /meta tags -->
    <title>Wieldy - Admin Dashboard</title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- /site favicon -->

    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="{{ asset('node_modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/gaxon-icon/style.css') }}">
    <!-- /font icon Styles -->

    <!-- Perfect Scrollbar stylesheet -->
    <link rel="stylesheet" href="{{ asset('node_modules/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Load Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/lite-style-1.min.css') }}">
    <!-- /load styles -->

</head>

<body class="dt-sidebar--fixed dt-header--fixed">

    @yield('content')

    <!-- Optional JavaScript -->
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('node_modules/moment/moment.js') }}"></script>
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- Perfect Scrollbar jQuery -->
    <script src="{{ asset('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}">
    </script>
    <!-- /perfect scrollbar jQuery -->

    <!-- masonry script -->
    <script src="{{ asset('node_modules/masonry-layout/dist/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.js') }}"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
