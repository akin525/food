@extends('layouts.header')
@section('tittle', 'About-Us')
@section('content')


    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb breadcrumb-about" data-bg-image="assets/images/bg/breadcrumb-bg-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title"><b>ABOUT US</b></h1>
                        <p class="breadcrumb_text">Welcome to Eko Cakes WHO WE ARE</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Section Start -->
    <div class="section-padding-03 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="section-title-10 justify-content-start text-start align-items-start">
                        <span class="section-title-10__subtitle">We Are EkoCake</span>
                        <h1 class="section-title-10__title">we love cake</h1>
                        <p class="section-title-10__text">{!! $setting->about !!}</p>
{{--                        <p class="section-title-10__text">Vestibulum eu tristique tellus. Praesent at varius nisi, ut dignissim lectus. Praesent venenatis ipsum in arcu ullamcorper tristique. Aliquam et gravida magna, ut tincidunt massa.</p>--}}
                        <img src="assets/images/singnecher-2.png" alt="Signature-Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="aboutus-image">
                        <img src="assets/images/about/about.jpg" alt="About-Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

@endsection
