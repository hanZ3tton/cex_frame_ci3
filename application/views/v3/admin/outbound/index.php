<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">List Order Outbound</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Shipment', 'List Order']]); ?>
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
            'module' => 'inbound',
            'placeholder' => 'Search Package'
          ]); ?>
          <!--begin::Card Search Bar-->
          <!--begin::Card toolbar-->
          <?php $this->load->view('v3/admin/_partials/toolbar', [
            'show_add_button' => false,
            'show_edit_button' => false,
          ]); ?>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
          <!--begin::Table-->
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_outbounds">
            <thead>
              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_outbounds .form-check-input" value="1" />
                  </div>
                </th>
                <th class="min-w-125px">AWB Number</th>
                <th class="min-w-125px">Date</th>
                <th class="min-w-125px">Outbound</th>
                <th class="min-w-125px">Received in HO</th>
                <th class="min-w-125px">Release</th>
                <th class="min-w-125px">Status</th>
                <th class="min-w-125px">Sender</th>
                <th class="min-w-125px">Receiver</th>
                <th class="min-w-125px">Address</th>
                <th class="min-w-125px">Postal Code</th>
                <th class="min-w-125px">City</th>
                <th class="min-w-125px">Phone Number</th>
                <th class="min-w-125px">Country</th>
                <th class="min-w-125px">Package</th>
                <th class="min-w-125px">Actual Weight</th>
                <th class="min-w-125px">Weight Charge</th>
                <th class="min-w-125px">Shipping Cost</th>
                <th class="min-w-125px">Paid</th>
                <th class=" text-end min-w-100px">Actions</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
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