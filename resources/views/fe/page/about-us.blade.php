@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron top-jumbotron">
        <div class="row gc-full-height" style="margin: 0">
            <div class="col-5 img-container gc-full-height">
                <img src="{{asset('static/images/Group 267.png')}}" alt="">
            </div>
            <div class="col-7 gc-full-height gc-container-center">
                <div class="row" style="padding-left: 20px;">
                    <div class="col-8">
                        <div style="padding-bottom: 10px;">
                            <span class="gc-title gc-georgia gc-text-light-bold" style="line-height: normal;">Growth Center Invites You<br>to <span class="text-blue">Grow with Us</span></span>
                        </div>
                        <div>
                            <span class="gc-helvetica gc-content">Growth Center provide to contribute all of your business needs to configure and accelerating the people’s growth based on tailor made needs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gc-jumbotron position-relative">
        <div class="gc-full-bg-image parallax" style="background-image: url('{{asset("static/images/Group 268.png")}}')"></div>
        <div class="row gc-full-height gc-full-width align-content-around justify-content-center">
            <div class="col-6 gc-full-height hexagon-container">
                <div class="hexagon-content row align-content-center">
                    <div>
                        <span class="gc-title gc-text-bold gc-georgia">Our Beliefs</span>
                    </div>
                    <div>
                        <span class="gc-helvetica gc-content">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-6 gc-full-height">
                <div class="row gc-full-height align-content-end justify-content-center flex-column">
                    <div class="col-9 row justify-content-center flex-column">
                        <div class="gc-text-font-gigantic gc-georgia position-relative">
                            <span class="open-quote">&ldquo;</span>
                        </div>
                        <div class="gc-title gc-georgia gc-text-bold mb-5">
                            <span class="we-believe-text">We Believe</span>
                        </div>
                        <div class="gc-text-font-normal-2 gc-helvetica">
                            <span>Growth Center is one of the impactful solutions to bring the new evolution of mapping the people’s mindset, culture, and systems.</span>
                        </div>
                        <div class="gc-text-font-gigantic gc-georgia position-relative gc-full-width gc-align-right">
                            &rdquo;
                        </div>
                        <div>
                            <button class="btn btn-growth gc-text-light-bold p-3">See All Team</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 overflow-hidden">
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
