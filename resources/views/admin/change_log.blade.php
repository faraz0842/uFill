@extends('admin.master')

@section('content')

<!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    <div class="toolbar" id="kt_toolbar">
                        @php
                                $changelog_version = App\Models\ChangeLog::orderBy('version','DESC')->first();
                            @endphp
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Description-->
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ trans('message.admin') }} > {{ trans('message.changelog')}} {{$changelog_version->version}} </small>
                                <!--end::Description-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <div class="form-group m-3">
                         @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    </div>

                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container - class="container-xxl"-->
                        <div id="kt_content_container" class="container-fluid">
                            <!--begin::Card-->
                            <div class="card card-docs mb-2">
                                <!--begin::Card header-->
                                <div class="card-header cursor-pointer">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bolder m-0">{{ trans('message.update history') }}</h3>
                                    </div>
                                    <!--end::Card title-->
                                    <!--end::Card title-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <!--begin::Add user-->
                                            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#add_new">{{ trans('message.Add New') }}</button>
                                            <!--end::Add user-->
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Card header-->
                                        <!--begin::Modal - Add task-->
                                        <div class="modal fade" id="add_new" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_add_user_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bolder">{{ trans('message.ChangeLog') }}</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                                                        <form  class="form" action="{{Route('admin.changelog.store')}}" method="post" enctype="multipart/form-data">
                                                            @csrf

                                                            <!--begin::Scroll-->
                                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                                data-kt-scroll-offset="300px">

                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.English Title') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Title" value="" />
                                                                    @if($errors->has('title'))
                                                                        <div class="text-danger">{{ $errors->first('title') }}</div>
                                                                        @endif
                                                                    <!--end::Input-->
                                                                </div>

                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.German Title') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="title_de" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Title" value="" />
                                                                    @if($errors->has('title'))
                                                                        <div class="text-danger">{{ $errors->first('title') }}</div>
                                                                        @endif
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.description en') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <div class="fv-row mb-7">
                                                                        <div class="py-5">
                                                                            <textarea  name="description" class="kt_docs_tinymce_basic tox-target" rows="4">

                                                                            </textarea>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.description de') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <div class="fv-row mb-7">
                                                                        <div class="py-5">
                                                                            <textarea  name="description_de" class="kt_docs_tinymce_basic tox-target" rows="4">

                                                                            </textarea>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                    <div class="fv-row mb-7">
                                                                        <!--begin::Label-->
                                                                        <label class=" fw-bold fs-6 mb-2">{{ trans('message.Version') }}</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input type="text" name="version" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="version" value="" />
                                                                        @if($errors->has('version'))
                                                                            <div class="text-danger">{{ $errors->first('version') }}</div>
                                                                            @endif
                                                                        <!--end::Input-->
                                                                    </div>

                                                            </div>
                                                            <!--end::Scroll-->
                                                            <!--begin::Actions-->
                                                            <div class="text-center pt-15">
                                                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">{{ trans('message.save') }}</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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

                                <!--begin::Card Body-->
                                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                                    <!--begin::Changelog-->
                                    <div class="accordion accordion-flush accordion-icon-toggle" id="kt_accordion">
                                        @foreach ($changelog as $key =>  $item)


                                        <!--begin::Item-->
                                        <div class="accordion-item mb-5">
                                            <!--begin::Header-->
                                            @if ($key == 0)
                                                <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v1_0_0{{$key}}" >
                                            @else
                                                <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_v1_0_0{{$key}}" >
                                            @endif

                                                <span class="accordion-icon">
													<!--  begin::Svg Icon | path: icons/duotune/arrows/arr064.svg  -->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
                                                <!--end::Svg Icon-->
                                                </span>
                                                <h3 class="fs-2 text-gray-800 fw-bolder mb-0 ms-4">uFill {{$item->title}}- {{date('d-M-Y', strtotime($item->created_at))}}  {{$item->version}}</h3>
                                            </div>
                                            <!--end::Header-->
                                            <div class="d-flex justify-content-end " data-kt-user-table-toolbar="base">
                                                        <!--begin::Add user-->
                                                        <a href="" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#edit_new{{$item->changelog_id}}"><i class="fa fa-edit"></i></a> &nbsp;
                                                        <a href="{{Route('admin.changelog.delete',$item->changelog_id)}}" class="btn btn-light btn-sm" ><i class="fa fa-trash"></i></a>
                                                        <!--end::Add user-->
                                                    </div>
                                            <!--begin::Body-->
                                            @if ($key == 0)
                                                <div id="kt_accordion_body_v1_0_0{{$key}}" class="fs-6 mt-1 mb-1 py-0 ps-10  show" data-bs-parent="#kt_accordion">
                                            @else
                                                <div id="kt_accordion_body_v1_0_0{{$key}}" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse " data-bs-parent="#kt_accordion">
                                            @endif

                                                <div class="accordion-body ps-0 pt-0">
                                                    {!! session('locale') == 'de' ? $item->description_de : $item->description !!}
                                                    {{-- {!! $item->description !!} --}}
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Modal - Add task-->
                                        <div class="modal fade" id="edit_new{{$item->changelog_id}}" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_add_user_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bolder">{{ trans('message.Edit Changelog') }}</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                                                        <form  class="form" action="{{Route('admin.changelog.update',$item->changelog_id)}}" method="post" enctype="multipart/form-data">
                                                            @csrf

                                                            <!--begin::Scroll-->
                                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                                data-kt-scroll-offset="300px">

                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.English Title') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Title" value="{{$item->title}}" />
                                                                    @if($errors->has('title'))
                                                                        <div class="text-danger">{{ $errors->first('title') }}</div>
                                                                        @endif
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.German Title') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="title_de" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Title" value="{{$item->title}}" />
                                                                    @if($errors->has('title'))
                                                                        <div class="text-danger">{{ $errors->first('title') }}</div>
                                                                        @endif
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.description en') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <div class="fv-row mb-7">
                                                                        <div class="py-5">
                                                                            <textarea name="description" class="kt_docs_tinymce_basic tox-target" rows="4">{{$item->description}}</textarea>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.description de') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <div class="fv-row mb-7">
                                                                        <div class="py-5">
                                                                            <textarea name="description_de" class="kt_docs_tinymce_basic tox-target" rows="4">{{$item->description_de}}</textarea>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class=" fw-bold fs-6 mb-2">{{ trans('message.Version') }}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="version" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="version" value="{{$item->version}}" />
                                                                    @if($errors->has('version'))
                                                                        <div class="text-danger">{{ $errors->first('version') }}</div>
                                                                        @endif
                                                                    <!--end::Input-->
                                                                </div>


                                                            </div>
                                                            <!--end::Scroll-->
                                                            <!--begin::Actions-->
                                                            <div class="text-center pt-15">
                                                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">{{ trans('message.save') }}</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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

                                        @endforeach
                                    </div>
                                    <!--end::Changelog-->
                                    <!--begin::Card-->
                                    <div class="card mt-10 mb-4 bg-light text-center">
                                        <h3 class="text-gray-800 w-bolder mt-12">{{ trans('message.Follow uFill') }}!</h3>
                                        <!--begin::Body-->
                                        <div class="card-body pb-12 pt-0">
                                            <!--begin::Icon-->
                                            <a href="{{ $company_data->facebook_link }}" class="mx-4">
                                                <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}"
                                                    class="h-30px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="{{ $company_data->instagram_link }}" class="mx-4">
                                                <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}"
                                                    class="h-30px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="{{ $company_data->twitter_link }}" class="mx-4">
                                                <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}"
                                                    class="h-30px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="{{ $company_data->youtube_link }}" class="mx-4">
                                                <img src="{{ asset('assets/media/svg/brand-logos/youtube-3.svg') }}"
                                                    class="h-30px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Card Body-->
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

<script src="{{asset('assets/js/custom/documentation/editors/quill/basic.js')}}"></script>

@endsection
