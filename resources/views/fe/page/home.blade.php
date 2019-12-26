@extends("fe.layout.master")

@section("content")
    <div class="jumbotron jumbotron-fluid home-1">
        <div class="problem-question-container">
            <div class="problem-question">
                <div>
                    <span class="problem-question-sub-text">What's Your Problem Today?</span>
                </div>
                <div style="position: absolute">
                <span class="highlight-clickable problem-question-main-text typing"></span>
                </div>
                <div id="typed-strings">
                    <p><a href="{{route('blog-detail')}}">Hard to Find the Right People</a></p>
                    <p><a href="{{route('blog-detail')}}">Hard to Find the Right People2</a></p>
                </div>
            </div>
        </div>
        <img src="{{asset('static/images/aa.png')}}">
    </div>
    <div class="jumbotron jumbotron-fluid home-2">
        <div>
            <span class="highlight-clickable title">Insights</span>
        </div>
        <div class="hexagon" style="background-image: linear-gradient(rgba(0, 82, 136, 1), rgba(0, 82, 136, 1)), url('/static/images/Image 1.png'); background-blend-mode: color;"></div>
        <div class="home-2-content">
            <div>
                <div>
                    <span class="home-2-header">People Matters.</span>
                </div>
                <div>
                    <span class="home-2-text">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will.</span>
                </div>
                <div class="home-2-button">
                    <a href="{{route('blog')}}">
                        <button class="btn btn-growth ">Read More</button>
                    </a>
                </div>
                <div class="home-2-link"></div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid home-3" style="background-color: transparent">
        <div class="gc-full-bg-image home-3-background parallax"></div>
        <div id="home-3-carousel" class="carousel slide gc-full-height gc-full-width" data-ride="carousel">
            <div class="carousel-inner gc-full-height gc-full-width">
                <div class="carousel-item gc-full-height gc-full-width active">
                    <div class="home-3-content gc-full-height gc-container-bottom">
                        <div>
                            <div class="gc-align-right">
                                <span class="gc-title gc-georgia gc-text-bold gc-color-white home-3-title-highlight">They Agree</span>
                            </div>
                            <div class="gc-align-right">
                                <span class="gc-content gc-helvetica gc-color-white gc-text-lighter">"Growth Center is really helping us when we frustation how to finding the right people to join our workteam and do the right recruitment. Growth Center answered our needs to improve and bring the new mindset to grow people. "</span>
                            </div>
                            <div class="gc-align-right">
                                <span class="gc-content-2 gc-helvetica gc-color-white">Burat Pangeran, Head of StratX</span>
                            </div>
                            <div class="gc-align-right">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item gc-full-height gc-full-width">
                    <div class="home-3-content gc-full-height gc-container-bottom">
                        <div>
                            <div class="gc-align-right">
                                <span class="gc-title gc-georgia gc-text-bold gc-color-white home-3-title-highlight">They Agree</span>
                            </div>
                            <div class="gc-align-right">
                                <span class="gc-content gc-helvetica gc-color-white gc-text-lighter">"Growth Center is really helping us when we frustation how to finding the right people to join our workteam and do the right recruitment. Growth Center answered our needs to improve and bring the new mindset to grow people. "</span>
                            </div>
                            <div class="gc-align-right">
                                <span class="gc-content-2 gc-helvetica gc-color-white">Burat Pangeran, Head of StratX</span>
                            </div>
                            <div class="gc-align-right">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item gc-full-height gc-full-width">
                    <div class="home-3-content gc-full-height gc-container-bottom">
                        <div>
                            <div class="gc-align-right">
                                <span class="gc-title gc-georgia gc-text-bold gc-color-white home-3-title-highlight">They Agree</span>
                            </div>
                            <div class="gc-align-right">
                                <span class="gc-content gc-helvetica gc-color-white gc-text-lighter">"Growth Center is really helping us when we frustation how to finding the right people to join our workteam and do the right recruitment. Growth Center answered our needs to improve and bring the new mindset to grow people. "</span>
                            </div>
                            <div class="gc-align-right">
                                <span class="gc-content-2 gc-helvetica gc-color-white">Burat Pangeran, Head of StratX</span>
                            </div>
                            <div class="gc-align-right">
                            </div>
                        </div>
                    </div>
                </div>
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
    <div class="jumbotron jumbotron-fluid home home-4">
        <div>
            <span class="gc-content-2 home-4-title gc-georgia gc-text-bold">How We Do</span>
        </div>
        <div class="row gc-full-height" style="padding-bottom: 30px">
            <div class="col-6 gc-align-right gc-container-center gc-full-height">
                <div id="diagramCarousel" class="carousel slide gc-full-height" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner gc-full-height">
                        <div class="carousel-item gc-full-height active">
                            <div class="gc-full-height gc-container-center">
                                <div class="gc-georgia" style="padding-left: 100px;">
                                    <span class="gc-title-2 gc-text-bold">Understand<br/>the Problem</span>
                                    <br>
                                    <span class="gc-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi commodi culpa, dolor ea earum, eveniet id inventore ipsam iure natus nostrum placeat quasi reiciendis repellendus sequi sint tenetur ullam.</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item gc-full-height">
                            <div class="gc-full-height gc-container-center">
                                <div class="gc-georgia" style="padding-left: 100px;">
                                    <span class="gc-title-2 gc-text-bold">Define<br/>the Problem</span>
                                    <br>
                                    <span class="gc-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi commodi culpa, dolor ea earum, eveniet id inventore ipsam iure natus nostrum placeat quasi reiciendis repellendus sequi sint tenetur ullam.</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item gc-full-height">
                            <div class="gc-full-height gc-container-center">
                                <div class="gc-georgia" style="padding-left: 100px;">
                                    <span class="gc-title-2 gc-text-bold">Propose Tailor<br/>Made Solution</span>
                                    <br>
                                    <span class="gc-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi commodi culpa, dolor ea earum, eveniet id inventore ipsam iure natus nostrum placeat quasi reiciendis repellendus sequi sint tenetur ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa iste libero neque officia perspiciatis recusandae rerum voluptatibus. Aspernatur atque eaque labore magnam necessitatibus obcaecati porro similique sunt veniam veritatis!</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item gc-full-height">
                            <div class="gc-full-height gc-container-center">
                                <div class="gc-georgia" style="padding-left: 100px;">
                                    <span class="gc-title-2 gc-text-bold">Implementation &<br/>Agile Iteration</span>
                                    <br>
                                    <span class="gc-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi commodi culpa, dolor ea earum, eveniet id inventore ipsam iure natus nostrum placeat quasi reiciendis repellendus sequi sint tenetur ullam.</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item gc-full-height">
                            <div class="gc-full-height gc-container-center">
                                <div class="gc-georgia" style="padding-left: 100px;">
                                    <span class="gc-title-2 gc-text-bold">Feedback & Review</span>
                                    <br>
                                    <span class="gc-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi commodi culpa, dolor ea earum, eveniet id inventore ipsam iure natus nostrum placeat quasi reiciendis repellendus sequi sint tenetur ullam.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
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
    <div class="jumbotron jumbotron-fluid home home-5">
        <div class="gc-full-bg-image home-5-background parallax"></div>
        <div class="row gc-full-height">
            <div class="col-6 gc-container-center gc-container-justify-center">
                <div>
                    <span class="gc-title gc-color-white gc-georgia gc-text-bold home-5-highlight-1">Tell Us</span>
                    <br>
                    <span class="gc-title gc-color-white gc-georgia gc-text-bold home-5-highlight-2">Your Story</span>
                </div>
            </div>
            <div class="col-6 gc-container-center">
                <form action="" class="form gc-full-width">
                    <div class="form-group">
                        <label class="gc-color-white gc-baskerville gc-content">Nama *</label>
                        <input type="text" class="form-control" style="width: 60%">
                    </div>
                    <div class="form-group">
                        <label class="gc-color-white gc-baskerville gc-content">E-mail *</label>
                        <input type="email" class="form-control" style="width: 60%">
                    </div>
                    <div class="form-group">
                        <label class="gc-color-white gc-baskerville gc-content">Subject *</label>
                        <input type="text" class="form-control" style="width: 60%">
                    </div>
                    <div class="form-group">
                        <label class="gc-color-white gc-baskerville gc-content">Message *</label>
                        <textarea name="" rows="5" class="form-control" style="width: 75%"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-growth home-5-button"><strong>Send</strong></button>
                    </div>
                </form>
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
            var options = {
                typeSpeed: 60,
                backSpeed: 30,
                stringsElement: '#typed-strings',
                loop: true
            };

            var typed = new Typed('.typing', options);

            $carousel = $("#diagramCarousel");

            $('.flying-text').click(function() {
                $index = $(this).data('idx');
                $carousel.carousel($index);
                $('.diagram').attr("src", "{{asset('static/images/diagram/')}}" + "/0" + ($index+1) + ".png");
            })
        });
    </script>
@endsection
