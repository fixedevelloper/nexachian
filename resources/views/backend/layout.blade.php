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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
<!-- Backend Bundle JavaScript -->
<script src="{{asset('back/js/core/libs.min.js')}}"></script>
<script src="{{asset('back/js/core/external.min.js')}}"></script>

<script type="module" src="{{asset('back/js/main.js')}}"></script>
<!-- app JavaScript -->
<script src="{{asset('back/js/coinex.js')}}"></script>

<script>
    var configs={
        routes:{
            index: "{{\Illuminate\Support\Facades\URL::to('/')}}",
            sendLottory: "{{\Illuminate\Support\Facades\URL::route('sendlottory')}}",
        }
    }
</script>
@stack('script')
</body>
</html>
