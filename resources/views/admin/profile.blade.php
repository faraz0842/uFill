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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.dashboard') }} >
                        {{ trans('message.user_management') }} > {{ trans('message.user') }} > {{ $profile->name }}</small>
                    <!--end::Description-->
                </div>
                <!--end::Page title-->
                <!--begin::Wrapper-->
                {{-- <div class="d-flex align-items-center flex-shrink-0 me-5 py-3">
                <!--begin::Label-->
                <span class="fs-7 fw-bolder text-gray-700 pe-4">{{trans('message.Team')}}:</span>
                <!--end::Label-->
                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-shrink-0 me-2">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-35px">
                        <div class="symbol-label fw-bolder bg-warning text-inverse-warning">A</div>
                    </div>
                    <!--end::User-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-35px">
                        <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="" />
                    </div>
                    <!--end::User-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-35px">
                        <img src="{{asset('assets/media/avatars/300-2.jpg')}}" alt="" />
                    </div>
                    <!--end::User-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-35px">
                        <div class="symbol-label fw-bolder bg-primary text-inverse-primary">S</div>
                    </div>
                    <!--end::User-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-35px">
                        <img src="{{asset('assets/media/avatars/300-5.jpg')}}" alt="" />
                    </div>
                    <!--end::User-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-35px">
                        <div class="symbol-label fw-bolder bg-danger text-inverse-danger">P</div>
                    </div>
                    <!--end::User-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-35px">
                        <img src="{{asset('assets/media/avatars/300-20.jpg')}}" alt="" />
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->
                <!--begin::Button-->
                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                    title="Neuen Benutzer anlegen...">
                    <a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_invite_friends">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                    transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </div>
                <!--end::Button-->
            </div> --}}
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <div class="form-group m-4">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container - class="container-xxl"-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                        <!--begin::Card-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Summary-->
                                <!--begin::User Info-->
                                <div class="d-flex flex-center flex-column py-5">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-100px symbol-circle mb-7">
                                        @if (isset($profile->profile_picture))
                                            <img src="{{ URL::asset($profile->profile_picture) }}" alt="image" />
                                        @else
                                            <img src="{{ asset('assets/media/svg/avatars/blank.svg') }}" alt="image" />
                                        @endif

                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <div class="fs-3 text-gray-800 fw-bolder">{{ $profile->name }}</div><br>
                                    {{-- <span class="text-gray-400 mb-5">Geschäftsführerin</span> --}}
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="mb-9">
                                        <!--begin::Badge-->
                                        <div class="badge badge-lg badge-light-primary d-inline">
                                            {{ trans('message.administrator') }}</div>
                                        <!--begin::Badge-->
                                    </div>
                                    <!--end::Position-->
                                </div>
                                <!--end::User Info-->
                                <!--end::Summary-->
                                <!--begin::Details toggle-->
                                <div class="d-flex flex-stack fs-4 py-3">
                                    <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse"
                                        href="#kt_user_view_details" role="button" aria-expanded="false"
                                        aria-controls="kt_user_view_details">{{ trans('message.Details') }}
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
                                    <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details bearbeiten.">
                                        <a href="#" class="btn btn-sm btn-bg-light" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_update_details{{ $profile->admin_id }}">{{ trans('message.Edit') }}</a>

                                    </span>
                                </div>
                                <!--end::Details toggle-->
                                <div class="separator"></div>
                                <!--begin::Details content-->
                                <div id="kt_user_view_details" class="collapse show">
                                    <div class="pb-5 fs-6">
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">{{ trans('message.Account') }}</div>
                                        <div class="text-gray-600">{{ $profile->admin_id }}</div>
                                        <!--end::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">{{ trans('message.E-Mail') }}</div>
                                        <div class="text-gray-600">
                                            <a href="mailto:{{ $profile->email }}"
                                                class="text-gray-600 text-hover-primary">{{ $profile->email }}</a>
                                        </div>
                                        <!--end::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">{{ trans('message.Phone') }}</div>
                                        <div class="text-gray-600">
                                            <a href="tel:+495412352147"
                                                class="text-gray-600 text-hover-primary">{{ $profile->phone }}</a>
                                        </div>
                                        <!--end::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">{{ trans('message.Mobile') }}</div>
                                        <div class="text-gray-600">
                                            <a href="tel:+491718542145"
                                                class="text-gray-600 text-hover-primary">{{ $profile->mobile }}</a>
                                        </div>
                                        <!--end::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">{{ trans('message.Address') }}</div>
                                        <div class="text-gray-600">{{ $profile->street }} {{ $profile->house_number }}
                                            <br />{{ $profile->zip_code }} , {{ $profile->city }}
                                            <br />{{ $profile->country }}
                                        </div>
                                        <!--end::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">{{ trans('message.language') }}</div>
                                        <div class="text-gray-600">{{ $profile->language }}</div>
                                        <!--end::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">{{ trans('message.Status') }}</div>
                                        @if ($profile->status == 'online')
                                            <span class="badge badge-success fs-8 fw-bolder">{{ $profile->status }}</span>
                                        @elseif($profile->status == 'away')
                                            <span class="badge badge-warning fs-8 fw-bolder">{{ $profile->status }}</span>
                                        @elseif($profile->status == 'busy')
                                            <span class="badge badge-danger fs-8 fw-bolder">{{ $profile->status }}</span>
                                        @elseif($profile->status == 'do not disturb')
                                            <span class="badge badge-danger fs-8 fw-bolder">{{ $profile->status }}</span>
                                        @elseif($profile->status == 'offline')
                                            <span class="badge badge-default fs-8 fw-bolder"
                                                style="background-color: rgb(188, 188, 188)">{{ $profile->status }}</span>
                                        @endif
                                        <!--end::Details item-->
                                    </div>
                                </div>
                                <!--end::Details content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Sidebar-->
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-15">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_user_view_todo">{{ trans('message.tasks') }}</a>
                            </li>
                            <!--end:::Tab item-->
                            <!--begin:::Tab item-->
                            @php
                                $check_admin = App\Models\Admin::where('admin_id', session('id'))->first();
                            @endphp
                            @if ($profile->admin_id == session('id'))
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                        data-bs-toggle="tab"
                                        href="#kt_user_view_overview_security">{{ trans('message.security') }}</a>
                                </li>
                            @endif

                            <!--end:::Tab item-->
                            <!--begin:::Tab item-->
                            <li class="nav-item ms-auto">
                                <!--begin::Action menu-->
                                <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click"
                                    data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">{{ trans('message.Actions') }}
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">
                                            {{ trans('message.functions') }}</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    {{-- <div class="menu-item px-5">
                                    <a href="javascript:;" class="menu-link px-5">{{ trans('message.start chat') }}</a>
                                </div> --}}
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="mailto:{{ $profile->email }}"
                                            class="menu-link px-5">{{ trans('message.Write e-mail') }}</a>
                                    </div>
                                    <div class="menu-item px-5">
                                        <a href="tel:{{ $profile->phone }}"
                                            class="menu-link px-5">{{ trans('message.Phone') }}</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    {{-- <div class="menu-item px-5">
                                    <a href="javascript:;" class="menu-link px-5">{{ trans('message.make a bill') }}</a>
                                </div> --}}
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    {{-- <div class="menu-item px-5">
                                    <a href="javascript:;" class="menu-link px-5">{{ trans('message.plan an appointment') }}</a>
                                </div> --}}
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-3"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">
                                            {{ trans('message.user') }}</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="#" class="menu-link px-5" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_update_details{{ $profile->admin_id }}">{{ trans('message.edit details') }}</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="{{ Route('admin.delete', $profile->admin_id) }}"
                                            class="menu-link text-danger px-5">{{ trans('message.delete user') }}</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu-->
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin:::Tab content-->
                        <div class="tab-content" id="myTabContent">
                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_user_view_todo" role="tabpanel">
                                <!--begin::List Widget 3-->
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <!--begin::Header-->
                                    <div class="card-header align-items-center border-0 mt-4 ">
                                        <h3 class="card-title align-items-start flex-column ">
                                            @if ($profile->name == session('name'))
                                                <span
                                                    class="fw-bolder mb-2 text-dark ">{{ trans('message.My to do list') }}</span>
                                            @else
                                                <span class="fw-bolder mb-2 text-dark ">{{ $profile->name }}
                                                    {{ trans('message.to do list') }}</span>
                                            @endif

                                            <span class="text-muted fw-bold fs-7 ">{{ trans('message.Total:') }}
                                                {{ $open_tasks }} {{ trans('message.open tasks') }}</span>
                                        </h3>
                                        <div class="card-toolbar" data-bs-toggle="tooltip " data-bs-placement="top "
                                            data-bs-trigger="hover " title="Weitere Aufgaben hinzufügen... ">
                                            <a href="javascript:" class="btn btn-sm btn-light btn-active-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_new_task">{{ trans('message.Add a Task') }}</a>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-2">
                                        @foreach ($tasks as $task)
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-8 ">
                                                <!--begin::Bullet-->
                                                @if ($task->priority == 'Important')
                                                    <span class="bullet bullet-vertical h-40px bg-danger "></span>
                                                @elseif($task->priority == 'Normal')
                                                    <span class="bullet bullet-vertical h-40px bg-warning "></span>
                                                @elseif($task->priority == 'Occasionally')
                                                    <span class="bullet bullet-vertical h-40px bg-success "></span>
                                                @endif

                                                <!--end::Bullet-->
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                    <input id="is_checked_{{ $task->task_id }}" class="form-check-input"
                                                        type="checkbox"
                                                        onclick="changeTaskStatus([{{ $task->task_id }},'is_checked_{{ $task->task_id }}','title_{{ $task->task_id }}'])"
                                                        {{ $task->status == 'complete' ? 'checked' : '' }} />
                                                </div>
                                                <!--end::Checkbox-->
                                                <!--begin::Details-->
                                                <div class="flex-grow-1">
                                                    @if ($task->status == 'complete')
                                                        <a href="javascript:"
                                                            class="fs-6 fw-bolder text-gray-900 text-hover-primary"
                                                            style="text-decoration:line-through"
                                                            id="title_{{ $task->task_id }}">{{ $task->title }}</a>
                                                    @else
                                                        <a href="javascript:"
                                                            class="fs-6 fw-bolder text-gray-900 text-hover-primary"
                                                            id="title_{{ $task->task_id }}">{{ $task->title }}</a>
                                                    @endif

                                                    <!--begin::Info-->
                                                    <div class="text-gray-400">
                                                        @if ($task->priority == 'Important')
                                                            <span
                                                                class="badge badge-light-danger fs-8 fw-bolder me-2">{{ $task->priority }}</span>
                                                        @elseif($task->priority == 'Normal')
                                                            <span
                                                                class="badge badge-light-warning fs-8 fw-bolder me-2">{{ $task->priority }}</span>
                                                        @elseif($task->priority == 'Occasionally')
                                                            <span
                                                                class="badge badge-light-success fs-8 fw-bolder me-2">{{ $task->priority }}</span>
                                                        @endif
                                                        <b>{{ trans('message.Due on') }}</b>: {{ $task->due_on }}-
                                                        <b>{{ trans('message.Assigned to') }}</b>: <a
                                                            href="javascript:">{{ '@' . $task->assigned_to }}</a>-
                                                        <b>{{ trans('message.Created By') }}</b> :<a
                                                            href="javascript:">{{ '@' . $task->editor }}</a>-
                                                        <b>{{ trans('message.Costs') }}</b>: {{ $task->costs }}
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Details-->
                                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_edit_task{{ $task->task_id }}">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-2x ">
                                                        <svg xmlns="http://www.w3.org/2000/svg " width="24 "
                                                            height="24 " viewBox="0 0 24 24 " fill="none ">
                                                            <path opacity="0.3 "
                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817
                                                            5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674
                                                            21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z "
                                                                fill="black " />
                                                            <path
                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737
                                                            1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z "
                                                                fill="black " />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="{{ Route('client.admin.deletetask', $task->task_id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-2x">
                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24"
                                                                    height="24" />
                                                                <path
                                                                    d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                                <path
                                                                    d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                            <!--end:Item-->

                                            <!--begin::Modal - edit Task-->
                                            <div class="modal fade" id="kt_modal_edit_task{{ $task->task_id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Form-->
                                                        <form class="form"
                                                            action="{{ Route('client.admin.updatetask', $task->task_id) }}"
                                                            method="post">
                                                            @csrf
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header" id="kt_modal_edit_task_header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">
                                                                    {{ trans('message.edit task') }}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div id="kt_modal_edit_task_close"
                                                                    class="btn btn-icon btn-sm btn-active-icon-primary"
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
                                                            <div class="modal-body py-10 px-lg-17">
                                                                <!--begin::Scroll-->
                                                                <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                                    id="kt_modal_edit_task_scroll" data-kt-scroll="true"
                                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                                    data-kt-scroll-max-height="auto"
                                                                    data-kt-scroll-dependencies="#kt_modal_update_customer_header"
                                                                    data-kt-scroll-wrappers="#kt_modal_edit_task_scroll"
                                                                    data-kt-scroll-offset="300px">
                                                                    <!--begin::User toggle-->
                                                                    <div class="fw-bolder fs-3 rotate collapsible mb-7"
                                                                        data-bs-toggle="collapse"
                                                                        href="#kt_modal_edit_task_info" role="button"
                                                                        aria-expanded="false"
                                                                        aria-controls="kt_modal_update_customer_user_info">
                                                                        Details
                                                                        <span class="ms-2 rotate-180">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </div>
                                                                    <!--end::User toggle-->
                                                                    <!--begin::User form-->
                                                                    <div id="kt_modal_edit_task_info"
                                                                        class="collapse show">
                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-6 fw-bold mb-2">
                                                                                <span
                                                                                    class="required">{{ trans('message.Title') }}</span>
                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                    data-bs-toggle="tooltip"
                                                                                    title="Wählen Sie einen kurzen aber aussagekräftigen Titel dieser Aufgabe."></i>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input type="text"
                                                                                class="form-control form-control-solid"
                                                                                placeholder="z.B. Unterlagen XY"
                                                                                name="title"
                                                                                value="{{ $task->title }}" required />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="fs-6 fw-bold mb-2 required">{{ trans('message.Due on') }}</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input type="date"
                                                                                class="form-control form-control-lg form-control-solid mt-2"
                                                                                name="due_on" placeholder=""
                                                                                value="{{ $task->due_on }}" required />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="fs-6 fw-bold mb-2 required">{{ trans('message.editor') }}</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input type="text" readonly
                                                                                class="form-control form-control-solid"
                                                                                placeholder="Max Mustermann"
                                                                                name="editor"
                                                                                value="{{ session('name') }}" required />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="fs-6 fw-bold mb-2">{{ trans('message.Costs') }}
                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                    data-bs-toggle="tooltip"
                                                                                    title="Tragen Sie die Kosten ein, welche für diese Tätigkeit anfallen bzw. eingeplant sind."></i></label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input type="number"
                                                                                class="form-control form-control-solid"
                                                                                placeholder="z.B. 150€" name="costs"
                                                                                value="{{ $task->costs }}" required />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="fs-6 fw-bold mb-2 required">{{ trans('message.Assigned to') }}</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Select-->
                                                                            <select name="assigned_to"
                                                                                data-control="select "
                                                                                data-hide-search="true "
                                                                                data-placeholder="{{ trans('message.Please choose') }}... "
                                                                                class="form-select form-select-solid "
                                                                                required>
                                                                                <option value="">
                                                                                    {{ trans('message.Please choose') }}...
                                                                                </option>
                                                                                @foreach ($admin as $item)
                                                                                    @if ($item->name == $task->assigned_to)
                                                                                        <option
                                                                                            value="{{ $item->name }}"
                                                                                            selected>{{ $item->name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $item->name }}">
                                                                                            {{ $item->name }}</option>
                                                                                    @endif
                                                                                @endforeach

                                                                            </select>
                                                                            <!--end::Select-->
                                                                        </div>
                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="fs-6 fw-bold mb-2 required">{{ trans('message.Priority') }}</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Select-->
                                                                            <select name="priority" data-control="select "
                                                                                data-hide-search="true "
                                                                                data-placeholder="{{ trans('message.Please choose') }}... "
                                                                                class="form-select form-select-solid "
                                                                                required>
                                                                                <option value=" ">
                                                                                    {{ trans('message.Please choose') }}...
                                                                                </option>
                                                                                <option value="Important"
                                                                                    {{ $task->priority == 'Important' ? 'selected' : '' }}>
                                                                                    Important</option>
                                                                                <option value="Normal"
                                                                                    {{ $task->priority == 'Normal' ? 'selected' : '' }}>
                                                                                    Normal</option>
                                                                                <option value="Occasionally"
                                                                                    {{ $task->priority == 'Occasionally' ? 'selected' : '' }}>
                                                                                    Occasionally</option>
                                                                            </select>
                                                                            <!--end::Select-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                    </div>
                                                                    <!--end::User form-->
                                                                </div>
                                                                <!--end::Scroll-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                            <!--begin::Modal footer-->
                                                            <div class="modal-footer flex-center">
                                                                <!--begin::Button-->
                                                                <button data-bs-dismiss="modal"
                                                                    class="btn btn-light me-3">{{ trans('message.Cancel') }}</button>
                                                                <!--end::Button-->
                                                                <!--begin::Button-->
                                                                <button type="submit" id="kt_modal_edit_task_submit"
                                                                    class="btn btn-primary">
                                                                    <span
                                                                        class="indicator-label">{{ trans('message.Save') }}</span>
                                                                    <span class="indicator-progress">Bitte warten...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2 "></span></span>
                                                                </button>
                                                                <!--end::Button-->
                                                            </div>
                                                            <!--end::Modal footer-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Modal - edit Task-->
                                        @endforeach
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end:List Widget 3-->
                                <!--begin::Modal - New Task-->
                                <div class="modal fade" id="kt_modal_new_task" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Form-->
                                            <form class="form"
                                                action="{{ Route('client.admin.storetask', $profile->admin_id) }}"
                                                method="post">
                                                @csrf
                                                <!--begin::Modal header-->
                                                <div class="modal-header" id="kt_modal_new_task_header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder">{{ trans('message.Add task') }}</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div id="kt_modal_new_task_close"
                                                        class="btn btn-icon btn-sm btn-active-icon-primary"
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
                                                <div class="modal-body py-10 px-lg-17">
                                                    <!--begin::Scroll-->
                                                    <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                        id="kt_modal_new_task_scroll" data-kt-scroll="true"
                                                        data-kt-scroll-activate="{default: false, lg: true}"
                                                        data-kt-scroll-max-height="auto"
                                                        data-kt-scroll-dependencies="#kt_modal_update_customer_header"
                                                        data-kt-scroll-wrappers="#kt_modal_new_task_scroll"
                                                        data-kt-scroll-offset="300px">
                                                        <!--begin::User toggle-->
                                                        <div class="fw-bolder fs-3 rotate collapsible mb-7"
                                                            data-bs-toggle="collapse" href="#kt_modal_new_task_info"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="kt_modal_update_customer_user_info">
                                                            {{ trans('message.Details') }}
                                                            <span class="ms-2 rotate-180">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <path
                                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::User toggle-->
                                                        <!--begin::User form-->
                                                        <div id="kt_modal_new_task_info" class="collapse show">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-bold mb-2">
                                                                    <span
                                                                        class="required">{{ trans('message.Title') }}</span>
                                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Wählen Sie einen kurzen aber aussagekräftigen Titel dieser Aufgabe."></i>
                                                                </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="z.B. Unterlagen XY" name="title"
                                                                    value="" required />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="fs-6 fw-bold mb-2 required">{{ trans('message.Due on') }}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                @if (session('theme') == 'dark')
                                                                    <input type="date" style="color-scheme: dark;"
                                                                        class="form-control form-control-lg form-control mt-2"
                                                                        name="due_on" placeholder="" value=""
                                                                        required />
                                                                @else
                                                                    <input type="date"
                                                                        class="form-control form-control-lg form-control mt-2"
                                                                        name="due_on" placeholder="" value=""
                                                                        required />
                                                                @endif

                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="fs-6 fw-bold mb-2 required">{{ trans('message.editor') }}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" readonly
                                                                    class="form-control form-control-solid"
                                                                    placeholder="Max Mustermann" name="editor"
                                                                    value="{{ session('name') }}" required />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="fs-6 fw-bold mb-2">{{ trans('message.Costs') }}
                                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Tragen Sie die Kosten ein, welche für diese Tätigkeit anfallen bzw. eingeplant sind."></i></label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="number"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="z.B. 150€" name="costs" required />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="fs-6 fw-bold mb-2 required">{{ trans('message.Assigned to') }}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Select-->
                                                                <select name="assigned_to" data-control="select "
                                                                    data-hide-search="true "
                                                                    data-placeholder="{{ trans('message.Please choose') }}... "
                                                                    class="form-select form-select-solid " required>
                                                                    <option value="">
                                                                        {{ trans('message.Please choose') }}...</option>
                                                                    @foreach ($admin as $item)
                                                                        <option value="{{ $item->name }}">
                                                                            {{ $item->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                                <!--  end::Select  -->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="fs-6 fw-bold mb-2 required">{{ trans('message.Priority') }}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Select-->
                                                                <select name="priority" data-control="select "
                                                                    data-hide-search="true "
                                                                    data-placeholder="{{ trans('message.Please choose') }}... "
                                                                    class="form-select form-select-solid " required>
                                                                    <option value=" ">
                                                                        {{ trans('message.Please choose') }}...</option>
                                                                    <option value="Important">Important</option>
                                                                    <option value="Normal">Normal</option>
                                                                    <option value="Occasionally">Occasionally</option>
                                                                </select>
                                                                <!--end::Select-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::User form-->
                                                    </div>
                                                    <!--end::Scroll-->
                                                </div>
                                                <!--end::Modal body-->
                                                <!--begin::Modal footer-->
                                                <div class="modal-footer flex-center">
                                                    <!--begin::Button-->
                                                    <button type="reset" id="kt_modal_new_task_cancel"
                                                        class="btn btn-light me-3"
                                                        data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" id="kt_modal_new_task_submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">{{ trans('message.save') }}</span>
                                                        <span class="indicator-progress">Bitte warten...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2 "></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                                <!--end::Modal footer-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal - New Task-->

                                {{-- <div class="post d-flex flex-column-fluid" id="kt_post">
                                <!--begin::Container - class="container-xxl"-->
                                <div id="kt_content_container" class="container-fluid">

                                </div>
                                <!--end::Container-->


                            </div> --}}
                            </div>
                            <!--end:::Tab pane-->

                            @if ($check_admin)
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>{{ trans('message.Profile') }}</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 pb-5">
                                            <!--begin::Table wrapper-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed gy-5"
                                                    id="kt_table_users_login_session">
                                                    <!--begin::Table body-->
                                                    <tbody class="fs-6 fw-bold text-gray-600">
                                                        <tr>
                                                            <td>E-Mail</td>
                                                            <td>{{ $profile->email }}</td>
                                                            <td class="text-end">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_update_email">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ trans('message.Password') }}</td>
                                                            <td>******</td>
                                                            <td class="text-end">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_update_password">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table wrapper-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title flex-column">
                                                <h2 class="mb-1">
                                                    {{ trans('message.Two-Factor Authentication') }}</h2>
                                                <div class="fs-6 fw-bold text-muted">
                                                    {{ trans('message.Increase the security of your account by setting up two-factor authentication') }}.
                                                </div>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Add-->
                                                <button type="button" class="btn btn-light-primary btn-sm"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->{{ trans('message.Set up 2FA') }}
                                                </button>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    @if (empty($profile->istofactor))
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_add_auth_app">{{ trans('message.Activate 2FA') }}</a>
                                                        </div>
                                                    @else
                                                        <div class="menu-item px-3">
                                                            <a href="" class="menu-link px-3"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deactivate_2fa">{{ trans('message.Deactivate 2FA') }}</a>
                                                        </div>
                                                    @endif

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ Route('admin.forget.password.link', $profile->email) }}"
                                                            class="menu-link px-3">{{ trans('message.password forget') }}</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                <!--end::Add-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pb-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Content-->
                                                <div class="d-flex flex-column">
                                                    <span>{{ trans('message.E-Mail') }}</span>
                                                    <span class="text-muted fs-6">{{ $profile->email }}</span>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin:Separator-->
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end:Separator-->
                                            <!--begin::Disclaimer-->
                                            <div class="text-gray-600">
                                                {{ trans('message.Please make sure that the e-mail address from your profile is correct and that you have access to it.') }}.
                                            </div>
                                            <!--end::Disclaimer-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    {{-- <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title flex-column">
                                        <h2>E-Mail Benachrichtigungen</h2>
                                        <div class="fs-6 fw-bold text-muted">{{trans('message.Please choose')}} Sie die Themen, über die Sie
                                            informiert werden möchten.</div>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body">
                                    <!--begin::Form-->
                                    <form class="form" id="kt_users_email_notification_form">
                                        <!--begin::Item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_0"
                                                    type="checkbox" value="0" id="kt_modal_update_email_notification_0"
                                                    checked='checked' />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label"
                                                    for="kt_modal_update_email_notification_0">
                                                    <div class="fw-bolder">Abrechnungen</div>
                                                    <div class="text-gray-600">z.B. neue Rechnungen</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_1"
                                                    type="checkbox" value="1"
                                                    id="kt_modal_update_email_notification_1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label"
                                                    for="kt_modal_update_email_notification_1">
                                                    <div class="fw-bolder">News</div>
                                                    <div class="text-gray-600">z.B. Infos zu Updates</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Action buttons-->
                                        <div class="d-flex justify-content-end align-items-center mt-12">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-light me-5"
                                                id="kt_users_email_notification_cancel">Abbrechen</button>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-primary"
                                                id="kt_users_email_notification_submit">
                                                <span class="indicator-label">Speichern</span>
                                                <span class="indicator-progress">Bitte warten...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                        <!--begin::Action buttons-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <!--end::Card footer-->
                            </div> --}}
                                    <!--end::Card-->
                                </div>
                                <!--end:::Tab pane-->
                            @endif


                        </div>
                        <!--end:::Tab content-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
                <!--begin::Modals-->
                <!--begin::Modal - Update user details-->
                <div class="modal fade" id="kt_modal_update_details{{ $profile->admin_id }}" tabindex="-1"
                    aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="{{ Route('admin.profile.update', $profile->admin_id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_update_user_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">{{ trans('message.Update user details') }}</h2>
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
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll"
                                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_update_user_header"
                                        data-kt-scroll-wrappers="#kt_modal_update_user_scroll"
                                        data-kt-scroll-offset="300px">
                                        <!--begin::User toggle-->
                                        <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                            href="#kt_modal_update_user_user_info" role="button" aria-expanded="false"
                                            aria-controls="kt_modal_update_user_user_info">
                                            {{ trans('message.information') }}
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
                                        <!--end::User toggle-->
                                        <!--begin::User form-->
                                        <div id="kt_modal_update_user_user_info" class="collapse show">
                                            <!--begin::Input group-->
                                            <div class="mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">
                                                    <span>{{ trans('message.Update profile picture') }}</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Erlaubte Formate: png, jpg, jpeg."></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Image input wrapper-->
                                                <div class="mt-1">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline"
                                                        data-kt-image-input="true"
                                                        style="background-image: url('{{ asset('assets/media/svg/avatars/blank.svg') }}')">
                                                        <!--begin::Preview existing avatar-->
                                                        @if (isset($profile->profile_picture))
                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                style="background-image: url({{ URL::asset($profile->profile_picture) }})">
                                                            </div>
                                                        @else
                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg') }})">
                                                            </div>
                                                        @endif

                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Edit-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                            title="Profilbild wechseln">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="profile_picture"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <input type="hidden" name="previous_image"
                                                                value="{{ $profile->profile_picture }}" />
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
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label
                                                    class="fs-6 fw-bold mb-2">{{ trans('message.First Name') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Max" name="first_name"
                                                    value="{{ $profile->first_name }}" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">{{ trans('message.Surname') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Mustermann" name="surname"
                                                    value="{{ $profile->surname }}" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">
                                                    <span>{{ trans('message.E-Mail') }}</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Die E-Mail Adresse muss bestätigt werden."></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="email" class="form-control form-control-solid"
                                                    placeholder="exemple@domain.de" name="email"
                                                    value="{{ $profile->email }}" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            {{-- <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">Position</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="z.B. Betriebsleiter" name="description" value="Adminstrator"/>
                                            <!--end::Input-->
                                        </div> --}}
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-15">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">{{ trans('message.language') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="language"
                                                    aria-label="{{ trans('message.Please choose') }}..."
                                                    data-control="select2"
                                                    data-placeholder="{{ trans('message.Please choose') }}..."
                                                    class="form-select form-select-solid"
                                                    data-dropdown-parent="#kt_modal_update_details{{ $profile->admin_id }}">
                                                    <option></option>
                                                    <option value="en"
                                                        {{ $profile->language == 'en' ? 'selected' : ' ' }}>English
                                                    </option>
                                                    <option value="de"
                                                        {{ $profile->language == 'de' ? 'selected' : ' ' }}>German
                                                    </option>

                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::User form-->
                                        <!--begin::Address toggle-->
                                        <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                            href="#kt_modal_update_user_address" role="button" aria-expanded="false"
                                            aria-controls="kt_modal_update_user_address">{{ trans('message.Address') }}
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
                                        <!--end::Address toggle-->
                                        <!--begin::Address form-->
                                        <div id="kt_modal_update_user_address" class="collapse show">
                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-7">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="fs-6 fw-bold mb-2">{{ trans('message.Street') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid" placeholder="Musterweg"
                                                        name="street" value="{{ $profile->street }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="fs-6 fw-bold mb-2">{{ trans('message.House Number') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid" placeholder="1A"
                                                        name="house_number" value="{{ $profile->house_number }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">{{ trans('message.City') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="city" value="{{ $profile->city }}" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">{{ trans('message.Zip Code') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="zip_code" value="{{ $profile->zip_code }}" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">
                                                    <span>{{ trans('message.Country') }}</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="country"
                                                    aria-label="{{ trans('message.Please choose') }}..."
                                                    data-control="select2"
                                                    data-placeholder="{{ trans('message.Please choose') }}..."
                                                    class="form-select form-select-solid"
                                                    data-dropdown-parent="#kt_modal_update_details{{ $profile->admin_id }}">
                                                    <option value=""
                                                        {{ $profile->country == '' ? 'selected' : '' }}>
                                                        {{ trans('message.Please choose') }}...</option>
                                                    <option value="Afghanistan"
                                                        {{ $profile->country == 'Afghanistan' ? 'selected' : '' }}>
                                                        Afghanistan</option>
                                                    <option value="Aland Islands"
                                                        {{ $profile->country == 'Aland Islands' ? 'selected' : '' }}>Aland
                                                        Islands</option>
                                                    <option value="Albania"
                                                        {{ $profile->country == 'Albania' ? 'selected' : '' }}>Albania
                                                    </option>
                                                    <option value="Algeria"
                                                        {{ $profile->country == 'Algeria' ? 'selected' : '' }}>Algeria
                                                    </option>
                                                    <option value="American Samoa"
                                                        {{ $profile->country == 'American Samoa' ? 'selected' : '' }}>
                                                        American Samoa</option>
                                                    <option value="Andorra"
                                                        {{ $profile->country == 'Andorra' ? 'selected' : '' }}>Andorra
                                                    </option>
                                                    <option value="Angola"
                                                        {{ $profile->country == 'Angola' ? 'selected' : '' }}>Angola
                                                    </option>
                                                    <option value="Anguilla"
                                                        {{ $profile->country == 'Anguilla' ? 'selected' : '' }}>Anguilla
                                                    </option>
                                                    <option value="Antigua and Barbuda"
                                                        {{ $profile->country == 'Antigua and Barbuda' ? 'selected' : '' }}>
                                                        Antigua and Barbuda</option>
                                                    <option value="Argentina"
                                                        {{ $profile->country == 'Argentina' ? 'selected' : '' }}>Argentina
                                                    </option>
                                                    <option value="Armenia"
                                                        {{ $profile->country == 'Armenia' ? 'selected' : '' }}>Armenia
                                                    </option>
                                                    <option value="Aruba"
                                                        {{ $profile->country == 'Aruba' ? 'selected' : '' }}>Aruba
                                                    </option>
                                                    <option value="Australia"
                                                        {{ $profile->country == 'Australia' ? 'selected' : '' }}>Australia
                                                    </option>
                                                    <option value="Austria"
                                                        {{ $profile->country == 'Austria' ? 'selected' : '' }}>Austria
                                                    </option>
                                                    <option value="Azerbaijan"
                                                        {{ $profile->country == 'Azerbaijan' ? 'selected' : '' }}>
                                                        Azerbaijan</option>
                                                    <option value="Bahamas"
                                                        {{ $profile->country == 'Bahamas' ? 'selected' : '' }}>Bahamas
                                                    </option>
                                                    <option value="Bahrain"
                                                        {{ $profile->country == 'Bahrain' ? 'selected' : '' }}>Bahrain
                                                    </option>
                                                    <option value="Bangladesh"
                                                        {{ $profile->country == 'Bangladesh' ? 'selected' : '' }}>
                                                        Bangladesh</option>
                                                    <option value="Barbados"
                                                        {{ $profile->country == 'Barbados' ? 'selected' : '' }}>Barbados
                                                    </option>
                                                    <option value="Belarus"
                                                        {{ $profile->country == 'Belarus' ? 'selected' : '' }}>Belarus
                                                    </option>
                                                    <option value="Belgium"
                                                        {{ $profile->country == 'Belgium' ? 'selected' : '' }}>Belgium
                                                    </option>
                                                    <option value="Belize"
                                                        {{ $profile->country == 'Belize' ? 'selected' : '' }}>Belize
                                                    </option>
                                                    <option value="Benin"
                                                        {{ $profile->country == 'Benin' ? 'selected' : '' }}>Benin
                                                    </option>
                                                    <option value="Bermuda"
                                                        {{ $profile->country == 'Bermuda' ? 'selected' : '' }}>Bermuda
                                                    </option>
                                                    <option value="Bhutan"
                                                        {{ $profile->country == 'Bhutan' ? 'selected' : '' }}>Bhutan
                                                    </option>
                                                    <option value="Bolivia, Plurinational State of"
                                                        {{ $profile->country == 'Bolivia, Plurinational State of' ? 'selected' : '' }}>
                                                        Bolivia, Plurinational State of</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba"
                                                        {{ $profile->country == 'Bonaire, Sint Eustatius and Saba' ? 'selected' : '' }}>
                                                        Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina"
                                                        {{ $profile->country == 'Bosnia and Herzegovina' ? 'selected' : '' }}>
                                                        Bosnia and Herzegovina</option>
                                                    <option value="Botswana"
                                                        {{ $profile->country == 'Botswana' ? 'selected' : '' }}>Botswana
                                                    </option>
                                                    <option value="Brazil"
                                                        {{ $profile->country == 'Brazil' ? 'selected' : '' }}>Brazil
                                                    </option>
                                                    <option value="British Indian Ocean Territory"
                                                        {{ $profile->country == 'British Indian Ocean Territory' ? 'selected' : '' }}>
                                                        British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam"
                                                        {{ $profile->country == 'Brunei Darussalam' ? 'selected' : '' }}>
                                                        Brunei Darussalam</option>
                                                    <option value="Bulgaria"
                                                        {{ $profile->country == 'Bulgaria' ? 'selected' : '' }}>Bulgaria
                                                    </option>
                                                    <option value="Burkina Faso"
                                                        {{ $profile->country == 'Burkina Faso' ? 'selected' : '' }}>
                                                        Burkina Faso</option>
                                                    <option value="Burundi"
                                                        {{ $profile->country == 'Burundi' ? 'selected' : '' }}>Burundi
                                                    </option>
                                                    <option value="Cambodia"
                                                        {{ $profile->country == 'Cambodia' ? 'selected' : '' }}>Cambodia
                                                    </option>
                                                    <option value="Cameroon"
                                                        {{ $profile->country == 'Cameroon' ? 'selected' : '' }}>Cameroon
                                                    </option>
                                                    <option value="Canada"
                                                        {{ $profile->country == 'Canada' ? 'selected' : '' }}>Canada
                                                    </option>
                                                    <option value="Cape Verde"
                                                        {{ $profile->country == 'Cape Verde' ? 'selected' : '' }}>Cape
                                                        Verde</option>
                                                    <option value="Cayman Islands"
                                                        {{ $profile->country == 'Cayman Islands' ? 'selected' : '' }}>
                                                        Cayman Islands</option>
                                                    <option value="Central African Republic"
                                                        {{ $profile->country == 'Central African Republic' ? 'selected' : '' }}>
                                                        Central African Republic</option>
                                                    <option value="Chad"
                                                        {{ $profile->country == 'Chad' ? 'selected' : '' }}>Chad</option>
                                                    <option value="Chile"
                                                        {{ $profile->country == 'Chile' ? 'selected' : '' }}>Chile
                                                    </option>
                                                    <option value="China"
                                                        {{ $profile->country == 'China' ? 'selected' : '' }}>China
                                                    </option>
                                                    <option value="Christmas Island"
                                                        {{ $profile->country == 'Christmas Island' ? 'selected' : '' }}>
                                                        Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands"
                                                        {{ $profile->country == 'Cocos (Keeling) Islands' ? 'selected' : '' }}>
                                                        Cocos (Keeling) Islands</option>
                                                    <option value="Colombia"
                                                        {{ $profile->country == 'Colombia' ? 'selected' : '' }}>Colombia
                                                    </option>
                                                    <option value="Comoros"
                                                        {{ $profile->country == 'Comoros' ? 'selected' : '' }}>Comoros
                                                    </option>
                                                    <option value="Cook Islands"
                                                        {{ $profile->country == 'Cook Islands' ? 'selected' : '' }}>Cook
                                                        Islands</option>
                                                    <option value="Costa Rica"
                                                        {{ $profile->country == 'Costa Rica' ? 'selected' : '' }}>Costa
                                                        Rica</option>
                                                    <option value="Côte d Ivoire"
                                                        {{ $profile->country == 'Côte d Ivoire' ? 'selected' : '' }}>Côte
                                                        d'Ivoire</option>
                                                    <option value="Croatia"
                                                        {{ $profile->country == 'Croatia' ? 'selected' : '' }}>Croatia
                                                    </option>
                                                    <option value="Cuba"
                                                        {{ $profile->country == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                                                    <option value="Curaçao"
                                                        {{ $profile->country == 'Curaçao' ? 'selected' : '' }}>Curaçao
                                                    </option>
                                                    <option value="Czech Republic"
                                                        {{ $profile->country == 'Czech Republic' ? 'selected' : '' }}>
                                                        Czech Republic</option>
                                                    <option value="Denmark"
                                                        {{ $profile->country == 'Denmark' ? 'selected' : '' }}>Denmark
                                                    </option>
                                                    <option value="Djibouti"
                                                        {{ $profile->country == 'Djibouti' ? 'selected' : '' }}>Djibouti
                                                    </option>
                                                    <option value="Dominica"
                                                        {{ $profile->country == 'Dominica' ? 'selected' : '' }}>Dominica
                                                    </option>
                                                    <option value="Dominican Republic"
                                                        {{ $profile->country == 'Dominican Republic' ? 'selected' : '' }}>
                                                        Dominican Republic</option>
                                                    <option value="Ecuador"
                                                        {{ $profile->country == 'Ecuador' ? 'selected' : '' }}>Ecuador
                                                    </option>
                                                    <option value="Egypt"
                                                        {{ $profile->country == 'Egypt' ? 'selected' : '' }}>Egypt
                                                    </option>
                                                    <option value="El Salvador"
                                                        {{ $profile->country == 'El Salvador' ? 'selected' : '' }}>El
                                                        Salvador</option>
                                                    <option value="Equatorial Guinea"
                                                        {{ $profile->country == 'Equatorial Guinea' ? 'selected' : '' }}>
                                                        Equatorial Guinea</option>
                                                    <option value="Eritrea"
                                                        {{ $profile->country == 'Eritrea' ? 'selected' : '' }}>Eritrea
                                                    </option>
                                                    <option value="Estonia"
                                                        {{ $profile->country == 'Estonia' ? 'selected' : '' }}>Estonia
                                                    </option>
                                                    <option value="Ethiopia"
                                                        {{ $profile->country == 'Ethiopia' ? 'selected' : '' }}>Ethiopia
                                                    </option>
                                                    <option value="Falkland Islands (Malvinas)"
                                                        {{ $profile->country == 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>
                                                        Falkland Islands (Malvinas)</option>
                                                    <option value="Fiji"
                                                        {{ $profile->country == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                                                    <option value="Finland"
                                                        {{ $profile->country == 'Finland' ? 'selected' : '' }}>Finland
                                                    </option>
                                                    <option value="France"
                                                        {{ $profile->country == 'France' ? 'selected' : '' }}>France
                                                    </option>
                                                    <option value="French Polynesia"
                                                        {{ $profile->country == 'French Polynesia' ? 'selected' : '' }}>
                                                        French Polynesia</option>
                                                    <option value="Gabon"
                                                        {{ $profile->country == 'Gabon' ? 'selected' : '' }}>Gabon
                                                    </option>
                                                    <option value="Gambia"
                                                        {{ $profile->country == 'Gambia' ? 'selected' : '' }}>Gambia
                                                    </option>
                                                    <option value="Georgia"
                                                        {{ $profile->country == 'Georgia' ? 'selected' : '' }}>Georgia
                                                    </option>
                                                    <option value="Germany"
                                                        {{ $profile->country == 'Germany' ? 'selected' : '' }}>Germany
                                                    </option>
                                                    <option value="Ghana"
                                                        {{ $profile->country == 'Ghana' ? 'selected' : '' }}>Ghana
                                                    </option>
                                                    <option value="Gibraltar"
                                                        {{ $profile->country == 'Gibraltar' ? 'selected' : '' }}>Gibraltar
                                                    </option>
                                                    <option value="Greece"
                                                        {{ $profile->country == 'Greece' ? 'selected' : '' }}>Greece
                                                    </option>
                                                    <option value="Greenland"
                                                        {{ $profile->country == 'Greenland' ? 'selected' : '' }}>Greenland
                                                    </option>
                                                    <option value="Grenada"
                                                        {{ $profile->country == 'Grenada' ? 'selected' : '' }}>Grenada
                                                    </option>
                                                    <option value="Guam"
                                                        {{ $profile->country == 'Guam' ? 'selected' : '' }}>Guam</option>
                                                    <option value="Guatemala"
                                                        {{ $profile->country == 'Guatemala' ? 'selected' : '' }}>Guatemala
                                                    </option>
                                                    <option value="Guernsey"
                                                        {{ $profile->country == 'Guernsey' ? 'selected' : '' }}>Guernsey
                                                    </option>
                                                    <option value="Guinea"
                                                        {{ $profile->country == 'Guinea' ? 'selected' : '' }}>Guinea
                                                    </option>
                                                    <option value="Guinea-Bissau"
                                                        {{ $profile->country == 'Guinea-Bissau' ? 'selected' : '' }}>
                                                        Guinea-Bissau</option>
                                                    <option value="Haiti"
                                                        {{ $profile->country == 'Haiti' ? 'selected' : '' }}>Haiti
                                                    </option>
                                                    <option value="Holy See (Vatican City State)"
                                                        {{ $profile->country == 'Holy See (Vatican City State)' ? 'selected' : '' }}>
                                                        Holy See (Vatican City State)</option>
                                                    <option value="Honduras"
                                                        {{ $profile->country == 'Honduras' ? 'selected' : '' }}>Honduras
                                                    </option>
                                                    <option value="Hong Kong"
                                                        {{ $profile->country == 'Hong Kong' ? 'selected' : '' }}>Hong Kong
                                                    </option>
                                                    <option value="Hungary"
                                                        {{ $profile->country == 'Hungary' ? 'selected' : '' }}>Hungary
                                                    </option>
                                                    <option value="Iceland"
                                                        {{ $profile->country == 'Iceland' ? 'selected' : '' }}>Iceland
                                                    </option>
                                                    <option value="India"
                                                        {{ $profile->country == 'India' ? 'selected' : '' }}>India
                                                    </option>
                                                    <option value="Indonesia"
                                                        {{ $profile->country == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                                    </option>
                                                    <option value="Iran"
                                                        {{ $profile->country == 'Iran' ? 'selected' : '' }}>Iran</option>
                                                    <option value="Iraq"
                                                        {{ $profile->country == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                                                    <option value="Ireland"
                                                        {{ $profile->country == 'Ireland' ? 'selected' : '' }}>Ireland
                                                    </option>
                                                    <option value="Isle of Man"
                                                        {{ $profile->country == 'Isle of Man' ? 'selected' : '' }}>Isle of
                                                        Man</option>
                                                    <option value="Israel"
                                                        {{ $profile->country == 'Israel' ? 'selected' : '' }}>Israel
                                                    </option>
                                                    <option value="Italy"
                                                        {{ $profile->country == 'Italy' ? 'selected' : '' }}>Italy
                                                    </option>
                                                    <option value="Jamaica"
                                                        {{ $profile->country == 'Jamaica' ? 'selected' : '' }}>Jamaica
                                                    </option>
                                                    <option value="Japan"
                                                        {{ $profile->country == 'Japan' ? 'selected' : '' }}>Japan
                                                    </option>
                                                    <option value="Jersey"
                                                        {{ $profile->country == 'Jersey' ? 'selected' : '' }}>Jersey
                                                    </option>
                                                    <option value="Jordan"
                                                        {{ $profile->country == 'Jordan' ? 'selected' : '' }}>Jordan
                                                    </option>
                                                    <option value="Kazakhstan"
                                                        {{ $profile->country == 'Kazakhstan' ? 'selected' : '' }}>
                                                        Kazakhstan</option>
                                                    <option value="Kenya"
                                                        {{ $profile->country == 'Kenya' ? 'selected' : '' }}>Kenya
                                                    </option>
                                                    <option value="Kiribati"
                                                        {{ $profile->country == 'Kiribati' ? 'selected' : '' }}>Kiribati
                                                    </option>
                                                    <option value="Korea"
                                                        {{ $profile->country == 'Korea' ? 'selected' : '' }}>Korea
                                                    </option>
                                                    <option value="Kuwait"
                                                        {{ $profile->country == 'Kuwait' ? 'selected' : '' }}>Kuwait
                                                    </option>
                                                    <option value="Kyrgyzstan"
                                                        {{ $profile->country == 'Kyrgyzstan' ? 'selected' : '' }}>
                                                        Kyrgyzstan</option>
                                                    <option value="Lao Peoples Democratic Republic"
                                                        {{ $profile->country == 'Lao Peoples Democratic Republic' ? 'selected' : '' }}>
                                                        Lao People's Democratic Republic</option>
                                                    <option value="Latvia"
                                                        {{ $profile->country == 'Latvia' ? 'selected' : '' }}>Latvia
                                                    </option>
                                                    <option value="Lebanon"
                                                        {{ $profile->country == 'Lebanon' ? 'selected' : '' }}>Lebanon
                                                    </option>
                                                    <option value="Lesotho"
                                                        {{ $profile->country == 'Lesotho' ? 'selected' : '' }}>Lesotho
                                                    </option>
                                                    <option value="Liberia"
                                                        {{ $profile->country == 'Liberia' ? 'selected' : '' }}>Liberia
                                                    </option>
                                                    <option value="Libya"
                                                        {{ $profile->country == 'Libya' ? 'selected' : '' }}>Libya
                                                    </option>
                                                    <option value="Liechtenstein"
                                                        {{ $profile->country == 'Liechtenstein' ? 'selected' : '' }}>
                                                        Liechtenstein</option>
                                                    <option value="Lithuania"
                                                        {{ $profile->country == 'Lithuania' ? 'selected' : '' }}>Lithuania
                                                    </option>
                                                    <option value="Luxembourg"
                                                        {{ $profile->country == 'Luxembourg' ? 'selected' : '' }}>
                                                        Luxembourg</option>
                                                    <option value="Macao"
                                                        {{ $profile->country == 'Macao' ? 'selected' : '' }}>Macao
                                                    </option>
                                                    <option value="Madagascar"
                                                        {{ $profile->country == 'Madagascar' ? 'selected' : '' }}>
                                                        Madagascar</option>
                                                    <option value="Malawi"
                                                        {{ $profile->country == 'Malawi' ? 'selected' : '' }}>Malawi
                                                    </option>
                                                    <option value="Malaysia"
                                                        {{ $profile->country == 'Malaysia' ? 'selected' : '' }}>Malaysia
                                                    </option>
                                                    <option value="Maldives"
                                                        {{ $profile->country == 'Maldives' ? 'selected' : '' }}>Maldives
                                                    </option>
                                                    <option value="Mali"
                                                        {{ $profile->country == 'Mali' ? 'selected' : '' }}>Mali</option>
                                                    <option value="Malta"
                                                        {{ $profile->country == 'Malta' ? 'selected' : '' }}>Malta
                                                    </option>
                                                    <option value="Marshall Islands"
                                                        {{ $profile->country == 'Marshall Islands' ? 'selected' : '' }}>
                                                        Marshall Islands</option>
                                                    <option value="Martinique"
                                                        {{ $profile->country == 'Martinique' ? 'selected' : '' }}>
                                                        Martinique</option>
                                                    <option value="Mauritania"
                                                        {{ $profile->country == 'Mauritania' ? 'selected' : '' }}>
                                                        Mauritania</option>
                                                    <option value="Mauritius"
                                                        {{ $profile->country == 'Mauritius' ? 'selected' : '' }}>Mauritius
                                                    </option>
                                                    <option value="Mexico"
                                                        {{ $profile->country == 'Mexico' ? 'selected' : '' }}>Mexico
                                                    </option>
                                                    <option value="Micronesia"
                                                        {{ $profile->country == 'Micronesia' ? 'selected' : '' }}>
                                                        Micronesia</option>
                                                    <option value="Moldova"
                                                        {{ $profile->country == 'Moldova' ? 'selected' : '' }}>Moldova
                                                    </option>
                                                    <option value="Monaco"
                                                        {{ $profile->country == 'Monaco' ? 'selected' : '' }}>Monaco
                                                    </option>
                                                    <option value="Mongolia"
                                                        {{ $profile->country == 'Mongolia' ? 'selected' : '' }}>Mongolia
                                                    </option>
                                                    <option value="Montenegro"
                                                        {{ $profile->country == 'Montenegro' ? 'selected' : '' }}>
                                                        Montenegro</option>
                                                    <option value="Montserrat"
                                                        {{ $profile->country == 'Montserrat' ? 'selected' : '' }}>
                                                        Montserrat</option>
                                                    <option value="Morocco"
                                                        {{ $profile->country == 'Morocco' ? 'selected' : '' }}>Morocco
                                                    </option>
                                                    <option value="Mozambique"
                                                        {{ $profile->country == 'Mozambique' ? 'selected' : '' }}>
                                                        Mozambique</option>
                                                    <option value="Myanmar"
                                                        {{ $profile->country == 'Myanmar' ? 'selected' : '' }}>Myanmar
                                                    </option>
                                                    <option value="Namibia"
                                                        {{ $profile->country == 'Namibia' ? 'selected' : '' }}>Namibia
                                                    </option>
                                                    <option value="Nauru"
                                                        {{ $profile->country == 'Nauru' ? 'selected' : '' }}>Nauru
                                                    </option>
                                                    <option value="Nepal"
                                                        {{ $profile->country == 'Nepal' ? 'selected' : '' }}>Nepal
                                                    </option>
                                                    <option value="Netherlands"
                                                        {{ $profile->country == 'Netherlands' ? 'selected' : '' }}>
                                                        Netherlands</option>
                                                    <option value="New Zealand"
                                                        {{ $profile->country == 'New Zealand' ? 'selected' : '' }}>New
                                                        Zealand</option>
                                                    <option value="Nicaragua"
                                                        {{ $profile->country == 'Nicaragua' ? 'selected' : '' }}>Nicaragua
                                                    </option>
                                                    <option value="Niger"
                                                        {{ $profile->country == 'Niger' ? 'selected' : '' }}>Niger
                                                    </option>
                                                    <option value="Nigeria"
                                                        {{ $profile->country == 'Nigeria' ? 'selected' : '' }}>Nigeria
                                                    </option>
                                                    <option value="Niue"
                                                        {{ $profile->country == 'Niue' ? 'selected' : '' }}>Niue</option>
                                                    <option value="Norfolk Island"
                                                        {{ $profile->country == 'Norfolk Island' ? 'selected' : '' }}>
                                                        Norfolk Island</option>
                                                    <option value="Northern Mariana Islands"
                                                        {{ $profile->country == 'Northern Mariana Islands' ? 'selected' : '' }}>
                                                        Northern Mariana Islands</option>
                                                    <option value="Norway"
                                                        {{ $profile->country == 'Norway' ? 'selected' : '' }}>Norway
                                                    </option>
                                                    <option value="Oman"
                                                        {{ $profile->country == 'Oman' ? 'selected' : '' }}>Oman</option>
                                                    <option value="Pakistan"
                                                        {{ $profile->country == 'Pakistan' ? 'selected' : '' }}>Pakistan
                                                    </option>
                                                    <option value="Palau"
                                                        {{ $profile->country == 'Palau' ? 'selected' : '' }}>Palau
                                                    </option>
                                                    <option value="Palestinian Territory, Occupied"
                                                        {{ $profile->country == 'Palestinian Territory, Occupied' ? 'selected' : '' }}>
                                                        Palestinian Territory, Occupied</option>
                                                    <option value="Panama"
                                                        {{ $profile->country == 'Panama' ? 'selected' : '' }}>Panama
                                                    </option>
                                                    <option value="Papua New Guinea"
                                                        {{ $profile->country == 'Papua New Guinea' ? 'selected' : '' }}>
                                                        Papua New Guinea</option>
                                                    <option value="Paraguay"
                                                        {{ $profile->country == 'Paraguay' ? 'selected' : '' }}>Paraguay
                                                    </option>
                                                    <option value="Peru"
                                                        {{ $profile->country == 'Peru' ? 'selected' : '' }}>Peru</option>
                                                    <option value="Philippines"
                                                        {{ $profile->country == 'Philippines' ? 'selected' : '' }}>
                                                        Philippines</option>
                                                    <option value="Poland"
                                                        {{ $profile->country == 'Poland' ? 'selected' : '' }}>Poland
                                                    </option>
                                                    <option value="Portugal"
                                                        {{ $profile->country == 'Portugal' ? 'selected' : '' }}>Portugal
                                                    </option>
                                                    <option value="Puerto Rico"
                                                        {{ $profile->country == 'Puerto Rico' ? 'selected' : '' }}>Puerto
                                                        Rico</option>
                                                    <option value="Qatar"
                                                        {{ $profile->country == 'Qatar' ? 'selected' : '' }}>Qatar
                                                    </option>
                                                    <option value="Romania"
                                                        {{ $profile->country == 'Romania' ? 'selected' : '' }}>Romania
                                                    </option>
                                                    <option value="Russian Federation"
                                                        {{ $profile->country == 'Russian Federation' ? 'selected' : '' }}>
                                                        Russian Federation</option>
                                                    <option value="Rwanda"
                                                        {{ $profile->country == 'Rwanda' ? 'selected' : '' }}>Rwanda
                                                    </option>
                                                    <option value="Saint Barthélemy"
                                                        {{ $profile->country == 'Saint Barthélemy' ? 'selected' : '' }}>
                                                        Saint Barthélemy</option>
                                                    <option value="Saint Kitts and Nevis"
                                                        {{ $profile->country == 'Saint Kitts and Nevis' ? 'selected' : '' }}>
                                                        Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia"
                                                        {{ $profile->country == 'Saint Lucia' ? 'selected' : '' }}>Saint
                                                        Lucia</option>
                                                    <option value="Saint Martin (French part)"
                                                        {{ $profile->country == 'Saint Martin (French part)' ? 'selected' : '' }}>
                                                        Saint Martin (French part)</option>
                                                    <option value="Saint Vincent and the Grenadines"
                                                        {{ $profile->country == 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>
                                                        Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa"
                                                        {{ $profile->country == 'Samoa' ? 'selected' : '' }}>Samoa
                                                    </option>
                                                    <option value="San Marino"
                                                        {{ $profile->country == 'San Marino' ? 'selected' : '' }}>San
                                                        Marino</option>
                                                    <option value="Sao Tome and Principe"
                                                        {{ $profile->country == 'Sao Tome and Principe' ? 'selected' : '' }}>
                                                        Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia"
                                                        {{ $profile->country == 'Saudi Arabia' ? 'selected' : '' }}>Saudi
                                                        Arabia</option>
                                                    <option value="Senegal"
                                                        {{ $profile->country == 'Senegal' ? 'selected' : '' }}>Senegal
                                                    </option>
                                                    <option value="Serbia"
                                                        {{ $profile->country == 'Serbia' ? 'selected' : '' }}>Serbia
                                                    </option>
                                                    <option value="Seychelles"
                                                        {{ $profile->country == 'Seychelles' ? 'selected' : '' }}>
                                                        Seychelles</option>
                                                    <option value="Sierra Leone"
                                                        {{ $profile->country == 'Sierra Leone' ? 'selected' : '' }}>Sierra
                                                        Leone</option>
                                                    <option value="Singapore"
                                                        {{ $profile->country == 'Singapore' ? 'selected' : '' }}>Singapore
                                                    </option>
                                                    <option value="Sint Maarten (Dutch part)"
                                                        {{ $profile->country == 'Sint Maarten (Dutch part)' ? 'selected' : '' }}>
                                                        Sint Maarten (Dutch part)</option>
                                                    <option value="Slovakia"
                                                        {{ $profile->country == 'Slovakia' ? 'selected' : '' }}>Slovakia
                                                    </option>
                                                    <option value="Slovenia"
                                                        {{ $profile->country == 'Slovenia' ? 'selected' : '' }}>Slovenia
                                                    </option>
                                                    <option value="Solomon Islands"
                                                        {{ $profile->country == 'Solomon Islands' ? 'selected' : '' }}>
                                                        Solomon Islands</option>
                                                    <option value="Somalia"
                                                        {{ $profile->country == 'Somalia' ? 'selected' : '' }}>Somalia
                                                    </option>
                                                    <option value="South Africa"
                                                        {{ $profile->country == 'South Africa' ? 'selected' : '' }}>South
                                                        Africa</option>
                                                    <option value="South Korea"
                                                        {{ $profile->country == 'South Korea' ? 'selected' : '' }}>South
                                                        Korea</option>
                                                    <option value="South Sudan"
                                                        {{ $profile->country == 'South Sudan' ? 'selected' : '' }}>South
                                                        Sudan</option>
                                                    <option value="Spain"
                                                        {{ $profile->country == 'Spain' ? 'selected' : '' }}>Spain
                                                    </option>
                                                    <option value="Sri Lanka"
                                                        {{ $profile->country == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka
                                                    </option>
                                                    <option value="Sudan"
                                                        {{ $profile->country == 'Sudan' ? 'selected' : '' }}>Sudan
                                                    </option>
                                                    <option value="Suriname"
                                                        {{ $profile->country == 'Suriname' ? 'selected' : '' }}>Suriname
                                                    </option>
                                                    <option value="Swaziland"
                                                        {{ $profile->country == 'Swaziland' ? 'selected' : '' }}>Swaziland
                                                    </option>
                                                    <option value="Sweden"
                                                        {{ $profile->country == 'Sweden' ? 'selected' : '' }}>Sweden
                                                    </option>
                                                    <option value="Switzerland"
                                                        {{ $profile->country == 'Switzerland' ? 'selected' : '' }}>
                                                        Switzerland</option>
                                                    <option value="Syrian Arab Republic"
                                                        {{ $profile->country == 'Syrian Arab Republic' ? 'selected' : '' }}>
                                                        Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China"
                                                        {{ $profile->country == 'Taiwan, Province of China' ? 'selected' : '' }}>
                                                        Taiwan, Province of China</option>
                                                    <option value="Tajikistan"
                                                        {{ $profile->country == 'Tajikistan' ? 'selected' : '' }}>
                                                        Tajikistan</option>
                                                    <option value="Tanzania, United Republic of"
                                                        {{ $profile->country == 'Tanzania, United Republic of' ? 'selected' : '' }}>
                                                        Tanzania, United Republic of</option>
                                                    <option value="Thailand"
                                                        {{ $profile->country == 'Thailand' ? 'selected' : '' }}>Thailand
                                                    </option>
                                                    <option value="Togo"
                                                        {{ $profile->country == 'Togo' ? 'selected' : '' }}>Togo</option>
                                                    <option value="Tokelau"
                                                        {{ $profile->country == 'Tokelau' ? 'selected' : '' }}>Tokelau
                                                    </option>
                                                    <option value="Tonga"
                                                        {{ $profile->country == 'Tonga' ? 'selected' : '' }}>Tonga
                                                    </option>
                                                    <option value="Trinidad and Tobago"
                                                        {{ $profile->country == 'Trinidad and Tobago' ? 'selected' : '' }}>
                                                        Trinidad and Tobago</option>
                                                    <option value="Tunisia"
                                                        {{ $profile->country == 'Tunisia' ? 'selected' : '' }}>Tunisia
                                                    </option>
                                                    <option value="Turkey"
                                                        {{ $profile->country == 'Turkey' ? 'selected' : '' }}>Turkey
                                                    </option>
                                                    <option value="Turkmenistan"
                                                        {{ $profile->country == 'Turkmenistan' ? 'selected' : '' }}>
                                                        Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands"
                                                        {{ $profile->country == 'Turks and Caicos Islands' ? 'selected' : '' }}>
                                                        Turks and Caicos Islands</option>
                                                    <option value="Tuvalu"
                                                        {{ $profile->country == 'Tuvalu' ? 'selected' : '' }}>Tuvalu
                                                    </option>
                                                    <option value="Uganda"
                                                        {{ $profile->country == 'Uganda' ? 'selected' : '' }}>Uganda
                                                    </option>
                                                    <option value="Ukraine"
                                                        {{ $profile->country == 'Ukraine' ? 'selected' : '' }}>Ukraine
                                                    </option>
                                                    <option value="United Arab Emirates"
                                                        {{ $profile->country == 'United Arab Emirates' ? 'selected' : '' }}>
                                                        United Arab Emirates</option>
                                                    <option value="United Kingdom"
                                                        {{ $profile->country == 'United Kingdom' ? 'selected' : '' }}>
                                                        United Kingdom</option>
                                                    <option value="United States"
                                                        {{ $profile->country == 'United States' ? 'selected' : '' }}>
                                                        United States</option>
                                                    <option value="Uruguay"
                                                        {{ $profile->country == 'Uruguay' ? 'selected' : '' }}>Uruguay
                                                    </option>
                                                    <option value="Uzbekistan"
                                                        {{ $profile->country == 'Uzbekistan' ? 'selected' : '' }}>
                                                        Uzbekistan</option>
                                                    <option value="Vanuatu"
                                                        {{ $profile->country == 'Vanuatu' ? 'selected' : '' }}>Vanuatu
                                                    </option>
                                                    <option value="Venezuela, Bolivarian Republic of"
                                                        {{ $profile->country == 'Venezuela, Bolivarian Republic of' ? 'selected' : '' }}>
                                                        Venezuela, Bolivarian Republic of</option>
                                                    <option value="Vietnam"
                                                        {{ $profile->country == 'Vietnam' ? 'selected' : '' }}>Vietnam
                                                    </option>
                                                    <option value="Yemen"
                                                        {{ $profile->country == 'Yemen' ? 'selected' : '' }}>Yemen
                                                    </option>
                                                    <option value="Zambia"
                                                        {{ $profile->country == 'Zambia' ? 'selected' : '' }}>Zambia
                                                    </option>
                                                    <option value="Zimbabwe"
                                                        {{ $profile->country == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe
                                                    </option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Address form-->
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" class="btn btn-light me-3"
                                        data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
                <!--end::Modal - Update user details-->
                <!--begin::Modal - Add schedule-->
                <div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Termin erstellen</h2>
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
                                <form method="post" class="form" action="">
                                    @csrf
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="title"
                                            value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">
                                            <span class="required">Date &amp; Time</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                                data-bs-trigger="hover" data-bs-html="true"
                                                data-bs-content="Bitte Datum &amp; Zeit wählen."></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid"
                                            placeholder="{{ trans('message.Please choose') }}..." name="date_time"
                                            id="kt_modal_add_schedule_datepicker" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Besprechungsleiter</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="leader"
                                            value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Termin senden an:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input id="kt_modal_add_schedule_tagify" type="text"
                                            class="form-control form-control-solid" name="send_to"
                                            placeholder="enter sender email" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">Abbrechen</button>
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">Speichern</span>
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
                <!--end::Modal - Add schedule-->
                <!--begin::Modal - Add task-->
                <div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">{{ trans('message.Add a Task') }}</h2>
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
                                <form id="kt_modal_add_task_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label
                                            class="required fs-6 fw-bold form-label mb-2">{{ trans('message.Task Name') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="task_name"
                                            value="" required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{ trans('Task Due Date') }}</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                                data-bs-trigger="hover" data-bs-html="true"
                                                data-bs-content="Select a due date."></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="Datum wählen"
                                            name="task_duedate" id="kt_modal_add_task_datepicker" required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label
                                            class="fs-6 fw-bold form-label mb-2">{{ trans('message.Task Description') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid rounded-3" required></textarea>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">{{ trans('message.cancel') }}</button>
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">{{ trans('message.Submit') }}</span>
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
                <!--end::Modal - Add task-->
                <!--begin::Modal - Update email-->
                <div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">{{ trans('message.Change E-Mail address') }}</h2>
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
                                <form method="POST" class="form"
                                    action="{{ Route('admin.update.email', $profile->admin_id) }}">
                                    @csrf
                                    <!--begin::Notice-->
                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20"
                                                    height="20" rx="10" fill="currentColor" />
                                                <rect x="11" y="14" width="7" height="2"
                                                    rx="1" transform="rotate(-90 11 14)"
                                                    fill="currentColor" />
                                                <rect x="11" y="17" width="2" height="2"
                                                    rx="1" transform="rotate(-90 11 17)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <div class="fs-6 text-gray-700">
                                                    {{ trans('message.Please note that the email address provided must be confirmed') }}.
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--end::Notice-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{ trans('message.E-Mail') }}</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="exemple@domain.de"
                                            name="email" value="{{ $profile->email }}" required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">{{ trans('message.cancel') }}</button>
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">{{ trans('message.save') }}</span>
                                            <span class="indicator-progress">Bitte warten...
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
                <!--end::Modal - Update email-->
                <!--begin::Modal - Update password-->
                <div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">{{ trans('message.Change Password') }}</h2>
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
                                    action="{{ Route('admin.update.password', $profile->admin_id) }}">
                                    @csrf
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-10">
                                        <label
                                            class="required form-label fs-6 mb-2">{{ trans('message.current password') }}</label>
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" name="current_password" autocomplete="off" required />
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label
                                                class="form-label fw-bold fs-6 mb-2">{{ trans('message.New Password') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="" name="new_password"
                                                    autocomplete="off" required />
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <!--end::Input wrapper-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Hint-->
                                        <div class="text-muted">{{ trans('message.password_alert') }}.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-10">
                                        <label
                                            class="form-label fw-bold fs-6 mb-2 required">{{ trans('message.Confirm new password') }}</label>
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" name="confirm_password" autocomplete="off" required />
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">{{ trans('message.cancel') }}</button>
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">{{ trans('message.save') }}</span>
                                            <span class="indicator-progress">Bitte warten...
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
                <!--end::Modal - Update password-->
                <!--begin::Modal - Update role-->
                <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Berechtigungen ändern</h2>
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
                                <form id="kt_modal_update_role_form" class="form" action="#">
                                    <!--begin::Notice-->
                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20"
                                                    height="20" rx="10" fill="currentColor" />
                                                <rect x="11" y="14" width="7" height="2"
                                                    rx="1" transform="rotate(-90 11 14)"
                                                    fill="currentColor" />
                                                <rect x="11" y="17" width="2" height="2"
                                                    rx="1" transform="rotate(-90 11 17)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <div class="fs-6 text-gray-700">Bitte beachten Sie, dass durch die
                                                    Reduzierung eines Benutzerrollenrangs dieser Benutzer alle Privilegien
                                                    verliert, die der vorherigen Rolle zugewiesen wurden.</div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--end::Notice-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-5">
                                            <span class="required">Berechtigungsgruppe wählen...</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input row-->
                                        <div class="d-flex">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="0" id="kt_modal_update_role_option_0"
                                                    checked='checked' />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                    <div class="fw-bolder text-gray-800">Administrator</div>
                                                    <div class="text-gray-600">Best for business owners and company
                                                        administrators</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="1" id="kt_modal_update_role_option_1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                    <div class="fw-bolder text-gray-800">Developer</div>
                                                    <div class="text-gray-600">Best for developers or people primarily
                                                        using
                                                        the API</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="2" id="kt_modal_update_role_option_2" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                    <div class="fw-bolder text-gray-800">Analyst</div>
                                                    <div class="text-gray-600">Best for people who need full access to
                                                        analytics data, but don't need to update business settings</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="3" id="kt_modal_update_role_option_3" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                    <div class="fw-bolder text-gray-800">Support</div>
                                                    <div class="text-gray-600">Best for employees who regularly refund
                                                        payments and respond to disputes</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="4" id="kt_modal_update_role_option_4" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                    <div class="fw-bolder text-gray-800">Trial</div>
                                                    <div class="text-gray-600">Best for people who need to preview content
                                                        data, but don't need to make any updates</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">Abbrechen</button>
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">Speichern</span>
                                            <span class="indicator-progress">Bitte warten...
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
                <!--end::Modal - Update role-->
                <!--begin::Modal - set up 2fa-->
                <div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">{{ trans('Set up 2FA') }}</h2>
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
                                <!--begin::Content-->
                                <form class="form" action="{{ Route('admin.setup2fa') }}" method="GET">
                                    <!--begin::Label-->
                                    <div class="fw-bolder mb-9">
                                        <p class="text-success">Please make sure that the e-mail address is correct and
                                            that you have access to it. After activation, a code is required for each login,
                                            which is sent to the email address below.</p>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{ trans('message.E-Mail') }}</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Eine gültige E-Mailadresse ist notwendig, um die E-Mail zu erhalten."></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" readonly class="form-control form-control-solid"
                                            name="email" placeholder="email" value="{{ $profile->email }}"
                                            required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Separator-->
                                    <div class="separator saperator-dashed my-5"></div>
                                    <!--end::Separator-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                        <button type="submit" class="btn btn-success"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">{{ trans('message.activate') }}</span>
                                            <span class="indicator-progress">Bitte warten...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Content-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Add task-->
                <!--begin::Modal - Add task-->
                <div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Einmal-Passwort aktivieren</h2>
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
                                <form class="form" id="kt_modal_add_one_time_password_form">
                                    <!--begin::Label-->
                                    <div class="fw-bolder mb-9">Geben Sie Ihre neue E-Mail Adresse ein, um eine E-Mail zum
                                        Kennwort zurücksetzen zu erhalten.</div>
                                    <!--end::Label-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">
                                            <span class="required">E-Mail</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Eine gültige E-Mailadresse ist notwendig, um die E-Mail zu erhalten."></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" class="form-control form-control-solid"
                                            name="otp_email_new" placeholder="e.smith@mustermann-gmbh.de"
                                            value="" required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Separator-->
                                    <div class="separator saperator-dashed my-5"></div>
                                    <!--end::Separator-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">
                                            <span class="required">alte E-Mail</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" class="form-control form-control-solid"
                                            name="otp_email_old" value="emma@mustermann-gmbh.de" readonly="readonly"
                                            required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">
                                            <span class="required">Passwort eingeben</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="password" class="form-control form-control-solid"
                                            name="otp_confirm_password" value="" required />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">Abbrechen</button>
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">Speichern</span>
                                            <span class="indicator-progress">Bitte warten...
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
                <!--end::Modal - Add task-->
                <!-- deactivate 2fa -->
                <div class="modal fade" id="deactivate_2fa" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">{{ trans('Deactivate 2FA') }}</h2>
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
                                <!--begin::Content-->
                                <div class="fw-bolder mb-9">
                                    <p class="text-danger">Are you sure you want to disable 2FA? Disabling has an impact
                                        on the security of your account.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-light me-3"
                                    data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                <a href="{{ Route('admin.deactivate2fa', $profile->email) }}"
                                    class="btn btn-danger">{{ trans('message.Deactivate') }}</a>
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
