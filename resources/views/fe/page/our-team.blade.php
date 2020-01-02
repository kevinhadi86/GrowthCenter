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
@endsection
