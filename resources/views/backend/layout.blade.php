<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NEXACHAIN | Lottery</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('back/images/favicon.ico')}}"/>
    <link rel="stylesheet" href="{{asset('back/css/core/libs.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/coinex.min.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{asset('back/css/custom.min.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{asset('back/css/style.css')}}">
</head>
<body class=" ">
<!-- loader Start -->
<div id="loading">
    <div class="loader simple-loader">
        <div class="loader-body"></div>
    </div>
</div>
<!-- loader END -->
@include('backend._partials._sidebar')
<main class="main-content">
        @include('backend._partials._header')
        @yield('content')
    @include('backend._partials._footer')
</main>
<!-- Backend Bundle JavaScript -->
<script src="{{asset('back/js/core/libs.min.js')}}"></script>
<script src="{{asset('back/js/core/external.min.js')}}"></script>


<!-- app JavaScript -->
<script src="{{asset('back/js/coinex.js')}}"></script>


@stack('script')
</body>
</html>
