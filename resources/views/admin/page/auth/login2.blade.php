<!DOCTYPE html>
<html>

<head>
    <title>Averin</title>
    <link rel="icon" href="{{asset('/client/img/logo/averin.png')}}" sizes="16x16 32x32" type="image/png">
    <!-- META -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <meta name="description" content="Best Work Space in West Jakarta">
    <meta name="keywords" content="workspace, kerja, tempat, gedung">
    <meta name="author" content="FORTISINDONESIA">
    <!-- END OF META -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- END OF META -->

    <!-- WAJIB BINDING -->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/template-style.css') }}">
    <!-- End of CSS -->

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('login/font/font-awesome/css/all.css') }}">
    <!-- End of CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/css-login.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- End of Font -->
</head>

<body>

<div class="wrap">
    <div class="tint-2">
        <div class="container-fluid" style="height: 100vh">
            <div class="bg"></div>
            <!-- page start -->
            <div class="row tp-ta-ct tp-m-bt-50 fourK tp-vc-absolute">
                <div class="col-12 reveal-left tp-p-tp-50">
                    <a href="{{route('en::home')}}">
                        <img src="{{asset('/client/img/logo/averin.png')}}" style="width: 150px">
                    </a>
                </div>
                <div class="col-12 reveal-left tp-p-tp-20 open tp-fs-rs-20 tp-fc-white">
                    ADMIN LOGIN PANEL
                </div>
                <div class="tp-grayscale" style="margin:0 auto; width: 200px">
                    <div class="col-12 tp-ta-lf tp-fs-italic nunito tp-fc-black tp-fs-bold tp-fs-rs-16">
                        <form method="POST" action="{{ route('login') }}">
                            {{csrf_field()}}
                            <div class="tp-m-tb-10 reveal-left">
                                <input type="text" class="bz-alt-num-light-gold tp-rnd-5 tp-fs-12" name="username"
                                       placeholder=" *Username" required>
                            </div>
                            <div class="tp-m-tb-10 reveal-left">
                                <input type="password" class="bz-alt-num-light-gold tp-rnd-5 tp-fs-12" name="password"
                                       placeholder=" *Password" required>
                            </div>
                            <div class="tp-m-tb-10 reveal-left">
                                <button type="submit" class=" bz-bg-light-gold tp-rnd-5 tp-fs-12" style="width: 100%">Login!</button>
                            </div>

                        </form>
                        @if ($errors->has('username') || $errors->has('password'))
                            <div class="alert alert-danger tp-fs-rs-10" role="alert">
                                Invalid credentials
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <!-- page end -->
        </div>
    </div>
</div>


<div class="container-fluid tp-bc-black">
    <div class="row overflow-hidden fourK">
        <div class="col-12 tp-is-xm tp-ta-ct tp-fc-white nunito">
            @2019 Content Management System Created by Fortis Indonesia dedicated to Averin
        </div>
    </div>
</div>



<!-- WAJIB BINDING -->
<script charset="UTF8" src="{{ asset('login/js/template-script.js') }}"></script>
<!-- End of JS -->

<!-- Default JS -->
<script charset="UTF8" src="{{ asset('login/js/jquery-3.1.0.js') }}"></script>
<script charset="UTF8" src="{{ asset('login/js/jquery-3.3.1.min.js') }}"></script>
<script charset="UTF8" src="{{ asset('login/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script charset="UTF8" src="{{ asset('login/js/jquery-ui.js') }}"></script>
<script charset="UTF8" src="{{ asset('login/js/popper.min.js') }}"></script>
<script charset="UTF8" src="{{ asset('login/js/scrollreveal.min.js') }}"></script>
<script charset="UTF8" src="{{ asset('login/js/bootstrap.min.js') }}"></script>
<!-- End of JS -->

<!-- LOCAL JS -->
<script charset="UTF8" src="{{ asset('login/js/login.js') }}"></script>
<!-- End of JS -->
</body>

</html>
