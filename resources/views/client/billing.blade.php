@extends('client.master')
@section('custom-css')
@endsection

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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.client') }} >
                        {{ trans('message.billing') }} > {{ trans('message.View') }}</small>
                    <!--end::Description-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <div class="form-group m-5">
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
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px">
                        <!--begin::Card-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ trans('message.summary') }}</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-5 fs-6">
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-60px symbol-circle me-3">
                                            @if ($client->profile_picture != null)
                                                <img alt="Company Logo" src="{{ URL::asset($client->profile_picture) }}" />
                                            @else
                                                <img alt="Company Logo"
                                                    src="{{ asset('assets/media/avatars/blank.png') }}" />
                                            @endif
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="fs-4 fw-bolder text-gray-900 text-hover-primary me-2">{{ $client->first_name . ' ' . $client->last_name }}</a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-gray-600">{{ $client->email }}</div>
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
                                    <h5 class="mb-4">{{ trans('message.product details') }}</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-2">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">{{ $client->variant_name }}
                                            {{ trans('message.Account') }}</span>
                                        <!--end::Plan-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Price-->
                                        <span class="fw-bold text-gray-600">{{ trans('Open costs') }}:
                                            {{ $client->open_costs }}€</span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->

                                <!--end::Seperator-->
                                <!--begin::Section-->
                                {{-- <div class="mb-10">
                                <!--begin::Title-->
                                <h5 class="mb-4">Zahlungsmethode</h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Card info-->
                                    <div class="fw-bold text-gray-600 d-flex align-items-center">Mastercard
                                        <img src="{{asset('assets/media/svg/card-logos/mastercard.svg')}}" class="w-35px ms-2"
                                            alt="" /></div>
                                    <!--end::Card info-->
                                    <!--begin::Card expiry-->
                                    <div class="fw-bold text-gray-600">Gültig bis: Dez. 2024</div>
                                    <!--end::Card expiry-->
                                </div>
                                <!--end::Details-->
                            </div> --}}
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">{{ trans('message.billing details') }}</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                                        <!--begin::Row-->
                                        <tr class="">
                                            <td class="text-gray-400">{{ trans('message.Started at') }}:</td>
                                            <td class="text-gray-800">{{ $client->created_at }}</td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr class="">
                                            <td class="text-gray-400">{{ trans('message.contract term') }}:</td>
                                            <td class="text-gray-800">{{ $client->account_plan }}</td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr class="">
                                            <td class="text-gray-400">{{ trans('message.Status') }}:</td>
                                            <td>
                                                @if ($client->stripe_status == 'active')
                                                    <span
                                                        class="badge badge-light-success">{{ $client->stripe_status }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-light-danger">{{ $client->stripe_status }}</span>
                                                @endif

                                            </td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr class="">
                                            <td class="text-gray-400">{{ trans('message.next settlement') }}:</td>
                                            <td class="text-gray-800">
                                                {{ date('d-m-Y ', strtotime($client->next_payment)) }}</td>
                                        </tr>
                                        <!--end::Row-->
                                    </table>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Actions-->
                                {{-- @if ($client->stripe_status == 'active')
                                    <div class="mb-2">
                                        <a href="#" class="btn btn-danger d-block" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_del_sub">{{ trans('message.terminate the contract') }}</a>
                                    </div>
                                @endif --}}
                                <div class="mb-2">
                                    <a href="#" class="btn btn-danger d-block" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_del_sub">{{ trans('message.terminate the contract') }}</a>
                                </div>
                                <div class="mt-1">
                                    <a class="btn btn-success d-block" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">{{ trans('message.Down-/Upgrade Account') }}</a>
                                    {{-- <a href="{{Route('upgrade_plan')}}" class="btn btn-success d-block">{{ trans('message.Down-/Upgrade Account') }}</a> --}}
                                </div>

                                <!--end::Actions-->
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
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">{{ trans('message.invoice') }}</h2>
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_edit_billig_info">{{ trans('message.Edit') }}
                                        {{ trans('message.information') }}</button>

                                    {{-- <button type="button" class="btn btn-light-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_product">{{ trans('message.Edit') }}</button> --}}
                                    {{-- <a href="{{ Route('upgrade_plan') }}" type="button"
                                        class="btn btn-light-primary">{{ trans('message.Edit') }}</a> --}}

                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-3">
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">{{ trans('message.billing details') }}:</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap py-5">
                                        <!--begin::Row-->
                                        <div class="flex-equal me-5">
                                            <!--begin::Details-->
                                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.First Name') }}:</td>
                                                    <td class="text-gray-800">{{ $client->first_name }}</td>
                                                </tr>

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.company') }}:</td>
                                                    <td class="text-gray-800">{{ $client->company_name }}</td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.Address') }}:</td>
                                                    <td class="text-gray-800">{{ $client->street }}
                                                        {{ $client->house_number }} {{ $client->plz }}
                                                        {{ $client->state }} {{ $client->country }}</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.E-Mail') }}:</td>
                                                    <td class="text-gray-800">{{ $client->email }}</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.Phone') }}:</td>
                                                    <td class="text-gray-800">{{ $client->telephone }}</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.Mobile') }}:</td>
                                                    <td class="text-gray-800">{{ $client->mobile_number }}</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.language') }}:</td>
                                                    <td class="text-gray-800">German</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-gray-400">
                                                        {{ trans('message.Registration number') }}:</td>
                                                    <td class="text-gray-800">{{ $client->registration_number }}</td>
                                                </tr>
                                                <!--end::Row-->
                                            </table>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="flex-equal">
                                            <!--begin::Details-->
                                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                                <!--begin::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.Last Name') }}:</td>
                                                    <td class="text-gray-800">{{ $client->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-gray-400 ">{{ trans('message.product details') }}:
                                                    </td>
                                                    <td class="text-gray-800 ">
                                                        <div class="text-gray-800">"{{ $client->variant_name }}" Account
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.customer number') }}:
                                                    </td>
                                                    <td class="text-gray-800">{{ $client->id }}</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.billing cycle') }}:</td>
                                                    <td class="text-gray-800">{{ $client->account_plan }}</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.next billing') }}:</td>
                                                    <td class="text-gray-800">
                                                        {{ date('d-m-Y ', strtotime($client->next_payment)) }}</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.Currency') }}:</td>
                                                    <td class="text-gray-800">EUR - Euro</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.VAT number') }}.:</td>
                                                    <td class="text-gray-800">{{ $client->vat_id }}</td>
                                                </tr>
                                                <!--end::Row-->
                                                <tr>
                                                    <td class="text-gray-400">{{ trans('message.Website') }}.:</td>
                                                    <td class="text-gray-800">{{ $client->website }}</td>
                                                </tr>
                                                <!--begin::Row-->

                                                <!--end::Row-->
                                            </table>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                @if ($client->reason_of_termination != null)
                                    <div class="mb-10">
                                        <!--begin::Title-->
                                        <h2 class="mb-4">{{ trans('message.your Reason') }}:
                                        </h2>
                                        <!--end::Title-->
                                        <!--begin::Product table-->
                                        <p class="mb-4">{{ $client->reason_of_termination }}</p>
                                        <!--end::Product table-->
                                    </div>
                                @endif

                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-0">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">{{ trans('message.billing item') }}:</h5>
                                    <!--end::Title-->
                                    <!--begin::Product table-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-4 mb-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr
                                                    class="border-bottom border-gray-200 text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-150px">{{ trans('message.product') }}</th>
                                                    <th class="min-w-50px text-center">{{ trans('message.Info') }}</th>

                                                    <th class="min-w-125px">{{ trans('message.Number') }}</th>
                                                    <th class="min-w-125px">{{ trans('message.billing cycle') }}</th>
                                                    <th class="min-w-125px">{{ trans('message.debit') }}</th>
                                                    <th class="min-w-125px">{{ trans('In total') }}</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-800">
                                                <tr>
                                                    <td>
                                                        <label class="w-150px">uFill "{{ $client->variant_name }}"
                                                            Account</label>
                                                        <div class="fw-normal text-gray-600">{{ $client->account_plan }}
                                                            {{ trans('message.Package') }}</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Sie haben sich für einen Teamaccount entschieden. Ihnen stehen alle Funktionen zur Verfügung."></i>
                                                    </td>

                                                    <td>
                                                        {{ $client_users }}
                                                    </td>
                                                    <td>{{ $client->account_plan }}ly</td>
                                                    <td>{{ date('d-m-Y ', strtotime($client->next_payment)) }}</td>
                                                    @php
                                                        $next_payment = App\Models\VariantPlan::where('variant_id', $client->account_type)
                                                            ->where('plan', $client->account_plan)
                                                            ->first();
                                                        $affiliated_programs = App\Models\AffiliateProgram::all();

                                                        $referred_clients_count = App\Models\AffiliateLink::where('affiliate_from', $client->id)->count();

                                                        // foreach ($affiliated_programs as $key => $affiliated_program) {
                                                        //         if($referred_clients_count >= $affiliated_program->necessary_referred_clients && $referred_clients_count <= $affiliated_program->range_value){
                                                        //             $percent = $affiliated_program->discount;
                                                        //         }else{
                                                        //             $percent = 0;

                                                        //         }
                                                        // }
                                                        $program_discount = App\Models\AffiliateProgram::where('necessary_referred_clients', '<=', $referred_clients_count)->first();
                                                        if ($program_discount) {
                                                            $discount = $program_discount->discount;
                                                        } else {
                                                            $discount = 0;
                                                        }

                                                    @endphp
                                                    <td class="text-centre text-danger">
                                                        € {{ Helper::money_format('EUR', 'de_DE', $next_payment->price) }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label class="w-150px">Affiliate Program</label>
                                                        <div class="fw-normal text-gray-400">Rabatt aufgrund geworbener
                                                            aktiver Kunden.</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Der Rabatt wird auf den Grundpreis von uFill angerechnet."></i>
                                                    </td>
                                                    <td>{{ $referred_clients }}</td>
                                                    <td>{{ $client->account_plan }}ly</td>
                                                    <td>{{ date('d-m-Y ', strtotime($client->next_payment)) }}</td>

                                                    <td><span class="badge badge-success">{{ $discount }}%
                                                        </span></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label
                                                            class="w-150px">{{ trans('message.Parcel shipping (labels)') }}</label>
                                                        <div class="fw-normal text-gray-400">Berechnet anhand frankierter
                                                            Pakete.</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Die Summe wird anhand der von Ihnen frankierten Pakete berechnet."></i>
                                                    </td>
                                                    <td>
                                                        {{ $this_month_shipments->count() }}
                                                    </td>
                                                    <td>instantly</td>
                                                    <td>{{ date('d-m-Y ', strtotime($current_date)) }}</td>
                                                    <td><span class="badge badge-default text-black"
                                                            style="background-color: rgb(207, 202, 202)">coming soon</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Product table-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ trans('message.invoice') }}</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Toolbar-->
                                {{-- <div class="card-toolbar">
                                <!--begin::Tab nav-->
                                <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_referrals_year_tab" class="nav-link text-active-primary active"
                                            data-bs-toggle="tab" role="tab"
                                            href="#kt_customer_details_invoices_1">Aktuelles Jahr</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3"
                                            data-bs-toggle="tab" role="tab"
                                            href="#kt_customer_details_invoices_2">2021</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3"
                                            data-bs-toggle="tab" role="tab"
                                            href="#kt_customer_details_invoices_3">2020</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3"
                                            data-bs-toggle="tab" role="tab"
                                            href="#kt_customer_details_invoices_4">2019</a>
                                    </li>
                                </ul>
                                <!--end::Tab nav-->
                            </div> --}}
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-2">
                                <!--begin::Tab Content-->
                                <div id="kt_referred_users_tab_content" class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_1" class="tab-pane fade show active"
                                        role="tabpanel">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="kt_customer_details_invoices_table_1"
                                                class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                                <!--begin::Thead-->
                                                <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                                    <tr class=" text-gray-400">
                                                        <th class="min-w-100px text-start">{{ trans('message.id') }}</th>
                                                        <th class="min-w-100px">{{ trans('message.total') }}</th>
                                                        <th class="min-w-100px">{{ trans('message.Status') }}</th>
                                                        <th class="min-w-100px">{{ trans('message.date') }}</th>
                                                        <th class="min-w-100px">{{ trans('message.invoice') }}</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Thead-->
                                                <!--begin::Tbody-->
                                                <tbody class="fs-6 fw-bold text-gray-600">
                                                    @foreach ($invoices as $invoice)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ Route('view.invoice', $invoice->id) }}"
                                                                    class="text-gray-600 text-hover-primary">{{ $invoice->id }}</a>
                                                            </td>
                                                            <td class="text-success">€
                                                                {{ Helper::money_format('EUR', 'de_DE', $invoice->total) }}
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-light-success">{{ $invoice->status }}</span>
                                                            </td>
                                                            <td>{{ date('m-d-y', strtotime(\Carbon\Carbon::parse($invoice->created))) }}
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="{{ Route('view.invoice', $invoice->id) }}"
                                                                    class="btn btn-sm btn-light btn-active-light-primary">{{ trans('message.Preview Invoice') }}</a>
                                                            </td>
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
                                    <div id="kt_customer_details_invoices_2" class="tab-pane fade" role="tabpanel">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="kt_customer_details_invoices_table_2"
                                                class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                                <!--begin::Thead-->
                                                <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                                    <tr class="text-start text-gray-400">
                                                        <th class="min-w-100px">{{ trans('message.id') }}</th>
                                                        <th class="min-w-100px">{{ trans('message.total') }}</th>
                                                        <th class="min-w-100px">{{ trans('message.Status') }}</th>
                                                        <th class="min-w-125px">{{ trans('message.date') }}</th>
                                                        <th class="w-100px">{{ trans('message.invoice') }}</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Thead-->
                                                <!--begin::Tbody-->
                                                <tbody class="fs-6 fw-bold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">#INV-584521</a>
                                                        </td>
                                                        <td class="text-success">380,00€</td>
                                                        <td>
                                                            <span class="badge badge-light-danger">Überfällig</span>
                                                        </td>
                                                        <td>01.01.2021</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Tbody-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_3" class="tab-pane fade" role="tabpanel">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="kt_customer_details_invoices_table_3"
                                                class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                                <!--begin::Thead-->
                                                <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                                    <tr class="text-start text-gray-400">
                                                        <th class="min-w-100px">ID</th>
                                                        <th class="min-w-100px">Summe</th>
                                                        <th class="min-w-100px">Status</th>
                                                        <th class="min-w-125px">Datum</th>
                                                        <th class="w-100px">Rechnung</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Thead-->
                                                <!--begin::Tbody-->
                                                <tbody class="fs-6 fw-bold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">#INV-584521</a>
                                                        </td>
                                                        <td class="text-success">380,00€</td>
                                                        <td>
                                                            <span class="badge badge-light-danger">Überfällig</span>
                                                        </td>
                                                        <td>01.01.2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Tbody-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_4" class="tab-pane fade" role="tabpanel">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="kt_customer_details_invoices_table_4"
                                                class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
                                                <!--begin::Thead-->
                                                <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                                    <tr class="text-start text-gray-400">
                                                        <th class="min-w-100px">ID</th>
                                                        <th class="min-w-100px">Summe</th>
                                                        <th class="min-w-100px">Status</th>
                                                        <th class="min-w-125px">Datum</th>
                                                        <th class="w-100px">Rechnung</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Thead-->
                                                <!--begin::Tbody-->
                                                <tbody class="fs-6 fw-bold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">#INV-584521</a>
                                                        </td>
                                                        <td class="text-success">380,00€</td>
                                                        <td>
                                                            <span class="badge badge-light-danger">Überfällig</span>
                                                        </td>
                                                        <td>01.01.2019</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
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
                        <!--end::Card-->
                        <!--begin::Payment method-->
                        <div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">{{ trans('message.payment methodes') }}</h2>
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-light-primary me-5" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_new_card">{{ trans('message.Add methodes') }}</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class=" text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="text-start min-w-25px">{{ trans('message.id') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Card Name') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-150px">{{ trans('message.Card Number') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Expiry Month') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Expiry Year') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.CVV') }} </th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Option') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($card_details as $card_detail)
                                            <tr>
                                                <!--begin::Shipment ID-->
                                                <td class="text-start min-w-25px">{{ $card_detail->card_id }}</td>
                                                <!--end::Shipment ID-->
                                                <!--begin::Transport-->
                                                <td class="text-center pe-3 min-w-50px">{{ $card_detail->card_name }}
                                                    @if ($card_detail->type == 'default')
                                                        <span class="badge badge-success"> Default</span>
                                                    @endif
                                                </td>


                                                 @php
                                                    $card_number = Crypt::decryptString($card_detail->card_number);
                                                    $card_cvv = Crypt::decryptString($card_detail->cvv);
                                                @endphp
                                                <!--end::Transport-->
                                                <!--begin::Type-->
                                                <td class="text-center pe-3 min-w-150px">***********{{substr($card_number, -4)}}</td>
                                                <!--end::Type-->
                                                <!--begin::Weight-->
                                                <td class="text-center pe-3 min-w-50px">{{ $card_detail->expiry_month }}</td>
                                                <!--end::Weight-->
                                                <!--begin::Size-->
                                                <td class="text-center pe-3 min-w-50px">{{ $card_detail->expiry_year }}</td>
                                                <!--end::Size-->
                                                <!--begin::Size-->
                                                <td class="text-center pe-3 min-w-50px">
                                                    {{-- {{ $card_detail->cvv }} --}}
                                                    ***
                                                </td>
                                                <!--end::Size-->
                                                <td class="text-center pe-3 min-w-50px">
                                                    <a data-bs-toggle="modal"
                                                        data-bs-target="#editrcard_detail{{ $card_detail->card_id }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    @if ($card_detail->type == null)
                                                        <a href="{{ Route('admin.card-detail.delete', $card_detail->card_id) }}"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    @endif

                                                </td>
                                                <!--end::Size-->

                                                <!--begin::Modal - New Card-->
                                                <div class="modal fade" id="editrcard_detail{{ $card_detail->card_id }}"
                                                    tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2>{{ trans('message.Edit card') }}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                    data-bs-dismiss="modal">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="6"
                                                                                y="17.3137" width="16"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-45 6 17.3137)"
                                                                                fill="currentColor" />
                                                                            <rect x="7.41422" y="6"
                                                                                width="16" height="2"
                                                                                rx="1"
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
                                                                <form method="post" class="form"
                                                                    action="{{ Route('admin.card-detail.update', [$card_detail->card_id, $card_detail->client_id]) }}">
                                                                    @csrf
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                            <span
                                                                                class="required">{{ trans('message.Cardholders') }}</span>
                                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Geben Sie den Namen auf der Karte an."></i>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <input type="text"
                                                                            class="form-control form-control-solid"
                                                                            placeholder="" name="card_name"
                                                                            value="{{ $card_detail->card_name }}"
                                                                            required />
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Card Number') }}</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input wrapper-->
                                                                        <div class="position-relative">
                                                                            <!--begin::Input-->
                                                                            <input type="text"
                                                                                class="form-control form-control-solid"
                                                                                placeholder="Enter card number"
                                                                                name="card_number"
                                                                                value="***********{{substr($card_number, -4)}} "
                                                                                required />
                                                                            <!--end::Input-->
                                                                            <!--begin::Card logos-->
                                                                            <div
                                                                                class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                                                <img src="{{ asset('assets/media/svg/card-logos/visa.svg') }}"
                                                                                    alt="" class="h-25px" />
                                                                                <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}"
                                                                                    alt="" class="h-25px" />
                                                                                <img src="{{ asset('assets/media/svg/card-logos/american-express.svg') }}"
                                                                                    alt="" class="h-25px" />
                                                                            </div>
                                                                            <!--end::Card logos-->
                                                                        </div>
                                                                        <!--end::Input wrapper-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="row mb-10">
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-8 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Expiry Month') }}</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Row-->
                                                                            <div class="row fv-row">
                                                                                <!--begin::Col-->
                                                                                <div class="col-6">
                                                                                    <select name="card_expiry_month"
                                                                                        class="form-select form-select-solid"
                                                                                        data-control="select2"
                                                                                        data-hide-search="true"
                                                                                        data-placeholder="Month" required>
                                                                                        <option></option>
                                                                                        <option value="1"
                                                                                            {{ $card_detail->expiry_month == 1 ? 'selected' : '' }}>
                                                                                            1</option>
                                                                                        <option value="2"
                                                                                            {{ $card_detail->expiry_month == 2 ? 'selected' : '' }}>
                                                                                            2</option>
                                                                                        <option value="3"
                                                                                            {{ $card_detail->expiry_month == 3 ? 'selected' : '' }}>
                                                                                            3</option>
                                                                                        <option value="4"
                                                                                            {{ $card_detail->expiry_month == 4 ? 'selected' : '' }}>
                                                                                            4</option>
                                                                                        <option value="5"
                                                                                            {{ $card_detail->expiry_month == 5 ? 'selected' : '' }}>
                                                                                            5</option>
                                                                                        <option value="6"
                                                                                            {{ $card_detail->expiry_month == 6 ? 'selected' : '' }}>
                                                                                            6</option>
                                                                                        <option value="7"
                                                                                            {{ $card_detail->expiry_month == 7 ? 'selected' : '' }}>
                                                                                            7</option>
                                                                                        <option value="8"
                                                                                            {{ $card_detail->expiry_month == 8 ? 'selected' : '' }}>
                                                                                            8</option>
                                                                                        <option value="9"
                                                                                            {{ $card_detail->expiry_month == 9 ? 'selected' : '' }}>
                                                                                            9</option>
                                                                                        <option value="10"
                                                                                            {{ $card_detail->expiry_month == 10 ? 'selected' : '' }}>
                                                                                            10</option>
                                                                                        <option value="11"
                                                                                            {{ $card_detail->expiry_month == 11 ? 'selected' : '' }}>
                                                                                            11</option>
                                                                                        <option
                                                                                            value="12"{{ $card_detail->expiry_month == 12 ? 'selected' : '' }}>
                                                                                            12</option>
                                                                                    </select>
                                                                                </div>
                                                                                <!--end::Col-->
                                                                                <!--begin::Col-->
                                                                                <div class="col-6">
                                                                                    <select name="card_expiry_year"
                                                                                        class="form-select form-select-solid"
                                                                                        data-control="select2"
                                                                                        data-hide-search="true"
                                                                                        data-placeholder="Year">
                                                                                        <option></option>
                                                                                        <option value="2021"
                                                                                            {{ $card_detail->expiry_year == '2021' ? 'selected' : '' }}>
                                                                                            2021</option>
                                                                                        <option value="2022"
                                                                                            {{ $card_detail->expiry_year == '2022' ? 'selected' : '' }}>
                                                                                            2022</option>
                                                                                        <option value="2023"
                                                                                            {{ $card_detail->expiry_year == '2023' ? 'selected' : '' }}>
                                                                                            2023</option>
                                                                                        <option value="2024"
                                                                                            {{ $card_detail->expiry_year == '2024' ? 'selected' : '' }}>
                                                                                            2024</option>
                                                                                        <option value="2025"
                                                                                            {{ $card_detail->expiry_year == '2025' ? 'selected' : '' }}>
                                                                                            2025</option>
                                                                                        <option value="2026"
                                                                                            {{ $card_detail->expiry_year == '2026' ? 'selected' : '' }}>
                                                                                            2026</option>
                                                                                        <option value="2027"
                                                                                            {{ $card_detail->expiry_year == '2027' ? 'selected' : '' }}>
                                                                                            2027</option>
                                                                                        <option value="2028"
                                                                                            {{ $card_detail->expiry_year == '2028' ? 'selected' : '' }}>
                                                                                            2028</option>
                                                                                        <option value="2029"
                                                                                            {{ $card_detail->expiry_year == '2029' ? 'selected' : '' }}>
                                                                                            2029</option>
                                                                                        <option value="2030"
                                                                                            {{ $card_detail->expiry_year == '2030' ? 'selected' : '' }}>
                                                                                            2030</option>
                                                                                        <option
                                                                                            value="2031"{{ $card_detail->expiry_year == '2031' ? 'selected' : '' }}>
                                                                                            2031</option>
                                                                                    </select>
                                                                                </div>
                                                                                <!--end::Col-->
                                                                            </div>
                                                                            <!--end::Row-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-4 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                                <span class="required">CVV</span>
                                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                                    data-bs-toggle="tooltip"
                                                                                    title="CVV Prüfcode eingeben..."></i>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input wrapper-->
                                                                            <div class="position-relative">
                                                                                <!--begin::Input-->
                                                                                <input type="password"
                                                                                    class="form-control form-control-solid"
                                                                                    minlength="3" maxlength="4"
                                                                                    placeholder="CVV" name="card_cvv"
                                                                                    value="***" />
                                                                                <!--end::Input-->
                                                                                <!--begin::CVV icon-->
                                                                                <div
                                                                                    class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                                                    <span class="svg-icon svg-icon-2hx">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path d="M22 7H2V11H22V7Z"
                                                                                                fill="currentColor" />
                                                                                            <path opacity="0.3"
                                                                                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </div>
                                                                                <!--end::CVV icon-->
                                                                            </div>
                                                                            <!--end::Input wrapper-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <div class="d-flex flex-stack">
                                                                        <!--begin::Switch-->
                                                                        <label
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" name="type"
                                                                                type="checkbox"
                                                                                {{ $card_detail->type == null ? '' : 'checked' }} />
                                                                            <span
                                                                                class="form-check-label fw-bold text-muted">{{ trans('message.set as default') }}</span>
                                                                        </label>

                                                                        <!--end::Switch-->
                                                                    </div>
                                                                    <div class="text-center pt-15">
                                                                        <button type="reset"
                                                                            id="kt_modal_new_card_cancel"
                                                                            class="btn btn-light me-3"
                                                                            data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                                                        <button type="submit" class="btn btn-primary">
                                                                            <span
                                                                                class="indicator-label">{{ trans('message.save') }}</span>
                                                                            <span
                                                                                class="indicator-progress">{{ trans('message.Please Wait') }}...
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
                                                <!--end::Modal - New Card-->

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>


                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Payment method-->
                        <!--begin::Shipment Detail-->


                        <!-- begin::Shipment Detail Tabs-->
                        {{-- <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title align-items-start flex-column mb-5">
                                    <h2>{{ trans('message.Shipment Detail') }}</h2>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">{{ trans('message.Currently') }}:
                                        {{ $client->shipping_quantity }}
                                        {{ trans('message.packages / monthly') }}</span>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <div class="btn-group">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button"
                                            id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
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
                                                    <a id="kt_referrals_2019_tab"
                                                        class="nav-link text-active-primary ms-3" data-bs-toggle="tab"
                                                        role="tab"
                                                        href="#this_week">{{ trans('message.This Week') }}</a>
                                                </li>
                                                <li class="dropdown-item" role="presentation">
                                                    <a id="kt_referrals_2018_tab"
                                                        class="nav-link text-active-primary ms-3" data-bs-toggle="tab"
                                                        role="tab"
                                                        href="#last_week">{{ trans('message.Last Week') }}</a>
                                                </li>
                                                <li class="dropdown-item" role="presentation">
                                                    <a id="kt_referrals_2017_tab"
                                                        class="nav-link text-active-primary ms-3" data-bs-toggle="tab"
                                                        role="tab"
                                                        href="#this_month">{{ trans('message.This Month') }}</a>
                                                </li>
                                                <li class="dropdown-item" role="presentation">
                                                    <a id="kt_referrals_2019_tab"
                                                        class="nav-link text-active-primary ms-3" data-bs-toggle="tab"
                                                        role="tab"
                                                        href="#last_month">{{ trans('message.Last Month') }}</a>
                                                </li>
                                                <li class="dropdown-item" role="presentation">
                                                    <a id="kt_referrals_2018_tab"
                                                        class="nav-link text-active-primary ms-3" data-bs-toggle="tab"
                                                        role="tab"
                                                        href="#this_year">{{ trans('message.This Year') }}</a>
                                                </li>
                                                <li class="dropdown-item" role="presentation">
                                                    <a id="kt_referrals_2017_tab"
                                                        class="nav-link text-active-primary ms-3" data-bs-toggle="tab"
                                                        role="tab"
                                                        href="#last_year">{{ trans('message.Last Year') }}</a>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="btn">
                                        <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_update_package_amount">{{ trans('message.Change pricing model') }}</a>
                                    </div>

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
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
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
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
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
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
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
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
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
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
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
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
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
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
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
                        </div> --}}

                        <!-- Referred Clients -->
                        {{-- <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span
                                        class="card-label fw-bolder text-dark">{{ trans('message.Referral Clients') }}</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <!--end::Actions-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-2">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="text-center pe-3 min-w-25px">{{ trans('message.id') }}</th>
                                            <th class="text-center pe-3 min-w-50px">{{ trans('message.Company Name') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">
                                                {{ trans('message.Registered At') }}
                                            </th>
                                            <th class="text-center pe-3 min-w-50px">
                                                {{ trans('message.Advertised By') }}
                                            </th>

                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($affiliated_at as $affiliated)
                                            <tr>
                                                <!--begin::Shipment ID-->
                                                <td class="text-center">{{ $affiliated->id }}</td>
                                                <!--end::Shipment ID-->
                                                <!--begin::Transport-->
                                                <td class="text-center">{{ $affiliated->company_name }}</td>
                                                <!--end::Transport-->
                                                <!--begin::Type-->
                                                <!--end::Type-->
                                                <!--begin::Weight-->
                                                <td class="text-center">
                                                    {{ date('d-m-Y', strtotime($affiliated->created_at)) }}</td>
                                                <!--end::Weight-->
                                                <!--begin::Size-->
                                                <td class="text-center">
                                                    {{ $affiliated->first_name . ' ' . $affiliated->last_name }}</td>
                                                <!--end::price-->

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div> --}}
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
                <!--begin::Modals-->
                <!--begin::Modal - Update Package Amount-->
                <div class="modal fade" id="kt_modal_update_package_amount" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="{{ Route('update.shipping_quantity', $client->id) }}"
                                method="GET">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_package_amount_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">{{ trans('message.Change package pricing model') }}</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2"
                                                    rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
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
                                        <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                            href="#kt_modal_package_amount_user_info" role="button"
                                            aria-expanded="false" aria-controls="kt_modal_package_amount_user_info">
                                            {{ trans('message.Details') }}
                                            <span class="ms-2 rotate-180">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
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
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="{{ trans('message.Your currently specified monthly package amount') }}"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" readonly class="form-control form-control-solid"
                                                    placeholder="" name="package_amount_old"
                                                    value="{{ $client->shipping_quantity }}" />
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
                                                    <option value="">{{ trans('message.Please choose') }}...
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
                <!--begin::Modal - Del Sub-->
                <div class="modal fade" id="kt_modal_del_sub" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form action="{{ Route('client.cancel.subscription', $client->id) }}" method="post">
                                @csrf
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">{{ trans('message.terminate the contract') }}</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2"
                                                    rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Label-->
                                    <h3 class="mb-7">
                                        <span class="fw-bolder required">{{ trans('message.Please choose') }}...</span>

                                    </h3>
                                    <!--end::Label-->
                                    <!--begin::Scroll-->
                                    <div class="scroll-y mh-300px me-n7 pe-7">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <!--end::Label-->
                                            <select id="termination" class="form-control form-control-solid"
                                                name="termination_option">
                                                <option value=""> Please Choose </option>
                                                <option value="pause">Pause</option>
                                                <option value="terminate">Terminate</option>
                                            </select>
                                        </div>
                                        <!--end::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <span id="pause_info"
                                                class="fs-6 text-gray-400 mb-3">{{ trans('message.Your uFill account and payment will be paused at the end of the contract periode. You can log into uFill and continue working all time.') }}</span>
                                            <span id="terminate_info"
                                                class="fs-6 text-gray-400 mb-3">{{ trans('message.Your uFill account and all data will be permanently deleted at the end of the contract period. No recovery is possible. You have to register if you want to use uFill again. There will be no more payments too.') }}</span>
                                            <!--end::Input-->
                                        </div>

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">{{ trans('message.your Reason') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid"
                                                placeholder="{{ trans('message.Help us to improve our service') }}..."
                                                name="reason" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <span
                                            class="fs-6 text-gray-400">{{ trans('message.Are you sure? Have you spoken to our customer support yet?') }}</span>
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_del_sub_cancel" class="btn btn-success me-3"
                                        data-bs-dismiss="modal">{{ trans('message.cancel') }}!</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_del_sub_submit" class="btn btn-light btn-danger">
                                        <span class="indicator-label">{{ trans('message.save') }}.</span>
                                        <span class="indicator-progress">{{ trans('message.Please wait') }}...
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
                <!--end::Modal - Del Sub-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_add_product12" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="{{ Route('client.update.variant', $client->id) }}"
                                method="POST">
                                @csrf
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">{{ trans('message.To edit') }}</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2"
                                                    rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label
                                            class="fs-6 fw-bold mb-2 required">{{ trans('message.Product Type') }}</label>
                                        {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Beachten Sie, dass durch eine Änderung der Zugriff auf die Funktionen und die Benutzeranmeldungen eingeschränkt werden kann."></i> --}}
                                        <!--end::Label-->
                                        {{-- <span class="d-block fs-6 text-gray-400 mb-2">"single" Account: 1 Benutzer / keine
                                        Teamfunktionen<br>"Team" Account: ∞ Benutzer / alle Teamfunktionen</span> --}}
                                        <!--begin::Input-->
                                        {{ csrf_field() }}
                                        <select id="product" name="account_type" aria-label="Bitte wählen..."
                                            data-control="select2" data-placeholder="Bitte wählen..."
                                            class="form-select form-select-solid"
                                            data-dropdown-parent="#kt_modal_add_product"
                                            onchange="getVarianPrice([this.value,'account_plan'])" required>
                                            <option></option>

                                            @foreach ($variants as $variant)
                                                <option value="{{ $variant->variant_id }}"
                                                    {{ $variant->variant_id == $client->account_type ? 'selected' : '' }}>
                                                    {{ $variant->name }} Account</option>
                                            @endforeach

                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    @php
                                        $client_products = App\Models\VariantPlan::where('variant_id', $client->account_type)->get();
                                    @endphp
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2 required">{{ trans('message.Duration') }}</label>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Beachten Sie, dass durch eine längere Laufzeit die Kosten sinken."></i>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="account_plan" id="account_plan" aria-label="Bitte wählen..."
                                            data-control="select2" data-placeholder="Select Price"
                                            class="form-select form-select-solid"
                                            data-dropdown-parent="#kt_modal_add_product">
                                            @foreach ($client_products as $client_product)
                                                <option
                                                    value="{{ $client_product->plan }}"{{ $client->account_plan == $client_product->plan ? 'selected' : '' }}>
                                                    {{ $client_product->plan }}
                                                    ({{ Helper::money_format('EUR', 'de_DE', $client_product->price) }}€)
                                                </option>
                                            @endforeach
                                            {{-- <option></option>
                                            <option id="month_price" value="month"
                                                {{ $client->account_plan == 'month' ? 'selected' : '' }}>Monthly (49,99€)
                                            </option>
                                            <option id="year_price" value="year"
                                                {{ $client->account_plan == 'year' ? 'selected' : '' }}>Yearly: (359,93€)
                                            </option> --}}
                                            {{-- <option value="24 month" {{$client->account_plan == '24 month' ? 'selected' : ""}}>24 Month: ~60% Rabatt (479,90€/einmalig)</option> --}}
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--begin::Input group-->
                                    {{-- <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label
                                            class="fs-6 fw-bold mb-2 required">{{ trans('message.Duration') }}</label>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Beachten Sie, dass durch eine längere Laufzeit die Kosten sinken."></i>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="account_plan" id="account_plan" aria-label="Bitte wählen..." data-control="select2"
                                            data-placeholder="Select Price" class="form-select form-select-solid"
                                            data-dropdown-parent="#kt_modal_add_product">
                                        <option value=""></option>

                                        </select>
                                        <!--end::Input-->
                                    </div> --}}
                                    <!--end::Input group-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" data-bs-dismiss="modal"
                                        class="btn btn-light me-3">{{ trans('message.cancel') }}</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">{{ trans('message.save') }}</span>
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
                <!--end::Modal - New Product-->
                <!--begin::Modal - Upgrade plan-->
                <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-lg">
                        <!--begin::Modal content-->
                        <div class="modal-content rounded">
                            <!--begin::Modal header-->
                            <div class="modal-header justify-content-end border-0 pb-0">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2"
                                                rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <form action="{{ Route('client.update.variant', $client->id) }}" method="post">
                                @csrf
                                <!--begin::Modal body-->
                                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <h1 class="mb-3">Upgrade a Plan</h1>
                                        {{-- <div class="text-muted fw-bold fs-5">If you need more info, please check
                                        <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.
                                    </div> --}}
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Plans-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Nav group-->
                                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                                            <a onclick="getAccountPlan('month')"
                                                class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                                data-kt-plan="month">Monthly</a>
                                            <a onclick="getAccountPlan('year')"
                                                class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                                data-kt-plan="annual">Annual</a>
                                        </div>

                                        <!--end::Nav group-->
                                        <input type="text" hidden value="month" id="account_plan_selected"
                                            name="account_plan_selected" />
                                        <!--begin::Row-->
                                        <div class="row mt-10 justify-content-center">
                                            <!--begin::Col-->
                                            <div class="col-lg-8 mb-10 mb-lg-0">
                                                <!--begin::Tabs-->
                                                <div class="nav flex-column">
                                                    <!--begin::Tab link-->
                                                    <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                        <!--end::Description-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Radio-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                                <input class="form-check-input" type="radio"
                                                                    name="account_type" checked="checked"
                                                                    value="prod_Li75wNdJaBLoHK" />
                                                            </div>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1">
                                                                <h2
                                                                    class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                                    Shipment
                                                                </h2>
                                                                {{-- <div class="fw-bold opacity-50">Best for startups</div> --}}
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Description-->
                                                        <!--begin::Price-->
                                                        <div class="ms-5">
                                                            {{-- <span class="mb-2">€</span> --}}
                                                            <span class="fs-3x fw-bolder" data-kt-plan-price-month="9,99€"
                                                                data-kt-plan-price-annual="95,88€">9,99€</span>
                                                            {{-- <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period"></span></span> --}}
                                                        </div>
                                                        <!--end::Price-->
                                                    </div>
                                                    <!--end::Tab link-->
                                                    <!--begin::Tab link-->
                                                    <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                                        <!--end::Description-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Radio-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                                <input class="form-check-input" type="radio"
                                                                    name="account_type" value="prod_Li6z4ugvCzTVZ9" />
                                                            </div>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1">
                                                                <h2
                                                                    class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                                    Single
                                                                </h2>
                                                                {{-- <div class="fw-bold opacity-50">Best for 100+ team size</div> --}}
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Description-->
                                                        <!--begin::Price-->
                                                        <div class="ms-5">
                                                            {{-- <span class="mb-2">$</span> --}}
                                                            <span class="fs-3x fw-bolder"
                                                                data-kt-plan-price-month="44,99€"
                                                                data-kt-plan-price-annual="359,88€">44,99€</span>
                                                            {{-- <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span> --}}
                                                        </div>
                                                        <!--end::Price-->
                                                    </div>
                                                    <!--end::Tab link-->

                                                    <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                                        <!--end::Description-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Radio-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                                <input class="form-check-input" type="radio"
                                                                    name="account_type" value="prod_Li775knelqM7PZ" />
                                                            </div>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1">
                                                                <h2
                                                                    class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                                    Team
                                                                </h2>
                                                                {{-- <div class="fw-bold opacity-50">Best for 100+ team size</div> --}}
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Description-->
                                                        <!--begin::Price-->
                                                        <div class="ms-5">
                                                            {{-- <span class="mb-2">$</span> --}}
                                                            <span class="fs-3x fw-bolder"
                                                                data-kt-plan-price-month="49,99€"
                                                                data-kt-plan-price-annual="419,88€">49,99€</span>
                                                            {{-- <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span></span> --}}
                                                        </div>
                                                        <!--end::Price-->
                                                    </div>
                                                    <!--end::Tab link-->
                                                </div>
                                                <!--end::Tabs-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->

                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Plans-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-center flex-row-fluid pt-12">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                        <button type="submit"
                                            class="btn btn-primary">{{ trans('message.save') }}</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Modal body-->

                            </form>

                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Upgrade plan-->
                <!--begin::Modal - New Card-->
                <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>{{ trans('message.Add new card') }}</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2"
                                                rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                                <form method="post" class="form"
                                    action="{{ Route('admin.card-detail.store', $client->id) }}">
                                    @csrf
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{ trans('message.Cardholders') }}</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Geben Sie den Namen auf der Karte an."></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="card_name" required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label
                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Card Number') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter card number" name="card_number" required />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="{{ asset('assets/media/svg/card-logos/visa.svg') }}"
                                                    alt="" class="h-25px" />
                                                <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}"
                                                    alt="" class="h-25px" />
                                                <img src="{{ asset('assets/media/svg/card-logos/american-express.svg') }}"
                                                    alt="" class="h-25px" />
                                            </div>
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Label-->
                                            <label
                                                class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Expiry Month') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month" class="form-select form-select-solid"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Month" required>
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year" class="form-select form-select-solid"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Year">
                                                        <option></option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="CVV Prüfcode eingeben..."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="password" class="form-control form-control-solid"
                                                    minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                    <span class="svg-icon svg-icon-2hx">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                                                            <path opacity="0.3"
                                                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        {{-- <div class="me-5">
                                            <label class="fs-6 fw-bold form-label">Soll die Karte für spätere Zahlungen
                                                gespeichert werden?</label>
                                            <div class="fs-7 fw-bold text-muted">Eine genaue Kostenübersicht finden Sie
                                                oberhalb.</div>
                                        </div> --}}
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" name="type" type="checkbox" />
                                            <span
                                                class="form-check-label fw-bold text-muted">{{ trans('message.set as default') }}</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                        <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label">{{ trans('message.save') }}</span>
                                            <span class="indicator-progress">{{ trans('message.Please Wait') }}...
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
                <!--end::Modal - New Card-->
                <!--begin::Modal - Edit Billing Info -->
                <div class="modal fade" id="kt_modal_edit_billig_info" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" method="post"
                                action="{{ Route('admin.client.update', $client->id) }}" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">{{ trans('message.Edit Billing Info') }}</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2"
                                                    rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="pb-10 pb-lg-12">
                                            <!--begin::Title-->
                                            <h2 class="fw-bolder text-dark">Your personal information</h2>
                                            <!--end::Title-->
                                            <!--begin::Notice-->
                                            <div class="text-muted fw-bold fs-6">Need help or have a question? Our team
                                                will be happy to help you.
                                                <a href="{{ Route('help.contact') }}" class="link-primary fw-bolder"
                                                    target="_blank">Contact</a>.
                                            </div>
                                            <!--end::Notice-->
                                        </div>
                                        <!--end::Heading-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span>Company Logo</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Erlaubte Formate: png, jpg, jpeg."
                                                    aria-label="Erlaubte Formate: png, jpg, jpeg."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Image input wrapper-->
                                            <div class="mt-1">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                                    style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                    <!--begin::Preview existing avatar-->
                                                    @if (isset($client->profile_picture))
                                                        <div class="image-input-wrapper w-125px h-125px"
                                                            style="background-image: url('{{ URL::asset($client->profile_picture) }}')">
                                                        </div>
                                                    @else
                                                        <div class="image-input-wrapper w-125px h-125px"
                                                            style="background-image: url('{{ asset('assets/media/svg/avatars/blank.svg') }}')">
                                                        </div>
                                                    @endif
                                                    {{-- <div class="image-input-wrapper w-125px h-125px"
                                                        style="background-image: url({{ URL::asset($client->profile_picture) }})">
                                                    </div> --}}
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Edit-->
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Profilbild wechseln">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="company_logo"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                        <input type="hidden" name="previous_image"
                                                            value="{{ $client->profile_picture }}" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Edit-->
                                                    <!--begin::Cancel-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        title="Wechsel abbrechen">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        title="Profilbild entfernen">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                            </div>
                                            <!--end::Image input wrapper-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label required">Company name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input name="company_name"
                                                class="form-control form-control-lg form-control-solid"
                                                value="{{ $client->company_name }}" placeholder="Mustermann GmbH"
                                                required />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-10">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">First Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="first_name"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->first_name }}" placeholder="Max" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">Last Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="last_name"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->last_name }}" placeholder="Mustermann"
                                                        required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-10">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-8">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">Street</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="street"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->street }}" placeholder="Musterweg"
                                                        required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">House Numnber</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="house_number"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->house_number }}" placeholder="1a"
                                                        required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-10">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">PLZ</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" name="plz"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->plz }}" placeholder="49123" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-8">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">State</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="state"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->state }}" placeholder="Musterhausen"
                                                        required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2 ">
                                                <span>Country</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="Select..." data-control="select2"
                                                data-placeholder="Select..."
                                                data-dropdown-parent="#kt_modal_edit_billig_info"
                                                class="form-select form-select-solid">
                                                <option value="">Bitte wählen...</option>
                                                <option value="AF" {{ $client->country == 'AF' ? 'selected' : '' }}>
                                                    Afghanistan
                                                </option>
                                                <option value="AX" {{ $client->country == 'AX' ? 'selected' : '' }}>
                                                    Aland Islands
                                                </option>
                                                <option value="AL" {{ $client->country == 'AL' ? 'selected' : '' }}>
                                                    Albania</option>
                                                <option value="DZ" {{ $client->country == 'DZ' ? 'selected' : '' }}>
                                                    Algeria</option>
                                                <option value="AS" {{ $client->country == 'AS' ? 'selected' : '' }}>
                                                    American Samoa
                                                </option>
                                                <option value="AD" {{ $client->country == 'AD' ? 'selected' : '' }}>
                                                    Andorra</option>
                                                <option value="AO" {{ $client->country == 'AO' ? 'selected' : '' }}>
                                                    Angola</option>
                                                <option value="AI" {{ $client->country == 'AI' ? 'selected' : '' }}>
                                                    Anguilla</option>
                                                <option value="AG" {{ $client->country == 'AG' ? 'selected' : '' }}>
                                                    Antigua and Barbuda
                                                </option>
                                                <option value="AR" {{ $client->country == 'AR' ? 'selected' : '' }}>
                                                    Argentina</option>
                                                <option value="AM" {{ $client->country == 'AM' ? 'selected' : '' }}>
                                                    Armenia</option>
                                                <option value="AW" {{ $client->country == 'AW' ? 'selected' : '' }}>
                                                    Aruba</option>
                                                <option value="AU" {{ $client->country == 'AU' ? 'selected' : '' }}>
                                                    Australia</option>
                                                <option value="AT" {{ $client->country == 'AT' ? 'selected' : '' }}>
                                                    Austria</option>
                                                <option value="AZ" {{ $client->country == 'AZ' ? 'selected' : '' }}>
                                                    Azerbaijan</option>
                                                <option value="BS" {{ $client->country == 'BS' ? 'selected' : '' }}>
                                                    Bahamas</option>
                                                <option value="BH" {{ $client->country == 'BH' ? 'selected' : '' }}>
                                                    Bahrain</option>
                                                <option value="BD" {{ $client->country == 'BD' ? 'selected' : '' }}>
                                                    Bangladesh</option>
                                                <option value="BB" {{ $client->country == 'BB' ? 'selected' : '' }}>
                                                    Barbados</option>
                                                <option value="BY" {{ $client->country == 'BY' ? 'selected' : '' }}>
                                                    Belarus</option>
                                                <option value="BE" {{ $client->country == 'BE' ? 'selected' : '' }}>
                                                    Belgium</option>
                                                <option value="BZ" {{ $client->country == 'BZ' ? 'selected' : '' }}>
                                                    Belize</option>
                                                <option value="BJ" {{ $client->country == 'BJ' ? 'selected' : '' }}>
                                                    Benin</option>
                                                <option value="BM" {{ $client->country == 'BM' ? 'selected' : '' }}>
                                                    Bermuda</option>
                                                <option value="BT" {{ $client->country == 'BT' ? 'selected' : '' }}>
                                                    Bhutan</option>
                                                <option value="BO" {{ $client->country == 'BO' ? 'selected' : '' }}>
                                                    Bolivia,
                                                    Plurinational State of</option>
                                                <option value="BQ" {{ $client->country == 'BQ' ? 'selected' : '' }}>
                                                    Bonaire, Sint
                                                    Eustatius and Saba</option>
                                                <option value="BA" {{ $client->country == 'BA' ? 'selected' : '' }}>
                                                    Bosnia and
                                                    Herzegovina</option>
                                                <option value="BW" {{ $client->country == 'BW' ? 'selected' : '' }}>
                                                    Botswana</option>
                                                <option value="BR" {{ $client->country == 'BR' ? 'selected' : '' }}>
                                                    Brazil</option>
                                                <option value="IO" {{ $client->country == 'IO' ? 'selected' : '' }}>
                                                    British Indian
                                                    Ocean Territory</option>
                                                <option value="BN" {{ $client->country == 'BN' ? 'selected' : '' }}>
                                                    Brunei Darussalam
                                                </option>
                                                <option value="BG" {{ $client->country == 'BG' ? 'selected' : '' }}>
                                                    Bulgaria</option>
                                                <option value="BF" {{ $client->country == 'BF' ? 'selected' : '' }}>
                                                    Burkina Faso
                                                </option>
                                                <option value="BI" {{ $client->country == 'BI' ? 'selected' : '' }}>
                                                    Burundi</option>
                                                <option value="KH" {{ $client->country == 'KH' ? 'selected' : '' }}>
                                                    Cambodia</option>
                                                <option value="CM" {{ $client->country == 'CM' ? 'selected' : '' }}>
                                                    Cameroon</option>
                                                <option value="CA" {{ $client->country == 'CA' ? 'selected' : '' }}>
                                                    Canada</option>
                                                <option value="CV" {{ $client->country == 'CV' ? 'selected' : '' }}>
                                                    Cape Verde</option>
                                                <option value="KY" {{ $client->country == 'KY' ? 'selected' : '' }}>
                                                    Cayman Islands
                                                </option>
                                                <option value="CF" {{ $client->country == 'CF' ? 'selected' : '' }}>
                                                    Central African
                                                    Republic</option>
                                                <option value="TD" {{ $client->country == 'TD' ? 'selected' : '' }}>
                                                    Chad</option>
                                                <option value="CL" {{ $client->country == 'CL' ? 'selected' : '' }}>
                                                    Chile</option>
                                                <option value="CN" {{ $client->country == 'CN' ? 'selected' : '' }}>
                                                    China</option>
                                                <option value="CX" {{ $client->country == 'CX' ? 'selected' : '' }}>
                                                    Christmas Island
                                                </option>
                                                <option value="CC" {{ $client->country == 'CC' ? 'selected' : '' }}>
                                                    Cocos (Keeling)
                                                    Islands</option>
                                                <option value="CO" {{ $client->country == 'CO' ? 'selected' : '' }}>
                                                    Colombia</option>
                                                <option value="KM" {{ $client->country == 'KM' ? 'selected' : '' }}>
                                                    Comoros</option>
                                                <option value="CK" {{ $client->country == 'CK' ? 'selected' : '' }}>
                                                    Cook Islands
                                                </option>
                                                <option value="CR" {{ $client->country == 'CR' ? 'selected' : '' }}>
                                                    Costa Rica</option>
                                                <option value="CI" {{ $client->country == 'CI' ? 'selected' : '' }}>
                                                    Côte d'Ivoire
                                                </option>
                                                <option value="HR" {{ $client->country == 'HR' ? 'selected' : '' }}>
                                                    Croatia</option>
                                                <option value="CU" {{ $client->country == 'CU' ? 'selected' : '' }}>
                                                    Cuba</option>
                                                <option value="CW" {{ $client->country == 'CW' ? 'selected' : '' }}>
                                                    Curaçao</option>
                                                <option value="CZ" {{ $client->country == 'CZ' ? 'selected' : '' }}>
                                                    Czech Republic
                                                </option>
                                                <option value="DK" {{ $client->country == 'DK' ? 'selected' : '' }}>
                                                    Denmark</option>
                                                <option value="DJ" {{ $client->country == 'DJ' ? 'selected' : '' }}>
                                                    Djibouti</option>
                                                <option value="DM" {{ $client->country == 'DM' ? 'selected' : '' }}>
                                                    Dominica</option>
                                                <option value="DO" {{ $client->country == 'DO' ? 'selected' : '' }}>
                                                    Dominican Republic
                                                </option>
                                                <option value="EC" {{ $client->country == 'EC' ? 'selected' : '' }}>
                                                    Ecuador</option>
                                                <option value="EG" {{ $client->country == 'EG' ? 'selected' : '' }}>
                                                    Egypt</option>
                                                <option value="SV" {{ $client->country == 'SV' ? 'selected' : '' }}>
                                                    El Salvador
                                                </option>
                                                <option value="GQ" {{ $client->country == 'GQ' ? 'selected' : '' }}>
                                                    Equatorial Guinea
                                                </option>
                                                <option value="ER" {{ $client->country == 'ER' ? 'selected' : '' }}>
                                                    Eritrea</option>
                                                <option value="EE" {{ $client->country == 'EE' ? 'selected' : '' }}>
                                                    Estonia</option>
                                                <option value="ET" {{ $client->country == 'ET' ? 'selected' : '' }}>
                                                    Ethiopia</option>
                                                <option value="FK" {{ $client->country == 'FK' ? 'selected' : '' }}>
                                                    Falkland Islands
                                                    (Malvinas)</option>
                                                <option value="FJ" {{ $client->country == 'FJ' ? 'selected' : '' }}>
                                                    Fiji</option>
                                                <option value="FI" {{ $client->country == 'FI' ? 'selected' : '' }}>
                                                    Finland</option>
                                                <option value="FR" {{ $client->country == 'FR' ? 'selected' : '' }}>
                                                    France</option>
                                                <option value="PF" {{ $client->country == 'PF' ? 'selected' : '' }}>
                                                    French Polynesia
                                                </option>
                                                <option value="GA" {{ $client->country == 'GA' ? 'selected' : '' }}>
                                                    Gabon</option>
                                                <option value="GM" {{ $client->country == 'GM' ? 'selected' : '' }}>
                                                    Gambia</option>
                                                <option value="GE" {{ $client->country == 'GE' ? 'selected' : '' }}>
                                                    Georgia</option>
                                                <option value="DE" {{ $client->country == 'DE' ? 'selected' : '' }}>
                                                    Germany</option>
                                                <option value="GH" {{ $client->country == 'GH' ? 'selected' : '' }}>
                                                    Ghana</option>
                                                <option value="GI" {{ $client->country == 'GI' ? 'selected' : '' }}>
                                                    Gibraltar</option>
                                                <option value="GR" {{ $client->country == 'GR' ? 'selected' : '' }}>
                                                    Greece</option>
                                                <option value="GL" {{ $client->country == 'GL' ? 'selected' : '' }}>
                                                    Greenland</option>
                                                <option value="GD" {{ $client->country == 'GD' ? 'selected' : '' }}>
                                                    Grenada</option>
                                                <option value="GU" {{ $client->country == 'GU' ? 'selected' : '' }}>
                                                    Guam</option>
                                                <option value="GT" {{ $client->country == 'GT' ? 'selected' : '' }}>
                                                    Guatemala</option>
                                                <option value="GG" {{ $client->country == 'GG' ? 'selected' : '' }}>
                                                    Guernsey</option>
                                                <option value="GN" {{ $client->country == 'GN' ? 'selected' : '' }}>
                                                    Guinea</option>
                                                <option value="GW" {{ $client->country == 'GW' ? 'selected' : '' }}>
                                                    Guinea-Bissau
                                                </option>
                                                <option value="HT" {{ $client->country == 'HT' ? 'selected' : '' }}>
                                                    Haiti</option>
                                                <option value="VA" {{ $client->country == 'VA' ? 'selected' : '' }}>
                                                    Holy See (Vatican
                                                    City State)</option>
                                                <option value="HN" {{ $client->country == 'HN' ? 'selected' : '' }}>
                                                    Honduras</option>
                                                <option value="HK" {{ $client->country == 'HK' ? 'selected' : '' }}>
                                                    Hong Kong</option>
                                                <option value="HU" {{ $client->country == 'HU' ? 'selected' : '' }}>
                                                    Hungary</option>
                                                <option value="IS" {{ $client->country == 'IS' ? 'selected' : '' }}>
                                                    Iceland</option>
                                                <option value="IN" {{ $client->country == 'IN' ? 'selected' : '' }}>
                                                    India</option>
                                                <option value="ID" {{ $client->country == 'ID' ? 'selected' : '' }}>
                                                    Indonesia</option>
                                                <option value="IR" {{ $client->country == 'IR' ? 'selected' : '' }}>
                                                    Iran, Islamic
                                                    Republic of</option>
                                                <option value="IQ" {{ $client->country == 'IQ' ? 'selected' : '' }}>
                                                    Iraq</option>
                                                <option value="IE" {{ $client->country == 'IE' ? 'selected' : '' }}>
                                                    Ireland</option>
                                                <option value="IM" {{ $client->country == 'IM' ? 'selected' : '' }}>
                                                    Isle of Man
                                                </option>
                                                <option value="IL" {{ $client->country == 'IL' ? 'selected' : '' }}>
                                                    Israel</option>
                                                <option value="IT" {{ $client->country == 'IT' ? 'selected' : '' }}>
                                                    Italy</option>
                                                <option value="JM" {{ $client->country == 'JM' ? 'selected' : '' }}>
                                                    Jamaica</option>
                                                <option value="JP" {{ $client->country == 'JP' ? 'selected' : '' }}>
                                                    Japan</option>
                                                <option value="JE" {{ $client->country == 'JE' ? 'selected' : '' }}>
                                                    Jersey</option>
                                                <option value="JO" {{ $client->country == 'JO' ? 'selected' : '' }}>
                                                    Jordan</option>
                                                <option value="KZ" {{ $client->country == 'KZ' ? 'selected' : '' }}>
                                                    Kazakhstan</option>
                                                <option value="KE" {{ $client->country == 'KE' ? 'selected' : '' }}>
                                                    Kenya</option>
                                                <option value="KI" {{ $client->country == 'KI' ? 'selected' : '' }}>
                                                    Kiribati</option>
                                                <option value="KP" {{ $client->country == 'KP' ? 'selected' : '' }}>
                                                    Korea, Democratic
                                                    People's Republic of</option>
                                                <option value="KW" {{ $client->country == 'KW' ? 'selected' : '' }}>
                                                    Kuwait</option>
                                                <option value="KG" {{ $client->country == 'KG' ? 'selected' : '' }}>
                                                    Kyrgyzstan</option>
                                                <option value="LA" {{ $client->country == 'LA' ? 'selected' : '' }}>
                                                    Lao People's
                                                    Democratic Republic</option>
                                                <option value="LV" {{ $client->country == 'LV' ? 'selected' : '' }}>
                                                    Latvia</option>
                                                <option value="LB" {{ $client->country == 'LB' ? 'selected' : '' }}>
                                                    Lebanon</option>
                                                <option value="LS" {{ $client->country == 'LS' ? 'selected' : '' }}>
                                                    Lesotho</option>
                                                <option value="LR" {{ $client->country == 'LR' ? 'selected' : '' }}>
                                                    Liberia</option>
                                                <option value="LY" {{ $client->country == 'LY' ? 'selected' : '' }}>
                                                    Libya</option>
                                                <option value="LI" {{ $client->country == 'LI' ? 'selected' : '' }}>
                                                    Liechtenstein
                                                </option>
                                                <option value="LT" {{ $client->country == 'LT' ? 'selected' : '' }}>
                                                    Lithuania</option>
                                                <option value="LU" {{ $client->country == 'LU' ? 'selected' : '' }}>
                                                    Luxembourg</option>
                                                <option value="MO" {{ $client->country == 'MO' ? 'selected' : '' }}>
                                                    Macao</option>
                                                <option value="MG" {{ $client->country == 'MG' ? 'selected' : '' }}>
                                                    Madagascar</option>
                                                <option value="MW" {{ $client->country == 'MW' ? 'selected' : '' }}>
                                                    Malawi</option>
                                                <option value="MY" {{ $client->country == 'MY' ? 'selected' : '' }}>
                                                    Malaysia</option>
                                                <option value="MV" {{ $client->country == 'MV' ? 'selected' : '' }}>
                                                    Maldives</option>
                                                <option value="ML" {{ $client->country == 'ML' ? 'selected' : '' }}>
                                                    Mali</option>
                                                <option value="MT" {{ $client->country == 'MT' ? 'selected' : '' }}>
                                                    Malta</option>
                                                <option value="MH" {{ $client->country == 'MH' ? 'selected' : '' }}>
                                                    Marshall Islands
                                                </option>
                                                <option value="MQ" {{ $client->country == 'MQ' ? 'selected' : '' }}>
                                                    Martinique</option>
                                                <option value="MR" {{ $client->country == 'MR' ? 'selected' : '' }}>
                                                    Mauritania</option>
                                                <option value="MU" {{ $client->country == 'MU' ? 'selected' : '' }}>
                                                    Mauritius</option>
                                                <option value="MX" {{ $client->country == 'MX' ? 'selected' : '' }}>
                                                    Mexico</option>
                                                <option value="FM" {{ $client->country == 'FM' ? 'selected' : '' }}>
                                                    Micronesia,
                                                    Federated States of</option>
                                                <option value="MD" {{ $client->country == 'MD' ? 'selected' : '' }}>
                                                    Moldova, Republic
                                                    of</option>
                                                <option value="MC" {{ $client->country == 'MC' ? 'selected' : '' }}>
                                                    Monaco</option>
                                                <option value="MN" {{ $client->country == 'MN' ? 'selected' : '' }}>
                                                    Mongolia</option>
                                                <option value="ME" {{ $client->country == 'ME' ? 'selected' : '' }}>
                                                    Montenegro</option>
                                                <option value="MS" {{ $client->country == 'MS' ? 'selected' : '' }}>
                                                    Montserrat</option>
                                                <option value="MA" {{ $client->country == 'MA' ? 'selected' : '' }}>
                                                    Morocco</option>
                                                <option value="MZ" {{ $client->country == 'MZ' ? 'selected' : '' }}>
                                                    Mozambique</option>
                                                <option value="MM" {{ $client->country == 'MM' ? 'selected' : '' }}>
                                                    Myanmar</option>
                                                <option value="NA" {{ $client->country == 'NA' ? 'selected' : '' }}>
                                                    Namibia</option>
                                                <option value="NR" {{ $client->country == 'NR' ? 'selected' : '' }}>
                                                    Nauru</option>
                                                <option value="NP" {{ $client->country == 'NP' ? 'selected' : '' }}>
                                                    Nepal</option>
                                                <option value="NL" {{ $client->country == 'NL' ? 'selected' : '' }}>
                                                    Netherlands
                                                </option>
                                                <option value="NZ" {{ $client->country == 'NZ' ? 'selected' : '' }}>
                                                    New Zealand
                                                </option>
                                                <option value="NI" {{ $client->country == 'NI' ? 'selected' : '' }}>
                                                    Nicaragua</option>
                                                <option value="NE" {{ $client->country == 'NE' ? 'selected' : '' }}>
                                                    Niger</option>
                                                <option value="NG" {{ $client->country == 'NG' ? 'selected' : '' }}>
                                                    Nigeria</option>
                                                <option value="NU" {{ $client->country == 'NU' ? 'selected' : '' }}>
                                                    Niue</option>
                                                <option value="NF" {{ $client->country == 'NF' ? 'selected' : '' }}>
                                                    Norfolk Island
                                                </option>
                                                <option value="MP" {{ $client->country == 'MP' ? 'selected' : '' }}>
                                                    Northern Mariana
                                                    Islands</option>
                                                <option value="NO" {{ $client->country == 'NO' ? 'selected' : '' }}>
                                                    Norway</option>
                                                <option value="OM" {{ $client->country == 'OM' ? 'selected' : '' }}>
                                                    Oman</option>
                                                <option value="PK" {{ $client->country == 'PK' ? 'selected' : '' }}>
                                                    Pakistan</option>
                                                <option value="PW" {{ $client->country == 'PW' ? 'selected' : '' }}>
                                                    Palau</option>
                                                <option value="PS" {{ $client->country == 'PS' ? 'selected' : '' }}>
                                                    Palestinian
                                                    Territory, Occupied</option>
                                                <option value="PA" {{ $client->country == 'PA' ? 'selected' : '' }}>
                                                    Panama</option>
                                                <option value="PG" {{ $client->country == 'PG' ? 'selected' : '' }}>
                                                    Papua New Guinea
                                                </option>
                                                <option value="PY" {{ $client->country == 'PY' ? 'selected' : '' }}>
                                                    Paraguay</option>
                                                <option value="PE" {{ $client->country == 'PE' ? 'selected' : '' }}>
                                                    Peru</option>
                                                <option value="PH" {{ $client->country == 'PH' ? 'selected' : '' }}>
                                                    Philippines
                                                </option>
                                                <option value="PL" {{ $client->country == 'PL' ? 'selected' : '' }}>
                                                    Poland</option>
                                                <option value="PT" {{ $client->country == 'PT' ? 'selected' : '' }}>
                                                    Portugal</option>
                                                <option value="PR" {{ $client->country == 'PR' ? 'selected' : '' }}>
                                                    Puerto Rico
                                                </option>
                                                <option value="QA" {{ $client->country == 'QA' ? 'selected' : '' }}>
                                                    Qatar</option>
                                                <option value="RO" {{ $client->country == 'RO' ? 'selected' : '' }}>
                                                    Romania</option>
                                                <option value="RU" {{ $client->country == 'RU' ? 'selected' : '' }}>
                                                    Russian Federation
                                                </option>
                                                <option value="RW" {{ $client->country == 'RW' ? 'selected' : '' }}>
                                                    Rwanda</option>
                                                <option value="BL" {{ $client->country == 'BL' ? 'selected' : '' }}>
                                                    Saint Barthélemy
                                                </option>
                                                <option value="KN" {{ $client->country == 'KN' ? 'selected' : '' }}>
                                                    Saint Kitts and
                                                    Nevis</option>
                                                <option value="LC" {{ $client->country == 'LC' ? 'selected' : '' }}>
                                                    Saint Lucia
                                                </option>
                                                <option value="MF" {{ $client->country == 'MF' ? 'selected' : '' }}>
                                                    Saint Martin
                                                    (French part)</option>
                                                <option value="VC" {{ $client->country == 'VC' ? 'selected' : '' }}>
                                                    Saint Vincent and
                                                    the Grenadines</option>
                                                <option value="WS" {{ $client->country == 'WS' ? 'selected' : '' }}>
                                                    Samoa</option>
                                                <option value="SM" {{ $client->country == 'SM' ? 'selected' : '' }}>
                                                    San Marino</option>
                                                <option value="ST" {{ $client->country == 'ST' ? 'selected' : '' }}>
                                                    Sao Tome and
                                                    Principe</option>
                                                <option value="SA" {{ $client->country == 'SA' ? 'selected' : '' }}>
                                                    Saudi Arabia
                                                </option>
                                                <option value="SN" {{ $client->country == 'SN' ? 'selected' : '' }}>
                                                    Senegal</option>
                                                <option value="RS" {{ $client->country == 'RS' ? 'selected' : '' }}>
                                                    Serbia</option>
                                                <option value="SC" {{ $client->country == 'SC' ? 'selected' : '' }}>
                                                    Seychelles</option>
                                                <option value="SL" {{ $client->country == 'SL' ? 'selected' : '' }}>
                                                    Sierra Leone
                                                </option>
                                                <option value="SG" {{ $client->country == 'SG' ? 'selected' : '' }}>
                                                    Singapore</option>
                                                <option value="SX" {{ $client->country == 'SX' ? 'selected' : '' }}>
                                                    Sint Maarten (Dutch
                                                    part)</option>
                                                <option value="SK" {{ $client->country == 'SK' ? 'selected' : '' }}>
                                                    Slovakia</option>
                                                <option value="SI" {{ $client->country == 'SI' ? 'selected' : '' }}>
                                                    Slovenia</option>
                                                <option value="SB" {{ $client->country == 'SB' ? 'selected' : '' }}>
                                                    Solomon Islands
                                                </option>
                                                <option value="SO" {{ $client->country == 'SO' ? 'selected' : '' }}>
                                                    Somalia</option>
                                                <option value="ZA" {{ $client->country == 'ZA' ? 'selected' : '' }}>
                                                    South Africa
                                                </option>
                                                <option value="KR" {{ $client->country == 'KR' ? 'selected' : '' }}>
                                                    South Korea
                                                </option>
                                                <option value="SS" {{ $client->country == 'SS' ? 'selected' : '' }}>
                                                    South Sudan
                                                </option>
                                                <option value="ES" {{ $client->country == 'ES' ? 'selected' : '' }}>
                                                    Spain</option>
                                                <option value="LK" {{ $client->country == 'LK' ? 'selected' : '' }}>
                                                    Sri Lanka</option>
                                                <option value="SD" {{ $client->country == 'SD' ? 'selected' : '' }}>
                                                    Sudan</option>
                                                <option value="SR" {{ $client->country == 'SR' ? 'selected' : '' }}>
                                                    Suriname</option>
                                                <option value="SZ" {{ $client->country == 'SZ' ? 'selected' : '' }}>
                                                    Swaziland</option>
                                                <option value="SE" {{ $client->country == 'SE' ? 'selected' : '' }}>
                                                    Sweden</option>
                                                <option value="CH" {{ $client->country == 'CH' ? 'selected' : '' }}>
                                                    Switzerland
                                                </option>
                                                <option value="SY" {{ $client->country == 'SY' ? 'selected' : '' }}>
                                                    Syrian Arab
                                                    Republic</option>
                                                <option value="TW" {{ $client->country == 'TW' ? 'selected' : '' }}>
                                                    Taiwan, Province of
                                                    China</option>
                                                <option value="TJ" {{ $client->country == 'TJ' ? 'selected' : '' }}>
                                                    Tajikistan</option>
                                                <option value="TZ" {{ $client->country == 'TZ' ? 'selected' : '' }}>
                                                    Tanzania, United
                                                    Republic of</option>
                                                <option value="TH" {{ $client->country == 'TH' ? 'selected' : '' }}>
                                                    Thailand</option>
                                                <option value="TG" {{ $client->country == 'TG' ? 'selected' : '' }}>
                                                    Togo</option>
                                                <option value="TK" {{ $client->country == 'TK' ? 'selected' : '' }}>
                                                    Tokelau</option>
                                                <option value="TO" {{ $client->country == 'TQ' ? 'selected' : '' }}>
                                                    Tonga</option>
                                                <option value="TT" {{ $client->country == 'TT' ? 'selected' : '' }}>
                                                    Trinidad and Tobago
                                                </option>
                                                <option value="TN" {{ $client->country == 'TN' ? 'selected' : '' }}>
                                                    Tunisia</option>
                                                <option value="TR" {{ $client->country == 'TR' ? 'selected' : '' }}>
                                                    Turkey</option>
                                                <option value="TM" {{ $client->country == 'TM' ? 'selected' : '' }}>
                                                    Turkmenistan
                                                </option>
                                                <option value="TC" {{ $client->country == 'TC' ? 'selected' : '' }}>
                                                    Turks and Caicos
                                                    Islands</option>
                                                <option value="TV" {{ $client->country == 'TV' ? 'selected' : '' }}>
                                                    Tuvalu</option>
                                                <option value="UG" {{ $client->country == 'UG' ? 'selected' : '' }}>
                                                    Uganda</option>
                                                <option value="UA" {{ $client->country == 'UA' ? 'selected' : '' }}>
                                                    Ukraine</option>
                                                <option value="AE" {{ $client->country == 'AE' ? 'selected' : '' }}>
                                                    United Arab
                                                    Emirates</option>
                                                <option value="GB" {{ $client->country == 'GB' ? 'selected' : '' }}>
                                                    United Kingdom
                                                </option>
                                                <option value="US" {{ $client->country == 'US' ? 'selected' : '' }}>
                                                    United States
                                                </option>
                                                <option value="UY" {{ $client->country == 'UY' ? 'selected' : '' }}>
                                                    Uruguay</option>
                                                <option value="UZ" {{ $client->country == 'UZ' ? 'selected' : '' }}>
                                                    Uzbekistan</option>
                                                <option value="VU" {{ $client->country == 'VU' ? 'selected' : '' }}>
                                                    Vanuatu</option>
                                                <option value="VE" {{ $client->country == 'VE' ? 'selected' : '' }}>
                                                    Venezuela,
                                                    Bolivarian Republic of</option>
                                                <option value="VN" {{ $client->country == 'VN' ? 'selected' : '' }}>
                                                    Vietnam</option>
                                                <option value="VI" {{ $client->country == 'VI' ? 'selected' : '' }}>
                                                    Virgin Islands
                                                </option>
                                                <option value="YE" {{ $client->country == 'YE' ? 'selected' : '' }}>
                                                    Yemen</option>
                                                <option value="ZM" {{ $client->country == 'ZM' ? 'selected' : '' }}>
                                                    Zambia</option>
                                                <option value="ZW" {{ $client->country == 'ZW' ? 'selected' : '' }}>
                                                    Zimbabwe</option>
                                            </select>
                                            @if ($errors->has('country'))
                                                <div class="text-danger">{{ $errors->first('country') }}</div>
                                            @endif
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-10">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">Telephone</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="tel" name="telephone"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->telephone }}"
                                                        placeholder="+49 5451 123 456 7" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Mobile Number</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="tel" name="mobile_number"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->mobile_number }}"
                                                        placeholder="+49 171 123 456 7" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label required">E-Mail</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" name="email"
                                                class="form-control form-control-lg form-control-solid"
                                                value="{{ $client->email }}" placeholder="max@mustermann-gmbh.de"
                                                required />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-10">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label">VAT ID no.</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="vat_id"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->vat_id }}" placeholder="DE123456789" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Registration Number</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="registration_number"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $client->registration_number }}"
                                                        placeholder="HRB123456" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label">Website</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="website"
                                                class="form-control form-control-lg form-control-solid"
                                                value="{{ $client->website }}" placeholder="www.mustermann-gmbh.de" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label">Company Size</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="company_size"
                                                class="form-select form-select-lg form-select-solid"
                                                data-control="select2" data-placeholder="Bitte wählen..."
                                                data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1"
                                                    {{ $client->company_size == '1' ? 'selected' : '' }}>1
                                                    Person</option>
                                                <option value="2-10"
                                                    {{ $client->company_size == '2-10' ? 'selected' : '' }}>2-10
                                                    Personen
                                                </option>
                                                <option value="11-50"
                                                    {{ $client->company_size == '11-50' ? 'selected' : '' }}>11-50
                                                    Personen</option>
                                                <option value="50+"
                                                    {{ $client->company_size == '50+' ? 'selected' : '' }}>50+ Personen
                                                </option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--end::Label-->
                                            <label class="form-label">Company Description</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea name="company_description" class="form-control form-control-lg form-control-solid" rows="5"
                                                placeholder="Bitte teilen Sie uns kurz mit, in welchem Bereich Ihr Unternehmen tätig ist und welche Produkte Sie ertreiben.">{{ $client->company_description }}</textarea>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_product_cancel"
                                        class="btn btn-light me-3">{{ trans('message.cancel') }}</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_add_product_submit" class="btn btn-primary">
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
                <!--end::Modal - New Product-->
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
        function getVarianPrice(arr) {
            $("#" + arr[1]).html('');
            $.ajax({
                url: "{{ Route('client.update.product') }}",
                type: "GET",
                data: {
                    value: arr[0]
                },
                success: function(result) {
                    console.log(result);
                    $.each(result, function(key, value) {
                        $("#" + arr[1]).append('<option value="' + value.plan + '">' + value.plan +
                            ' (' + value.price + '€ )' + '</option>');
                    });
                }
            });
        }

        function getAccountPlan(obj) {
            var t = obj;
            $('#account_plan_selected').val(obj);
            //alert(t);
        }
    </script>

    <script>
        $(document).ready(function() {

            $('#pause_info').hide();
            $('#terminate_info').hide();

            $('#termination').change(function() {

                val = $('#termination').val();
                if (val == 'pause') {

                    $('#pause_info').show();

                } else if (val == 'terminate') {

                    $('#terminate_info').show();
                    $('#pause_info').hide();

                } else {

                    $('#pause_info').hide();
                    $('#terminate_info').hide();
                }

            });
        });
    </script>
@endsection
