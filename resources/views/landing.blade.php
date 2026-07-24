@extends('layouts.tradez', ['pageTitle' => ($brandName ?? config('app.name')) . ' - Invest in Stocks, ETFs & Mutual Funds'])

@section('active-home', 'active')

@section('content')
    <!-- hero section start-->
    <section class="hero-section position-relative z-0 ">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/hero_vector.png" alt="vector" class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX">
        </div>
        <div class="container pt-20 mt-12 mt-lg-20">
            <div class="row pt-4 pt-lg-10 gy-12 gy-lg-0 justify-content-center justify-content-lg-between align-items-center">
                <div class="col-lg-6 col-xxl-7">
                    <div class="hero-card p1-xxl-bg pt-xl-20 pb-xl-20 position-relative">
                        <div class="pt-xxl-10 pb-xxl-10">
                            <div class="circle-text first d-center cus-z1 position-absolute end-0 top-0 d-none d-xxl-flex  me-lg-10 mt-lg-10">
                                <div class="text d-center">
                                    <p class="fs-six">Investing Unlocking Diversified Growth</p>
                                </div>
                                <img src="/tradez/assets/images/circle_star.png" alt="star" class="push_animat">
                            </div>
                            <span class="heading p1-max-xxl nb4-xxl-color fs-five mb-3">Investment platform </span>
                            <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6">Invest Abundance</h1>
                            <p class="fs-six-up fw_500 nb4-xxl-color">Build a diversified portfolio with stocks, ETFs, and mutual funds designed for long-term growth.</p>
                            <div class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-8 mt-lg-10">
                                <a href="/signup" class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6">Start Investing <i class="ti ti-trending-up"></i></a>
                                <a href="/login" class="cmn-btn link link-xxl-color fs-five  gap-2 gap-lg-3 align-items-center "><i class="ti ti-arrow-narrow-right fs-four"></i> Open an account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-6 col-xxl-5">
                    <div class="hero-section__thumbs pb-xxl-10">
                        <img src="/tradez/assets/images/hero_thumb.png" class="max-auto max-xxl-un" alt="img">
                    </div>
                </div>
                <ul class="list_items col-12 d-flex row-gap-6 gap-lg-15 justify-content-between flex-wrap pt-2 pt-lg-15 pt-xl-2 pt-xxl-15 pb-15">
                    <li class="d-flex gap-3 align-items-center">
                        <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i class="ti ti-tools fs-three nb4-color"></i></span>
                        <h4 class="nw1-color">Enhanced Tools</h4>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i class="ti ti-trending-up fs-three nb4-color"></i></span>
                        <h4 class="nw1-color">Investment Guides</h4>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i class="ti ti-broadcast fs-three nb4-color"></i></span>
                        <h4 class="nw1-color">Smart Execution</h4>
                    </li>
                    <li class="d-flex gap-3 align-items-center">
                        <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i class="ti ti-percentage fs-three nb4-color"></i></span>
                        <h4 class="nw1-color">Low-Cost Investing</h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- Why Invest start-->
    <section class="why-trade s1-bg alt-color position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/sun.png" alt="vector" class="position-absolute push_animat">
            <img src="/tradez/assets/images/star.png" alt="vector" class="position-absolute  d-xxxl-flex previewSkew">
        </div>
        <div class="container">
            <div class="row gy-3 gy-lg-0 justify-content-center">
                <div class="col-sm-7 col-lg-6 col-xxl-5 order-2 order-lg-0">
                    <div class="why-trade__thumbs h-100 d-flex align-items-end ps-20 ps-sm-5 ps-lg-0">
                        <img src="/tradez/assets/images/why_trade.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-7">
                    <div class="row pt-120 pb-120">
                        <div class="col-xxl-6 offset-xxl-2">
                            <div class="why-trade__part">
                                <span class="heading fs-five">Why Invest With</span>
                                <h3 class="mb-3 mt-5">Invest Genius</h3>
                                <p>Investing is the practice of building wealth by allocating capital into assets such as stocks, ETFs, and mutual funds for long-term growth.</p>
                                <a href="/about" class="cmn-btn link secondary-link fs-six-up  gap-2 gap-lg-3 align-items-center mt-5"> Learn more <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                            </div>
                        </div>
                        <div class="col-xxl-12 mt-7 mt-md-8 mt-xxl-3">
                            <div class="why-trade__part d-flex align-items-center">
                                <div class="vector d-none d-xxl-flex px-xxl-15">
                                    <img src="/tradez/assets/images/trade_vector.png" alt="Image" class="max-xxl-un">
                                </div>
                                <div class="content">
                                    <h3 class="mb-3">Invest Apex</h3>
                                    <p>Successful investing combines disciplined planning, diversified allocation, and consistent contributions. From index funds to actively managed mutual funds, our platform gives you access to the building blocks of financial growth.</p>
                                    <a href="/about" class="cmn-btn link secondary-link fs-six-up  gap-2 gap-lg-3 align-items-center mt-5"> Learn more <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Invest end -->

    <!--provide-world start-->
    <section class="provide-world bg nb4-bg pt-120 pb-120  position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1 d-none d-md-flex">
            <img src="/tradez/assets/images/button.png" alt="vector" class="position-absolute pt-6 pt-xl-15 previewShapeRevX">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <span class="heading p1-color fs-five mb-5">We Provide World's</span>
                        <h3 class="mb-5 mb-lg-6">Join a community of more than <span class="s1-color">480,000</span> investors</h3>
                        <p class="fs-six-up mx-ch mx-auto">Investing is the practice of building wealth by allocating capital into assets such as stocks, ETFs, and mutual funds.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-6 gy-xxl-0">
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-award-filled fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Best Reputation</h4>
                       <p>Our investment platform has transformed how individuals access financial markets. Online tools and mobile apps make it easier than ever to build a portfolio.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-users fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">480,000+ Clients</h4>
                       <p>Risk management is fundamental to investing. Successful investors carefully manage their capital, diversify holdings, and stay focused on long-term goals.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-shield-check-filled fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Trusted and Secure</h4>
                       <p>Investing requires discipline and patience. Markets can be unpredictable, but a diversified strategy helps smooth the journey toward your financial goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- provide-world end -->

    <!--Invest On start-->
    <section class="trade_on a2-bg pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/coin.png" alt="vector" class="position-absolute d-none d-md-flex previewShapeRevX">
            <img src="/tradez/assets/images/star2.png" alt="vector" class="position-absolute d-none d-xl-flex push_animat">
            <img src="/tradez/assets/images/coin_vector.png" alt="vector" class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX opacity-50">
        </div>
        <div class="container">
            <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
                <div class="col-lg-6 col-xxl-5">
                    <div class="trade_on__content">
                        <span class="heading s1-color fs-five mb-5">Invest On Our</span>
                        <h3 class="mb-4 mb-lg-5">World Class Investment Platform</h3>
                        <p class="fs-six mx-ch">Investing in financial markets involves a wide range of strategies, from passive index investing to actively managed mutual funds. Each approach has its own principles, risk profile, and growth potential.</p>
                        <ul class="d-flex gap-4 flex-column mt-6">
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Portfolio tracking</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Understanding Investment Strategies</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Risk Management in Investing</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Technical vs. Fundamental Analysis</li>
                        </ul>
                        <a href="/signup" class="cmn-btn secondary-alt fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6 mt-7 mt-xxl-8">Sign up Now <i class="ti ti-arrow-right fs-four"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="trade_on__thumbs d-flex justify-content-end">
                        <img src="/tradez/assets/images/trade_on.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Invest On end -->

    <!--People Trust start-->
    <section class="people_trust pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/vector.png" alt="vector" class="position-absolute jello d-none d-xl-flex">
            <img src="/tradez/assets/images/star3.png" alt="vector" class="position-absolute push_animat d-none d-xxxl-flex">
            <img src="/tradez/assets/images/vector3.png" alt="vector" class="position-absolute bottom-0 end-0 d-none d-xxxl-flex">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-xxl-7">
                    <div class="heading__content mb-8 mb-lg-10 text-center">
                        <span class="heading p1-color fs-five mb-5">People Trust Us</span>
                        <h3 class="mb-4 mb-lg-6">Millions of Users Worldwide</h3>
                        <p class="fs-six-up mx-ch mx-auto">The rise of modern investment platforms has opened up new opportunities for investors worldwide. This beginner's guide to stocks, ETFs, and mutual funds helps you start your wealth-building journey.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="singletab">
                        <ul class="tablinks d-center flex-wrap gap-3 gap-lg-4  mb-10 mb-xxl-15">
                            <li class="nav-links active">
                                <button class="tablink cmn-btn outline_btn align-items-center fs-six-up py-2 py-lg-3 px-6  px-md-3 px-xxl-10 d-flex gap-3 align-items-center"><i class="ti ti-video fs-four s1-color"></i>Test Your Knowledge</button>
                            </li>
                            <li class="nav-links">
                                <button class="tablink cmn-btn outline_btn align-items-center fs-six-up py-2 py-lg-3 px-6  px-md-3 px-xxl-10 d-flex gap-3 align-items-center"><i class="ti ti-video fs-four s1-color"></i>Tutorial Videos</button>
                            </li>
                            <li class="nav-links">
                                <button class="tablink cmn-btn outline_btn align-items-center fs-six-up py-2 py-lg-3 px-6  px-md-3 px-xxl-10 d-flex gap-3 align-items-center"><i class="ti ti-video fs-four s1-color"></i>Live Commentary</button>
                            </li>
                        </ul>
                        <div class="tabcontents">
                            <div class="tabitem active">
                                <div class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                                    <div class="col-xl-6 col-xxl-7 ">
                                        <div class="people_trust_thumb d-center p-2 p-lg-5 pseudo_element_after overflow-hidden">
                                            <img src="/tradez/assets/images/people_trust_video.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-5">
                                        <div class="trade_on__content">
                                            <h4 class="mb-4">What you will learn</h4>
                                            <p class="mx-ch">Modern investment platforms have opened up new opportunities. In this beginner's guide to stocks, ETFs, and mutual funds, we demystify the world of financial markets.</p>
                                            <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Portfolio tracking</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Asset Allocation</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Diversified Growth</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Long-Term Wealth</li>
                                            </ul>
                                            <div class="mt-8 mt-xxl-10">
                                                <div class="counter-area d-flex gap-8 gap-xxl-10 ">
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="12">0</span>
                                                            <span class="display-four symbol s1-color">K</span>
                                                        </div>
                                                        <span class="mt-4">Users Joined</span>
                                                    </div>
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="5.5">0</span>
                                                            <span class="display-four symbol s1-color">M</span>
                                                        </div>
                                                        <span class="mt-4">Monthly Volume (In USD)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                                    <div class="col-xl-6 col-xxl-5">
                                        <div class="trade_on__content">
                                            <h4 class="mb-4">What you will learn</h4>
                                            <p class="mx-ch">Modern investment platforms have opened up new opportunities. In this beginner's guide to stocks, ETFs, and mutual funds, we demystify the world of financial markets.</p>
                                            <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color"></i>Portfolio tracking</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color"></i>Asset Allocation</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color"></i>Diversified Growth</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color"></i>Long-Term Wealth</li>
                                            </ul>
                                            <div class="mt-8 mt-xxl-10">
                                                <div class="counter-area d-flex gap-8 gap-xxl-10 ">
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="12">0</span>
                                                            <span class="display-four symbol s1-color">K</span>
                                                        </div>
                                                        <span class="mt-4">Users Joined</span>
                                                    </div>
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="5.5">0</span>
                                                            <span class="display-four symbol s1-color">M</span>
                                                        </div>
                                                        <span class="mt-4">Monthly Volume (In USD)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-7 ">
                                        <div class="people_trust_thumb d-center p-2 p-lg-5 pseudo_element_after overflow-hidden">
                                            <img src="/tradez/assets/images/people_trust_video.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                                    <div class="col-xl-6 col-xxl-7 ">
                                        <div class="people_trust_thumb d-center p-2 p-lg-5 pseudo_element_after overflow-hidden">
                                            <img src="/tradez/assets/images/people_trust_video.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-5">
                                        <div class="trade_on__content">
                                            <h4 class="mb-4">What you will learn</h4>
                                            <p class="mx-ch">Modern investment platforms have opened up new opportunities. In this beginner's guide to stocks, ETFs, and mutual funds, we demystify the world of financial markets.</p>
                                            <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Portfolio tracking</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Asset Allocation</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Diversified Growth</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Long-Term Wealth</li>
                                            </ul>
                                            <div class="mt-8 mt-xxl-10">
                                                <div class="counter-area d-flex gap-8 gap-xxl-10 ">
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="12">0</span>
                                                            <span class="display-four symbol s1-color">K</span>
                                                        </div>
                                                        <span class="mt-4">Users Joined</span>
                                                    </div>
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="5.5">0</span>
                                                            <span class="display-four symbol s1-color">M</span>
                                                        </div>
                                                        <span class="mt-4">Monthly Volume (In USD)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- People Trust end -->

    <!--Testimonial start-->
    <section class="testimonial p1-bg pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/star.png" alt="vector" class="position-absolute push_animat">
            <img src="/tradez/assets/images/vector2.png" alt="vector" class="position-absolute bottom-0 start-0 d-none d-xxxl-flex">
            <img src="/tradez/assets/images/sun.png" alt="vector" class="position-absolute push_animat d-none d-xxl-flex">
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
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Investing has always been a passion, but it wasn't until I refined my strategy and embraced risk management that I began to see consistent growth. The journey was not without its ups and downs, but the lessons I learned along the way have been invaluable.</p>
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
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Investing has always been a passion, but it wasn't until I refined my strategy and embraced risk management that I began to see consistent growth. The journey was not without its ups and downs, but the lessons I learned along the way have been invaluable.</p>
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
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Investing has always been a passion, but it wasn't until I refined my strategy and embraced risk management that I began to see consistent growth. The journey was not without its ups and downs, but the lessons I learned along the way have been invaluable.</p>
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

    <!--market widget start-->
    <section class="market_widget pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/star.png" alt="vector" class="position-absolute">
            <img src="/tradez/assets/images/vector2.png" alt="vector" class="position-absolute bottom-0 start-0">
            <img src="/tradez/assets/images/sun.png" alt="vector" class="position-absolute">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="heading__content text-center mb-10 mb-lg-15">
                    <span class="heading s1-color fs-five mb-5">Markets</span>
                    <h3>Stocks, ETFs & Mutual Funds</h3>
                    <p class="fs-six-up mx-ch mx-auto mt-5">Track popular stocks, ETFs, and mutual funds in real time.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="nb3-bg cus-rounded-1 p-3 p-lg-5">
                        <!-- Market Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/market-overview/?locale=en#%7B%22colorTheme%22%3A%22dark%22%2C%22dateRange%22%3A%221D%22%2C%22showChart%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A450%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Atrue%2C%22showSymbolLogo%22%3Atrue%2C%22showFloatingTooltip%22%3Afalse%2C%22plotLineColorGrowing%22%3A%22rgba%2841%2C%2098%2C%20255%2C%201%29%22%2C%22plotLineColorFalling%22%3A%22rgba%2841%2C%2098%2C%20255%2C%201%29%22%2C%22gridLineColor%22%3A%22rgba%28240%2C%20243%2C%20250%2C%200%29%22%2C%22scaleFontColor%22%3A%22rgba%28120%2C%20123%2C%20134%2C%201%29%22%2C%22belowLineFillColorGrowing%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.12%29%22%2C%22belowLineFillColorFalling%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.12%29%22%2C%22belowLineFillColorGrowingBottom%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200%29%22%2C%22belowLineFillColorFallingBottom%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200%29%22%2C%22symbolActiveColor%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.10%29%22%2C%22tabs%22%3A%5B%7B%22title%22%3A%22Stocks%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22NASDAQ%3AAAPL%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AMSFT%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AGOOGL%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AAMZN%22%7D%2C%7B%22s%22%3A%22NASDAQ%3ATSLA%22%7D%2C%7B%22s%22%3A%22NYSE%3AJPM%22%7D%2C%7B%22s%22%3A%22NYSE%3AJNJ%22%7D%2C%7B%22s%22%3A%22NYSE%3AV%22%7D%5D%2C%22originalTitle%22%3A%22Stocks%22%7D%2C%7B%22title%22%3A%22ETFs%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22NYSE%3ASPY%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AQQQ%22%7D%2C%7B%22s%22%3A%22AMEX%3AVOO%22%7D%2C%7B%22s%22%3A%22AMEX%3AVTI%22%7D%2C%7B%22s%22%3A%22AMEX%3AIWM%22%7D%2C%7B%22s%22%3A%22NYSE%3AAGG%22%7D%2C%7B%22s%22%3A%22AMEX%3AGLD%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AXLK%22%7D%5D%2C%22originalTitle%22%3A%22ETFs%22%7D%2C%7B%22title%22%3A%22Mutual%20Funds%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22MUTF%3AVFIAX%22%7D%2C%7B%22s%22%3A%22MUTF%3AVTSAX%22%7D%2C%7B%22s%22%3A%22MUTF%3AFXAIX%22%7D%2C%7B%22s%22%3A%22MUTF%3AVWUSX%22%7D%2C%7B%22s%22%3A%22MUTF%3ATRBCX%22%7D%2C%7B%22s%22%3A%22MUTF%3APRGFX%22%7D%2C%7B%22s%22%3A%22MUTF%3ADODGX%22%7D%2C%7B%22s%22%3A%22MUTF%3AAGTHX%22%7D%5D%2C%22originalTitle%22%3A%22Mutual%20Funds%22%7D%5D%2C%22utm_source%22%3A%22yieldatlastrend.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-overview%22%2C%22page-uri%22%3A%22yieldatlastrend.com%2F%22%7D" title="market overview widget" lang="en" class="cus_market_tradingview" style="width: 100%; height: 450px;"></iframe>
                        </div>
                        <!-- Market Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- market widget end -->
@endsection
