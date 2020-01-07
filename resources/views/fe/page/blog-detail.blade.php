@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron picture-header" style="background-image: url('/img/{{$blog->image}}')">
        <div class="row gc-full-height align-content-end justify-content-center">
            <div class="col-10 blog-header">
                <div class="position-relative">
                    <span class="gc-text-light-bold gc-baskerville gc-content gc-normal-highlight">{{$blog->category == null ? $blog->question->category->name : $blog->category->name}}</span>
                </div>
                <div>
                    <span class="gc-text-light-bold gc-georgia gc-title">{{$blog->title}}</span>
                </div>
                <div class="row blog-information">
                    <div class="col-6">
                        <span class="gc-helvetica gc-text-light-bold">Written by <span class="author">{{$blog->author}}</span></span>
                    </div>
                    <div class="col-6 gc-align-right">
                        <span>August 12, 2019. 10:00 PM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gc-container-center justify-content-center">
        <div class="col-10 blog-container">
            <div class="row">
                <div class="gc-helvetica col-md-7 col-sm-12">
                    {!! $blog->content !!}
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="gc-text-light-bold">Related Reads</span>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($related as $r)
                        <div class="col-12 article">
                            <div class="btn col-12 shadow-container" onclick="window.location='{{route('blog-detail', ['id' => $r->id])}}';">
                                <div class="article-image-container">
                                    <div class="article-image" style="background-image: url('/img/{{$r->image}}')"></div>
                                </div>
                                <div class="article-title mt-3 gc-text-light-bold gc-georgia gc-align-left">{{$r->title}}</div>
                                <div class="mt-3 article-content gc-align-left">
                                    {{strip_tags($r->content)}}
                                </div>
                                <div class="mt-3 gc-helvetica gc-align-left">
                                    <a href="{{route('blog-detail', ['id' => $r->id])}}">Read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/blog-detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/white-header.css')}}">
@endsection
