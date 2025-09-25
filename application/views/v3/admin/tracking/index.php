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
        <?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Tracking', 'List Tracking']]); ?>
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
            'module' => 'tracking',
            'placeholder' => 'Search Package'
          ]); ?>
          <!--begin::Card Search Bar-->
          <!--begin::Card toolbar-->
          <?php $this->load->view('v3/admin/_partials/toolbar', [
            'show_add_button'  => true,
            'show_edit_button' => true,
            'add_url'          => base_url('admin/tracking/create')
          ]); ?>
          <!--end::Card toolbar-->  
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
          <!--begin::Table-->
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_tracking">
            <thead>
              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-90px text-start">Actions</th>
                <th class="min-w-150px text-start">AIRWAYBILL</th>
                <th class="min-w-120px">Date</th>
                <th class="min-w-120px">Outbound</th>
                <th class="min-w-150px text-center">Received in HO</th>
                <th class="min-w-120px">Release</th>
                <th class="min-w-130px text-center">Status</th>
                <th class="min-w-150px">Sender</th>
                <th class="min-w-150px">Receiver</th>
                <th class="min-w-300px">Address</th>
                <th class="min-w-150px text-center">Postal Code</th>
                <th class="min-w-140px">City</th>
                <th class="min-w-180px">Phone Number</th>
                <th class="min-w-130px">Country</th>
                <th class="min-w-150px">Package</th>
                <th class="min-w-150px text-center">Actual Weight</th>
                <th class="min-w-150px text-center">Weight Charge</th>
                <th class="min-w-150px text-start">Shipping Cost</th>
                <th class="min-w-100px text-start">Paid</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                <tr>
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