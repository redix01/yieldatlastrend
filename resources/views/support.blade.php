@extends('layouts.tradez', ['pageTitle' => 'Support'])

@section('active-resources', 'active')

@section('content')
<!-- banner section start-->
    <section class="banner-section  pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Support</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Support</span></li>
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
                        <h3 class="mb-5 mb-lg-6">Anytime Support from Our Team</h3>
                        <p class="fs-six-up mx-ch mx-auto">We're constantly improving our investment platform to make it the best place to invest in stocks, ETFs, and mutual funds.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-6 gy-xxl-0">
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-users-group fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Getting Started</h4>
                       <p>New to investing? Our team can help you open an account, verify your profile, and make your first investment.</p>
                       <a href="/signup" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-tool fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Portfolio Tools</h4>
                       <p>Get help using our portfolio tracking, allocation, and analysis tools to manage your investments effectively.</p>
                       <a href="/signup" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-brand-stackshare fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Stocks and ETFs</h4>
                       <p>Learn how to research individual stocks, compare ETFs, and build a diversified portfolio aligned with your goals.</p>
                        <a href="/signup" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- provide-world end -->   

    <!-- FAQ Section Starts -->
    <section class="faq pb-120 pt-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/button.png" alt="vector" class="position-absolute pt-6 pt-xl-15 previewShapeRevX d-none d-lg-flex">
            <img src="/tradez/assets/images/star30.png" alt="vector" class="position-absolute push_animat end-0 top-0  mt-4 me-xl-20 pe-20 d-none d-xxl-flex">
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
                                        <p>Open an account, complete verification, fund your portfolio, and choose from stocks, ETFs, and mutual funds aligned with your goals.</p>
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
                                        <p>Visit our Blog and Market pages for insights, and use our platform tools to track your portfolio and discover new opportunities.</p>
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
                                        <p>Our platform focuses on stocks, ETFs, and mutual funds, each offering different levels of risk, diversification, and growth potential.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button">
                                        Is investing suitable for everyone?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>Investing is for anyone with long-term financial goals. It is important to understand your risk tolerance and invest accordingly.</p>
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
                                        <p>Fundamental analysis evaluates a company's financial health, earnings, and growth potential to guide long-term investment decisions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single cus-rounded-1 nb3-bg box-shadow py-3 py-md-4 px-4 px-md-5">
                                <h5 class="header-area">
                                    <button class="accordion-btn transition fw-semibold text-start d-flex position-relative w-100" type="button">
                                        What are the risks associated with investing?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body pt-5">
                                        <p>All investments carry risk, including market volatility and potential loss of capital. Diversification and a long-term outlook can help manage risk.</p>
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
