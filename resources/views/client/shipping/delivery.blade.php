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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.Dashboards > eCommerce > Shipments') }}</small>
                    <!--end::Description-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                        class="btn btn-sm btn-light d-flex align-items-center px-4">
                        <!--begin::Display range-->
                        <div class="text-gray-600 fw-bolder">Datum wird geladen...</div>
                        <!--end::Display range-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                        <span class="svg-icon svg-icon-1 ms-2 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                    fill="black" />
                                <path
                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                    fill="black" />
                                <path
                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Daterangepicker-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm btn-primary">{{ trans('message.Save') }}</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
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
                                                <span class="fs-2hx fw-bolder text-gray-800 lh-1">5.425,59</span>
                                                <!--end::Value-->
                                                <!--begin::Currency-->
                                                <span
                                                    class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">€</span>
                                                <!--end::Currency-->
                                                <!--begin::Label-->
                                                <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                    <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.5"
                                                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                                fill="black" />
                                                            <path
                                                                d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->2.2%
                                                </span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-bold text-gray-400">{{ trans('message.Total shipping costs') }}</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_card_widget_8_chart" class="min-h-auto" style="height: 125px"></div>
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
                                                <span class="fs-2hx fw-bolder text-dark lh-1">1.836,41</span>
                                                <!--end::Amount-->
                                                <!--begin::Currency-->
                                                <span
                                                    class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">€</span>
                                                <!--end::Currency-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">{{ trans('message.Open shipping costs') }}</span>
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
                                                <span class="fw-boldest fs-6 text-dark">2.145.56€ von 3.991,89€</span>
                                                <span class="fw-bolder fs-6 text-gray-400">75%</span>
                                            </div>
                                            <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                                <div class="bg-success rounded h-8px" role="progressbar" style="width: 75%;"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                <span class="fs-2hx fw-bolder text-gray-800 lh-1">29.420</span>
                                                <!--end::Value-->
                                                <!--begin::Currency-->
                                                <span
                                                    class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">x</span>
                                                <!--end::Currency-->
                                                <!--begin::Label-->
                                                <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                    <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.5"
                                                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                                fill="black" />
                                                            <path
                                                                d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->2.6%
                                                </span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-bold text-gray-400">{{ trans('message.Total shipments') }}</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_card_widget_9_chart" class="min-h-auto" style="height: 125px"></div>
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
                                            <span class="fs-2hx fw-bolder text-dark me-2 lh-1">6.300</span>
                                            <!--end::Amount-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">{{ trans('message.Various customers') }}</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column justify-content-end">
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">{{ trans('message.Last costumers...') }}</span>
                                        <!--end::Title-->
                                        <!--begin::Users group-->
                                        <div class="symbol-group symbol-hover">
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                title="Alan Warden">
                                                <span
                                                    class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                title="Michael Eberon">
                                                <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                title="Susan Redwood">
                                                <span
                                                    class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                title="Melody Macy">
                                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                title="Perry Matthew">
                                                <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                title="Barry Walter">
                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <a href="../../demo1/dist/apps/customers/list.html"
                                                class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-gray-900 text-gray-300 fs-8 fw-bolder">+42</span>
                                            </a>
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
                                    <span class="card-label fw-bolder text-dark">{{ trans('message.Worldmap') }}</span>
                                    <span class="text-gray-400 pt-2 fw-bold fs-6">{{ trans('message.Countries with the most sales') }}</span>
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
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Table Widget 5-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span class="card-label fw-bolder text-dark">{{ trans('message.Shipping costs') }}</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.Current: 50 - 500 Packages / monthly.') }}.</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <!--begin::Destination-->
                                        <div class="d-flex align-items-center fw-bolder">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">{{ trans('message.Carrier') }}</div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="Show All" selected="selected">{{ trans('message.All') }}</option>
                                                <option value="a">DHL</option>
                                                <option value="b">DPD</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Destination-->
                                        <!--begin::Search-->
                                        <a href="{{Route('client.package.shipment')}}" class="btn btn-light btn-sm" >{{ trans('message.Change package amount') }}</a>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Filters-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body overflow-auto h-400px">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-25px">ID</th>
                                            <th class="text-center pe-3 min-w-50px">Transporteur</th>
                                            <th class="text-center pe-3 min-w-150px">{{ trans('message.Shipping') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Weight (kg)') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Max. Width (cm)') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Max. Height (cm)') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Max. Lenght (cm)') }}</th>
                                            <th class="text-end pe-3 min-w-50px">{{ trans('message.Costs') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        <tr>
                                            <!--begin::Shipment ID-->
                                            <td class="text-left">#1</td>
                                            <!--end::Shipment ID-->
                                            <!--begin::Transport-->
                                            <td class="text-center">DHL</td>
                                            <!--end::Transport-->
                                            <!--begin::Type-->
                                            <td class="text-center">2kg Paket</td>
                                            <!--end::Type-->
                                            <!--begin::Weight-->
                                            <td class="text-center">2</td>
                                            <!--end::Weight-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::price-->
                                            <td class="text-end">3,95€</td>
                                            <!--end::price-->
                                        </tr>
                                        <tr>
                                            <!--begin::Shipment ID-->
                                            <td class="text-left">#2</td>
                                            <!--end::Shipment ID-->
                                            <!--begin::Transport-->
                                            <td class="text-center">DHL</td>
                                            <!--end::Transport-->
                                            <!--begin::Type-->
                                            <td class="text-center">5kg Paket</td>
                                            <!--end::Type-->
                                            <!--begin::Weight-->
                                            <td class="text-center">5</td>
                                            <!--end::Weight-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::price-->
                                            <td class="text-end">4,95€</td>
                                            <!--end::price-->
                                        </tr>
                                        <tr>
                                            <!--begin::Shipment ID-->
                                            <td class="text-left">#3</td>
                                            <!--end::Shipment ID-->
                                            <!--begin::Transport-->
                                            <td class="text-center">DHL</td>
                                            <!--end::Transport-->
                                            <!--begin::Type-->
                                            <td class="text-center">10kg Paket</td>
                                            <!--end::Type-->
                                            <!--begin::Weight-->
                                            <td class="text-center">10</td>
                                            <!--end::Weight-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::Size-->
                                            <td class="text-center">25</td>
                                            <!--end::Size-->
                                            <!--begin::price-->
                                            <td class="text-end">7,95€</td>
                                            <!--end::price-->
                                        </tr>
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
                    <div class="col-xl-3">
                        <!--begin::List widget 8-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header pt-7 mb-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-gray-800">{{ trans('message.Destination') }}</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.Most of your shipments went to these countries.') }}</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Flag-->
                                        <img src="assets/media/flags/united-states.svg" class="me-4 w-25px"
                                            style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">United States</div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">9,763</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Flag-->
                                        <img src="assets/media/flags/brazil.svg" class="me-4 w-25px"
                                            style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">Brasil</div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">4,062</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-danger px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->0.4 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Flag-->
                                        <img src="assets/media/flags/turkey.svg" class="me-4 w-25px"
                                            style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">Turkey</div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">1,680</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->0.2 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Flag-->
                                        <img src="assets/media/flags/france.svg" class="me-4 w-25px"
                                            style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">France</div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">849</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->4.1 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Flag-->
                                        <img src="assets/media/flags/india.svg" class="me-4 w-25px"
                                            style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">India</div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">604</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-danger px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->8.3 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Flag-->
                                        <img src="assets/media/flags/sweden.svg" class="me-4 w-25px"
                                            style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">Sweden</div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">237</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->1.9 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 8-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <!--begin::List widget 8-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header pt-7 mb-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-gray-800">{{ trans('message.Shipping Methods') }}</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.These were your most used shipping methods.') }}</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon me-5">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">5kg Paket</div>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">DHL</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">9,763</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon me-5">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">5kg Paket</div>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">DHL</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">9,763</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon me-5">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">5kg Paket</div>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">DHL</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">9,763</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon me-5">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">5kg Paket</div>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">DHL</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">9,763</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon me-5">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">5kg Paket</div>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">DHL</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">9,763</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon me-5">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <div class="text-gray-800 fw-bolder fs-6">5kg Paket</div>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">DHL</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bolder fs-6 me-3">9,763</span>
                                        <!--end::Number-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <!--begin::Label-->
                                            <span class="badge badge-success px-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6 %
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 8-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Table Widget 5-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span class="card-label fw-bolder text-dark">{{ trans('message.Shipment overview') }}</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.a total of 125 shipments') }}</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <!--begin::Destination-->
                                        <div class="d-flex align-items-center fw-bolder">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">{{ trans('message.Display') }}</div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1" selected="selected">{{ trans('message.All') }}</option>
                                                <option value="2">10</option>
                                                <option value="3">50</option>
                                                <option value="4">100</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Destination-->
                                        <!--begin::Destination-->
                                        <div class="d-flex align-items-center fw-bolder">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">{{ trans('message.Carrier') }}</div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="Show All" selected="selected">{{ trans('message.All') }}</option>
                                                <option value="a">DHL</option>
                                                <option value="b">DPD</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Destination-->
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center fw-bolder">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">Status</div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                                data-kt-table-widget-5="filter_status">
                                                <option></option>
                                                <option value="Show All" selected="selected">{{ trans('message.All') }}</option>
                                                <option value="created">{{ trans('message.Shipment created') }}</option>
                                                <option value="handover">{{ trans('message.Hand over') }}</option>
                                                <option value="in transit">{{ trans('message.In delivery') }}</option>
                                                <option value="delivered">{{ trans('message.Delivered') }}</option>
                                                <option value="error">{{ trans('message.Error') }}</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center fw-bolder">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">{{ trans('message.Billing') }}</div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                                data-kt-table-widget-5="filter_status">
                                                <option></option>
                                                <option value="Show All" selected="selected">{{ trans('message.All') }}</option>
                                                <option value="not payed">{{ trans('message.Unpaid') }}</option>
                                                <option value="payed">{{ trans('message.Paid') }}</option>
                                                <option value="error">{{ trans('message.Error') }}</option>
                                                <option value="canceled">{{ trans('message.Cancelled') }}</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Search-->
                                        <a href="{{Route('client.create.shipment')}}" class="btn btn-light btn-sm">{{ trans('message.Create Shipment') }}</a>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Filters-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body overflow-auto h-400px">
                                <!--begin::Table-->
                                <table class="table table-responsive align-middle table-row-dashed fs-6 gy-3"
                                    id="kt_table_widget_5_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-100px">{{ trans('message.ID') }}</th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.Link') }}</th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.Carrier') }}</th>
                                            <th class="text-center pe-3 min-w-150px">{{ trans('message.Shipping method') }}</th>
                                            <th class="text-center pe-3 min-w-150px">{{ trans('message.Tracking number') }}</th>
                                            <th class="text-center pe-3 min-w-150px">{{ trans('message.Created at') }}</th>
                                            <th class="text-center pe-3 min-w-150px">{{ trans('message.Delivered at') }}</th>
                                            <th class="text-center pe-3 min-w-100px">Status</th>
                                            <th class="text-center pe-3 min-w-100px">{{ trans('message.Billing') }}</th>
                                            <th class="text-end pe-3 min-w-50px">{{ trans('message.Costs') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        <tr>
                                            <!--begin::Shipment ID-->
                                            <td class="text-left">
                                                <a href="#"
                                                    class="fw-bolder text-gray-600 text-hover-primary">#SHP-145281</a>
                                            </td>
                                            <!--begin::Connect-->
                                            <td class="text-center">
                                                <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                                    class="fw-bolder text-gray-600 text-hover-primary">#ORD-75327</a>
                                            </td>
                                            <!--end::Connect-->
                                            <!--begin::Transport-->
                                            <td class="text-center">DHL</td>
                                            <!--end::Transport-->
                                            <!--begin::Type-->
                                            <td class="text-center">5kg Paket</td>
                                            <!--end::Type-->
                                            <!--begin::Tracking-->
                                            <td class="text-center">
                                                <a href="../../demo1/dist/dashboards/status-check.html"
                                                    class="fw-bolder text-gray-600 text-hover-primary">F1015412541874587</a>
                                            </td>
                                            <!--end::Tracking-->
                                            <!--begin::create-->
                                            <td class="text-center">15.01.2022</td>
                                            <!--end::create-->
                                            <!--begin::delivered-->
                                            <td class="text-center">15.01.2022</td>
                                            <!--end::delivered-->
                                            <!--begin::status-->
                                            <td class="text-center">
                                                <a href="../../demo1/dist/dashboards/status-check.html"><span
                                                        class="badge py-3 px-4 fs-7 badge-light-success">Zugestellt</span></a>
                                            </td>
                                            <!--end::status-->
                                            <!--begin::status-->
                                            <td class="text-center">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">offen</span>
                                            </td>
                                            <!--end::status-->
                                            <!--begin::price-->
                                            <td class="text-end">3,95€</td>
                                            <!--end::price-->
                                        </tr>
                                        <tr>
                                            <!--begin::Shipment ID-->
                                            <td class="text-left">
                                                <a href="#"
                                                    class="fw-bolder text-gray-600 text-hover-primary">#SHP-145281</a>
                                            </td>
                                            <!--end::Shipment ID-->
                                            <!--begin::Connect-->
                                            <td class="text-center">
                                                <a href="../../demo1/dist/apps/ecommerce/sales/return-details.html"
                                                    class="fw-bolder text-gray-600 text-hover-primary">#RTN-75327</a>
                                            </td>
                                            <!--end::Connect-->
                                            <!--begin::Transport-->
                                            <td class="text-center">DHL</td>
                                            <!--end::Transport-->
                                            <!--begin::Type-->
                                            <td class="text-center">5kg Paket</td>
                                            <!--end::Type-->
                                            <!--begin::Tracking-->
                                            <td class="text-center">
                                                <a href="../../demo1/dist/dashboards/status-check.html"
                                                    class="fw-bolder text-gray-600 text-hover-primary">F1015412541874587</a>
                                            </td>
                                            <!--end::Tracking-->
                                            <!--begin::create-->
                                            <td class="text-center">15.01.2022</td>
                                            <!--end::create-->
                                            <!--begin::delivered-->
                                            <td class="text-center">15.01.2022</td>
                                            <!--end::delivered-->
                                            <!--begin::status-->
                                            <td class="text-center">
                                                <a href="../../demo1/dist/dashboards/status-check.html"><span
                                                        class="badge py-3 px-4 fs-7 badge-light-success">Zugestellt</span></a>
                                            </td>
                                            <!--end::status-->
                                            <!--begin::status-->
                                            <td class="text-center">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">offen</span>
                                            </td>
                                            <!--end::status-->
                                            <!--begin::price-->
                                            <td class="text-end">3,95€</td>
                                            <!--end::price-->
                                        </tr>
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
