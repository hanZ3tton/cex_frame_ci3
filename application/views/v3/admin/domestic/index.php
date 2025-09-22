<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Exsys Shipment</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Domestic', 'Exsys Shipment']]); ?>
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
            'module' => 'domestic',
            'placeholder' => 'Search Package'
          ]); ?>
          <!--begin::Card Search Bar-->
          <!--begin::Card toolbar-->
          <?php $this->load->view('v3/admin/_partials/toolbar', [
            'show_add_button'  => true,
            'show_edit_button' => true,
            'add_url'          => base_url('admin/inbound/create')
          ]); ?>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <!-- Bagian body dari card, dengan padding vertikal -->
        <div class="card-body py-4">
          <!-- Tabel dengan styling yang responsif dan rata tengah -->
          <table class="table align-middle text-truncate table-row-dashed fs-6 gy-5" id="kt_table_domestic">
            <!-- Header tabel -->
            <thead>
              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <!-- Kolom untuk checkbox -->
                <th class="w-10px pe-2">
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_domestic .form-check-input" value="1" />
                  </div>
                </th>
                <!-- Kolom header lainnya -->
                <th class="min-w-125px">Code</th>
                <th class="min-w-125px">Status</th>
                <th class="min-w-125px">Confirm Status</th>
                <th class="min-w-125px">Account</th>
                <th class="min-w-125px">Request Date</th>
                <th class="min-w-125px">AirwayBill</th>
                <th class="min-w-125px">Vendor</th>
                <th class="min-w-125px">Shipper</th>
                <th class="min-w-125px">Receiver</th>
                <th class="min-w-125px">Created At</th>
                <th class="min-w-125px">Created By</th>
                <th class="min-w-125px">Modified At</th>
                <th class="min-w-125px">Modified By</th>
              </tr>
            </thead>
            <!-- Body tabel -->
            <tbody class="text-gray-600 fw-semibold">
              <!-- Baris data contoh -->
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1" />
                  </div>
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