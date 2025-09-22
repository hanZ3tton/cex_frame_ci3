<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Order list</h1>
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
            'show_add_button' => true,
            'show_edit_button' => true,
            'title' => 'start new order',
            'add_url' => base_url('v3/admin/order/start_new_order')
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
                <th class="min-w-75px text-start">Airwaybill</th>
                <th class="min-w-100px">Date</th>
                <th class="min-w-50px text-start">Cln</th>
                <th class="min-w-50px text-start">Inv</th>
                <th class="min-w-50px text-start">Pay</th>
                <th class="min-w-75px">Status</th>
                <th class="min-w-125px">Data Inbound</th>
                <th class="min-w-125px">Sender Name</th>
                <th class="min-w-125px">Receiver Name</th>
                <th class="min-w-125px">Address</th>
                <th class="min-w-125px text-start">Postal Code</th>
                <th class="min-w-125px">City</th>
                <th class="min-w-125px text-start">Phone number</th>
                <th class="min-w-125px text-start">Country</th>
                <th class="min-w-125px text-start">Goods Desc</th>
                <th class="min-w-125px text-start">Actual Weight</th>
                <th class="min-w-100px text-start">Weight</th>
                <th class="min-w-150px text-center">Postage</th>
                <th class="min-w-75px text-center">paid</th>
                <th class="min-w-125px text-center">Service</th>
                <th class="min-w-150px">Term of Payment</th>
                <th class="min-w-150px">Refrence Number</th>
                <th class="text-end min-w-100px">Actions</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
              <?php foreach ($orders as $order) : ?>
                <tr>
                  <td><?= $order->final_connote ?></td>
                  <td class="text-end"><?= date("m/d/Y", strtotime($order->tgl_kirim)) ?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><span class="<?= $order->status_label ?>"><?= $order->status_name ?></span></td>
                  <td><?= $order->inbound ?></td>
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
                  <td class="text-center"><?= $order->ongkir ?></td>
                  <td class="text-center"><?= $order->payment ?></td>
                  <td class="text-center"><?= $order->service ?></td>
                  <td><?= $order->payment ?></td>
                  <td class="text-center"><?= $order->connote_reff ?></td>
                  <td class="text-end">
                    <div class="d-flex justify-content-end gap-2">
                      <a
                        href="<?= base_url('v3/admin/order/create_cleansing/' . $order->final_connote) ?>"
                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        <i class="ki-duotone ki-pencil fs-2">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i>
                      </a>
                      <a
                        href="#"
                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                        <i class="ki-duotone ki-trash fs-2">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          <span class="path3"></span>
                          <span class="path4"></span>
                          <span class="path5"></span>
                        </i>
                      </a>
                    </div>
                  </td>
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