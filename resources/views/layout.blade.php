<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Alumni SMA Negeri 6 Lubuklinggau
            @hasSection('titlePage')
                - @yield('titlePage')
            @endif
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--====== Favicon Icon ======-->
{{--        <link rel="shortcut icon" href="template/images/favicon.png" type="image/png">--}}

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/slick.css") }}">

        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/animate.css") }}">

        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/nice-select.css") }}">

        <!--====== Nice Number css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/jquery.nice-number.min.css") }}">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/magnific-popup.css") }}">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/bootstrap.min.css") }}">

        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/font-awesome.min.css") }}">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/default.css") }}">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/style.css") }}">

        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="{{ asset("template/css/responsive.css") }}">

        @hasSection("css")
            @yield("css")
        @endif
    </head>
    <body>
    @include("components.loader")
    @include("components._navbar")
    @include("components._search_box")
    @yield("slider")
    @yield("content")
    @include("components._footer")
    <!--====== jquery js ======-->
    <script src="{{ url("template/js/vendor/modernizr-3.6.0.min.js") }}"></script>
    <script src="{{ url("template/js/vendor/jquery-1.12.4.min.js") }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ url("template/js/bootstrap.min.js") }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ url("template/js/slick.min.js") }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ url("template/js/jquery.magnific-popup.min.js") }}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{ url("template/js/waypoints.min.js") }}"></script>
    <script src="{{ url("template/js/jquery.counterup.min.js") }}"></script>

    <!--====== Nice Select js ======-->
    <script src="{{ url("template/js/jquery.nice-select.min.js") }}"></script>

    <!--====== Nice Number js ======-->
    <script src="{{ url("template/js/jquery.nice-number.min.js") }}"></script>

    <!--====== Count Down js ======-->
    <script src="{{ url("template/js/jquery.countdown.min.js") }}"></script>

    <!--====== Validator js ======-->
    <script src="{{ url("template/js/validator.min.js") }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ url("template/js/ajax-contact.js") }}"></script>

    <!--====== Main js ======-->
    <script src="{{ url("template/js/main.js") }}"></script>

    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{ url("template/js/map-script.js") }}"></script>
    </body>

</html>
