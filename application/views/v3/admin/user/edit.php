<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Edit User</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">User</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Edit User</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Contacts App- Add New Contact-->
            <div class="row g-7 justify-content-center">
                <!--begin::Content-->
                <div class="col-xl-6">
                    <!--begin::Contacts-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <i class="ki-duotone ki-badge fs-1 me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                                <h2>User Form</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Form-->
                            <form id="kt_ecommerce_settings_general_form" class="form" action="<?= base_url('v3/admin/user/update/' . $user->code) ?>" method="post">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Name</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="name" value="<?= $user->nama ?>" />
                                    <?= form_error('name', '<div class="text-danger">', '</div>'); ?>

                                    <!--end::Input-->
                                </div>

                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label for="is_active" class="col-sm-3 col-form-label">Status</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input"
                                            type="checkbox"
                                            id="is_active"
                                            name="is_active"
                                            value="1"
                                            <?= set_checkbox('is_active', '1', true) ?>>
                                        <label class="form-check-label" for="is_active">
                                            Active Account
                                        </label>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class='separator separator-dashed my-5'></div>

                                <!--begin::Roles-->
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="user_role" type="radio" value="OPS" id="kt_modal_update_role_option_0" checked='checked' />
                                        <!--end::Input-->

                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_modal_update_role_option_0">
                                            <div class="fw-bold text-gray-800">OPS</div>
                                            <div class="text-gray-600">Operational</div>
                                        </label>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Radio-->

                                </div>
                                <!--end::Input row-->

                                <div class='separator separator-dashed my-5'></div>
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="user_role" type="radio" value="CS" id="kt_modal_update_role_option_1" />
                                        <!--end::Input-->

                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_modal_update_role_option_1">
                                            <div class="fw-bold text-gray-800">CS</div>
                                            <div class="text-gray-600">Customer Service</div>
                                        </label>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Input row-->

                                <div class='separator separator-dashed my-5'></div>
                                <!--end::Roles-->

                                <!--begin::Action buttons-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="<?= base_url('v3/admin/user') ?>" class="btn btn-light me-3">Cancel</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary">
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
                </div>
                <!--end::Content-->
            </div>
            <!--end::Contacts App- Add New Contact-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->