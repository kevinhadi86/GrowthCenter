@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-6">
                <img class="contact-us-image" src="{{asset("static/images/contact-us-phone.png")}}" alt="">
            </div>
            <div class="col-6 gc-full-height gc-container-justify-center" id="fade1" style="flex-direction: column">
                <div class="gc-full-width" style="margin-bottom: 20px">
                    <span class="gc-title gc-georgia gc-text-bold contact-us-text">Contact Us</span>
                </div>
                <div class="gc-full-width">
                    <form action="" id="contact-us-form" class="gc-full-width gc-text-light-bold gc-text-font-normal" style="line-height: 10px">
                        <div class="form-group">
                            <label class="gc-baskerville gc-content">Nama *</label>
                            <input type="text" class="form-control" style="width: 60%">
                        </div>
                        <div class="form-group">
                            <label class="gc-baskerville gc-content">E-mail *</label>
                            <input type="email" class="form-control" style="width: 60%">
                        </div>
                        <div class="form-group">
                            <label class="gc-baskerville gc-content">Subject *</label>
                            <input type="text" class="form-control" style="width: 60%">
                        </div>
                        <div class="form-group">
                            <label class="gc-baskerville gc-content">Message *</label>
                            <textarea name="" rows="5" class="form-control" style="width: 70%"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-growth contact-us-button"><strong>Send</strong></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include("fe.component.address-footer")
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/contact-us.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
@endsection

@section('script')
    <script>
        function animate() {
            if ($("#fade1").is(':visible')){
                $("#fade1").addClass("animated fadeInLeft");
            }
            if ($("#fade2").is(':visible')){
                $("#fade2").addClass("animated fadeInLeft");
            }
            if ($("#fade3").is(':visible')){
                $("#fade3").addClass("animated fadeInLeft");
            }
        }

        $(function() {
            animate()
        });
        $(window).on('scroll', animate);
    </script>
@endsection
