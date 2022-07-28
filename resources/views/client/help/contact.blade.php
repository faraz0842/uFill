@extends('client.master')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.uFill Help Center > Contact Us') }}</small>
                    <!--end::Description-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container - class="container-xxl"-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::Hero card-->
                <div class="card mb-12">
                    <!--begin::Hero body-->
                    <div class="card-body flex-column p-5">
                        <!--begin::Hero content-->
                        <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                                <!--begin::Title-->
                                <h1 class="fw-bolder fs-4 fs-lg-1 text-gray-800">{{ trans('message.How can we help you?') }}</h1>
                                <span class="text-gray-400 fs-6 mb-5">{{ trans('message.If you cannot find the right help, please get in touch with your personal contact person or use the contact form') }}.</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Hero content-->
                        <!--begin::Hero nav-->
                        <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
                            <!--begin::Nav-->
                            <ul class="nav flex-wrap border-transparent fw-bolder">
                                <!--begin::Nav item-->
                                <li class="nav-item my-1">
                                    <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                        href="{{ Route('help.overview') }}">{{ trans('message.overview') }}</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item my-1">
                                    <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                        href="{{ Route('help.list') }}">{{ trans('message.instructions') }}</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item my-1">
                                    <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                        href="{{ Route('help.faq') }}">FAQ</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item my-1">
                                    <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active"
                                        href="{{ Route('help.contact') }}">{{ trans('message.Contact') }}</a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Action-->
                            <a href="{{ Route('help.contact') }}"
                                class="btn btn-primary fw-bolder fs-8 fs-lg-base">{{ trans('message.make contact') }}</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Hero nav-->
                    </div>
                    <!--end::Hero body-->
                </div>
                <!--end::Hero card-->
                <!--begin::Contact-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-17">
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-8">
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <!--begin::Form-->
                                <form action="{{Route('help.contactform')}}" class="form mb-15" method="post" id="kt_contact_form">
                                    @csrf
                                    <h1 class="fw-bolder text-dark mb-9">{{ trans('message.write to us') }}.</h1>
                                    <!--begin::Input group-->
                                    <div class="row mb-5">
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-bold mb-2 required">{{ trans('message.Name') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="name" required />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <!--end::Label-->
                                            <label class="fs-5 fw-bold mb-2 required">{{ trans('message.E-Mail') }}</label>
                                            <!--end::Label-->
                                            <!--end::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="email" required />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-bold mb-2 required">{{ trans('message.Regarding') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="" name="subject"
                                            required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-10 fv-row">
                                        <label class="fs-6 fw-bold mb-2 required">{{ trans('message.news') }}</label>
                                        <textarea class="form-control form-control-solid" rows="6" name="message" placeholder="" required></textarea>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Submit-->
                                    <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
                                        <!--begin::Indicator-->
                                        <span class="indicator-label">{{ trans('message.Send') }}</span>
                                        <span class="indicator-progress">Bitte warten...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator-->
                                    </button>
                                    <!--end::Submit-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <!--begin::Phone-->
                                <div class="card card-xl-stretch-50 mb-5 mb-xl-8">
                                    <div
                                        class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                        <span class="svg-icon svg-icon-3tx svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <h1 class="text-dark fw-bolder my-5">{{ trans('call us') }}.</h1>
                                        <!--end::Subtitle-->
                                        <!--begin::Number-->
                                        <a href="tel:{{$company_data->phone}}" class="text-gray-700 fw-bold fs-2">{{$company_data->phone}}</a>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Phone-->
                                </div>
                                <!--begin::Address-->
                                <div class="card card-xl-stretch-50 mb-5 mb-xl-8">
                                    <div
                                        class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-3tx svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <h1 class="text-dark fw-bolder my-5">{{ trans('message.Our headquarters') }}</h1>
                                        <!--end::Subtitle-->
                                        <!--begin::Description-->
                                        <div class="text-gray-700 fs-3 fw-bold">{{$company_data->company_name}} </br>
                                            {{$company_data->street}}  {{$company_data->house_number}}  </br>
                                            {{$company_data->zip_code}} , {{$company_data->city}}
                                        </br> {{$company_data->country}}
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                                <!--end::Address-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Card-->
                        <div class="card mt-13 mb-4 bg-light text-center">
                            <h3 class="text-gray-800 w-bolder mt-12">{{ trans('message.Follow uFill') }}!</h3>
                            <!--begin::Body-->
                            <div class="card-body pb-12 pt-0">
                                <!--begin::Icon-->
                                <a href="{{$company_data->facebook_link}}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="{{$company_data->instagram_link}}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="{{$company_data->twitter_link}}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="{{$company_data->youtube_link}}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/youtube-3.svg') }}"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Contact-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
