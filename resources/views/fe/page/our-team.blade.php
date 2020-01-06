@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron position-relative">
        <div class="gc-full-bg-image parallax" style="background-image: url('{{asset("static/images/Group 269.png")}}')"></div>
        <div class="gc-full-width gc-full-height">
            <span class="our-team-title gc-georgia gc-color-white gc-title gc-text-light-bold">Our Team.</span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" id="team-container">
            @foreach($teams as $team)
            <div class="col-md-4 col-sm-12 team">
                <div class="team-content">
                    <div class="row justify-content-center">
                        <div class="team-picture">
                            <img src="{{asset('img/' . $team->image)}}" alt="">
                        </div>
                    </div>
                    <div>
                        <span class="gc-baskerville gc-text-light-bold">{{$team->name}}</span>
                    </div>
                    <div>
                        <span class="gc-baskerville job-title">{{$team->position}}</span>
                    </div>
                    <div class="mt-3">
                        <span class="gc-helvetica">{{$team->description}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/our-team.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/white-header.css')}}">
    <style>
        nav.navbar-light {
            background-color: grey;
        }
    </style>
@endsection

@section("script")
    <script>
        $(function() {
            if ($(window).scrollTop() > 50) {
                $('.header').css('background-color', 'white');
                $('.nav-item:not(:last-child) .nav-link').removeClass('white-able');
            } else {
                $('.header').css('background-color', 'rgba(100, 100, 100, 0.25)');
                $('.nav-item:not(:last-child) .nav-link').addClass('white-able');
            }

            $(window).bind('scroll', function () {
                if ($(window).scrollTop() > 50) {
                    $('.header').css('background-color', 'white');
                    $('.nav-item:not(:last-child) .nav-link').removeClass('white-able');
                } else {
                    $('.header').css('background-color', 'rgba(0, 0, 0, 0.25)');
                    $('.nav-item:not(:last-child) .nav-link').addClass('white-able');
                }
            });
        });
    </script>
@endsection
