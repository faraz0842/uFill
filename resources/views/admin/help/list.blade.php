@extends('admin.master')

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Description-->
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.uFill Help Center > How To') }}</small>
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
                                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{Route('help.overview')}}">{{ trans('message.Overview') }}</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item my-1">
                                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="{{Route('help.list')}}">{{ trans('message.instructions') }}</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item my-1">
                                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{Route('help.faq')}}">FAQ</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item my-1">
                                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{Route('help.contact')}}">{{ trans('message.Contact') }}</a>
                                            </li>
                                            <!--end::Nav item-->
                                        </ul>
                                        <!--end::Nav-->
                                        <!--begin::Action-->
                                        <a href="{{ Route('help.contact') }}" class="btn btn-primary fw-bolder fs-8 fs-lg-base">{{ trans('message.make contact') }}</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Hero nav-->
                                </div>
                                <!--end::Hero body-->
                            </div>
                            <!--end::Hero card-->
                            <!--begin::Home card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body p-10 p-lg-15">
                                    <!--begin::Section-->
                                    <div class="mb-13">
                                        <!--begin::Content-->
                                        <div class="d-flex flex-stack mb-5">
                                            <!--begin::Title-->
                                            <h3 class="text-dark">{{ trans('message.Instructions - Videos') }}</h3>
                                            <!--end::Title-->
                                            <!--begin::Link-->
                                            <div class="fs-6 fw-bold text-primary">32 Videos</div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-9"></div>
                                        <!--end::Separator-->
                                        <!--begin::Row-->
                                        <div class="row g-10">
                                            <!--begin::Col-->
                                            <div class="col-md-4">
                                                <!--begin::Feature post-->
                                                <div class="card-xl-stretch me-md-6">
                                                    <!--begin::Image-->
                                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/ptgwzvvAHy4">
                                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                                    </a>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="m-0">
                                                        <!--begin::Title-->
                                                        <div class="fs-4 text-dark fw-bolder text-dark lh-base">{{ trans('message.Admin Panel - How To Started the Dashboard Tutorial') }}</div>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-bold fs-5 text-gray-600 text-dark my-4">{{ trans('message.We’ve been focused on making a the from also not been afraid to and step away been focused create eye') }}</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-bolder">
                                                            <!--begin::Author-->
                                                            <div class="text-gray-700">{{ trans('message.Jane Miller') }}
                                                                <!--end::Author-->
                                                                <!--begin::Date-->
                                                                <span class="text-muted">am 21.03.2021</span></div>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Feature post-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4">
                                                <!--begin::Feature post-->
                                                <div class="card-xl-stretch mx-md-3">
                                                    <!--begin::Image-->
                                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/UPNvy-2ZtQM">
                                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                                    </a>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="m-0">
                                                        <!--begin::Title-->
                                                        <div class="fs-4 text-dark fw-bolder text-dark lh-base">{{trans('message.Admin Panel - How To Started the Dashboard Tutorial')}}</div>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-bold fs-5 text-gray-600 text-dark my-4">{{trans('message.We’ve been focused on making a the from also not been afraid to and step away been focused create eye')}}</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-bolder">
                                                            <!--begin::Author-->
                                                            <div class="text-gray-700">{{trans('message.Jane Miller')}}
                                                                <!--end::Author-->
                                                                <!--begin::Date-->
                                                                <span class="text-muted">am 21.03.2021</span></div>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Feature post-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4">
                                                <!--begin::Feature post-->
                                                <div class="card-xl-stretch ms-md-6">
                                                    <!--begin::Image-->
                                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/gq3eQKc71kc">
                                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                                    </a>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="m-0">
                                                        <!--begin::Title-->
                                                        <div class="fs-4 text-dark fw-bolder text-dark lh-base">{{trans('message.Admin Panel - How To Started the Dashboard Tutorial')}}</div>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-bold fs-5 text-gray-600 text-dark my-4">{{trans('message.We’ve been focused on making a the from also not been afraid to and step away been focused create eye')}}</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-bolder">
                                                            <!--begin::Author-->
                                                            <div class="text-gray-700">{{trans('message.Jane Miller')}}
                                                                <!--end::Author-->
                                                                <!--begin::Date-->
                                                                <span class="text-muted">am 21.03.2021</span></div>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Feature post-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row mt-10 g-10">
                                            <!--begin::Col-->
                                            <div class="col-md-4">
                                                <!--begin::Feature post-->
                                                <div class="card-xl-stretch me-md-6">
                                                    <!--begin::Image-->
                                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/ptgwzvvAHy4">
                                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                                    </a>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="m-0">
                                                        <!--begin::Title-->
                                                        <div class="fs-4 text-dark fw-bolder text-dark lh-base">{{trans('message.Admin Panel - How To Started the Dashboard Tutorial')}}</div>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-bold fs-5 text-gray-600 text-dark my-4">{{trans('message.We’ve been focused on making a the from also not been afraid to and step away been focused create eye')}}</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-bolder">
                                                            <!--begin::Author-->
                                                            <div class="text-gray-700">{{trans('message.Jane Miller')}}
                                                                <!--end::Author-->
                                                                <!--begin::Date-->
                                                                <span class="text-muted">am 21.03.2021</span></div>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Feature post-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4">
                                                <!--begin::Feature post-->
                                                <div class="card-xl-stretch mx-md-3">
                                                    <!--begin::Image-->
                                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/UPNvy-2ZtQM">
                                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                                    </a>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="m-0">
                                                        <!--begin::Title-->
                                                        <div class="fs-4 text-dark fw-bolder text-dark lh-base">{{trans('message.Admin Panel - How To Started the Dashboard Tutorial')}}</div>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-bold fs-5 text-gray-600 text-dark my-4">{{trans('message.We’ve been focused on making a the from also not been afraid to and step away been focused create eye')}}</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-bolder">
                                                            <!--begin::Author-->
                                                            <div class="text-gray-700">{{trans('message.Jane Miller')}}
                                                                <!--end::Author-->
                                                                <!--begin::Date-->
                                                                <span class="text-muted">am 21.03.2021</span></div>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Feature post-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4">
                                                <!--begin::Feature post-->
                                                <div class="card-xl-stretch ms-md-6">
                                                    <!--begin::Image-->
                                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/gq3eQKc71kc">
                                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                                    </a>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="m-0">
                                                        <!--begin::Title-->
                                                        <div class="fs-4 text-dark fw-bolder text-dark lh-base">{{trans('message.Admin Panel - How To Started the Dashboard Tutorial')}}</div>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-bold fs-5 text-gray-600 text-dark my-4">{{trans('message.We’ve been focused on making a the from also not been afraid to and step away been focused create eye')}}</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-bolder">
                                                            <!--begin::Author-->
                                                            <div class="text-gray-700">{{trans('message.Jane Miller')}}
                                                                <!--end::Author-->
                                                                <!--begin::Date-->
                                                                <span class="text-muted">am 21.03.2021</span></div>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Feature post-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Home card-->
                            <!--begin::Card-->
                            <div class="card">
                                <div class="card-body p-10 p-lg-15">
                                    <div class="card mb-4 bg-light text-center">
                                        <h3 class="text-gray-800 w-bolder mt-12"{{ trans('message.Follow uFill') }}!</h3>
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
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>

@endsection
