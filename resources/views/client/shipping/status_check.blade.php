@extends('client.master')

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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.Dashboards > eCommerce > Status check') }}</small>
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
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px">
                        <!--begin::Card-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header mt-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ trans('message.Status check') }}</h2>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="{{trans('message.Enter a #INV, #RFD, #ORD, #RTN, or #SHP number to start the search.')}}"></i>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1 mb-5">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                fill="black" />
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-ecommerce-order-filter="search"
                                        class="d-block form-control form-control-solid w-175px ps-14 me-2"
                                        placeholder="Suchen..." />
                                    <!--begin::Actions-->
                                    <a href="#" class="btn btn-primary" id="kt_subscriptions_create_button">{{ trans('message.Search') }}</a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-5 fs-6">
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <a href="../../demo1/dist/apps/customers/view.html">
                                            <div class="symbol symbol-60px symbol-circle me-3">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                            </div>
                                        </a>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <a href="../../demo1/dist/apps/customers/view.html"
                                                class="fs-4 fw-bolder text-gray-900 text-hover-primary me-2">Max
                                                Mustermann</a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <a href="../../demo1/dist/apps/customers/view.html"
                                                class="fw-bold text-gray-600">#CST-54156</a>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">Details</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::info-->
                                        <div class="fw-bold d-block text-gray-600">{{ trans('message.Orderdate') }}: 18.02.2022 / 04:56 {{ trans('message.o`clock') }}
                                        </div>
                                        <div class="fw-bold d-block text-gray-600">{{ trans('message.Value of goods') }}: 150€</div>
                                        <div class="fw-bold d-block text-gray-600">{{ trans('message.Shipping method') }}: DPD 5kg Paket</div>
                                        <div class="fw-bold d-block text-gray-600">{{ trans('message.Tracking number') }}: 5412547845</div>
                                        <div class="fw-bold d-block text-gray-600">{{ trans('message.Shipping on') }}: 19.02.2022 / 08:45 Uhr</div>
                                        <div class="fw-bold d-block text-gray-600">{{ trans('message.Delivery on') }}: 20.02.2022 / 15:01 Uhr</div>
                                        <!--end::info-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">{{ trans('message.Links') }}</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::info-->
                                        <a href="../../demo1/dist/apps/invoices/view/preview-invoice.html"
                                            class="fw-bold d-block text-gray-600 text-hover-primary">{{ trans('message.Invoice') }}: #INV-1234</a>
                                        <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                            class="fw-bold d-block text-gray-600 text-hover-primary">{{ trans('message.Order') }}:
                                            #ORD-1234</a>
                                        <a href="../../demo1/dist/apps/invoices/view/preview-refund.html"
                                            class="fw-bold d-block text-gray-600 text-hover-primary">{{ trans('message.Credit') }}:
                                            #RFD-1234</a>
                                        <a href="../../demo1/dist/apps/ecommerce/sales/return-details.html"
                                            class="fw-bold d-block text-gray-600 text-hover-primary">{{ trans('message.Return') }}: #RTN-1234</a>
                                        <div class="fw-bold d-block text-gray-600">{{ trans('message.Shipment label') }}: #SHP-1234</div>
                                        <div class="fw-bold d-block text-gray-600">{{ trans('message.Return label') }}: #SHP-1257</div>
                                        <!--end::info-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">{{ trans('message.Documents') }}</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::File-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-30px me-5">
                                                <img alt="Icon" src="assets/media/svg/files/pdf.svg" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Details-->
                                            <div class="fw-bold">
                                                <a class="d-block fs-6 fw-bolder text-dark text-hover-primary"
                                                    href="../../demo1/dist/apps/invoices/view/preview-invoice.html">#INV-1234</a>
                                                <span class="badge badge-light-warning">{{ trans('message.Payment open') }}</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-30px me-5">
                                                <img alt="Icon" src="assets/media/svg/files/pdf.svg" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Details-->
                                            <div class="fw-bold">
                                                <a class="d-block fs-6 fw-bolder text-dark text-hover-primary"
                                                    href="#">#SHP-1234</a>
                                                <span class="badge badge-light-primary">DPD Etikett</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-30px me-5">
                                                <img alt="Icon" src="assets/media/svg/files/pdf.svg" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Details-->
                                            <div class="fw-bold">
                                                <a class="d-block fs-6 fw-bolder text-dark text-hover-primary"
                                                    href="#">#SHP-1257</a>
                                                <span class="badge badge-light-primary">DPD Etikett</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::File-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">{{ trans('message.Products') }}</h5>
                                    <!--end::Title-->
                                    <div class="overflow-auto h-100px">
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Thumbnail-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                    data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Thumbnail-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                    data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Sidebar-->
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-15">
                        <!--begin::Card-->
                        <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-gray-800">{{ trans('message.Tracking') }}</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.4x status entries for your shipment found.') }}</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip'
                                        title="Status erneut abfragen...">{{ trans('message.Update') }}</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-4 px-0">
                                <!--begin::Tab Content-->
                                <div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2">
                                    <!--begin::tracking-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="black" />
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="fs-8 fw-boldest text-primary text-uppercase">{{ trans('message.Sender') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">Mustermann GmbH</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">Musterweg 1A, 49123 Musterhausen,
                                                        Germany</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Updates Timeline item
                                                                    <div class="overflow-auto h-300px"> -->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="black" />
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-boldest text-gray-800 text-uppercase">{{ trans('message.Shipment created') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">19.02.2022 / 08:45
                                                        Uhr</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">Unbekannt</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="black" />
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-boldest text-gray-800 text-uppercase">{{ trans('message.Shipment handed over') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">19.02.2022 / 15:50
                                                        Uhr</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">{{ trans('message.Location') }}</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="black" />
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-boldest text-gray-800 text-uppercase">{{ trans('message.On the way to the parcel centre') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">19.02.2022 / 21:02
                                                        Uhr</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">{{ trans('message.Location') }}</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="black" />
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-boldest text-gray-800 text-uppercase">{{ trans('message.In the parcel centre') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">20.02.2022 / 02:24
                                                        Uhr</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">{{ trans('message.Location') }}</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="black" />
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-boldest text-gray-800 text-uppercase">{{ trans('message.In the delivery vehicle') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">20.02.2022 / 06:54
                                                        Uhr</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">{{ trans('message.Location') }}</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="black" />
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-boldest text-gray-800 text-uppercase">{{ trans('message.In delivery') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">20.02.2022 / 10:01
                                                        Uhr</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">{{ trans('message.Location') }}</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="black" />
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="fs-8 fw-boldest text-success text-uppercase">{{ trans('message.Delivered') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">20.02.2022 / 15:01
                                                        Uhr</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">{{ trans('message.Location') }}</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!-- </div>
                                                                    end::Updates Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="black" />
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="fs-8 fw-boldest text-success text-uppercase">{{ trans('message.Receiver') }}</span>
                                                    <!--begin::Label-->
                                                    <!--begin::Title-->
                                                    <div class="fs-6 text-gray-800 fw-bolder d-block">Ralph Edwards</div>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fw-bold text-gray-400">Musterweg 15, 69123 Musterberg,
                                                        Germany</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--end::tracking-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
                <!--begin::Modals-->
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
