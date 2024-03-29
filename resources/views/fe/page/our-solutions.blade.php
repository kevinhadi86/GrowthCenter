@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-md-7 col-sm-12 gc-full-height gc-container-center pl-5">
                <span class="gc-georgia gc-title gc-text-light-bold">What Question do You Have in Mind?</span>
            </div>
            <div class="col-md-5 col-sm-12 gc-full-height">
                <div class="pt-5 pb-5 gc-full-height position-relative">
                    <div class="gradient-fade"></div>
                    <div id="scroll-container" class="gc-full-height accordion">
                        <div class="empty"></div>
                        @foreach($questions as $i=>$question)
                            <div class="solution mt-5 mb-5 solution-{{$i}}" data-id="{{$i}}">
                                <div class="hr-slot"></div>
                                <a class="gc-georgia gc-text-light-bold collapsed gc-no-decoration-link mt-3 mb-3 solution-title solution-title-{{$i}}" data-toggle="collapse" href="#collapseSolution{{$i}}" aria-controls="collapseSolution{{$i}}" data-href="{{route('our-solutions-detail', ['id' => $question->id])}}">{{$question->question}}</a>
                                <div class="collapse mt-3 mb-5 solution-collapsible" id="collapseSolution{{$i}}" data-parent="#scroll-container">
                                    {{$question->description}}
                                </div>
                                <div class="hr-slot"></div>
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
@endsection

@section("script")
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script>
        $(function() {
           $(".solution-collapsible").on("show.bs.collapse", function() {
               $solution = $(this).closest('.solution');
               $solution.find('.hr-slot').html("<hr/>");
           });
            $(".solution-collapsible").on("hide.bs.collapse", function() {
                $solution = $(this).closest('.solution');
                $solution.find('.hr-slot').html("");
            });

            // init controller
            var controller = new ScrollMagic.Controller({
                container: "#scroll-container",
                pushFollowers: false,
            });

            $solutions = $('.solution');
            $('.solution').each(function(key, el) {
                $el = $(el);
                const id = $el.data('id');
                new ScrollMagic.Scene({triggerElement: ".solution-title-" + id, duration: "100"})
                    .on('enter start', function() {
                        $("#collapseSolution" + id).collapse('show');
                    })
                    .on('leave end', function() {
                        $("#collapseSolution" + id).collapse('hide');
                    })
                    .addTo(controller);
            });
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
            $('.solution-title.collapsed').click(function(e) {
                e.preventDefault();
                window.location.href = $(this).data('href');
            });
        });
    </script>
@endsection
