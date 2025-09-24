<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Kalog Data</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
          <!--begin::Item-->
          <li class="breadcrumb-item text-muted">
            <a href="index.html" class="text-muted text-hover-primary">Home</a>
          </li>
          <!--end::Item-->
          <!--begin::Item-->
          <li class="breadcrumb-item">
            <span class="bullet bg-gray-500 w-5px h-2px"></span>
          </li>
          <!--end::Item-->
          <!--begin::Item-->
          <li class="breadcrumb-item text-muted">User Management</li>
          <!--end::Item-->
          <!--begin::Item-->
          <li class="breadcrumb-item">
            <span class="bullet bg-gray-500 w-5px h-2px"></span>
          </li>
          <!--end::Item-->
          <!--begin::Item-->
          <li class="breadcrumb-item text-muted">Users</li>
          <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
      </div>
      <!--end::Page title-->
      <!--begin::Actions-->
      <div class="d-flex align-items-center gap-2 gap-lg-3">

        <!--begin::Secondary button-->
        <!--end::Secondary button-->

      </div>
      <!--end::Actions-->
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
            'module' => 'kalog',
            'placeholder' => 'Search Package'
          ]); ?>
          <!--begin::Card Search Bar-->
          <!--begin::Card toolbar-->
          <?php $this->load->view('v3/admin/_partials/toolbar', [
            'show_add_button'  => true,
            'show_edit_button' => true,
            'add_url'          => base_url('admin/kalog/create')
          ]); ?>
          <!--end::Card toolbar-->  
        </div>

        <!--begin::Modal - Request Kalog-->
        <div class="modal fade" id="kt_modal_request_kalog" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Request Kalog</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div href="#" class="btn btn-icon btn-sm btn-active-light-primary ms-2" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <!--end::Modal body-->
                </div>
            </div>
        </div>
        <!--end::Modal - Request Kalog-->

        <div class="modal fade" id="kt_modal_download_topup" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="fw-bold">Download Topup Data</h2>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                    </div>
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <form id="kt_modal_download_form" class="form" action="#">
                            <div class="mb-5 fv-row">
                                <label class="form-label required fw-bold fs-6">Start From</label>
                                <input type="date" class="form-control form-control-solid" placeholder="dd/mm/yyyy" name="start_date" />
                            </div>
                            <div class="mb-5 fv-row">
                                <label class="form-label required fw-bold fs-6">Due To</label>
                                <input type="date" class="form-control form-control-solid" placeholder="dd/mm/yyyy" name="due_to_date" />
                            </div>
                            <div class="text-center">
                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Download</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <!-- Bagian body dari card, dengan padding vertikal -->
        <div class="card-body py-4">
            <!-- Tabel dengan styling yang responsif dan rata tengah -->
            <table class="table align-middle text-truncate table-row-dashed fs-6 gy-5" id="kt_table_kalog">
                <!-- Header tabel -->
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <!-- Kolom untuk checkbox -->
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_kalog .form-check-input" value="1" />
                            </div>
                        </th>
                        <!-- Kolom header lainnya -->
                        <th class="min-w-125px">Sent Date</th>
                        <th class="min-w-125px">Receiption Kalog Code</th>
                        <th class="min-w-125px">Weight</th>
                        <th class="min-w-125px">Colly Ammount</th>
                        <th class="min-w-125px">Made By</th>
                        <th class="min-w-125px">Status</th>
                        <th class="min-w-125px">Action</th>
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
                        <td>11-09-2025	</td>
                        <td>202541100R02616</td>
                        <td>111.05	</td>
                        <td>9</td>
                        <td>CAFRAME</td>
                        <td>Active</td>
                        <td>
                            <div class="d-flex justify-content-start">
                                <!-- Tombol cetak -->
                                <a href="#" class="btn btn-sm btn-primary me-3">Print</a>
                                <!-- Tombol cetak thermal -->
                                <a href="#" class="btn btn-sm btn-primary me-3">Print Thermal</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>10-07-2025	</td>
                        <td>202541100R01789</td>
                        <td>217</td>
                        <td>20</td>
                        <td>CAFRAME</td>
                        <td>Active</td>
                        <td>
                            <div class="d-flex justify-content-start">
                                <!-- Tombol cetak -->
                                <a href="#" class="btn btn-sm btn-primary me-3">Print</a>
                                <!-- Tombol cetak thermal -->
                                <a href="#" class="btn btn-sm btn-primary me-3">Print Thermal</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>10-07-2025	</td>
                        <td>202555000R27952</td>
                        <td>10</td>
                        <td>1</td>
                        <td>CAFRAME</td>
                        <td>Active</td>
                        <td>
                            <div class="d-flex justify-content-start">
                                <!-- Tombol cetak -->
                                <a href="#" class="btn btn-sm btn-primary me-3">Print</a>
                                <!-- Tombol cetak thermal -->
                                <a href="#" class="btn btn-sm btn-primary me-3">Print Thermal</a>
                            </div>
                        </td>
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