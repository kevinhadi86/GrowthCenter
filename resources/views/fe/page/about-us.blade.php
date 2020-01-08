@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron top-jumbotron">
        <div class="row gc-full-height" style="margin: 0">
            <div class="col-md-5 img-container gc-full-height main-hexagon">
                <img src="{{asset('static/images/Group 267.png')}}" alt="">
            </div>
            <div class="col-md-7 col-sm-12 gc-full-height gc-container-center" data-aos="fade-right">
                <div class="row" style="padding-left: 20px;">
                    <div class="col-md-8 col-sm-12">
                        <div style="padding-bottom: 10px;">
                            <span class="gc-title gc-georgia gc-text-light-bold" style="line-height: normal;">Growth Center Invites You<br>to <span class="text-blue">Grow with Us</span></span>
                        </div>
                        <div>
                            <span class="gc-helvetica gc-content">{{$mainSection->value}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gc-jumbotron position-relative">
        <div class="gc-full-bg-image parallax" style="background-image: url('{{asset("static/images/Group 268.png")}}')"></div>
        <div class="row gc-full-height gc-full-width align-content-around justify-content-center our-belief">
            <div class="col-md-6 col-sm-8 gc-full-height-resp hexagon-container">
                <div class="hexagon-content row align-content-center" data-aos="zoom-in">
                    <div>
                        <span class="gc-title gc-text-bold gc-georgia">Our Beliefs</span>
                    </div>
                    <div>
                        <span class="gc-helvetica gc-content">{{$ourBeliefSection->value}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-md-6 col-sm-12 gc-full-height">
                <div class="row gc-full-height align-content-end justify-content-center flex-column">
                    <div class="col-md-9 col-sm-9 row justify-content-center flex-column align-self-center" data-aos="fade-right">
                        <div class="gc-text-font-gigantic gc-georgia position-relative">
                            <span class="open-quote">&ldquo;</span>
                        </div>
                        <div class="gc-title gc-georgia gc-text-bold mb-5">
                            <span class="we-believe-text">We Believe</span>
                        </div>
                        <div class="gc-text-font-normal-2 gc-helvetica">
                            <span>{{$weBelieveSection->value}}</span>
                        </div>
                        <div class="gc-text-font-gigantic gc-georgia position-relative gc-full-width gc-align-right">
                            &rdquo;
                        </div>
                        <div>
                            <a href="{{route('our-team')}}">
                                <button class="btn btn-growth gc-text-light-bold p-3">See All Team</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 overflow-hidden team-image-container">
                <img class="team-image" src="{{asset("static/images/Mask Group 8.png")}}" alt="">
            </div>
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/about-us.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
@endsection
