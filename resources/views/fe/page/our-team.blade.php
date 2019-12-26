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
            @for($i = 0; $i < 6; $i++)
            <div class="col-4 team">
                <div class="team-content">
                    <div class="row justify-content-center">
                        <div class="team-picture">
                            <img src="{{asset('static/images/Circle-icons-profile.svg')}}" alt="">
                        </div>
                    </div>
                    <div>
                        <span class="gc-baskerville gc-text-light-bold">Cika Theresia</span>
                    </div>
                    <div>
                        <span class="gc-baskerville job-title">UI/UX Designer</span>
                    </div>
                    <div class="mt-3">
                        <span class="gc-helvetica">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/our-team.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/white-header.css')}}">
@endsection
