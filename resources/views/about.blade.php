@extends('layouts.tradez', ['pageTitle' => 'About Us'])

@section('active-company', 'active')

@section('content')
<!-- banner section start-->
    <section class="banner-section  pt-120 pb-120">
        <div class="container mt-lg-0 pt-18 pt-xl-20">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>About Us</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- Company Story start-->
    <section class="company-story position-relative z-0  pt-120 pb-120 ">
        <div class="animation position-absolute w-100 h-100 z-n1">
            <img src="/tradez/assets/images/star3.png" alt="vector" class="position-absolute top-0 end-0 pt-10 pe-20 me-20 d-none d-xxl-flex previewSkew">
        </div>
        <div class="container">
            <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
                <div class="col-sm-10 col-lg-6 col-xxl-5 order-2 order-lg-0">
                    <div class="company-story__thumbs d-center">
                        <img src="/tradez/assets/images/company_story.png" class="cus-rounded-1 w-100" alt="Imgae">

                    </div>
                </div>
                <div class="col-lg-6 col-xxl-7">
                    <div class="row ms-xl-3 ms-xxl-10">
                        <div class="col-xxl-12">
                            <div class="company-story__part">
                                <span class="heading p1-color fs-five">Our Company Story</span>
                                <h3 class="mb-3 mt-5">About YieldAtlasTrend</h3>
                                <p>YieldAtlasTrend is an investment platform built and developed by a group of experienced Wall Street professionals with extensive knowledge of the U.S. financial markets. With years of experience in investing, market analysis, and financial technology, our team is dedicated to providing investors with access to reliable tools and resources designed to support informed investment decisions.</p>
                                <p class="mt-4">The platform provides investors with access to a broad range of U.S. investment products, including individual stocks, exchange-traded funds (ETFs), and mutual funds. YieldAtlasTrend is designed to help investors research opportunities, manage portfolios, and pursue their financial goals through a secure and efficient investing experience.</p>
                                <p class="mt-4">Our platform combines professional market expertise with advanced technology, offering portfolio management tools, market insights, and investment resources to help clients better understand and navigate the U.S. financial markets.</p>
                                <p class="mt-4">Investment services and account infrastructure are supported through established financial service partners, including Charles Schwab, providing reliable account management, trade processing, and operational support.</p>
                                <p class="mt-4">At YieldAtlasTrend, we are committed to delivering a transparent, professional, and investor-focused platform built on experience, technology, and a dedication to helping clients make confident investment decisions.</p>
                                <a href="/signup" class="cmn-btn secondary-alt fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6 mt-7 mt-xxl-8">Start Investing <i class="ti ti-arrow-right fs-four"></i></a>
                            </div>  
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- Company Story end -->   
       
    <!-- Client Company Section Start -->
    <div class="client_company_section py-15 p1-bg align-items-center justify-content-center">
        <!-- Swiper -->
        <div class="swiper client_company">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide text-center">
                    <img src="/tradez/assets/images/company_logo.png" alt="Client Logo">
                </div>
                <div class="swiper-slide text-center">
                    <img src="/tradez/assets/images/company_logo2.png" alt="Client Logo">
                </div>
                <div class="swiper-slide text-center">
                    <img src="/tradez/assets/images/company_logo3.png" alt="Client Logo">
                </div>
                <div class="swiper-slide text-center">
                    <img src="/tradez/assets/images/company_logo4.png" alt="Client Logo">
                </div>
                <div class="swiper-slide text-center">
                    <img src="/tradez/assets/images/company_logo5.png" alt="Client Logo">
                </div>
                <div class="swiper-slide text-center">
                    <img src="/tradez/assets/images/company_logo6.png" alt="Client Logo">
                </div>
                <div class="swiper-slide text-center">
                    <img src="/tradez/assets/images/company_logo7.png" alt="Client Logo">
                </div>
            </div>
        </div>
    </div>
    <!-- Client Company Section End -->
    
    <!--Our Mission start-->
    <section class="provide-world our_mission pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/vector7.png" alt="vector" class="position-absolute bottom-0 pt-6 pt-xl-15 d-none d-lg-flex push_animat">
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center mb-10 mb-lg-15">
                <div class="col-xl-5">
                    <span class="heading s1-color fs-five mb-5">Our Mission</span>
                    <h3>Empowering Success How We're Making a Difference</h3>
                </div>
                <div class="col-xl-4">
                    <p class="fs-six-up mx-ch text-xl-end mt-3 mt-xl-0">we believe that success is not reserved for the privileged few. It's a journey that anyone can embark upon with  right guidance</p>
                </div>
            </div>
            <div class="row gy-6 gy-xxl-0">
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-currency-dollar-brunei  fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Client-first approach</h4>
                       <p>We put investors first. Our platform makes it easy to research, allocate, and manage a portfolio of stocks, ETFs, and mutual funds.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-brand-cakephp fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Integrity and Compliance</h4>
                       <p>Risk management is fundamental to successful investing. We help our clients diversify their capital and stay aligned with their long-term objectives.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-broadcast fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Reliable Execution</h4>
                       <p>Investing requires discipline and patience. Markets can be unpredictable, but a diversified strategy helps smooth the path toward your financial goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission end -->   

