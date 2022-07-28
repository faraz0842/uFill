@extends('admin.master')

@section('content')

<!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Description-->
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.uFill Help Center > FAQ') }}</small>
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
                                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{Route('help.overview')}}">{{ trans('message.overview') }}</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item my-1">
                                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{Route('help.list')}}">{{ trans('message.instructions') }}</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item my-1">
                                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="{{Route('help.faq')}}">FAQ</a>
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
                            <!--begin::FAQ card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body p-10 p-lg-15">
                                    <!--begin::Classic content-->
                                    <div class="mb-13">
                                        <!--begin::Intro-->
                                        <div class="mb-15">
                                            <!--begin::Title-->
                                            <h4 class="fs-2x text-gray-800 w-bolder mb-6">{{ trans('message.Frequently Asked Questions') }}</h4>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <p class="fw-bold fs-4 text-gray-600 mb-2">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</p>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Intro-->
                                        <!--begin::Row-->
                                        <div class="row mb-12">
                                            <!--begin::Col-->
                                            <div class="col-md-6 pe-md-10 mb-10 mb-md-0">
                                                <!--begin::Title-->
                                                <h2 class="text-gray-800 fw-bolder mb-4">{{ trans('Buying Product') }}</h2>
                                                <!--end::Title-->
                                                <!--begin::Accordion-->
                                                <div class="overflow-auto h-300px">
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.How does it work?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_4_1" class="collapse show fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.Do I need a designer to use Admin Theme ?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_4_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_3">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.What do I need to do to start selling?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_4_3" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_4">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.How much does Extended license cost?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_4_4" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Accordion-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 ps-md-10">
                                                <!--begin::Title-->
                                                <h2 class="text-gray-800 fw-bolder mb-4">{{ trans('message.abbreviations') }}</h2>
                                                <!--end::Title-->
                                                <!--begin::Accordion-->
                                                <div class="overflow-auto h-300px">
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_1">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.What does the abbreviation "#INV-..." stand for?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_1" class="collapse show fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.The abbreviation "#INV-..." stands for "Invoice". The numbers attached stand for the respective individual number. It is generated, for example, by the document manager when creating an invoice') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.What does the abbreviation "#WRN-..." stand for?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.Die Abkürzung "#WRN-..." steht für "Warning" bzw. Mahnung. Die beigefügten Zahlen stehen für die jeweilige individuelle Nummer. Sie wird z.B. durch den Dokumentenmanager beim Erstellen einer  Mahnung generiert') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.What does the abbreviation "#RFD-..." stand for?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.The abbreviation "#RFD-..." stands for "Refund". The numbers attached stand for the respective individual number. It is generated, for example, by the document manager when creating a credit note') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_3">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.What does the abbreviation "#CST-..." stand for?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_3" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.The abbreviation "#CST-..." stands for "Customer". The numbers attached stand for the respective individual number. It is automatically generated when creating a customer') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_4">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('What does the abbreviation "#ORD-..." stand for?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_4" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.The abbreviation "#ORD-..." stands for "Order". The numbers attached stand for the respective individual number. It is automatically generated when creating an order') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_5">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.What does the abbreviation "#RTN-..." stand for?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_5" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.The abbreviation "#RTN-..." stands for "Return". The numbers attached stand for the respective individual number. It is automatically generated when creating a return') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_6">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.Wofür steht die Abkürzung "#SKU-..."?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_6" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.The abbreviation "#SKU-..." stands for "Stock Keeping Units" or product number. The numbers attached stand for the respective individual number. It is automatically generated when creating a product') }}.
                                                            </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_7">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.What does the abbreviation "#USR-..." stand for?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_7" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.The abbreviation "#USR-..." stands for "User". The numbers attached stand for the respective individual number. It is generated automatically when a user is created') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_8">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('What does the abbreviation "#SHP-..." stand for?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_8" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.The abbreviation "#SHP-..." stands for "Shipment". The numbers attached stand for the respective individual number of the shipment label. You can find the tracking number either on the label or in the associated order') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Accordion-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-md-6 pe-md-10 mb-10 mb-md-0">
                                                <!--begin::Title-->
                                                <h2 class="text-gray-800 w-bolder mb-4">{{ trans('message.User Roles') }}</h2>
                                                <!--end::Title-->
                                                <!--begin::Accordion-->
                                                <div class="overflow-auto h-300px">
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_1">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.How does it work?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_6_1" class="collapse show fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.Do I need a designer to use this Admin Theme?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_6_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_3">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.What do I need to do to start selling?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_6_3" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_4">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('How much does Extended license cost?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_6_4" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Accordion-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 ps-md-10">
                                                <!--begin::Title-->
                                                <h2 class="text-gray-800 fw-bolder mb-4">{{ trans('message.Reports Generation') }}</h2>
                                                <!--end::Title-->
                                                <!--begin::Accordion-->
                                                <div class="overflow-auto h-300px">
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_1">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0"></h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_7_1" class="collapse show fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp') }}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.How many people can it support?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_7_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp')}}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_3">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.How long is the warrianty?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_7_3" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp')}}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_4">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">{{ trans('message.How fast is the installation?') }}</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_7_4" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{trans('message.First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp')}}.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Accordion-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Classic content-->
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
                            <!--end::FAQ card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->

@endsection
