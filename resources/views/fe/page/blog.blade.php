@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-6 gc-full-height hexagon-container">
                <div class="hexagon" style="background-image: linear-gradient(rgba(0, 82, 136, 1), rgba(0, 82, 136, 1)), url('/static/images/Image 1.png'); background-blend-mode: color;"></div>
            </div>
            <div class="header-text-container col-6 gc-full-height gc-container-center flex-column justify-content-center gc-align-left">
                <div class="position-relative mb-3">
                    <span class="gc-baskerville gc-content-2 gc-text-light-bold category-highlight">People</span>
                </div>
                <div class="mb-4">
                    <span class="gc-georgia gc-title gc-text-light-bold highlight-clickable main-title">How Empowering People Drives Growth in Business</span>
                </div>
                <div class="mb-3">
                    <span class="gc-helvetica">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit</span>
                </div>
                <div class="gc-helvetica">
                    <a href="{{route('blog-detail')}}">
                        <button class="btn btn-growth read-more-button">Read More</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid blog-container">
        <div class="row">
            <div class="col-12">
                <span class="article-title-highlight gc-baskerville gc-text-light-bold gc-content-2">Featured Article</span>
            </div>
        </div>
        <div class="row">
            @for($i = 0; $i < 3; $i++)
            <div class="col-4 article">
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
        <hr>
        <div class="row">
            <div class="col-12">
                <span class="article-title-highlight gc-baskerville gc-text-light-bold gc-content-2">Popular Article</span>
            </div>
        </div>
        <div class="row">
            @for($i = 0; $i < 3; $i++)
                <div class="col-4 article">
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
        <hr>
        <div class="row mb-3">
            <div class="col-6">
                <span class="article-title-highlight gc-baskerville gc-text-light-bold gc-content-2">All Articles</span>
            </div>
            <div class="col-6 category gc-container-center justify-content-end">
                <span class="gc-baskerville gc-content gc-text-light-bold mr-3">Categories</span>
                <select name="" id="" class="form-control">
                    <option value="">People</option>
                </select>
            </div>
        </div>
        <div class="row">
            @for($i = 0; $i < 9; $i++)
                <div class="col-4 article">
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
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
@endsection
