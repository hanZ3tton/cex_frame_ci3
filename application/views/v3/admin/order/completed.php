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
      <?php if ($this->session->flashdata('success')): ?>
        <!--begin::Alert-->
        <div class="alert alert-dismissible bg-light-success border border-success d-flex flex-column flex-sm-row p-5 mb-10">
          <!--begin::Icon-->
          <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4">
            <span class="path1"></span>
            <span class="path2"></span>
          </i>
          <!--end::Icon-->

          <!--begin::Wrapper-->
          <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h5 class="mb-1 text-success">Successfully</h5>
            <!--end::Title-->

            <!--begin::Content-->
            <span class="text-success"><?= $this->session->flashdata('success') ?></span>
            <!--end::Content-->
          </div>
          <!--end::Wrapper-->

          <!--begin::Close-->
          <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <i class="ki-duotone ki-cross fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
          </button>
          <!--end::Close-->
        </div>
        <!--end::Alert-->
      <?php elseif ($this->session->flashdata('error')): ?>
        <!--begin::Alert-->
        <div class="alert alert-dismissible bg-light-danger border border-danger d-flex flex-column flex-sm-row p-5 mb-10">
          <!--begin::Icon-->
          <i class="ki-duotone ki-information fs-2hx text-danger me-4">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
          </i>
          <!--end::Icon-->

          <!--begin::Wrapper-->
          <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h5 class="mb-1 text-danger">Error</h5>
            <!--end::Title-->

            <!--begin::Content-->
            <span class="text-danger"><?= $this->session->flashdata('error') ?></span>
            <!--end::Content-->
          </div>
          <!--end::Wrapper-->

          <!--begin::Close-->
          <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <i class="ki-duotone ki-cross fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>
          </button>
          <!--end::Close-->
        </div>
        <!--end::Alert-->
      <?php endif ?>
      <!--begin::Card-->
      <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
          <!--begin::Card title-->
          <div class="card-title">
            <!--begin::Card Search Bar-->
            <?php $this->load->view('v3/admin/_partials/search', [
              'module' => 'order',
              'placeholder' => 'Search Package'
            ]); ?>
            <!--begin::Card Search Bar-->
          </div>
          <!--begin::Card title-->
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
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_orders">
            <thead>
              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class=" min-w-100px">Actions</th>
                <th class="min-w-150px text-start">Airwaybill</th>
                <th class="min-w-100px text-center">Date</th>
                <th class="min-w-50px text-left">Cln</th>
                <th class="min-w-50px text-left">Inv</th>
                <th class="min-w-50px text-left">Pay</th>
                <th class="min-w-75px text-center">Status</th>
                <th class="min-w-200px">Sender Name</th>
                <th class="min-w-200px">Receiver Name</th>
                <th class="min-w-500px">Address</th>
                <th class="min-w-125px text-start">Postal Code</th>
                <th class="min-w-125px ">City</th>
                <th class="min-w-150px text-start">Phone number</th>
                <th class="min-w-125px text-start">Country</th>
                <th class="min-w-125px text-start">Goods Desc</th>
                <th class="min-w-125px text-start">Actual Weight</th>
                <th class="min-w-75px text-center">Weight</th>
                <th class="min-w-125px text-start">Postage</th>
                <th class="min-w-125px text-start">paid</th>
                <th class="min-w-100px text-start">Service</th>
                <th class="min-w-150px text-center">Term of Payment</th>
                <th class="min-w-150px text-center">Refrence Number</th>
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
                  <td class="text-start"><?= $order->code ?></td>
                  <td class="text-start "><?= date("m/d/Y", strtotime($order->tgl_kirim)) ?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="text-center"><span class="<?= $order->status_label ?>"><?= $order->status_name ?></span></td>
                  <td><?= $order->ship_name ?></td>
                  <td><?= $order->rec_name ?></td>
                  <td><?= $order->ship_address ?></td>
                  <td class="text-start"><?= $order->rec_postcode ?></td>
                  <td><?= $order->rec_city ?></td>
                  <td class="text-start"><?= $order->rec_phone ?></td>
                  <td><?= $order->origin ?></td>
                  <td><?= $order->desc_of_goods ?></td>
                  <td class="text-center"><?= $order->weight ?></td>
                  <td class="text-center"><?= $order->charge_weight ?></td>
                  <td class="text-start"><?= number_format($order->ongkir, 0, ",", ".") ?></td>
                  <td class="text-start"><?= number_format($order->payment, 0, ",", ".") ?></td>
                  <td class="text-start"><?= $order->service ?></td>
                  <td class="text-center"><?= $order->payment_term ?></td>
                  <td class="text-center"><?= $order->connote_reff ?></td>
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