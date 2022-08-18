<!DOCTYPE html>

<html lang="de">
<!--begin::Head-->

<head>
    <base href="../../../">
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
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
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
        <!--begin::Authentication - Two-stes -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url()">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="https://ufill.de/" class="mb-12">
                    <img alt="Logo" src="{{asset('assets/media/logos/logo-1.png')}}" class="h-40px" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form action="{{Route('admin.check.verification.code',[$admin_id , $email])}}" method="get" >
                        @csrf
                        {{-- @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif --}}
                        <!--begin::Icon-->
                        <div class="text-center mb-10">
                            <img alt="Logo" class="mh-125px" src="{{asset('assets/media/animations/message-trans.gif')}}" />
                        </div>
                        <!--end::Icon-->
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">{{ trans('message.Two-factor authentication') }}</h1>
                            <!--end::Title-->
                            <!--begin::Sub-title-->
                            <div class="text-muted fw-bold fs-5 mb-5">{{ trans('message.Please check your emails. We have just sent you the 6-digit security code.') }}</div>
                            <!--end::Sub-title-->
                            <!--begin::Mobile no-->
                            <div class="fw-bolder text-dark fs-3">{{$email}}</div>
                            <input type="hidden" name="admin_id" value="{{$admin_id}}"/>

                            @if($error)
                                <div class="alert alert-danger mt-5">{{ $error }}</div>
                            @endif
                            <!--end::Mobile no-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Section-->
                        <div class="mb-10 px-md-10">
                            <!--begin::Label-->
                            <div class="fw-bolder text-start text-dark fs-6 mb-1 ms-1">{{ trans('message.Enter the 6-digit code below.') }}</div>
                            <!--end::Label-->
                            <!--begin::Input group-->
                            <input type="text" name="code" class="form-control form-control-solid  fs-2qx text-center border-primary border-hover mx-1 my-2" placeholder="123456"/>
                            {{-- <div class="d-flex flex-wrap flex-stack">
                                <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" name="code1" value="" placeholder="3" />
                                <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" name="code2" value="" placeholder="7" />
                                <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" name="code3" value="" placeholder="0" />
                                <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" name="code4" value="" placeholder="*" />
                                <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" name="code5" value="" placeholder="*" />
                                <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" name="code6" value="" placeholder="*" />

                            </div> --}}
                            <!--begin::Input group-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Submit-->
                        <div class="d-flex flex-center">
                            <button type="submit"  class="btn btn-lg btn-primary fw-bolder">
									<span class="indicator-label">{{ trans('message.Transmit') }}</span>
									<span class="indicator-progress">Bitte warten...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
                        </div>
                        <!--end::Submit-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Notice-->
                    <div class="text-center fw-bold fs-5">
                        <span class="text-muted me-1">{{ trans('message.You have not received an e-mail? Resend or contact customer support.') }}</span>
                        <a href="#" class="link-primary fw-bolder fs-5 me-1">{{ trans('message.resend_code') }}</a>
                        <span class="text-muted me-1">{{trans('message.or')}}</span>
                        <a href="#" class="link-primary fw-bolder fs-5">{{trans('message.contact customer support')}}</</a>.
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://ufill.de/" class="text-muted text-hover-primary px-2">{{ trans('message.Website') }}</a>
                    <a href="https://ufill.de/rechtliches" class="text-muted text-hover-primary px-2">{{ trans('message.Legal') }}</a>
                    <a href="https://ufill.de/agb" class="text-muted text-hover-primary px-2">{{ trans('message.agb') }}</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Two-stes-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{asset('assets/js/custom/authentication/sign-in/two-steps.js')}}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
