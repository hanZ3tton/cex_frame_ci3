<div class="card-toolbar">
  <!--begin::Toolbar-->
  <div class="d-flex justify-content-end" data-kt-inbound-table-toolbar="base">
    <!--begin::Filter-->
    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
      <i class="ki-duotone ki-filter fs-2">
        <span class="path1"></span>
        <span class="path2"></span>
      </i>Filter</button>
    <!--begin::Menu 1-->
    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
      <!--begin::Header-->
      <div class="px-7 py-5">
        <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
      </div>
      <!--end::Header-->
      <!--begin::Separator-->
      <div class="separator border-gray-200"></div>
      <!--end::Separator-->
      <!--begin::Content-->
      <div class="px-7 py-5" data-kt-inbound-table-filter="form">
        <!--begin::Input group-->
        <div class="mb-10">
          <label class="form-label fs-6 fw-semibold">Role:</label>
          <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-inbound-table-filter="role" data-hide-search="true">
            <option></option>
            <option value="Administrator">Administrator</option>
            <option value="Analyst">Analyst</option>
            <option value="Developer">Developer</option>
            <option value="Support">Support</option>
            <option value="Trial">Trial</option>
          </select>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10">
          <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
          <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-inbound-table-filter="two-step" data-hide-search="true">
            <option></option>
            <option value="Enabled">Enabled</option>
          </select>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="d-flex justify-content-end">
          <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-inbound-table-filter="reset">Reset</button>
          <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-inbound-table-filter="filter">Apply</button>
        </div>
        <!--end::Actions-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Menu 1-->
    <!--end::Filter-->

    <?php if (!empty($show_add_button) && $show_add_button) : ?>
      <!--begin::Add Inbound-->
      <a href="<?= $add_url ?>" class="btn btn-primary">
        <i class="ki-duotone ki-plus fs-2"></i>Add Inbound
      </a>
      <!--end::Add Inbound-->
    <?php endif; ?>

  </div>
  <!--end::Toolbar-->
  <!--begin::Group actions-->
  <div class="d-flex justify-content-end align-items-center d-none" data-kt-inbound-table-toolbar="selected">
    <div class="fw-bold me-5">
      <span class="me-2" data-kt-inbound-table-select="selected_count"></span>Selected
    </div>
    <button type="button" class="btn btn-warning me-2 d-none" data-kt-inbound-table-select="edit_selected">
      Edit
    </button>
    <button type="button" class="btn btn-danger" data-kt-inbound-table-select="delete_selected">
      Delete
    </button>
  </div>
  <!--end::Group actions-->
</div>