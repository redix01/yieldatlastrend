@extends('layouts.tradez', ['pageTitle' => 'Markets'])

@section('active-markets', 'active')

@section('content')
<!-- banner section start-->
    <section class="banner-section pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Market</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Market</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- market start -->
    <section class="market overflow-visible sidebar-section pt-120 pb-120">
        <div class="container ">
            <div class="row gy-4 gy-lg-0">
                <div class="col-xl-8">
                    <div class="d-xl-none">
                        <button class="button sidebar_toggler_btn mb-4 d-flex align-items-center gap-2">
                            <i class="ti ti-layout-sidebar-left-collapse"></i>
                            <span>Sidebar Toggler</span>
                        </button>
                    </div>
                    <div class="row g-6">
                        <div class="col-md-6 col-lg-12">
                            <div class="market__card p-3 nb3-bg cus-rounded-1 d-flex flex-column flex-lg-row align-items-center gap-4">
                                <div class="market__thumbs">
                                    <img src="/tradez/assets/images/market.png" alt="Image" class="max-auto max-lg-un cus-rounded-1">
                                </div>
                                <div class="market_news__content">
                                    <a href="/market"> <h4>Fundamental Analysis: Reading the Story Behind the Stocks</h4></a>
                                    <p class="mt-3">Understanding company earnings, growth potential, and valuation metrics is essential for making informed long-term investment decisions.</p>
                                    <span class="mt-3">15 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="market__card p-3 nb3-bg cus-rounded-1 d-flex flex-column flex-lg-row align-items-center gap-4">
                                <div class="market__thumbs">
                                    <img src="/tradez/assets/images/market2.png" alt="Image" class="max-auto max-lg-un cus-rounded-1">
                                </div>
                                <div class="market_news__content">
                                    <a href="/market"> <h4>Investment Pitfalls: Common Mistakes and How to Avoid Them</h4></a>
                                    <p class="mt-3">Avoid emotional decisions, chasing trends, and neglecting diversification to stay on track toward your financial goals.</p>
                                    <span class="mt-3">15 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="market__card p-3 nb3-bg cus-rounded-1 d-flex flex-column flex-lg-row align-items-center gap-4">
                                <div class="market__thumbs">
                                    <img src="/tradez/assets/images/market3.png" alt="Image" class="max-auto max-lg-un cus-rounded-1">
                                </div>
                                <div class="market_news__content">
                                    <a href="/market"> <h4>ETF Essentials: A Comprehensive Guide to Exchange-Traded Funds</h4></a>
                                    <p class="mt-3">ETFs offer a simple way to diversify across sectors, asset classes, and geographies with a single investment.</p>
                                    <span class="mt-3">15 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="market__card p-3 nb3-bg cus-rounded-1 d-flex flex-column flex-lg-row align-items-center gap-4">
                                <div class="market__thumbs">
                                    <img src="/tradez/assets/images/market4.png" alt="Image" class="max-auto max-lg-un cus-rounded-1">
                                </div>
                                <div class="market_news__content">
                                    <a href="/market"> <h4>Risk Management 101: Protecting Your Capital While Investing</h4></a>
                                    <p class="mt-3">Diversification, position sizing, and a long-term perspective help protect your portfolio from market volatility.</p>
                                    <span class="mt-3">15 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="market__card p-3 nb3-bg cus-rounded-1 d-flex flex-column flex-lg-row align-items-center gap-4">
                                <div class="market__thumbs">
                                    <img src="/tradez/assets/images/market5.png" alt="Image" class="max-auto max-lg-un cus-rounded-1">
                                </div>
                                <div class="market_news__content">
                                    <a href="/market"> <h4>Building Your Investment Plan: A Roadmap to Long-Term Growth</h4></a>
                                    <p class="mt-3">A clear investment plan aligned with your goals, time horizon, and risk tolerance is the foundation of financial success.</p>
                                    <span class="mt-3">15 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="market__card p-3 nb3-bg cus-rounded-1 d-flex flex-column flex-lg-row align-items-center gap-4">
                                <div class="market__thumbs">
                                    <img src="/tradez/assets/images/market6.png" alt="Image" class="max-auto max-lg-un cus-rounded-1">
                                </div>
                                <div class="market_news__content">
                                    <a href="/market"> <h4>The Long-Term Investor's Mindset: Patience and Discipline</h4></a>
                                    <p class="mt-3">Successful investing is not about timing the market. It is about time in the market, consistency, and staying the course.</p>
                                    <span class="mt-3">15 hours ago</span>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="col-12 mt-10 mt-lg-15  d-flex justify-content-center">
                        <a href="#" class="cmn-btn fs-five nb4-xxl-bg align-items-center py-3 px-6 py-lg-3 px-lg-8">Load More</a>
                    </div>
                </div>
                <div class="col-xl-4 ">
                    <div class="sidebar cus-scrollbar sidebar-xl-section d-flex flex-column gap-5 gap-lg-6">
                        <div class="nb3-bg cus-rounded-1 p-4 p-lg-6">
                            <h5 class="pb-5 mb-5 border-bottom border-color four">Market Summary</h5>
                            <!-- Market Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/market-overview/?locale=en#%7B%22colorTheme%22%3A%22dark%22%2C%22dateRange%22%3A%221D%22%2C%22showChart%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A361%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Atrue%2C%22showSymbolLogo%22%3Atrue%2C%22showFloatingTooltip%22%3Afalse%2C%22plotLineColorGrowing%22%3A%22rgba%2841%2C%2098%2C%20255%2C%201%29%22%2C%22plotLineColorFalling%22%3A%22rgba%2841%2C%2098%2C%20255%2C%201%29%22%2C%22gridLineColor%22%3A%22rgba%28240%2C%20243%2C%20250%2C%200%29%22%2C%22scaleFontColor%22%3A%22rgba%28120%2C%20123%2C%20134%2C%201%29%22%2C%22belowLineFillColorGrowing%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.12%29%22%2C%22belowLineFillColorFalling%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.12%29%22%2C%22belowLineFillColorGrowingBottom%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200%29%22%2C%22belowLineFillColorFallingBottom%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200%29%22%2C%22symbolActiveColor%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.10%29%22%2C%22tabs%22%3A%5B%7B%22title%22%3A%22Stocks%20%26%20ETFs%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22NASDAQ%3AAAPL%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AMSFT%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AGOOGL%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AAMZN%22%7D%2C%7B%22s%22%3A%22NASDAQ%3ATSLA%22%7D%2C%7B%22s%22%3A%22NYSE%3ASPY%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AQQQ%22%7D%2C%7B%22s%22%3A%22AMEX%3AVOO%22%7D%5D%2C%22originalTitle%22%3A%22Stocks%20%26%20ETFs%22%7D%5D%2C%22utm_source%22%3A%22yieldatlastrend.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-overview%22%2C%22page-uri%22%3A%22yieldatlastrend.com%2Fmarket%22%7D" title="market overview TradingView widget" lang="en" class="cus_market_tradingview"></iframe>
                            </div>
                            <!-- Market Widget END -->
                        </div>
                        <div class="nb3-bg cus-rounded-1 p-4 p-lg-6">
                            <h5 class="pb-5 mb-5 border-bottom border-color four">Market News</h5>
                            <div class="recent-posts d-flex flex-column gap-5">
                                <div class="recent-posts__part d-flex gap-3 align-items-center">
                                    <div class="recent-posts__thumb">
                                        <img src="/tradez/assets/images/market_news.png" class="cus-rounded-1" alt="image">
                                    </div>
                                    <div class="recent-posts__title">
                                        <a href="/market"><h5>The Index Fund Revolution</h5></a>
                                        <p class="author__submit-time mt-3">October 07,2023</p>
                                    </div>
                                </div>
                                <div class="recent-posts__part d-flex gap-3 align-items-center">
                                    <div class="recent-posts__thumb">
                                        <img src="/tradez/assets/images/market_news2.png" class="cus-rounded-1" alt="image">
                                    </div>
                                    <div class="recent-posts__title">
                                        <a href="/market"><h5>Building Your Investment Plan</h5></a>
                                        <p class="author__submit-time mt-3">September 20,2023</p>
                                    </div>
                                </div>
                                <div class="recent-posts__part d-flex gap-3 align-items-center">
                                    <div class="recent-posts__thumb">
                                        <img src="/tradez/assets/images/market_news3.png" class="cus-rounded-1" alt="image">
                                    </div>
                                    <div class="recent-posts__title">
                                        <a href="/market"><h5>The Psychology of Investing</h5></a>
                                        <p class="author__submit-time mt-3">August 28,2023</p>
                                    </div>
                                </div>
                                <div class="recent-posts__part d-flex gap-3 align-items-center">
                                    <div class="recent-posts__thumb">
                                        <img src="/tradez/assets/images/market_news4.png" class="cus-rounded-1" alt="image">
                                    </div>
                                    <div class="recent-posts__title">
                                        <a href="/market"><h5>The Index Fund Revolution</h5></a>
                                        <p class="author__submit-time mt-3">October 07,2023</p>
                                    </div>
                                </div>
                                <div class="recent-posts__part d-flex gap-3 align-items-center">
                                    <div class="recent-posts__thumb">
                                        <img src="/tradez/assets/images/market_news5.png" class="cus-rounded-1" alt="image">
                                    </div>
                                    <div class="recent-posts__title">
                                        <a href="/market"><h5>Building Your Investment Plan</h5></a>
                                        <p class="author__submit-time mt-3">September 20,2023</p>
                                    </div>
                                </div>
                                <div class="recent-posts__part d-flex gap-3 align-items-center">
                                    <div class="recent-posts__thumb">
                                        <img src="/tradez/assets/images/market_news6.png" class="cus-rounded-1" alt="image">
                                    </div>
                                    <div class="recent-posts__title">
                                        <a href="/market"><h5>The Psychology of Investing</h5></a>
                                        <p class="author__submit-time mt-3">August 20,2023</p>
                                    </div>
                                </div>
                                <div class="recent-posts__part d-flex gap-3 align-items-center">
                                    <div class="recent-posts__thumb">
                                        <img src="/tradez/assets/images/market_news7.png" class="cus-rounded-1" alt="image">
                                    </div>
                                    <div class="recent-posts__title">
                                        <a href="/market"><h5>Building Your Investment Plan</h5></a>
                                        <p class="author__submit-time mt-3">August 25,2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- market end -->
@endsection
