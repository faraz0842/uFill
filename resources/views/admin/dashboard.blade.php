@extends('admin.master')
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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.admin') }} >
                        {{ trans('message.dashboard') }}</small>
                    <!--end::Description-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <div class="form-group m-3">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
        </div>
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container - class="container-xxl"-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xxl-6 mb-lg-10 mb-xl-5 mb-xxl-10">
                        <div class="row g-5 g-lg-10">
                            <div class="col-md-6 col-xl-6 mb-md-5 mb-xxl-10">
                                <!--begin::Card widget 8-->
                                <div class="card overflow-hidden h-md-50 mb-5 mb-lg-10">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                        <!--begin::Statistics-->
                                        <div class="mb-4 px-9">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Value-->
                                                <span
                                                    class="fs-2hx fw-bolder text-gray-800 lh-1">{{ Helper::money_format('EUR','de_DE',Helper::clients_total_revenue()) }}</span>

                                                <!--end::Value-->
                                                <!--begin::Currency-->
                                                <span
                                                    class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">€</span>
                                                <!--end::Currency-->
                                                <!--begin::Label-->
                                                @if ($total_revenue_per <= 0)
                                                    <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                        <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Angle-down.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999) " />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->{{ round($total_revenue_per) }}%
                                                        </span>
                                                    </span>
                                                @elseif ($total_revenue_per <= 20)
                                                    <span class="badge badge-info fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                                        style="background-color:orange">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                        <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.5"
                                                                    d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        {{-- <!--end::Svg Icon-->{{round($check_client_progress, 2)}}% --}}
                                                        {{ round($total_revenue_per) }}%

                                                    </span>
                                                @else
                                                    <span
                                                        class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                        <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.5"
                                                                    d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        {{-- <!--end::Svg Icon-->{{round($check_client_progress, 2)}}% --}}
                                                        {{ round($total_revenue_per) }}%

                                                    </span>
                                                @endif

                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Description-->
                                            <span
                                                class="fs-6 fw-bold text-gray-400">{{ trans('message.Total Revenue') }}</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="{{ trans('message.This graph shows the total monthly revenue of the last 12 months.') }}"
                                                aria-label="{{ trans('message.This graph shows the total monthly revenue of the last 12 months.') }}"></i>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="total_evenue_chart" class="min-h-auto" style="height: 125px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 8-->
                                <!--begin::Card widget 5-->
                                <div class="card card-flush h-md-50 mb-lg-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Amount-->
                                                <span class="fs-2hx fw-bolder text-dark lh-1">{{ Helper::invoice_open_cost() }}</span>
                                                <!--end::Amount-->
                                                <!--begin::Currency-->
                                                <span
                                                    class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">€</span>
                                                <!--end::Currency-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span
                                                class="text-gray-400 pt-1 fw-bold fs-6">{{ trans('message.Sum of open client invoices in the current month.') }}</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end pt-0">
                                        <!--begin::Progress-->
                                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                @php
                                                    if ($paid_invoices_count == 0 && $unpaid_invoices_count == 0) {
                                                        $progress = 0;
                                                    } else {
                                                        $progress = ($amount_paid_sum / ($total_amount_sum)) * 100;
                                                    }
                                                @endphp
                                                <span class="fw-boldest fs-6 text-dark">{{ Helper::money_format('EUR','de_DE',$amount_paid_sum - $remaining_amount_sum) }}€ von
                                                    {{ Helper::money_format('EUR','de_DE',$total_amount_sum) }}€</span>
                                                    @if ($progress == 100)
                                                        <span class="fw-bolder fs-6 text-gray-400">{{ $progress  }}%</span>
                                                    @else
                                                        <span class="fw-bolder fs-6 text-gray-400">{{ number_format($progress,2)  }}%</span>
                                                    @endif

                                            </div>
                                            <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                                @if ($progress <= 25)
                                                    <div class="bg-danger rounded h-8px" role="progressbar"
                                                        style="width: {{ number_format($progress,2) }}%;" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                @elseif($progress <= 50)
                                                    <div class="bg-warning rounded h-8px" role="progressbar"
                                                        style="width: {{ number_format($progress,2) }}%;" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                @else
                                                    <div class="bg-success rounded h-8px" role="progressbar"
                                                        style="width: {{ number_format($progress,2) }}%;" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 5-->
                            </div>
                            <div class="col-md-6 col-xl-6 mb-md-5 mb-xxl-10">
                                <!--begin::Card widget 9-->
                                <div class="card overflow-hidden h-md-50 mb-5 mb-lg-10">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                        <!--begin::Statistics-->
                                        <div class="mb-4 px-9">
                                            <!--begin::Statistics-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Value-->
                                                <span
                                                    class="fs-2hx fw-bolder text-gray-800 lh-1">{{ $active_client_count }}</span>
                                                <!--end::Value-->
                                                <!--begin::Currency-->
                                                <span
                                                    class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">x</span>
                                                <!--end::Currency-->
                                                <!--begin::Label-->
                                                @if ($check_client_progress <= 0)
                                                    <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                        <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Angle-down.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999) " />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->{{ round($check_client_progress) }}%
                                                        </span>
                                                    </span>
                                                @elseif($check_client_progress <= 20)
                                                    <span class="badge  fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                                        style="background-color:orange">
                                                        <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Angle-down.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999) " />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->{{ round($check_client_progress) }}%
                                                        </span>
                                                    </span>
                                                @else
                                                    <span
                                                        class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                        <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.5"
                                                                    d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{ round($check_client_progress) }}%
                                                    </span>
                                                @endif

                                                <!--end::Label-->
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span
                                                class="fs-6 fw-bold text-gray-400">{{ trans('message.Active Clients') }}</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="{{ trans('message.This graph shows the number of total customers in the past 12 months.(total / active / cancelled)') }}"
                                                aria-label="{{ trans('message.This graph shows the number of total customers in the past 12 months.(total / active / cancelled)') }}"></i>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="active_clients_graph" class="min-h-auto" style="height: 125px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 9-->
                                <!--begin::Card widget 7-->
                                <div class="card card-flush h-md-50 mb-lg-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Amount-->
                                            <span
                                                class="fs-2hx fw-bolder text-dark me-2 lh-1">{{ $last_30_days_clients->count() }}</span>
                                            <!--end::Amount-->
                                            <!--begin::Subtitle-->
                                            <span
                                                class="text-gray-400 pt-1 fw-bold fs-6">{{ trans('message.New Clients') }}</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column justify-content-end">
                                        <!--begin::Title-->
                                        <span
                                            class="fs-6 fw-boldest text-gray-800 d-block mb-2">{{ trans('message.New clients of the last 30 days') }}...</span>
                                        <!--end::Title-->
                                        <!--begin::Users group-->
                                        <div class="symbol-group symbol-hover">
                                            {{-- @foreach ($client_name as $item) --}}
                                            {{-- <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                title="{{$item}}"> <span
                                                class="symbol-label bg-warning text-inverse-warning fw-bolder">F</span>
                                            </div> --}}
                                            {{-- @endforeach --}}

                                            @foreach ($client_pictures as $item)
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    title="{{ $item->first_name . ' ' . $item->last_name }}">
                                                    @if ($item->profile_picture)
                                                    {{-- <a href="{{Route('admin.client.view',[$item->id,$item->stripe_id])}}"> --}}
                                                    <img alt="Pic" src="{{ URL::asset($item->profile_picture) }}" />
                                                {{-- </a> --}}

                                                    @else
                                                    {{-- <a href="{{Route('admin.client.view',[$item->id,$item->stripe_id])}}"> --}}
                                                    <img alt="Pic"
                                                            src="{{ asset('assets/media/svg/avatars/blank.svg') }}" />
                                                    {{-- </a> --}}

                                                    @endif

                                                </div>
                                            @endforeach

                                            {{-- <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Susan Redwood">
                                            <span
                                                class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Melody Macy">
                                            <img alt="Pic"
                                                src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Perry Matthew">
                                            <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Barry Walter">
                                            <img alt="Pic"
                                                src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                        </div> --}}
                                            {{-- <a href="#" class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-gray-900 text-gray-300 fs-8 fw-bolder">+{{$last_30_days_client}}</span>
                                        </a> --}}
                                        </div>
                                        <!--end::Users group-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 7-->
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6 mb-5 mb-lg-10">
                        <!--begin::Maps widget 1-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">{{ trans('message.World Map') }}</span>
                                    <span
                                        class="text-gray-400 pt-2 fw-bold fs-6">{{ trans('message.Overview of client origin') }}</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-center">
                                <!--begin::Map container-->
                                <div id="kt_maps_widget_1_map" class="w-100 h-350px"></div>
                                <!--end::Map container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Maps widget 1-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::uFill Costs Overview-->
                <div class="row gy-5 g-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Table Widget 5-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span
                                        class="card-label fw-bolder text-dark">{{ trans('message.uFill Costs Overview') }}</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <!--begin::Search-->
                                        <a href="https://dashboard.stripe.com/" target="_blank" class="btn btn-sm"
                                            style="background-color: rgb(241, 241, 241)">{{ trans('message.Go To Stripe') }}</a>
                                        <a href="{{ Route('admin.costoverview.store') }}"
                                            class="btn btn-light-primary btn-sm">{{ trans('message.Update Packages and Prices') }}</a>
                                        <!-- Button trigger modal -->


                                        <!--begin::Modal - Add cost overview -->
                                        <div class="modal fade" id="add_cost_overview" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bolder">{{ trans('message.Add Cost Overview') }}
                                                        </h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                            data-bs-dismiss="modal">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                                        fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                                                            action="{{ Route('admin.costoverview.store') }}" method="post">
                                                            @csrf
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fs-6 fw-bold form-label mb-2">{{ trans('message.variant') }}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid"
                                                                    name="variant" value="" />
                                                                <!--end::Input-->
                                                                @if ($errors->has('variant'))
                                                                    <div class="text-danger">
                                                                        {{ $errors->first('variant') }}</div>
                                                                @endif
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fs-6 fw-bold form-label mb-2">{{ trans('message.description') }}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <textarea rows="5" type="text" class="form-control form-control-solid" name="description" value=""></textarea>
                                                                <!--end::Input-->
                                                                @if ($errors->has('description'))
                                                                    <div class="text-danger">
                                                                        {{ $errors->first('description') }}</div>
                                                                @endif
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fs-6 fw-bold form-label mb-2">{{ trans('message.runtime') }}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid"
                                                                    name="runtime" value="" />
                                                                <!--end::Input-->
                                                                @if ($errors->has('runtime'))
                                                                    <div class="text-danger">
                                                                        {{ $errors->first('runtime') }}</div>
                                                                @endif
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fs-6 fw-bold form-label mb-2">{{ trans('message.price') }}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid"
                                                                    name="price" value="" />
                                                                <!--end::Input-->
                                                                @if ($errors->has('price'))
                                                                    <div class="text-danger">
                                                                        {{ $errors->first('price') }}</div>
                                                                @endif
                                                            </div>
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
                                    </div>
                                    <!--begin::Filters-->
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
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.variant') }}</th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.description') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-150px">
                                                {{ trans('message.Number of clients with this package') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.runtime') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.price') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Money saved') }}<i
                                                    class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Clients save these costs if they choose a longer runtime."></i>
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">
                                                {{ trans('message.Client Discounts') }}</th>
                                            <th class="text-center pe-3 min-w-100px">
                                                {{ trans('message.Total monthly Revenue') }}<i
                                                    class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Calculated monthly income depending on the variant."></i>
                                            </th>
                                            {{-- <th class="text-center pe-3 min-w-50px">{{trans('message.Option')}}</th> --}}
                                        </tr>
                                        <!--end::Table row-->


                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($costs_overview as $cost_overview)

                                            <tr>
                                                <!--begin::Shipment ID-->
                                                <td class="text-left">{{ $cost_overview->variant_id }}</td>
                                                <!--end::Shipment ID-->
                                                <!--begin::Transport-->
                                                <td class="text-center">{{ $cost_overview->name }}</td>
                                                <!--end::Transport-->
                                                <!--begin::Type-->
                                                <td class="text-center">{{ $cost_overview->description }}</td>
                                                <!--end::Type-->
                                                <!--begin::Type-->
                                                @php
                                                    $total_number_of_client = App\Models\CLient::where('account_type', $cost_overview->variant_id)
                                                            ->where('account_plan', $cost_overview->plan)
                                                            ->count();

                                                    $client_discounts = App\Models\Transaction::where('package_id',$cost_overview->plan_id)->sum('discount_price');
                                                    $fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
                                                    $monthly_price = App\Models\VariantPlan::where('variant_id',$cost_overview->variant_id)->where('plan','month')->pluck('price')->first();
                                                    $yearly_price = App\Models\VariantPlan::where('variant_id',$cost_overview->variant_id)->where('plan','year')->pluck('price')->first();

                                                    $amount_of_discount = (($monthly_price * 12) - $yearly_price);
                                                    $amount_of_discount = $amount_of_discount != null ? $amount_of_discount : 0;

                                                    $amount_of_discount_in_percent = (((($monthly_price * 12) - $yearly_price) * 100) / ($monthly_price * 12));
                                                    $amount_of_discount_in_percent = $amount_of_discount_in_percent != null ? $amount_of_discount_in_percent : 0;

                                                    if ($cost_overview->plan == 'month') {
                                                        $total_revenue = (($total_number_of_client * $cost_overview->price) - $client_discounts );
                                                        $client_discount = $client_discounts;
                                                    } elseif($cost_overview->plan == 'year') {
                                                        $total_revenue = (($total_number_of_client * $cost_overview->price) - $client_discounts ) / 12;
                                                        $client_discount = round($client_discounts / 12);
                                                        $total_revenue = round($total_revenue);
                                                    }


                                                @endphp
                                                <td class="text-center">{{ $total_number_of_client }}</td>
                                                <!--end::Type-->
                                                <!--begin::Weight-->
                                                <td class="text-center">{{ $cost_overview->plan }}</td>
                                                <!--end::Weight-->
                                                <!--begin::price-->
                                                <td class="text-center">{{ Helper::money_format('EUR','de_DE',$cost_overview->price) }}€</td>
                                                <!--end::price-->
                                                <!--begin::price-->

                                                @if ($cost_overview->plan == 'year')
                                                    {{-- <td class="text-center">{{number_format($amount_of_discount_in_percent,2)}} % / {{ numfmt_format_currency($fmt, Helper::money_format('EUR','de_DE',$amount_of_discount), "EUR") }}</td> --}}
                                                    <td class="text-center">{{number_format($amount_of_discount_in_percent,2)}} % / {{ Helper::money_format('EUR','de_DE',$amount_of_discount)}}</td>
                                                @else
                                                    <td class="text-center">xxx</td>
                                                @endif

                                                <!--end::price-->
                                                <!--begin::price-->
                                                <td class="text-center">{{ Helper::money_format('EUR','de_DE',$client_discount) }}€</td>
                                                {{-- <td class="text-center">{{ $client_discounts }}€</td> --}}
                                                <!--end::price-->
                                                <!--begin::price-->
                                                {{-- <td class="text-center">{{ numfmt_format_currency($fmt, Helper::money_format('EUR','de_DE',$total_revenue), "EUR") }}€</td> --}}
                                                <td class="text-center">{{ Helper::money_format('EUR','de_DE',$total_revenue)}}€</td>
                                                {{-- <td class="text-center">{{$total_revenue}}€</td> --}}
                                                <!--end::price-->
                                            </tr>

                                            <!--begin::Modal - Add cost overview -->
                                            <div class="modal fade" id="edit_overview{{ $cost_overview->variant_id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">
                                                                {{ trans('message.Edit Cost Overview') }}</h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                                                                action="{{ Route('admin.costoverview.update', $cost_overview->variant_id) }}"
                                                                method="post">
                                                                @csrf
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.variant') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="variant"
                                                                        value="{{ old('variant', $cost_overview->variant) }}" />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('variant'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('variant') }}</div>
                                                                    @endif
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.description') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <textarea rows="5" type="text" class="form-control form-control-solid" name="description">{{ old('description', $cost_overview->description) }}</textarea>
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('description'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('description') }}</div>
                                                                    @endif
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.runtime') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="runtime"
                                                                        value="{{ old('runtime', $cost_overview->runtime) }}" />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('runtime'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('runtime') }}</div>
                                                                    @endif
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.price') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    {{-- <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" placeholder="e.g . 500 cent" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                                        <span class="input-group-text" id="basic-addon2">cent</span>
                                                                    </div> --}}
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="price"
                                                                        value="{{ old('price', $cost_overview->price) }}" />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('price'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('price') }}</div>
                                                                    @endif
                                                                </div>
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
                        <!--end::Table Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::uFill Activity Overview-->
                <div class="row gy-5 g-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Table Widget 5-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span
                                        class="card-label fw-bolder text-dark">{{ trans('message.uFill Activity Overview') }}</span>
                                    <span
                                        class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.Client Activities') }}...</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Table-->
                                <table class="table kt_datatable_example_1  table-row-bordered gy-5">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-25px">{{ trans('message.id') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Client ID') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Client Name') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Company Name') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Package') }}</th>
                                            <th class="text-center pe-3 min-w-175px">{{ trans('message.Type') }}</th>
                                            <th class="text-center pe-3 min-w-75px">{{ trans('message.Date') }}</th>
                                            <th class="text-center pe-3 min-w-75px">{{ trans('message.Time') }}</th>
                                            {{-- <th class="text-end pe-3 min-w-50px">Options</th> --}}
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($logs as $log)
                                            <tr>
                                                <!--begin::ID-->
                                                <td class="text-left">{{ $log->log_id }}</td>
                                                <!--end::ID-->
                                                <!--begin::Client-->
                                                <td class="text-center">{{ $log->client_id }}</td>
                                                <!--end::Client-->
                                                <!--begin::Client-->
                                                <td class="text-center">{{ $log->first_name . ' ' . $log->last_name }}</td>
                                                <!--end::Client-->
                                                <!--begin::Client-->
                                                <td class="text-center">{{ $log->company_name }}</td>
                                                <!--end::Client-->
                                                <!--begin::Client-->
                                                <td class="text-center">{{ $log->account_type }}</td>
                                                <!--end::Client-->
                                                <!--begin::Description-->
                                                <td class="text-center">{{ $log->description }}</td>
                                                <!--end::Description-->
                                                <!--begin::Date-->
                                                <td class="text-center">
                                                    {{ date('d-M-Y', strtotime($log->created_at)) }}</td>
                                                <!--end::Date-->
                                                <!--begin::Time-->
                                                <td class="text-center">
                                                    {{ date('h:i A', strtotime($log->created_at)) }}</td>
                                                <!--end::Time-->
                                                {{-- <!--begin::options-->
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4
                                                    5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189
                                                    21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822
                                                    20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                        <!--end::options--> --}}
                                            </tr>
                                        @endforeach


                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Table Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Discount Codes-->
                <div class="row gy-5 g-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Table Widget 5-->
                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span
                                        class="card-label fw-bolder text-dark">{{ trans('message.uFill Discount Codes') }}</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <!--begin::Search-->
                                        <a data-bs-toggle="modal" data-bs-target="#add_discount_codes"
                                            class="btn btn-light btn-sm">{{ trans('message.Add New Code') }}</a>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Filters-->
                                </div>
                                <!--end::Actions-->
                                <!--begin::Modal - Add discount codes -->
                                <div class="modal fade" id="add_discount_codes" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bolder">{{ trans('message.Add Discount Codes') }}</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <button class="btn btn-icon btn-sm btn-active-icon-primary"
                                                    data-bs-dismiss="modal">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                rx="1" transform="rotate(-45 6 17.3137)"
                                                                fill="currentColor" />
                                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <!--begin::Form-->
                                                <form class="form"
                                                    action="{{ Route('admin.discount_code.store') }}" method="post">
                                                    @csrf

                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Code') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="code" value="" placeholder="Code" />
                                                        <!--end::Input-->
                                                    </div>

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Name') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="name" value="" placeholder="Name" />
                                                        <!--end::Input-->
                                                        @if ($errors->has('name'))
                                                            <div class="text-danger">{{ $errors->first('name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Available Until') }}</label>
                                                        <!--end::Label-->
                                                        <input type="datetime-local"
                                                            class="form-control form-control-solid" name="available_until"
                                                            placeholder="" value="" />
                                                        <!--end::Input-->
                                                        @if ($errors->has('available_until'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('available_until') }}</div>
                                                        @endif
                                                    </div>
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Code Duration') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select class="form-control form-control-solid" name="duration"
                                                            id="duration">
                                                            <option value="">Select one</option>
                                                            <option value="once">Once</option>
                                                            <option value="forever">Forever</option>
                                                            <option value="repeating">Repeating</option>
                                                        </select>
                                                        <!--end::Input-->
                                                        @if ($errors->has('duration'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('duration') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="fv-row mb-7" id="duration_month">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Duration In Month') }}
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="number" class="form-control form-control-solid"
                                                            name="duration_in_month"
                                                            placeholder="Duration In Month e. 1 , 2 , 3" value="" />
                                                        <!--end::Input-->
                                                        @if ($errors->has('duration_in_month'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('duration_in_month') }}</div>
                                                        @endif
                                                    </div>
                                                    <!--end::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Max Redemption') }}</label>
                                                        <!--end::Label-->
                                                        <input type="number" class="form-control form-control-solid"
                                                            name="code_redemption" placeholder="" value="" />
                                                        <!--end::Input-->
                                                        @if ($errors->has('code_redemption'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('code_redemption') }}</div>
                                                        @endif
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7 ">
                                                        <p class="text-red">Enter one thing price or perentage</p>
                                                        <!--begin::Label-->
                                                        <label
                                                            class=" fs-6 fw-bold form-label mb-2">{{ trans('message.Percentage') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="percentage" value="" />
                                                        <!--end::Input-->
                                                        @if ($errors->has('percentage'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('percentage') }}</div>
                                                        @endif
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7 ">
                                                        <!--begin::Label-->
                                                        <label class=" fs-6 fw-bold form-label mb-2">Price</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" placeholder="e.g . 500 euro" name="price">
                                                                        <span class="input-group-text" id="basic-addon2">euro</span>
                                                                    </div>
                                                        {{-- <input type="text" class="form-control form-control-solid"
                                                            name="price" value="" /> --}}
                                                        <!--end::Input-->
                                                        @if ($errors->has('price'))
                                                            <div class="text-danger">{{ $errors->first('price') }}
                                                            </div>
                                                        @endif
                                                    </div>
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
                                <!--end::Modal - Add  discount codes -->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body mb-7 overflow-auto h-400px">
                                <!--begin::Table-->
                                <table class="kt_datatable_example_1 table table-row-bordered gy-5">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7  gs-0">
                                            <th class="min-w-25px">{{ trans('message.id') }}</th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.Code') }}</th>
                                            <th class="text-center pe-3 min-w-150px">{{ trans('message.Name') }}</th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.Valid until') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.Code used') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Discount') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Created by') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Created') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Options') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($discount_codes as $discount_code)
                                            <tr>
                                                <!--begin:: ID-->
                                                <td class="text-center">{{ $discount_code->id }}</td>
                                                <!--end:: ID-->
                                                <!--begin::Code-->
                                                <td class="text-center">{{ $discount_code->code }}</td>
                                                <!--end::Code-->
                                                <!--begin::Description-->
                                                <td class="text-center">{{ $discount_code->name }}</td>
                                                <!--end::Description-->
                                                <!--begin::Create at-->
                                                <td class="text-center">{{ $discount_code->available_until }}</td>
                                                <!--end::Create at-->
                                                <!--begin::Available until-->
                                                <td class="text-center">{{ $discount_code->code_used }} /
                                                    {{ $discount_code->max_redemption }}</td>
                                                <!--end::Available until-->
                                                <!--begin::price-->
                                                @if ($discount_code->price)
                                                    <td class="text-center">{{ Helper::money_format('EUR','de_DE',$discount_code->price) }}€</td>
                                                @elseif($discount_code->percent)
                                                    <td class="text-center">{{ $discount_code->percent }}% </td>
                                                @endif

                                                <!--end::price-->
                                                <td class="text-center">{{ $discount_code->created_by }}</td>
                                                <!--begin::options-->
                                                <td class="text-center">
                                                    {{ date('d-m-y', strtotime($discount_code->created_at)) }}</td>
                                                <td class="text-center">
                                                    {{-- <a href="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#edit_discount_code{{$discount_code->id}}"><i class=" fa-solid fas fa-edit"></i></a> --}}
                                                    <a href="{{ Route('admin.discount_code.delete', $discount_code->code) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"><i
                                                            class="fa fa-trash"></i></a>

                                                </td>
                                                <!--end::options-->
                                            </tr>
                                            <!--begin::Modal - Edit discount codes -->
                                            <div class="modal fade" id="edit_discount_code{{ $discount_code->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">
                                                                {{ trans('message.Edit Discount Codes') }}</h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                                                                action="{{ Route('admin.discount_code.update', $discount_code->code) }}"
                                                                method="post">
                                                                @csrf
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Name') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid" name="name"
                                                                        value="{{ old('name', $discount_code->description) }}" />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('name'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('name') }}</div>
                                                                    @endif
                                                                </div>

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
                                            <!--end::Modal - Add  discount codes -->
                                        @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Table Widget 5-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Card widget 7-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span
                                        class="card-label fw-bolder text-dark">{{ trans('message.Affiliate Program') }}</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <!--begin::Search-->
                                        {{-- <a  data-bs-target="#add_affiliate_dicount" data-bs-toggle="modal" class="btn btn-light btn-sm">{{trans('message.Edit')}}</a> --}}
                                        <!--end::Search-->
                                        {{-- <div class="modal fade" id="add_affiliate_dicount" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder">{{trans('message.Edit Affiliate Program')}}</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                                                    <form  class="form" action="{{Route('admin.affiliateprogram.store')}}" method="post">
                                                        @csrf
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-bold form-label mb-2">{{trans('message.Necessary referred clients')}}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid" name="necessary_referred_clients"
                                                                value="" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('necessary_referred_clients'))
                                                                        <div class="text-danger">{{ $errors->first('necessary_referred_clients') }}</div>
                                                                        @endif
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-bold form-label mb-2">{{trans('message.Discount')}}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid" name="discount"
                                                                value="" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('discount'))
                                                                        <div class="text-danger">{{ $errors->first('discount') }}</div>
                                                                        @endif
                                                        </div>

                                                        <!--begin::Actions-->
                                                        <div class="text-center pt-15">
                                                            <button type="reset" class="btn btn-light me-3"
                                                                data-bs-dismiss="modal">{{trans('message.cancel')}}</button>
                                                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                <span class="indicator-label">{{trans('message.save')}}</span>
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
                                    </div> --}}
                                    </div>
                                    <!--begin::Filters-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body mb-3 card-body overflow-auto h-300px">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-3">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-25px">{{ trans('message.id') }}</th>
                                            <th class="text-center pe-3 min-w-150px">
                                                {{ trans('message.Necessary referred clients') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-150px">
                                                {{ trans('message.Active clients with this discount') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Discount') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Option') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($affiliated_programs as $affiliated_program)
                                            <tr>
                                                <!--begin:: ID-->
                                                <td class="text-left">{{ $affiliated_program->id }}</td>
                                                <!--end:: ID-->
                                                <!--begin::Type-->
                                                <td class="text-center">
                                                    {{ $affiliated_program->necessary_referred_clients }}</td>
                                                <!--end::Type-->
                                                <!--begin::Type-->
                                                @php
                                                $percent_count = 0;
                                                foreach($affiliate_program as $affiliate_program_data){
                                                    if($affiliated_program->range_value == 0){
                                                        if($affiliate_program_data->total >= $affiliated_program->necessary_referred_clients){
                                                        $percent_count++;
                                                    }
                                                    }else{
                                                    if($affiliate_program_data->total >= $affiliated_program->necessary_referred_clients && $affiliate_program_data->total  <= $affiliated_program->range_value){
                                                        $percent_count++;
                                                    }
                                                    }

                                                }
                                                @endphp
                                                    <td class="text-center">{{ $percent_count }}</td>

                                                <!--end::Type-->
                                                <!--begin::price-->
                                                <td class="text-end">{{ $affiliated_program->discount }}%</td>
                                                <!--end::price-->
                                                <td class="text-center">
                                                    <a data-bs-toggle="modal"
                                                        data-bs-target="#edit_affiliate_program{{ $affiliated_program->id }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <div class="modal fade"
                                                id="edit_affiliate_program{{ $affiliated_program->id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">
                                                                {{ trans('message.Edit Affiliate Program') }}</h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                                                                action="{{ Route('admin.affiliateprogram.update', $affiliated_program->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Minimum Necessary referred Customers') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="necessary_referred_clients"
                                                                        value="{{ $affiliated_program->necessary_referred_clients }}" />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('necessary_referred_clients'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('necessary_referred_clients') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <!--end::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Maximum Necessary referred Customers') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="range"
                                                                        value="{{ $affiliated_program->range_value }}" />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('range'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('range') }}</div>
                                                                    @endif
                                                                </div>
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Discount in %') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="discount"
                                                                        value="{{ $affiliated_program->discount }}" />
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('discount'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('discount') }}</div>
                                                                    @endif
                                                                </div>



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
                                        @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <div class="card-body mt-2">
                                <!--begin::Title-->
                                <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">{{ trans('message.New clients with affiliate discounts') }}...</span>
                                <!--end::Title-->
                                <!--begin::Users group-->
                                <div class="symbol-group symbol-hover">
                                    @foreach ($affiliated_clients_images as $affiliated_clients_image)
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="{{ $affiliated_clients_image->first_name . ' ' . $affiliated_clients_image->last_name }}">
                                            @if ($affiliated_clients_image->profile_picture)
                                            <img alt="Pic"
                                                    src="{{ URL::asset($affiliated_clients_image->profile_picture) }}" height="50px" width="50px" class="img-rounded"/>
                                            {{-- <a href="{{Route('admin.client.view',[$affiliated_clients_image->id,$affiliated_clients_image->stripe_id])}}"><img alt="Pic"
                                                    src="{{ URL::asset($affiliated_clients_image->profile_picture) }}" height="50px" width="50px" class="img-rounded"/></a> --}}

                                            @else
                                            <img alt="Pic" src="{{ asset('assets/media/svg/avatars/blank.svg') }}"  height="50px" width="50px"/>
                                            {{-- <a href="{{Route('admin.client.view',[$affiliated_clients_image->id,$affiliated_clients_image->stripe_id])}}">
                                                <img alt="Pic" src="{{ asset('assets/media/svg/avatars/blank.svg') }}"  height="50px" width="50px"/>
                                            </a> --}}

                                            @endif

                                        </div>
                                    @endforeach

                                </div>
                                <!--end::Users group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 7-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::ufill clients-->
                <div class="row gy-5 g-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Table Widget 5-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span
                                        class="card-label fw-bolder text-dark">{{ trans('message.uFill Clients') }}</span>
                                </h3>
                                <!--end::Title-->
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
                                            <th class="min-w-50px">{{ trans('message.id') }}</th>
                                            <th class="text-center pe-3 min-w-150px">
                                                {{ trans('message.Client Company') }}</th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.CLIENT SINCE') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.CLIENT UNTIL') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.TOTAL REVENUE') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-150px">{{ trans('message.OPEN COSTS') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-150px">
                                                {{ trans('message.CHOOSEN VARIANT') }}</th>
                                            {{-- <th class="text-center pe-3 min-w-150px">{{trans('message.AFFILIATE DISCOUNT')}}</th> --}}
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.NEXT PAYMENT') }}
                                            </th>
                                            <th class="text-end pe-3 min-w-50px">{{ trans('message.PAYMENT METHOD') }}
                                            </th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($clients as $client)
                                            @php
                                                $total_client_revenue = Helper::client_total_revenue($client->stripe_id);
                                                $total_open_cost = Helper::client_open_cost($client->stripe_id);
                                            @endphp
                                            <tr>
                                                <!--begin::Client ID-->
                                                <td class="text-left">
                                                    <a href="#"
                                                        class="fw-bolder text-gray-600 text-hover-primary">{{ $client->id }}</a>
                                                </td>
                                                <!--end::Client ID-->
                                                <!--begin::Client Company-->
                                                <td class="text-center">
                                                    <a href="{{ Route('admin.client.view', [$client->id, $client->stripe_id]) }}"
                                                        class="fw-bolder text-gray-600 text-hover-primary">{{ $client->company_name }}</a>
                                                </td>
                                                <!--end::Client Company-->
                                                <!--begin::Client since-->
                                                <td class="text-center">
                                                    {{ date('d-m-Y ', strtotime($client->created_at)) }}</td>
                                                <!--end::Client since-->
                                                <!--begin::Client until-->
                                                <td class="text-center">
                                                    {{ date('d-m-Y ', strtotime($client->client_until)) }}</td>
                                                <!--end::Client until-->
                                                <!--begin::Total revenue-->
                                                <td class="text-center">{{ Helper::money_format('EUR','de_DE',$total_client_revenue != null ? $total_client_revenue : 0)}}€</td>
                                                <!--end::Total revenue-->
                                                <!--begin::Open costs-->
                                                <td class="text-center">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">{{Helper::money_format('EUR','de_DE',$total_open_cost != null ? $total_open_cost : 0)}}€</span>
                                                </td>
                                                <!--end::Open costs-->
                                                <!--begin::Choosen Variant-->
                                                <td class="text-center">{{ $client->variant_name }}</td>
                                                <!--end::Choosen Variant-->
                                                <!--begin::Affiliate Discount-->
                                                {{-- <td class="text-center">1x Client / <span
                                                class="badge py-3 px-4 fs-7 badge-light-success">3%</span>
                                        </td> --}}
                                                <!--end::Affiliate Discount-->
                                                <!--begin::Next Payment-->
                                                <td class="text-center">
                                                    <span
                                                        class="badge py-3 px-4 fs-7 badge-light-warning">{{ date('d-m-Y ', strtotime($client->next_payment)) }}</span>
                                                </td>
                                                <!--end::Next Payment-->
                                                <!--begin::price-->
                                                <td class="text-center">Stripe</td>
                                                <!--end::price-->
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Table Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <!--begin::Shipment Detail-->
                <div class="row gy-5 g-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Table Widget 5-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span
                                        class="card-label fw-bolder text-dark">{{ trans('message.Shipment Detail') }}</span>

                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Search-->
                                    <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addshippingdetail">{{ trans('message.Add Shipment') }}</button>
                                    <!-- Button trigger modal -->

                                    <!--begin::Modal - Add cost overview -->
                                    <div class="modal fade" id="addshippingdetail" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder">{{ trans('message.Add Shipping Detail') }}
                                                    </h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                        data-bs-dismiss="modal">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                    rx="1" transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                                                        action="{{ Route('admin.shipping_detail.store') }}" method="post">
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
                                                                <option value="dhl">DHL</option>
                                                                <option value="dpd">DPD</option>
                                                                <option value="ups">UPS</option>

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
                                                                <option value="2 kg">2 Kg</option>
                                                                <option value="5 kg">5 Kg</option>
                                                                <option value="10 kg">10 Kg</option>

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
                                                                (KG)</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="weight" value="" />
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
                                                                name="max_width" value="" />
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
                                                                name="max_height" value="" />
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
                                                                name="max_length" value="" />
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
                                                            <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" placeholder="e.g . 500 cent" name="cost" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                                                                        <span class="input-group-text" id="basic-addon2">cent</span>
                                                                    </div>
                                                            <!--end::Input-->
                                                                    <!--begin::Input-->

                                                            @if ($errors->has('cost'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('cost') }}</div>
                                                            @endif
                                                        </div>
                                                        <!--end::Input group-->
                                                        {{-- <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-bold form-label mb-2">{{trans('message.Fee')}}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid" name="fee"
                                                                value="" />
                                                            <!--end::Input-->
                                                            @if ($errors->has('fee'))
                                                                        <div class="text-danger">{{ $errors->first('fee') }}</div>
                                                                        @endif
                                                        </div> --}}
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
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Option') }}</th>
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
                                                <td class="text-center">{{ $shipping_detail->max_length }}</td>
                                                <!--end::Size-->
                                                <!--begin::price-->
                                                <td class="text-center">{{ Helper::money_format('EUR','de_DE',$shipping_detail->cost) }}€</td>
                                                <!--end::price-->
                                                {{-- <td class="text-center">{{$shipping_detail->fees}}</td> --}}

                                                {{-- <td class="text-center">{{$shipping_detail->cost + $shipping_detail->fees}}</td> --}}
                                                <td class="text-center d-flex">
                                                    <a data-bs-toggle="modal"
                                                        data-bs-target="#editshippingdetail{{ $shipping_detail->shipping_id }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ Route('admin.shipping_detail.delete', $shipping_detail->shipping_id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <!--begin::Modal - Add cost overview -->
                                            <div class="modal fade"
                                                id="editshippingdetail{{ $shipping_detail->shipping_id }}" tabindex="-1"
                                                aria-hidden="true">
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
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                                                                        (KG)</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="weight"
                                                                        value="{{ $shipping_detail->weight }}" />
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
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
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
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
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
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
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
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" placeholder="e.g . 500 cent" aria-label="Recipient's username" name="cost" aria-describedby="basic-addon2" value="{{ $shipping_detail->cost }}">
                                                                        <span class="input-group-text" id="basic-addon2">cent</span>
                                                                    </div>
                                                                    {{-- <input type="text"
                                                                        class="form-control form-control-solid" name="cost"
                                                                        value="{{ $shipping_detail->cost }}" /> --}}
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
                        <!--end::Table Widget 5-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Table Widget 5-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span
                                        class="card-label fw-bolder text-dark">{{ trans('message.Shipment Package Fee') }}</span>

                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <!--end::Actions-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Table-->
                                <table class="table table-row-bordered gy-5">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-25px">{{ trans('message.id') }}</th>
                                            <th class="text-center pe-3 min-w-50px">
                                                {{ trans('message.Monthly Package Amount') }}</th>
                                            <th class="text-center pe-3 min-w-150px">
                                                {{ trans('message.uFill Package Fee') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Option') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($shipping_packages as $shipping_package)
                                            <tr>
                                                <!--begin::Shipment ID-->
                                                <td class="text-left">{{ $shipping_package->fee_id }}</td>
                                                <!--end::Shipment ID-->
                                                <!--begin::Transport-->
                                                <td class="text-center">{{ $shipping_package->package }}</td>
                                                <!--end::Transport-->
                                                <!--begin::Type-->
                                                <td class="text-center">{{Helper::money_format('EUR','de_DE',$shipping_package->package_fee)}}€</td>
                                                <!--end::Type-->
                                                {{-- {{ Helper::money_format('EUR','de_DE',$shipping_package->package_fee) }} --}}
                                                <td class="text-center">
                                                    <a data-bs-toggle="modal"
                                                        data-bs-target="#editpackagefee{{ $shipping_package->fee_id }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <!--begin::Modal - Add cost overview -->
                                            <div class="modal fade"
                                                id="editpackagefee{{ $shipping_package->fee_id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">
                                                                {{ trans('message.Edit Shipping Detail') }}</h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                                                                action="{{ Route('admin.shipping_package.update', $shipping_package->fee_id) }}"
                                                                method="post">
                                                                @csrf
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Monthly Package Amount') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" readonly
                                                                        class="form-control form-control-solid"
                                                                        name="monthly_package"
                                                                        value="{{ $shipping_package->package }}" />
                                                                    {{-- <select class="form-control" name="monthly_package" re>
                                                                <option value=""> Select </option>
                                                                <option value="0-50" {{$shipping_package->package == '0-50' ? 'selected' : " "}}>0-50</option>
                                                                <option value="50-500" {{$shipping_package->package == '50-500' ? 'selected' : " "}}>50-500</option>
                                                                <option value="500-2000" {{$shipping_package->package == '500-2000' ? 'selected' : " "}}>500-2000</option>
                                                                <option value="2000-above" {{$shipping_package->package == '2000-above' ? 'selected' : " "}}>2000-above</option>

                                                            </select> --}}
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('monthly_package'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('monthly_package') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <!--end::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Fee') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" placeholder="e.g . 500 cent" name="fee" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $shipping_package->package_fee }}">
                                                                        <span class="input-group-text" id="basic-addon2">cent</span>
                                                                    </div>
                                                                    {{-- <input type="text"
                                                                        class="form-control form-control-solid" name="fee"
                                                                        value="{{ $shipping_package->package_fee }}" /> --}}
                                                                    <!--end::Input-->
                                                                    @if ($errors->has('fee'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('fee') }}</div>
                                                                    @endif
                                                                </div>
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
                        <!--end::Table Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection

@section('custom_scripts')
    @include('admin.dashboard_charts_scripts.map')
    @include('admin.dashboard_charts_scripts.graph')

    <script>
        $(document).ready(function() {

            $('#duration_month').hide();

            $('#duration').change(function() {

                val = $('#duration').val();

                if (val == 'repeating') {
                    $('#duration_month').show();
                } else {
                    $('#duration_month').hide();
                }

            });



        });
    </script>

    <script>
        $(document).ready(function() {

            dropdown_value = $('#discount_type').val();
            if (dropdown_value == "") {
                $('#price').hide();
                $('#percent').hide();
            } else if (dropdown_value == 'price') {
                $('#price').show();
            } else if (dropdown_value == 'percentage') {
                $('#percent').show();
            }

            $('#discount_type').change(function() {

                val = $('#discount_type').val();
                if (val == 'price') {

                    $('#price').show();
                    $('#percent').hide();

                } else if (val == 'percentage') {

                    $('#price').hide();
                    $('#percent').show();

                } else {

                    $('#price').hide();
                    $('#percent').hide();
                }

            });

        });
    </script>

    <script>
        $(document).ready(function() {

            dropdown_value = $('#edit_discount_type').val();
            if (dropdown_value == "") {
                $('#edit_price').hide();
                $('#edit_percent').hide();
            } else if (dropdown_value == 'price') {
                $('#edit_price').show();
                $('#edit_percent').hide();
            } else if (dropdown_value == 'percentage') {
                $('#edit_percent').show();
                $('#edit_price').hide();
            }

            $('#edit_discount_type').change(function() {

                val = $('#edit_discount_type').val();
                if (val == 'price') {

                    $('#edit_price').show();
                    $('#edit_percent').hide();

                } else if (val == 'percentage') {

                    $('#edit_price').hide();
                    $('#edit_percent').show();

                } else {

                    $('#edit_price').hide();
                    $('#edit_percent').hide();
                }

            });

        });
    </script>
@endsection
