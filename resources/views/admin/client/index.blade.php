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
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">{{trans('message.dashboard')}} > {{trans('message.clients')}} </small>
                                <!--end::Description-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Wrapper-->

                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container - class="container-xxl"-->
                        <div id="kt_content_container" class="container-fluid">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" id="search" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->

                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                <!--begin::Card body-->
                                <div class="card-body py-4 overflow-auto">
                                    <!--begin::Table-->
                                    <table class=" kt_datatable_example_1 table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="justify-content-center text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                {{-- <th class="w-10px pe-2">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                                    </div>
                                                </th> --}}
                                                <th class="text-center min-w-50px">{{trans('message.ID CLIENT')}}</th>
                                                <th class="text-center min-w-50px">{{trans('message.Status')}}</th>
                                                <th class="text-center min-w-100px">{{trans('message.Client Company')}}</th>
                                                <th class="text-center min-w-100px">{{trans('message.CLIENT SINCE')}}</th>
                                                <th class="text-center min-w-100px">{{trans('message.CLIENT UNTIL')}}</th>
                                                <th class="text-center min-w-100px">{{trans('message.Total Revenue')}}</th>
                                                <th class="text-center min-w-100px">{{trans('message.OPEN COSTS')}}</th>
                                                <th class="text-center min-w-125px">{{trans('message.CHOOSEN VARIANT')}}</th>
                                                {{-- <th class="text-center min-w-125px">Affiliate Discount</th> --}}
                                                <th class="text-center min-w-100px">{{trans('message.NEXT PAYMENT')}}</th>
                                                <th class="text-center min-w-100px">{{trans('message.PAYMENT METHOD')}}</th>
                                                {{-- <th class="text-end min-w-50px">{{trans('message.OPTIONS')}}</th> --}}
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-bold">
                                            <!--begin::Table row-->
                                            @foreach ($clients as $client)
                                            @php

                                                $total_client_revenue = App\Models\Transaction::select(DB::raw('sum(amount - discount_price) as total'))->where('client_id',$client->id)->first();
                                             @endphp
                                            <tr>
                                                <!--begin::Checkbox-->
                                                {{-- <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td> --}}
                                                <!--end::Checkbox-->
                                                <!--begin::Client ID-->
                                                <td class="text-center">
                                                    <a href="{{Route('admin.client.view',[$client->id,$client->stripe_id])}}" class="fw-bolder text-gray-600 text-hover-primary">{{$client->id}}</a>
                                                </td>
                                                <!--end::Client ID-->
                                                <td class="text-center">
                                                @if ($client->stripe_status == 'active')

                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">{{$client->stripe_status}}</span>

                                                @elseif($client->stripe_status == 'Cancelled')

                                                    <span class="badge py-3 px-4 fs-7 " style="background-color: gray">{{$client->stripe_status}}</span>

                                                @elseif($client->stripe_status == 'Pause')

                                                    <span class="badge py-3 px-4 fs-7 " style="background-color: rgb(129, 127, 231)">{{$client->stripe_status}}</span>

                                                @else
                                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">error</span>
                                                @endif

                                                </td>
                                                <!--begin::Client Company-->
                                                <td class="text-center">
                                                    <a href="{{Route('admin.client.view',[$client->id,$client->stripe_id])}}" class="fw-bolder text-gray-600 text-hover-primary">{{$client->company_name}}</a>
                                                </td>
                                                <!--end::Client Company-->
                                                <!--begin::Client since-->
                                                <td class="text-center">{{date('d-m-Y ', strtotime($client->created_at))}}</td>
                                                <!--end::Client since-->
                                                <!--begin::Client until-->
                                                <td class="text-center">{{date('d-m-Y ', strtotime($client->client_until))}}</td>
                                                <!--end::Client until-->
                                                <!--begin::Total revenue-->
                                                <td class="text-center">{{$total_client_revenue->total != null ? $total_client_revenue->total : 0}}€</td>
                                                <!--end::Total revenue-->
                                                <!--begin::Open costs-->
                                                <td class="text-center">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">{{$client->open_costs}}</span>
                                                </td>
                                                <!--end::Open costs-->
                                                <!--begin::Choosen Variant-->
                                                <td class="text-center">{{$client->variant_name}}</td>
                                                <!--end::Choosen Variant-->
                                                <!--begin::Affiliate Discount-->
                                                {{-- <td class="text-center">1x Client / <span class="badge py-3 px-4 fs-7 badge-light-success">3%</span></td> --}}
                                                <!--end::Affiliate Discount-->
                                                <!--begin::Next Payment-->
                                                <td class="text-center">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">{{date('d-m-Y ', strtotime($client->next_payment))}}</span>
                                                </td>
                                                <!--end::Next Payment-->
                                                <!--begin::price-->
                                                <td class="text-center">Stripe</td>
                                                <!--end::price-->
                                                <!--begin::Action=-->
                                                {{-- <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aktionen
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{Route('admin.client.delete',$client->id)}}" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td> --}}
                                                <!--end::Action=-->
                                            </tr>
                                            @endforeach

                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
@endsection

@section('custom_scripts')

<script>
    var table = $('.kt_datatable_example_1').DataTable();
        $('#search').on('keyup', function() {
            table.search(this.value).draw();
        });

</script>

@endsection
