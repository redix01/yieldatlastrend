@php
    $siteSettings = \App\Support\SiteSettings::get();
    $brandName = config('app.name');
    $brandNameCompact = preg_replace('/\s+/', '', $brandName);
    $supportEmail = (string) ($siteSettings['support_email'] ?? 'support@example.com');
    $supportPhone = (string) ($siteSettings['support_phone'] ?? '+0123 456 789');
    $pageTitle = $pageTitle ?? $brandName;
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Investing, Stocks, ETFs, Mutual Funds">
    <meta name="description" content="Invest in stocks, ETFs, and mutual funds on a world-class investment platform.">
    <title>{{ $pageTitle }}</title>
    <link rel="shortcut icon" href="/tradez/assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">
    <link rel="stylesheet" href="/tradez/assets/css/style.min.css">
    @stack('styles')
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <span class="loader"></span>
    </div>

    <!-- Scroll To Top -->
    <button class="scrollToTop d-none d-md-flex d-center rounded" aria-label="scroll Bar Button"><i class="mat-icon fs-four nb4-color ti ti-arrow-up"></i></button>

    <!-- header-section start -->
    <header class="header-section a2-bg-0 header-section--secondary header-menu w-100">
        <div class="container d-center">
            <nav class="navbar a2-lg-bg py-5 p-lg-5 rounded-3 navbar-expand-lg w-100 justify-content-between">
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler ms-4" type="button" data-bs-toggle="collapse" aria-label="Navbar Toggler"
                    data-bs-target="#navbar-content" aria-expanded="true" id="nav-icon3">
                        <span></span><span></span><span></span><span></span>
                    </button>
                    <a href="/" class="navbar-brand m-0 p-0 d-flex align-items-center gap-3 gap-xl-4 me-2">
                        <img src="/tradez/assets/images/fav.png" class="logo" alt="{{ $brandName }}" style="height: 40px;">
                        <span class="fw-bold text-white fs-4 d-none d-sm-flex">{{ $brandNameCompact }}</span>
                    </a>
                </div>
                <div class="nav_alt">
                    <div class="right-area position-relative ms-0 d-center gap-1 gap-xl-4 d-lg-none">
                        <div class="single-item">
                            <a href="/login" class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-center gap-1 fw-bold nw1-color"> Login <i class="ti ti-arrow-right fs-six-up"></i></a>
                        </div>
                        <div class="single-item">
                            <a href="/signup" class="cmn-btn fw-bold py-2 px-2 px-sm-3 px-lg-4 align-items-center gap-1"> Sign Up <i class="ti ti-arrow-right fw-semibold fs-six-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbar-content">
                    <ul class="navbar-nav gap-2 gap-lg-3 gap-xxl-8 align-self-center mx-auto mt-4 mt-lg-0">
                        <li>
                            <a class="dropdown-item @yield('active-home', '')" href="/">Home</a>
                        </li>
                        <li>
                            <a class="dropdown-item @yield('active-markets', '')" href="/market">Markets</a>
                        </li>
                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav @yield('active-company', '')">Company</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/about">About</a></li>
                                <li><a class="dropdown-item" href="/contact">Contact</a></li>
                            </ul>
                        </li>
                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav @yield('active-resources', '')">Resources</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/faq">FAQ</a></li>
                                <li><a class="dropdown-item" href="/terms-conditions">Terms & Conditions</a></li>
                                <li><a class="dropdown-item" href="/privacy-policy">Privacy Policy</a></li>
                                <li><a class="dropdown-item" href="/risk-disclosure">Risk Disclosure</a></li>
                                <li><a class="dropdown-item" href="/support">Support</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="right-area position-relative ms-0 d-center gap-1 gap-xl-4 d-none d-lg-flex">
                    <div class="single-item">
                        <a href="/login" class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-center gap-1 fw-bold nw1-color"> Login <i class="ti ti-arrow-right fs-six-up"></i></a>
                    </div>
                    <div class="single-item">
                        <a href="/signup" class="cmn-btn fw-bold py-2 px-2 px-sm-3 px-lg-4 align-items-center gap-1"> Sign Up <i class="ti ti-arrow-right fw-semibold fs-six-up"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header-section end -->

    @yield('content')

    <!-- Footer Section Starts -->
    <footer class="footer a2-bg position-relative pt-15 pt-lg-0 z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1 d-none d-xxxl-flex">
            <img src="/tradez/assets/images/vector.png" alt="vector" class="position-absolute jello">
            <img src="/tradez/assets/images/vector4.png" alt="vector" class="position-absolute bottom-0 end-0">
        </div>
        <div class="container">
            <div class="start-earning nb3-bg cus-rounded-2 d-flex align-items-center p-4 p-sm-6 p-md-10 p-lg-15 p-xl-20 pe-lg-6 pe-xl-16 overflow-hidden position-relative">
                <div class="vector_effect position-absolute d-center justify-content-end end-0 d-flex gap-20">
                    <img src="/tradez/assets/images/star2.png" alt="vector" class="d-none d-xxl-flex push_animat">
                    <img src="/tradez/assets/images/star_focus.png" alt="vector" class="d-none d-sm-flex rotate time_dur ms-auto ms-lg-0 me-md-5">
                </div>
                <div class="row gy-6 w-100 text-center text-sm-start align-items-center justify-content-sm-between">
                    <div class="col-sm-8">
                        <h2>Start investing with only $20</h2>
                        <p class="fs-six-up fw_500 mt-5">Build your portfolio with stocks, ETFs, and mutual funds</p>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="/signup" class="cmn-btn secondary-alt ms-auto fs-five nb4-xxl-bg gap-2 align-items-center py-2 px-4 py-lg-3 px-lg-5">Register <i class="ti ti-arrow-right fs-four"></i></a>
                    </div>
                </div>
            </div>

            <div class="row gy-8 gy-sm-12 gy-lg-0 pt-120 pb-120">
                <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Quick Link</h4>
                        <ul class="footer_list d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <li><a class="n2-color d-flex align-items-center" href="/market">Markets</a></li>
                            <li><a class="n2-color" href="/faq">FAQ</a></li>
                            <li><a class="n2-color" href="/support">Support</a></li>
                            <li><a class="n2-color" href="/terms-conditions">Legal docs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Company</h4>
                        <ul class="footer_list d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <li><a class="n2-color" href="/about">About</a></li>
                            <li><a class="n2-color" href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Legal</h4>
                        <ul class="footer_list d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <li><a class="n2-color" href="/terms-conditions">Terms & Conditions</a></li>
                            <li><a class="n2-color" href="/privacy-policy">Privacy & Policy</a></li>
                            <li><a class="n2-color" href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Contact Us</h4>
                        <div class="d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a>
                            <a href="tel:{{ $supportPhone }}">{{ $supportPhone }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 border-top border-color opac-20 py-7 py-xxl-8">
                    <div class="footer__copyright d-center gap-15 flex-wrap justify-content-md-between">
                        <p class="fs-six order-2 order-md-0 text-center text-md-start">Copyright ©<span class="currentYear"></span> {{ $brandName }} <span>|</span> All Rights Reserved</p>
                        <ul class="social-area d-center gap-2 gap-md-3">
                            <li><a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-facebook"></i></a></li>
                            <li><a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-twitch"></i></a></li>
                            <li><a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-instagram"></i></a></li>
                            <li><a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-discord-filled"></i></a></li>
                            <li><a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends -->

    <script src="/tradez/assets/js/plugins/plugins.js"></script>
    <script src="/tradez/assets/js/plugins/plugin-custom.js"></script>
    <script src="/tradez/assets/js/main.js"></script>
    @stack('scripts')
</body>
</html>
