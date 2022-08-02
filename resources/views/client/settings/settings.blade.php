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
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
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
                        </ul>
                        <!--begin::Navs-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Basic info-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">{{ trans('message.Company Informations') }}</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form action="{{ Route('client.settings.update') }}" method="post" class="form"
                            enctype="multipart/form-data">
                            @csrf
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">

                                <div class="form-group m-3">
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    @if (session('message'))
                                        <div class="alert alert-success">{{ session('message') }}</div>
                                    @endif
                                </div>
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label fw-bold fs-6">{{ trans('message.Logo') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url('{{ asset('assets/media/svg/avatars/blank.svg') }}')">
                                            <!--begin::Preview existing avatar-->
                                            @if (isset($client_info->profile_picture))
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url({{ URL::asset($client_info->profile_picture) }})">
                                                </div>
                                            @else
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg') }})">
                                                </div>
                                            @endif
                                            {{-- <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url('{{ URL::asset($client_info->profile_picture) }}')">
                                            </div> --}}
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change Logo">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="hidden" name="previous_profile"
                                                    value="{{ $client_info->profile_picture }}">
                                                <input type="hidden" name="avatar_remove" />
                                                <input type="file" name="profile_picture"
                                                    accept=".png, .jpg, .jpeg" />

                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Delete Logo">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">{{ $client_info->profile_picture }}.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.Managing Director') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-12 fv-row">
                                                <input type="text" name="manager_director"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    placeholder="firstname"
                                                    value="{{ $client_info->first_name }} {{ $client_info->last_name }}"
                                                    required />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            {{-- <div class="col-lg-6 fv-row">
                                                            <input type="text" name="settings_name" class="form-control form-control-lg form-control-solid" placeholder="surname" value="Hiebenga" required/>
                                                        </div> --}}
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.First Name') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-12 fv-row">
                                                <input type="text" name="first_name"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    placeholder="firstname"
                                                    value="{{ $client_info->first_name }}"
                                                    required />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            {{-- <div class="col-lg-6 fv-row">
                                                            <input type="text" name="settings_name" class="form-control form-control-lg form-control-solid" placeholder="surname" value="Hiebenga" required/>
                                                        </div> --}}
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.Last Name') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-12 fv-row">
                                                <input type="text" name="last_name"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    placeholder="firstname"
                                                    value="{{ $client_info->last_name }}"
                                                    required />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            {{-- <div class="col-lg-6 fv-row">
                                                            <input type="text" name="settings_name" class="form-control form-control-lg form-control-solid" placeholder="surname" value="Hiebenga" required/>
                                                        </div> --}}
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.Company') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="company_name"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="companyname" value="{{ $client_info->company_name }}"
                                            required />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.Street') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-12 fv-row">
                                                <input type="text" name="street"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    placeholder="Street" value="{{ $client_info->street }}" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.House Number') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-12 fv-row">
                                                <input type="text" name="house_number"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    placeholder="House Number" value="{{ $client_info->house_number }}"
                                                    required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.Zip Code') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-12 fv-row">
                                                <input type="text" name="zip_code"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    placeholder="Zip Code" value="{{ $client_info->plz }}" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.state') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-12 fv-row">
                                                <input type="text" name="state"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    placeholder="City" value="{{ $client_info->state }}" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">{{ trans('message.Country') }}</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select name="country" aria-label="Select..." data-placeholder="Select..."
                                            class="form-select form-select-solid form-select-lg fw-bold" required>
                                            <option value="">Select...</option>
                                            <option value=""
                                                        {{ $client_info->country == '' ? 'selected' : '' }}>
                                                        {{ trans('message.Please choose') }}...</option>
                                                    <option value="Afghanistan"
                                                        {{ $client_info->country == 'Afghanistan' ? 'selected' : '' }}>
                                                        Afghanistan</option>
                                                    <option value="Aland Islands"
                                                        {{ $client_info->country == 'Aland Islands' ? 'selected' : '' }}>Aland
                                                        Islands</option>
                                                    <option value="Albania"
                                                        {{ $client_info->country == 'Albania' ? 'selected' : '' }}>Albania
                                                    </option>
                                                    <option value="Algeria"
                                                        {{ $client_info->country == 'Algeria' ? 'selected' : '' }}>Algeria
                                                    </option>
                                                    <option value="American Samoa"
                                                        {{ $client_info->country == 'American Samoa' ? 'selected' : '' }}>
                                                        American Samoa</option>
                                                    <option value="Andorra"
                                                        {{ $client_info->country == 'Andorra' ? 'selected' : '' }}>Andorra
                                                    </option>
                                                    <option value="Angola"
                                                        {{ $client_info->country == 'Angola' ? 'selected' : '' }}>Angola
                                                    </option>
                                                    <option value="Anguilla"
                                                        {{ $client_info->country == 'Anguilla' ? 'selected' : '' }}>Anguilla
                                                    </option>
                                                    <option value="Antigua and Barbuda"
                                                        {{ $client_info->country == 'Antigua and Barbuda' ? 'selected' : '' }}>
                                                        Antigua and Barbuda</option>
                                                    <option value="Argentina"
                                                        {{ $client_info->country == 'Argentina' ? 'selected' : '' }}>Argentina
                                                    </option>
                                                    <option value="Armenia"
                                                        {{ $client_info->country == 'Armenia' ? 'selected' : '' }}>Armenia
                                                    </option>
                                                    <option value="Aruba"
                                                        {{ $client_info->country == 'Aruba' ? 'selected' : '' }}>Aruba
                                                    </option>
                                                    <option value="Australia"
                                                        {{ $client_info->country == 'Australia' ? 'selected' : '' }}>Australia
                                                    </option>
                                                    <option value="Austria"
                                                        {{ $client_info->country == 'Austria' ? 'selected' : '' }}>Austria
                                                    </option>
                                                    <option value="Azerbaijan"
                                                        {{ $client_info->country == 'Azerbaijan' ? 'selected' : '' }}>
                                                        Azerbaijan</option>
                                                    <option value="Bahamas"
                                                        {{ $client_info->country == 'Bahamas' ? 'selected' : '' }}>Bahamas
                                                    </option>
                                                    <option value="Bahrain"
                                                        {{ $client_info->country == 'Bahrain' ? 'selected' : '' }}>Bahrain
                                                    </option>
                                                    <option value="Bangladesh"
                                                        {{ $client_info->country == 'Bangladesh' ? 'selected' : '' }}>
                                                        Bangladesh</option>
                                                    <option value="Barbados"
                                                        {{ $client_info->country == 'Barbados' ? 'selected' : '' }}>Barbados
                                                    </option>
                                                    <option value="Belarus"
                                                        {{ $client_info->country == 'Belarus' ? 'selected' : '' }}>Belarus
                                                    </option>
                                                    <option value="Belgium"
                                                        {{ $client_info->country == 'Belgium' ? 'selected' : '' }}>Belgium
                                                    </option>
                                                    <option value="Belize"
                                                        {{ $client_info->country == 'Belize' ? 'selected' : '' }}>Belize
                                                    </option>
                                                    <option value="Benin"
                                                        {{ $client_info->country == 'Benin' ? 'selected' : '' }}>Benin
                                                    </option>
                                                    <option value="Bermuda"
                                                        {{ $client_info->country == 'Bermuda' ? 'selected' : '' }}>Bermuda
                                                    </option>
                                                    <option value="Bhutan"
                                                        {{ $client_info->country == 'Bhutan' ? 'selected' : '' }}>Bhutan
                                                    </option>
                                                    <option value="Bolivia, Plurinational State of"
                                                        {{ $client_info->country == 'Bolivia, Plurinational State of' ? 'selected' : '' }}>
                                                        Bolivia, Plurinational State of</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba"
                                                        {{ $client_info->country == 'Bonaire, Sint Eustatius and Saba' ? 'selected' : '' }}>
                                                        Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina"
                                                        {{ $client_info->country == 'Bosnia and Herzegovina' ? 'selected' : '' }}>
                                                        Bosnia and Herzegovina</option>
                                                    <option value="Botswana"
                                                        {{ $client_info->country == 'Botswana' ? 'selected' : '' }}>Botswana
                                                    </option>
                                                    <option value="Brazil"
                                                        {{ $client_info->country == 'Brazil' ? 'selected' : '' }}>Brazil
                                                    </option>
                                                    <option value="British Indian Ocean Territory"
                                                        {{ $client_info->country == 'British Indian Ocean Territory' ? 'selected' : '' }}>
                                                        British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam"
                                                        {{ $client_info->country == 'Brunei Darussalam' ? 'selected' : '' }}>
                                                        Brunei Darussalam</option>
                                                    <option value="Bulgaria"
                                                        {{ $client_info->country == 'Bulgaria' ? 'selected' : '' }}>Bulgaria
                                                    </option>
                                                    <option value="Burkina Faso"
                                                        {{ $client_info->country == 'Burkina Faso' ? 'selected' : '' }}>
                                                        Burkina Faso</option>
                                                    <option value="Burundi"
                                                        {{ $client_info->country == 'Burundi' ? 'selected' : '' }}>Burundi
                                                    </option>
                                                    <option value="Cambodia"
                                                        {{ $client_info->country == 'Cambodia' ? 'selected' : '' }}>Cambodia
                                                    </option>
                                                    <option value="Cameroon"
                                                        {{ $client_info->country == 'Cameroon' ? 'selected' : '' }}>Cameroon
                                                    </option>
                                                    <option value="Canada"
                                                        {{ $client_info->country == 'Canada' ? 'selected' : '' }}>Canada
                                                    </option>
                                                    <option value="Cape Verde"
                                                        {{ $client_info->country == 'Cape Verde' ? 'selected' : '' }}>Cape
                                                        Verde</option>
                                                    <option value="Cayman Islands"
                                                        {{ $client_info->country == 'Cayman Islands' ? 'selected' : '' }}>
                                                        Cayman Islands</option>
                                                    <option value="Central African Republic"
                                                        {{ $client_info->country == 'Central African Republic' ? 'selected' : '' }}>
                                                        Central African Republic</option>
                                                    <option value="Chad"
                                                        {{ $client_info->country == 'Chad' ? 'selected' : '' }}>Chad</option>
                                                    <option value="Chile"
                                                        {{ $client_info->country == 'Chile' ? 'selected' : '' }}>Chile
                                                    </option>
                                                    <option value="China"
                                                        {{ $client_info->country == 'China' ? 'selected' : '' }}>China
                                                    </option>
                                                    <option value="Christmas Island"
                                                        {{ $client_info->country == 'Christmas Island' ? 'selected' : '' }}>
                                                        Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands"
                                                        {{ $client_info->country == 'Cocos (Keeling) Islands' ? 'selected' : '' }}>
                                                        Cocos (Keeling) Islands</option>
                                                    <option value="Colombia"
                                                        {{ $client_info->country == 'Colombia' ? 'selected' : '' }}>Colombia
                                                    </option>
                                                    <option value="Comoros"
                                                        {{ $client_info->country == 'Comoros' ? 'selected' : '' }}>Comoros
                                                    </option>
                                                    <option value="Cook Islands"
                                                        {{ $client_info->country == 'Cook Islands' ? 'selected' : '' }}>Cook
                                                        Islands</option>
                                                    <option value="Costa Rica"
                                                        {{ $client_info->country == 'Costa Rica' ? 'selected' : '' }}>Costa
                                                        Rica</option>
                                                    <option value="Côte d Ivoire"
                                                        {{ $client_info->country == 'Côte d Ivoire' ? 'selected' : '' }}>Côte
                                                        d'Ivoire</option>
                                                    <option value="Croatia"
                                                        {{ $client_info->country == 'Croatia' ? 'selected' : '' }}>Croatia
                                                    </option>
                                                    <option value="Cuba"
                                                        {{ $client_info->country == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                                                    <option value="Curaçao"
                                                        {{ $client_info->country == 'Curaçao' ? 'selected' : '' }}>Curaçao
                                                    </option>
                                                    <option value="Czech Republic"
                                                        {{ $client_info->country == 'Czech Republic' ? 'selected' : '' }}>
                                                        Czech Republic</option>
                                                    <option value="Denmark"
                                                        {{ $client_info->country == 'Denmark' ? 'selected' : '' }}>Denmark
                                                    </option>
                                                    <option value="Djibouti"
                                                        {{ $client_info->country == 'Djibouti' ? 'selected' : '' }}>Djibouti
                                                    </option>
                                                    <option value="Dominica"
                                                        {{ $client_info->country == 'Dominica' ? 'selected' : '' }}>Dominica
                                                    </option>
                                                    <option value="Dominican Republic"
                                                        {{ $client_info->country == 'Dominican Republic' ? 'selected' : '' }}>
                                                        Dominican Republic</option>
                                                    <option value="Ecuador"
                                                        {{ $client_info->country == 'Ecuador' ? 'selected' : '' }}>Ecuador
                                                    </option>
                                                    <option value="Egypt"
                                                        {{ $client_info->country == 'Egypt' ? 'selected' : '' }}>Egypt
                                                    </option>
                                                    <option value="El Salvador"
                                                        {{ $client_info->country == 'El Salvador' ? 'selected' : '' }}>El
                                                        Salvador</option>
                                                    <option value="Equatorial Guinea"
                                                        {{ $client_info->country == 'Equatorial Guinea' ? 'selected' : '' }}>
                                                        Equatorial Guinea</option>
                                                    <option value="Eritrea"
                                                        {{ $client_info->country == 'Eritrea' ? 'selected' : '' }}>Eritrea
                                                    </option>
                                                    <option value="Estonia"
                                                        {{ $client_info->country == 'Estonia' ? 'selected' : '' }}>Estonia
                                                    </option>
                                                    <option value="Ethiopia"
                                                        {{ $client_info->country == 'Ethiopia' ? 'selected' : '' }}>Ethiopia
                                                    </option>
                                                    <option value="Falkland Islands (Malvinas)"
                                                        {{ $client_info->country == 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>
                                                        Falkland Islands (Malvinas)</option>
                                                    <option value="Fiji"
                                                        {{ $client_info->country == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                                                    <option value="Finland"
                                                        {{ $client_info->country == 'Finland' ? 'selected' : '' }}>Finland
                                                    </option>
                                                    <option value="France"
                                                        {{ $client_info->country == 'France' ? 'selected' : '' }}>France
                                                    </option>
                                                    <option value="French Polynesia"
                                                        {{ $client_info->country == 'French Polynesia' ? 'selected' : '' }}>
                                                        French Polynesia</option>
                                                    <option value="Gabon"
                                                        {{ $client_info->country == 'Gabon' ? 'selected' : '' }}>Gabon
                                                    </option>
                                                    <option value="Gambia"
                                                        {{ $client_info->country == 'Gambia' ? 'selected' : '' }}>Gambia
                                                    </option>
                                                    <option value="Georgia"
                                                        {{ $client_info->country == 'Georgia' ? 'selected' : '' }}>Georgia
                                                    </option>
                                                    <option value="Germany"
                                                        {{ $client_info->country == 'Germany' ? 'selected' : '' }}>Germany
                                                    </option>
                                                    <option value="Ghana"
                                                        {{ $client_info->country == 'Ghana' ? 'selected' : '' }}>Ghana
                                                    </option>
                                                    <option value="Gibraltar"
                                                        {{ $client_info->country == 'Gibraltar' ? 'selected' : '' }}>Gibraltar
                                                    </option>
                                                    <option value="Greece"
                                                        {{ $client_info->country == 'Greece' ? 'selected' : '' }}>Greece
                                                    </option>
                                                    <option value="Greenland"
                                                        {{ $client_info->country == 'Greenland' ? 'selected' : '' }}>Greenland
                                                    </option>
                                                    <option value="Grenada"
                                                        {{ $client_info->country == 'Grenada' ? 'selected' : '' }}>Grenada
                                                    </option>
                                                    <option value="Guam"
                                                        {{ $client_info->country == 'Guam' ? 'selected' : '' }}>Guam</option>
                                                    <option value="Guatemala"
                                                        {{ $client_info->country == 'Guatemala' ? 'selected' : '' }}>Guatemala
                                                    </option>
                                                    <option value="Guernsey"
                                                        {{ $client_info->country == 'Guernsey' ? 'selected' : '' }}>Guernsey
                                                    </option>
                                                    <option value="Guinea"
                                                        {{ $client_info->country == 'Guinea' ? 'selected' : '' }}>Guinea
                                                    </option>
                                                    <option value="Guinea-Bissau"
                                                        {{ $client_info->country == 'Guinea-Bissau' ? 'selected' : '' }}>
                                                        Guinea-Bissau</option>
                                                    <option value="Haiti"
                                                        {{ $client_info->country == 'Haiti' ? 'selected' : '' }}>Haiti
                                                    </option>
                                                    <option value="Holy See (Vatican City State)"
                                                        {{ $client_info->country == 'Holy See (Vatican City State)' ? 'selected' : '' }}>
                                                        Holy See (Vatican City State)</option>
                                                    <option value="Honduras"
                                                        {{ $client_info->country == 'Honduras' ? 'selected' : '' }}>Honduras
                                                    </option>
                                                    <option value="Hong Kong"
                                                        {{ $client_info->country == 'Hong Kong' ? 'selected' : '' }}>Hong Kong
                                                    </option>
                                                    <option value="Hungary"
                                                        {{ $client_info->country == 'Hungary' ? 'selected' : '' }}>Hungary
                                                    </option>
                                                    <option value="Iceland"
                                                        {{ $client_info->country == 'Iceland' ? 'selected' : '' }}>Iceland
                                                    </option>
                                                    <option value="India"
                                                        {{ $client_info->country == 'India' ? 'selected' : '' }}>India
                                                    </option>
                                                    <option value="Indonesia"
                                                        {{ $client_info->country == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                                    </option>
                                                    <option value="Iran"
                                                        {{ $client_info->country == 'Iran' ? 'selected' : '' }}>Iran</option>
                                                    <option value="Iraq"
                                                        {{ $client_info->country == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                                                    <option value="Ireland"
                                                        {{ $client_info->country == 'Ireland' ? 'selected' : '' }}>Ireland
                                                    </option>
                                                    <option value="Isle of Man"
                                                        {{ $client_info->country == 'Isle of Man' ? 'selected' : '' }}>Isle of
                                                        Man</option>
                                                    <option value="Israel"
                                                        {{ $client_info->country == 'Israel' ? 'selected' : '' }}>Israel
                                                    </option>
                                                    <option value="Italy"
                                                        {{ $client_info->country == 'Italy' ? 'selected' : '' }}>Italy
                                                    </option>
                                                    <option value="Jamaica"
                                                        {{ $client_info->country == 'Jamaica' ? 'selected' : '' }}>Jamaica
                                                    </option>
                                                    <option value="Japan"
                                                        {{ $client_info->country == 'Japan' ? 'selected' : '' }}>Japan
                                                    </option>
                                                    <option value="Jersey"
                                                        {{ $client_info->country == 'Jersey' ? 'selected' : '' }}>Jersey
                                                    </option>
                                                    <option value="Jordan"
                                                        {{ $client_info->country == 'Jordan' ? 'selected' : '' }}>Jordan
                                                    </option>
                                                    <option value="Kazakhstan"
                                                        {{ $client_info->country == 'Kazakhstan' ? 'selected' : '' }}>
                                                        Kazakhstan</option>
                                                    <option value="Kenya"
                                                        {{ $client_info->country == 'Kenya' ? 'selected' : '' }}>Kenya
                                                    </option>
                                                    <option value="Kiribati"
                                                        {{ $client_info->country == 'Kiribati' ? 'selected' : '' }}>Kiribati
                                                    </option>
                                                    <option value="Korea"
                                                        {{ $client_info->country == 'Korea' ? 'selected' : '' }}>Korea
                                                    </option>
                                                    <option value="Kuwait"
                                                        {{ $client_info->country == 'Kuwait' ? 'selected' : '' }}>Kuwait
                                                    </option>
                                                    <option value="Kyrgyzstan"
                                                        {{ $client_info->country == 'Kyrgyzstan' ? 'selected' : '' }}>
                                                        Kyrgyzstan</option>
                                                    <option value="Lao Peoples Democratic Republic"
                                                        {{ $client_info->country == 'Lao Peoples Democratic Republic' ? 'selected' : '' }}>
                                                        Lao People's Democratic Republic</option>
                                                    <option value="Latvia"
                                                        {{ $client_info->country == 'Latvia' ? 'selected' : '' }}>Latvia
                                                    </option>
                                                    <option value="Lebanon"
                                                        {{ $client_info->country == 'Lebanon' ? 'selected' : '' }}>Lebanon
                                                    </option>
                                                    <option value="Lesotho"
                                                        {{ $client_info->country == 'Lesotho' ? 'selected' : '' }}>Lesotho
                                                    </option>
                                                    <option value="Liberia"
                                                        {{ $client_info->country == 'Liberia' ? 'selected' : '' }}>Liberia
                                                    </option>
                                                    <option value="Libya"
                                                        {{ $client_info->country == 'Libya' ? 'selected' : '' }}>Libya
                                                    </option>
                                                    <option value="Liechtenstein"
                                                        {{ $client_info->country == 'Liechtenstein' ? 'selected' : '' }}>
                                                        Liechtenstein</option>
                                                    <option value="Lithuania"
                                                        {{ $client_info->country == 'Lithuania' ? 'selected' : '' }}>Lithuania
                                                    </option>
                                                    <option value="Luxembourg"
                                                        {{ $client_info->country == 'Luxembourg' ? 'selected' : '' }}>
                                                        Luxembourg</option>
                                                    <option value="Macao"
                                                        {{ $client_info->country == 'Macao' ? 'selected' : '' }}>Macao
                                                    </option>
                                                    <option value="Madagascar"
                                                        {{ $client_info->country == 'Madagascar' ? 'selected' : '' }}>
                                                        Madagascar</option>
                                                    <option value="Malawi"
                                                        {{ $client_info->country == 'Malawi' ? 'selected' : '' }}>Malawi
                                                    </option>
                                                    <option value="Malaysia"
                                                        {{ $client_info->country == 'Malaysia' ? 'selected' : '' }}>Malaysia
                                                    </option>
                                                    <option value="Maldives"
                                                        {{ $client_info->country == 'Maldives' ? 'selected' : '' }}>Maldives
                                                    </option>
                                                    <option value="Mali"
                                                        {{ $client_info->country == 'Mali' ? 'selected' : '' }}>Mali</option>
                                                    <option value="Malta"
                                                        {{ $client_info->country == 'Malta' ? 'selected' : '' }}>Malta
                                                    </option>
                                                    <option value="Marshall Islands"
                                                        {{ $client_info->country == 'Marshall Islands' ? 'selected' : '' }}>
                                                        Marshall Islands</option>
                                                    <option value="Martinique"
                                                        {{ $client_info->country == 'Martinique' ? 'selected' : '' }}>
                                                        Martinique</option>
                                                    <option value="Mauritania"
                                                        {{ $client_info->country == 'Mauritania' ? 'selected' : '' }}>
                                                        Mauritania</option>
                                                    <option value="Mauritius"
                                                        {{ $client_info->country == 'Mauritius' ? 'selected' : '' }}>Mauritius
                                                    </option>
                                                    <option value="Mexico"
                                                        {{ $client_info->country == 'Mexico' ? 'selected' : '' }}>Mexico
                                                    </option>
                                                    <option value="Micronesia"
                                                        {{ $client_info->country == 'Micronesia' ? 'selected' : '' }}>
                                                        Micronesia</option>
                                                    <option value="Moldova"
                                                        {{ $client_info->country == 'Moldova' ? 'selected' : '' }}>Moldova
                                                    </option>
                                                    <option value="Monaco"
                                                        {{ $client_info->country == 'Monaco' ? 'selected' : '' }}>Monaco
                                                    </option>
                                                    <option value="Mongolia"
                                                        {{ $client_info->country == 'Mongolia' ? 'selected' : '' }}>Mongolia
                                                    </option>
                                                    <option value="Montenegro"
                                                        {{ $client_info->country == 'Montenegro' ? 'selected' : '' }}>
                                                        Montenegro</option>
                                                    <option value="Montserrat"
                                                        {{ $client_info->country == 'Montserrat' ? 'selected' : '' }}>
                                                        Montserrat</option>
                                                    <option value="Morocco"
                                                        {{ $client_info->country == 'Morocco' ? 'selected' : '' }}>Morocco
                                                    </option>
                                                    <option value="Mozambique"
                                                        {{ $client_info->country == 'Mozambique' ? 'selected' : '' }}>
                                                        Mozambique</option>
                                                    <option value="Myanmar"
                                                        {{ $client_info->country == 'Myanmar' ? 'selected' : '' }}>Myanmar
                                                    </option>
                                                    <option value="Namibia"
                                                        {{ $client_info->country == 'Namibia' ? 'selected' : '' }}>Namibia
                                                    </option>
                                                    <option value="Nauru"
                                                        {{ $client_info->country == 'Nauru' ? 'selected' : '' }}>Nauru
                                                    </option>
                                                    <option value="Nepal"
                                                        {{ $client_info->country == 'Nepal' ? 'selected' : '' }}>Nepal
                                                    </option>
                                                    <option value="Netherlands"
                                                        {{ $client_info->country == 'Netherlands' ? 'selected' : '' }}>
                                                        Netherlands</option>
                                                    <option value="New Zealand"
                                                        {{ $client_info->country == 'New Zealand' ? 'selected' : '' }}>New
                                                        Zealand</option>
                                                    <option value="Nicaragua"
                                                        {{ $client_info->country == 'Nicaragua' ? 'selected' : '' }}>Nicaragua
                                                    </option>
                                                    <option value="Niger"
                                                        {{ $client_info->country == 'Niger' ? 'selected' : '' }}>Niger
                                                    </option>
                                                    <option value="Nigeria"
                                                        {{ $client_info->country == 'Nigeria' ? 'selected' : '' }}>Nigeria
                                                    </option>
                                                    <option value="Niue"
                                                        {{ $client_info->country == 'Niue' ? 'selected' : '' }}>Niue</option>
                                                    <option value="Norfolk Island"
                                                        {{ $client_info->country == 'Norfolk Island' ? 'selected' : '' }}>
                                                        Norfolk Island</option>
                                                    <option value="Northern Mariana Islands"
                                                        {{ $client_info->country == 'Northern Mariana Islands' ? 'selected' : '' }}>
                                                        Northern Mariana Islands</option>
                                                    <option value="Norway"
                                                        {{ $client_info->country == 'Norway' ? 'selected' : '' }}>Norway
                                                    </option>
                                                    <option value="Oman"
                                                        {{ $client_info->country == 'Oman' ? 'selected' : '' }}>Oman</option>
                                                    <option value="Pakistan"
                                                        {{ $client_info->country == 'Pakistan' ? 'selected' : '' }}>Pakistan
                                                    </option>
                                                    <option value="Palau"
                                                        {{ $client_info->country == 'Palau' ? 'selected' : '' }}>Palau
                                                    </option>
                                                    <option value="Palestinian Territory, Occupied"
                                                        {{ $client_info->country == 'Palestinian Territory, Occupied' ? 'selected' : '' }}>
                                                        Palestinian Territory, Occupied</option>
                                                    <option value="Panama"
                                                        {{ $client_info->country == 'Panama' ? 'selected' : '' }}>Panama
                                                    </option>
                                                    <option value="Papua New Guinea"
                                                        {{ $client_info->country == 'Papua New Guinea' ? 'selected' : '' }}>
                                                        Papua New Guinea</option>
                                                    <option value="Paraguay"
                                                        {{ $client_info->country == 'Paraguay' ? 'selected' : '' }}>Paraguay
                                                    </option>
                                                    <option value="Peru"
                                                        {{ $client_info->country == 'Peru' ? 'selected' : '' }}>Peru</option>
                                                    <option value="Philippines"
                                                        {{ $client_info->country == 'Philippines' ? 'selected' : '' }}>
                                                        Philippines</option>
                                                    <option value="Poland"
                                                        {{ $client_info->country == 'Poland' ? 'selected' : '' }}>Poland
                                                    </option>
                                                    <option value="Portugal"
                                                        {{ $client_info->country == 'Portugal' ? 'selected' : '' }}>Portugal
                                                    </option>
                                                    <option value="Puerto Rico"
                                                        {{ $client_info->country == 'Puerto Rico' ? 'selected' : '' }}>Puerto
                                                        Rico</option>
                                                    <option value="Qatar"
                                                        {{ $client_info->country == 'Qatar' ? 'selected' : '' }}>Qatar
                                                    </option>
                                                    <option value="Romania"
                                                        {{ $client_info->country == 'Romania' ? 'selected' : '' }}>Romania
                                                    </option>
                                                    <option value="Russian Federation"
                                                        {{ $client_info->country == 'Russian Federation' ? 'selected' : '' }}>
                                                        Russian Federation</option>
                                                    <option value="Rwanda"
                                                        {{ $client_info->country == 'Rwanda' ? 'selected' : '' }}>Rwanda
                                                    </option>
                                                    <option value="Saint Barthélemy"
                                                        {{ $client_info->country == 'Saint Barthélemy' ? 'selected' : '' }}>
                                                        Saint Barthélemy</option>
                                                    <option value="Saint Kitts and Nevis"
                                                        {{ $client_info->country == 'Saint Kitts and Nevis' ? 'selected' : '' }}>
                                                        Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia"
                                                        {{ $client_info->country == 'Saint Lucia' ? 'selected' : '' }}>Saint
                                                        Lucia</option>
                                                    <option value="Saint Martin (French part)"
                                                        {{ $client_info->country == 'Saint Martin (French part)' ? 'selected' : '' }}>
                                                        Saint Martin (French part)</option>
                                                    <option value="Saint Vincent and the Grenadines"
                                                        {{ $client_info->country == 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>
                                                        Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa"
                                                        {{ $client_info->country == 'Samoa' ? 'selected' : '' }}>Samoa
                                                    </option>
                                                    <option value="San Marino"
                                                        {{ $client_info->country == 'San Marino' ? 'selected' : '' }}>San
                                                        Marino</option>
                                                    <option value="Sao Tome and Principe"
                                                        {{ $client_info->country == 'Sao Tome and Principe' ? 'selected' : '' }}>
                                                        Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia"
                                                        {{ $client_info->country == 'Saudi Arabia' ? 'selected' : '' }}>Saudi
                                                        Arabia</option>
                                                    <option value="Senegal"
                                                        {{ $client_info->country == 'Senegal' ? 'selected' : '' }}>Senegal
                                                    </option>
                                                    <option value="Serbia"
                                                        {{ $client_info->country == 'Serbia' ? 'selected' : '' }}>Serbia
                                                    </option>
                                                    <option value="Seychelles"
                                                        {{ $client_info->country == 'Seychelles' ? 'selected' : '' }}>
                                                        Seychelles</option>
                                                    <option value="Sierra Leone"
                                                        {{ $client_info->country == 'Sierra Leone' ? 'selected' : '' }}>Sierra
                                                        Leone</option>
                                                    <option value="Singapore"
                                                        {{ $client_info->country == 'Singapore' ? 'selected' : '' }}>Singapore
                                                    </option>
                                                    <option value="Sint Maarten (Dutch part)"
                                                        {{ $client_info->country == 'Sint Maarten (Dutch part)' ? 'selected' : '' }}>
                                                        Sint Maarten (Dutch part)</option>
                                                    <option value="Slovakia"
                                                        {{ $client_info->country == 'Slovakia' ? 'selected' : '' }}>Slovakia
                                                    </option>
                                                    <option value="Slovenia"
                                                        {{ $client_info->country == 'Slovenia' ? 'selected' : '' }}>Slovenia
                                                    </option>
                                                    <option value="Solomon Islands"
                                                        {{ $client_info->country == 'Solomon Islands' ? 'selected' : '' }}>
                                                        Solomon Islands</option>
                                                    <option value="Somalia"
                                                        {{ $client_info->country == 'Somalia' ? 'selected' : '' }}>Somalia
                                                    </option>
                                                    <option value="South Africa"
                                                        {{ $client_info->country == 'South Africa' ? 'selected' : '' }}>South
                                                        Africa</option>
                                                    <option value="South Korea"
                                                        {{ $client_info->country == 'South Korea' ? 'selected' : '' }}>South
                                                        Korea</option>
                                                    <option value="South Sudan"
                                                        {{ $client_info->country == 'South Sudan' ? 'selected' : '' }}>South
                                                        Sudan</option>
                                                    <option value="Spain"
                                                        {{ $client_info->country == 'Spain' ? 'selected' : '' }}>Spain
                                                    </option>
                                                    <option value="Sri Lanka"
                                                        {{ $client_info->country == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka
                                                    </option>
                                                    <option value="Sudan"
                                                        {{ $client_info->country == 'Sudan' ? 'selected' : '' }}>Sudan
                                                    </option>
                                                    <option value="Suriname"
                                                        {{ $client_info->country == 'Suriname' ? 'selected' : '' }}>Suriname
                                                    </option>
                                                    <option value="Swaziland"
                                                        {{ $client_info->country == 'Swaziland' ? 'selected' : '' }}>Swaziland
                                                    </option>
                                                    <option value="Sweden"
                                                        {{ $client_info->country == 'Sweden' ? 'selected' : '' }}>Sweden
                                                    </option>
                                                    <option value="Switzerland"
                                                        {{ $client_info->country == 'Switzerland' ? 'selected' : '' }}>
                                                        Switzerland</option>
                                                    <option value="Syrian Arab Republic"
                                                        {{ $client_info->country == 'Syrian Arab Republic' ? 'selected' : '' }}>
                                                        Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China"
                                                        {{ $client_info->country == 'Taiwan, Province of China' ? 'selected' : '' }}>
                                                        Taiwan, Province of China</option>
                                                    <option value="Tajikistan"
                                                        {{ $client_info->country == 'Tajikistan' ? 'selected' : '' }}>
                                                        Tajikistan</option>
                                                    <option value="Tanzania, United Republic of"
                                                        {{ $client_info->country == 'Tanzania, United Republic of' ? 'selected' : '' }}>
                                                        Tanzania, United Republic of</option>
                                                    <option value="Thailand"
                                                        {{ $client_info->country == 'Thailand' ? 'selected' : '' }}>Thailand
                                                    </option>
                                                    <option value="Togo"
                                                        {{ $client_info->country == 'Togo' ? 'selected' : '' }}>Togo</option>
                                                    <option value="Tokelau"
                                                        {{ $client_info->country == 'Tokelau' ? 'selected' : '' }}>Tokelau
                                                    </option>
                                                    <option value="Tonga"
                                                        {{ $client_info->country == 'Tonga' ? 'selected' : '' }}>Tonga
                                                    </option>
                                                    <option value="Trinidad and Tobago"
                                                        {{ $client_info->country == 'Trinidad and Tobago' ? 'selected' : '' }}>
                                                        Trinidad and Tobago</option>
                                                    <option value="Tunisia"
                                                        {{ $client_info->country == 'Tunisia' ? 'selected' : '' }}>Tunisia
                                                    </option>
                                                    <option value="Turkey"
                                                        {{ $client_info->country == 'Turkey' ? 'selected' : '' }}>Turkey
                                                    </option>
                                                    <option value="Turkmenistan"
                                                        {{ $client_info->country == 'Turkmenistan' ? 'selected' : '' }}>
                                                        Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands"
                                                        {{ $client_info->country == 'Turks and Caicos Islands' ? 'selected' : '' }}>
                                                        Turks and Caicos Islands</option>
                                                    <option value="Tuvalu"
                                                        {{ $client_info->country == 'Tuvalu' ? 'selected' : '' }}>Tuvalu
                                                    </option>
                                                    <option value="Uganda"
                                                        {{ $client_info->country == 'Uganda' ? 'selected' : '' }}>Uganda
                                                    </option>
                                                    <option value="Ukraine"
                                                        {{ $client_info->country == 'Ukraine' ? 'selected' : '' }}>Ukraine
                                                    </option>
                                                    <option value="United Arab Emirates"
                                                        {{ $client_info->country == 'United Arab Emirates' ? 'selected' : '' }}>
                                                        United Arab Emirates</option>
                                                    <option value="United Kingdom"
                                                        {{ $client_info->country == 'United Kingdom' ? 'selected' : '' }}>
                                                        United Kingdom</option>
                                                    <option value="United States"
                                                        {{ $client_info->country == 'United States' ? 'selected' : '' }}>
                                                        United States</option>
                                                    <option value="Uruguay"
                                                        {{ $client_info->country == 'Uruguay' ? 'selected' : '' }}>Uruguay
                                                    </option>
                                                    <option value="Uzbekistan"
                                                        {{ $client_info->country == 'Uzbekistan' ? 'selected' : '' }}>
                                                        Uzbekistan</option>
                                                    <option value="Vanuatu"
                                                        {{ $client_info->country == 'Vanuatu' ? 'selected' : '' }}>Vanuatu
                                                    </option>
                                                    <option value="Venezuela, Bolivarian Republic of"
                                                        {{ $client_info->country == 'Venezuela, Bolivarian Republic of' ? 'selected' : '' }}>
                                                        Venezuela, Bolivarian Republic of</option>
                                                    <option value="Vietnam"
                                                        {{ $client_info->country == 'Vietnam' ? 'selected' : '' }}>Vietnam
                                                    </option>
                                                    <option value="Yemen"
                                                        {{ $client_info->country == 'Yemen' ? 'selected' : '' }}>Yemen
                                                    </option>
                                                    <option value="Zambia"
                                                        {{ $client_info->country == 'Zambia' ? 'selected' : '' }}>Zambia
                                                    </option>
                                                    <option value="Zimbabwe"
                                                        {{ $client_info->country == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe
                                                    </option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">{{ trans('message.E-Mail') }}</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="email" name="email"
                                            class="form-control form-control-lg form-control-solid" placeholder="email"
                                            value="{{ $client_info->email }}" required />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">{{ trans('message.Phone') }}</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="tel" name="telephone"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="021 111 111 111" value="{{ $client_info->telephone }}"
                                            required />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">{{ trans('message.Mobile') }}</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="tel" name="mobile_number"
                                            class="form-control form-control-lg form-control-solid" placeholder="Mobile"
                                            value="{{ $client_info->mobile_number }}" required />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label fw-bold fs-6">{{ trans('message.Website') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="website"
                                            class="form-control form-control-lg form-control-solid" placeholder="website"
                                            value="{{ $client_info->website }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label fw-bold fs-6">{{ trans('message.VAT number') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="vat"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="DE324699798" value="{{ $client_info->vat_id }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label fw-bold fs-6">{{ trans('message.Registration number') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="registration_number"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="HRB213676" value="{{ $client_info->registration_number }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                {{-- <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.Language') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <!--begin::Input-->
                                        <select name="language" aria-label="Select..." data-control="select2"
                                            data-placeholder="Select..."
                                            class="form-select form-select-solid form-select-lg" required>
                                            <option value="">Select...</option>

                                            <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia -
                                                Indonesian</option>
                                            <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay
                                            </option>
                                            <option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan
                                            </option>
                                            <option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech
                                            </option>
                                            <option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish
                                            </option>
                                            <option data-kt-flag="flags/germany.svg" value="de" selected>Deutsch -
                                                German</option>
                                            <option data-kt-flag="flags/united-kingdom.svg" value="en">English
                                            </option>
                                            <option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK -
                                                British English</option>
                                            <option data-kt-flag="flags/spain.svg" value="es">Español - Spanish
                                            </option>
                                            <option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
                                            <option data-kt-flag="flags/france.svg" value="fr">Français - French
                                            </option>
                                            <option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)
                                            </option>
                                            <option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician
                                                (beta)</option>
                                            <option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian
                                            </option>
                                            <option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian
                                            </option>
                                            <option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian
                                            </option>
                                            <option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch
                                            </option>
                                            <option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian
                                            </option>
                                            <option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish
                                            </option>
                                            <option data-kt-flag="flags/portugal.svg" value="pt">Português -
                                                Portuguese</option>
                                            <option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian
                                            </option>
                                            <option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak
                                            </option>
                                            <option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish
                                            </option>
                                            <option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska - Swedish
                                            </option>
                                            <option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt -
                                                Vietnamese</option>
                                            <option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish
                                            </option>
                                            <option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek
                                            </option>
                                            <option data-kt-flag="flags/bulgaria.svg" value="bg">Български език -
                                                Bulgarian</option>
                                            <option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian
                                            </option>
                                            <option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian
                                            </option>
                                            <option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова -
                                                Ukrainian</option>
                                            <option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew
                                            </option>
                                            <option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)
                                            </option>
                                            <option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic
                                            </option>
                                            <option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian
                                            </option>
                                            <option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi
                                            </option>
                                            <option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
                                            <option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla
                                            </option>
                                            <option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati
                                            </option>
                                            <option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
                                            <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ -
                                                Kannada</option>
                                            <option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai
                                            </option>
                                            <option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean
                                            </option>
                                            <option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese</option>
                                            <option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified
                                                Chinese</option>
                                            <option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional
                                                Chinese</option>
                                        </select>
                                        <!--end::Input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Please select the default language for your company. This
                                            affects the date, time, numbers, and appropriate formatting.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Col-->
                                </div> --}}
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                {{-- <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label
                                        class="col-lg-4 col-form-label required fw-bold fs-6">{{ trans('message.Timezone') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select name="timezone" aria-label="Select..." data-control="select2"
                                            data-placeholder="Select..."
                                            class="form-select form-select-solid form-select-lg" required>
                                            <option value="">Select...</option>
                                            <option data-bs-offset="-39600" value="International Date Line West">
                                                (GMT-11:00) International Date Line West</option>
                                            <option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway
                                                Island</option>
                                            <option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                            <option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                            <option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                            <option data-bs-offset="-25200" value="Pacific Time (US &amp; Canada)">
                                                (GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                            <option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                            <option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                            <option data-bs-offset="-21600" value="Mountain Time (US &amp; Canada)">
                                                (GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                            <option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua
                                            </option>
                                            <option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                            <option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan
                                            </option>
                                            <option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central
                                                America</option>
                                            <option data-bs-offset="-18000" value="Central Time (US &amp; Canada)">
                                                (GMT-05:00) Central Time (US &amp; Canada)</option>
                                            <option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara
                                            </option>
                                            <option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City
                                            </option>
                                            <option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey
                                            </option>
                                            <option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                            <option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                            <option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                            <option data-bs-offset="-14400" value="Eastern Time (US &amp; Canada)">
                                                (GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                            <option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana
                                                (East)</option>
                                            <option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                            <option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                            <option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown
                                            </option>
                                            <option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00)
                                                Atlantic Time (Canada)</option>
                                            <option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                            <option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                            <option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires
                                            </option>
                                            <option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland
                                            </option>
                                            <option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland
                                            </option>
                                            <option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic
                                            </option>
                                            <option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde
                                                Is.</option>
                                            <option data-bs-offset="0" value="Azores">(GMT) Azores</option>
                                            <option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                            <option data-bs-offset="0" value="UTC">(GMT) UTC</option>
                                            <option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                            <option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                            <option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                            <option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
                                            <option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca
                                            </option>
                                            <option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West
                                                Central Africa</option>
                                            <option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                            <option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava
                                            </option>
                                            <option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                            <option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                            <option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                            <option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                            <option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                            <option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                            <option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                            <option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                            <option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen
                                            </option>
                                            <option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                            <option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                            <option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                            <option data-bs-offset="7200" value="Berlin" selected>(GMT+02:00) Berlin
                                            </option>
                                            <option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                            <option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                            <option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm
                                            </option>
                                            <option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                            <option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                            <option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                            <option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                            <option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest
                                            </option>
                                            <option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki
                                            </option>
                                            <option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                            <option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                            <option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                            <option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                            <option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                            <option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                            <option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                            <option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul
                                            </option>
                                            <option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                            <option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem
                                            </option>
                                            <option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                            <option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St.
                                                Petersburg</option>
                                            <option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd
                                            </option>
                                            <option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                            <option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                            <option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                            <option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                            <option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi
                                            </option>
                                            <option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                            <option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                            <option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                            <option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                            <option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                            <option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                            <option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg
                                            </option>
                                            <option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad
                                            </option>
                                            <option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                            <option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent
                                            </option>
                                            <option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                            <option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                            <option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                            <option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi
                                            </option>
                                            <option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri
                                                Jayawardenepura</option>
                                            <option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu
                                            </option>
                                            <option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                            <option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                            <option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                            <option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                            <option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                            <option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk
                                            </option>
                                            <option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                            <option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                            <option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                            <option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk
                                            </option>
                                            <option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                            <option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing
                                            </option>
                                            <option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong
                                            </option>
                                            <option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur
                                            </option>
                                            <option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore
                                            </option>
                                            <option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                            <option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                            <option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                            <option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar
                                            </option>
                                            <option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                            <option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                            <option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                            <option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                            <option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                            <option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                            <option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide
                                            </option>
                                            <option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra
                                            </option>
                                            <option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne
                                            </option>
                                            <option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                            <option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane
                                            </option>
                                            <option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                            <option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok
                                            </option>
                                            <option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                            <option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby
                                            </option>
                                            <option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.
                                            </option>
                                            <option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                            <option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New
                                                Caledonia</option>
                                            <option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                            <option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka
                                            </option>
                                            <option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.
                                            </option>
                                            <option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland
                                            </option>
                                            <option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington
                                            </option>
                                            <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nukualofa
                                            </option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div> --}}

                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary me-2">{{ trans('message.Discard') }}</button>
                                <button type="submit"
                                    class="btn btn-primary">{{ trans('message.Save Changes') }}</button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Basic info-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
