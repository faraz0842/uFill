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
                        {{ trans('message.settings') }} > {{ trans('message.Edit') }}</small>
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
                                            <span class="badge badge-light-info fs-8 fw-bolder ">Client</span>
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
                                    href="{{ Route('client.profile', session('client_id')) }}">{{ trans('message.security') }}</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                    href="{{ Route('client.package.shipment') }}">{{ trans('message.package_shipment') }}</a>
                            </li>
                        </ul>
                        <!--begin::Navs-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Basic info-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column mb-5">
                            <span class="card-label fw-bolder text-dark">{{ trans('message.package_shipment') }}</span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.Currently') }}:
                                {{ $client_info->shipping_quantity }}
                                {{ trans('message.packages / monthly') }}</span>

                        </h3>
                        <!--end::Title-->
                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Search-->
                            <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_update_package_amount">{{ trans('message.change_package_amount') }}</button>
                            <!-- Button trigger modal -->

                            <!--begin::Modal - Add cost overview -->
                            <!--begin::Modal - Update Package Amount-->
                            <div class="modal fade" id="kt_modal_update_package_amount" tabindex="-1"
                                aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Form-->
                                        <form class="form"
                                            action="{{ Route('update.shipping_quantity', $client_info->id) }}"
                                            method="GET">
                                            <!--begin::Modal header-->
                                            <div class="modal-header" id="kt_modal_package_amount_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bolder">{{ trans('message.Change package pricing model') }}
                                                </h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                    data-bs-dismiss="modal">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="17.3137"
                                                                width="16" height="2" rx="1"
                                                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                            <rect x="7.41422" y="6" width="16"
                                                                height="2" rx="1"
                                                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body py-10 px-lg-17">
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                    id="kt_modal_package_amount_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                    data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_package_amount_header"
                                                    data-kt-scroll-wrappers="#kt_modal_package_amount_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <!--begin::Package toggle-->
                                                    <div class="fw-boldest fs-3 rotate collapsible mb-7"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_modal_package_amount_user_info" role="button"
                                                        aria-expanded="false"
                                                        aria-controls="kt_modal_package_amount_user_info">
                                                        {{ trans('message.Details') }}
                                                        <span class="ms-2 rotate-180">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </div>
                                                    <!--end::Package toggle-->
                                                    <!--begin::Package form-->
                                                    <div id="kt_modal_package_amount_user_info" class="collapse show">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="fs-6 fw-bold mb-2">{{ trans('message.Current monthly package amount') }}</label>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="{{ trans('message.Your currently specified monthly package amount') }}"></i>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" readonly
                                                                class="form-control form-control-solid" placeholder=""
                                                                name="package_amount_old"
                                                                value="{{ $client_info->shipping_quantity }}" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-15">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="fs-6 fw-bold mb-2">{{ trans('message.new monthly package amount') }}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="shipping_quantity" aria-label="Bitte wählen..."
                                                                data-control="select2" data-placeholder="Bitte wählen..."
                                                                class="form-select form-select-solid"
                                                                data-dropdown-parent="#kt_modal_update_package_amount">
                                                                <option value="">
                                                                    {{ trans('message.Please choose') }}...
                                                                </option>
                                                                <option value="0-50">0 - 50pcs. / monthly</option>
                                                                <option value="50-500">50 - 500pcs. / monthly</option>
                                                                <option value="500-2000">500 - 2000pcs. / monthly</option>
                                                                <option value="ab-2000">ab 2000pcs. / monthly</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Package form-->
                                                </div>
                                                <!--end::Scroll-->
                                            </div>
                                            <!--end::Modal body-->
                                            <!--begin::Modal footer-->
                                            <div class="modal-footer flex-center">
                                                <!--begin::Button-->
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-kt-users-modal-action="cancel">{{ trans('message.cancel') }}</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                                                    <span class="indicator-label">{{ trans('message.save') }}</span>
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
                                </div>
                            </div>
                            <!--end::Modal - Update Package Amount-->
                            <!--end::Modal - Add cost overview -->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table class="kt_datatable_example_1 table table-row-bordered gy-5">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-25px">{{ trans('message.id') }}</th>
                                    <th class="text-center pe-3 min-w-50px">{{ trans('message.Carrier') }}</th>
                                    {{-- <th class="text-center pe-3 min-w-150px">{{trans('message.Shipping Method')}}</th> --}}
                                    <th class="text-center pe-3 min-w-50px">{{ trans('message.WEIGHT') }} (kg)
                                    </th>
                                    <th class="text-center pe-3 min-w-50px">{{ trans('message.MAX WIDTH') }} (cm)
                                    </th>
                                    <th class="text-center pe-3 min-w-50px">{{ trans('message.MAX Height') }}
                                        (cm)</th>
                                    <th class="text-center pe-3 min-w-50px">{{ trans('message.MAX Length') }}
                                        (cm)</th>
                                    <th class="text-center pe-3 min-w-50px">{{ trans('message.COST') }}</th>
                                    {{-- <th class="text-center pe-3 min-w-50px">{{trans('message.Fee')}}</th> --}}
                                    {{-- <th class="text-center pe-3 min-w-50px">{{trans('message.Total Cost')}}</th> --}}
                                    {{-- <th class="text-center pe-3 min-w-50px">{{ trans('message.Option') }}</th> --}}
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bolder text-gray-600">
                                @foreach ($shipping_details as $shipping_detail)
                                    <tr>
                                        <!--begin::Shipment ID-->
                                        <td class="text-left">{{ $shipping_detail->shipping_id }}</td>
                                        <!--end::Shipment ID-->
                                        <!--begin::Transport-->
                                        <td class="text-center">{{ $shipping_detail->carrier }}</td>
                                        <!--end::Transport-->
                                        <!--begin::Type-->
                                        {{-- <td class="text-center">{{$shipping_detail->method}}</td> --}}
                                        <!--end::Type-->
                                        <!--begin::Weight-->
                                        <td class="text-center">{{ $shipping_detail->weight }}</td>
                                        <!--end::Weight-->
                                        <!--begin::Size-->
                                        <td class="text-center">{{ $shipping_detail->max_width }}</td>
                                        <!--end::Size-->
                                        <!--begin::Size-->
                                        <td class="text-center">{{ $shipping_detail->max_height }}</td>
                                        <!--end::Size-->
                                        <!--begin::Size-->
                                        @php
                                            $cost = $shipment_package_fee->package_fee + $shipping_detail->cost;
                                        @endphp
                                        <td class="text-center">{{ $shipping_detail->max_length }}</td>
                                        <!--end::Size-->
                                        <!--begin::price-->
                                        <td class="text-center">{{ Helper::money_format('EUR', 'de_DE', $cost) }} €</td>
                                        <!--end::price-->
                                        {{-- <td class="text-center">{{$shipping_detail->fees}}</td> --}}

                                        {{-- <td class="text-center">{{$shipping_detail->cost + $shipping_detail->fees}}</td> --}}
                                        {{-- <td class="text-center">
                                            <a data-bs-toggle="modal"
                                                data-bs-target="#editshippingdetail{{ $shipping_detail->shipping_id }}"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{ Route('admin.shipping_detail.delete', $shipping_detail->shipping_id) }}"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td> --}}
                                    </tr>
                                    <!--begin::Modal - Add cost overview -->
                                    <div class="modal fade" id="editshippingdetail{{ $shipping_detail->shipping_id }}"
                                        tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder">
                                                        {{ trans('message.Add Shipping Detail') }}</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
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
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                    <!--begin::Form-->
                                                    <form class="form"
                                                        action="{{ Route('admin.shipping_detail.update', $shipping_detail->shipping_id) }}"
                                                        method="post">
                                                        @csrf
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Carrier') }}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select class="form-control" name="carrier">
                                                                <option value=""> Select </option>
                                                                <option value="dhl"
                                                                    {{ $shipping_detail->carrier == 'dhl' ? 'selected' : '' }}>
                                                                    DHL</option>
                                                                <option value="dpd"
                                                                    {{ $shipping_detail->carrier == 'dpd' ? 'selected' : '' }}>
                                                                    DPD</option>
                                                                <option value="ups"
                                                                    {{ $shipping_detail->carrier == 'ups' ? 'selected' : '' }}>
                                                                    UPS</option>

                                                            </select>
                                                            <!--end::Input-->
                                                            @if ($errors->has('carrier'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('carrier') }}</div>
                                                            @endif
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        {{-- <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-bold form-label mb-2">{{trans('message.Shipping Method')}}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select class="form-control" name="shipping_method">
                                                                <option value=""> Select </option>
                                                                <option value="2 kg"{{$shipping_detail->method == '2 kg' ? 'selected' : ''}} >2 Kg</option>
                                                                <option value="5 kg" {{$shipping_detail->method == '5 kg' ? 'selected' : ''}}>5 Kg</option>
                                                                <option value="10 kg" {{$shipping_detail->method == '10 kg' ? 'selected' : ''}}>10 Kg</option>

                                                            </select>
                                                            <!--end::Input-->
                                                            @if ($errors->has('shipping_method'))
                                                                        <div class="text-danger">{{ $errors->first('shipping_method') }}</div>
                                                                        @endif
                                                        </div> --}}
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.WEIGHT') }}
                                                                (KG)
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="weight" value="{{ $shipping_detail->weight }}" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('weight'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('weight') }}</div>
                                                            @endif
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.MAX WIDTH') }}
                                                                (CM)</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="max_width"
                                                                value="{{ $shipping_detail->max_width }}" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('max_width'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('max_width') }}</div>
                                                            @endif
                                                        </div>

                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.MAX Height') }}
                                                                (CM)</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="max_height"
                                                                value="{{ $shipping_detail->max_height }}" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('max_height'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('max_height') }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.MAX Length') }}
                                                                (CM)</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="max_length"
                                                                value="{{ $shipping_detail->max_length }}" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('max_length'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('max_length') }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.COST') }}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="cost" value="{{ $shipping_detail->cost }}" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('cost'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('cost') }}</div>
                                                            @endif
                                                        </div>

                                                        {{-- <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-bold form-label mb-2">{{trans('message.Fee')}}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid" name="fee"
                                                                value="{{$shipping_detail->fee}}" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('fee'))
                                                                        <div class="text-danger">{{ $errors->first('fee') }}</div>
                                                                        @endif
                                                        </div> --}}
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="text-center pt-15">
                                                            <button type="reset" class="btn btn-light me-3"
                                                                data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                data-kt-users-modal-action="submit">
                                                                <span
                                                                    class="indicator-label">{{ trans('message.save') }}</span>
                                                                <span class="indicator-progress">Please wait...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - Add cost overview -->
                                @endforeach


                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Basic info-->

                <!-- begin::Shipment Detail Tabs-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title align-items-start flex-column mb-5">
                            <h3 class="card-title align-items-start flex-column mb-5">
                            <span class="card-label fw-bolder text-dark">{{ trans('message.shipment_overview') }}</span>


                        </h3>
                            {{-- <h2>{{ trans('message.shipment_overview') }}</h2> --}}
                            {{-- <span class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.Currently') }}:
                                {{ $client_info->shipping_quantity }}
                                {{ trans('message.packages / monthly') }}</span> --}}
                        </div>
                        <!--end::Card title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Tab nav-->
                            {{-- <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_year_tab" class="nav-link text-active-primary active"
                                                data-bs-toggle="tab" role="tab"
                                                href="#today">{{ trans('message.Today') }}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#this_week">{{ trans('message.This Week') }}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#last_week">{{ trans('message.Last Week') }}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#this_month">{{ trans('message.This Month') }}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#last_month">{{ trans('message.Last Month') }}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#this_year">{{ trans('message.This Year') }}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#last_year">{{ trans('message.Last Year') }}</a>
                                        </li>
                                        <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_update_package_amount">Preismodell ändern</a>
                                    </ul> --}}
                            <!--end::Tab nav-->
                            <div class="btn-group">
                                <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="triggerId"
                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">{{ trans('filter by') }}</button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent"
                                        role="tablist">
                                        <li class="dropdown-item" role="presentation">
                                            <a id="kt_referrals_year_tab" class="nav-link text-active-primary"
                                                data-bs-toggle="tab" role="tab"
                                                href="#today">{{ trans('message.Today') }}</a>
                                        </li>
                                        <li class="dropdown-item" role="presentation">
                                            <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#this_week">{{ trans('message.This Week') }}</a>
                                        </li>
                                        <li class="dropdown-item" role="presentation">
                                            <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#last_week">{{ trans('message.Last Week') }}</a>
                                        </li>
                                        <li class="dropdown-item" role="presentation">
                                            <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#this_month">{{ trans('message.This Month') }}</a>
                                        </li>
                                        <li class="dropdown-item" role="presentation">
                                            <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#last_month">{{ trans('message.Last Month') }}</a>
                                        </li>
                                        <li class="dropdown-item" role="presentation">
                                            <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#this_year">{{ trans('message.This Year') }}</a>
                                        </li>
                                        <li class="dropdown-item" role="presentation">
                                            <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#last_year">{{ trans('message.Last Year') }}</a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            {{-- <div class="btn">
                                <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_update_package_amount">{{ trans('message.Change pricing model') }}</a>
                            </div> --}}

                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-2">
                        <!--begin::Tab Content-->
                        <div id="kt_referred_users_tab_content" class="tab-content">
                            <!--begin::Tab panel-->
                            <div id="today" class="tab-pane fade show active" role="tabpanel">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_1"
                                        class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-25px">{{ trans('message.id') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.Carrier') }}</th>
                                                <th class="text-center pe-3 min-w-150px">
                                                    {{ trans('message.Package Amount') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.WEIGHT') }} (kg)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX WIDTH') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Height') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Length') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.COST') }}</th>
                                                {{-- <th class="text-end pe-3 min-w-50px">{{trans('message.Option')}}</th> --}}
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            @foreach ($today_shipments as $today_shipment)
                                                <tr>
                                                    <!--begin::Shipment ID-->
                                                    <td class="text-center">
                                                        {{ $today_shipment->shipping_id }}</td>
                                                    <!--end::Shipment ID-->
                                                    <!--begin::Transport-->
                                                    <td class="text-center">{{ $today_shipment->carrier }}
                                                    </td>
                                                    <!--end::Transport-->
                                                    <!--begin::Type-->
                                                    <td class="text-center">232</td>
                                                    <!--end::Type-->
                                                    <!--begin::Weight-->
                                                    <td class="text-center">{{ $today_shipment->weight }}
                                                    </td>
                                                    <!--end::Weight-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">{{ $today_shipment->max_width }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">{{ $today_shipment->max_height }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">{{ $today_shipment->max_length }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::price-->
                                                    <td class="text-center">{{ $today_shipment->cost }}</td>
                                                    <!--end::price-->

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="this_week" class="tab-pane fade show " role="tabpanel">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_1"
                                        class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-25px">{{ trans('message.id') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.Carrier') }}</th>
                                                <th class="text-center pe-3 min-w-150px">
                                                    {{ trans('message.Package Amount') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.WEIGHT') }} (kg)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX WIDTH') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Height') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Length') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.COST') }}</th>
                                                {{-- <th class="text-end pe-3 min-w-50px">{{trans('message.Option')}}</th> --}}
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            @foreach ($this_week_shipments as $this_week_shipment)
                                                <tr>
                                                    <!--begin::Shipment ID-->
                                                    <td class="text-center">
                                                        {{ $this_week_shipment->shipping_id }}</td>
                                                    <!--end::Shipment ID-->
                                                    <!--begin::Transport-->
                                                    <td class="text-center">{{ $this_week_shipment->carrier }}
                                                    </td>
                                                    <!--end::Transport-->
                                                    <!--begin::Type-->
                                                    <td class="text-center">232</td>
                                                    <!--end::Type-->
                                                    <!--begin::Weight-->
                                                    <td class="text-center">{{ $this_week_shipment->weight }}
                                                    </td>
                                                    <!--end::Weight-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_week_shipment->max_width }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_week_shipment->max_height }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_week_shipment->max_length }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::price-->
                                                    <td class="text-center">{{ $this_week_shipment->cost }}
                                                    </td>
                                                    <!--end::price-->

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->

                            <!--begin::Tab panel-->
                            <div id="last_week" class="tab-pane fade show " role="tabpanel">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_1"
                                        class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-25px">{{ trans('message.id') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.Carrier') }}</th>
                                                <th class="text-center pe-3 min-w-150px">
                                                    {{ trans('message.Package Amount') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.WEIGHT') }} (kg)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX WIDTH') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Height') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Length') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.COST') }}</th>
                                                {{-- <th class="text-end pe-3 min-w-50px">{{trans('message.Option')}}</th> --}}
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            @foreach ($last_week_shipments as $last_week_shipment)
                                                <tr>
                                                    <!--begin::Shipment ID-->
                                                    <td class="text-center">
                                                        {{ $last_week_shipment->shipping_id }}</td>
                                                    <!--end::Shipment ID-->
                                                    <!--begin::Transport-->
                                                    <td class="text-center">{{ $last_week_shipment->carrier }}
                                                    </td>
                                                    <!--end::Transport-->
                                                    <!--begin::Type-->
                                                    <td class="text-center">232</td>
                                                    <!--end::Type-->
                                                    <!--begin::Weight-->
                                                    <td class="text-center">{{ $last_week_shipment->weight }}
                                                    </td>
                                                    <!--end::Weight-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_week_shipment->max_width }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_week_shipment->max_height }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_week_shipment->max_length }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::price-->
                                                    <td class="text-center">{{ $last_week_shipment->cost }}
                                                    </td>
                                                    <!--end::price-->

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->

                            <!--begin::Tab panel-->
                            <div id="this_month" class="tab-pane fade show " role="tabpanel">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_1"
                                        class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-25px">{{ trans('message.id') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.Carrier') }}</th>
                                                <th class="text-center pe-3 min-w-150px">
                                                    {{ trans('message.Package Amount') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.WEIGHT') }} (kg)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX WIDTH') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Height') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Length') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.COST') }}</th>
                                                {{-- <th class="text-end pe-3 min-w-50px">{{trans('message.Option')}}</th> --}}
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            @foreach ($this_month_shipments as $this_month_shipment)
                                                <tr>
                                                    <!--begin::Shipment ID-->
                                                    <td class="text-center">
                                                        {{ $this_month_shipment->shipping_id }}</td>
                                                    <!--end::Shipment ID-->
                                                    <!--begin::Transport-->
                                                    <td class="text-center">{{ $this_month_shipment->carrier }}
                                                    </td>
                                                    <!--end::Transport-->
                                                    <!--begin::Type-->
                                                    <td class="text-center">232</td>
                                                    <!--end::Type-->
                                                    <!--begin::Weight-->
                                                    <td class="text-center">{{ $this_month_shipment->weight }}
                                                    </td>
                                                    <!--end::Weight-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_month_shipment->max_width }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_month_shipment->max_height }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_month_shipment->max_length }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::price-->
                                                    <td class="text-center">{{ $this_month_shipment->cost }}
                                                    </td>
                                                    <!--end::price-->

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->

                            <!--begin::Tab panel-->
                            <div id="last_month" class="tab-pane fade show " role="tabpanel">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_1"
                                        class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-25px">{{ trans('message.id') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.Carrier') }}</th>
                                                <th class="text-center pe-3 min-w-150px">
                                                    {{ trans('message.Package Amount') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.WEIGHT') }} (kg)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX WIDTH') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Height') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Length') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.COST') }}</th>
                                                {{-- <th class="text-end pe-3 min-w-50px">{{trans('message.Option')}}</th> --}}
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            @foreach ($last_month_shipments as $last_month_shipment)
                                                <tr>
                                                    <!--begin::Shipment ID-->
                                                    <td class="text-center">
                                                        {{ $last_month_shipment->shipping_id }}</td>
                                                    <!--end::Shipment ID-->
                                                    <!--begin::Transport-->
                                                    <td class="text-center">{{ $last_month_shipment->carrier }}
                                                    </td>
                                                    <!--end::Transport-->
                                                    <!--begin::Type-->
                                                    <td class="text-center">232</td>
                                                    <!--end::Type-->
                                                    <!--begin::Weight-->
                                                    <td class="text-center">{{ $last_month_shipment->weight }}
                                                    </td>
                                                    <!--end::Weight-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_month_shipment->max_width }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_month_shipment->max_height }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_month_shipment->max_length }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::price-->
                                                    <td class="text-center">{{ $last_month_shipment->cost }}
                                                    </td>
                                                    <!--end::price-->

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->

                            <!--begin::Tab panel-->
                            <div id="this_year" class="tab-pane fade show " role="tabpanel">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_1"
                                        class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-25px">{{ trans('message.id') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.Carrier') }}</th>
                                                <th class="text-center pe-3 min-w-150px">
                                                    {{ trans('message.Package Amount') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.WEIGHT') }} (kg)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX WIDTH') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Height') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Length') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.COST') }}</th>
                                                {{-- <th class="text-end pe-3 min-w-50px">{{trans('message.Option')}}</th> --}}
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            @foreach ($this_year_shipments as $this_year_shipment)
                                                <tr>
                                                    <!--begin::Shipment ID-->
                                                    <td class="text-center">
                                                        {{ $this_year_shipment->shipping_id }}</td>
                                                    <!--end::Shipment ID-->
                                                    <!--begin::Transport-->
                                                    <td class="text-center">{{ $this_year_shipment->carrier }}
                                                    </td>
                                                    <!--end::Transport-->
                                                    <!--begin::Type-->
                                                    <td class="text-center">232</td>
                                                    <!--end::Type-->
                                                    <!--begin::Weight-->
                                                    <td class="text-center">{{ $this_year_shipment->weight }}
                                                    </td>
                                                    <!--end::Weight-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_year_shipment->max_width }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_year_shipment->max_height }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $this_year_shipment->max_length }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::price-->
                                                    <td class="text-center">{{ $this_year_shipment->cost }}
                                                    </td>
                                                    <!--end::price-->

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->

                            <!--begin::Tab panel-->
                            <div id="last_year" class="tab-pane fade show " role="tabpanel">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_1"
                                        class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-25px">{{ trans('message.id') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.Carrier') }}</th>
                                                <th class="text-center pe-3 min-w-150px">
                                                    {{ trans('message.Package Amount') }}</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.WEIGHT') }} (kg)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX WIDTH') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Height') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.MAX Length') }} (cm)</th>
                                                <th class="text-center pe-3 min-w-50px">
                                                    {{ trans('message.COST') }}</th>
                                                {{-- <th class="text-end pe-3 min-w-50px">{{trans('message.Option')}}</th> --}}
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            @foreach ($last_year_shipments as $last_year_shipment)
                                                <tr>
                                                    <!--begin::Shipment ID-->
                                                    <td class="text-center">
                                                        {{ $last_year_shipment->shipping_id }}</td>
                                                    <!--end::Shipment ID-->
                                                    <!--begin::Transport-->
                                                    <td class="text-center">{{ $last_year_shipment->carrier }}
                                                    </td>
                                                    <!--end::Transport-->
                                                    <!--begin::Type-->
                                                    <td class="text-center">232</td>
                                                    <!--end::Type-->
                                                    <!--begin::Weight-->
                                                    <td class="text-center">{{ $last_year_shipment->weight }}
                                                    </td>
                                                    <!--end::Weight-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_year_shipment->max_width }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_year_shipment->max_height }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::Size-->
                                                    <td class="text-center">
                                                        {{ $last_year_shipment->max_length }}
                                                    </td>
                                                    <!--end::Size-->
                                                    <!--begin::price-->
                                                    <td class="text-center">{{ $last_year_shipment->cost }}
                                                    </td>
                                                    <!--end::price-->

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->

                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
