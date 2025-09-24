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
        <?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Data HO', 'Data Cleansing']]); ?>
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
      <!--begin::Card-->
      <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
          <!--begin::Card Search Bar-->
          <?php $this->load->view('v3/admin/_partials/search', [
            'module' => 'data_ho',
            'placeholder' => 'Search Package'
          ]); ?>
          <!--begin::Card Search Bar-->
          <!--begin::Card toolbar-->
          <?php $this->load->view('v3/admin/_partials/toolbar', [
            'show_add_button'  => false,
          ]); ?>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <!-- Bagian body dari card, dengan padding vertikal -->
        <div class="card-body py-4">
          <!-- Tabel dengan styling yang responsif dan rata tengah -->
          <!--Begin::Table-->
          <table class="table align-middle text-truncate table-row-dashed fs-6 gy-5" id="kt_table_data_ho">
            <!-- Header tabel -->
            <thead>
              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-100px">Action</th>
                <th class="min-w-125px">Connote</th>
                <th class="min-w-125px">Status</th>
                <th class="min-w-125px">Receiption Date</th>
                <th class="min-w-125px">Weight</th>
                <th class="min-w-125px">Receiver Name</th>
                <th class="min-w-125px">Receiver Phone</th>
                <th class="min-w-125px">Receiver Address</th>
                <th class="min-w-125px">Receiver City</th>
                <th class="min-w-125px">Postal Code</th>
                <th class="min-w-125px">Country</th>
                <th class="min-w-125px">Qty</th>
                <th class="min-w-125px">Goods Description</th>
                <th class="min-w-125px">Goods Value (USD)</th>
                <th class="min-w-125px">Admin Resi</th>
                <th class="min-w-125px">AirwayBill</th>
              </tr>
            </thead>
            <!-- Body tabel -->
            <tbody class="text-gray-600 fw-semibold">
              <tr>
                <td class="text-center">
                  <a
                    href="#"
                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                    data-kt-menu-trigger="click"
                    data-kt-menu-placement="bottom-end">Actions
                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                  <!--begin::Menu-->
                  <div
                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="<?= base_url('admin/inbound/edit/') ?>"
                        class="menu-link px-3">Edit</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="<?= base_url('admin/inbound/delete/') ?>"
                        class="menu-link px-3"
                        data-kt-users-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu-->
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <!--end::Table-->
        </div>

        <!--end::Card body-->
      </div>
      <!--end::Card-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->
</div>
<!--end::Content wrapper-->