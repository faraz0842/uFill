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
                        {{ trans('message.User Management') }} > {{ trans('message.admins') }}</small>
                    <!--end::Description-->
                </div>
                <!--end::Page title-->
                <!--begin::Wrapper-->
                {{-- <div class="d-flex align-items-center flex-shrink-0 me-5 py-3">
                                <!--begin::Label-->
                                <span class="fs-7 fw-bolder text-gray-700 pe-4">{{trans('message.Admins')}}:</span>
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
                                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Add new Administrator...">
                                    <a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" id="search" data-kt-user-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-14" placeholder="Search..." />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_user">{{ trans('message.New Administrator') }}</button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-user-table-toolbar="selected">
                                <div class="fw-bolder me-5">
                                    <span class="me-2" data-kt-user-table-select="selected_count"></span>selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-user-table-select="delete_selected">{{ trans('message.Delete selected') }}.</button>
                            </div>
                            <!--end::Group actions-->
                            <!--begin::Modal - Add task-->
                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bolder">{{ trans('message.Add new Administrator') }}</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-bs-dismiss="modal">
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
                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                            <!--begin::Form-->
                                            <form class="form" action="{{ Route('admin.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                    data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-block fw-bold fs-6 mb-5">{{ trans('message.Profile') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-outline"
                                                            data-kt-image-input="true"
                                                            style="background-image: url('{{ asset('assets/media/svg/avatars/blank.svg') }}')">
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg') }});">
                                                            </div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change Image">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="profile_picture"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel--">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Delete Image">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Hint-->
                                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                        <!--end::Hint-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class=" fw-bold fs-6 mb-2">{{ trans('message.First Name') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="first_name"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="Emma" value="{{ old('first_name') }}" />
                                                        @if ($errors->has('first_name'))
                                                            <div class="text-danger">{{ $errors->first('first_name') }}
                                                            </div>
                                                        @endif
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class=" fw-bold fs-6 mb-2">{{ trans('message.Surname') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="surname"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="Smith" value="{{ old('surname') }}" />
                                                        @if ($errors->has('surname'))
                                                            <div class="text-danger">{{ $errors->first('surname') }}</div>
                                                        @endif
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class=" fw-bold fs-6 mb-2">{{ trans('message.E-Mail') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="email" name="email"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="example@domain.com"
                                                            value="{{ old('email') }}" />
                                                        @if ($errors->has('email'))
                                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                                        @endif
                                                        <!--end::Input-->
                                                    </div>

                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class=" fw-bold fs-6 mb-2">{{ trans('message.Password') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="password" name="password"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="Password" value="{{ old('password') }}" />
                                                        @if ($errors->has('password'))
                                                            <div class="text-danger">{{ $errors->first('password') }}
                                                            </div>
                                                        @endif
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class=" fw-bold fs-6 mb-2">{{ trans('message.Phone') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="tel" name="phone"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="+49 541 231 458 1"
                                                            value="{{ old('phone') }}" />
                                                        @if ($errors->has('phone'))
                                                            <div class="text-danger">{{ $errors->first('phone') }}</div>
                                                        @endif
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label
                                                            class=" fw-bold fs-6 mb-2">{{ trans('message.Mobile') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="tel" name="mobile"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="+49 171 231 458 1"
                                                            value="{{ old('mobile') }}" />
                                                        @if ($errors->has('mobile'))
                                                            <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                                        @endif
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row g-9 mb-7">
                                                        <!--begin::Col-->
                                                        <div class="col-md-6 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="fs-6 fw-bold mb-2 ">{{ trans('message.Street') }}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control form-control-solid"
                                                                placeholder="Musterstraße" name="street"
                                                                value="{{ old('street') }}" />
                                                            @if ($errors->has('street'))
                                                                <div class="text-danger">{{ $errors->first('street') }}
                                                                </div>
                                                            @endif
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-6 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="fs-6 fw-bold mb-2 ">{{ trans('message.House Number') }}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control form-control-solid"
                                                                placeholder="12A" name="house_number"
                                                                value="{{ old('house_number') }}" />
                                                            @if ($errors->has('house_number'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('house_number') }}</div>
                                                            @endif
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row g-9 mb-7">
                                                        <!--begin::Col-->
                                                        <div class="col-md-6 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="fs-6 fw-bold mb-2 ">{{ trans('message.Zip Code') }}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input typ="number" class="form-control form-control-solid"
                                                                placeholder="49123" name="zip_code"
                                                                value="{{ old('zip_code') }}" />
                                                            @if ($errors->has('zip_code'))
                                                                <div class="text-danger">{{ $errors->first('zip_code') }}
                                                                </div>
                                                            @endif
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-6 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="fs-6 fw-bold mb-2 ">{{ trans('message.City') }}</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control form-control-solid"
                                                                placeholder="Musterort" name="city"
                                                                value="{{ old('city') }}" />
                                                            @if ($errors->has('city'))
                                                                <div class="text-danger">{{ $errors->first('city') }}
                                                                </div>
                                                            @endif
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-bold mb-2 ">
                                                            <span>{{ trans('message.Country') }}</span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="country" aria-label="Select..."
                                                            data-control="select2" data-placeholder="Select..."
                                                            class="form-select form-select-solid"
                                                            data-dropdown-parent="#kt_modal_add_user">
                                                            <option value="">Bitte wählen...</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Aland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba
                                                            </option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Korea, Democratic People's Republic of
                                                            </option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Lao People's Democratic Republic
                                                            </option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia, Federated States of</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="VC">Saint Vincent and the Grenadines
                                                            </option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela, Bolivarian Republic of
                                                            </option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="VI">Virgin Islands</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                        @if ($errors->has('country'))
                                                            <div class="text-danger">{{ $errors->first('country') }}</div>
                                                        @endif
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-15">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="fs-6 fw-bold mb-2 ">{{ trans('message.Language') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="language" aria-label="Select..."
                                                            data-control="select2" data-placeholder="Select..."
                                                            class="form-select form-select-solid"
                                                            data-dropdown-parent="#kt_modal_add_user">
                                                            <option></option>
                                                            <option value="en">English</option>
                                                            <option value="de">German</option>

                                                        </select>
                                                        @if ($errors->has('language'))
                                                            <div class="text-danger">{{ $errors->first('language') }}
                                                            </div>
                                                        @endif
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3"
                                                        data-bs-dismiss="modal">{{ trans('message.cancel') }}</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">{{ trans('message.save') }}</span>
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
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="card-body py-4 overflow-auto">
                        <!--begin::Table-->
                        <table class="kt_datatable_example_1 table table-row-bordered gy-5">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    {{-- <th class="w-10px pe-2">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                                    </div>
                                                </th> --}}
                                    <th class="min-w-125px">{{ trans('message.ADMIN USER') }}</th>
                                    <th class="min-w-125px text-center">{{ trans('message.Permissions') }}</th>
                                    <th class="min-w-125px text-center">{{ trans('message.LAST LOGGED IN') }}</th>
                                    <th class="min-w-125px text-center">{{ trans('message.2FA') }}</th>
                                    <th class="min-w-125px text-center">{{ trans('message.admin') }}</th>
                                    <th class="min-w-125px text-center">{{ trans('message.Status') }}</th>
                                    <th class="min-w-100px text-center">{{ trans('message.Options') }}</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                @foreach ($admin as $item)
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Checkbox-->
                                        {{-- <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td> --}}
                                        <!--end::Checkbox-->
                                        <!--begin::User=-->
                                        <td class="d-flex ">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <div class="symbol-label">
                                                    @if ($item->profile_picture)
                                                        <img src="{{ URL::asset($item->profile_picture) }}"
                                                            alt="{{ $item->name }}" class="w-100" />
                                                    @else
                                                        <img src="{{ asset('assets/media/svg/avatars/blank.svg') }}"
                                                            alt="{{ $item->name }}" class="w-100" />
                                                    @endif

                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <a
                                                    href="{{ Route('admin.profile', $item->admin_id) }}">{{ $item->name }}<br>{{ $item->email }}</a>
                                                </span>
                                            </div>
                                            <!--begin::User details-->
                                        </td>
                                        <!--end::User=-->
                                        <!--begin::Role=-->
                                        <td class="text-center">Administrator</td>
                                        <!--end::Role=-->
                                        <!--begin::Last login=-->
                                        <td class="text-center">
                                            <div class="badge badge-light fw-bolder">{{ $item->last_logged_in }}</div>
                                        </td>
                                        <!--end::Last login=-->
                                        <!--begin::Two step=-->
                                        <td class="text-center">
                                            @if ($item->istofactor == 1)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </td>
                                        <!--end::Two step=-->
                                        <!--begin::Joined-->
                                        <td class="text-center">Yes</td>
                                        <!--begin::Joined-->
                                        <td class="text-center">
                                            @if ($item->status == 'online')
                                                <span
                                                    class="badge badge-success fs-8 fw-bolder">{{ $item->status }}</span>
                                            @elseif($item->status == 'away')
                                                <span
                                                    class="badge badge-warning fs-8 fw-bolder">{{ $item->status }}</span>
                                            @elseif($item->status == 'busy')
                                                <span class="badge badge-danger fs-8 fw-bolder">{{ $item->status }}</span>
                                            @elseif($item->status == 'do not disturb')
                                                <span class="badge badge-danger fs-8 fw-bolder">{{ $item->status }}</span>
                                            @elseif($item->status == 'offline')
                                                <span class="badge  fs-8 fw-bolder"
                                                    style="background-color: grey">{{ $item->status }}</span>
                                            @endif
                                        </td>

                                        <!--begin::Action=-->
                                        <td class="text-center">
                                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                                data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end">{{ trans('message.Actions') }}
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
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
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                {{-- <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="active_row">Activate</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="deactive_row">Deactivate</a>
                                                        </div> --}}
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ Route('admin.delete', $item->admin_id) }}"
                                                        class="menu-link px-3"
                                                        data-kt-users-table-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                    <!--end::Table row-->
                                @endforeach

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
    {{-- <script type="text/javascript">

        if ($errors->has('first_name') || $errors->has('surname')){
            $( document ).ready(function() {

                $('#kt_modal_add_user').modal('show');

                });
        }


    </script> --}}

    @if (count($errors) > 0)
        <script>
            $(document).ready(function() {
                $('#kt_modal_add_user').modal('show');
            });
        </script>
    @endif
@endsection
