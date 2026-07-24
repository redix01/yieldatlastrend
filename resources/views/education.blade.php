@extends('layouts.tradez', ['pageTitle' => 'Education'])

@section('active-education', 'active')

@section('content')
<!-- banner section start-->
    <section class="banner-section  pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Education</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Education</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!--Invest On start-->
    <section class="trade_on trade_on--secondary pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/star3.png" alt="vector" class="position-absolute push_animat d-none d-xxxl-flex top-0 start-0 pt-lg-16 ps-20 ms-lg-8">
            <img src="/tradez/assets/images/sun2.png" alt="vector" class="sun2 position-absolute push_animat d-none d-xxl-flex bottom-0 pb-120">
        </div>
        <div class="container">
            <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
                <div class="col-10 col-sm-8 col-md-7 col-lg-6 order-2 order-lg-0">
                    <div class="trade_on__thumbs d-flex justify-content-end">
                        <img src="/tradez/assets/images/education.png" alt="Imgae">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xxl-5">
                    <div class="trade_on__content">
                        <span class="heading p1-color fs-six mb-5">Investor Academy</span>
                        <h4 class="mb-4 mb-lg-5">Investing in Knowledge: A Wise Choice for Success</h4>
                        <p class="mx-ch">Knowledge empowers individuals to make informed financial decisions. Whether it's personal finance, retirement planning, or portfolio building, our resources help you navigate investing with confidence.</p>   
                        <div class="d-flex gap-3 align-items-center mt-5 mt-lg-6"> <span class="s1-bg py-1 px-2 rounded-4 fs-seven nb4-color">Learn</span><i class="ti ti-arrow-narrow-right p1-color fs-four"></i><span class="s1-bg py-1 px-2 rounded-4 fs-seven nb4-color ms-1">Understand</span><i class="ti ti-arrow-narrow-right p1-color fs-four"></i><span class="s1-bg py-1 px-2 rounded-4 fs-seven nb4-color ms-1">Invest</span></div>
                        <a href="/signup" class="cmn-btn fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-4 py-lg-3 px-lg-5 mt-7 mt-xxl-8">Start Learning <i class="ti ti-arrow-right fs-four"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Invest On end -->
   
    <!-- FAQ Section Starts -->
    <section class="faq a2-bg pb-120 pt-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="/tradez/assets/images/button.png" alt="vector" class="position-absolute pt-6 pt-xl-15 previewShapeRevX d-none d-xl-flex">
            <img src="/tradez/assets/images/star2.png" alt="vector" class="position-absolute push_animat end-0 top-0 mt-20 pt-5 me-xl-20 pe-10 d-none d-lg-flex">
            <img src="/tradez/assets/images/vector20.png" alt="vector" class="position-absolute bottom-0 start-0 pb-11 ps-7 d-none d-xxxl-flex">
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
    
    <!--provide-world start-->
    <section class="provide-world pt-120 pb-120  position-relative z-0">
        <div class="container">
            <div class="row gy-6 gy-xxl-0">
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-users-group fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Beginner Course</h4>
                       <p>Learn the fundamentals of investing, from asset classes to building your first portfolio with stocks, ETFs, and mutual funds.</p>
                       <a href="/signup" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Enter Course<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-tool fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Portfolio Tools</h4>
                       <p>Discover tools for tracking allocations, analyzing performance, and staying informed about your investments.</p>
                       <a href="/signup" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Enter Course<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-brand-stackshare fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Stocks and ETFs</h4>
                       <p>Understand how to research individual stocks and select ETFs that match your investment goals and risk tolerance.</p>
                        <a href="/signup" class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Enter Course<i class="ti ti-arrow-narrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- provide-world end -->
@endsection