<!--Testimonial start-->
    <section class="testimonial-secondary te pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/icon/quote_bg.png" alt="vector" class="position-absolute push_animat d-none d-md-flex">
            <img src="/tradez/assets/images/icon/quote_bg.png" alt="vector" class="position-absolute push_animat d-none d-md-flex">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <span class="heading fs-five s1-color mb-5">Testimonial</span>
                        <h3>What people say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper testimonial_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="col-lg-10 col-xl-8 col-xxl-6">
                                    <div class="testimonial__par text-center">
                                        <div class="author_thumbs">
                                            <img src="/tradez/assets/images/author10.png" alt="icon" class="rounded-circle">
                                        </div>
                                        <div class="author_content">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Investing has always been a passion, and the lessons I learned along the way have been invaluable.</p>
                                            <h5 class="heading p1-color mt-5">Brooklyn Simmons</h5>
                                            <span class="fs-eight fw_500 mt-2">Marketing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="col-lg-10 col-xl-8 col-xxl-6">
                                    <div class="testimonial__par text-center">
                                        <div class="author_thumbs">
                                            <img src="/tradez/assets/images/author11.png" alt="icon" class="rounded-circle">
                                        </div>
                                        <div class="author_content">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Investing has always been a passion, and the lessons I learned along the way have been invaluable.</p>
                                            <h5 class="heading p1-color mt-5">Cody Fisher</h5>
                                            <span class="fs-eight fw_500 mt-2">Account Executive</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="col-lg-10 col-xl-8 col-xxl-6">
                                    <div class="testimonial__par text-center">
                                        <div class="author_thumbs">
                                            <img src="/tradez/assets/images/author12.png" alt="icon" class="rounded-circle">
                                        </div>
                                        <div class="author_content">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Investing has always been a passion, and the lessons I learned along the way have been invaluable.</p>
                                            <h5 class="heading p1-color mt-5">Wade Warren</h5>
                                            <span class="fs-eight fw_500 mt-2">Medical Assistant</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="col-lg-10 col-xl-8 col-xxl-6">
                                    <div class="testimonial__par text-center">
                                        <div class="author_thumbs">
                                            <img src="/tradez/assets/images/author13.png" alt="icon" class="rounded-circle">
                                        </div>
                                        <div class="author_content">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Investing has always been a passion, and the lessons I learned along the way have been invaluable.</p>
                                            <h5 class="heading p1-color mt-5">Esther Howard</h5>
                                            <span class="fs-eight fw_500 mt-2">Marketing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="col-lg-10 col-xl-8 col-xxl-6">
                                    <div class="testimonial__par text-center">
                                        <div class="author_thumbs">
                                            <img src="/tradez/assets/images/author14.png" alt="icon" class="rounded-circle">
                                        </div>
                                        <div class="author_content">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Investing has always been a passion, and the lessons I learned along the way have been invaluable.</p>
                                            <h5 class="heading p1-color mt-5">Brooklyn Simmons</h5>
                                            <span class="fs-eight fw_500 mt-2">President of Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-8 mt-md-10 mt-lg-15"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->
@endsection
