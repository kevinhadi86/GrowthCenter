@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height solution-header">
            <div class="col-md-6 col-sm-12 gc-full-height gc-container-center justify-content-center flex-column">
                <div>
                    <div class="col-md-6 col-sm-12">
                        <span class="gc-georgia gc-text-light-bold gc-title solutions-title">{{$question->question}}</span>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <span class="gc-helvetica">{{$question->description}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 gc-full-height gc-align-right">
                <div id="testimony-carousel" class="carousel slide gc-full-height gc-full-width" data-ride="carousel">
                    <div class="carousel-inner gc-full-height gc-full-width">
                        @foreach($question->solutions as $index=>$solution)
                        <div class="carousel-item gc-full-height gc-full-width @if($index == 0) active @endif">
                            <div class="testimony gc-full-height flex-column-reverse d-flex">
                                <div class="align-self-end gc-full-height flex-column-reverse d-flex position-relative">
                                    <img src="{{asset('/static/images/Mask Group 21.png')}}" class="align-self-end" alt="">
                                    <div class="testimony-box-container">
                                        <div class="testimony-box">
                                            <div class="gc-helvetica mb-3">
                                                "{{$solution->solution}}"
                                            </div>
{{--                                            <div class="gc-helvetica gc-text-light-bold">--}}
{{--                                                Cika Theresia--}}
{{--                                            </div>--}}
{{--                                            <div class="gc-helvetica">--}}
{{--                                                UI/UX Designer GrowthCenter.id--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                <ul class="list-group list-group-flush">
                    @foreach($categories as $i=>$category)
                        <li class="list-group-item px-0">
                            <a class="btn collapsed gc-text-light-bold" data-toggle="collapse" href="#collapseCategory{{$i}}" aria-controls="collapseCategory{{$i}}">
                                {{$category->name}}<span class="mr-3"></span>
                            </a>
                            <div class="collapse" id="collapseCategory{{$i}}">
                                <div class="card card-body mt-2" style="border: none">
                                    @foreach($category->questions as $question)
                                        <div class="mb-3">
                                            <a href="{{route('our-solutions-detail', ['id' => $question->id])}}" class="gc-no-decoration-link">
                                                <span class="the-question @if ($question->id == $id) active-other-question-title @endif " >{{$question->question}}</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-8">
            <div class="row question-container">
                @foreach($successStories as $successStory)
                <div class="col-md-6 col-sm-12 article">
                    <div class="col-12">
                        <div class="article-image-container">
                            <div class="article-image" style="background-image: url('/img/{{$successStory->image}}')"></div>
                        </div>
                        <div class="article-title mt-3">
                            <span class="gc-text-light-bold gc-georgia">{{$successStory->title}}</span>
                        </div>
                        <div class="mt-3 article-content">
                            {!! $successStory->content !!}
                        </div>
                        <div class="mt-3 gc-helvetica">
                            <a href="{{route('success-story', ['id' => $successStory->id])}}">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($articles as $article)
                    <div class="col-md-6 col-sm-12 article">
                        <div class="col-12">
                            <div class="article-image-container">
                                <div class="article-image" style="background-image: url('/img/{{$article->image}}')"></div>
                            </div>
                            <div class="article-title mt-3">
                                <span class="gc-text-light-bold gc-georgia">{{$article->title}}</span>
                            </div>
                            <div class="mt-3 article-content">
                                {!! $article->content !!}
                            </div>
                            <div class="mt-3 gc-helvetica">
                                <a href="{{route('blog-detail', ['id' => $article->id])}}">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/our-solutions-detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
@endsection

@section('script')
@endsection
