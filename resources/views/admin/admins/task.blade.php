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
                        {{ trans('message.user_management') }} > {{ trans('message.user') }} >
                        {{ session('name') }}</small>
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
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container - class="container-xxl"-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-5 mb-xl-8 ">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-4 ">
                        <h3 class="card-title align-items-start flex-column ">
                            <span class="fw-bolder mb-2 text-dark ">{{ trans('message.My to do list') }}</span>
                            <span class="text-muted fw-bold fs-7 ">{{ trans('message.Total:') }} {{ $open_tasks }}
                                {{ trans('message.open tasks') }}</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip " data-bs-placement="top "
                            data-bs-trigger="hover " title="Weitere Aufgaben hinzufügen... ">
                            <a href="javascript:" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_new_task">{{ trans('message.Add a Task') }}</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2 overflow-auto h-550px ">
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
                                    <input id="is_checked_{{ $task->task_id }}" class="form-check-input" type="checkbox"
                                        onclick="changeTaskStatus([{{ $task->task_id }},'is_checked_{{ $task->task_id }}','title_{{ $task->task_id }}'])"
                                        {{ $task->status == 'complete' ? 'checked' : '' }}>
                                </div>
                                <!--end::Checkbox-->
                                <!--begin::Details-->
                                <div class="flex-grow-1">
                                    @if ($task->status == 'complete')
                                        <a href="javascript:" class="fs-6 fw-bolder text-gray-900 text-hover-primary"
                                            style="text-decoration:line-through"
                                            id="title_{{ $task->task_id }}">{{ $task->title }}</a>
                                    @else
                                        <a href="javascript:" class="fs-6 fw-bolder text-gray-900 text-hover-primary"
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
                                <a href="javascript:" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                    data-bs-toggle="modal" data-bs-target="#kt_modal_edit_task{{ $task->task_id }}">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg " width="24 " height="24 "
                                            viewBox="0 0 24 24 " fill="none ">
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
                                    <span class="svg-icon svg-icon-3">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
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
                            <div class="modal fade" id="kt_modal_edit_task{{ $task->task_id }}" tabindex="-1"
                                aria-hidden="true">
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
                                                <h2 class="fw-bolder">{{ trans('message.edit task') }}</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div id="kt_modal_edit_task_close"
                                                    class="btn btn-icon btn-sm btn-active-icon-primary"
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
                                                    id="kt_modal_edit_task_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                    data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_update_customer_header"
                                                    data-kt-scroll-wrappers="#kt_modal_edit_task_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <!--begin::User toggle-->
                                                    <div class="fw-bolder fs-3 rotate collapsible mb-7"
                                                        data-bs-toggle="collapse" href="#kt_modal_edit_task_info"
                                                        role="button" aria-expanded="false"
                                                        aria-controls="kt_modal_update_customer_user_info">Details
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
                                                    <!--end::User toggle-->
                                                    <!--begin::User form-->
                                                    <div id="kt_modal_edit_task_info" class="collapse show">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2">
                                                                <span class="required">Titel</span>
                                                                <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Wählen Sie einen kurzen aber aussagekräftigen Titel dieser Aufgabe."></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                placeholder="z.B. Unterlagen XY" name="title"
                                                                value="{{ $task->title }}" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2 required">Fällig am</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="date"
                                                                class="form-control form-control-lg form-control-solid mt-2"
                                                                name="due_on" placeholder=""
                                                                value="{{ $task->due_on }}" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2 required">Bearbeiter</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                placeholder="Max Mustermann" name="editor"
                                                                value="{{ $task->editor }}" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2">Kosten
                                                                <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Tragen Sie die Kosten ein, welche für diese Tätigkeit anfallen bzw. eingeplant sind."></i></label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number" class="form-control form-control-solid"
                                                                placeholder="z.B. 150€" name="costs"
                                                                value="{{ $task->costs }}" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2 required">Zugewiesen an</label>
                                                            <!--end::Label-->
                                                            <!--begin::Select-->
                                                            <select name="assigned_to" data-control="select "
                                                                data-hide-search="true "
                                                                data-placeholder="Bitte wählen... "
                                                                class="form-select form-select-solid ">
                                                                <option value="">Bitte wählen...</option>
                                                                @foreach ($client as $item)
                                                                    @php
                                                                        $name = $item->first_name . ' ' . $item->last_name;
                                                                    @endphp
                                                                    @if ($name == $task->assigned_to)
                                                                        <option value="{{ $name }}" selected>
                                                                            {{ $name }}</option>
                                                                    @else
                                                                        <option value="{{ $name }}">
                                                                            {{ $name }}</option>
                                                                    @endif
                                                                @endforeach

                                                            </select>
                                                            <!--end::Select-->
                                                        </div>
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2 required">Priority</label>
                                                            <!--end::Label-->
                                                            <!--begin::Select-->
                                                            <select name="priority" data-control="select "
                                                                data-hide-search="true "
                                                                data-placeholder="Bitte wählen... "
                                                                class="form-select form-select-solid ">
                                                                <option value=" ">Bitte wählen...</option>
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
                                                <button type="reset" data-bs-dismiss="modal"
                                                    class="btn btn-light me-3">Abbrechen</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" id="kt_modal_edit_task_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Speichern</span>
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
                    <!--begin::Modal - New Task-->
                    <div class="modal fade" id="kt_modal_new_task" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Form-->
                                <form class="form" action="{{ Route('client.admin.storetask', session('id')) }}"
                                    method="post">
                                    @csrf
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_new_task_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">{{ trans('message.Add task') }}</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div id="kt_modal_new_task_close"
                                            class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_new_task_scroll"
                                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_update_customer_header"
                                            data-kt-scroll-wrappers="#kt_modal_new_task_scroll"
                                            data-kt-scroll-offset="300px">
                                            <!--begin::User toggle-->
                                            <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                                href="#kt_modal_new_task_info" role="button" aria-expanded="false"
                                                aria-controls="kt_modal_update_customer_user_info">
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
                                            <!--end::User toggle-->
                                            <!--begin::User form-->
                                            <div id="kt_modal_new_task_info" class="collapse show">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-bold mb-2">
                                                        <span class="required">{{ trans('message.Title') }}</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Wählen Sie einen kurzen aber aussagekräftigen Titel dieser Aufgabe."></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="z.B. Unterlagen XY" name="title" value=""
                                                        required />
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
                                                        name="due_on" placeholder="" value="" required />
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
                                                    <input type="text" readonly class="form-control form-control-solid"
                                                        placeholder="Max Mustermann" name="editor"
                                                        value="{{ session('name') }}" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-bold mb-2">{{ trans('message.Costs') }}
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Tragen Sie die Kosten ein, welche für diese Tätigkeit anfallen bzw. eingeplant sind."></i></label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" class="form-control form-control-solid"
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
                                                        <option value="">{{ trans('message.Please choose') }}...
                                                        </option>
                                                        @foreach ($admin as $item)
                                                            <option value="{{ $item->name }}">{{ $item->name }}
                                                            </option>
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
                                                        <option value=" ">{{ trans('message.Please choose') }}...
                                                        </option>
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
                                        <button type="reset" id="kt_modal_new_task_cancel" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" id="kt_modal_new_task_submit" class="btn btn-primary">
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
                </div>
                <!--end:List Widget 3-->
            </div>
            <!--end::Container-->


        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
