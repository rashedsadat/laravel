<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wieldy-html.g-axon.work/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 08:12:55 GMT -->

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
    <link rel="stylesheet" href="{{asset('node_modules/dropzone/dist/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/lite-style-1.min.css') }}">
    <!-- /load styles -->
    @stack('style')

</head>

<body class="dt-sidebar--fixed dt-header--fixed">

    <!-- Loader -->
    <div class="dt-loader-container">
        <div class="dt-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10">
                </circle>
            </svg>
        </div>
    </div>
    <!-- /loader -->

    <!-- Root -->
    <div class="dt-root">
        
        @include('admin.common.header')

        <!-- Site Main -->
        <main class="dt-main">
            @include('admin.common.main_sidebar')

            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                @yield('content')

                @include('admin.common.footer')

            </div>
            <!-- /site content wrapper -->

            @include('admin.common.theme_chooser')

            @include('admin.common.sidebar')

        </main>
    </div>
    <!-- /root -->

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

    <script src="{{ asset('node_modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{asset('node_modules/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/js/custom/dropzone.js')}}"></script>
    
    {{-- <script src="{{ asset('assets/js/custom/charts/dashboard-crypto.js') }}"></script> --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('script');
</body>

<!-- Mirrored from wieldy-html.g-axon.work/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 08:14:49 GMT -->

</html>
