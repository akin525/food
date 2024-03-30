@extends('layouts.header')
@section('tittle', 'About-Us')
@section('content')

    <!-- banner  -->

    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>About us</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <a href="{{url('home')}}">Home</a>
                        </div>
                        <div class="icon">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 7L14 12L10 17" stroke="#E5E6EB" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                        </div>
                        <div class="left">
                            <span>About us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->


    <!-- about part start  -->

    <section class="about-us s-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6 ">
                    <div class="about-us-img">
                        <img src="{{asset('assets/images/fd4.jpg')}}" class="w-100" alt="thumb">



                        <div class="about-us-img-btn-img">

                            <div class="about-us-img-btn-img-main">
                                <img width="50" src="{{asset('logo.jpeg')}}" alt="img">
                                <div class="about-us-img-btn-img-overlay">
{{--                                    <h2>50</h2>--}}
{{--                                    <span>Years</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 about-pl-45px" data-aos="fade-left">
                    <div class="about-us-head">
                        <h2>GOURMET CATERING</h2>
                        <h6>Hospitality Service</h6>

                        <h5>📍Professional catering service for corporate& private events
                            📍Office lunch
                            📍Bulk food orders
                            📍Canapés service
                            📍Private & Group classes
                            📍Lagos. </h5>
                    </div>

{{--                    <div class="about-us-text">--}}
{{--                        <p>Over 20 years’ experience providing top quality house Booking rant and sell for your--}}
{{--                            Amazing Dream & Make you Happy</p>--}}
{{--                    </div>--}}

                    <div class="row about-mt-48px">
                        <div class="col-lg-6 col-md-6">
                            <div class="about-us-item">
                                <div class="icon">
                                    <img src="assets/images/icon/about-icon-1.png" alt="icon">
                                </div>

                                <div class="text">
                                    <h3>90k+ Customers</h3>

                                    <p>Believe in our service & Care</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about-us-item about-us-item-resmt ">
                                <div class="icon">
                                    <img src="assets/images/icon/about-icon-2.png" alt="icon">
                                </div>

                                <div class="text">
                                    <h3>100+ Branch</h3>

                                    <p>Food ready for occupancy</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- about part end  -->



@endsection
