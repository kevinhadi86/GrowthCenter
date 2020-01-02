@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-md-6 col-sm-12 gc-full-height hexagon-container">
                <div class="hexagon" style="background-image: linear-gradient(rgba(0, 82, 136, 1), rgba(0, 82, 136, 1)), url('/static/images/Image 1.png'); background-blend-mode: color;"></div>
            </div>
            <div class="header-text-container col-md-6 col-sm-12 gc-full-height gc-container-center flex-column justify-content-center gc-align-left">
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
                    <a href="">
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
            @foreach($featureds as $featured)
                <div class="col-md-4 col-sm-12 article">
                    <div class="col-12">
                        <div class="article-image-container">
                            <div class="article-image" style="background-image: url('/img/{{$featured->image}}')"></div>
                        </div>
                        <div class="article-title mt-3">
                            <span class="gc-text-light-bold gc-georgia">{{$featured->title}}</span>
                        </div>
                        <div class="mt-3 article-content gc-helvetica">{!! $featured->content !!}</div>
                        <div class="mt-3 gc-helvetica">
                            <a href="{{route('blog-detail', ['id' => $featured->id])}}">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <span class="article-title-highlight gc-baskerville gc-text-light-bold gc-content-2">Popular Article</span>
            </div>
        </div>
        <div class="row">
            @foreach($populars as $popular)
                <div class="col-md-4 col-sm-12 article">
                    <div class="col-12">
                        <div class="article-image-container">
                            <div class="article-image" style="background-image: url('/img/{{$popular->image}}')"></div>
                        </div>
                        <div class="article-title mt-3">
                            <span class="gc-text-light-bold gc-georgia">{{$popular->title}}</span>
                        </div>
                        <div class="mt-3 article-content gc-helvetica">{!! $popular->content !!}</div>
                        <div class="mt-3 gc-helvetica">
                            <a href="{{route('blog-detail', ['id' => $popular->id])}}">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-6">
                <span class="article-title-highlight gc-baskerville gc-text-light-bold gc-content-2">All Articles</span>
            </div>
            <div class="col-6 category gc-container-center justify-content-end">
                <span class="gc-baskerville gc-content gc-text-light-bold mr-3">Categories</span>
                <select id="category" name="" id="" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row ajax-article-container">
            @foreach($articles as $article)
                <div class="col-md-4 col-sm-12 article">
                    <div class="col-12">
                        <div class="article-image-container">
                            <div class="article-image" style="background-image: url('/img/{{$article->image}}')"></div>
                        </div>
                        <div class="article-title mt-3">
                            <span class="gc-text-light-bold gc-georgia">{{$article->title}}</span>
                        </div>
                        <div class="mt-3 article-content gc-helvetica">{!! $article->content !!}</div>
                        <div class="mt-3 gc-helvetica">
                            <a href="{{route('blog-detail', ['id' => $article->id])}}">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.dotdotdot/4.0.10/dotdotdot.js"></script>
    <script>
        document.addEventListener( "DOMContentLoaded", () => {
            let wrapper = document.querySelector( ".article-content" );
            let options = {
                height: "100px",
                truncate: "word"
            };
            new Dotdotdot( wrapper, options );
        });
        $(function() {
            $("#category").change(function(e) {
                const categoryId = e.target.value;
                $container = $('.ajax-article-container');
                $container.html('');
                $.ajax({
                    url: '/blog/category/' + categoryId,
                    type: 'get',
                    success: function(data) {
                        data.forEach(function(val, key) {
                            console.log(key, val);
                            $container.append(`
                            <div class="col-md-4 col-sm-12 article">
                                <div class="col-12">
                                    <div class="article-image-container">
                                        <div class="article-image" style="background-image: url('/img/`+ val.image +`')"></div>
                                    </div>
                                    <div class="article-title mt-3">
                                        <span class="gc-text-light-bold gc-georgia">`+ val.title +`</span>
                                    </div>
                                    <div class="mt-3 article-content gc-helvetica">`+ val.content +`</div>
                                    <div class="mt-3 gc-helvetica">
                                        <a href="">Read more</a>
                                    </div>
                                </div>
                            </div>
                            `);
                        })
                    }
                });
            });
        });
    </script>
@endsection
