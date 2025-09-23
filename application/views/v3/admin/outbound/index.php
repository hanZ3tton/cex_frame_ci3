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
            'module' => 'outbound',
            'placeholder' => 'Search Package'
          ]); ?>
          <!--begin::Card Search Bar-->
          <!--begin::Card toolbar-->
          <?php $this->load->view('v3/admin/_partials/toolbar', [
            'show_add_button' => false,
          ]); ?>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
          <!--begin::Table-->
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_outbound">
            <thead>
              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-90px text-start">Actions</th>
                <th class="min-w-140px">AWB Number</th>
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
              <?php foreach ($orders as $order) : ?>
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
                          href="apps/user-management/users/view.html"
                          class="menu-link px-3">Print Resi</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a
                          href="#"
                          class="menu-link px-3"
                          data-kt-users-table-filter="delete_row">Print Resi Thermal</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                  <td><?= $order->final_connote ?></td>
                  <td class="text-start"><?= date("m/d/Y", strtotime($order->tgl_kirim)) ?></td>
                  <td class="text-center">
                    <i class="ki-duotone ki-check fs-2"></i>
                  </td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td><span class="<?= $order->status_label ?>"><?= $order->status_name ?></span></td>
                  <td><?= $order->ship_name ?></td>
                  <td><?= $order->rec_name ?></td>
                  <td><?= $order->ship_address ?></td>
                  <td class="text-center"><?= $order->rec_postcode ?></td>
                  <td><?= $order->rec_city ?></td>
                  <td><?= $order->rec_phone ?></td>
                  <td><?= $order->origin ?></td>
                  <td><?= $order->desc_of_goods ?></td>
                  <td class="text-center"><?= $order->weight ?></td>
                  <td class="text-center"><?= $order->charge_weight ?></td>
                  <td class="text-start"><?= number_format($order->payment, 0, ",", ".");  ?></td>
                  <td class="text-start"><?= number_format($order->payment, 0, ",", "."); ?></td>
                </tr>
              <?php endforeach ?>
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