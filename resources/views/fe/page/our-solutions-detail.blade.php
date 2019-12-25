@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height solution-header">
            <div class="col-6 gc-full-height gc-container-center justify-content-center flex-column">
                <div>
                    <span class="gc-georgia gc-text-light-bold gc-title solutions-title">How do I convince my organization that change is imminent?</span>
                </div>
                <div>
                    <span class="gc-helvetica">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will.</span>
                </div>
            </div>
            <div class="col-6 gc-full-height gc-align-right">
                <div id="testimony-carousel" class="carousel slide gc-full-height gc-full-width" data-ride="carousel">
                    <div class="carousel-inner gc-full-height gc-full-width">
                        <div class="carousel-item gc-full-height gc-full-width active">
                            <div class="testimony gc-full-height flex-column-reverse d-flex">
                                <div class="align-self-end gc-full-height flex-column-reverse d-flex position-relative">
                                    <img src="{{asset('/static/images/Mask Group 21.png')}}" class="align-self-end" alt="">
                                    <div class="testimony-box-container">
                                        <div class="testimony-box">
                                            <div class="gc-helvetica mb-3">
                                                "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account"
                                            </div>
                                            <div class="gc-helvetica gc-text-light-bold">
                                                Cika Theresia
                                            </div>
                                            <div class="gc-helvetica">
                                                UI/UX Designer GrowthCenter.id
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item gc-full-height gc-full-width">
                            <div class="testimony gc-full-height flex-column-reverse d-flex">
                                <div class="align-self-end gc-full-height flex-column-reverse d-flex position-relative">
                                    <img src="{{asset('/static/images/Mask Group 21.png')}}" class="align-self-end" alt="">
                                    <div class="testimony-box-container">
                                        <div class="testimony-box">
                                            <div class="gc-helvetica mb-3">
                                                "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account"
                                            </div>
                                            <div class="gc-helvetica gc-text-light-bold">
                                                Cika Theresia
                                            </div>
                                            <div class="gc-helvetica">
                                                UI/UX Designer GrowthCenter.id
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item gc-full-height gc-full-width">
                            <div class="testimony gc-full-height flex-column-reverse d-flex">
                                <div class="align-self-end gc-full-height flex-column-reverse d-flex position-relative">
                                    <img src="{{asset('/static/images/Mask Group 21.png')}}" class="align-self-end" alt="">
                                    <div class="testimony-box-container">
                                        <div class="testimony-box">
                                            <div class="gc-helvetica mb-3">
                                                "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account"
                                            </div>
                                            <div class="gc-helvetica gc-text-light-bold">
                                                Cika Theresia
                                            </div>
                                            <div class="gc-helvetica">
                                                UI/UX Designer GrowthCenter.id
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#testimony-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimony-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row questions">
        <div class="col-4">
            <div class="mb-4">
                <span class="other-questions gc-baskerville gc-text-light-bold">Other Questions</span>
            </div>
            <div class="gc-georgia gc-text-light-bold question-list gc-text-font-normal pr-5">
                @for($i = 0; $i < 5; $i++)
                <div class="mb-3">
                    <span @if ($i == 0) class="active-other-question-title" @endif>How can I help my employees unlock their potential?</span>
                </div>
                @endfor
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                @for($i = 0; $i < 6; $i++)
                <div class="col-6 article">
                    <div class="col-12">
                        <div class="article-image-container">
                            <div class="article-image" style="background-image: url('/static/images/Image 3.png')"></div>
                        </div>
                        <div class="article-title mt-3">
                            <span class="gc-text-light-bold gc-georgia">Arming a 19th Century Company with a 21st Century Digital Venture</span>
                        </div>
                        <div class="mt-3">
                            <span class="gc-helvetica">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span>
                        </div>
                        <div class="mt-3 gc-helvetica">
                            <a href="{{route('blog-detail')}}">Read more</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/our-solutions-detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
@endsection
