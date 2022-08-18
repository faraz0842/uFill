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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.clients') }} >
                        {{ trans('message.settings') }} > {{ trans('message.apis/integration') }}</small>
                    <!--end::Description-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_api_key">{{ trans('message.Connect Platform (API)') }}</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <div class="form-group m-3">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
        </div>
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container - class="container-xxl"-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <!--begin: Pic-->
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    @if ($client_info->profile_picture)
                                        <img src="{{ URL::asset($client_info->profile_picture) }}" alt="image" />
                                    @else
                                        <img src="{{ asset('assets/media/svg/avatars/blank.svg') }}" alt="image" />
                                    @endif

                                    <div
                                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                                    </div>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="text-gray-900 fs-2 fw-bolder me-1">
                                                {{ $client_info->company_name }}
                                            </div>
                                            <div>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                            fill="#00A3FF" />
                                                        <path class="permanent"
                                                            d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                            fill="white" />
                                                    </svg>
                                                </span></label>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <span class="badge badge-light-info fs-8 fw-bolder ">{{ trans('message.client') }}</span>
                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                            <div class="d-flex align-items-center text-gray-400 me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{ $client_info->first_name . ' ' . $client_info->last_name }}
                                            </div>
                                            <div class="d-flex align-items-center text-gray-400 me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
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
                                                <!--end::Svg Icon-->{{ $client_info->street }}
                                                {{ $client_info->house_number }} , {{ $client_info->plz }}
                                                {{ $client_info->state }} {{ $client_info->country }}
                                            </div>
                                            <div class="d-flex align-items-center text-gray-400 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{ $client_info->email }}
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Title-->
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="13" y="6"
                                                                width="13" height="2" rx="1"
                                                                transform="rotate(90 13 6)" fill="currentColor" />
                                                            <path
                                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    @if ($client_info->name == 'shipment')
                                                        <div class="fs-2 fw-bolder" data-kt-countup="false"
                                                            data-kt-countup-value="0" data-kt-countup-suffix="€">
                                                            N/A
                                                        </div>
                                                    @else
                                                        <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                            data-kt-countup-value="{{ $total_revenue->total != null ? $total_revenue->total : 0 }}"
                                                            data-kt-countup-suffix="€">
                                                            {{ $total_revenue->total != null ? $total_revenue->total : 0 }}
                                                        </div>
                                                    @endif

                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">
                                                    {{ trans('message.Total Revenue') }}</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="13" y="6"
                                                                width="13" height="2" rx="1"
                                                                transform="rotate(90 13 6)" fill="currentColor" />
                                                            <path
                                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    @if ($client_info->name == 'team')
                                                        <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                            data-kt-countup-value="2">2
                                                        </div>
                                                    @else
                                                        <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                            data-kt-countup-value="1">1
                                                        </div>
                                                    @endif

                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">
                                                    {{ trans('message.ADMIN USER') }}</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="13" y="6"
                                                                width="13" height="2" rx="1"
                                                                transform="rotate(90 13 6)" fill="currentColor" />
                                                            <path
                                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="{{ $referred_clients_count }}">
                                                        {{ $referred_clients_count }}
                                                    </div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">
                                                    {{ trans('message.total customers') }}</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Navs-->
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="{{ Route('client.overview') }}">{{ trans('message.Overview') }}</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                    href="{{ Route('client.settings') }}">{{ trans('message.settings') }}</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                    href="{{ Route('client.referral') }}">{{ trans('message.affiliate_program') }}</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            @if (session('package_name') != 'shipment')
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="{{ Route('client.api') }}">{{ trans('message.apis/integration') }}</a>
                                </li>
                            @endif
                            <!--end::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="{{ Route('client.profile',session('client_id')) }}">{{ trans('message.security') }}</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="{{ Route('client.package.shipment') }}">{{ trans('message.package_shipment') }}</a>
                            </li>
                        </ul>
                        <!--begin::Navs-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::API keys-->
                <div class="card">
                    <!--begin::Header-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3>{{ trans('message.apis/integration') }}</h3>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9"
                                id="kt_api_keys_table">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                    <tr>
                                        <th class="w-250px min-w-175px ps-9">{{ trans('message.Platform') }}</th>
                                        <th class="w-275px min-w-250px px-0">{{ trans('message.API Key') }}</th>
                                        <th class="w-125px min-w-125px"></th>
                                        <th class="min-w-125px min-w-125px">{{ trans('message.Connected on') }}</th>
                                        <th class="min-w-125px">{{ trans('message.Status') }}</th>
                                        <th class="w-150px">{{ trans('message.Actions') }}</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-bold text-gray-600">
                                    @foreach ($api_integration as $key => $item)
                                        <div class="modal fade" id="kt_modal_create_api_key" tabindex="-1"
                                            aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_create_api_key_header">
                                                        <!--begin::Modal title-->
                                                        <h2>{{ trans('message.Connect Platform') }}</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                            data-bs-dismiss="modal">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137"
                                                                        width="16" height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Form-->
                                                    <form class="form"
                                                        action="{{ Route('admin.api-integration.store') }}"
                                                        method="POST">

                                                        @csrf
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body py-10 px-lg-17">
                                                            <!--begin::Scroll-->
                                                            <div class="scroll-y me-n7 pe-7"
                                                                id="kt_modal_create_api_key_scroll" data-kt-scroll="true"
                                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                                data-kt-scroll-max-height="auto"
                                                                data-kt-scroll-dependencies="#kt_modal_create_api_key_header"
                                                                data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll"
                                                                data-kt-scroll-offset="300px">
                                                                <!--begin::Notice-->
                                                                <div
                                                                    class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                                                                    <!--begin::Icon-->
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2"
                                                                                y="2" width="20"
                                                                                height="20" rx="10"
                                                                                fill="currentColor" />
                                                                            <rect x="11" y="14"
                                                                                width="7" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-90 11 14)"
                                                                                fill="currentColor" />
                                                                            <rect x="11" y="17"
                                                                                width="2" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-90 11 17)"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                    <!--end::Icon-->
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex flex-stack flex-grow-1">
                                                                        <!--begin::Content-->
                                                                        <div class="fw-bold">
                                                                            <h4 class="text-gray-900 fw-bolder">
                                                                                {{ trans('message.information') }}!</h4>
                                                                            <div class="fs-6 text-gray-700">Please note
                                                                                that the synchronization of your data may
                                                                                take a moment.</div>
                                                                        </div>
                                                                        <!--end::Content-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </div>
                                                                <!--end::Notice-->
                                                                <!--begin::Input group-->
                                                                <div class="mb-5 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-5 fw-bold mb-2">{{ trans('message.Platform') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Select-->
                                                                    <select name="platform" data-control="select2"
                                                                        data-hide-search="true"
                                                                        data-placeholder="Select..."
                                                                        class="form-select form-select-solid" required>
                                                                        <option value="">Select...</option>
                                                                        {{-- <optgroup label="Logistic"> --}}

                                                                        @if ($dhl_count == 0)
                                                                            <option value="dhl">DHL</option>
                                                                        @endif

                                                                        @if ($dpd_count == 0)
                                                                            <option value="dpd">DPD</option>
                                                                        @endif

                                                                        @if ($ups_count == 0)
                                                                            <option value="ups">UPS</option>
                                                                        @endif


                                                                        {{-- </optgroup> --}}
                                                                        <optgroup label="Shops">
                                                                            <option value="amazon">Amazon</option>
                                                                            <option value="ebay">eBay</option>f
                                                                            <option value="shopify">Shopify</option>
                                                                        </optgroup>
                                                                        {{-- <optgroup label="social Media"> --}}
                                                                        {{-- <option value="facebook">Facebook</option>
                                                                                    <option value="instagram">Instagram</option> --}}
                                                                        {{-- </optgroup> --}}
                                                                    </select>

                                                                    @if ($errors->has('platform'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('platform') }}</div>
                                                                    @endif
                                                                    <!--end::Select-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-5 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-5 fw-bold mb-2">{{ trans('message.API Key') }}
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Please insert the API key / token generated on the respective platform."></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="api_key"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="fftt456765gjkkjhi83093985"
                                                                        value="" required />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('api_key'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('api_key') }}</div>
                                                                    @endif
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-5 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-5 fw-bold mb-2">{{ trans('message.Secret Key') }}
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Please insert the Secret key."></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="secret_key"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="fftt456765gjkkjhi83093985"
                                                                        value="" required />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('secret_key'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('secret_key') }}</div>
                                                                    @endif
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="mb-5 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-5 fw-bold mb-2">{{ trans('message.Status') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Select-->
                                                                    <select name="status" data-control="select"
                                                                        data-hide-search="true"
                                                                        data-placeholder="Select..."
                                                                        class="form-select form-select-solid" required>
                                                                        <option value="">Select...</option>
                                                                        <option value="1">
                                                                            {{ trans('message.Active') }}</option>
                                                                        <option value="0">
                                                                            {{ trans('message.DeActive') }}</option>
                                                                    </select>
                                                                    <!--end::Select-->
                                                                    @if ($errors->has('status'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('status') }}</div>
                                                                    @endif
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Scroll-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                        <!--begin::Modal footer-->
                                                        <div class="modal-footer flex-center">
                                                            <!--begin::Button-->
                                                            <button type="reset" id="kt_modal_create_api_key_cancel"
                                                                class="btn btn-light me-3">{{ trans('message.cancel') }}</button>
                                                            <!--end::Button-->
                                                            <!--begin::Button-->
                                                            <button type="submit" class="btn btn-primary">
                                                                <span
                                                                    class="indicator-label">{{ trans('message.save') }}</span>
                                                                <span class="indicator-progress">Please wait...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                            <!--end::Button-->
                                                        </div>
                                                        <!--end::Modal footer-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <tr>
                                            <td class="ps-9">{{ $item->platform }}</td>
                                            <td data-bs-target="license" class="ps-0">{{ $item->api_key }}</td>
                                            <td>

                                                <input type="hidden" id="copy_id{{ $key }}"
                                                    value="{{ $item->api_key }}">
                                                {{-- onclick="myFunction([this.value,'group_id{{$key}}','sub_group_id{{$key}}','category_id{{$key}}']);" --}}
                                                <button id="copybtn{{ $key }}"
                                                    onclick="myFunction(['{{ $item->api_key }}' , 'copybtn{{ $key }}'])"
                                                    class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.5"
                                                                d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z"
                                                                fill="currentColor" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span
                                                        class="badge badge-light-success fs-7 fw-bold">{{ trans('message.Active') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-light-danger fs-7 fw-bold">{{ trans('message.DeActive') }}</span></span>
                                                @endif

                                            </td>
                                            <!--begin::Action=-->
                                            <td class="">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                                    data-kt-menu-trigger="click"
                                                    data-kt-menu-placement="bottom-end">Options
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_api_key{{ $item->id }}">Edit</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    {{-- <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">{{ trans('message.Deactivate') }}</a>
                                                                </div> --}}
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ Route('admin.api-integration.destroy', $item->id) }}"
                                                            class="menu-link px-3">{{ trans('message.delete') }}</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        <!--begin::Modal - edit Api Key-->
                                        <div class="modal fade" id="kt_modal_edit_api_key{{ $item->id }}"
                                            tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_edit_api_key_header">
                                                        <!--begin::Modal title-->
                                                        <h2>{{ trans('message.Edit platform') }}</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                            data-bs-dismiss="modal">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137"
                                                                        width="16" height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Form-->
                                                    <form class="form"
                                                        action="{{ Route('admin.api-integration.update', $item->id) }}"
                                                        method="POST">

                                                        @csrf
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body py-10 px-lg-17">
                                                            <!--begin::Scroll-->
                                                            <div class="scroll-y me-n7 pe-7"
                                                                id="kt_modal_edit_api_key_scroll" data-kt-scroll="true"
                                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                                data-kt-scroll-max-height="auto"
                                                                data-kt-scroll-dependencies="#kt_modal_create_api_key_header"
                                                                data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll"
                                                                data-kt-scroll-offset="300px">
                                                                <!--begin::Notice-->
                                                                <div
                                                                    class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                                                                    <!--begin::Icon-->
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2"
                                                                                y="2" width="20"
                                                                                height="20" rx="10"
                                                                                fill="currentColor" />
                                                                            <rect x="11" y="14"
                                                                                width="7" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-90 11 14)"
                                                                                fill="currentColor" />
                                                                            <rect x="11" y="17"
                                                                                width="2" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-90 11 17)"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                    <!--end::Icon-->
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex flex-stack flex-grow-1">
                                                                        <!--begin::Content-->
                                                                        <div class="fw-bold">
                                                                            <h4 class="text-gray-900 fw-bolder">Hinweis!
                                                                            </h4>
                                                                            <div class="fs-6 text-gray-700">Bitte beachten
                                                                                Sie, dass die Synchronisierung Ihrer Daten
                                                                                einen Moment in Anspruch nehmen kann.</div>
                                                                        </div>
                                                                        <!--end::Content-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </div>
                                                                <!--end::Notice-->
                                                                <!--begin::Input group-->
                                                                <div class="mb-5 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-5 fw-bold mb-2">{{ trans('message.Platform') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Select-->
                                                                    <select name="platform" data-control="select2"
                                                                        data-hide-search="true"
                                                                        data-placeholder="Bitte wählen..."
                                                                        class="form-select form-select-solid" required>

                                                                        {{-- <optgroup label="Logistic"> --}}
                                                                        {{-- @if ($dhl_count == 0) --}}
                                                                        <option value="dhl"
                                                                            {{ $item->platform == 'dhl' ? 'selected' : '' }}>
                                                                            DHL</option>
                                                                        {{-- @endif

                                                                                        @if ($dpd_count == 0) --}}
                                                                        <option value="dpd"
                                                                            {{ $item->platform == 'dpd' ? 'selected' : '' }}>
                                                                            DPD</option>
                                                                        {{-- @endif --}}
                                                                        <option value="ups"
                                                                            {{ $item->platform == 'ups' ? 'selected' : '' }}>
                                                                            ups</option>
                                                                        <option value="shopify"
                                                                            {{ $item->platform == 'shopify' ? 'selected' : '' }}>
                                                                            shopify</option>
                                                                        <option value="ebay"
                                                                            {{ $item->platform == 'ebay' ? 'selected' : '' }}>
                                                                            ebay</option>
                                                                        <option value="amazon"
                                                                            {{ $item->platform == 'amazon' ? 'selected' : '' }}>
                                                                            amazon</option>



                                                                        {{-- </optgroup> --}}
                                                                        {{-- <optgroup label="Shops">
                                                                                        <option value="amazon">Amazon</option>
                                                                                        <option value="ebay">eBay</option>
                                                                                        <option value="shopify">Shopify</option>
                                                                                    </optgroup>
                                                                                    <optgroup label="soziale Medien">
                                                                                        <option value="facebook">Facebook</option>
                                                                                        <option value="instagram">Instagram</option>
                                                                                    </optgroup> --}}
                                                                    </select>
                                                                    <!--end::Select-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-5 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-5 fw-bold mb-2">{{ trans('message.API Key') }}
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Bitte den auf der jeweiligen Plattform generierten API Schlüssel / Token einfügen."></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="api_key"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="fftt456765gjkkjhi83093985"
                                                                        value="{{ $item->api_key }}" required />
                                                                    <!--end::Input-->
                                                                </div>

                                                                <div class="d-flex flex-column mb-5 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-5 fw-bold mb-2">{{ trans('message.Secret Key') }}
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Bitte den auf der jeweiligen Plattform generierten API Schlüssel / Token einfügen."></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="secret_key"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="fftt456765gjkkjhi83093985"
                                                                        value="{{ $item->secret_key }}" required />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="mb-5 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-5 fw-bold mb-2">{{ trans('message.Status') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Select-->
                                                                    <select name="status" data-control="select"
                                                                        data-hide-search="true"
                                                                        data-placeholder="Bitte wählen..."
                                                                        class="form-select form-select-solid" required>
                                                                        <option value="1"
                                                                            {{ $item->status == '1' ? 'selected' : '' }}>
                                                                            {{ trans('message.Active') }}</option>
                                                                        <option value="0"
                                                                            {{ $item->status == '0' ? 'selected' : '' }}>
                                                                            {{ trans('message.DeActive') }}</option>
                                                                    </select>
                                                                    <!--end::Select-->
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Scroll-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                        <!--begin::Modal footer-->
                                                        <div class="modal-footer flex-center">
                                                            <!--begin::Button-->
                                                            <button type="reset" id="kt_modal_edit_api_key_cancel"
                                                                class="btn btn-light me-3"
                                                                data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                                            <!--end::Button-->
                                                            <!--begin::Button-->
                                                            <button type="submit" id="kt_modal_edit_api_key_submit"
                                                                class="btn btn-primary">
                                                                <span
                                                                    class="indicator-label">{{ trans('message.save') }}</span>
                                                                <span class="indicator-progress">Bitte warten...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                            <!--end::Button-->
                                                        </div>
                                                        <!--end::Modal footer-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <!--end::Modal - edit Api Key-->
                                    @endforeach

                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table wrapper-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::API keys-->
                <!--begin::Modals-->
                <!--begin::Modal - Create Api Key-->

                <!--end::Modal - Create Api Key-->

                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection

@section('custom_scripts')
    <script>
        function myFunction(arr) {
            /* Get the text field */
            //var copyText = document.getElementById(arr[0]);
            var copyText = arr[0];

            /* Select the text field */
            // copyText.select();
            // copyText.setSelectionRange(0, 99999); /* For mobile devices */



            $('#' + arr[1]).removeClass('btn-active-color-primary');
            $('#' + arr[1]).addClass('btn-active-color-success');

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(arr[0]);

            /* Alert the copied text */
            //alert("Copied the text ");
        }
    </script>
@endsection
