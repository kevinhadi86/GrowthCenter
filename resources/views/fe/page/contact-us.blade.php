@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron">
        <div class="row gc-full-height">
            <div class="col-6">
                <img class="contact-us-image" src="{{asset("static/images/contact-us-phone.png")}}" alt="">
            </div>
            <div class="col-6 gc-full-height gc-container-justify-center" style="flex-direction: column">
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
    <div class="subscribe">
        <div class="row gc-full-height">
            <div class="col-5 gc-container-justify-center gc-container-center gc-full-height">
                <div class="gc-helvetica address-container">
                    <div class="gc-text-light-bold gc-content-2">
                        <span>Kompas Gramedia</span>
                    </div>
                    <div class="gc-content">
                        <span>Kompas Gramedia, Unit III Lantai 5,</span>
                        <br>
                        <span>Jl. Palmerah Selatan 22-28, Jakarta Pusat,</span>
                        <br>
                        <span>DKI Jakarta 10270</span>
                    </div>
                    <div class="gc-text-light-bold">
                        <span><a href="http://www.growthcenter.id">www.growthcenter.id</a></span>
                        <br>
                        <span><a href="mailto:inquiry@growthcenter.id">inquiry@growthcenter.id</a></span>
                    </div>
                </div>
            </div>
            <div class="col-7 gc-container-justify-center gc-container-center gc-full-height">
                <div class="subscribe-container">
                    <div style="margin-bottom: 20px">
                        <span class="gc-text-light-bold gc-content">Subscribe to our latest insight</span>
                    </div>
                    <div>
                        <form action="" id="subscribe-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Insert your e-mail address">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"><span>&#10230;</span></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/contact-us.css')}}">
@endsection
