@extends('layouts.tradez', ['pageTitle' => 'Customers'])

@section('active-resources', 'active')

@section('content')
<!-- banner section start-->
    <section class="banner-section  pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Customers</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Customers</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->
    
    <!--Customers start-->
    <section class="customers position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/vector6.png" alt="vector" class="position-absolute rotate d-none d-xxxl-flex start-0 top-0 pt-20 mt-5 ps-20 ms-5">
            <img src="/tradez/assets/images/vector8.png" alt="vector" class="position-absolute bottom-0 pb-20 mb-4 d-none d-xxl-flex">
            <img src="/tradez/assets/images/earth.png" alt="vector" class="position-absolute d-none d-xl-flex bottom-0 end-0 rotate">
        </div>
        <div class="container">
            <div class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center align-items-xxl-end">
                <div class="col-lg-6 col-xxl-5 pb-0 pt-120 pb-lg-120">
                    <div class="customers__content me-xxl-18">
                        <h3 class="mb-4">We help our customers.</h3>
                        <p class="mx-ch">The rise of cryptocurrencies has opened up new trading 
                            In this beginner's guide to cryptocurrency trading we demystify the world of digital currencies</p>   
                        <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Charts trading</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Supreme Authority</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Worldly Power</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Global Dominance</li>
                        </ul>
                        <div class="pt-7 pt-lg-8 mt-7 mt-lg-8 border-top border-color four">
                            <div class="counter-area d-flex gap-8 gap-xxl-10 ">
                                <div class="counter-part">
                                    <span class="box_15 p1-bg rounded-circle d-center mb-5"><i class="ti ti-send fs-four nb4-color"></i></span>
                                    <div class="counters d-flex">
                                        <span class="odometer display-four" data-odometer-final="35200">0</span>
                                    </div>
                                    <span class="mt-4">Investor engaged</span>
                                </div>
                                <div class="counter-part">
                                    <span class="box_15 p1-bg rounded-circle d-center mb-5"><i class="ti ti-user fs-four nb4-color"></i></span>
                                    <div class="counters d-flex">
                                        <span class="odometer display-four" data-odometer-final="4700">0</span>
                                    </div>
                                    <span class="mt-4">Business launch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-6 col-xxl-6 ">
                    <div class="customers__thumb">
                        <img src="/tradez/assets/images/customers.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customers end -->   
   
        
    <!--Testimonial start-->
    <section class="testimonial p1-bg pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/star1.png" alt="vector" class="position-absolute push_animat top-0 pt-14 ps-20 ms-10 d-none d-lg-flex">
            <img src="/tradez/assets/images/sun.png" alt="vector" class="position-absolute push_animat mb-10 d-none d-xxl-flex">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content alt-color mb-10 mb-lg-15 text-center">
                        <span class="heading fs-five mb-5">Testimonial</span>
                        <h3>What people say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper common-slider1 cus-rounded-1 d-center align-items-end align-items-xxl-center ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide cus-rounded-1 overflow-hidden cus-rounded-1 overflow-hidden">
                                <div class="testimonial__part a2-bg d-flex flex-column flex-sm-row  align-items-center">
                                    <div class="testimonial__author d-none d-sm-flex">
                                        <img src="/tradez/assets/images/author.png" class="max-xxl-un " alt="Image">
                                    </div>
                                    <div class="testimonial__content p-4 px-lg-7 px-xxl-8 py-lg-6 py-xxl-7">
                                        <div class="content__part">
                                            <img src="/tradez/assets/images/icon/quote_left.png" alt="icon">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Trading has always been a passion, but it wasn't management that began to see consistent profits. The journey was not without its ups and downs, but the lessons I learned along the way have been embraced riskinvaluable.</p>
                                            <h5 class="heading p1-color mt-4">Brooklyn Simmons</h5>
                                            <span class="fs-seven fw_500 mt-2">Marketing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide cus-rounded-1 overflow-hidden">
                                <div class="testimonial__part a2-bg d-flex flex-column flex-sm-row  align-items-center">
                                    <div class="testimonial__author d-none d-sm-flex">
                                        <img src="/tradez/assets/images/author2.png" class="max-xxl-un " alt="Image">
                                    </div>
                                    <div class="testimonial__content p-4 p-lg-7 p-xxl-8">
                                        <div class="content__part">
                                            <img src="/tradez/assets/images/icon/quote_left.png" alt="icon">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Trading has always been a passion, but it wasn't management that began to see consistent profits. The journey was not without its ups and downs, but the lessons I learned along the way have been embraced riskinvaluable.</p>
                                            <h5 class="heading p1-color mt-4">Chris Moore</h5>
                                            <span class="fs-seven fw_500 mt-2">President of Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide cus-rounded-1 overflow-hidden">
                                <div class="testimonial__part a2-bg d-flex flex-column flex-sm-row  align-items-center">
                                    <div class="testimonial__author d-none d-sm-flex">
                                        <img src="/tradez/assets/images/author3.png" class="max-xxl-un" alt="Image">
                                    </div>
                                    <div class="testimonial__content p-4 p-lg-7 p-xxl-8">
                                        <div class="content__part">
                                            <img src="/tradez/assets/images/icon/quote_left.png" alt="icon">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Trading has always been a passion, but it wasn't management that began to see consistent profits. The journey was not without its ups and downs, but the lessons I learned along the way have been embraced riskinvaluable.</p>
                                            <h5 class="heading p1-color mt-4">Balogh Imre</h5>
                                            <span class="fs-seven fw_500 mt-2">Account Executive</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-btn position-absolute justify-content-end d-center justify-content-xxl-between gap-2 w-100 pb-3 pb-sm-5 pb-xxl-0 px-8 px-sm-18 px-xl-12 px-xxl-18">
                            <button type="button" aria-label="Slide Prev" class="ara-prev slide-button cmn-btn2 d-center">
                                <i class="ti ti-arrow-narrow-right"></i>
                            </button>
                            <button type="button" aria-label="Slide Next" class="ara-next slide-button cmn-btn2 d-center">
                                <i class="ti ti-arrow-narrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->   

    <!-- FAQ Section Starts -->
    <section class="faq pb-120 pt-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/button.png" alt="vector" class="position-absolute pt-6 pt-xl-15 previewShapeRevX  d-none d-lg-flex">
            <img src="/tradez/assets/images/star30.png" alt="vector" class="position-absolute push_animat end-0 top-0  pt-120 mt-4 me-xl-20 pe-20 d-none d-xxl-flex">
            <img src="/tradez/assets/images/vector21.png" alt="vector" class="position-absolute bottom-0 start-0 pb-11 ps-20 ms-10 d-none d-xxxl-flex ">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <span class="heading fs-five p1-color mb-5">Faq’s</span>
                        <h3>Frequently Asked Question</h3>
                    </div>
                </div>
            </div>
            <div class="row gy-10 justify-content-center align-items-center">
                <div class="col-md-12 col-lg-7 col-xxl-6">
                    <div class="faq__part">
                        <div class="accordion-section d-grid gap-6">
                            <div class="accordion-single  cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button"> What is trading?</button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Trading involves buying and selling financial instruments like stocks  advantage of price fluctuations in these assets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100"
                                        type="button">
                                        How can I get started with trading?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Trading involves buying and selling financial instruments like stocks  advantage of price fluctuations in these assets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100"
                                        type="button">
                                        How can I stay updated on market news and trends?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Trading involves buying and selling financial instruments like stocks  advantage of price fluctuations in these assets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button">
                                        What are the different types of trading?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Trading involves buying and selling financial instruments like stocks  advantage of price fluctuations in these assets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button">
                                        Is trading suitable for everyone?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Trading involves buying and selling financial instruments like stocks  advantage of price fluctuations in these assets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100"
                                        type="button">
                                        What is fundamental analysis?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Trading involves buying and selling financial instruments like stocks  advantage of price fluctuations in these assets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button">
                                        What are the risks associated with trading?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Trading involves buying and selling financial instruments like stocks  advantage of price fluctuations in these assets.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9 col-sm-8 col-lg-5 col-xxl-6">
                    <div class="faq_thumbs d-flex justify-content-center justify-content-xl-end">
                        <img src="/tradez/assets/images/faq.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section Ends -->
@endsection
