<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Add New Inbound</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url('v3/admin/dashboard') ?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Inbound</li>
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
                            <i class="ki-duotone ki-delivery-2 fs-1 me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                                <span class="path9"></span>
                            </i>
                            <h2 class="mb-0">Incoming Package Data Input</h2>
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
                                        <span class="required">Sender name</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the Sender's name.">
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
                                        <span class="required">Phone</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the sender's phone number .">
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
                                <!--begin::Input group-->
                                <div class="fv-row mb-12">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Name of CS Receipt Maker </span>
                                    </label>
                                    <!--end::Label-->
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select id="Package" class="form-select form-select-solid" name="Package" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select Service">
                                            <option value="electronic"></option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Card title-->
                        <div class="card-title d-flex align-items-center mb-6s">
                            <i class="ki-duotone ki-parcel fs-1 me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                            <h2 class="mb-0">Package Photo</h2>
                        </div>
                        <!--end::Card title-->

                        <!--begin::media-->
                        <div class="card card-flush py-4 mb-6">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Package Photo 1</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url("assets/media/svg/files/blank-image.svg");
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url("assets/media/svg/files/blank-image-dark.svg");
                                    }
                                </style>
                                <!--end::Image input placeholder-->
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">
                                    Set the package image. Only *.png, *.jpg
                                    and *.jpeg image files are accepted
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::media-->
                        <!--begin::media-->
                        <div class="card card-flush py-4 mb-6">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Package Photo 2</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url("assets/media/svg/files/blank-image.svg");
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url("assets/media/svg/files/blank-image-dark.svg");
                                    }
                                </style>
                                <!--end::Image input placeholder-->
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">
                                    Set the package image. Only *.png, *.jpg
                                    and *.jpeg image files are accepted
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::media-->
                        <!--begin::media-->
                        <div class="card card-flush py-4 mb-6">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Package Photo 3</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url("assets/media/svg/files/blank-image.svg");
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url("assets/media/svg/files/blank-image-dark.svg");
                                    }
                                </style>
                                <!--end::Image input placeholder-->
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">
                                    Set the package image. Only *.png, *.jpg
                                    and *.jpeg image files are accepted
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::media-->

                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="<?= base_url('v3/admin/inbound') ?>" class="btn btn-light me-3">Cancel</a>
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