@extends('layouts.tradez', ['pageTitle' => 'Contact Us'])

@section('active-company', 'active')

@section('content')
@php
    $siteSettings = \App\Support\SiteSettings::get();
    $supportEmail = (string) ($siteSettings['support_email'] ?? 'support@yieldatlastrend.com');
    $supportPhone = (string) ($siteSettings['support_phone'] ?? '+1 329-205-9032');
@endphp
<!-- banner section start-->
    <section class="banner-section  pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Contact</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    
    <!-- Contact start -->
    <section class="contact nb4-bg pt-120 pb-120">
        <div class="container ">
            <div class="row gy-18 justify-content-between">
                <div class="col-12 col-lg-5 col-xl-5">
                    <div class="submissions-area d-flex flex-column gap-8 gap-lg-10">
                        <div class="submissions">
                            <h3>Contact our team</h3>
                            <p class="fs-six-up mt-4">Use the channels below for account access questions, verification follow-up, funding enquiries, and general platform support.</p>
                        </div>
                        <div class="contact__mail d-flex flex-column gap-5 gap-lg-6 pb-8 pb-lg-10 border-bottom border-color four">
                            <div class="d-flex align-items-center gap-3">
                                <span class="box_12 p1-bg rounded-circle d-center"><i class="ti ti-message-2 fs-four-up nb4-color"></i></span>
                                <span class="fs-six-up"><a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a></span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="box_12 p1-bg rounded-circle d-center"><i class="ti ti-phone fs-four-up nb4-color"></i></span>
                                <span class="fs-six-up"><a href="tel:{{ preg_replace('/[^0-9+]/', '', $supportPhone) }}">{{ $supportPhone }}</a></span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="box_12 p1-bg rounded-circle d-center"><i class="ti ti-map-pin fs-four-up nb4-color"></i></span>
                                <span class="fs-six-up">424 Main Street Buffalo, NY 14202 United States</span>
                            </div>
                        </div>
                        <div class="submissions">
                            <h3>How we can help</h3>
                            <ul class="d-flex gap-4 flex-column mt-7 mt-lg-8">
                                <li class="d-flex align-items-start gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Account verification and onboarding follow-up</li>
                                <li class="d-flex align-items-start gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Deposit, withdrawal, and payment-method support</li>
                                <li class="d-flex align-items-start gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Policy, privacy, and risk disclosure questions</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="contact__form alt_form px-4 px-lg-8">
                        <h3 class="contact__title mb-7 mb-md-10 mb-lg-15">Support response guide</h3>
                        <div class="d-flex gap-6 flex-column">
                            <div class="single-input">
                                <h5 class="mb-3">General support</h5>
                                <p class="fs-six-up">Email <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a> for account questions, document review, password recovery, and transaction status checks.</p>
                            </div>
                            <div class="single-input">
                                <h5 class="mb-3">Urgent enquiries</h5>
                                <p class="fs-six-up">Call <a href="tel:{{ preg_replace('/[^0-9+]/', '', $supportPhone) }}">{{ $supportPhone }}</a> for urgent account-access or funding issues that require same-day attention.</p>
                            </div>
                            <div class="single-input">
                                <h5 class="mb-3">Before you reach out</h5>
                                <ul class="ul-dots mt-4 d-flex gap-3 flex-column">
                                    <li>Include the email address on your account.</li>
                                    <li>Add any relevant transaction reference or screenshot.</li>
                                    <li>Review our <a href="/legal-docs">legal documents</a> and <a href="/faq">FAQ</a> for immediate answers.</li>
                                </ul>
                            </div>
                            <div class="pt-4">
                                <a href="mailto:{{ $supportEmail }}" class="cmn-btn py-3 px-5 px-lg-6 d-inline-flex">Email Support<i class="ti ti-arrow-up-right"></i><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <iframe class="cus-rounded-1 cus_map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5156.793422135061!2d-105.02171047857397!3d39.77899593135569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1699354709950!5m2!1sen!2sbd"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->
@endsection
