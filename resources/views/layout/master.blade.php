<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Growth Center</title>
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    @yield('css')
</head>
<body>
<div class="header">
    <ul class="nav justify-content-end" style="width: 100%">
        <li class="nav-item">
            <a href="" class="nav-link active">Home</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">Our Solutions</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">About Us</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">Insight</a>
        </li>
        <li class="nav-item">
            <a href="">
                <button class="btn btn-growth nav-link">Contact Us</button>
            </a>
        </li>
    </ul>
</div>
@yield('content')
</body>
<script src="{{asset('lib/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('lib/popper/popper.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.js')}}"></script>
<script>
    $(function() {
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 50) {
                $('.header').css('background-color', 'white');
            } else {
                $('.header').css('background-color', 'transparent');
            }
        });
    })();
</script>
@yield('script')
</html>
