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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.administrator') }} >
                        {{ trans('message.clients') }} > {{ trans('message.invoice') }} >
                        #{{ $invoice->number }}</small>
                    <!--end::Description-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="print-content-only post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container - class="container-xxl"-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::Invoice 2 main-->
                <div class="card" id="generate_pdf">
                    <!--begin::Body-->
                    <div class="card-body p-lg-20">
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-xl-row">
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                                <!--begin::Invoice 2 content-->
                                <div class="mt-n1">
                                    <!--begin::Top-->
                                    <div class="d-flex flex-stack pb-10">
                                        <!--begin::Logo-->
                                        <div>
                                            <img alt="Logo"
                                                src="{{ asset('assets/media/logos/document-company-logo.png') }}"
                                                width="175px" />
                                        </div>
                                        <!--end::Logo-->
                                        <!--begin::Action-->
                                        <button id="printbtn" type="button" class="btn btn-success my-1 me-12"
                                            onclick="generatePDF()" data-html2canvas-ignore="true" >Download</button>
                                        <!--end::Action-->
                                        <input type="hidden" id="invoice_number" value="{{ $invoice->number }}"/>
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <div id="invoice_number" class="fw-bolder fs-3 text-gray-800 mb-8">
                                            {{ trans('message.invoice number') }} #{{ $invoice->number }}</div>

                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-11">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">
                                                    {{ trans('message.invoice date') }}:</div>
                                                <!--end::Label-->
                                                <!--end::Col-->
                                                <div class="fw-bolder fs-6 text-gray-800">
                                                    {{ date('d-m-Y', strtotime(\Carbon\Carbon::parse($invoice->created))) }}
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">
                                                    {{ trans('message.Due Date') }}:</div>
                                                <!--end::Label-->
                                                <!--end::Info-->
                                                <div
                                                    class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                    <span
                                                        class="pe-2">{{ date('d-m-Y', strtotime(\Carbon\Carbon::parse($invoice->period_end))) }}</span>
                                                    <span class="fs-7 text-danger d-flex align-items-center">
                                                        {{-- <span class="bullet bullet-dot bg-danger me-2"></span>Fällig in 7 Tagen</span> --}}
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">{{ trans('Bill from') }}:
                                                </div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bolder fs-6 text-gray-800">
                                                    {{ $company_detail->company_name }}</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-bold fs-7 text-gray-600">{{ $company_detail->company_name }}
                                                    <br />{{ $company_detail->street }}
                                                    {{ $company_detail->house_number }}
                                                    <br />{{ $company_detail->zip_code }} {{ $company_detail->city }}
                                                    <br />{{ $company_detail->country }}
                                                    <br />{{ $company_detail->email }}
                                                    <br />{{ $company_detail->phone }}

                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">
                                                    {{ trans('message.bill to') }}:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bolder fs-6 text-gray-800">{{ $client->company_name }}</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-bold fs-7 text-gray-600">{{ $client->company_name }}
                                                    <br />{{ $client->street }} {{ $client->house_number }}
                                                    <br />{{ $client->plz }} {{ $client->state }}
                                                    <br />{{ $client->country }}
                                                    <br />{{ $client->email }}
                                                    <br />{{ $client->telephone }}
                                                    <br />{{ $client->vat_id }}
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Content-->
                                        <div class="flex-grow-1">
                                            <!--begin::Table-->
                                            <div class="table-responsive border-bottom mb-9">
                                                <table class="table mb-3">
                                                    <thead>
                                                        <tr class="border-bottom fs-6 fw-bolder text-muted">
                                                            <th class="min-w-175px pb-2">{{ trans('message.product') }}
                                                            </th>
                                                            <th class="min-w-70px text-center pb-2">
                                                                {{ trans('message.Quantity') }}</th>
                                                            <th class="min-w-80px text-center pb-2">
                                                                {{ trans('message.Price') }}</th>
                                                            <th class="min-w-100px text-center pb-2">
                                                                {{ trans('message.In total') }} ({{ trans('message.excl. taxes') }})</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $subtotal = 0;
                                                        @endphp
                                                        @foreach ($invoice->lines->data as $invoice_product)
                                                            @php
                                                                $subtotal += $invoice_product->amount;
                                                            @endphp
                                                            <tr class="fw-bolder text-gray-700 fs-5 text-center">
                                                                <td class="d-flex align-items-center pt-6">
                                                                    <i
                                                                        class="fa fa-genderless text-danger fs-2 me-2"></i>{{ $invoice_product->description }}
                                                                </td>
                                                                <td class="pt-6">{{ $invoice_product->quantity }}</td>
                                                                <td class="pt-6">
                                                                    {{ Helper::money_format('EUR', 'de_DE', $invoice_product->amount) }}€
                                                                </td>
                                                                <td class="pt-6 text-dark fw-boldest">
                                                                    {{ Helper::money_format('EUR', 'de_DE', $invoice_product->amount * $invoice_product->quantity) }}€
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        {{-- <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                            <td class="d-flex align-items-center">
                                                                <i
                                                                    class="fa fa-genderless text-success fs-2 me-2"></i>Produkt
                                                                B
                                                            </td>
                                                            <td>120</td>
                                                            <td>40.00€</td>
                                                            <td class="fs-5 text-dark fw-boldest">4800.00€</td>
                                                        </tr>
                                                        <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                            <td class="d-flex align-items-center">
                                                                <i
                                                                    class="fa fa-genderless text-primary fs-2 me-2"></i>Produkt
                                                                C
                                                            </td>
                                                            <td>210</td>
                                                            <td>60.00€</td>
                                                            <td class="fs-5 text-dark fw-boldest">12000.00€</td>
                                                        </tr> --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                            <!--begin::Container-->
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Section-->
                                                <div class="mw-300px">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Accountname-->
                                                        <div class="fw-bold pe-10 text-gray-600 fs-7">
                                                            {{ trans('message.Subtotal') }}</div>
                                                        <!--end::Accountname-->
                                                        <!--begin::Label-->
                                                        <div class="text-end fw-bolder fs-6 text-gray-800">
                                                            {{ Helper::money_format('EUR', 'de_DE', $invoice->subtotal) }}€</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Accountname-->
                                                        <div class="fw-bold pe-10 text-gray-600 fs-7">
                                                            {{ trans('message.Discount') }}</div>
                                                        <!--end::Accountname-->
                                                        <!--begin::Label-->
                                                        @if ($invoice->discount != null)
                                                            @if ($invoice->discount->coupon->amount_off)
                                                                <div class="text-end fw-bolder fs-6 text-gray-800">
                                                                    {{ Helper::money_format('EUR', 'de_DE', $invoice->discount->coupon->amount_off) }}€
                                                                </div>
                                                            @else
                                                            <div class="text-end fw-bolder fs-6 text-gray-800">
                                                                    {{ $invoice->discount->coupon->percent_off}}%
                                                                </div>

                                                            @endif

                                                        @else

                                                            {{-- <div class="text-end fw-bolder fs-6 text-gray-800">
                                                                {{ Helper::money_format('EUR', 'de_DE', $invoice->discount->coupon->amount_off) }}€ / {{$invoice->discount->coupon->percent_off}}%
                                                            </div> --}}
                                                            <div class="text-end fw-bolder fs-6 text-gray-800">
                                                                {{-- 0€ /0% --}}0
                                                            </div>
                                                        @endif

                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    {{-- <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Accountname-->
                                                        <div class="fw-bold pe-10 text-gray-600 fs-7">
                                                            {{ trans('Shipping') }}</div>
                                                        <!--end::Accountname-->
                                                        <!--begin::Label-->
                                                        <div class="text-end fw-bolder fs-6 text-gray-800">0€</div>
                                                        <!--end::Label-->
                                                    </div> --}}
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Accountname-->
                                                        <div class="fw-bold pe-10 text-gray-600 fs-7">
                                                            {{ trans('message.Taxes 19') }}</div>
                                                        <!--end::Accountname-->
                                                        <!--begin::Label-->
                                                        {{-- @php
                                                            $tax = $invoice->total - ($invoice->total / 1.19);
                                                        @endphp --}}
                                                        {{-- <div class="text-end fw-bolder fs-6 text-gray-800">
                                                            {{ Helper::money_format('EUR', 'de_DE', round($tax)) }}€</div> --}}
                                                        <div class="text-end fw-bolder fs-6 text-gray-800">{{ Helper::money_format('EUR', 'de_DE', round($invoice->tax))}}€</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Code-->
                                                        <div class="fw-bold pe-10 text-gray-600 fs-7">
                                                            {{ trans('message.total') }}</div>
                                                        <!--end::Code-->
                                                        <!--begin::Label-->
                                                        <div class="text-end fw-bolder fs-6 text-gray-800">
                                                            {{ Helper::money_format('EUR', 'de_DE', $invoice->total) }}€</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <br><br>
                                            <!--end::Container-->
                                            <div class="row d-flex justify-content-center">
                                                @if ($client->location == "Germany")
                                                    <!--end::Col-->
                                                    <div class="col-md-12">
                                                        <!--end::Text-->
                                                        <h4 class="fw-bold fs-7 text-gray-600">{{ trans('message.This invoice was generated automatically. We thank you for your use of uFill and the trust you have placed in us.') }}</h4>
                                                    </div>
                                                    <!--end::Col-->
                                                @elseif($client->location == "Europe")
                                                    <!--end::Col-->
                                                    <div class="col-md-12">
                                                        <!--end::Text-->
                                                        <h4 class="fw-bold fs-7 text-gray-600">{{ trans('message.Please note the applicable requirements of the "reverse charge" regulation within the EU. This invoice was generated automatically. We thank you for your use of uFill and the trust you have placed in us.') }}</h4>
                                                    </div>
                                                    <!--end::Col-->
                                                @else()
                                                    <!--end::Col-->
                                                    <div class="col-md-12">
                                                        <!--end::Text-->
                                                        <h4 class="fw-bold fs-7 text-gray-600">{{ trans('message.Please note the tax regulations applicable in your country. This invoice was generated automatically. We thank you for your use of uFill and the trust you have placed in us.') }}</h4>
                                                    </div>
                                                    <!--end::Col-->
                                                @endif

                                            </div>
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed mb-8 mt-8"></div>
                                            <!--end::Separator-->
                                            <!--begin::Row-->
                                            <div class="row g-5 mb-12">
                                                <!--end::Col-->
                                                <div class="col-sm-6">
                                                    <!--end::Text-->
                                                    <div class="fw-bolder fs-6 text-gray-800">
                                                        {{ trans('message.company data') }}</div>
                                                    <!--end::Text-->
                                                    <!--end::Text-->
                                                    <!--end::Description-->
                                                    <div class="fw-bold fs-7 text-gray-600">
                                                        {{ $company_detail->company_name }}
                                                        <br />{{ $company_detail->street }}
                                                        {{ $company_detail->house_number }}
                                                        <br />{{ $company_detail->zip_code }} {{ $company_detail->city }}
                                                        <br />{{ $company_detail->country }}
                                                        <br />{{ $company_detail->email }}
                                                        <br />{{ $company_detail->phone }}
                                                        <br />{{ $company_detail->vat }}
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Col-->
                                                <!--end::Col-->
                                                <div class="col-sm-6">
                                                    <!--end::Text-->
                                                    <div class="fw-bolder fs-6 text-gray-800">
                                                        {{ trans('message.payment details') }}</div>
                                                    <!--end::Text-->
                                                    <!--end::Description-->
                                                    <div class="fw-bold fs-7 text-gray-600">
                                                        {{ $company_detail->bank_name }}
                                                        <br />{{ $company_detail->account_holder }}
                                                        <br />IBAN: {{ $company_detail->iban }}
                                                        <br />BIC: {{ $company_detail->bic }}
                                                        <br />{{ trans('message.invoice') }} #{{ $invoice->number }}
                                                        <br />PayPal: {{ $company_detail->paypal_email }}
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Invoice 2 content-->

                            </div>
                            <!--end::Content-->
                            <!--begin::Sidebar-->
                            {{-- <div class="m-0">
                                            <!--begin::Invoice 2 sidebar-->
                                            <div class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                                                <!--begin::Labels-->
                                                <div class="mb-8">
                                                    <span class="badge badge-light-success me-2">Rechnung heruntergeladen</span>
                                                    <span class="badge badge-light-warning">Zahlung offen</span>
                                                </div>
                                                <!--end::Labels-->
                                                <!--begin::Title-->
                                                <h6 class="mb-2 fw-boldest text-gray-600">Zahlungsdetails</h6>
                                                <!--end::Title-->
                                                <div class="mb-6">
                                                    <div class="fw-bold text-gray-600 fs-7 mb-2">Kunde:</div>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin:: Avatar -->
                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                <div class="symbol-label bg-primary text-light">
                                                                    BC
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <div class="ms-5">
                                                            <!--begin::Title-->
                                                            <a href="../../demo1/dist/apps/user-management/users/view.html" class="d-block text-gray-800 text-hover-primary fs-4 fw-bolder mb-0 lh-1">Brian Cox</a>
                                                            <a href="../../demo1/dist/apps/user-management/users/view.html" class="d-block text-gray-400 text-hover-primary fs-8 fw-bolder mt-0 lh-1">#CST-1234</a>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--begin::Item-->
                                                <div class="mb-6">
                                                    <div class="fw-bold text-gray-600 fs-7">Verknüpfungen:</div>
                                                    <div class="fw-bolder text-gray-800 fs-6">Bestellung: <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="fw-bolder text-gray-800 fs-6 text-hover-primary">#ORD-1234</a></div>
                                                    <div class="fw-bolder text-gray-800 fs-6">Sendung: <a href="../../demo1/dist/dashboards/status-check.html" class="fw-bolder text-gray-800 fs-6 text-hover-primary">#SHP-5416</a></div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="mb-15">
                                                    <div class="fw-bold text-gray-600 fs-7">Zahlungsfrist:</div>
                                                    <div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center">02 May 2021
                                                    <span class="fs-7 text-danger d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-danger mx-2"></span>Fällig in 7 Tagen</span></div>
                                                </div>
                                                <!--end::Item-->

                                                <a onclick="generatePDF()" class="d-block btn btn-sm btn-primary mb-2">Herunterladen.</a>
                                                <a href="#" class="d-block btn btn-sm btn-warning mb-2">Als offen markieren.</a>
                                                <a href="#" class="d-block btn btn-sm btn-success mb-2">Als bezahlt markieren.</a>
                                                <a href="#" class="d-block btn btn-sm btn-danger">Stornieren.</a>
                                            </div>
                                            <!--end::Invoice 2 sidebar-->
                                        </div> --}}
                            <!--end::Sidebar-->
                        </div>
                        <!--end::Layout-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Invoice 2 main-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection


@section('custom_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        function generatePDF() {

            const invoice_number = document.getElementById('invoice_number').value;


            var element = document.getElementById('generate_pdf');
            var opt = {
                margin: [15, 15, 0, 15], //top, left, buttom, right
                filename: 'ufill-'+invoice_number+'.pdf',
                image: {
                    type: 'png',
                    quality: 0.95
                },
                html2canvas: {
                    scale: 2, //4 try it
                    logging: true,
                    dpi: 192,
                    letterRendering: true,
                    useCORS: true
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a3',
                    orientation: 'portrait',
                }
            };


            html2pdf().set(opt).from(element).save();



        }
    </script>
    {{-- <script language="javascript">
        function printDiv(divName) {

            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;


            window.print();

            document.body.innerHTML = originalContents;

        }
    </script> --}}
@endsection
