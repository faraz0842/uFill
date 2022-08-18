<!DOCTYPE html>

<html lang="de">
<!--begin::Head-->

<head>
    <base href="../../">
    <title>uFill - The eCom Solution</title>
    <meta charset="utf-8" />
    <meta name="description" content="..." />
    <meta name="keywords" content="ufill, ecom, ecommerce, software, webservice, fulfillment, shop, store" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="de_DE" />
    <meta property="og:type" content="software" />
    <meta property="og:title" content="uFill - The eCom Solution" />
    <meta property="og:url" content="https://ufill.de/" />
    <meta property="og:site_name" content="uFill" />
    <link rel="canonical" href="https://ufill.de/" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <div class="card-header ">
            <a href="{{ url('lang/en') }}" class="menu-link d-flex m-2" style="float:right;">
                <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" />
                </span></a>

            <a href="{{ url('lang/de') }}" class="menu-link d-flex m-2" style="float:right">
                <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="{{ asset('assets/media/flags/germany.svg') }}" alt="" />
                </span></a>
        </div>
        <!--begin::Authentication - Multi-steps-->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column"
            id="kt_create_account_stepper">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-500px bg-lighten shadow-sm">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-500px scroll-y">
                    <!--begin::Header-->
                    <div class="d-flex flex-row-fluid flex-column flex-center p-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="https://ufill.de/" class="mb-10 mb-lg-20" target="_blank">
                            <img alt="Logo" src="{{ asset('assets/media/logos/logo-1.png') }}" class="h-60px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Nav-->
                        <div class="stepper-nav">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ trans('message.Account Type') }}</h3>
                                    <div class="stepper-desc fw-bold">{{ trans('message.How do you work?') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ trans('message.Account Info') }}</h3>
                                    <div class="stepper-desc fw-bold">
                                        {{ trans('message.How would you like to start?') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ trans('message.Personal Data') }}</h3>
                                    <div class="stepper-desc fw-bold">{{ trans('message.We get to know you.') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ trans('message.Payment details') }}</h3>
                                    <div class="stepper-desc fw-bold">
                                        {{ trans('message.Choose your payment method.') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">5</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ trans('message.Graduation') }}</h3>
                                    <div class="stepper-desc fw-bold">{{ trans('message.Get started!') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Illustration-->
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-300px"
                        style="background-image: url(assets/media/animations/astronaut-illustration-trans2.gif)"></div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Aside-->

            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-700px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <div class="form-group m-3">
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <p><strong>Opps Something went wrong</strong></p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>


                        <form action="{{ Route('client.register.store') }}" method="post" class="my-auto pb-5"
                            enctype="multipart/form-data" name="myform" novalidate>


                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder d-flex align-items-center text-dark">
                                            {{ trans('message.Please choose…') }}
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Die Kosten sowie der Funktionsumfang sind abhängig von Ihrer Wahl."></i>
                                        </h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">
                                            {{ trans('message.See the product overview for more information on the differences . You can adjust your decision later.') }}
                                            {{-- <a href="#" class="link-primary fw-bolder" target="_blank">{{ trans('message.See the product overview for more information on the differences . You can adjust your decision later.') }}</a>. --}}
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            @foreach ($variants as $variant)
                                                <div class="col-lg-12">
                                                    <!--begin::Option-->
                                                    @if ($variant->name == 'single')
                                                        <input type="radio" class="btn-check account_type"
                                                            name="account_type"
                                                            onclick="getVariantPrice([this.value,'payment_interval'])"
                                                            value="{{ $variant->variant_id }}" checked
                                                            id="kt_create_account_form_account_type_{{ $variant->name }}" />
                                                    @else
                                                        <input type="radio" class="btn-check account_type"
                                                            name="account_type"
                                                            onclick="getVariantPrice([this.value,'payment_interval'])"
                                                            value="{{ $variant->variant_id }}"
                                                            id="kt_create_account_form_account_type_{{ $variant->name }}" />
                                                    @endif

                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10"
                                                        for="kt_create_account_form_account_type_{{ $variant->name }}">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                                        <span class="svg-icon svg-icon-3x me-5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-block fw-bold text-start">
                                                            <span
                                                                class="text-dark fw-bolder d-block fs-4 mb-2">"{{ $variant->name }}"
                                                                Account</span>
                                                            <span
                                                                class="text-muted fw-bold fs-7">{{ trans('message.You only want to manage your shipments and take advantage of our favorable conditions?.') }}.</span>
                                                            <span
                                                                class="d-block text-muted fw-bold fs-6">{{ trans('message.Price: from') }}
                                                                €{{ Helper::money_format('EUR', 'de_DE', $variant->price) }}
                                                                / {{ trans('message.month') }}</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                            @endforeach

                                            <!--end::Col-->
                                            {{-- <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="account_type" value="single" checked id="kt_create_account_form_account_type_single" />
                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_single">
														<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
														<span class="svg-icon svg-icon-3x me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
																<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--begin::Info-->
														<span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-4 mb-2">"single" Account</span>
															<span class="text-muted fw-bold fs-7">You work alone and have no other team members..</span>
															<span class="d-block text-muted fw-bold fs-6">Price: from €24.99 per month.</span>
														</span>
														<!--end::Info-->
													</label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="account_type" value="team" id="kt_create_account_form_account_type_corporate" />
                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
														<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
														<span class="svg-icon svg-icon-3x me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--begin::Info-->
														<span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-4 mb-2">"Team" Account</span>
															<span class="text-muted fw-bold fs-7">Work with your team and use all team functions.</span>
															<span class="d-block text-muted fw-bold fs-6">Price: from €29.99 / month</span>
														</span>
														<!--end::Info-->
													</label>
                                                <!--end::Option-->
                                            </div> --}}
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">{{ trans('message.Account Information') }}
                                        </h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">
                                            {{ trans('message.Need help or have a question? Our team will be happy to help you. Contact us.') }}
                                            <a href="#" class="link-primary fw-bolder"
                                                target="_blank">{{ trans('message.Contact') }}</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label
                                            class="d-flex align-items-center form-label mb-5 required">{{ trans('message.Choose payment interval') }}

                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Bitte wählen Sie den gewünschten Zahlungsinterval."></i></label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div id="payment_interval" class="mb-0">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label">
                                                            <i class="fa fa-check"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Description-->
                                                    <span class="d-flex flex-column">
                                                        <span
                                                            class="fw-bolder text-gray-800 text-hover-primary fs-5">{{ trans('message.Monthly Package') }}</span>
                                                        <span
                                                            class="fs-6 fw-bold text-muted">{{ trans('message.Your account will be charged monthly with €9,99.') }}</span>
                                                    </span>
                                                    <!--end:Description-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio"
                                                        name="account_plan" value="month" />
                                                </span>
                                                <!--end:Input-->
                                            </label>

                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label">
                                                            <i class="fa fa-check"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Description-->
                                                    <span class="d-flex flex-column">
                                                        <span
                                                            class="fw-bolder text-gray-800 text-hover-primary fs-5">{{ trans('message.Yearly Package') }}</span>
                                                        <span
                                                            class="fs-6 fw-bold text-muted">{{ trans('message.Your account will be charged yearly with €95,88.') }}</span>
                                                    </span>
                                                    <!--end:Description-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio"
                                                        name="account_plan" value="month" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->

                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            {{-- <label class="d-flex flex-stack mb-0 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label">
                                                            <i class="fa fa-percent"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Description-->
                                                    <span class="d-flex flex-column">
                                                        <span
                                                            class="fw-bolder text-gray-800 text-hover-primary fs-5">two
                                                            year package</span>
                                                        <span class="fs-6 fw-bold text-muted">Pay €599.76 once (~24.99
                                                            per month / €480 saved!) for 24 months and save 45%</span>
                                                    </span>
                                                    <!--end:Description-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="account_plan"
                                                        value="24 month" />
                                                </span>
                                                <!--end:Input-->
                                            </label> --}}
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        @csrf
                                        <input name="is_affiliate"
                                            value="ufill.devatease.com/client/register/{{ $is_affiliate }}" hidden />
                                        <!--begin::Label-->
                                        <label
                                            class="d-flex align-items-center form-label mb-3">{{ trans('message.Discount Code') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="col-md-12" style="display: inline-flex">
                                            <input type="text" id="code"
                                                class="form-control form-control-solid" style="width: 75%"
                                                name="discount_code" placeholder="Discount Code eg. AD344FD" />
                                            <a onclick="checkDiscountCode()" class="btn btn-primary"
                                                style="width: 25%; margin-left:20px">{{ trans('message.Check Code') }}</a>

                                        </div>
                                        <br>
                                        <div id="check_code_message">

                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">{{ trans('message.Shipping quantity') }}
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Bitte geben Sie Ihre mtl. Versandmenge an. Sie können Ihre Auswahl später ändern."></i></label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="shipping_quantity"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Bitte wählen..."
                                            data-allow-clear="true" data-hide-search="true" required>
                                            <option value="0-50">0 - 50 {{ trans('message.pcs.') }} /
                                                {{ trans('message.monthly') }}</option>
                                            <option value="50-500" selected>50 - 500 {{ trans('message.pcs.') }} /
                                                {{ trans('message.monthly') }}</option>
                                            <option value="500-2000">500 - 2000 {{ trans('message.pcs.') }} /
                                                {{ trans('message.monthly') }}</option>
                                            <option value="ab-2000">ab 2000 {{ trans('message.pcs.') }} /
                                                {{ trans('message.monthly') }}</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">
                                            {{ trans('message.Your personal information') }}</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">
                                            {{ trans('message.Need help or have a question? Our team will be happy to help you. Contact us.') }}
                                            <a href="#" class="link-primary fw-bolder"
                                                target="_blank">{{ trans('message.Contact') }}</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span>{{ trans('message.Company logo') }}</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title=""
                                                data-bs-original-title="{{ trans('message.Allowed formats: png, jpg, jpeg') }}"
                                                aria-label="{{ trans('message.Allowed formats: png, jpg, jpeg') }}"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Image input wrapper-->
                                        <div class="mt-1">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url(assets/media/avatars/blank.png)">
                                                </div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Edit-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Profilbild wechseln">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="company_logo"
                                                        accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="{{ trans('message.Change logo') }}">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="{{ trans('message.Remove logo') }}">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                        </div>
                                        <!--end::Image input wrapper-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">{{ trans('message.Company name') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="company_name"
                                            class="form-control form-control-lg form-control-solid" value=""
                                            placeholder="Mustermann GmbH" required />

                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Row-->
                                    <div class="fv-row mb-10">
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Label-->
                                                <label
                                                    class="form-label required">{{ trans('message.First name') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="first_name"
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="" placeholder="Max" required />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Label-->
                                                <label
                                                    class="form-label required">{{ trans('message.Last name') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="last_name"
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="" placeholder="Mustermann" required />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="fv-row mb-10">
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-8">
                                                <!--begin::Label-->
                                                <label
                                                    class="form-label required">{{ trans('message.Street') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="street"
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="" placeholder="Musterweg" required />

                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label
                                                    class="form-label required">{{ trans('message.House number') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="house_number"
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="" placeholder="1a" required />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="fv-row mb-10">
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label
                                                    class="form-label required">{{ trans('message.Zip Code') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="number" name="plz"
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="" placeholder="49123" required />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-8">
                                                <!--begin::Label-->
                                                <label
                                                    class="form-label required">{{ trans('message.State') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="state"
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="" placeholder="Musterhausen" required />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2 ">
                                            <span>{{ trans('message.Country') }}</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="country" aria-label="Select..." data-control="select2"
                                            data-placeholder="Select..." class="form-select form-select-solid">
                                            <option value="">
                                                {{ trans('message.Please choose') }}...</option>
                                            <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan
                                            </option>
                                            <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland
                                                Islands</option>
                                            <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                            <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                            <option data-kt-flag="flags/american-samoa.svg" value="AS">American
                                                Samoa</option>
                                            <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                            <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                            <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                            <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">
                                                Antigua and Barbuda</option>
                                            <option data-kt-flag="flags/argentina.svg" value="AR">Argentina
                                            </option>
                                            <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                            <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                            <option data-kt-flag="flags/australia.svg" value="AU">Australia
                                            </option>
                                            <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                            <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan
                                            </option>
                                            <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                            <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                            <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh
                                            </option>
                                            <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                            <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                            <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                            <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                            <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                            <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                            <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                            <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia,
                                                Plurinational State of</option>
                                            <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint
                                                Eustatius and Saba</option>
                                            <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">
                                                Bosnia and Herzegovina</option>
                                            <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                            <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                            <option data-kt-flag="flags/british-indian-ocean-territory.svg"
                                                value="IO">British Indian Ocean Territory</option>
                                            <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam
                                            </option>
                                            <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                            <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso
                                            </option>
                                            <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                            <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                            <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                            <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                            <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde
                                            </option>
                                            <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman
                                                Islands</option>
                                            <option data-kt-flag="flags/central-african-republic.svg" value="CF">
                                                Central African Republic</option>
                                            <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                            <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                            <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                            <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas
                                                Island</option>
                                            <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos
                                                (Keeling) Islands</option>
                                            <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                            <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                            <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands
                                            </option>
                                            <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica
                                            </option>
                                            <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire
                                            </option>
                                            <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                            <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                            <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                            <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech
                                                Republic</option>
                                            <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                            <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                            <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                            <option data-kt-flag="flags/dominican-republic.svg" value="DO">
                                                Dominican Republic</option>
                                            <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                            <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                            <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador
                                            </option>
                                            <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">
                                                Equatorial Guinea</option>
                                            <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                            <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                            <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                            <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland
                                                Islands (Malvinas)</option>
                                            <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                            <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                            <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                            <option data-kt-flag="flags/french-polynesia.svg" value="PF">French
                                                Polynesia</option>
                                            <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                            <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                            <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                            <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                            <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                            <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar
                                            </option>
                                            <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                            <option data-kt-flag="flags/greenland.svg" value="GL">Greenland
                                            </option>
                                            <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                            <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                            <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala
                                            </option>
                                            <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                            <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                            <option data-kt-flag="flags/guinea-bissau.svg" value="GW">
                                                Guinea-Bissau</option>
                                            <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                            <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See
                                                (Vatican City State)</option>
                                            <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                            <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong
                                            </option>
                                            <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                            <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                            <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                            <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia
                                            </option>
                                            <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic
                                                Republic of</option>
                                            <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                            <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                            <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man
                                            </option>
                                            <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                            <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                            <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                            <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                            <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                            <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                            <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan
                                            </option>
                                            <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                            <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                            <option data-kt-flag="flags/north-korea.svg" value="KP">Korea,
                                                Democratic People's Republic of</option>
                                            <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                            <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan
                                            </option>
                                            <option data-kt-flag="flags/laos.svg" value="LA">Lao People's
                                                Democratic Republic</option>
                                            <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                            <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                            <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                            <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                            <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                            <option data-kt-flag="flags/liechtenstein.svg" value="LI">
                                                Liechtenstein</option>
                                            <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania
                                            </option>
                                            <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg
                                            </option>
                                            <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                            <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar
                                            </option>
                                            <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                            <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                            <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                            <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                            <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                            <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall
                                                Islands</option>
                                            <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique
                                            </option>
                                            <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania
                                            </option>
                                            <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius
                                            </option>
                                            <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                            <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia,
                                                Federated States of</option>
                                            <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic
                                                of</option>
                                            <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                            <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                            <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro
                                            </option>
                                            <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat
                                            </option>
                                            <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                            <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique
                                            </option>
                                            <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                            <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                            <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                            <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                            <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands
                                            </option>
                                            <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand
                                            </option>
                                            <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua
                                            </option>
                                            <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                            <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                            <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                            <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk
                                                Island</option>
                                            <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">
                                                Northern Mariana Islands</option>
                                            <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                            <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                            <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                            <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                            <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian
                                                Territory, Occupied</option>
                                            <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                            <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New
                                                Guinea</option>
                                            <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                            <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                            <option data-kt-flag="flags/philippines.svg" value="PH">Philippines
                                            </option>
                                            <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                            <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                            <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico
                                            </option>
                                            <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                            <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                            <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation
                                            </option>
                                            <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                            <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy
                                            </option>
                                            <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">
                                                Saint Kitts and Nevis</option>
                                            <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia
                                            </option>
                                            <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin
                                                (French part)</option>
                                            <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg"
                                                value="VC">Saint Vincent and the Grenadines</option>
                                            <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                            <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino
                                            </option>
                                            <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao
                                                Tome and Principe</option>
                                            <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia
                                            </option>
                                            <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                            <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                            <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles
                                            </option>
                                            <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone
                                            </option>
                                            <option data-kt-flag="flags/singapore.svg" value="SG">Singapore
                                            </option>
                                            <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten
                                                (Dutch part)</option>
                                            <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                            <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                            <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon
                                                Islands</option>
                                            <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                            <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa
                                            </option>
                                            <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea
                                            </option>
                                            <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan
                                            </option>
                                            <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                            <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka
                                            </option>
                                            <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                            <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                            <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland
                                            </option>
                                            <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                            <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland
                                            </option>
                                            <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic
                                            </option>
                                            <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of
                                                China</option>
                                            <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan
                                            </option>
                                            <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United
                                                Republic of</option>
                                            <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                            <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                            <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                            <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                            <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">
                                                Trinidad and Tobago</option>
                                            <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                            <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                            <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan
                                            </option>
                                            <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and
                                                Caicos Islands</option>
                                            <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                            <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                            <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                            <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">
                                                United Arab Emirates</option>
                                            <option data-kt-flag="flags/united-kingdom.svg" value="GB">United
                                                Kingdom</option>
                                            <option data-kt-flag="flags/united-states.svg" value="US">United
                                                States</option>
                                            <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                            <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan
                                            </option>
                                            <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                            <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela,
                                                Bolivarian Republic of</option>
                                            <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                            <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin
                                                Islands</option>
                                            <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                            <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                            <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                                        </select>
                                        @if ($errors->has('country'))
                                            <div class="text-danger">{{ $errors->first('country') }}</div>
                                        @endif
                                        <!--end::Input-->
                                    </div>
                                    <!--begin::Row-->
                                    <div class="fv-row mb-10">
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Label-->
                                                <label
                                                    class="form-label required">{{ trans('message.Telephone') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="tel" name="telephone"
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="" placeholder="+49 5451 123 456 7" required />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Label-->
                                                <label class="form-label">{{ trans('message.Mobile number') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="tel" name="mobile_number"
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="" placeholder="+49 171 123 456 7" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">{{ trans('message.E-Mail') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="email"
                                            class="form-control form-control-lg form-control-solid" value=""
                                            placeholder="max@mustermann-gmbh.de" required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Row-->
                                    <div class="fv-row mb-10">
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Label-->
                                                <label class="form-label">{{ trans('message.VAT ID no.') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="vat_id"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="DE123456789" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Label-->
                                                <label
                                                    class="form-label">{{ trans('message.Registration number') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="registration_number"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="HRB123456" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">{{ trans('message.Website') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="website"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="www.mustermann-gmbh.de" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">{{ trans('message.Company size') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="company_size"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Bitte wählen..."
                                            data-allow-clear="true" data-hide-search="true">
                                            <option></option>
                                            <option value="1">1 Person</option>
                                            <option value="2-10">2-10 Personen</option>
                                            <option value="11-50">11-50 Personen</option>
                                            <option value="50+">50+ Personen</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--end::Label-->
                                        <label class="form-label">{{ trans('message.Company description') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea name="company_description" class="form-control form-control-lg form-control-solid" rows="5"
                                            placeholder="{{ trans('message.Please let us know briefly in which area your company operates and which products you sell.') }}"></textarea>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">{{ trans('message.Payment details') }}</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">
                                            {{ trans('message.You can later edit your payment details and payment method in your account settings For a secure and uncomplicated payment, all transactions are processed via Stripe.') }}
                                            {{-- <a href="#" class="text-primary fw-bolder" target="_blank">account
                                                settings</a> For a secure and uncomplicated payment, all transactions
                                            are processed via
                                            <a href="#" class="text-primary fw-bolder"
                                                target="_blank">Stripe</a> --}}
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{ trans('message.Cardholders') }}</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Bitte geben Sie den vollständigen Namen an."></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Max Mustermann" name="card_name" value="" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label
                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Card number') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="4111 1111 1111 1111" name="card_number"
                                                value="" />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="{{ asset('assets/media/svg/card-logos/visa.svg') }}"
                                                    alt="" class="h-25px" />
                                                <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}"
                                                    alt="" class="h-25px" />
                                                <img src="{{ asset('assets/media/svg/card-logos/american-express.svg') }}"
                                                    alt="" class="h-25px" />
                                            </div>
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Label-->
                                            <label
                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Date of Expiry') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month"
                                                        class="form-select form-select-solid" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Month">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Input-->
                                                    <input type="number" name="card_expiry_year"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="2024" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                    data-bs-toggle="tooltip"
                                                    title="Bitte 3 stelligen Code eintragen."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    minlength="3" maxlength="4" placeholder="CVV"
                                                    name="card_cvv" />
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                    <span class="svg-icon svg-icon-2hx">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M22 7H2V11H22V7Z" fill="black" />
                                                            <path opacity="0.3"
                                                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="me-5">
                                            <label
                                                class="fs-6 fw-bold form-label">{{ trans('message.Approval of the debit') }}</label>
                                            <div class="fs-7 fw-bold text-muted">
                                                {{ trans('message.I confirm the purchase and agree to the payment.') }}
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                            <span
                                                class="form-check-label fw-bold text-muted">{{ trans('message.Accept.') }}</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">{{ trans('message.Almost there!') }}</h2>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label
                                            class="form-label">{{ trans('message.How did you hear about us?') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="hear_about_us"
                                            class="form-control form-control-lg form-control-solid" value=""
                                            placeholder="{{ trans('message.eg. Advertising') }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Text-->
                                        <div class="fs-6 text-gray-600 mb-5">
                                            {{ trans("message.To complete your registration, please click on 'Get Started'. The system then checks your data and prepares everything for your start. Please be patient and do not close your browser window. You will be logged in automatically. You will also receive an email to activate the account and set your password. We wish you every success and thank you for choosing uFill!") }}
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Alert-->
                                        <!--begin::Notice-->
                                        <div
                                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2"
                                                        width="20" height="20" rx="10"
                                                        fill="black" />
                                                    <rect x="11" y="14" width="7"
                                                        height="2" rx="1" transform="rotate(-90 11 14)"
                                                        fill="black" />
                                                    <rect x="11" y="17" width="2"
                                                        height="2" rx="1" transform="rotate(-90 11 17)"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-bold">
                                                    <h4 class="text-gray-900 fw-bolder">
                                                        {{ trans('message.Please note!') }}</h4>
                                                    <div class="fs-6 text-gray-700">
                                                        {{ trans('message.We ask for your understanding that the initial setup of your account may take a moment. Should there be any problems, your personal contact person will be happy to assist you. Thank you very much.') }}
                                                    </div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Alert-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-15">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="11" width="13"
                                                    height="2" rx="1" fill="black" />
                                                <path
                                                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->{{ trans('message.Previous Step') }}
                                    </button>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="submit">
                                        <span class="indicator-label">{{ trans('message.Lets Go') }}.
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-4 ms-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13"
                                                        width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="black" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="indicator-progress">{{ trans('message.cancel') }}...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="next">{{ trans('message.Next Step') }}
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-4 ms-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13"
                                                    width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="black" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </div>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-bold fs-6">
                        <a href="https://ufill.de" class="text-muted text-hover-primary px-2"
                            target="_blank">{{ trans('message.Home page') }}</a>
                        <a href="https://ufill.de/rechtliches" class="text-muted text-hover-primary px-2"
                            target="_blank">{{ trans('message.Legal') }}</a>
                        <a href="https://ufill.de/agb" class="text-muted text-hover-primary px-2"
                            target="_blank">{{ trans('message.agb') }}</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Multi-steps-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/utilities/modals/create-account.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('assets/js/custom/utilities/modals/create-account.js') }}"></script>
<!--end::Page Custom Javascript-->
<script>
    //  inputValue = document.querySelector('input[name=account_type]').value
    // console.log(inputValue);

    function getVariantPrice(arr) {

        console.log(arr[0]);

        $("#" + arr[1]).html('');
        $.ajax({
            url: "{{ Route('client.update.product') }}",
            type: "GET",
            data: {
                value: arr[0]
            },
            success: function(result) {
                // console.log(result);
                $.each(result, function(key, value) {
                    console.log(result);
                    $("#" + arr[1]).append(
                        '<label class="d-flex flex-stack mb-5 cursor-pointer">' +
                        '<span class="d-flex align-items-center me-2">' +
                        '<span class="symbol symbol-50px me-6">' +
                        '<span class="symbol-label">' +
                        '<i class="fa fa-check"></i>' +
                        '</span>' +
                        '</span>' +
                        '<span id="payment_interval" class="d-flex flex-column">' +
                        '<span class="fw-bolder text-gray-800 text-hover-primary fs-5">' + value
                        .plan + 'ly Package</span>' +
                        '<span class="fs-6 fw-bold text-muted">Your account will be charged ' +
                        value.plan + 'ly with €' + value.price + '.</span>' +
                        '</span>' +
                        '</span>' +
                        '<span class="form-check form-check-custom form-check-solid">' +
                        '<input class="form-check-input" type="radio" name="account_plan" value="' +
                        value.plan + '" />' +
                        '</span>' +
                        '</label>'
                    );
                });
            }
        });
    }
</script>

<script>
    //hiding the success text



    function checkDiscountCode() {

        var variant_id = document.getElementsByClassName('account_type')[0].value;
        var code = document.getElementById("code").value;
        console.log(variant_id);

        $.ajax({
            url: "{{ Route('client.check.discount') }}",
            method: "GET",
            data: {
                value: code,
                variant_id: variant_id,
            },
            success: function(result) {
                if (result != "") {
                    console.log(result);
                    if (result.percent == null) {
                        $("#check_code_message").append(
                            '<h5 class="text-success" id="valid" style="margin-top: 12px; margin-left:8px">{{ trans('message.Discount successfully applied. You will receive a one-time discount of') }} ' +
                            result.price + '€</h5>'
                        );
                    } else {
                        $("#check_code_message").append(
                            '<h5 class="text-success" id="valid" style="margin-top: 12px; margin-left:8px">{{ trans('message.Discount successfully applied. You will receive a one-time discount of') }} ' +
                            result.percent + '%</h5>'
                        );
                    }

                    $('#not_valid').hide();

                } else {

                    $("#check_code_message").append(
                        '<h5 class="text-danger" id="not_valid" style="margin-top: 12px; margin-left:8px">{{ trans('message.Error! Code has expired. Please try a different discount code! ') }}</h5>'
                    );

                    $('#valid').hide();
                }

            }
        })

    }
</script>
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
