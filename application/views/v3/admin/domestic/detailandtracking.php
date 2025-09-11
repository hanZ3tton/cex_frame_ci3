<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Tracking Information</h1>
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

                            <h2 class="mb-0">Shipping Details (Local Order)</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 row-cols-lg-2 g-5">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Shipment Code</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="shipment_code" value="JO0313778494" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Order ID</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="order_id" value="JNT20250620152412" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 row-cols-lg-2 g-5">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Input group-->
                                <div class="fv-row justify-content-center mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Service Type</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-light-primary fw-bold me-2">Dropoff Service</span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>

                            <div class="col-lg-2">
                                <!--begin::Input group-->
                                <div class="fv-row justify-content-center mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Status</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-light-danger fw-bold me-2">Order Canceled</span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::row-->
                        <div class="row row-cols-1 row-cols-lg-4 g-5">
                            <!--begin::Col-->
                            <div class="col-lg-3">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Item Name</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="item_name" value="Baju" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-3">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Goods Description</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="goods_description" value="Baju" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-3">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Quantity</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="quantity" value="1" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-3">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Express Type</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="express_type" value="1" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::row-->
                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Weight</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="weight" value="1.00 kg" readonly />
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
                                        <span>Goods Value</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="goods_value" value="100000" readonly />
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
                                        <span>Insurance</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="insurance" value="200.00" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::row-->
                        
                        <div class="row row-cols-1 g-5">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Order Date</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="order_date" value="2025-06-20 15:24:12" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Updated At</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="updated_at" value="2025-06-25 10:02:07" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Created At</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="created_at" value="2025-06-20 08:24:14" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::row-->

                        <!--end::Col-->
                        <!--end::Separator-->
                                                <div class="separator mb-6"></div>
                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center">
                            <h2 class="mb-0">Receiver</h2>
                        </div>
                        
                        <!--end::Card title-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 g-5">
                            <!--begin::Col for Province-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Receiver Province</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-control-solid" data-control="select2" data-placeholder="Select Province">
                                        <option label="Label" value=""></option>
                                        <option value="1">NANGGROE ACEH DARUSSALAM</option>
                                    </select>
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
                                        <span class="required">Receiver City</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-control-solid" data-control="select2" data-placeholder="Select City">
                                        <option label="Label" value=""></option>
                                    </select>
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
                                        <span class="required">Receiver District</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-control-solid" data-control="select2" data-placeholder="Select District">
                                        <option label="Label" value=""></option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->

                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center mb-5">
                            <h2 class="mb-0">Detail Information</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Notice-->
                        <!--end::Notice-->

                        <!--begin::Col-->
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 row-cols-lg-2 g-5">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Service Type</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-control-solid" data-control="select2" data-placeholder="Select Service">
                                        <option label="Label" value=""></option>
                                        <option value="1">Pickup Service</option>
                                        <option value="1">Drop Off Service</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 g-5">
                            <!--begin::Col for Province-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Item Name</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="item_name" placeholder="Item Name"/>
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
                                        <span class="required">Goods Description</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="goods_description" placeholder="Goods Description"/>
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
                                        <span class="required">Goods Value</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" class="form-control form-control-solid" name="goods_value" placeholder="Enter goods value" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Insurance Value</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="account" value="0" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--end::Input-->
                            </div>

                        </div>
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->

                        <!--begin::Input group-->

                        <div class="card-title d-flex align-items-center mb-5">
                            <h2 class="mb-0">Package Information</h2>
                        </div>

                        <!-- Main container for the form section -->
                        <div class="row g-9 mb-7">
                            <!-- Length input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Length</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="length" placeholder="Enter Length Value" />
                                </div>
                            </div>
                            <!-- Width input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Width</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="width" placeholder="Enter Width Value" />
                                </div>
                            </div>
                            <!-- Height input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Height</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="height" placeholder="Enter Height Value" />
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
                                    <input type="number" class="form-control form-control-solid" name="weight" placeholder="Enter Weight Value" />
                                </div>
                            </div>
                            <!-- Total Qty input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Total Qty</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="total_qty" placeholder="Enter Total Qty Value" />
                                </div>
                            </div>
                        </div>
                        <!-- Third row for Cost and Calculate Button -->
                        <div class="row g-9 mb-7">
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Cost</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" class="form-control form-control-solid" name="cost" value="0" readonly />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row d-flex align-items-end">
                                <div class="fv-row">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-primary me-3">
                                        Calculate Cost
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>                  
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <div class="card-title d-flex align-items-center mb-5">
                            <h2 class="mb-0">Shipper Information</h2>
                        </div>

                        <!-- Main container for the form section -->
                        <!-- Main container for the form section -->
                        <div class="row g-9 mb-7">
                            <!-- Shipper Name input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Shipper Name</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="shipper_name" placeholder="Enter Shipper Name" />
                                </div>
                            </div>
                            <!-- Shipper Contact input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Shipper Contact</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="shipper_contact" placeholder="Enter Shipper Contact" />
                                </div>
                            </div>
                            <!-- Shipper Phone input column -->
                            <div class="col-md-4 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Shipper Phone</span>
                                    </label>
                                    <input type="tel" class="form-control form-control-solid" name="shipper_phone" placeholder="Enter Shipper Phone" />
                                </div>
                            </div>
                        </div>
                        <!-- Second row for Sender Address -->
                        <div class="row g-9 mb-7">
                            <!-- Sender Address textarea column -->
                            <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Sender Address</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="sender_address" rows="4" placeholder="Enter Sender Address"></textarea>
                            </div>
                        </div>
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <div class="card-title d-flex align-items-center mb-5">
                            <h2 class="mb-0">Receiver Information</h2>
                        </div>

                        <!-- Main container for the form section -->
                        <!-- Main container for the form section -->
                        <div class="row g-9 mb-7">
                            <!-- Receiver Name input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Receiver Name</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="receiver_name" placeholder="Enter Receiver Name" />
                                </div>
                            </div>  
                            <!-- Receiver Phone input column -->
                            <div class="col-md-6 fv-row">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Receiver Phone</span>
                                    </label>
                                    <input type="tel" class="form-control form-control-solid" name="receiver_phone" placeholder="Enter Receiver Phone" />
                                </div>
                            </div>
                        </div>
                        <!-- Receiver Address and Shipper Zip section -->
                        <div class="row g-9 mb-7">
                            <!-- Receiver Address textarea column -->
                            <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Receiver Address</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="receiver_address" rows="4" placeholder="Enter Receiver Address"></textarea>
                            </div>
                            <!-- Shipper Zip input column -->
                            <div class="col-md-5 fv-row mt-7">
                                <div class="fv-row">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Shipper Zip</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="shipper_zip" placeholder="Enter Shipper Zip" />
                                </div>
                            </div>
                        </div>
                        <!-- Third row for Cost and Calculate Button -->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end">
							<a href="<?= base_url('v3/admin/domestic/index') ?>" class="btn btn-light me-3" data-kt-contacts-type="cancel">Cancel</a>
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