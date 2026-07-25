@extends('layouts.tradez', ['pageTitle' => 'Markets'])

@section('active-markets', 'active')

@section('content')
<!-- banner section start-->
    <section class="banner-section pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Investment Products</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Markets</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- products intro start -->
    <section class="provide-world bg nb4-bg pt-120 pb-120 position-relative z-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <span class="heading p1-color fs-five mb-5">What We Offer</span>
                        <h3 class="mb-5 mb-lg-6">Stocks, ETFs & Mutual Funds</h3>
                        <p class="fs-six-up mx-ch mx-auto">Our platform gives you access to a broad range of U.S. investment products. Whether you prefer picking individual companies, diversifying through ETFs, or investing in professionally managed mutual funds, we provide the tools and resources to help you build a portfolio aligned with your financial goals.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-6 gy-xxl-0">
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9 h-100">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-trending-up fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Stocks</h4>
                       <p>Invest in individual U.S. companies across sectors and industries. Stocks offer direct ownership and the potential for long-term capital appreciation as companies grow and generate value.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9 h-100">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-chart-pie fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">ETFs</h4>
                       <p>Exchange-traded funds let you invest in a basket of securities with a single trade. ETFs are a flexible, cost-effective way to diversify across markets, sectors, asset classes, and investment themes.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9 h-100">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-briefcase fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Mutual Funds</h4>
                       <p>Mutual funds pool money from many investors to build a diversified portfolio managed by professional investment teams. They are designed for investors seeking professional management and long-term diversification.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- products intro end -->

    <!-- why these products start -->
    <section class="trade_on a2-bg pt-120 pb-120 position-relative z-0">
        <div class="container">
            <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
                <div class="col-lg-6 col-xxl-5">
                    <div class="trade_on__content">
                        <span class="heading s1-color fs-five mb-5">Why These Products?</span>
                        <h3 class="mb-4 mb-lg-5">Build a Portfolio That Fits Your Goals</h3>
                        <p class="fs-six mx-ch">Stocks, ETFs, and mutual funds are the building blocks of long-term wealth creation. Each serves a different purpose in a balanced portfolio, allowing you to match your investments to your risk tolerance, time horizon, and financial objectives.</p>
                        <ul class="d-flex gap-4 flex-column mt-6">
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Diversify across asset classes and sectors</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Choose between self-directed and professionally managed options</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Access U.S. markets through a secure investment platform</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Stay informed with portfolio tools and market insights</li>
                        </ul>
                        <a href="/signup" class="cmn-btn secondary-alt fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6 mt-7 mt-xxl-8">Start Investing <i class="ti ti-arrow-right fs-four"></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="trade_on__thumbs d-flex justify-content-end">
                        <img src="/tradez/assets/images/market.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why these products end -->

    <!-- market widget start -->
    <section class="market_widget pb-120 position-relative z-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="heading__content text-center mb-10 mb-lg-15">
                    <span class="heading s1-color fs-five mb-5">Live Markets</span>
                    <h3>Track Stocks, ETFs & Mutual Funds</h3>
                    <p class="fs-six-up mx-ch mx-auto mt-5">Explore real-time market data for popular U.S. securities across our core investment categories.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="nb3-bg cus-rounded-1 p-3 p-lg-5">
                        <!-- Market Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/market-overview/?locale=en#%7B%22colorTheme%22%3A%22dark%22%2C%22dateRange%22%3A%221D%22%2C%22showChart%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A450%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Atrue%2C%22showSymbolLogo%22%3Atrue%2C%22showFloatingTooltip%22%3Afalse%2C%22plotLineColorGrowing%22%3A%22rgba%2841%2C%2098%2C%20255%2C%201%29%22%2C%22plotLineColorFalling%22%3A%22rgba%2841%2C%2098%2C%20255%2C%201%29%22%2C%22gridLineColor%22%3A%22rgba%28240%2C%20243%2C%20250%2C%200%29%22%2C%22scaleFontColor%22%3A%22rgba%28120%2C%20123%2C%20134%2C%201%29%22%2C%22belowLineFillColorGrowing%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.12%29%22%2C%22belowLineFillColorFalling%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.12%29%22%2C%22belowLineFillColorGrowingBottom%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200%29%22%2C%22belowLineFillColorFallingBottom%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200%29%22%2C%22symbolActiveColor%22%3A%22rgba%2841%2C%2098%2C%20255%2C%200.10%29%22%2C%22tabs%22%3A%5B%7B%22title%22%3A%22Stocks%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22NASDAQ%3AAAPL%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AMSFT%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AGOOGL%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AAMZN%22%7D%2C%7B%22s%22%3A%22NASDAQ%3ATSLA%22%7D%2C%7B%22s%22%3A%22NYSE%3AJPM%22%7D%2C%7B%22s%22%3A%22NYSE%3AJNJ%22%7D%2C%7B%22s%22%3A%22NYSE%3AV%22%7D%5D%2C%22originalTitle%22%3A%22Stocks%22%7D%2C%7B%22title%22%3A%22ETFs%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22NYSE%3ASPY%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AQQQ%22%7D%2C%7B%22s%22%3A%22AMEX%3AVOO%22%7D%2C%7B%22s%22%3A%22AMEX%3AVTI%22%7D%2C%7B%22s%22%3A%22AMEX%3AIWM%22%7D%2C%7B%22s%22%3A%22NYSE%3AAGG%22%7D%2C%7B%22s%22%3A%22AMEX%3AGLD%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AXLK%22%7D%5D%2C%22originalTitle%22%3A%22ETFs%22%7D%2C%7B%22title%22%3A%22Mutual%20Funds%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22MUTF%3AVFIAX%22%7D%2C%7B%22s%22%3A%22MUTF%3AVTSAX%22%7D%2C%7B%22s%22%3A%22MUTF%3AFXAIX%22%7D%2C%7B%22s%22%3A%22MUTF%3AVWUSX%22%7D%2C%7B%22s%22%3A%22MUTF%3ATRBCX%22%7D%2C%7B%22s%22%3A%22MUTF%3APRGFX%22%7D%2C%7B%22s%22%3A%22MUTF%3ADODGX%22%7D%2C%7B%22s%22%3A%22MUTF%3AAGTHX%22%7D%5D%2C%22originalTitle%22%3A%22Mutual%20Funds%22%7D%5D%2C%22utm_source%22%3A%22yieldatlastrend.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-overview%22%2C%22page-uri%22%3A%22yieldatlastrend.com%2Fmarket%22%7D" title="market overview widget" lang="en" class="cus_market_tradingview" style="width: 100%; height: 450px;"></iframe>
                        </div>
                        <!-- Market Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- market widget end -->
@endsection
