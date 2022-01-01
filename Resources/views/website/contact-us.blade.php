@extends('layouts.simple.master')

@section('content')

{{--    <section>--}}
{{--        <div class="gap no-gap bluesh high-opacity">--}}
{{--            <div style="background-image: url(images/resources/top-bg.jpg)" class="bg-image"></div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="g-mapfull" style="height: 400px; width: 100%;">--}}
{{--                            <div id="map-canvas"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section>
    <div class="gap no-gap bluesh high-opacity">
        <div style="background-image: url(images/resources/top-bg.jpg)" class="bg-image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-subject">
                        <h1>تواصل معنا</h1>
                        <p> Read your accounts options and privacy and terms policy. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section>
        <div class="gap no-top" style="margin-top: -40px;z-index: 1;">
            <div class="container">
                <div class="row">
                    <!-- Tab panes -->
                    <div class="contact-us col-lg-9 m-auto">
                        <div class="row">
                            <article class="col-lg-6 col-md-6 col-sm-12 widget">
                                <h4 class="widget-title">معلومات التواصل</h4>
                                <ul class="quick-links contact mb-4" >
                                    <li><i class="icofont-email ml-2"></i><span class="ml-1"> البريد الإلكتروني :</span>
                                        <a href="#" class="__cf_email__" data-cfemail="99f0f7fff6d9f8f2fcfdf4f0fab7faf6f4">bialjumla@gmail.com</a>
                                    </li>
                                    <li><i class="icofont-email ml-2"></i><span class="ml-1"> خدمة العلاء :</span>
                                        <a href="#">773773773</a>
                                    </li>
                                    <li><i class="icofont-email ml-2"></i><span class="ml-1"> الدعم الفني :</span>
                                        <a href="#">772345272</a>
                                    </li>
                                </ul>
                                <div class="widget">
                                    <ul class="socials">
                                        <li>
                                            <i class="icofont-facebook"></i><a href="#" title=""></a>
                                        </li>
                                        <li>
                                            <i class="icofont-twitter"></i><a href="#" title=""></a>
                                        </li>
                                        <li>
                                            <i class="icofont-instagram"></i><a href="#" title=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="col-lg-6 col-md-6 col-sm-12 widget">
                                <div>
                                    <img src="{{asset('images/envelop.png')}}">
                                    <h4 class="widget-title">إرسال مقترح</h4>
                                </div>
                                <div class="post-new">
                                    <livewire:user::suggestion.site-suggestion :template="'contact-us'" />
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
