<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" box="IE=edge">
    <meta name="viewport" box="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head box must come *after* these tags -->
    <title>Switchlaw.com</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="canonical" href="" />
    {{--<script src="https://apis.google.com/js/platform.js" async defer></script>--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<section class="header">
    <div class="container">
        <div class="header-logo"><a href="/"><img src="{{ asset('img/SwitchLaw_1.png')}}"></a></div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="header-nav-burder" id="menu">Menu</div>
            <div class="header-nav-list">
                <a href="/" class="header-nav-list-item">home</a>
                <a href="#" class="header-nav-list-item">about us</a>
                <a href="#" class="header-nav-list-item">faq</a>
                <a href="#" class="header-nav-list-item">testimonials</a>
                <a href="#" class="header-nav-list-item">contact us</a>
                <div class="header-nav-share">
                    <g:plusone></g:plusone>
                </div>
            </div>
        </div>
    </div>
</section>


@yield('content')

<section class="footer">
    <div class="footer-nav">
        <div class="container">
            <div class="footer-nav-list">
                <a href="#" class="footer-nav-list-item">
                    Home
                </a>
                <a href="#" class="footer-nav-list-item">
                    About Us
                </a>
                <a href="#" class="footer-nav-list-item">
                    FAQ
                </a>
                <a href="#" class="footer-nav-list-item">
                    Privacy Policy
                </a>
                <a href="#" class="footer-nav-list-item">
                    Terms & Conditions
                </a>
                <a href="#" class="footer-nav-list-item">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
    <div class="footer-copiring">
        <div class="container">
            Copyright © 2018 Switchlaw.com. All rights reserved.
        </div>
    </div>
</section>

{{--<script src="js/my-script.js"></script>--}}
<script src="{{ asset('js/modal.js')}}"></script>
<script src="{{ asset('js/my-script.js')}}"></script>
</body>

</html>