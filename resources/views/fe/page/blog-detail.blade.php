@extends("fe.layout.master")

@section("content")
    <div class="gc-jumbotron picture-header" style="background-image: url('/static/images/Group 258.png')">
        <div class="row gc-container-center gc-full-height align-content-end justify-content-center">
            <div class="col-10 blog-header">
                <div class="position-relative">
                    <span class="gc-text-light-bold gc-baskerville gc-content gc-normal-highlight">People</span>
                </div>
                <div>
                    <span class="gc-text-light-bold gc-georgia gc-title">How Empowering People Drives Growth in Business</span>
                </div>
                <div class="row blog-information">
                    <div class="col-6">
                        <span class="gc-helvetica gc-text-light-bold">Written by <span class="author">Cika Theresia</span></span>
                    </div>
                    <div class="col-6 gc-align-right">
                        <span>August 12, 2019. 10:00 PM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gc-container-center justify-content-center">
        <div class="col-10 blog-container">
            <div class="row">
                <div class="gc-helvetica col-7">
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col">
                            <span>Related Reads</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 article">
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
                                    <a href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("css")
    <link rel="stylesheet" href="{{asset('css/blog-detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/component/address-footer.css')}}">
@endsection
