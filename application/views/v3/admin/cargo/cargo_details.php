<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">JNT Express - Create Order</h1>
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

                            <h2 class="mb-5">Sender Information</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Row-->
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 g-5">
                            <!--begin::Col for Province-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Provice</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="SenderProvince" placeholder="DKI Jakarta" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col for City-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender City</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="SenderProvince" placeholder="Jakarta Selatan" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col for District-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Area</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="SenderProvince" placeholder="Mampang Prapatan" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Col-->
                        <!--end::Separator-->
                        
                        <!--end::Card title-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-2 g-5">
                            <!--begin::Col for Province-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Name</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="ReceiverProvince" placeholder="Samuel Toko Choir" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col for City-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Company Name</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="ReceiverCity" placeholder="Samuel Toko Choir" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col for District-->
                        </div>
                        <!--end::Col-->
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 g-5">
                            <!--begin::Col for District-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Email</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="ReceiverCity" placeholder="diniheryani3@gmail.com" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--begin::Col for District-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Phone Number</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="ReceiverCity" placeholder="085961176347" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col for District-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Postal Code</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="ReceiverCity" placeholder="12630" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="row g-9 mb-7">
                            <!-- Receiver Address textarea column -->
                            <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Sender Address</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="SenderAddress" rows="4" placeholder=" Choir Express Pusat Jl. Timbul Raya. 3C & 3D, RT.7/RW.4, Cipedak, Kec. Jagakarsa, Kota Jakarta Selatan, DKI Jakarta 12630 " readonly></textarea>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->

                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center mb-5">
                            <h2 class="mb-4">Receiver Information</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Notice-->
                        <!--end::Notice-->

                        <!--begin::Col-->
                        
                        <!--end::Col-->
                        <!-- Main container for the form section -->
                        <div class="row g-9 mb-7">
                            <!-- Length input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Receiver Province</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="cost" placeholder="DKI Jakarta" readonly />
                                </div>
                            </div>
                            <!-- Width input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Receiver City</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="cost" placeholder="Jakarta Selatan" readonly />
                                </div>
                            </div>
                            <!-- Height input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Receiver Areas</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="cost" placeholder="Jagakarsa" readonly />
                                </div>
                            </div>
                        </div>
                        <!-- Second row for Weight and Total Qty -->
                        <div class="row g-9 mb-7">
                            <!-- Weight input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Name</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="cost" placeholder="CHOIR EXPRESS" readonly />
                                </div>
                            </div>
                            <!-- Total Qty input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Company Name</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="cost" placeholder="CHOIR EXPRESS" readonly />
                                </div>
                            </div>
                        </div>
                        <!-- Third row for Cost and Calculate Button -->
                        <!--end::Col-->
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 g-5">
                            <!--begin::Col for District-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Email</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="ReceiverCity" placeholder="diniheryani3@gmail.com" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--begin::Col for District-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Phone Number</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="ReceiverCity" placeholder="628111353585" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col for District-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Sender Postal Code</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="ReceiverCity" placeholder="diniheryani3@gmail.com" readonly/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="row g-9 mb-7">
                            <!-- Receiver Address textarea column -->
                            <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Sender Address</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="SenderAddress" rows="4" placeholder="Jl. Timbul Raya No. 3C & 3D Rt. 07 Rw. 04 Cipedak - Jagakarsa, Jakarta Selatan, 12630" readonly></textarea>
                            </div>
                        </div>               
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Card title-->              
                        <!--end::Col-->
                        <!-- Main container for the form section -->
                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center mb-5">
                            <h2 class="mb-4">Package Information</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Notice-->
                        <!--end::Notice-->

                        <!--begin::Col-->
                        
                        <!--end::Col-->
                        <!-- Main container for the form section -->
                        <div class="row g-9 mb-7">
                            <!-- Length input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Length</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="length" placeholder="10" readonly />
                                </div>
                            </div>
                            <!-- Width input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Width</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="width" placeholder="10" readonly/>
                                </div>
                            </div>
                            <!-- Height input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Height</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="height" placeholder="10" readonly/>
                                </div>
                            </div>
                        </div>
                        <!-- Second row for Weight and Total Qty -->
                        <div class="row g-9 mb-7">
                            <!-- Weight input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Weight</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="weight" placeholder="7.00" readonly/>
                                </div>
                            </div>
                            <!-- Total Qty input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Total Koli</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="total_qty" placeholder="1" readonly />
                                </div>
                            </div>
                        </div>
                        <!-- Third row for Cost and Calculate Button -->
                        <div class="row g-9 mb-7">
                            <!-- Length input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Item Type</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="total_qty" placeholder="Industrial Electronics" readonly />
                                </div>
                            </div>
                            <!-- Width input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Service Type</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="total_qty" placeholder="Door To Door Pickup" readonly />
                                </div>
                            </div>
                            <!-- Height input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Insurance Value</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" class="form-control form-control-solid" name="cost" placeholder="5000" readonly />
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>                
                        <!--end::Input group-->
                        <!-- Third row for Cost and Calculate Button -->             
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <!-- Third row for Cost and Calculate Button -->             
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <div class="card-title d-flex align-items-center mb-5">
                            <h2 class="mb-4">Item Information</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Notice-->
                        <!--end::Notice-->

                        <!--begin::Col-->
                        
                        <!--end::Col-->
                        <!-- Main container for the form section -->
                        <div class="row g-9 mb-7">
                            <!-- Length input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Item Type</span>
                                    </label>
                                    <input type="select" class="form-control form-control-solid" name="ItemType" placeholder="Others" readonly />
                                </div>
                            </div>
                            <!-- Width input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Item Name</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="ItemName" placeholder="Test" readonly />
                                </div>
                            </div>
                            <!-- Height input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Quantity</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="Quantity" placeholder="1" readonly />
                                </div>
                            </div>
                        </div>
                        <!-- Second row for Weight and Total Qty -->
                        <div class="row g-9 mb-7">
                            <!-- Weight input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Item Value</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="ItemValue" placeholder="1" readonly />
                                </div>
                            </div>
                            <!-- Total Qty input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Currency</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="Currency" placeholder="IDR" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="row g-9 mb-7">
                            <!-- Receiver Address textarea column -->
                            <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Description</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="ItemDescription" rows="4" placeholder="Test" readonly></textarea>
                            </div>
                        </div>
                        <!-- Third row for Cost and Calculate Button -->             
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end mb-6">
                            <a href="<?= base_url('v3/admin/cargo/index') ?>" class="btn btn-danger me-3">
                                <i class="fa fa-close fs-4"></i>Cancel
                            </a>
                            <a href="<?= base_url('v3/admin/cargo/edit_cargo') ?>" class="btn btn-info">
                                <i class="fa fa-save fs-4"></i>Update Shipment
                            </a>
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
</body>
<!--end::Body-->

</html>