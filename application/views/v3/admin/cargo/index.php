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
        <?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['JNT Cargo', 'Data JNT Cargo']]); ?>
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
          <?php $this->load->view('v3/admin/_partials/search', [
            'module'      => 'cargo',
            'placeholder' => 'Search Package'
          ]); ?>
          <!--begin::Card title-->
          <!--begin::Card toolbar-->
          <?php $this->load->view('v3/admin/_partials/toolbar', [
            'show_add_button'  => true,
            'show_edit_button' => true,
            'title'            => 'Request JNT Cargo',
            'add_url'          => base_url('admin/cargo/jnt/create')
          ]); ?>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <!-- Bagian body dari card, dengan padding vertikal -->
        <div class="card-body py-4">
          <!-- Tabel dengan styling yang responsif dan rata tengah -->
          <table class="table align-middle text-truncate table-row-dashed fs-6 gy-5" id="kt_table_cargo">
            <!-- Header tabel -->
            <thead>
              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <!-- Checkbox -->
                <th class="w-10px pe-2">
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                      data-kt-check-target="#kt_table_cargo .form-check-input" value="1" />
                  </div>
                </th>

                <!-- Kolom lainnya -->
                <th class="min-w-150px text-start">Logistic ID</th>
                <th class="min-w-150px">Status</th>
                <th class="min-w-150px">Status Payment</th>
                <th class="min-w-120px">Vendor AWB</th>
                <th class="min-w-120px">Track</th>
                <th class="min-w-180px">Goods Type</th>
                <th class="min-w-80px">Weight</th>
                <th class="min-w-80px">Quantity</th>
                <th class="min-w-140px">Estimate Insurance</th>
                <th class="min-w-160px">Estimate Total Value</th>
                <th class="min-w-140px">Final Insurance</th>
                <th class="min-w-160px">Final Total Value</th>
                <th class="min-w-160px">Created On</th>
                <th class="min-w-120px">Created By</th>
                <th class="min-w-160px">Approval On</th>
                <th class="min-w-120px">Approval By</th>
                <th class="min-w-160px">Canceled On</th>
                <th class="min-w-120px">Canceled By</th>
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
                <td>15292326082025435</td>
                <td>WAITING FOR APPROVAL</td>
                <td>UNPAID</td>
                <td></td>
                <td>Click To Track</td>
                <td>CLOTHING AND TEXTILES</td>
                <td>5 KG </td>
                <td>1</td>
                <td>Rp 5.000,00 </td>
                <td>Rp 26.475,00 </td>
                <td>Rp 0,00 </td>
                <td>Rp 0,00 </td>
                <td>2025-08-26 15:29:23 </td>
                <td>CAFRAME</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1" />
                  </div>
                </td>
                <td>11544521072025751</td>
                <td>CANCELED BY SYSTEM</td>
                <td>SALDO REFUNDED</td>
                <td></td>
                <td>Click To Track</td>
                <td>CLOTHING AND TEXTILES</td>
                <td>5 KG </td>
                <td>1</td>
                <td>Rp 5.000,00 </td>
                <td>Rp 9.400,00 </td>
                <td>Rp 5.000,00 </td>
                <td>Rp 12.400,00 </td>
                <td>2025-07-21 11:54:45 </td>
                <td>CAFRAME</td>
                <td>2025-07-21 11:55:48 </td>
                <td>CAFRAME</td>
                <td>2025-07-21 12:27:13 </td>
                <td>dini</td>
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