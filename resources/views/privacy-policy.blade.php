@extends('layouts.tradez', ['pageTitle' => 'Privacy Policy'])

@section('active-resources', 'active')

@section('content')
@php
    $siteSettings = \App\Support\SiteSettings::get();
    $supportEmail = (string) ($siteSettings['support_email'] ?? 'support@example.com');
@endphp
<!--Privacy & Policy start-->
    <section class="privacy-policy mt-20 pt-120 pb-120 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xxl-8">
                    <div class="nb3-lg-bg pb-0 pb-md-4 p-4 p-sm-10 p-lg-15 cus-rounded-2">
                        <h2 class="text-center mb-10 mb-lg-15">Privacy Policy</h2>
                        <div class="privacy-policy__card d-flex flex-column gap-8 gap-lg-10">
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">1. Information We Collect</h5>
                                <p>We collect information you provide directly, including your name, email address, phone number, country, identity-verification details, and any documents required to operate and secure your account. We may also collect account activity, transaction metadata, device signals, and support correspondence needed to run the platform safely.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">2. How We Use Your Information</h5>
                                <p class="mt-4 mb-5">We use personal information and technical data to deliver platform services, maintain account security, and meet regulatory or operational obligations.</p>
                                <ul class="ul-dots mt-5 d-flex gap-3 flex-column">
                                    <li>To provide and maintain our investment services</li>
                                    <li>To process transactions and support account operations</li>
                                    <li>To communicate updates, alerts, and service notices</li>
                                    <li>To detect fraud, abuse, or unauthorized access</li>
                                    <li>To comply with legal, regulatory, and audit requirements</li>
                                </ul>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">3. Cookies and Usage Data</h5>
                                <p class="mt-4">We use cookies, browser storage, and similar technologies to support session continuity, remember preferences, measure feature usage, and understand how visitors interact with the site. You can adjust browser-level controls, but some features may not work properly if these tools are disabled.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">4. Information Sharing</h5>
                                <p>We do not sell your personal information. We may share information with trusted service providers, infrastructure partners, payment or custody partners, compliance vendors, and regulators where disclosure is required or reasonably necessary to operate the platform.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">5. Data Security</h5>
                                <p>We use administrative, technical, and organizational safeguards designed to protect account data from unauthorized access, misuse, and disclosure. No system is completely secure, but we continuously monitor and improve our controls.</p>
                                <ul class="ul-dots mt-5 d-flex gap-3 flex-column">
                                    <li>Access controls and authenticated account workflows</li>
                                    <li>Operational monitoring and internal review processes</li>
                                    <li>Vendor and partner controls appropriate to the service provided</li>
                                </ul>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">6. Your Choices</h5>
                                <ul class="ul-dots mt-5 d-flex gap-3 flex-column">
                                    <li>Access and update your personal information</li>
                                    <li>Opt out of non-essential communications where applicable</li>
                                    <li>Request account closure subject to legal and operational retention obligations</li>
                                </ul>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">7. Changes to This Policy</h5>
                                <p>We may update this Privacy Policy from time to time to reflect operational, legal, or product changes. When updates are material, we may provide notice through the platform or by email.</p>
                            </div>
                            <div class="privacy-policy__part">
                                <h5 class="mb-4">8. Contact Us</h5>
                                <p>If you have questions about this Privacy Policy or how your data is handled, contact us at <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a>.</p>
                                <p class="mt-3">By using our website or platform, you acknowledge that you have read and understood this Privacy Policy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--Privacy & Policy end -->
@endsection
