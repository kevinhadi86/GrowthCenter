<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Growth Center</title>
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('lib/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    @yield('css')
</head>
<body>
<nav class="navbar-light header navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-end" style="width: 100%">
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link @if(request()->is('/')) active @endif white-able">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{route('our-solutions')}}" class="nav-link @if(request()->is('our-solutions*')) active @endif white-able">Our Solutions</a>
            </li>
            <li class="nav-item">
                <a href="{{route('about-us')}}" class="nav-link @if(request()->is('about-us*')) active @endif white-able">About Us</a>
            </li>
            <li class="nav-item">
                <a href="{{route('blog')}}" class="nav-link @if(request()->is('blog*')) active @endif white-able">Insight</a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact-us')}}">
                    <button class="btn btn-growth @if(request()->is('contact-us*')) active @endif nav-link" style="font-size: 14px;">Contact Us</button>
                </a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
<div class="footer gc-full-width gc-align-center gc-helvetica gc-color-white" style="font-size: 14px;">
    <span>&copy; Copyright 2019, Growth Center, Inc. All rights reserved.</span>
</div>
</body>
<script src="{{asset('lib/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('lib/popper/popper.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.js')}}"></script>
<script>
    $(function() {
        if ($(window).scrollTop() > 50) {
            $('.header').css('background-color', 'white');
            $('.nav-item:not(:last-child) .nav-link').removeClass('white-able');
        } else {
            $('.header').css('background-color', 'transparent');
            $('.nav-item:not(:last-child) .nav-link').addClass('white-able');
        }
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 50) {
                $('.header').css('background-color', 'white');
                $('.nav-item:not(:last-child) .nav-link').removeClass('white-able');
            } else {
                $('.header').css('background-color', 'transparent');
                $('.nav-item:not(:last-child) .nav-link').addClass('white-able');
            }
        });
    });
</script>
@yield('script')
</html>
