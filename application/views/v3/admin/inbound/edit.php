<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"><?= $title ?></h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
          <!--begin::Item-->
          <li class="breadcrumb-item text-muted">
            <a href="index.html" class="text-muted text-hover-primary">Inbound</a>
          </li>
          <!--end::Item-->
          <!--begin::Item-->
          <li class="breadcrumb-item">
            <span class="bullet bg-gray-500 w-5px h-2px"></span>
          </li>
          <!--end::Item-->
          <!--begin::Item-->
          <li class="breadcrumb-item text-muted">Edit Inbound</li>
          <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
      </div>
      <!--end::Page title-->
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
                <h2>User Form</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-5">
              <!--begin::Form-->
              <form id="kt_ecommerce_settings_general_form" class="form" action="<?= base_url('v3/admin/inbound/update') ?>" enctype="multipart/form-data" method="post">
                <!--begin::Input group-->
                <div class="row mb-7">
                  <div class="col-md-6 mb-5">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                      <span>Sender Name</span>
                      <span class="ms-1" data-bs-toggle="tooltip" title="Enter your name">
                        <i class="ki-duotone ki-information fs-7">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          <span class="path3"></span>
                        </i>
                      </span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" name="shipper_name" value="<?= $inbound->shipper_name ?>" />
                    <?= form_error('shipper_name', '<div class="text-danger">', '</div>'); ?>
                  </div>

                  <div class="col-md-6">
                    <label class="fs-6 fw-semibold form-label mt-3">
                      <span>Phone Number</span>
                      <span class="ms-1" data-bs-toggle="tooltip" title="Enter your name">
                        <i class="ki-duotone ki-information fs-7">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          <span class="path3"></span>
                        </i>
                      </span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" name="shipper_phone" value="<?= $inbound->shipper_phone ?>" />
                    <?= form_error('shipper_phone', '<div class="text-danger">', '</div>'); ?>
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-7">
                  <div class="col-md-6 mb-5">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                      <span>Weight</span>
                      <span class="ms-1" data-bs-toggle="tooltip" title="Enter your name">
                        <i class="ki-duotone ki-information fs-7">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          <span class="path3"></span>
                        </i>
                      </span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" name="weight" value="<?= $inbound->weight ?>" />
                    <?= form_error('weight', '<div class="text-danger">', '</div>'); ?>
                  </div>

                  <div class="col-md-6">
                    <label class="fs-6 fw-semibold form-label mt-3">
                      <span>Goods Description</span>
                      <span class="ms-1" data-bs-toggle="tooltip" title="Enter your name">
                        <i class="ki-duotone ki-information fs-7">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          <span class="path3"></span>
                        </i>
                      </span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" name="goods_desc" value="<?= $inbound->goods_desc ?>" />
                    <?= form_error('goods_desc', '<div class="text-danger">', '</div>'); ?>
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-7">
                  <div class="col-md-12">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                      <span>Customer Service</span>
                      <span class="ms-1" data-bs-toggle="tooltip" title="Enter your name">
                        <i class="ki-duotone ki-information fs-7">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          <span class="path3"></span>
                        </i>
                      </span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Default example-->
                    <div class="input-group flex-nowrap">
                      <div class="overflow-hidden flex-grow-1">
                        <select class="form-select rounded-start-0" name="cs" data-control="select2" data-placeholder="Select an option" data-hide-search="true">>
                          <option><?= $inbound->cs ?></option>
                          <?php foreach ($users as $user) : ?>
                            <option value="<?= $user->nama ?>"><?= $user->nama ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                    <!--end::Default example-->
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::media-->
                <div class="card card-flush py-4 mb-6 mt-5">
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
                      .image-placeholder {
                        background-image: url("uploads/<?= $inbound->picture ?>");
                      }

                      [data-bs-theme="dark"] .image-input-placeholder {
                        background-image: url("assets/media/svg/files/blank-image-dark.svg");
                      }
                    </style>
                    <!--end::Image input placeholder-->
                    <div class="image-input image-input-empty image-input-outline image-placeholder mb-3" data-kt-image-input="true">
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
                        <input type="file" name="photo_1" accept=".png, .jpg, .jpeg">
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
                      .image-placeholder {
                        background-image: url("uploads/<?= $inbound->picture ?>");
                      }

                      [data-bs-theme="dark"] .image-input-placeholder {
                        background-image: url("assets/media/svg/files/blank-image-dark.svg");
                      }
                    </style>
                    <!--end::Image input placeholder-->
                    <div class="image-input image-input-empty image-input-outline image-placeholder mb-3" data-kt-image-input="true">
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
                        <input type="file" name="photo_2" accept=".png, .jpg, .jpeg">
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
                      .image-placeholder {
                        background-image: url("uploads/<?= $inbound->picture ?>");
                      }

                      [data-bs-theme="dark"] .image-input-placeholder {
                        background-image: url("assets/media/svg/files/blank-image-dark.svg");
                      }
                    </style>
                    <!--end::Image input placeholder-->
                    <div class="image-input image-input-empty image-input-outline image-placeholder mb-3" data-kt-image-input="true">
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
                        <input type="file" name="photo_3" accept=".png, .jpg, .jpeg">
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

                <!--begin::Action buttons-->
                <div class="d-flex justify-content-end">
                  <!--begin::Button-->
                  <a href="<?= base_url('admin/list_inbound') ?>" class="btn btn-light me-3">Cancel</a>
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