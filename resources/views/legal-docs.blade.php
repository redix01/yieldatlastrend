@extends('layouts.tradez', ['pageTitle' => 'Legal Documents'])

@section('active-resources', 'active')

@section('content')
<!-- banner section start-->
    <section class="banner-section  pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Legal docs</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Legal docs</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->
   
    <!--provide-world start-->
    <section class="provide-world pt-120 position-relative z-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xxl-6">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <h3 class="mb-5 mb-lg-6">Company legal docs</h3>
                        <p class="fs-six-up mx-ch mx-auto">We're constantly improving our investment platform to make it the best place to invest in stocks, ETFs, and mutual funds.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-6 gy-xxl-0">
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-file fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Terms of Service</h4>
                       <p>Investing requires discipline and a long-term perspective. Our terms outline how we help you access stocks, ETFs, and mutual funds.</p>
                       <a href="/terms-conditions" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-world fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Policies</h4>
                       <p>We are committed to protecting your data and explaining how we handle the information needed to operate your investment account.</p>
                       <a href="/privacy-policy" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-shield-lock-filled fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Security</h4>
                       <p>Your assets and personal information are safeguarded with industry-standard security practices and encryption.</p>
                         <a href="/terms-conditions" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- provide-world end -->   

    <!-- FAQ Section Starts -->
    <section class="faq pb-120 pt-120 position-relative z-0">
        <div class="animation vector position-absolute top-0 left-0 w-100 h-100 z-n1">
            <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
                <img src="/tradez/assets/images/plus.png" alt="vector" class="position-absolute  top-0 start-0 ps-20 ms-10 pt-120 previewShapeRevX d-none d-xl-flex">
                <img src="/tradez/assets/images/star30.png" alt="vector" class="position-absolute push_animat end-0 top-0  pt-20 me-xl-20 pe-20 d-none d-lg-flex">
                <img src="/tradez/assets/images/vector21.png" alt="vector" class="position-absolute bottom-0 start-0 pb-11 ps-20 ms-10 d-none d-xxxl-flex ">
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <span class="heading fs-five p1-color mb-5">Frequent question</span>
                        <h3>Do you have any question</h3>
                    </div>
                </div>
            </div>
            <div class="row gy-6 justify-content-center align-items-center">
                <div class="col-xl-6">
                    <div class="faq__part">
                        <div class="accordion-section d-grid gap-6">
                            <div class="accordion-single  cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button"> What is investing?</button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Investing means allocating money into assets such as stocks, ETFs, and mutual funds with the goal of building wealth over time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100"
                                        type="button">
                                        How can I get started with investing?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Open an account, complete verification, fund your account, and choose from our selection of stocks, ETFs, and mutual funds.</p>
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
                                        <p>Visit our Education and Blog sections for market insights, investment guides, and portfolio tips.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button">
                                        What are the different types of investments?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Our platform focuses on three core asset classes: individual stocks, exchange-traded funds (ETFs), and mutual funds.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq__part">
                        <div class="accordion-section d-grid gap-6">
                            <div class="accordion-single  cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button"> How can I get started in stock investing?</button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Start by researching companies, diversify across sectors, and invest amounts aligned with your risk tolerance and goals.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100"
                                        type="button">
                                        What is fundamental analysis in stock investing?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Fundamental analysis evaluates a company's financial health, earnings, and growth potential to guide long-term investment decisions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100"
                                        type="button">
                                        What are the risks involved in investing?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>All investments carry risk, including market volatility and potential loss of capital. Diversification and a long-term outlook can help manage risk.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button">
                                        How can I learn more about investing?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Explore our Education section for articles, tutorials, and guides on stocks, ETFs, mutual funds, and portfolio building.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section Ends -->
@endsection
