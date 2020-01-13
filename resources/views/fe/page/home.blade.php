@extends("fe.layout.master")

@section("content")
    <div class="mainbag">
        <div class="mainview jumbotron jumbotron-fluid home-1">
            <div class="row gc-full-height">
                <div class="col-md-6 gc-full-height">
                    <div class="problem-question-container">
                        <div class="problem-question">
                            <div>
                                <span class="problem-question-sub-text">What's Your Problem Today?</span>
                            </div>
                            <a href="/blog">
                                <div>
                                    <span class="highlight-clickable problem-question-main-text typing" style="color: black !important;"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 home-1-background gc-full-height position-relative">
                    <div class="image-container gc-full-height gc-full-width" style=""></div>
                </div>
            </div>
        </div>
        <div class="mainview jumbotron jumbotron-fluid home-2" data-aos="fade-right">
            <div class="position-absolute insight-container">
                <span class="highlight-clickable title">Insights</span>
            </div>
            <div id="home-2-carousel" class="carousel slide gc-full-height gc-full-width" data-ride="carousel">
                <div class="carousel-inner gc-full-height">
                    <div class="carousel-item gc-full-height active">
                        <div class="row gc-full-height">
                            <div class="col-md-6">
                                <div class="gc-full-width gc-full-height d-flex justify-content-end align-items-center">
                                    <div class="hexagon-container-home">
                                        <div class="hexagon" style="background-image: url('/img/{{$topArticle->image}}');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex gc-container-center gc-full-height">
                                    <div>
                                        <div>
                                            <span class="home-2-header">{{$topArticle->category->name}}</span>
                                        </div>
                                        <div>
                                            <span class="home-2-text">{{$topArticle->title}}</span>
                                        </div>
                                        <div class="home-2-button">
                                            <a href="{{route('blog-detail', ['id' => $topArticle->id])}}">
                                                <button class="btn btn-growth ">Read More</button>
                                            </a>
                                        </div>
                                        <div class="home-2-link">
                                            <a href="/blog?category={{$topArticle->category_id}}">More About {{$topArticle->category->name}} <span>&#10230;</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($featured as $index=>$f)
                        <div class="carousel-item gc-full-height">
                            <div class="row gc-full-height">
                                <div class="col-md-6">
                                    <div class="gc-full-width gc-full-height d-flex justify-content-end align-items-center">
                                        <div class="hexagon-container-home">
                                            <div class="hexagon" style="background-image: url('/img/{{$f->image}}');"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex gc-container-center gc-full-height">
                                        <div>
                                            <div>
                                                <span class="home-2-header">{{$f->category->name}}</span>
                                            </div>
                                            <div>
                                                <span class="home-2-text">{{$f->title}}</span>
                                            </div>
                                            <div class="home-2-button">
                                                <a href="{{route('blog-detail', ['id' => $f->id])}}">
                                                    <button class="btn btn-growth ">Read More</button>
                                                </a>
                                            </div>
                                            <div class="home-2-link">
                                                <a href="/blog?category={{$f->category_id}}">More About {{$f->category->name}} <span>&#10230;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a class="carousel-control-prev" href="#home-2-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#home-2-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="mainview jumbotron jumbotron-fluid home-3" style="background-color: transparent">
            <div class="gc-full-bg-image home-3-background parallax"></div>
            <div id="home-3-carousel" class="carousel slide gc-full-height gc-full-width" data-ride="carousel">
                <div class="carousel-inner gc-full-height gc-full-width">
                    @foreach($homeTestimony as $index=>$testimony)
                        <div class="carousel-item gc-full-height gc-full-width @if($index == 0) active @endif">
                            <div class="home-3-content gc-full-height gc-container-bottom">
                                <div>
                                    <div class="gc-align-right">
                                        <span class="gc-title gc-georgia gc-text-bold gc-color-white home-3-title-highlight">They Agree</span>
                                    </div>
                                    <div class="gc-align-right">
                                        <span class="gc-content gc-helvetica gc-color-white gc-text-lighter">"{{$testimony->quote}}"</span>
                                    </div>
                                    <div class="gc-align-right">
                                        <span class="gc-content-2 gc-helvetica gc-color-white">{{$testimony->name}}, {{$testimony->position}}</span>
                                    </div>
                                    <div class="gc-align-right testimony-logo-container">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="gc-align-right true-testimony-logo-container">
                    @foreach($homeTestimony as $index=>$testimony)
                        <img class="testimony-logo" src="{{asset('img/' . $testimony->image)}}" alt="" data-idx="{{$index}}">
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#home-3-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-3-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="mainview jumbotron jumbotron-fluid home home-4">
            <div class="home-4-title-container">
                <span class="gc-content-2 home-4-title gc-georgia gc-text-bold">How We Do</span>
            </div>
            <div class="row gc-full-height" style="padding-bottom: 30px" data-aos="fade-right">
                <div class="col-md-6 col-sm-12 gc-align-right gc-container-center gc-full-height hide-resp">
                    <div id="diagramCarousel" class="carousel slide gc-full-height" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner gc-full-height">
                            <ol class="carousel-indicators">
                                <li data-target="#diagramCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#diagramCarousel" data-slide-to="1"></li>
                                <li data-target="#diagramCarousel" data-slide-to="2"></li>
                                <li data-target="#diagramCarousel" data-slide-to="3"></li>
                                <li data-target="#diagramCarousel" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-item gc-full-height active">
                                <div class="gc-full-height gc-container-center">
                                    <div class="gc-georgia diagram-content">
                                        <span class="gc-title-2 gc-text-bold">Understand<br/>the Problem</span>
                                        <br>
                                        <span class="gc-content">{{$diagrams[0]->description}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item gc-full-height">
                                <div class="gc-full-height gc-container-center">
                                    <div class="gc-georgia diagram-content">
                                        <span class="gc-title-2 gc-text-bold">Define<br/>the Problem</span>
                                        <br>
                                        <span class="gc-content">{{$diagrams[1]->description}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item gc-full-height">
                                <div class="gc-full-height gc-container-center">
                                    <div class="gc-georgia diagram-content">
                                        <span class="gc-title-2 gc-text-bold">Propose Tailor<br/>Made Solution</span>
                                        <br>
                                        <span class="gc-content">{{$diagrams[2]->description}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item gc-full-height">
                                <div class="gc-full-height gc-container-center">
                                    <div class="gc-georgia diagram-content">
                                        <span class="gc-title-2 gc-text-bold">Implementation &<br/>Agile Iteration</span>
                                        <br>
                                        <span class="gc-content">{{$diagrams[3]->description}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item gc-full-height">
                                <div class="gc-full-height gc-container-center">
                                    <div class="gc-georgia diagram-content">
                                        <span class="gc-title-2 gc-text-bold">Feedback & Review</span>
                                        <br>
                                        <span class="gc-content">{{$diagrams[4]->description}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev diagram-carousel" href="#diagramCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next diagram-carousel" href="#diagramCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 diagram-container">
                    <div class="gc-position-relative">
                        <img class="diagram" src="{{asset('static/images/diagram/01.png')}}" alt="">
                        <span class="flying-text flying-text-1" data-idx="0">Understanding<br/>the Problem</span>
                        <span class="flying-text flying-text-2" data-idx="1">Define<br/>the Problem</span>
                        <span class="flying-text flying-text-3" data-idx="2">Propose Tailor<br/>Made Solution</span>
                        <span class="flying-text flying-text-4" data-idx="3">Implementation &<br/>Agile Iteration</span>
                        <span class="flying-text flying-text-5" data-idx="4">Feedback & Review</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainview jumbotron jumbotron-fluid home home-5">
            <div class="gc-full-bg-image home-5-background parallax"></div>
            <div class="row gc-full-height-resp">
                <div class="col-md-6 col-sm-12 gc-container-center gc-container-justify-center">
                    <div class="tell-story hide-resp">
                        <span class="gc-title gc-color-white gc-georgia gc-text-bold home-5-highlight-1">Tell Us</span>
                        <br>
                        <span class="gc-title gc-color-white gc-georgia gc-text-bold home-5-highlight-2">Your Story</span>
                    </div>
                    <div class="show-resp gc-align-left gc-full-width">
                        <span class="gc-georgia gc-text-light-bold gc-color-white home-5-highlight-1 mb-2" style="font-size: 1.5em">Tell Us Your Story</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 gc-container-center">
                    <form action="{{route('contact-us')}}" method="post" class="form gc-full-width">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="gc-color-white gc-baskerville gc-content">Nama *</label>
                            <input type="text" name="name" class="form-control" style="width: 60%">
                        </div>
                        <div class="form-group">
                            <label class="gc-color-white gc-baskerville gc-content">E-mail *</label>
                            <input type="email" name="email" class="form-control" style="width: 60%">
                        </div>
                        <div class="form-group">
                            <label class="gc-color-white gc-baskerville gc-content">Subject *</label>
                            <input type="text" name="subject" class="form-control" style="width: 60%">
                        </div>
                        <div class="form-group">
                            <label class="gc-color-white gc-baskerville gc-content">Message *</label>
                            <textarea name="message" rows="5" class="form-control" style="width: 75%"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-growth home-5-button"><strong>Send</strong></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section("script")
    <script src="{{asset('lib/typed/typed.js')}}"></script>
    <script>
        $(function() {
            var questionData = [
                @foreach($homeQuestions as $question)
                {
                    image: '{{asset('/img/'.$question->image)}}',
                    link: '{{route('our-solutions-detail', ['id' => $question->id])}}'
                },
                @endforeach
            ];
            var options = {
                typeSpeed: 40,
                backSpeed: 20,
                // stringsElement: '#typed-strings',
                smartBackspace: false,
                strings: [
                    @foreach($homeQuestions as $question)
                    '{{$question->question}}',
                    @endforeach
                ],
                loop: true,
                loopCount: false,
                preStringTyped: function(index, self) {
                    const question = questionData[index];
                    const image = question.image;
                    const link = question.link;
                    $container = $('.home-1');
                    $container.find('.image-container').css('background-image', `url('${image}')`);
                    $container.find('a').attr('href', link);
                },
            };

            var typed = new Typed('.typing', options);

            $carousel = $("#diagramCarousel");

            $('.flying-text').click(function() {
                $index = $(this).data('idx');
                $carousel.carousel($index);
                $('.diagram').attr("src", "{{asset('static/images/diagram/')}}" + "/0" + ($index+1) + ".png");
            });

            $('.carousel-indicators li').click(function() {
                $index = $(this).data('slide-to');
                $carousel.carousel($index);
                $('.diagram').attr("src", "{{asset('static/images/diagram/')}}" + "/0" + ($index+1) + ".png");
            });

            $('.testimony-logo').click(function() {
                $index = $(this).data('idx');
                $('#home-3-carousel').carousel($index);
            });

            $(window).bind('scroll', function () {
                console.log($(window).scrollTop(), $(".home-2").offset().top);
                if($(window).scrollTop() > $(".home-2").offset().top && $(window).scrollTop() < $(".home-3").offset().top) {
                    $('.header').css('background-color', 'transparent');
                    $('.nav-item:not(:last-child) .nav-link').removeClass('white-able');
                } else if ($(window).scrollTop() > 50) {
                    $('.header').css('background-color', 'white');
                    $('.nav-item:not(:last-child) .nav-link').removeClass('white-able');
                } else {
                    $('.header').css('background-color', 'transparent');
                    $('.nav-item:not(:last-child) .nav-link').addClass('white-able');
                }
            });
        });
    </script>
@endsection
