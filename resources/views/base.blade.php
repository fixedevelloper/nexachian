<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NEXACHAIN - Lottery</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('front/css/typography.css')}}">
    <!-- media element player -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/mediaelementplayer.min.css')}}" />
    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}">
</head>

<body data-spy="scroll" data-offset="80">
<!-- loading -->
<div id="loading">
    <div id="loading-center">
        <div class='loader loader2'>
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- loading End -->
@include('_partials._header')
@yield('content')
@include('_partials._footer')
<div class="modal fade iq-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content blue-bg">
            <div class="modal-header text-center">
                <h4 class="modal-title ">Login</h4>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <div class="section-field">
                        <input class="require" id="contact_name" type="text" placeholder="Name*" name="name">
                    </div>
                    <div class="section-field">
                        <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                    </div>
                    <a class="button iq-mtb-10" href="javascript:void(0)">Sign In</a>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-end">
                            <a href="javascript:void(0)">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <div> Don't Have an Account? <a href="javascript:void(0)" class="iq-font-yellow">Register Now</a></div>
                <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- bubbly -->
<canvas id="canvas1"></canvas>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
<!-- bubbly End -->
<script src="{{asset('front/js/jquery-min.js')}}"></script>
<!-- popper JavaScript -->
<script src="{{asset('front/js/popper.min.js')}}"></script>
<!-- Bootstrap JavaScript -->
<script src="{{asset('front/js/bootstrap.min.js')}} "></script>
<!-- All-plugins JavaScript -->
<script src="{{asset('front/js/all-plugins.js')}} "></script>
<!-- timeline JavaScript -->
<script src="{{asset('front/js/timeline.min.js')}}"></script>
<!-- bubbly JavaScript -->
<script src="{{asset('front/js/bubbly-bg.js')}}"></script>

<script src="{{asset('front/js/lib/canvasjs.min.js')}}"></script>
<script src="{{asset('front/js/lib/particles1.min.js')}}"></script>
<script src="{{asset('front/js/lib/app.js')}}"></script>
<script src="{{asset('front/js/lib/stats.js')}}"></script>
<!-- carousel JavaScript -->
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset('front/js/custom.js')}}"></script>
<script src="{{asset('back/js/contract/lotterie.js')}}"></script>
<script>
    var configs={
            routes:{
                index: "{{\Illuminate\Support\Facades\URL::to('/')}}",
                sendLottory: "{{\Illuminate\Support\Facades\URL::route('sendlottory')}}",
            }
        }
        </script>

</body>
</html>
