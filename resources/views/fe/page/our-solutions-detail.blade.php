@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height solution-header">
            <div class="col-md-6 col-sm-12 gc-full-height gc-container-center justify-content-center flex-column">
                <div data-aos="fade-right">
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
                                <div class="align-self-center gc-full-height flex-column-reverse d-flex position-relative">
                                    <img src="{{asset('/img/'.$solution->image)}}" class="align-self-center" alt="">
                                    <div class="testimony-box-container">
                                        <div class="testimony-box">
                                            <div class="gc-helvetica mb-3">
                                                "{{$solution->solution}}"
                                            </div>
                                            <div class="gc-helvetica gc-text-light-bold">
                                                {{$solution->name}}
                                            </div>
                                            <div class="gc-helvetica">
                                                {{$solution->position}}
                                            </div>
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
    </div>
    <div class="row questions">
        <div class="col-md-4 col-sm-12">
            <div class="mb-4">
                <span class="other-questions gc-baskerville gc-text-light-bold hide-resp">Other Questions</span>
                <button class="btn btn-growth gc-baskerville other-question-toggle show-resp">Other Questions</button>
            </div>
            <div class="gc-georgia gc-text-light-bold question-list gc-text-font-normal pr-5 hide-resp" data-aos="fade-down">
                <ul class="list-group list-group-flush accordion" id="category-accordion">
                    @foreach($categories as $i=>$category)
                        <li class="list-group-item px-0">
                            <a class="btn @if($category->id != $question->category_id) collapsed @endif gc-text-light-bold category-toggle" data-toggle="collapse" href="#collapseCategory{{$i}}" aria-controls="collapseCategory{{$i}}">
                                {{$category->name}}<span class="mr-3"></span>
                            </a>
                            <div class="collapse @if($category->id == $question->category_id) show @endif " id="collapseCategory{{$i}}" data-parent="#category-accordion">
                                <div class="card card-body mt-2" style="border: none">
                                    @foreach($category->questions as $q)
                                        <div class="mb-3">
                                            <a href="{{route('our-solutions-detail', ['id' => $q->id])}}" class="gc-no-decoration-link">
                                                <span class="the-question @if ($q->id == $id) active-other-question-title @endif " >{{$q->question}}</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <br>
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="row question-container" data-aos="fade-up">
                @foreach($successStories as $successStory)
                <div class="col-md-6 col-sm-12 article">
                    <div href="" class="btn col-12 shadow-container" onclick="window.location='{{route('success-story', ['id' => $successStory->id])}}';">
                        <div class="article-image-container">
                            <div class="article-image" style="background-image: url('/img/{{$successStory->image}}')"></div>
                        </div>
                        <div class="gc-align-left gc-georgia gc-text-light-bold article-type">Success Story</div>
                        <div class="article-title mt-3 gc-text-light-bold gc-georgia gc-align-left">{{$successStory->title}}</div>
                        <div class="mt-3 article-content gc-align-left">
                            {{strip_tags($successStory->content)}}
                        </div>
                        <div class="mt-3 gc-helvetica gc-align-left">
                            <a href="{{route('success-story', ['id' => $successStory->id])}}">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($articles as $article)
                    <div class="col-md-6 col-sm-12 article">
                        <div href="" class="btn col-12 shadow-container" onclick="window.location='{{route('blog-detail', ['id' => $article->id])}}';">
                            <div class="article-image-container">
                                <div class="article-image" style="background-image: url('/img/{{$article->image}}')"></div>
                            </div>
                            <div class="gc-align-left gc-georgia gc-text-light-bold article-type">Insight</div>
                            <div class="article-title mt-3 gc-text-light-bold gc-georgia gc-align-left">{{$article->title}}</div>
                            <div class="mt-3 article-content gc-align-left">
                                {{strip_tags($article->content)}}
                            </div>
                            <div class="mt-3 gc-helvetica gc-align-left">
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
    <script>
        $(function() {
            $(".other-question-toggle").click(function() {
                $('.question-list').toggle(500);
            });
        });
    </script>
@endsection
