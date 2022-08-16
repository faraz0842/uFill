@extends('client.master')
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
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">Dashboards > eCommerce > Sendungen</small>
                                <!--end::Description-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bolder">Datum wird geladen...</div>
                                    <!--end::Display range-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-1 ms-2 me-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
												<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
												<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
											</svg>
										</span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Daterangepicker-->
                                <!--begin::Secondary button-->
                                <!--end::Secondary button-->
                                <!--begin::Primary button-->
                                <a href="#" class="btn btn-sm btn-primary">Anwenden</a>
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
                                                            <span class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">€</span>
                                                            <!--end::Currency-->
                                                            <!--begin::Label-->
                                                            <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
                                                                    <path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->2.2%</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Description-->
                                                        <span class="fs-6 fw-bold text-gray-400">Versandkosten gesamt</span>
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
                                                            <span class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">€</span>
                                                            <!--end::Currency-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Subtitle-->
                                                        <span class="text-gray-400 pt-1 fw-bold fs-6">offene Versandkosten</span>
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
                                                            <div class="bg-success rounded h-8px" role="progressbar" style="width: 75%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                            <span class="fs-4 fw-bold text-gray-400 align-self-start me-1&gt; me-2">x</span>
                                                            <!--end::Currency-->
                                                            <!--begin::Label-->
                                                            <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
                                                                    <path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->2.6%</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Statistics-->
                                                        <!--begin::Description-->
                                                        <span class="fs-6 fw-bold text-gray-400">Sendungen gesamt</span>
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
                                                        <span class="text-gray-400 pt-1 fw-bold fs-6">verschiedene Kunden</span>
                                                        <!--end::Subtitle-->
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex flex-column justify-content-end">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Kunden zuletzt...</span>
                                                    <!--end::Title-->
                                                    <!--begin::Users group-->
                                                    <div class="symbol-group symbol-hover">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                            <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                            <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                            <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                            <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                            <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                        </div>
                                                        <a href="../../demo1/dist/apps/customers/list.html" class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-gray-900 text-gray-300 fs-8 fw-bolder">+42</span>
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
                                                <span class="card-label fw-bolder text-dark">Weltkarte</span>
                                                <span class="text-gray-400 pt-2 fw-bold fs-6">Länder mit meisten Verkäufen</span>
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
                                                <span class="card-label fw-bolder text-dark">Versandkosten</span>
                                                <span class="text-gray-400 mt-1 fw-bold fs-6">Aktuell: 50 - 500 Pakete / mtl.</span>
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Actions-->
                                            <div class="card-toolbar">
                                                <!--begin::Filters-->
                                                <div class="d-flex flex-stack flex-wrap gap-4">
                                                    <!--begin::Destination-->
                                                    <div class="d-flex align-items-center fw-bolder">
                                                        <!--begin::Label-->
                                                        <div class="text-muted fs-7 me-2">Transporteur</div>
                                                        <!--end::Label-->
                                                        <!--begin::Select-->
                                                        <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                            <option></option>
                                                            <option value="Show All" selected="selected">Alle</option>
                                                            <option value="a">DHL</option>
                                                            <option value="b">DPD</option>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end::Destination-->
                                                    <!--begin::Search-->
                                                    <a href="{{Route('client.package.shipment')}}" class="btn btn-light btn-sm" >Preismodell ändern</a>
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
                                                        <th class="text-center pe-3 min-w-150px">Versandart</th>
                                                        <th class="text-center pe-3 min-w-50px">Gewicht (kg)</th>
                                                        <th class="text-center pe-3 min-w-50px">max. Breite (cm)</th>
                                                        <th class="text-center pe-3 min-w-50px">max. Höhe (cm)</th>
                                                        <th class="text-center pe-3 min-w-50px">max. Länge (cm)</th>
                                                        <th class="text-end pe-3 min-w-50px">Kosten</th>
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
                                                <span class="card-label fw-bolder text-gray-800">Zielländer</span>
                                                <span class="text-gray-400 mt-1 fw-bold fs-6">In diese Länder gingen 95% Ihrer Sendungen.</span>
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
                                                    <img src="assets/media/flags/united-states.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->2.6 %</span>
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
                                                    <img src="assets/media/flags/brazil.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z" fill="black" />
																	<path d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->0.4 %</span>
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
                                                    <img src="assets/media/flags/turkey.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->0.2 %</span>
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
                                                    <img src="assets/media/flags/france.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->4.1 %</span>
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
                                                    <img src="assets/media/flags/india.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z" fill="black" />
																	<path d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->8.3 %</span>
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
                                                    <img src="assets/media/flags/sweden.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->1.9 %</span>
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
                                                <span class="card-label fw-bolder text-gray-800">Versandarten</span>
                                                <span class="text-gray-400 mt-1 fw-bold fs-6">Dies waren Ihre meist genutzen Versandarten.</span>
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->2.6 %</span>
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->2.6 %</span>
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->2.6 %</span>
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->2.6 %</span>
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->2.6 %</span>
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
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																	<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->2.6 %</span>
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
                                                <span class="card-label fw-bolder text-dark">Sendungsübersicht</span>
                                                <span class="text-gray-400 mt-1 fw-bold fs-6">gesamt 125 Sendungen</span>
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Actions-->
                                            <div class="card-toolbar">
                                                <!--begin::Filters-->
                                                <div class="d-flex flex-stack flex-wrap gap-4">
                                                    <!--begin::Destination-->
                                                    <div class="d-flex align-items-center fw-bolder">
                                                        <!--begin::Label-->
                                                        <div class="text-muted fs-7 me-2">Anzeige</div>
                                                        <!--end::Label-->
                                                        <!--begin::Select-->
                                                        <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                            <option></option>
                                                            <option value="1" selected="selected">Alle</option>
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
                                                        <div class="text-muted fs-7 me-2">Transporteur</div>
                                                        <!--end::Label-->
                                                        <!--begin::Select-->
                                                        <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                            <option></option>
                                                            <option value="Show All" selected="selected">Alle</option>
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
                                                        <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                                            <option></option>
                                                            <option value="Show All" selected="selected">Alle</option>
                                                            <option value="created">Sendung erstellt</option>
                                                            <option value="handover">Übergeben</option>
                                                            <option value="in transit">In Zustellung</option>
                                                            <option value="delivered">Zugestellt</option>
                                                            <option value="error">Fehlerhaft</option>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end::Status-->
                                                    <!--begin::Status-->
                                                    <div class="d-flex align-items-center fw-bolder">
                                                        <!--begin::Label-->
                                                        <div class="text-muted fs-7 me-2">Abrechnung</div>
                                                        <!--end::Label-->
                                                        <!--begin::Select-->
                                                        <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                                            <option></option>
                                                            <option value="Show All" selected="selected">Alle</option>
                                                            <option value="not payed">Offen</option>
                                                            <option value="payed">Bezahlt</option>
                                                            <option value="error">Fehler</option>
                                                            <option value="canceled">Storniert</option>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end::Status-->
                                                    <!--begin::Search-->
                                                    <a href="{{Route('client.create.shipment')}}" class="btn btn-light btn-sm">Sendung erstellen</a>
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
                                            <table class="table table-responsive align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px">ID</th>
                                                        <th class="text-center pe-3 min-w-100px">Verküpfung</th>
                                                        <th class="text-center pe-3 min-w-100px">Transporteur</th>
                                                        <th class="text-center pe-3 min-w-150px">Versandart</th>
                                                        <th class="text-center pe-3 min-w-150px">Sendungsnummer</th>
                                                        <th class="text-center pe-3 min-w-150px">Erstellt am</th>
                                                        <th class="text-center pe-3 min-w-150px">Zugestellt am</th>
                                                        <th class="text-center pe-3 min-w-100px">Status</th>
                                                        <th class="text-center pe-3 min-w-100px">Abrechnung</th>
                                                        <th class="text-end pe-3 min-w-50px">Kosten</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-bolder text-gray-600">
                                                    <tr>
                                                        <!--begin::Shipment ID-->
                                                        <td class="text-left">
                                                            <a href="#" class="fw-bolder text-gray-600 text-hover-primary">#SHP-145281</a>
                                                        </td>
                                                        <!--begin::Connect-->
                                                        <td class="text-center">
                                                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="fw-bolder text-gray-600 text-hover-primary">#ORD-75327</a>
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
                                                            <a href="../../demo1/dist/dashboards/status-check.html" class="fw-bolder text-gray-600 text-hover-primary">F1015412541874587</a>
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
                                                            <a href="../../demo1/dist/dashboards/status-check.html"><span class="badge py-3 px-4 fs-7 badge-light-success">Zugestellt</span></a>
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
                                                            <a href="#" class="fw-bolder text-gray-600 text-hover-primary">#SHP-145281</a>
                                                        </td>
                                                        <!--end::Shipment ID-->
                                                        <!--begin::Connect-->
                                                        <td class="text-center">
                                                            <a href="../../demo1/dist/apps/ecommerce/sales/return-details.html" class="fw-bolder text-gray-600 text-hover-primary">#RTN-75327</a>
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
                                                            <a href="../../demo1/dist/dashboards/status-check.html" class="fw-bolder text-gray-600 text-hover-primary">F1015412541874587</a>
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
                                                            <a href="../../demo1/dist/dashboards/status-check.html"><span class="badge py-3 px-4 fs-7 badge-light-success">Zugestellt</span></a>
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
                            <!--begin::Modal - Update Package Amount-->
                            <div class="modal fade" id="kt_modal_update_package_amount" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Form-->
                                        <form class="form" action="#" id="kt_modal_package_amount_form">
                                            <!--begin::Modal header-->
                                            <div class="modal-header" id="kt_modal_package_amount_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bolder">Paket Preismodell ändern</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_package_amount_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_package_amount_header"
                                                    data-kt-scroll-wrappers="#kt_modal_package_amount_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Package toggle-->
                                                    <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_package_amount_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_package_amount_user_info">Details
                                                        <span class="ms-2 rotate-180">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
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
                                                            <label class="fs-6 fw-bold mb-2 required">Aktuelle mtl. Paketmenge</label>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Ihre aktuell angegebene monatliche Paketmenge."></i>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number" class="form-control form-control-solid" placeholder="" name="package_amount_old" value="200" required/>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-15">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2 required">Neue mtl. Paketmenge</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="package_amount_new" aria-label="Bitte wählen..." data-control="select2" data-placeholder="Bitte wählen..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_package_amount" required>
																	<option value="">Bitte wählen...</option>
																	<option value="1">0 - 50 Stk. / mtl.</option>
																	<option value="2">50 - 500 Stk. / mtl.</option>
																	<option value="3">500 - 2000 Stk. / mtl.</option>
																	<option value="4">ab 2000 Stk. / mtl.</option>
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
                                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Abbrechen</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Speichern</span>
														<span class="indicator-progress">Bitte warten...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                            <!--begin::Modal - Create Shipment-->
                            <div class="modal fade" id="kt_modal_update_create_shipment" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Form-->
                                        <form class="form" action="#" id="kt_modal_create_shipment_form">
                                            <!--begin::Modal header-->
                                            <div class="modal-header" id="kt_modal_create_shipment_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bolder">Versandetikett erstellen</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_create_shipment_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_shipment_header"
                                                    data-kt-scroll-wrappers="#kt_modal_create_shipment_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Package toggle-->
                                                    <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_create_shipment_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_create_shipment_user_info">Absender
                                                        <span class="ms-2 rotate-180">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->
                                                        </span>
                                                    </div>
                                                    <!--end::Package toggle-->
                                                    <!--begin::Package form-->
                                                    <div id="kt_modal_create_shipment_user_info" class="collapse show">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2 required">Absender</label>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Wählen Sie Ihren Absender. Die Daten werden aus den jeweiligen Einstellungen (Mein Profil / Unternehmen) übernommen."></i>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="create_shipment_from" aria-label="Bitte wählen..." data-control="select2" data-placeholder="Bitte wählen..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_create_shipment" required>
																	<option value="">Bitte wählen...</option>
																	<option value="company">Mustermann GmbH</option>
																	<option value="private">Max Mustermann</option>
																</select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Package form-->
                                                    <!--begin::Package toggle-->
                                                    <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_create_shipment_costumer" role="button" aria-expanded="false" aria-controls="kt_modal_create_shipment_user_info">Empfänger
                                                        <span class="ms-2 rotate-180">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->
                                                        </span>
                                                    </div>
                                                    <!--end::Package toggle-->
                                                    <!--begin::Package form-->
                                                    <div id="kt_modal_create_shipment_costumer" class="collapse">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2">Unternehmen</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid" placeholder="Mustermann GmbH" name="package_amount_old" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column flex-md-row gap-5 mb-7">
                                                            <div class="fv-row flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Vorname</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="billing_order_name" placeholder="Max" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Nachname</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="billing_order_surname" placeholder="Mustermann" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column flex-md-row gap-5 mb-7">
                                                            <div class="fv-row flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Straße</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="billing_order_street" placeholder="Musterweg" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="form-label required">Hausnummer</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="billing_order_number" placeholder="Hausnummer" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column flex-md-row gap-5 mb-7">
                                                            <div class="flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="form-label required">Stadt</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="billing_order_city" placeholder="Musterhausen" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="fv-row flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">PLZ</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="billing_order_postcode" placeholder="49123" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="fv-row flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Bundesland</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="billing_order_state" placeholder="Niedersachsen" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Land</label>
                                                            <!--end::Label-->
                                                            <!--begin::Select2-->
                                                            <select class="form-select form-select-solid" data-placeholder="Bitte wählen..." id="kt_ecommerce_edit_order_billing_country" name="billing_order_country" required>
                                                                <option></option>
                                                                <option value="AF" data-kt-select2-country="flags/afghanistan.svg">Afghanistan</option>
                                                                <option value="AX" data-kt-select2-country="flags/aland-islands.svg">Aland Islands</option>
                                                                <option value="AL" data-kt-select2-country="flags/albania.svg">Albania</option>
                                                                <option value="DZ" data-kt-select2-country="flags/algeria.svg">Algeria</option>
                                                                <option value="AS" data-kt-select2-country="flags/american-samoa.svg">American Samoa</option>
                                                                <option value="AD" data-kt-select2-country="flags/andorra.svg">Andorra</option>
                                                                <option value="AO" data-kt-select2-country="flags/angola.svg">Angola</option>
                                                                <option value="AI" data-kt-select2-country="flags/anguilla.svg">Anguilla</option>
                                                                <option value="AG" data-kt-select2-country="flags/antigua-and-barbuda.svg">Antigua and Barbuda</option>
                                                                <option value="AR" data-kt-select2-country="flags/argentina.svg">Argentina</option>
                                                                <option value="AM" data-kt-select2-country="flags/armenia.svg">Armenia</option>
                                                                <option value="AW" data-kt-select2-country="flags/aruba.svg">Aruba</option>
                                                                <option value="AU" data-kt-select2-country="flags/australia.svg">Australia</option>
                                                                <option value="AT" data-kt-select2-country="flags/austria.svg">Austria</option>
                                                                <option value="AZ" data-kt-select2-country="flags/azerbaijan.svg">Azerbaijan</option>
                                                                <option value="BS" data-kt-select2-country="flags/bahamas.svg">Bahamas</option>
                                                                <option value="BH" data-kt-select2-country="flags/bahrain.svg">Bahrain</option>
                                                                <option value="BD" data-kt-select2-country="flags/bangladesh.svg">Bangladesh</option>
                                                                <option value="BB" data-kt-select2-country="flags/barbados.svg">Barbados</option>
                                                                <option value="BY" data-kt-select2-country="flags/belarus.svg">Belarus</option>
                                                                <option value="BE" data-kt-select2-country="flags/belgium.svg">Belgium</option>
                                                                <option value="BZ" data-kt-select2-country="flags/belize.svg">Belize</option>
                                                                <option value="BJ" data-kt-select2-country="flags/benin.svg">Benin</option>
                                                                <option value="BM" data-kt-select2-country="flags/bermuda.svg">Bermuda</option>
                                                                <option value="BT" data-kt-select2-country="flags/bhutan.svg">Bhutan</option>
                                                                <option value="BO" data-kt-select2-country="flags/bolivia.svg">Bolivia, Plurinational State of</option>
                                                                <option value="BQ" data-kt-select2-country="flags/bonaire.svg">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="BA" data-kt-select2-country="flags/bosnia-and-herzegovina.svg">Bosnia and Herzegovina</option>
                                                                <option value="BW" data-kt-select2-country="flags/botswana.svg">Botswana</option>
                                                                <option value="BR" data-kt-select2-country="flags/brazil.svg">Brazil</option>
                                                                <option value="IO" data-kt-select2-country="flags/british-indian-ocean-territory.svg">British Indian Ocean Territory</option>
                                                                <option value="BN" data-kt-select2-country="flags/brunei.svg">Brunei Darussalam</option>
                                                                <option value="BG" data-kt-select2-country="flags/bulgaria.svg">Bulgaria</option>
                                                                <option value="BF" data-kt-select2-country="flags/burkina-faso.svg">Burkina Faso</option>
                                                                <option value="BI" data-kt-select2-country="flags/burundi.svg">Burundi</option>
                                                                <option value="KH" data-kt-select2-country="flags/cambodia.svg">Cambodia</option>
                                                                <option value="CM" data-kt-select2-country="flags/cameroon.svg">Cameroon</option>
                                                                <option value="CA" data-kt-select2-country="flags/canada.svg">Canada</option>
                                                                <option value="CV" data-kt-select2-country="flags/cape-verde.svg">Cape Verde</option>
                                                                <option value="KY" data-kt-select2-country="flags/cayman-islands.svg">Cayman Islands</option>
                                                                <option value="CF" data-kt-select2-country="flags/central-african-republic.svg">Central African Republic</option>
                                                                <option value="TD" data-kt-select2-country="flags/chad.svg">Chad</option>
                                                                <option value="CL" data-kt-select2-country="flags/chile.svg">Chile</option>
                                                                <option value="CN" data-kt-select2-country="flags/china.svg">China</option>
                                                                <option value="CX" data-kt-select2-country="flags/christmas-island.svg">Christmas Island</option>
                                                                <option value="CC" data-kt-select2-country="flags/cocos-island.svg">Cocos (Keeling) Islands</option>
                                                                <option value="CO" data-kt-select2-country="flags/colombia.svg">Colombia</option>
                                                                <option value="KM" data-kt-select2-country="flags/comoros.svg">Comoros</option>
                                                                <option value="CK" data-kt-select2-country="flags/cook-islands.svg">Cook Islands</option>
                                                                <option value="CR" data-kt-select2-country="flags/costa-rica.svg">Costa Rica</option>
                                                                <option value="CI" data-kt-select2-country="flags/ivory-coast.svg">Côte d'Ivoire</option>
                                                                <option value="HR" data-kt-select2-country="flags/croatia.svg">Croatia</option>
                                                                <option value="CU" data-kt-select2-country="flags/cuba.svg">Cuba</option>
                                                                <option value="CW" data-kt-select2-country="flags/curacao.svg">Curaçao</option>
                                                                <option value="CZ" data-kt-select2-country="flags/czech-republic.svg">Czech Republic</option>
                                                                <option value="DK" data-kt-select2-country="flags/denmark.svg">Denmark</option>
                                                                <option value="DJ" data-kt-select2-country="flags/djibouti.svg">Djibouti</option>
                                                                <option value="DM" data-kt-select2-country="flags/dominica.svg">Dominica</option>
                                                                <option value="DO" data-kt-select2-country="flags/dominican-republic.svg">Dominican Republic</option>
                                                                <option value="EC" data-kt-select2-country="flags/ecuador.svg">Ecuador</option>
                                                                <option value="EG" data-kt-select2-country="flags/egypt.svg">Egypt</option>
                                                                <option value="SV" data-kt-select2-country="flags/el-salvador.svg">El Salvador</option>
                                                                <option value="GQ" data-kt-select2-country="flags/equatorial-guinea.svg">Equatorial Guinea</option>
                                                                <option value="ER" data-kt-select2-country="flags/eritrea.svg">Eritrea</option>
                                                                <option value="EE" data-kt-select2-country="flags/estonia.svg">Estonia</option>
                                                                <option value="ET" data-kt-select2-country="flags/ethiopia.svg">Ethiopia</option>
                                                                <option value="FK" data-kt-select2-country="flags/falkland-islands.svg">Falkland Islands (Malvinas)</option>
                                                                <option value="FJ" data-kt-select2-country="flags/fiji.svg">Fiji</option>
                                                                <option value="FI" data-kt-select2-country="flags/finland.svg">Finland</option>
                                                                <option value="FR" data-kt-select2-country="flags/france.svg">France</option>
                                                                <option value="PF" data-kt-select2-country="flags/french-polynesia.svg">French Polynesia</option>
                                                                <option value="GA" data-kt-select2-country="flags/gabon.svg">Gabon</option>
                                                                <option value="GM" data-kt-select2-country="flags/gambia.svg">Gambia</option>
                                                                <option value="GE" data-kt-select2-country="flags/georgia.svg">Georgia</option>
                                                                <option value="DE" data-kt-select2-country="flags/germany.svg" selected="selected">Germany</option>
                                                                <option value="GH" data-kt-select2-country="flags/ghana.svg">Ghana</option>
                                                                <option value="GI" data-kt-select2-country="flags/gibraltar.svg">Gibraltar</option>
                                                                <option value="GR" data-kt-select2-country="flags/greece.svg">Greece</option>
                                                                <option value="GL" data-kt-select2-country="flags/greenland.svg">Greenland</option>
                                                                <option value="GD" data-kt-select2-country="flags/grenada.svg">Grenada</option>
                                                                <option value="GU" data-kt-select2-country="flags/guam.svg">Guam</option>
                                                                <option value="GT" data-kt-select2-country="flags/guatemala.svg">Guatemala</option>
                                                                <option value="GG" data-kt-select2-country="flags/guernsey.svg">Guernsey</option>
                                                                <option value="GN" data-kt-select2-country="flags/guinea.svg">Guinea</option>
                                                                <option value="GW" data-kt-select2-country="flags/guinea-bissau.svg">Guinea-Bissau</option>
                                                                <option value="HT" data-kt-select2-country="flags/haiti.svg">Haiti</option>
                                                                <option value="VA" data-kt-select2-country="flags/vatican-city.svg">Holy See (Vatican City State)</option>
                                                                <option value="HN" data-kt-select2-country="flags/honduras.svg">Honduras</option>
                                                                <option value="HK" data-kt-select2-country="flags/hong-kong.svg">Hong Kong</option>
                                                                <option value="HU" data-kt-select2-country="flags/hungary.svg">Hungary</option>
                                                                <option value="IS" data-kt-select2-country="flags/iceland.svg">Iceland</option>
                                                                <option value="IN" data-kt-select2-country="flags/india.svg">India</option>
                                                                <option value="ID" data-kt-select2-country="flags/indonesia.svg">Indonesia</option>
                                                                <option value="IR" data-kt-select2-country="flags/iran.svg">Iran, Islamic Republic of</option>
                                                                <option value="IQ" data-kt-select2-country="flags/iraq.svg">Iraq</option>
                                                                <option value="IE" data-kt-select2-country="flags/ireland.svg">Ireland</option>
                                                                <option value="IM" data-kt-select2-country="flags/isle-of-man.svg">Isle of Man</option>
                                                                <option value="IL" data-kt-select2-country="flags/israel.svg">Israel</option>
                                                                <option value="IT" data-kt-select2-country="flags/italy.svg">Italy</option>
                                                                <option value="JM" data-kt-select2-country="flags/jamaica.svg">Jamaica</option>
                                                                <option value="JP" data-kt-select2-country="flags/japan.svg">Japan</option>
                                                                <option value="JE" data-kt-select2-country="flags/jersey.svg">Jersey</option>
                                                                <option value="JO" data-kt-select2-country="flags/jordan.svg">Jordan</option>
                                                                <option value="KZ" data-kt-select2-country="flags/kazakhstan.svg">Kazakhstan</option>
                                                                <option value="KE" data-kt-select2-country="flags/kenya.svg">Kenya</option>
                                                                <option value="KI" data-kt-select2-country="flags/kiribati.svg">Kiribati</option>
                                                                <option value="KP" data-kt-select2-country="flags/north-korea.svg">Korea, Democratic People's Republic of</option>
                                                                <option value="KW" data-kt-select2-country="flags/kuwait.svg">Kuwait</option>
                                                                <option value="KG" data-kt-select2-country="flags/kyrgyzstan.svg">Kyrgyzstan</option>
                                                                <option value="LA" data-kt-select2-country="flags/laos.svg">Lao People's Democratic Republic</option>
                                                                <option value="LV" data-kt-select2-country="flags/latvia.svg">Latvia</option>
                                                                <option value="LB" data-kt-select2-country="flags/lebanon.svg">Lebanon</option>
                                                                <option value="LS" data-kt-select2-country="flags/lesotho.svg">Lesotho</option>
                                                                <option value="LR" data-kt-select2-country="flags/liberia.svg">Liberia</option>
                                                                <option value="LY" data-kt-select2-country="flags/libya.svg">Libya</option>
                                                                <option value="LI" data-kt-select2-country="flags/liechtenstein.svg">Liechtenstein</option>
                                                                <option value="LT" data-kt-select2-country="flags/lithuania.svg">Lithuania</option>
                                                                <option value="LU" data-kt-select2-country="flags/luxembourg.svg">Luxembourg</option>
                                                                <option value="MO" data-kt-select2-country="flags/macao.svg">Macao</option>
                                                                <option value="MG" data-kt-select2-country="flags/madagascar.svg">Madagascar</option>
                                                                <option value="MW" data-kt-select2-country="flags/malawi.svg">Malawi</option>
                                                                <option value="MY" data-kt-select2-country="flags/malaysia.svg">Malaysia</option>
                                                                <option value="MV" data-kt-select2-country="flags/maldives.svg">Maldives</option>
                                                                <option value="ML" data-kt-select2-country="flags/mali.svg">Mali</option>
                                                                <option value="MT" data-kt-select2-country="flags/malta.svg">Malta</option>
                                                                <option value="MH" data-kt-select2-country="flags/marshall-island.svg">Marshall Islands</option>
                                                                <option value="MQ" data-kt-select2-country="flags/martinique.svg">Martinique</option>
                                                                <option value="MR" data-kt-select2-country="flags/mauritania.svg">Mauritania</option>
                                                                <option value="MU" data-kt-select2-country="flags/mauritius.svg">Mauritius</option>
                                                                <option value="MX" data-kt-select2-country="flags/mexico.svg">Mexico</option>
                                                                <option value="FM" data-kt-select2-country="flags/micronesia.svg">Micronesia, Federated States of</option>
                                                                <option value="MD" data-kt-select2-country="flags/moldova.svg">Moldova, Republic of</option>
                                                                <option value="MC" data-kt-select2-country="flags/monaco.svg">Monaco</option>
                                                                <option value="MN" data-kt-select2-country="flags/mongolia.svg">Mongolia</option>
                                                                <option value="ME" data-kt-select2-country="flags/montenegro.svg">Montenegro</option>
                                                                <option value="MS" data-kt-select2-country="flags/montserrat.svg">Montserrat</option>
                                                                <option value="MA" data-kt-select2-country="flags/morocco.svg">Morocco</option>
                                                                <option value="MZ" data-kt-select2-country="flags/mozambique.svg">Mozambique</option>
                                                                <option value="MM" data-kt-select2-country="flags/myanmar.svg">Myanmar</option>
                                                                <option value="NA" data-kt-select2-country="flags/namibia.svg">Namibia</option>
                                                                <option value="NR" data-kt-select2-country="flags/nauru.svg">Nauru</option>
                                                                <option value="NP" data-kt-select2-country="flags/nepal.svg">Nepal</option>
                                                                <option value="NL" data-kt-select2-country="flags/netherlands.svg">Netherlands</option>
                                                                <option value="NZ" data-kt-select2-country="flags/new-zealand.svg">New Zealand</option>
                                                                <option value="NI" data-kt-select2-country="flags/nicaragua.svg">Nicaragua</option>
                                                                <option value="NE" data-kt-select2-country="flags/niger.svg">Niger</option>
                                                                <option value="NG" data-kt-select2-country="flags/nigeria.svg">Nigeria</option>
                                                                <option value="NU" data-kt-select2-country="flags/niue.svg">Niue</option>
                                                                <option value="NF" data-kt-select2-country="flags/norfolk-island.svg">Norfolk Island</option>
                                                                <option value="MP" data-kt-select2-country="flags/northern-mariana-islands.svg">Northern Mariana Islands</option>
                                                                <option value="NO" data-kt-select2-country="flags/norway.svg">Norway</option>
                                                                <option value="OM" data-kt-select2-country="flags/oman.svg">Oman</option>
                                                                <option value="PK" data-kt-select2-country="flags/pakistan.svg">Pakistan</option>
                                                                <option value="PW" data-kt-select2-country="flags/palau.svg">Palau</option>
                                                                <option value="PS" data-kt-select2-country="flags/palestine.svg">Palestinian Territory, Occupied</option>
                                                                <option value="PA" data-kt-select2-country="flags/panama.svg">Panama</option>
                                                                <option value="PG" data-kt-select2-country="flags/papua-new-guinea.svg">Papua New Guinea</option>
                                                                <option value="PY" data-kt-select2-country="flags/paraguay.svg">Paraguay</option>
                                                                <option value="PE" data-kt-select2-country="flags/peru.svg">Peru</option>
                                                                <option value="PH" data-kt-select2-country="flags/philippines.svg">Philippines</option>
                                                                <option value="PL" data-kt-select2-country="flags/poland.svg">Poland</option>
                                                                <option value="PT" data-kt-select2-country="flags/portugal.svg">Portugal</option>
                                                                <option value="PR" data-kt-select2-country="flags/puerto-rico.svg">Puerto Rico</option>
                                                                <option value="QA" data-kt-select2-country="flags/qatar.svg">Qatar</option>
                                                                <option value="RO" data-kt-select2-country="flags/romania.svg">Romania</option>
                                                                <option value="RU" data-kt-select2-country="flags/russia.svg">Russian Federation</option>
                                                                <option value="RW" data-kt-select2-country="flags/rwanda.svg">Rwanda</option>
                                                                <option value="BL" data-kt-select2-country="flags/st-barts.svg">Saint Barthélemy</option>
                                                                <option value="KN" data-kt-select2-country="flags/saint-kitts-and-nevis.svg">Saint Kitts and Nevis</option>
                                                                <option value="LC" data-kt-select2-country="flags/st-lucia.svg">Saint Lucia</option>
                                                                <option value="MF" data-kt-select2-country="flags/sint-maarten.svg">Saint Martin (French part)</option>
                                                                <option value="VC" data-kt-select2-country="flags/st-vincent-and-the-grenadines.svg">Saint Vincent and the Grenadines</option>
                                                                <option value="WS" data-kt-select2-country="flags/samoa.svg">Samoa</option>
                                                                <option value="SM" data-kt-select2-country="flags/san-marino.svg">San Marino</option>
                                                                <option value="ST" data-kt-select2-country="flags/sao-tome-and-prince.svg">Sao Tome and Principe</option>
                                                                <option value="SA" data-kt-select2-country="flags/saudi-arabia.svg">Saudi Arabia</option>
                                                                <option value="SN" data-kt-select2-country="flags/senegal.svg">Senegal</option>
                                                                <option value="RS" data-kt-select2-country="flags/serbia.svg">Serbia</option>
                                                                <option value="SC" data-kt-select2-country="flags/seychelles.svg">Seychelles</option>
                                                                <option value="SL" data-kt-select2-country="flags/sierra-leone.svg">Sierra Leone</option>
                                                                <option value="SG" data-kt-select2-country="flags/singapore.svg">Singapore</option>
                                                                <option value="SX" data-kt-select2-country="flags/sint-maarten.svg">Sint Maarten (Dutch part)</option>
                                                                <option value="SK" data-kt-select2-country="flags/slovakia.svg">Slovakia</option>
                                                                <option value="SI" data-kt-select2-country="flags/slovenia.svg">Slovenia</option>
                                                                <option value="SB" data-kt-select2-country="flags/solomon-islands.svg">Solomon Islands</option>
                                                                <option value="SO" data-kt-select2-country="flags/somalia.svg">Somalia</option>
                                                                <option value="ZA" data-kt-select2-country="flags/south-africa.svg">South Africa</option>
                                                                <option value="KR" data-kt-select2-country="flags/south-korea.svg">South Korea</option>
                                                                <option value="SS" data-kt-select2-country="flags/south-sudan.svg">South Sudan</option>
                                                                <option value="ES" data-kt-select2-country="flags/spain.svg">Spain</option>
                                                                <option value="LK" data-kt-select2-country="flags/sri-lanka.svg">Sri Lanka</option>
                                                                <option value="SD" data-kt-select2-country="flags/sudan.svg">Sudan</option>
                                                                <option value="SR" data-kt-select2-country="flags/suriname.svg">Suriname</option>
                                                                <option value="SZ" data-kt-select2-country="flags/swaziland.svg">Swaziland</option>
                                                                <option value="SE" data-kt-select2-country="flags/sweden.svg">Sweden</option>
                                                                <option value="CH" data-kt-select2-country="flags/switzerland.svg">Switzerland</option>
                                                                <option value="SY" data-kt-select2-country="flags/syria.svg">Syrian Arab Republic</option>
                                                                <option value="TW" data-kt-select2-country="flags/taiwan.svg">Taiwan, Province of China</option>
                                                                <option value="TJ" data-kt-select2-country="flags/tajikistan.svg">Tajikistan</option>
                                                                <option value="TZ" data-kt-select2-country="flags/tanzania.svg">Tanzania, United Republic of</option>
                                                                <option value="TH" data-kt-select2-country="flags/thailand.svg">Thailand</option>
                                                                <option value="TG" data-kt-select2-country="flags/togo.svg">Togo</option>
                                                                <option value="TK" data-kt-select2-country="flags/tokelau.svg">Tokelau</option>
                                                                <option value="TO" data-kt-select2-country="flags/tonga.svg">Tonga</option>
                                                                <option value="TT" data-kt-select2-country="flags/trinidad-and-tobago.svg">Trinidad and Tobago</option>
                                                                <option value="TN" data-kt-select2-country="flags/tunisia.svg">Tunisia</option>
                                                                <option value="TR" data-kt-select2-country="flags/turkey.svg">Turkey</option>
                                                                <option value="TM" data-kt-select2-country="flags/turkmenistan.svg">Turkmenistan</option>
                                                                <option value="TC" data-kt-select2-country="flags/turks-and-caicos.svg">Turks and Caicos Islands</option>
                                                                <option value="TV" data-kt-select2-country="flags/tuvalu.svg">Tuvalu</option>
                                                                <option value="UG" data-kt-select2-country="flags/uganda.svg">Uganda</option>
                                                                <option value="UA" data-kt-select2-country="flags/ukraine.svg">Ukraine</option>
                                                                <option value="AE" data-kt-select2-country="flags/united-arab-emirates.svg">United Arab Emirates</option>
                                                                <option value="GB" data-kt-select2-country="flags/united-kingdom.svg">United Kingdom</option>
                                                                <option value="US" data-kt-select2-country="flags/united-states.svg">United States</option>
                                                                <option value="UY" data-kt-select2-country="flags/uruguay.svg">Uruguay</option>
                                                                <option value="UZ" data-kt-select2-country="flags/uzbekistan.svg">Uzbekistan</option>
                                                                <option value="VU" data-kt-select2-country="flags/vanuatu.svg">Vanuatu</option>
                                                                <option value="VE" data-kt-select2-country="flags/venezuela.svg">Venezuela, Bolivarian Republic of</option>
                                                                <option value="VN" data-kt-select2-country="flags/vietnam.svg">Vietnam</option>
                                                                <option value="VI" data-kt-select2-country="flags/virgin-islands.svg">Virgin Islands</option>
                                                                <option value="YE" data-kt-select2-country="flags/yemen.svg">Yemen</option>
                                                                <option value="ZM" data-kt-select2-country="flags/zambia.svg">Zambia</option>
                                                                <option value="ZW" data-kt-select2-country="flags/zimbabwe.svg">Zimbabwe</option>
                                                            </select>
                                                            <!--end::Select2-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Package form-->
                                                    <!--begin::Package toggle-->
                                                    <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_create_shipment_package" role="button" aria-expanded="false" aria-controls="kt_modal_create_shipment_user_info">Versandart
                                                        <span class="ms-2 rotate-180">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->
                                                        </span>
                                                    </div>
                                                    <!--end::Package toggle-->
                                                    <!--begin::Package form-->
                                                    <div id="kt_modal_create_shipment_package" class="collapse">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2 required">Transporteur</label>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Bitte wählen Sie den gewünschten Transporteur für Ihre Sendung."></i>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="create_shipment_from" aria-label="Bitte wählen..." data-control="select2" data-placeholder="Bitte wählen..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_create_shipment" required>
																	<option value="">Bitte wählen...</option>
																	<option value="DHL">DHL</option>
																	<option value="DPD">DPD</option>
																</select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column flex-md-row gap-5 mb-7">
                                                            <div class="flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="form-label required">Gewicht (kg)</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input typ="number" class="form-control form-control-solid" name="billing_order_city" placeholder="5kg" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="form-label required">Breite (cm)</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input typ="number" class="form-control form-control-solid" name="billing_order_city" placeholder="25cm" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="fv-row flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Höhe (cm)</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input typ="number" class="form-control form-control-solid" name="billing_order_city" placeholder="25cm" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="fv-row flex-row-fluid">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Länge (cm)</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input typ="number" class="form-control form-control-solid" name="billing_order_city" placeholder="25cm" value="" required/>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2 required">Versandarten</label>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Bitte wählen Sie eine der verfügbaren Versandarten. Die Auswahl basiert auf Ihren Angaben z.B. Gewicht und Maße."></i>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="create_shipment_from" aria-label="Bitte wählen..." data-control="select2" data-placeholder="Bitte wählen..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_create_shipment" required>
																	<option value="">Bitte wählen...</option>
																	<option value="1">DHL - 2kg Paket - 3,95€</option>
																	<option value="2">DHL - 5kg Paket - 4,95€</option>
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
                                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Abbrechen</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Etikett erstellen</span>
														<span class="indicator-progress">Bitte warten...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Modal footer-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Modal - Create Shipment-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
    <!--end::Content-->
@endsection
