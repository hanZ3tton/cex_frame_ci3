<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Not Completed</h1>
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
          <!--begin::Card title-->
          <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
              <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
              <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
            </div>
            <!--end::Search-->
          </div>
          <!--begin::Card title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Toolbar-->
            <!-- begin::Toolbar -->
            <!-- Container fleksibel untuk menempatkan tombol-tombol di sisi kanan -->
          	<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                <!--begin::Filter-->
                <!--begin::Add user-->
                <a href="#" class="btn btn-primary me-3">
                    <i class="fa fa-edit fs-2"></i>Create Resi
                </a>
            </div>
       	</div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <!-- Bagian body dari card, dengan padding vertikal -->
        <div class="card-body py-4">
            <!-- Tabel dengan styling yang responsif dan rata tengah -->
            <table class="table align-middle text-truncate table-row-dashed fs-6 gy-5" id="kt_table_users">
                <!-- Header tabel -->
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <!-- Kolom untuk checkbox -->
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                            </div>
                        </th>
                        <!-- Kolom header lainnya -->
                        <th class="min-w-125px">Action</th>
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