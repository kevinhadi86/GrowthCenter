@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div id="topInsightCarousel" class="carousel slide gc-full-height gc-full-width" data-ride="carousel">
            <div class="carousel-inner gc-full-height gc-full-width">
                @foreach($featured as $index=>$f)
                <div class="carousel-item gc-full-height @if($index == 0) active @endif ">
                    <div class="row gc-full-height">
                        <div class="col-md-6 col-sm-12 gc-full-height hexagon-container">
                            <div class="hexagon" style="background-image: url('/img/{{$f->image}}');"></div>
                        </div>
                        <div class="header-text-container col-md-6 col-sm-12 gc-full-height gc-container-center flex-column justify-content-center gc-align-left">
                            <div class="position-relative mb-3">
                                <span class="gc-baskerville gc-content-2 gc-text-light-bold category-highlight">{{$f->category->name}}</span>
                            </div>
                            <div class="mb-4 gc-georgia gc-title gc-text-light-bold highlight-clickable main-title">{{$f->title}}</div>
                            <div class="mb-3 gc-helvetica main-content">{!! strip_tags($f->content) !!}</div>
                            <div class="gc-helvetica">
                                <a href="{{route('blog-detail', ['id' => $f->id])}}">
                                    <button class="btn btn-growth read-more-button">Read More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#topInsightCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#topInsightCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid blog-container">
        <div class="row">
            <div class="col-12">
                <span class="article-title-highlight gc-baskerville gc-text-light-bold gc-content-2">Featured Article</span>
            </div>
        </div>
        <div class="row slick-container">
            @for($i = 0; $i < 2; $i++)
                @foreach($featureds as $featured)
                    <div class="col-md-12 col-sm-12 article gc-full-width">
                        <div class="btn col-12 shadow-container" onclick="window.location='{{route('blog-detail', ['id' => $featured->id])}}';">
                            <div class="article-image-container">
                                <div class="article-image" style="background-image: url('/img/{{$featured->image}}')"></div>
                            </div>
                            <div class="article-title mt-3 gc-text-light-bold gc-georgia gc-align-left">{{$featured->title}}</div>
                            <div class="mt-3 article-content gc-align-left">
                                {{strip_tags($featured->content)}}
                            </div>
                            <div class="mt-3 gc-helvetica gc-align-left">
                                <a href="{{route('blog-detail', ['id' => $featured->id])}}">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endfor
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
                    <div class="btn col-12 shadow-container" onclick="window.location='{{route('blog-detail', ['id' => $article->id])}}';">
                        <div class="article-image-container">
                            <div class="article-image" style="background-image: url('/img/{{$article->image}}')"></div>
                        </div>
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
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick-theme.css')}}"/>
    <style>
        .slick-arrow {
            filter: invert(100%);
        }

        /*.slick-next {*/
        /*    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' …3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");*/
        /*}*/

        /*.slick-next:before {*/
        /*    content: '';*/
        /*}*/

        /*.slick-prev:before {*/
        /*    content: '<';*/
        /*    font-weight: 800;*/
        /*}*/
    </style>
@endsection

@section('script')
    <script src="{{asset('lib/slick/slick.js')}}"></script>
    <script>
        $(function() {
            $('.slick-container').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
            });
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
                                    <div class="btn col-12 shadow-container" onclick="window.location='/blog-detail/${val.id}';">
                                        <div class="article-image-container">
                                            <div class="article-image" style="background-image: url('/img/${val.image}')"></div>
                                        </div>
                                        <div class="article-title mt-3 gc-text-light-bold gc-georgia gc-align-left">${val.title}</div>
                                        <div class="mt-3 article-content gc-align-left">
                                        ${val.content.replace(/<\/?[^>]+(>|$)/g, "")}
                                        </div>
                                        <div class="mt-3 gc-helvetica gc-align-left">
                                            <a href="/blog-detail/${val.id}">Read more</a>
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
