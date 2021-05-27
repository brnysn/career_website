<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('panel.site_title') }}</title>
    <meta name="author" content="Themesdesign"/>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialdesignicons.min.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}"/>

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/selectize.css') }}"/>

{{--    <!--Slider-->--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}"/>--}}

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"/>

</head>
<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->
@include('partials.header')

@include('partials.banner')

@yield('content')

@include('partials.footer')

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- selectize js -->
<script src="{{ asset('assets/js/selectize.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

{{--<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/counter.int.js') }}"></script>--}}

<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/home.js') }}"></script>

</body>
</html>
