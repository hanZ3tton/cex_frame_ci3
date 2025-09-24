<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Create Cleansing Code</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url('v3/admin/order/index') ?>" class="text-muted text-hover-primary">Not Completed</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Create Order Cleansing</li>
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
                    <form id="order_form" class="form" action="<?= base_url('v3/admin/order/insert_order_data/' . $awb) ?>" method="post">
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
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the sender name.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="sender_name" value="<?= $order->ship_name ?>" />
                                    <?= form_error('sender_name', '<div class="text-danger">', '</div>'); ?>
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
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="sender_phone" value="<?= $order->ship_phone ?>" />
                                    <?= form_error('sender_phone', '<div class="text-danger">', '</div>'); ?>
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
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the address.">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="sender_address"><?= $order->ship_address ?></textarea>
                            <?= form_error('sender_address', '<div class="text-danger">', '</div>'); ?>

                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center">
                            <i class="ki-duotone ki-delivery-3 fs-1 me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
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
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter recipient the name.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="recipient_name" value="<?= $order->rec_name ?>" />
                                    <?= form_error('recipient_name', '<div class="text-danger">', '</div>'); ?>

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
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="recipient_phone" value="<?= $order->rec_phone ?>" />
                                    <?= form_error('recipient_phone', '<div class="text-danger">', '</div>'); ?>
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
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the ARC Number.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="arc_no" value="<?= $arc = $order->arc_no ?  $order->arc_no : '-' ?>" />
                                    <?= form_error('arc_no', '<div class="text-danger">', '</div>'); ?>
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
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the postal code.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="postal_code" value="<?= $order->rec_postcode ?>" />
                                    <?= form_error('postal_code', '<div class="text-danger">', '</div>'); ?>
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
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's city of residence.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="city" value="<?= $order->rec_city ?>" />
                                    <?= form_error('city', '<div class="text-danger">', '</div>'); ?>
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
                                            <option>Select Country</option>
                                            <?php foreach ($destinations as $destination): ?>
                                                <?php $country = strtoupper($destination->name) ?>
                                                <option value="<?= $country ?>" <?= ($country == $order->destination) ? 'selected' : '';  ?>><?= $destination->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <?= form_error('country', '<div class="text-danger">', '</div>'); ?>
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
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter recipient address).">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="recipient_address"><?= $order->rec_address ?></textarea>
                            <?= form_error('recipient_address', '<div class="text-danger">', '</div>'); ?>

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
                                    <select id="package" class="form-select form-select-solid" name="package" data-kt-ecommerce-settings-type="" data-placeholder="Select Package Type">
                                        <option value="">Pick the Package Type</option>
                                        <?php foreach ($category as $categories): ?>
                                            <option value="<?= $categories->text ?>" <?= ($categories->text == $order->jenis_paket) ? 'selected' : '' ?>><?= $categories->text ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <?= form_error('package', '<div class="text-danger">', '</div>'); ?>

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
                                    <input type="number" class="form-control form-control-solid" name="length" value="<?= $order->length ?>" />
                                    <?= form_error('length', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <!--end::Col Length-->

                            <!--begin::Col Width-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Width</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="width" value="<?= $order->width ?>" />
                                    <?= form_error('width', '<div class="text-danger">', '</div>'); ?>

                                </div>
                            </div>
                            <!--end::Col Width-->

                            <!--begin::Col Height-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Height</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="height" value="<?= $order->height ?>" />
                                    <?= form_error('height', '<div class="text-danger">', '</div>'); ?>

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
                                    <input type="text" class="form-control form-control-solid" name="weight" value="<?= $weight = $order->weight ? $order->weight : "0."  ?>" />
                                    <?= form_error('weight', '<div class="text-danger">', '</div>'); ?>

                                </div>
                            </div>
                            <!--end::Col -->

                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Colli Total</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="colli" value="1" />
                                    <?= form_error('colli', '<div class="text-danger">', '</div>'); ?>
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
                                        <select id="service" class="form-select form-select-solid" name="service" data-placeholder="Select Service">
                                            <option value="">Select Service</option>
                                            <?php foreach ($services as $service => $value): ?>
                                                <option value="<?= $value ?>" <?= ($value == $order->service) ? 'selected' : '' ?>><?= $service ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <?= form_error('service', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Refference Number</span>
                                    </label>
                                    <input type="Text" class="form-control form-control-solid" name="refference" value="<?= $reff = $order->connote_reff ? $order->connote_reff : '-' ?> " />
                                    <?= form_error('refference', '<div class="text-danger">', '</div>'); ?>

                                </div>
                            </div>
                            <!--end::Col -->
                        </div>
                        <!--end::Row-->
                    </form>
                    <!--end::Form-->

                    <form action="<?= base_url('v3/admin/order/insert_detail_item/' . $awb) ?>" method="post" id="item_detail">
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center mb-5">
                            <i class="ki-duotone ki-parcel fs-1 me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
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
                                        <select id="package_detail" class="form-select form-select-solid" name="package_detail" data-kt-ecommerce-settings-type="" data-placeholder="Select Package Type">
                                            <option value="">Pick the Package Type</option>
                                            <?php foreach ($category as $categories): ?>
                                                <option value="<?= $categories->text ?>"><?= $categories->text ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <?= form_error('package_detail', '<div class="text-danger">', '</div>'); ?>
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
                                    <input type="text" class="form-control form-control-solid" name="item_name" value="" />
                                    <?= form_error('item_name', '<div class="text-danger">', '</div>'); ?>
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
                                    <input type="number" class="form-control form-control-solid" name="qty" value="" />
                                    <?= form_error('qty', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <!--end::Col -->

                            <!--begin::Col-->
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Value(USD)</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="value" value="" />
                                    <?= form_error('value', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <!--end::Col -->

                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-6">
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary" form="item_detail">
                                <span class="indicator-label">Save</span>
                            </button>
                        </div>
                        <!--end::Row-->
                    </form>
                    <!--begin::Separator-->
                    <div class="separator mb-6"></div>
                    <!--end::Separator-->

                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th>Action</th>
                                <th class="min-w-15px text-start">AWB</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Value(USD)</th>
                                <th>Total Price(USD)</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <?php

                            foreach ($detail_item as $item) : ?>
                                <tr>
                                    <td class="text-start">
                                        <div class="d-flex justify-content-end gap-2">
                                            <a
                                                href="<?= base_url('v3/admin/order/delete_detail_item/' . $item->cleansing_code . '/' . $item->code) ?>"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-start"><?= $item->cleansing_code ?></td>
                                    <td><?= $item->goods_type ?></td>
                                    <td><?= $item->goods_category ?></td>
                                    <td><?= $item->qty ?></td>
                                    <td><?= $item->price ?></td>
                                    <td><?= $item->qty *  $item->price ?></td>

                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                    <!--begin::Action buttons-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="<?= base_url('v3/admin/order') ?>" class="btn btn-light me-3">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" data-kt-contacts-type="submit" form="order_form" class="btn btn-primary">
                            <span class="indicator-label">Save</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Action buttons-->

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