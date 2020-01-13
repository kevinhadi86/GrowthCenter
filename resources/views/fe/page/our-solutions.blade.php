@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-md-7 col-sm-12 gc-full-height gc-container-center pl-5">
                <span class="gc-georgia gc-title gc-text-light-bold">What Question do You Have in Mind?</span>
            </div>
            <div class="show-resp gc-full-width">
                <hr style="opacity: 1 !important;">
            </div>
            <div class="col-md-5 col-sm-12 gc-full-height">
                <div class="pt-5 pb-5 gc-full-height position-relative">
                    <div class="gradient-fade"></div>
                    <div id="scroll-container" class="gc-full-height accordion">
                        <div class="empty"></div>
                        @foreach($questions as $i=>$question)
                            <div class="solution mb-5 solution-{{$i}}">
                                <div class="hr-slot">

                                </div>
                                <a class="gc-georgia gc-text-light-bold collapsed gc-no-decoration-link mt-3 mb-3 solution-title solution-title-{{$i}}" href="{{route('our-solutions-detail', ['id' => $question->id])}}" aria-controls="collapseSolution{{$i}}" data-href="{{route('our-solutions-detail', ['id' => $question->id])}}">{{$question->question}}</a>
                                <div class="mt-3 mb-5 solution-collapsible collapse" id="collapseSolution{{$i}}" data-parent="#scroll-container">
                                    {{$question->description}}
                                </div>
                                <div class="hr-slot">

                                </div>
                            </div>
                        @endforeach
                        <div class="empty"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/our-solutions.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick-theme.css')}}"/>
@endsection

@section("script")
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="{{asset('lib/slick/slick.js')}}"></script>
    <script>
        $(function() {
            // $('.slick-container').slick({
            //     slidesToShow: 5,
            //     slidesToScroll: 1,
            //     vertical: true,
            //     centerMode: true,
            //     infinite: false,
            //     adaptiveHeight: true,
            //     verticalSwiping: true,
            // });
            // $('.slick-container').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            //     // $before = $('.solution-' + currentSlide);
            //     // $("#collapseSolution" + currentSlide).collapse('hide');
            //     $next = $('.solution-' + nextSlide);
            //     $("#collapseSolution" + nextSlide).collapse('show');
            // });
           $(".solution-collapsible").on("show.bs.collapse", function() {
               $solution = $(this).closest('.solution');
               $solution.find('.solution-title').removeClass('collapsed');
               $solution.find('.hr-slot').html("<hr/>");
           });
            $(".solution-collapsible").on("hide.bs.collapse", function() {
                $solution = $(this).closest('.solution');
                $solution.find('.solution-title').addClass('collapsed');
                $solution.find('.hr-slot').html("");
            });

            // // init controller
            // var controller = new ScrollMagic.Controller({
            //     container: "#scroll-container",
            //     pushFollowers: false,
            // });
            //
            // $solutions = $('.solution');
            // $('.solution').each(function(key, el) {
            //     $el = $(el);
            //     const id = $el.data('id');
            //     new ScrollMagic.Scene({triggerElement: ".solution-title-" + id, duration: "100"})
            //         .on('enter start', function() {
            //             $("#collapseSolution" + id).collapse('show');
            //         })
            //         .on('leave end', function() {
            //             $("#collapseSolution" + id).collapse('hide');
            //         })
            //         .addTo(controller);
            // });
            // new ScrollMagic.Scene({triggerElement: "#sec1"})
            //     .setClassToggle("#high1", "active") // add class toggle
            //     .addIndicators() // add indicators (requires plugin)
            //     .addTo(controller);

            // const itemCount = $('.solution').length;
            // function toCenter() {
            //     const mid = parseInt(itemCount/2);
            //     $midElement = $($('.solution')[mid]);
            //     $midElement.find('.solution-collapsible').collapse('show');
            //     $height = $midElement.height()/2;
            //     $containerHeight = $("#scroll-container").height()/2;
            //     $("#scroll-container").scrollTop($midElement.offset().top - $containerHeight + $height);
            //     console.log('done');
            // }
            // const MAX_PAUSE_TIME = 5;
            // let pause = 0;
            //
            // setInterval(function() {
            //     if (pause > 0) {
            //         console.log(pause);
            //         pause--;
            //     }
            // }, 100);
            //
            // toCenter();
            // $("#scroll-container").on('mousewheel DOMMouseScroll', function(e) {
            //     e.preventDefault();
            //     // setTimeout(function() {
            //     console.log('run');
            //         if(pause === 0) {
            //             pause = MAX_PAUSE_TIME;
            //             $("#scroll-container").off('scroll');
            //             $('.solution-collapsible').collapse('hide');
            //             $el = $($('.solution')[0]);
            //             $("#scroll-container .empty:last").before($el);
            //             toCenter();
            //         }
            //     // }, 10);
            // });
            // $('.solution-title.collapsed').click(function(e) {
            //     e.preventDefault();
            //     window.location.href = $(this).data('href');
            // });
            var scrollTimeout = 0;
            const MAX_SCROLL_COUNT = 10;

            setInterval(function() {
                if(scrollTimeout !== 0) {
                    scrollTimeout--;
                }
            }, 100);

            $($('.solution')[0]).find('.solution-collapsible').collapse('show');

            $('#scroll-container').on('scroll', function(e) {
                $('.solution').each(function(key, val) {
                    var height = $('#scroll-container').height();
                    var top = $(val).offset().top - $('#scroll-container').offset().top;
                    if (top > height * 0.4 && top < height * 0.75) $(val).find('.solution-collapsible').collapse('show');
                });
            })

            $('.solution').hover(function() {
                $(this).find('.solution-collapsible').collapse('show');
            })

        });
    </script>
@endsection
