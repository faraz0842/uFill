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
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{{{ trans('message.Dashboards > eCommerce > Create Shipment Label') }}}}</small>
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
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ trans('message.Summary') }}</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-5 fs-6">
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">{{ trans('message.From address') }}:</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <span class="symbol symbol-20px me-1">
                                            <img class="rounded-1"
                                                src="https://ufill.devatease.com/assets/media/flags/germany.svg"
                                                alt="">
                                        </span>
                                        <span class="fw-bold text-gray-600">H&B Fashion UG (haftungsbeschränkt),
                                            Wacholderweg 8, 49090 Osnabrück, Germany</span>
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
                                    <h5 class="mb-4">{{ trans('message.To address') }}:</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <span class="symbol symbol-20px me-1">
                                            <img class="rounded-1"
                                                src="https://ufill.devatease.com/assets/media/flags/germany.svg"
                                                alt="">
                                        </span>
                                        <span class="fw-bold text-gray-600">Max Mustermann, Musterweg 1a, 49123
                                            Musterhausen, Germany</span>
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
                                    <h5 class="mb-4">{{ trans('message.To address') }}:</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <span class="fw-bold text-gray-600">DPD Classic 0-5kg</span>
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
                                    <h5 class="mb-4">{{ trans('message.Number of labels') }}:</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <span class="fw-bold text-gray-600">1</span>
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
                                    <h5 class="mb-4">{{ trans('message.Insurance cost') }}:</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <span class="fw-bold text-gray-600">-</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-2">
                                    <!--begin::Title-->
                                    <h5 class="fs-3">{{ trans('message.Total price') }}:<span class="mx-3">4,65€</span></h5>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <div class="form-check form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" id="check_create_another_shipment"
                                        value="1">
                                    <label class="form-check-label">{{ trans('message.Create another shipment') }}</label>
                                </div>
                                <!--begin::Actions-->
                                <div class="mb-0">
                                    <a href="#" class="btn btn-success d-block mb-2 ">{{ trans('message.Create label') }}</a>
                                    <a href="#" class="btn btn-light d-block">{{ trans('message.Cancel') }}</a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ trans('message.Open costs') }}:<span class="mx-3">4,65€</span></h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-5 fs-6">
                                <!--begin::Section-->
                                <div class="mb-2">
                                    <!--begin::Title-->
                                    <span class="fw-bold text-gray-600">{{ trans('message.Note: If you create multiple shipment labels, the
                                        costs are added up and automatically debited upon completion.') }}</span>
                                    <!--end::Title-->
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
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">{{ trans('message.Create a new shipment') }}</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-3">
                                <!--begin::Section-->
                                <div class="mb-4">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">1. {{ trans('message.Sender address') }}:</h5>
                                    <!--begin::Input-->
                                    <select name="sender_addresses" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select..." data-allow-clear="true"
                                        data-hide-search="true">
                                        <option value="1">H&B Fashion UG (haftungsbeschränkt), Wacholderweg 8, 49090
                                            Osnabrück, Germany</option>
                                    </select>
                                    <!--end::Input-->
                                    <!--end::Title-->
                                    <!--begin::User toggle-->
                                    <div class="fw-bolder fs-5 rotate collapsible mt-10 mb-4" data-bs-toggle="collapse"
                                        href="#create_new_sender_address" role="button" aria-expanded="false"
                                        aria-controls="create_new_sender_address">New sender address
                                        <span class="ms-2 rotate-180">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::User toggle-->
                                    <!--begin::User form-->
                                    <div id="create_new_sender_address" class="collapse">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-4">
                                            <!--begin::Label-->
                                            <label class="form-label">{{ trans('message.Company name') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input name="sender_business_name"
                                                class="form-control form-control-lg form-control-solid" value=""
                                                placeholder="Mustermann GmbH" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.First name') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="sender_firstname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Max" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.Last name') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="sender_surname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Mustermann" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-8">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.Street') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="sender_street"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Musterweg" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.House number') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="sender_number"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="1a" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.Zip code') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" name="sender_code"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="49123" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-8">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.State') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="sender_city"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Musterhausen" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-4">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span>{{ trans('message.Country') }}</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="sender_country" aria-label="Select..." data-control="select2"
                                                data-placeholder="Select..." class="form-select form-select-solid"
                                                data-select2-id="select2-data-5-ns4j" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="select2-data-7-n97g">Select...
                                                </option>
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
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
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
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
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
                                                <option value="VC">Saint Vincent and the Grenadines</option>
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
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VI">Virgin Islands</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.Telephone') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="tel" name="sender_phone"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="+49 5451 123 456 7" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.E-Mail') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="email" name="sender_email"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="max@mustermann-gmbh.de" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <div class="form-check form-check-custom form-check-solid mb-8">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="check_use_new_sender_address" value="1">
                                                        <label class="form-check-label">{{ trans('message.Use sender address') }}</label>
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <div class="form-check form-check-custom form-check-solid mb-8">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="check_save_new_sender_address" value="1">
                                                        <label class="form-check-label">{{ trans('message.Save new sender address') }}</label>
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::User form-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200 mb-8"></div>
                                <!--end::Separator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--end::Title-->
                                    <!--begin::User toggle-->
                                    <div class="fw-bolder fs-5 rotate collapsible mb-4" data-bs-toggle="collapse"
                                        href="#create_receiver_address" role="button" aria-expanded="false"
                                        aria-controls="create_receiver_address">2. {{ trans('message.Receiver address') }}
                                        <span class="ms-2 rotate-180">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::User toggle-->
                                    <!--begin::User form-->
                                    <div id="create_receiver_address" class="collapse show">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-4">
                                            <!--begin::Label-->
                                            <label class="form-label required">{{ trans('message.Company name') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input name="receiver_company_name"
                                                class="form-control form-control-lg form-control-solid" value=""
                                                placeholder="Mustermann GmbH" required />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-md-6 col-sm-12 mb-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('message.First name') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="receiver_firstname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Max" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 col-sm-12">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('message.Last name') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="receiver_surname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Mustermann" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-md-8 col-sm-12 mb-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('message.Street') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="receiver_street"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Musterweg" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-4 col-sm-12">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('message.House number') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="receiver_number"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="1a" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('messahe.Zip code') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" name="receiver_code"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="49123" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-8">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('message.Zip code') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="receiver_city"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Musterhausen" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-4">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2 required">
                                                <span>{{ trans('message.Country') }}</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="receiver_country" aria-label="Select..." data-control="select2"
                                                data-placeholder="Select..." class="form-select form-select-solid"
                                                data-select2-id="select2-data-5-ns3j" tabindex="-1" aria-hidden="true"
                                                required>
                                                <option value="" data-select2-id="select2-data-7-n96g">Select...
                                                </option>
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
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
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
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
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
                                                <option value="VC">Saint Vincent and the Grenadines</option>
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
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VI">Virgin Islands</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-md-6 col-sm-12 mb-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('message.Telephone') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="tel" name="receiver_phone"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="+49 5451 123 456 7" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 col-sm-12">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('message.E-Mail') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="email" name="receiver_email"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="max@mustermann-gmbh.de" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::User form-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200 mb-8"></div>
                                <!--end::Separator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--end::Title-->
                                    <!--begin::User toggle-->
                                    <div class="fw-bolder fs-5 rotate collapsible mb-4" data-bs-toggle="collapse"
                                        href="#create_shipment_details" role="button" aria-expanded="false"
                                        aria-controls="create_shipment_details">3. {{ trans('message.Shipment details') }}
                                        <span class="ms-2 rotate-180">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::User toggle-->
                                    <!--begin::User form-->
                                    <div id="create_shipment_details" class="collapse">
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-md-4 col-sm-12 mb-8">
                                                    <!--begin::Label-->
                                                    <label class="form-label required">{{ trans('message.Parcel weight (kg)') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" name="shipment_parcel_weight"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="1 kg" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-8 col-sm-12 mb-4">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.Order number (optional)') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input name="shipment_order_number"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="ORD-123456" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <!--begin::Label-->
                                            <label class="form-label required">{{ trans('message.Dimensions in L x W x H (cm)') }}</label>
                                            <!--end::Label-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <!--begin::Input-->
                                                    <input type="number" name="shipment_package_length"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="1 cm" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <!--begin::Input-->
                                                    <input type="number" name="shipment_package_weight"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="1 cm" required />
                                                    <!--end::Input-->
                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <!--begin::Input-->
                                                    <input type="number" name="shipment_package_height"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="1 cm" required />
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::User form-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200 mb-8"></div>
                                <!--end::Separator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--end::Title-->
                                    <!--begin::User toggle-->
                                    <div class="fw-bolder fs-5 rotate collapsible mb-4" data-bs-toggle="collapse"
                                        href="#create_shipment_items" role="button" aria-expanded="false"
                                        aria-controls="create_shipment_items">4. {{ trans('message.Items') }}
                                        <span class="ms-2 rotate-180">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::User toggle-->
                                    <!--begin::User form-->
                                    <div id="create_shipment_items" class="collapse">
                                        <h5 class="fs-3 text-danger">For shipment package this item function is disabled.
                                            Show this comment: "Upgrade your package to unlock the inventory management."
                                        </h5>
                                        <!--begin::Row-->
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1 mb-4">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                        height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-ecommerce-product-filter="search"
                                                class="form-control form-control-solid ps-14"
                                                placeholder="Produkt suchen..." />
                                        </div>
                                        <!--end::Search-->
                                        <!--begin::Table-->
                                        <div class="table-responsive overflow-auto h-250px">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                                id="kt_ecommerce_products_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="w-10px pe-2">
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                <input class="form-check-input" type="checkbox"
                                                                    data-kt-check="true"
                                                                    data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                                                    value="1" />
                                                            </div>
                                                        </th>
                                                        <th class="min-w-200px">{{ trans('message.Product') }}</th>
                                                        <th class="text-center min-w-100px">{{ trans('message.SKU') }}</th>
                                                        <th class="text-center min-w-70px">{{ trans('message.Available quantity') }}</th>
                                                        <th class="text-center min-w-100px">{{ trans('message.Price') }}</th>
                                                        <th class="text-center min-w-100px">{{ trans('message.Status') }}</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-bold text-gray-600">
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <!--begin::Checkbox-->
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" />
                                                            </div>
                                                        </td>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Category=-->
                                                        <td>
                                                            <div class="d-flex align-items-center">
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
                                                                        data-kt-ecommerce-product-filter="product_name">{{ trans('message.Product') }}
                                                                        1</a>
                                                                    <!--end::Title-->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--end::Category=-->
                                                        <!--begin::SKU=-->
                                                        <td class="text-center pe-0">
                                                            <span class="fw-bolder">03740004</span>
                                                        </td>
                                                        <!--end::SKU=-->
                                                        <!--begin::Qty=-->
                                                        <td class="text-center pe-0" data-order="6">
                                                            <span class="badge badge-light-warning">Low</span>
                                                            <span class="fw-bolder text-warning ms-3">6</span>
                                                        </td>
                                                        <!--end::Qty=-->
                                                        <!--begin::Price=-->
                                                        <td class="text-center pe-0">
                                                            <span class="fw-bolder text-dark">145,95€</span>
                                                        </td>
                                                        <!--end::Price=-->
                                                        <!--begin::Status=-->
                                                        <td class="text-center pe-0" data-order="Inactive">
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-danger">{{ trans('message.Deactivated') }}</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <!--end::Status=-->
                                                    </tr>
                                                    <!--end::Table row-->
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>

                                        </div>
                                        <!--end::Table-->
                                        <!--end::Row-->
                                    </div>
                                    <!--end::User form-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200 mb-8"></div>
                                <!--end::Separator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--end::Title-->
                                    <!--begin::User toggle-->
                                    <div class="fw-bolder fs-5 rotate collapsible mb-4" data-bs-toggle="collapse"
                                        href="#create_shipment_method" role="button" aria-expanded="false"
                                        aria-controls="create_shipment_method">5. {{ trans('message.Shipping method') }}
                                        <span class="ms-2 rotate-180">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::User toggle-->
                                    <!--begin::User form-->
                                    <div id="create_shipment_method" class="collapse">
                                        <!--begin::Row-->
                                        <div class="fv-row mb-4">
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-md-4 col-sm-12 mb-8">
                                                    <!--begin::Label-->
                                                    <label class="form-label">{{ trans('message.Shipping method') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" name="shipment_parcel_weight"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="145,95€" readonly />
                                                    <!--end::Input-->
                                                    <span class="text-gray-400">{{ trans('message.Note: If the value of your package exceeds €520, we recommend additional transport insurance.') }}</span>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-8 col-sm-12">
                                                    <div id="shipment_transport_insurance" class="mb-0">
                                                        <!--begin:Option-->
                                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin::Description-->
                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fw-bolder text-gray-800 text-hover-primary fs-5">{{ trans('message.No Goods Insurance') }}</span>
                                                                    <span class="fs-6 fw-bold text-muted">{{ trans('message.Standard transport insurance if applicable.') }}</span>
                                                                </span>
                                                                <!--end:Description-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="transport_insurance"
                                                                    value="transport_insurance_none" checked>
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin::Description-->
                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fw-bolder text-gray-800 text-hover-primary fs-5">{{ trans('message.Goods Insurance "S"') }}</span>
                                                                    <span class="fs-6 fw-bold text-muted">{{ trans('message.Transport insurance up to 2500€ - from 6€') }}</span>
                                                                </span>
                                                                <!--end:Description-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="transport_insurance"
                                                                    value="transport_insurance_small">
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin::Description-->
                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fw-bolder text-gray-800 text-hover-primary fs-5">{{ trans('message.Goods Insurance "M"') }}</span>
                                                                    <span class="fs-6 fw-bold text-muted">{{ trans('message.Transport insurance up to 25000€ - from 18€') }}</span>
                                                                </span>
                                                                <!--end:Description-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="transport_insurance"
                                                                    value="transport_insurance_medium">
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <div class="fv-row mb-4">
                                            <!--begin::Label-->
                                            <label class="form-label required">{{ trans('message.Shipping method') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="create_shipment_package_type"
                                                class="form-select form-select-lg form-select-solid"
                                                data-control="select2" data-placeholder="Select..."
                                                data-allow-clear="true" data-hide-search="true" required>
                                                <option value="1">DHL Package 0-5kg</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::User form-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Card body-->
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
    <!--end::Content-->
@endsection
