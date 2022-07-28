@extends('admin.master')

@section('content')
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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.uFill Help Center > Overview') }}</small>
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
                                    <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active"
                                        href="{{ Route('help.overview') }}">{{ trans('message.Overview') }}</a>
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
                                    <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
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
                <!--begin::Row-->
                <div class="row gy-0 mb-6 mb-xl-12">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-md-stretch me-xl-3 mb-md-0 mb-6">
                            <!--begin::Body-->
                            <div class="card-body p-10 p-lg-15">
                                <!--begin::Header-->
                                <div class="d-flex flex-stack mb-7">
                                    <!--begin::Title-->
                                    <h1 class="fw-bolder text-dark">{{ trans('message.instructions') }}</h1>
                                    <!--end::Title-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Link-->
                                        <a href="{{ Route('help.list') }}" class="text-primary fw-bolder me-1">{{ trans('message.All instructions') }}</a>
                                        <!--begin::Link-->
                                        <!--begin::Arrow-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Arrow-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Accordion-->
                                <div class="overflow-auto h-300px">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_3_1">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1 ">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_3_1" class="collapse show fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="fs-5 link-primary fw-bold">{{ trans('Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_3_2">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1 ">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_3_2" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="fs-5 link-primary fw-bold">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_3_3">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1 ">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_3_3" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="fs-5 link-primary fw-bold">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_3_4">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1 ">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_3_4" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="fs-5 link-primary fw-bold">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_3_5">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1 ">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_3_5" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="fs-5 link-primary fw-bold">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Accordion-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-md-stretch ms-xl-3">
                            <!--begin::Body-->
                            <div class="card-body p-10 p-lg-15">
                                <!--begin::Header-->
                                <div class="d-flex flex-stack mb-7">
                                    <!--begin::Title-->
                                    <h1 class="fw-bolder text-dark">FAQ</h1>
                                    <!--end::Title-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Link-->
                                        <a href="{{ Route('help.faq') }}" class="text-primary fw-bolder me-1">{{ trans('message.show more') }}</a>
                                        <!--begin::Link-->
                                        <!--begin::Arrow-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Arrow-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Accordion-->
                                <div class="overflow-auto h-300px">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_2_1">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_2_1" class="collapse show fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="d-none">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_2_2">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_2_2" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="d-none">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_2_3">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_2_3" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="d-none">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_2_4">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_2_4" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="d-none">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_2_5">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_2_5" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="d-none">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                            data-bs-toggle="collapse" data-bs-target="#kt_support_2_6">
                                            <!--begin::Icon-->
                                            <div class="ms-n1 me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">{{ trans('message.Question?') }}</h3>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light my-1">{{ trans('message.Label') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_support_2_6" class="collapse fs-6 ms-10">
                                            <!--begin::Block-->
                                            <div class="mb-4">
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-5">{{ trans('message.Answer...') }}</span>
                                                <!--end::Text-->
                                                <!--begin::Link-->
                                                <a href="#" class="d-none">{{ trans('message.Link') }}</a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Block-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Accordion-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Products Documentations-->
                <div class="card mb-2">
                    <!--begin::Card body-->
                    <div class="card-body p-10 p-lg-15">
                        <!--begin::Title-->
                        <h1 class="fw-bolder text-dark mb-12 ps-0">{{ trans('message.Helpful links') }}</h1>
                        <!--end::Title-->
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-sm-4">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-2 ms-n1 me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <a href="https://ufill.de" class="fw-bold text-gray-800 text-hover-primary fs-3 m-0"
                                        target="_blank">{{ trans('message.uFill website') }}</a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--begin::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-2 ms-n1 me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <a href="https://ufill.de/agb"
                                        class="fw-bold text-gray-800 text-hover-primary fs-3 m-0"
                                        target="_blank">{{ trans('message.Terms and Conditions (GTC)') }}</a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--begin::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-2 ms-n1 me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <a href="https://ufill.de/rechtliches"
                                        class="fw-bold text-gray-800 text-hover-primary fs-3 m-0"
                                        target="_blank">{{ trans('message.Legal information (imprint and data protection)') }}</a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--begin::Item-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-4">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-2 ms-n1 me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <a href="../../demo1/dist/apps/subscriptions/view.html"
                                        class="fw-bold text-gray-800 text-hover-primary fs-3 m-0">{{ trans('message.your contract data') }}</a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--begin::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-2 ms-n1 me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <a href="{{ Route('admin.overview') }}"
                                        class="fw-bold text-gray-800 text-hover-primary fs-3 m-0">{{ trans('message.your company information') }}</a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--begin::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-2 ms-n1 me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <a href="{{ Route('help.contact') }}"
                                        class="fw-bold text-gray-800 text-hover-primary fs-3 m-0">{{ trans('message.Contact form uFill Support') }}</a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--begin::Item-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-4">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-2 ms-n1 me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <a href="{{ Route('admin.news') }}"
                                        class="fw-bold text-gray-800 text-hover-primary fs-3 m-0">{{ trans('message.uFill News') }}</a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--begin::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-2 ms-n1 me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <a href="{{ Route('admin.changelog') }}"
                                        class="fw-bold text-gray-800 text-hover-primary fs-3 m-0">{{ trans('message.uFill update history') }}</a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--begin::Item-->
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
                                <a href="{{ $company_data->facebook_link }}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="{{ $company_data->instagram_link }}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="{{ $company_data->twitter_link }}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="{{ $company_data->youtube_link }}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/youtube-3.svg') }}"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products Documentations-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
