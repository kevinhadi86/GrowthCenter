@php
    $footer = \App\CompanyContact::first();
@endphp
<div class="subscribe">
    <div class="row gc-full-height">
        <div class="col-md-5 col-sm-12 gc-container-justify-center gc-container-center gc-full-height">
            <div class="gc-helvetica address-container" id="fade2">
                <div class="gc-text-light-bold gc-content-2">
                    <span>{{$footer->name}}</span>
                </div>
                <div class="gc-content">
                    {{$footer->address}}
                </div>
                <div class="gc-text-light-bold">
                    <span><a href="{{$footer->website}}">{{$footer->website}}</a></span>
                    <br>
                    <span><a href="mailto:{{$footer->email}}">{{$footer->email}}</a></span>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 gc-container-justify-center gc-container-center gc-full-height">
            <div class="subscribe-container" id="fade3">
                <div style="margin-bottom: 20px">
                    <span class="gc-text-light-bold gc-content">Subscribe to our latest insight</span>
                </div>
                <div>
                    <form action="{{route('subscribe')}}" id="subscribe-form" method="post">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Insert your e-mail address">
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
