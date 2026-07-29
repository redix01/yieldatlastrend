@extends('layouts.tradez', ['pageTitle' => 'Terms & Conditions'])

@section('active-resources', 'active')

@section('content')
@php
    $siteSettings = \App\Support\SiteSettings::get();
    $supportEmail = (string) ($siteSettings['support_email'] ?? 'support@yieldatlastrend.com');
@endphp
<!--Privacy & Policy start-->
    <section class="privacy-policy mt-20 pt-120 pb-120 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xxl-8">
                    <div class="nb3-lg-bg pb-0 pb-md-4 p-4 p-sm-10 p-lg-15 cus-rounded-2">
                        <h2 class="text-center mb-10 mb-lg-15">Terms & Conditions</h2>
                        <div class="privacy-policy__card d-flex flex-column gap-8 gap-lg-10">
                            <div class="privacy-policy__part">
                                <p class="mt-3"><strong>Effective Date:</strong> 03-04-2018</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">1. Acceptance of Terms</h5>
                                <p class="mt-3">These Terms and Conditions govern your access to and use of the YieldAtlasTrend website, platform, applications, and related services (collectively, the “Services”). By accessing or using our Services, you acknowledge that you have read, understood, and agree to be bound by these Terms. If you do not agree, you must discontinue use of the Services.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">2. About YieldAtlasTrend</h5>
                                <p class="mt-3">YieldAtlasTrend is an investment platform developed by experienced financial market professionals to provide investors with access to investment research tools, portfolio management features, market insights, and investment opportunities relating to U.S. financial markets.</p>
                                <p class="mt-3">The platform offers access to investment products including U.S. stocks, exchange-traded funds (ETFs), and mutual funds through authorized financial service providers and infrastructure partners, where applicable.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">3. Eligibility</h5>
                                <p class="mt-3">To use our Services, you must:</p>
                                <ul class="ul-decimal mt-3 d-flex gap-3 flex-column">
                                    <li>Be at least 18 years old or the legal age of majority in your jurisdiction.</li>
                                    <li>Provide accurate and complete registration information.</li>
                                    <li>Comply with all applicable laws and regulations.</li>
                                </ul>
                                <p class="mt-4">We reserve the right to refuse, suspend, or terminate access to any user who fails to meet these requirements.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">4. Account Registration</h5>
                                <p class="mt-3">You are responsible for:</p>
                                <ul class="ul-decimal mt-3 d-flex gap-3 flex-column">
                                    <li>Maintaining the confidentiality of your login credentials.</li>
                                    <li>Ensuring all account information remains accurate and up to date.</li>
                                    <li>Promptly notifying YieldAtlasTrend of any unauthorized access or suspected security breach.</li>
                                </ul>
                                <p class="mt-4">You are responsible for all activity conducted through your account.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">5. Services</h5>
                                <p class="mt-3">YieldAtlasTrend provides access to investment-related services that may include:</p>
                                <ul class="ul-decimal mt-3 d-flex gap-3 flex-column">
                                    <li>Portfolio management tools</li>
                                    <li>Investment research</li>
                                    <li>Market analysis</li>
                                    <li>Educational resources</li>
                                    <li>Performance tracking</li>
                                    <li>Access to eligible U.S. investment products</li>
                                    <li>Investment account support through approved financial service partners</li>
                                </ul>
                                <p class="mt-4">The availability of certain services may vary depending on your jurisdiction and applicable regulatory requirements.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">6. Investment Risk Disclosure</h5>
                                <p class="mt-3">Investing in securities involves substantial risk.</p>
                                <p class="mt-3">By using YieldAtlasTrend, you acknowledge and agree that:</p>
                                <ul class="ul-decimal mt-3 d-flex gap-3 flex-column">
                                    <li>The value of investments may increase or decrease.</li>
                                    <li>Past performance does not guarantee future results.</li>
                                    <li>All investments involve risk</li>
                                    <li>You are solely responsible for your investment decisions.</li>
                                </ul>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">7. Educational Information</h5>
                                <p class="mt-3">Market commentary, educational articles, research reports, and analytical tools provided through YieldAtlasTrend are intended solely for informational purposes and should not be interpreted as personalized investment, legal, accounting, or tax advice.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">8. Third-Party Financial Partners</h5>
                                <p class="mt-3">YieldAtlasTrend may utilize third-party financial institutions, custodians, brokerage firms, payment processors, or service providers to facilitate account management, custody, transaction processing, or other operational services.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">9. User Responsibilities</h5>
                                <p class="mt-3">Users agree not to:</p>
                                <ul class="ul-decimal mt-3 d-flex gap-3 flex-column">
                                    <li>Use the platform for unlawful purposes.</li>
                                    <li>Attempt unauthorized access to platform systems.</li>
                                    <li>Introduce malware or harmful software.</li>
                                    <li>Interfere with platform operations.</li>
                                    <li>Misrepresent their identity.</li>
                                    <li>Violate applicable securities or financial regulations.</li>
                                </ul>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">10. Fees and Payments</h5>
                                <p class="mt-3">YieldAtlasTrend does not charge users any fees for creating an account, maintaining an account, making deposits, executing eligible transactions through the platform, or requesting withdrawals.</p>
                                <p class="mt-3">Users will not be charged account maintenance fees, subscription fees, deposit fees, withdrawal fees, or hidden service charges by YieldAtlasTrend.</p>
                                <p class="mt-3">If this policy changes in the future, YieldAtlasTrend will provide users with prior notice in accordance with applicable laws and these Terms and Conditions.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">11. Privacy</h5>
                                <p class="mt-3">Your use of the platform is also governed by the YieldAtlasTrend Privacy Policy, which explains how personal information is collected, stored, processed, and protected.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">12. Suspension and Termination</h5>
                                <p class="mt-3">YieldAtlasTrend may suspend or terminate your account if you:</p>
                                <ul class="ul-decimal mt-3 d-flex gap-3 flex-column">
                                    <li>Breach these Terms.</li>
                                    <li>Provide false information.</li>
                                    <li>Engage in fraudulent activity.</li>
                                    <li>Violate applicable financial regulations.</li>
                                    <li>Misuse the Services.</li>
                                </ul>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">13. Governing Law</h5>
                                <p class="mt-3">These Terms shall be governed by and construed in accordance with the laws of the jurisdiction in which YieldAtlasTrend is incorporated, unless otherwise required by applicable law.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">14. Changes to These Terms</h5>
                                <p class="mt-3">YieldAtlasTrend reserves the right to amend these Terms at any time. Updated Terms will become effective upon publication on the platform. Continued use of the Services constitutes acceptance of the revised Terms.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">15. Contact Information</h5>
                                <p class="mt-3">Questions regarding these Terms may be directed to:</p>
                                <p class="mt-3"><strong>YieldAtlasTrend</strong></p>
                                <p class="mt-3">Email: <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a></p>
                                <p class="mt-3">Website: <a href="https://www.yieldatlastrend.com" target="_blank">www.yieldatlastrend.com</a></p>
                                <p class="mt-3">Business Address: 424 Main Street Buffalo, NY 14202 United State</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--Privacy & Policy end -->
@endsection
