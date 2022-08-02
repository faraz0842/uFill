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
        <div class="card-header " >
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
                                    <div class="stepper-desc fw-bold">{{ trans('message.How would you like to start?') }}</div>
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
                                    <div class="stepper-desc fw-bold">{{ trans('message.Choose your payment method.') }}</div>
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
                                        <h2 class="fw-bolder d-flex align-items-center text-dark">{{ trans('message.Please choose…') }}
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Die Kosten sowie der Funktionsumfang sind abhängig von Ihrer Wahl."></i>
                                        </h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">{{ trans('message.See the product overview for more information on the differences . You can adjust your decision later.') }}
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
                                                        <input type="radio" class="btn-check account_type" name="account_type"
                                                            onclick="getVariantPrice([this.value,'payment_interval'])"
                                                            value="{{ $variant->variant_id }}" checked
                                                            id="kt_create_account_form_account_type_{{ $variant->name }}" />
                                                    @else
                                                        <input type="radio" class="btn-check account_type" name="account_type"
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
                                                            <span class="text-muted fw-bold fs-7">{{ trans('message.You only want to manage your shipments and take advantage of our favorable conditions?.') }}.</span>
                                                            <span class="d-block text-muted fw-bold fs-6">{{ trans('message.Price: from') }}
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
                                        <h2 class="fw-bolder text-dark">{{ trans('message.Account Information') }}</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">{{ trans('message.Need help or have a question? Our team will be happy to help you. Contact us.') }}
                                            <a href="#" class="link-primary fw-bolder"
                                                target="_blank">{{ trans('message.Contact') }}</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label mb-5 required">{{ trans('message.Choose payment interval') }}

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
                                                        <span class="fs-6 fw-bold text-muted">{{ trans('message.Your account will be charged monthly with €9,99.') }}</span>
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
                                                        <span class="fs-6 fw-bold text-muted">{{ trans('message.Your account will be charged yearly with €95,88.') }}</span>
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
                                    <div class="mb-10 fv-row" >
                                        @csrf
                                        <input name="is_affiliate"
                                            value="ufill.swamenterprises.com/client/register/{{ $is_affiliate }}"
                                            hidden />
                                        <!--begin::Label-->
                                        <label
                                            class="d-flex align-items-center form-label mb-3">{{ trans('message.Discount Code') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="col-md-12" style="display: inline-flex">
                                            <input type="text" id="code" class="form-control form-control-solid" style="width: 75%"
                                                name="discount_code" placeholder="Discount Code eg. AD344FD" />
                                            <a onclick="checkDiscountCode()" class="btn btn-primary" style="width: 25%; margin-left:20px">{{ trans('message.Check Code') }}</a>

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
                                            <option value="0-50">0 - 50 {{ trans('message.pcs.') }} / {{ trans('message.monthly') }}</option>
                                            <option value="50-500" selected>50 - 500 {{ trans('message.pcs.') }} / {{ trans('message.monthly') }}</option>
                                            <option value="500-2000">500 - 2000 {{ trans('message.pcs.') }} / {{ trans('message.monthly') }}</option>
                                            <option value="ab-2000">ab 2000 {{ trans('message.pcs.') }} / {{ trans('message.monthly') }}</option>
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
                                        <h2 class="fw-bolder text-dark">{{ trans('message.Your personal information') }}</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">{{ trans('message.Need help or have a question? Our team will be happy to help you. Contact us.') }}
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
                                                data-bs-original-title="{{trans('message.Allowed formats: png, jpg, jpeg')}}"
                                                aria-label="{{trans('message.Allowed formats: png, jpg, jpeg')}}"></i>
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
                                                    title="" data-bs-original-title="{{trans('message.Change logo')}}">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="{{trans('message.Remove logo')}}">
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
                                                <label class="form-label required">{{ trans('message.First name') }}</label>
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
                                                <label class="form-label required">{{ trans('message.Last name') }}</label>
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
                                                <label class="form-label required">{{ trans('message.Street') }}</label>
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
                                                <label class="form-label required">{{ trans('message.House number') }}</label>
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
                                                <label class="form-label required">{{ trans('message.Zip Code') }}</label>
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
                                                <label class="form-label required">{{ trans('message.State') }}</label>
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
                                            <option value=""
                                                        >
                                                        {{ trans('message.Please choose') }}...</option>
                                                    <option value="Afghanistan">
                                                        Afghanistan</option>
                                                    <option value="Aland Islands"\>Aland
                                                        Islands</option>
                                                    <option value="Albania">Albania
                                                    </option>
                                                    <option value="Algeria">Algeria
                                                    </option>
                                                    <option value="American Samoa">
                                                        American Samoa</option>
                                                    <option value="Andorra">Andorra
                                                    </option>
                                                    <option value="Angola"Angola
                                                    </option>
                                                    <option value="Anguilla">Anguilla
                                                    </option>
                                                    <option value="Antigua and Barbuda">
                                                        Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina
                                                    </option>
                                                    <option value="Armenia">Armenia
                                                    </option>>Aruba
                                                    </option>
                                                    <option value="Australia">Australia
                                                    </option>
                                                    <option value="Austria">Austria
                                                    </option>
                                                    <option value="Azerbaijan">
                                                        Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas
                                                    </option>
                                                    <option value="Bahrain">Bahrain
                                                    </option>
                                                    <option value="Bangladesh">
                                                        Bangladesh</option>
                                                    <option value="Barbados">Barbados
                                                    </option>
                                                    <option value="Belarus">Belarus
                                                    </option>
                                                    <option value="Belgium">Belgium
                                                    </option>
                                                    <option value="Belize">Belize
                                                    </option>
                                                    <option value="Benin">Benin
                                                    </option>
                                                    <option value="Bermuda">Bermuda
                                                    </option>
                                                    <option value="Bhutan">Bhutan
                                                    </option>
                                                    <option value="Bolivia, Plurinational State of">
                                                        Bolivia, Plurinational State of</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba">
                                                        Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina">
                                                        Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana
                                                    </option>
                                                    <option value="Brazil">Brazil
                                                    </option>
                                                    <option value="British Indian Ocean Territory">
                                                        British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">
                                                        Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria
                                                    </option>
                                                    <option value="Burkina Faso">
                                                        Burkina Faso</option>
                                                    <option value="Burundi">Burundi
                                                    </option>
                                                    <option value="Cambodia">Cambodia
                                                    </option>
                                                    <option value="Cameroon">Cameroon
                                                    </option>
                                                    <option value="Canada">Canada
                                                    </option>
                                                    <option value="Cape Verde">Cape
                                                        Verde</option>
                                                    <option value="Cayman Islands">
                                                        Cayman Islands</option>
                                                    <option value="Central African Republic">
                                                        Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile
                                                    </option>
                                                    <option value="China">China
                                                    </option>
                                                    <option value="Christmas Island">
                                                        Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">
                                                        Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia
                                                    </option>
                                                    <option value="Comoros">Comoros
                                                    </option>
                                                    <option value="Cook Islands">Cook
                                                        Islands</option>
                                                    <option value="Costa Rica">Costa
                                                        Rica</option>
                                                    <option value="Côte d Ivoire">Côte
                                                        d'Ivoire</option>
                                                    <option value="Croatia">Croatia
                                                    </option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Curaçao">Curaçao
                                                    </option>
                                                    <option value="Czech Republic">
                                                        Czech Republic</option>
                                                    <option value="Denmark">Denmark
                                                    </option>
                                                    <option value="Djibouti">Djibouti
                                                    </option>
                                                    <option value="Dominica">Dominica
                                                    </option>
                                                    <option value="Dominican Republic">
                                                        Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador
                                                    </option>
                                                    <option value="Egypt">Egypt
                                                    </option>
                                                    <option value="El Salvador">El
                                                        Salvador</option>
                                                    <option value="Equatorial Guinea">
                                                        Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea
                                                    </option>
                                                    <option value="Estonia">Estonia
                                                    </option>
                                                    <option value="Ethiopia"}>Ethiopia
                                                    </option>
                                                    <option value="Falkland Islands (Malvinas)">
                                                        Falkland Islands (Malvinas)</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland
                                                    </option>
                                                    <option value="France">France
                                                    </option>
                                                    <option value="French Polynesia">
                                                        French Polynesia</option>
                                                    <option value="Gabon">Gabon
                                                    </option>
                                                    <option value="Gambia">Gambia
                                                    </option>
                                                    <option value="Georgia">Georgia
                                                    </option>
                                                    <option value="Germany">Germany
                                                    </option>
                                                    <option value="Ghana">Ghana
                                                    </option>
                                                    <option value="Gibraltar">Gibraltar
                                                    </option>
                                                    <option value="Greece">Greece
                                                    </option>
                                                    <option value="Greenland">Greenland
                                                    </option>
                                                    <option value="Grenada">Grenada
                                                    </option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala
                                                    </option>
                                                    <option value="Guernsey">Guernsey
                                                    </option>
                                                    <option value="Guinea">Guinea
                                                    </option>
                                                    <option value="Guinea-Bissau">
                                                        Guinea-Bissau</option>
                                                    <option value="Haiti">Haiti
                                                    </option>
                                                    <option value="Holy See (Vatican City State)">
                                                        Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras
                                                    </option>
                                                    <option value="Hong Kong">Hong Kong
                                                    </option>
                                                    <option value="Hungary">Hungary
                                                    </option>
                                                    <option value="Iceland">Iceland
                                                    </option>
                                                    <option value="India">India
                                                    </option>
                                                    <option value="Indonesia">Indonesia
                                                    </option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland
                                                    </option>
                                                    <option value="Isle of Man">Isle of
                                                        Man</option>
                                                    <option value="Israel">Israel
                                                    </option>
                                                    <option value="Italy"
                                                        >Italy
                                                    </option>
                                                    <option value="Jamaica"
                                                        : >Jamaica
                                                    </option>
                                                    <option value="Japan"
                                                        >Japan
                                                    </option>
                                                    <option value="Jersey"
                                                         >Jersey
                                                    </option>
                                                    <option value="Jordan"
                                                         >Jordan
                                                    </option>
                                                    <option value="Kazakhstan">
                                                        Kazakhstan</option>
                                                    <option value="Kenya"
                                                        >Kenya
                                                    </option>
                                                    <option value="Kiriba >Kiribati">
                                                    </option>
                                                    <option value="Korea">Korea
                                                    </option>
                                                    <option value="Kuwait"
                                                         >Kuwait
                                                    </option>
                                                    <option value="Kyrgyzstan">
                                                        Kyrgyzstan</option>
                                                    <option value="Lao Peoples Democratic Republic">
                                                        Lao People's Democratic Republic</option>
                                                    <option value="Latvia"
                                                         >Latvia
                                                    </option>
                                                    <option value="Lebanon">Lebanon
                                                    </option>
                                                    <option value="Lesotho">Lesotho
                                                    </option>
                                                    <option value="Liberia">Liberia
                                                    </option>
                                                    <option value="Libya">Libya
                                                    </option>
                                                    <option value="Liechtenstein">
                                                        Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania
                                                    </option>
                                                    <option value="Luxembourg">
                                                        Luxembourg</option>
                                                    <option value="Macao">Macao
                                                    </option>
                                                    <option value="Madagascar">
                                                        Madagascar</option>
                                                    <option value="Malawi">Malawi
                                                    </option>
                                                    <option value="Malaysia">Malaysia
                                                    </option>
                                                    <option value="Maldives">Maldives
                                                    </option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta
                                                    </option>
                                                    <option value="Marshall Islands">
                                                        Marshall Islands</option>
                                                    <option>
                                                        Mauritania</option>
                                                    <option value="Mauritius">Mauritius
                                                    </option>
                                                    <option value="Mexico">Mexico
                                                    </option>
                                                    <option value="Micronesia">
                                                        Micronesia</option>
                                                    <option value="Moldova">Moldova
                                                    </option>
                                                    <option value="Monaco">Monaco
                                                    </option>
                                                    <option value="Mongolia">Mongolia
                                                    </option>
                                                    <option value="Montenegro">
                                                        Montenegro</option>
                                                    <option value="Montserrat">
                                                        Montserrat</option>
                                                    <option value="Morocco">Morocco
                                                    </option>
                                                    <option value="Mozambique">
                                                        Mozambique</option>
                                                    <option value="Myanmar">Myanmar
                                                    </option>
                                                    <option value="Namibia">Namibia
                                                    </option>
                                                    <option value="Nauru">Nauru
                                                    </option>
                                                    <option value="Nepal">Nepal
                                                    </option>
                                                    <option value="Netherlands">
                                                        Netherlands</option>
                                                    <option value="New Zealand">New
                                                        Zealand</option>
                                                    <option value="Nicaragua">Nicaragua
                                                    </option>
                                                    <option value="Niger">Niger
                                                    </option>
                                                    <option value="Nigeria">Nigeria
                                                    </option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">
                                                        Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">
                                                        Northern Mariana Islands</option>
                                                    <option value="Norway">Norway
                                                    </option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan"Pakistan
                                                    </option>
                                                    <option value="Palau">Palau
                                                    </option>
                                                    <option value="Palestinian Territory, Occupied">
                                                        Palestinian Territory, Occupied</option>
                                                    <option value="Panama">Panama
                                                    </option>
                                                    <option value="Papua New Guinea">
                                                        Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay
                                                    </option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">
                                                        Philippines</option>
                                                    <option value="Poland">Poland
                                                    </option>
                                                    <option value="Portugal">Portugal
                                                    </option>
                                                    <option value="Puerto Rico">Puerto
                                                        Rico</option>
                                                    <option value="Qatar">Qatar
                                                    </option>
                                                    <option value="Romania">Romania
                                                    </option>
                                                    <option value="Russian Federation">
                                                        Russian Federation</option>
                                                    <option value="Rwanda">Rwanda
                                                    </option>
                                                    <option value="Saint Barthélemy">
                                                        Saint Barthélemy</option>
                                                    <option value="Saint Kitts and Nevis">
                                                        Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint
                                                        Lucia</option>
                                                    <option value="Saint Martin (French part)">
                                                        Saint Martin (French part)</option>
                                                    <option value="Saint Vincent and the Grenadines">
                                                        Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa
                                                    </option>
                                                    <option value="San Marino">San
                                                        Marino</option>
                                                    <option value="Sao Tome and Principe">
                                                        Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi
                                                        Arabia</option>
                                                    <option value="Senegal">Senegal
                                                    </option>
                                                    <option value="Serbia">Serbia
                                                    </option>
                                                    <option value="Seychelles">
                                                        Seychelles</option>
                                                    <option value="Sierra Leone">Sierra
                                                        Leone</option>
                                                    <option value="Singapore">Singapore
                                                    </option>
                                                    <option value="Sint Maarten (Dutch part)">
                                                        Sint Maarten (Dutch part)</option>
                                                    <option value="Slovakia">Slovakia
                                                    </option>
                                                    <option value="Slovenia">Slovenia
                                                    </option>
                                                    <option value="Solomon Islands">
                                                        Solomon Islands</option>
                                                    <option value="Somalia">Somalia
                                                    </option>
                                                    <option value="South Africa">South
                                                        Africa</option>
                                                    <option value="South Korea">South
                                                        Korea</option>
                                                    <option value="South Sudan">South
                                                        Sudan</option>
                                                    <option value="Spain">Spain
                                                    </option>
                                                    <option value="Sri Lanka">Sri Lanka
                                                    </option>
                                                    <option value="Sudan">Sudan
                                                    </option>
                                                    <option value="Suriname">Suriname
                                                    </option>
                                                    <option value="Swaziland">Swaziland
                                                    </option>
                                                    <option value="Sweden">Sweden
                                                    </option>
                                                    <option value="Switzerland">
                                                        Switzerland</option>
                                                    <option value="Syrian Arab Republic">
                                                        Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China">
                                                        Taiwan, Province of China</option>
                                                    <option value="Tajikistan">
                                                        Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">
                                                        Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand
                                                    </option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau
                                                    </option>
                                                    <option value="Tonga">Tonga
                                                    </option>
                                                    <option value="Trinidad and Tobago">
                                                        Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia
                                                    </option>
                                                    <option value="Turkey">Turkey
                                                    </option>
                                                    <option value="Turkmenistan">
                                                        Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">
                                                        Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu
                                                    </option>
                                                    <option value="Uganda">Uganda
                                                    </option>
                                                    <option value="Ukraine">Ukraine
                                                    </option>
                                                    <option value="United Arab Emirates">
                                                        United Arab Emirates</option>
                                                    <option value="United Kingdom">
                                                        United Kingdom</option>
                                                    <option value="United States">
                                                        United States</option>
                                                    <option value="Uruguay">Uruguay
                                                    </option>
                                                    <option value="Uzbekistan">
                                                        Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu
                                                    </option>
                                                    <option value="Venezuela, Bolivarian Republic of">
                                                        Venezuela, Bolivarian Republic of</option>
                                                    <option value="Vietnam">Vietnam
                                                    </option>
                                                    <option value="Yemen">Yemen
                                                    </option>
                                                    <option value="Zambia">Zambia
                                                    </option>
                                                    <option value="Zimbabwe">Zimbabwe
                                                    </option>
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
                                                <label class="form-label required">{{ trans('message.Telephone') }}</label>
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
                                                <label class="form-label">{{ trans('message.Registration number') }}</label>
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
                                        <input type="text" name="url"
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
                                            placeholder="{{trans('message.Please let us know briefly in which area your company operates and which products you sell.')}}"></textarea>
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
                                        <div class="text-muted fw-bold fs-6">{{ trans('message.You can later edit your payment details and payment method in your account settings For a secure and uncomplicated payment, all transactions are processed via Stripe.') }}
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
                                        <label class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Card number') }}</label>
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
                                            <label class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Date of Expiry') }}</label>
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
                                            <label class="fs-6 fw-bold form-label">{{ trans('message.Approval of the debit') }}</label>
                                            <div class="fs-7 fw-bold text-muted">{{ trans('message.I confirm the purchase and agree to the payment.') }}</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                            <span class="form-check-label fw-bold text-muted">{{ trans('message.Accept.') }}</span>
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
                                        <label class="form-label">{{ trans('message.How did you hear about us?') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="hear_about_us"
                                            class="form-control form-control-lg form-control-solid" value=""
                                            placeholder="{{trans('message.eg. Advertising')}}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Text-->
                                        <div class="fs-6 text-gray-600 mb-5">{{ trans("message.To complete your registration, please click on 'Get Started'. The system then checks your data and prepares everything for your start. Please be patient and do not close your browser window. You will be logged in automatically. You will also receive an email to activate the account and set your password. We wish you every success and thank you for choosing uFill!") }}
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
                                                    <h4 class="text-gray-900 fw-bolder">{{ trans('message.Please note!') }}</h4>
                                                    <div class="fs-6 text-gray-700">{{ trans('message.We ask for your understanding that the initial setup of your account may take a moment. Should there be any problems, your personal contact person will be happy to assist you. Thank you very much.') }}</div>
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
                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                    height="2" rx="1" transform="rotate(-180 18 13)"
                                                    fill="black" />
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
                        variant_id : variant_id,
                    },
                    success: function(result) {
                        if (result != "") {
                            console.log(result);
                            if(result.percent == null){
                                $("#check_code_message").append(
                                    '<h5 class="text-success" id="valid" style="margin-top: 12px; margin-left:8px">{{trans("message.Discount successfully applied. You will receive a one-time discount of")}} '+ result.price +'€</h5>'
                                );
                            }else{
                                $("#check_code_message").append(
                                    '<h5 class="text-success" id="valid" style="margin-top: 12px; margin-left:8px">{{trans("message.Discount successfully applied. You will receive a one-time discount of")}} '+ result.percent +'%</h5>'
                                );
                            }

                            $('#not_valid').hide();

                        } else {

                            $("#check_code_message").append(
                                '<h5 class="text-danger" id="not_valid" style="margin-top: 12px; margin-left:8px">{{trans("message.Error! Please try a different discount code!")}}</h5>'
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
