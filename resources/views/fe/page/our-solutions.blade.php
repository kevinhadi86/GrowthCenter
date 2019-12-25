@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-7 gc-full-height gc-container-center pl-5">
                <span class="gc-georgia gc-title gc-text-light-bold">What Question do You Have in Mind?</span>
            </div>
            <div class="col-5">

            </div>
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/our-solutions.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
@endsection
