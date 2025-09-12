<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Add New Contact</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="index.html" class="text-muted text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Contacts</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Filter menu-->
            <div class="m-0">
                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Filter</a>
                <!--end::Menu toggle-->
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_685c321e5ee62">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Menu separator-->
                    <!--begin::Form-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Status:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_685c321e5ee62" data-allow-clear="true" data-select2-id="select2-data-7-jnes" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option></option>
                                    <option value="1">Approved</option>
                                    <option value="2">Pending</option>
                                    <option value="2">In Process</option>
                                    <option value="2">Rejected</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-2093" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                            <ul class="select2-selection__rendered" id="select2-vsn3-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-vsn3-container" placeholder="Select option" style="width: 100%;"></textarea></span>
                                        </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1">
                                    <span class="form-check-label">Author</span>
                                </label>
                                <!--end::Options-->
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                    <span class="form-check-label">Customer</span>
                                </label>
                                <!--end::Options-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
            </div>
            <!--end::Filter menu-->
            <!--begin::Secondary button-->
            <!--end::Secondary button-->
            <!--begin::Primary button-->
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
            <!--end::Primary button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Content-->
        <div class="col-xl-12">
            <!--begin::Contacts-->
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center">
                            <i class="ki-duotone ki-user fs-1 me-2"> <!-- Ikon user untuk sender -->
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <h2 class="mb-0">Sender Information</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Name</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" name="email" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Phone</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number (optional).">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="phone" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Sender Address</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="notes"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center">
                            <i class="ki-duotone ki-profile-user fs-1 me-2"> <!-- Ikon profile user untuk recipient -->
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <h2 class="mb-0">Recipient Information</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Name</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" name="email" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Phone</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number (optional).">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="phone" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">ARC Number / Recipient ID </span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" name="email" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Postal Code</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number (optional).">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="phone" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>City</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's city of residence (optional).">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="city" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Country</span>
                                    </label>
                                    <!--end::Label-->
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select id="kt_ecommerce_select2_country" class="form-select form-select-solid" name="country" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country">
                                            <option></option>
                                            <option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg">Afghanistan</option>
                                            <option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg">Aland Islands</option>
                                            <option value="AL" data-kt-select2-country="assets/media/flags/albania.svg">Albania</option>
                                            <option value="DZ" data-kt-select2-country="assets/media/flags/algeria.svg">Algeria</option>
                                            <option value="AS" data-kt-select2-country="assets/media/flags/american-samoa.svg">American Samoa</option>
                                            <option value="AD" data-kt-select2-country="assets/media/flags/andorra.svg">Andorra</option>
                                            <option value="AO" data-kt-select2-country="assets/media/flags/angola.svg">Angola</option>
                                            <option value="AI" data-kt-select2-country="assets/media/flags/anguilla.svg">Anguilla</option>
                                            <option value="AG" data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">Antigua and Barbuda</option>
                                            <option value="AR" data-kt-select2-country="assets/media/flags/argentina.svg">Argentina</option>
                                            <option value="AM" data-kt-select2-country="assets/media/flags/armenia.svg">Armenia</option>
                                            <option value="AW" data-kt-select2-country="assets/media/flags/aruba.svg">Aruba</option>
                                            <option value="AU" data-kt-select2-country="assets/media/flags/australia.svg">Australia</option>
                                            <option value="AT" data-kt-select2-country="assets/media/flags/austria.svg">Austria</option>
                                            <option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.svg">Azerbaijan</option>
                                            <option value="BS" data-kt-select2-country="assets/media/flags/bahamas.svg">Bahamas</option>
                                            <option value="BH" data-kt-select2-country="assets/media/flags/bahrain.svg">Bahrain</option>
                                            <option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.svg">Bangladesh</option>
                                            <option value="BB" data-kt-select2-country="assets/media/flags/barbados.svg">Barbados</option>
                                            <option value="BY" data-kt-select2-country="assets/media/flags/belarus.svg">Belarus</option>
                                            <option value="BE" data-kt-select2-country="assets/media/flags/belgium.svg">Belgium</option>
                                            <option value="BZ" data-kt-select2-country="assets/media/flags/belize.svg">Belize</option>
                                            <option value="BJ" data-kt-select2-country="assets/media/flags/benin.svg">Benin</option>
                                            <option value="BM" data-kt-select2-country="assets/media/flags/bermuda.svg">Bermuda</option>
                                            <option value="BT" data-kt-select2-country="assets/media/flags/bhutan.svg">Bhutan</option>
                                            <option value="BO" data-kt-select2-country="assets/media/flags/bolivia.svg">Bolivia, Plurinational State of</option>
                                            <option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.svg">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA" data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">Bosnia and Herzegovina</option>
                                            <option value="BW" data-kt-select2-country="assets/media/flags/botswana.svg">Botswana</option>
                                            <option value="BR" data-kt-select2-country="assets/media/flags/brazil.svg">Brazil</option>
                                            <option value="IO" data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">British Indian Ocean Territory</option>
                                            <option value="BN" data-kt-select2-country="assets/media/flags/brunei.svg">Brunei Darussalam</option>
                                            <option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.svg">Bulgaria</option>
                                            <option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.svg">Burkina Faso</option>
                                            <option value="BI" data-kt-select2-country="assets/media/flags/burundi.svg">Burundi</option>
                                            <option value="KH" data-kt-select2-country="assets/media/flags/cambodia.svg">Cambodia</option>
                                            <option value="CM" data-kt-select2-country="assets/media/flags/cameroon.svg">Cameroon</option>
                                            <option value="CA" data-kt-select2-country="assets/media/flags/canada.svg">Canada</option>
                                            <option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.svg">Cape Verde</option>
                                            <option value="KY" data-kt-select2-country="assets/media/flags/cayman-islands.svg">Cayman Islands</option>
                                            <option value="CF" data-kt-select2-country="assets/media/flags/central-african-republic.svg">Central African Republic</option>
                                            <option value="TD" data-kt-select2-country="assets/media/flags/chad.svg">Chad</option>
                                            <option value="CL" data-kt-select2-country="assets/media/flags/chile.svg">Chile</option>
                                            <option value="CN" data-kt-select2-country="assets/media/flags/china.svg">China</option>
                                            <option value="CX" data-kt-select2-country="assets/media/flags/christmas-island.svg">Christmas Island</option>
                                            <option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.svg">Cocos (Keeling) Islands</option>
                                            <option value="CO" data-kt-select2-country="assets/media/flags/colombia.svg">Colombia</option>
                                            <option value="KM" data-kt-select2-country="assets/media/flags/comoros.svg">Comoros</option>
                                            <option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.svg">Cook Islands</option>
                                            <option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.svg">Costa Rica</option>
                                            <option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.svg">Côte d'Ivoire</option>
                                            <option value="HR" data-kt-select2-country="assets/media/flags/croatia.svg">Croatia</option>
                                            <option value="CU" data-kt-select2-country="assets/media/flags/cuba.svg">Cuba</option>
                                            <option value="CW" data-kt-select2-country="assets/media/flags/curacao.svg">Curaçao</option>
                                            <option value="CZ" data-kt-select2-country="assets/media/flags/czech-republic.svg">Czech Republic</option>
                                            <option value="DK" data-kt-select2-country="assets/media/flags/denmark.svg">Denmark</option>
                                            <option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.svg">Djibouti</option>
                                            <option value="DM" data-kt-select2-country="assets/media/flags/dominica.svg">Dominica</option>
                                            <option value="DO" data-kt-select2-country="assets/media/flags/dominican-republic.svg">Dominican Republic</option>
                                            <option value="EC" data-kt-select2-country="assets/media/flags/ecuador.svg">Ecuador</option>
                                            <option value="EG" data-kt-select2-country="assets/media/flags/egypt.svg">Egypt</option>
                                            <option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.svg">El Salvador</option>
                                            <option value="GQ" data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">Equatorial Guinea</option>
                                            <option value="ER" data-kt-select2-country="assets/media/flags/eritrea.svg">Eritrea</option>
                                            <option value="EE" data-kt-select2-country="assets/media/flags/estonia.svg">Estonia</option>
                                            <option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.svg">Ethiopia</option>
                                            <option value="FK" data-kt-select2-country="assets/media/flags/falkland-islands.svg">Falkland Islands (Malvinas)</option>
                                            <option value="FJ" data-kt-select2-country="assets/media/flags/fiji.svg">Fiji</option>
                                            <option value="FI" data-kt-select2-country="assets/media/flags/finland.svg">Finland</option>
                                            <option value="FR" data-kt-select2-country="assets/media/flags/france.svg">France</option>
                                            <option value="PF" data-kt-select2-country="assets/media/flags/french-polynesia.svg">French Polynesia</option>
                                            <option value="GA" data-kt-select2-country="assets/media/flags/gabon.svg">Gabon</option>
                                            <option value="GM" data-kt-select2-country="assets/media/flags/gambia.svg">Gambia</option>
                                            <option value="GE" data-kt-select2-country="assets/media/flags/georgia.svg">Georgia</option>
                                            <option value="DE" data-kt-select2-country="assets/media/flags/germany.svg">Germany</option>
                                            <option value="GH" data-kt-select2-country="assets/media/flags/ghana.svg">Ghana</option>
                                            <option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.svg">Gibraltar</option>
                                            <option value="GR" data-kt-select2-country="assets/media/flags/greece.svg">Greece</option>
                                            <option value="GL" data-kt-select2-country="assets/media/flags/greenland.svg">Greenland</option>
                                            <option value="GD" data-kt-select2-country="assets/media/flags/grenada.svg">Grenada</option>
                                            <option value="GU" data-kt-select2-country="assets/media/flags/guam.svg">Guam</option>
                                            <option value="GT" data-kt-select2-country="assets/media/flags/guatemala.svg">Guatemala</option>
                                            <option value="GG" data-kt-select2-country="assets/media/flags/guernsey.svg">Guernsey</option>
                                            <option value="GN" data-kt-select2-country="assets/media/flags/guinea.svg">Guinea</option>
                                            <option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.svg">Guinea-Bissau</option>
                                            <option value="HT" data-kt-select2-country="assets/media/flags/haiti.svg">Haiti</option>
                                            <option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.svg">Holy See (Vatican City State)</option>
                                            <option value="HN" data-kt-select2-country="assets/media/flags/honduras.svg">Honduras</option>
                                            <option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.svg">Hong Kong</option>
                                            <option value="HU" data-kt-select2-country="assets/media/flags/hungary.svg">Hungary</option>
                                            <option value="IS" data-kt-select2-country="assets/media/flags/iceland.svg">Iceland</option>
                                            <option value="IN" data-kt-select2-country="assets/media/flags/india.svg">India</option>
                                            <option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">Indonesia</option>
                                            <option value="IR" data-kt-select2-country="assets/media/flags/iran.svg">Iran, Islamic Republic of</option>
                                            <option value="IQ" data-kt-select2-country="assets/media/flags/iraq.svg">Iraq</option>
                                            <option value="IE" data-kt-select2-country="assets/media/flags/ireland.svg">Ireland</option>
                                            <option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.svg">Isle of Man</option>
                                            <option value="IL" data-kt-select2-country="assets/media/flags/israel.svg">Israel</option>
                                            <option value="IT" data-kt-select2-country="assets/media/flags/italy.svg">Italy</option>
                                            <option value="JM" data-kt-select2-country="assets/media/flags/jamaica.svg">Jamaica</option>
                                            <option value="JP" data-kt-select2-country="assets/media/flags/japan.svg">Japan</option>
                                            <option value="JE" data-kt-select2-country="assets/media/flags/jersey.svg">Jersey</option>
                                            <option value="JO" data-kt-select2-country="assets/media/flags/jordan.svg">Jordan</option>
                                            <option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.svg">Kazakhstan</option>
                                            <option value="KE" data-kt-select2-country="assets/media/flags/kenya.svg">Kenya</option>
                                            <option value="KI" data-kt-select2-country="assets/media/flags/kiribati.svg">Kiribati</option>
                                            <option value="KP" data-kt-select2-country="assets/media/flags/north-korea.svg">Korea, Democratic People's Republic of</option>
                                            <option value="KW" data-kt-select2-country="assets/media/flags/kuwait.svg">Kuwait</option>
                                            <option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">Kyrgyzstan</option>
                                            <option value="LA" data-kt-select2-country="assets/media/flags/laos.svg">Lao People's Democratic Republic</option>
                                            <option value="LV" data-kt-select2-country="assets/media/flags/latvia.svg">Latvia</option>
                                            <option value="LB" data-kt-select2-country="assets/media/flags/lebanon.svg">Lebanon</option>
                                            <option value="LS" data-kt-select2-country="assets/media/flags/lesotho.svg">Lesotho</option>
                                            <option value="LR" data-kt-select2-country="assets/media/flags/liberia.svg">Liberia</option>
                                            <option value="LY" data-kt-select2-country="assets/media/flags/libya.svg">Libya</option>
                                            <option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.svg">Liechtenstein</option>
                                            <option value="LT" data-kt-select2-country="assets/media/flags/lithuania.svg">Lithuania</option>
                                            <option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.svg">Luxembourg</option>
                                            <option value="MO" data-kt-select2-country="assets/media/flags/macao.svg">Macao</option>
                                            <option value="MG" data-kt-select2-country="assets/media/flags/madagascar.svg">Madagascar</option>
                                            <option value="MW" data-kt-select2-country="assets/media/flags/malawi.svg">Malawi</option>
                                            <option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">Malaysia</option>
                                            <option value="MV" data-kt-select2-country="assets/media/flags/maldives.svg">Maldives</option>
                                            <option value="ML" data-kt-select2-country="assets/media/flags/mali.svg">Mali</option>
                                            <option value="MT" data-kt-select2-country="assets/media/flags/malta.svg">Malta</option>
                                            <option value="MH" data-kt-select2-country="assets/media/flags/marshall-island.svg">Marshall Islands</option>
                                            <option value="MQ" data-kt-select2-country="assets/media/flags/martinique.svg">Martinique</option>
                                            <option value="MR" data-kt-select2-country="assets/media/flags/mauritania.svg">Mauritania</option>
                                            <option value="MU" data-kt-select2-country="assets/media/flags/mauritius.svg">Mauritius</option>
                                            <option value="MX" data-kt-select2-country="assets/media/flags/mexico.svg">Mexico</option>
                                            <option value="FM" data-kt-select2-country="assets/media/flags/micronesia.svg">Micronesia, Federated States of</option>
                                            <option value="MD" data-kt-select2-country="assets/media/flags/moldova.svg">Moldova, Republic of</option>
                                            <option value="MC" data-kt-select2-country="assets/media/flags/monaco.svg">Monaco</option>
                                            <option value="MN" data-kt-select2-country="assets/media/flags/mongolia.svg">Mongolia</option>
                                            <option value="ME" data-kt-select2-country="assets/media/flags/montenegro.svg">Montenegro</option>
                                            <option value="MS" data-kt-select2-country="assets/media/flags/montserrat.svg">Montserrat</option>
                                            <option value="MA" data-kt-select2-country="assets/media/flags/morocco.svg">Morocco</option>
                                            <option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.svg">Mozambique</option>
                                            <option value="MM" data-kt-select2-country="assets/media/flags/myanmar.svg">Myanmar</option>
                                            <option value="NA" data-kt-select2-country="assets/media/flags/namibia.svg">Namibia</option>
                                            <option value="NR" data-kt-select2-country="assets/media/flags/nauru.svg">Nauru</option>
                                            <option value="NP" data-kt-select2-country="assets/media/flags/nepal.svg">Nepal</option>
                                            <option value="NL" data-kt-select2-country="assets/media/flags/netherlands.svg">Netherlands</option>
                                            <option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.svg">New Zealand</option>
                                            <option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.svg">Nicaragua</option>
                                            <option value="NE" data-kt-select2-country="assets/media/flags/niger.svg">Niger</option>
                                            <option value="NG" data-kt-select2-country="assets/media/flags/nigeria.svg">Nigeria</option>
                                            <option value="NU" data-kt-select2-country="assets/media/flags/niue.svg">Niue</option>
                                            <option value="NF" data-kt-select2-country="assets/media/flags/norfolk-island.svg">Norfolk Island</option>
                                            <option value="MP" data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">Northern Mariana Islands</option>
                                            <option value="NO" data-kt-select2-country="assets/media/flags/norway.svg">Norway</option>
                                            <option value="OM" data-kt-select2-country="assets/media/flags/oman.svg">Oman</option>
                                            <option value="PK" data-kt-select2-country="assets/media/flags/pakistan.svg">Pakistan</option>
                                            <option value="PW" data-kt-select2-country="assets/media/flags/palau.svg">Palau</option>
                                            <option value="PS" data-kt-select2-country="assets/media/flags/palestine.svg">Palestinian Territory, Occupied</option>
                                            <option value="PA" data-kt-select2-country="assets/media/flags/panama.svg">Panama</option>
                                            <option value="PG" data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">Papua New Guinea</option>
                                            <option value="PY" data-kt-select2-country="assets/media/flags/paraguay.svg">Paraguay</option>
                                            <option value="PE" data-kt-select2-country="assets/media/flags/peru.svg">Peru</option>
                                            <option value="PH" data-kt-select2-country="assets/media/flags/philippines.svg">Philippines</option>
                                            <option value="PL" data-kt-select2-country="assets/media/flags/poland.svg">Poland</option>
                                            <option value="PT" data-kt-select2-country="assets/media/flags/portugal.svg">Portugal</option>
                                            <option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.svg">Puerto Rico</option>
                                            <option value="QA" data-kt-select2-country="assets/media/flags/qatar.svg">Qatar</option>
                                            <option value="RO" data-kt-select2-country="assets/media/flags/romania.svg">Romania</option>
                                            <option value="RU" data-kt-select2-country="assets/media/flags/russia.svg">Russian Federation</option>
                                            <option value="RW" data-kt-select2-country="assets/media/flags/rwanda.svg">Rwanda</option>
                                            <option value="BL" data-kt-select2-country="assets/media/flags/st-barts.svg">Saint Barthélemy</option>
                                            <option value="KN" data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">Saint Kitts and Nevis</option>
                                            <option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.svg">Saint Lucia</option>
                                            <option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Saint Martin (French part)</option>
                                            <option value="VC" data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">Saint Vincent and the Grenadines</option>
                                            <option value="WS" data-kt-select2-country="assets/media/flags/samoa.svg">Samoa</option>
                                            <option value="SM" data-kt-select2-country="assets/media/flags/san-marino.svg">San Marino</option>
                                            <option value="ST" data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">Sao Tome and Principe</option>
                                            <option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.svg">Saudi Arabia</option>
                                            <option value="SN" data-kt-select2-country="assets/media/flags/senegal.svg">Senegal</option>
                                            <option value="RS" data-kt-select2-country="assets/media/flags/serbia.svg">Serbia</option>
                                            <option value="SC" data-kt-select2-country="assets/media/flags/seychelles.svg">Seychelles</option>
                                            <option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.svg">Sierra Leone</option>
                                            <option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">Singapore</option>
                                            <option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Sint Maarten (Dutch part)</option>
                                            <option value="SK" data-kt-select2-country="assets/media/flags/slovakia.svg">Slovakia</option>
                                            <option value="SI" data-kt-select2-country="assets/media/flags/slovenia.svg">Slovenia</option>
                                            <option value="SB" data-kt-select2-country="assets/media/flags/solomon-islands.svg">Solomon Islands</option>
                                            <option value="SO" data-kt-select2-country="assets/media/flags/somalia.svg">Somalia</option>
                                            <option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.svg">South Africa</option>
                                            <option value="KR" data-kt-select2-country="assets/media/flags/south-korea.svg">South Korea</option>
                                            <option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.svg">South Sudan</option>
                                            <option value="ES" data-kt-select2-country="assets/media/flags/spain.svg">Spain</option>
                                            <option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.svg">Sri Lanka</option>
                                            <option value="SD" data-kt-select2-country="assets/media/flags/sudan.svg">Sudan</option>
                                            <option value="SR" data-kt-select2-country="assets/media/flags/suriname.svg">Suriname</option>
                                            <option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.svg">Swaziland</option>
                                            <option value="SE" data-kt-select2-country="assets/media/flags/sweden.svg">Sweden</option>
                                            <option value="CH" data-kt-select2-country="assets/media/flags/switzerland.svg">Switzerland</option>
                                            <option value="SY" data-kt-select2-country="assets/media/flags/syria.svg">Syrian Arab Republic</option>
                                            <option value="TW" data-kt-select2-country="assets/media/flags/taiwan.svg">Taiwan, Province of China</option>
                                            <option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.svg">Tajikistan</option>
                                            <option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.svg">Tanzania, United Republic of</option>
                                            <option value="TH" data-kt-select2-country="assets/media/flags/thailand.svg">Thailand</option>
                                            <option value="TG" data-kt-select2-country="assets/media/flags/togo.svg">Togo</option>
                                            <option value="TK" data-kt-select2-country="assets/media/flags/tokelau.svg">Tokelau</option>
                                            <option value="TO" data-kt-select2-country="assets/media/flags/tonga.svg">Tonga</option>
                                            <option value="TT" data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">Trinidad and Tobago</option>
                                            <option value="TN" data-kt-select2-country="assets/media/flags/tunisia.svg">Tunisia</option>
                                            <option value="TR" data-kt-select2-country="assets/media/flags/turkey.svg">Turkey</option>
                                            <option value="TM" data-kt-select2-country="assets/media/flags/turkmenistan.svg">Turkmenistan</option>
                                            <option value="TC" data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">Turks and Caicos Islands</option>
                                            <option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.svg">Tuvalu</option>
                                            <option value="UG" data-kt-select2-country="assets/media/flags/uganda.svg">Uganda</option>
                                            <option value="UA" data-kt-select2-country="assets/media/flags/ukraine.svg">Ukraine</option>
                                            <option value="AE" data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">United Arab Emirates</option>
                                            <option value="GB" data-kt-select2-country="assets/media/flags/united-kingdom.svg">United Kingdom</option>
                                            <option value="US" data-kt-select2-country="assets/media/flags/united-states.svg">United States</option>
                                            <option value="UY" data-kt-select2-country="assets/media/flags/uruguay.svg">Uruguay</option>
                                            <option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.svg">Uzbekistan</option>
                                            <option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.svg">Vanuatu</option>
                                            <option value="VE" data-kt-select2-country="assets/media/flags/venezuela.svg">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN" data-kt-select2-country="assets/media/flags/vietnam.svg">Vietnam</option>
                                            <option value="VI" data-kt-select2-country="assets/media/flags/virgin-islands.svg">Virgin Islands</option>
                                            <option value="YE" data-kt-select2-country="assets/media/flags/yemen.svg">Yemen</option>
                                            <option value="ZM" data-kt-select2-country="assets/media/flags/zambia.svg">Zambia</option>
                                            <option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.svg">Zimbabwe</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Recipient Address</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="notes"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->

                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center mb-5">
                            <i class="ki-duotone ki-delivery fs-1 me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                            <h2 class="mb-0">Shipping Information</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mb-7">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-design-1 fs-2tx text-warning me-4"></i>
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">
                                        Please pay attention when selecting the package type! <br>
                                        If there is any discrepancy between the item description and the selected package type,
                                        <strong>CHOIR EXPRESS PUSAT</strong> reserves the right to re-invoice the difference.
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Col-->
                        <div class="col">
                            <!--begin::Input group-->
                            <div class="fv-row mb-12">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Package Type</span>
                                </label>
                                <!--end::Label-->
                                <div class="w-100">
                                    <!--begin::Select2-->
                                    <select id="Package" class="form-select form-select-solid" name="Package" data-kt-ecommerce-settings-type="" data-placeholder="Select Package Type">
                                        <option value="">Pick the Package Type</option>
                                        <option value="non_garment">Non Garment</option>
                                        <option value="garment">Garment</option>
                                        <option value="extra_sensitive">Extra / Sensitive Items</option>
                                        <option value="electronic">Electronic</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-3">
                            <!--begin::Col Length-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Length</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="length" value="" />
                                </div>
                            </div>
                            <!--end::Col Length-->

                            <!--begin::Col Width-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Width</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="width" value="" />
                                </div>
                            </div>
                            <!--end::Col Width-->

                            <!--begin::Col Height-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Height</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="height" value="" />
                                </div>
                            </div>
                            <!--end::Col Height-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-2">

                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Weight(KG)</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="width" value="" />
                                </div>
                            </div>
                            <!--end::Col -->

                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Colli Total</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="height" value="" />
                                </div>
                            </div>
                            <!--end::Col -->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-2">

                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-12">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Service</span>
                                    </label>
                                    <!--end::Label-->
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select id="Package" class="form-select form-select-solid" name="Package" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select Service">
                                            <option value="electronic">Select Service</option>
                                            <option value="">REGULER</option>
                                            <option value="non_garment">SPECIAL</option>
                                            <option value="garment">EXPRESS</option>
                                            <option value="extra_sensitive">PROMO</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Height</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="height" value="" />
                                </div>
                            </div>
                            <!--end::Col -->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-2">

                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Refference Number</span>
                                    </label>
                                    <input type="Text" class="form-control form-control-solid" name="width" value="" />
                                </div>
                            </div>
                            <!--end::Col -->
                        </div>
                        <!--end::Row-->

                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center mb-5 ">
                            <i class="ki-duotone ki-cube-3 fs-1 me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <h2 class="mb-0">Detailed Item Data</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6 mb-7">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">
                                        Please ensure that the data matches the actual contents of the package. <br>
                                        If there is any intentional discrepancy, all risks to the package
                                        (Loss / Damage) are the responsibility of the sender and not of
                                        <strong>Choir Express</strong>. <br>
                                        In the event of loss or damage, Choir Express will only compensate
                                        based on the invoice value or up to a maximum of <strong>$100</strong>.
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-2">

                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-12">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Package Type</span>
                                    </label>
                                    <!--end::Label-->
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select id="Package" class="form-select form-select-solid" name="Package" data-kt-ecommerce-settings-type="" data-placeholder="Select Package Type">
                                            <option value="">Pick the Package Type</option>
                                            <option value="non_garment">Non Garment</option>
                                            <option value="garment">Garment</option>
                                            <option value="extra_sensitive">Extra / Sensitive Items</option>
                                            <option value="electronic">Electronic</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Item Name</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="height" value="" />
                                </div>
                            </div>
                            <!--end::Col -->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-2">


                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Quantity(PCS)</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="height" value="" />
                                </div>
                            </div>
                            <!--end::Col -->

                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Value(USD)</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="width" value="" />
                                </div>
                            </div>
                            <!--end::Col -->

                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-4">


                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="">Total(USD)</span>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control form-control-solid"
                                            name="total" step="0.01" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->


                        </div>
                        <!--end::Row-->

                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                         <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Action buttons-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
            <!--end::Content-->
        </div>
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/custom/apps/contacts/edit-contact.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->