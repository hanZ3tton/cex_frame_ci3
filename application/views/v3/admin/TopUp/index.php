<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Topup</h1>
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
					<li class="breadcrumb-item text-muted">Account</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<!--end::Actions-->
		</div>
		<!--end::Toolbar container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-xxl">
			<!--begin::Navbar-->
			<!--end::Navbar-->
			<!--begin::Billing Summary-->
			<!--end::Billing Summary-->
			<!--begin::Payment methods-->
			<div class="card mb-5 mb-xl-10">
				<div id="kt_billing_payment_tab_content" class="card-body tab-content">
					<div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
						<div class="row gx-9 gy-6">
							<div class="col-xl-4 text-center" data-kt-billing-element="card">
								<div class="card card-dashed h-xl-100 p-6 d-flex flex-column align-items-center">
									<i class="bi bi-box fs-1 text-primary mb-3"></i>
									<div class="fs-4 fw-bold mb-1">Rp. 6.700.000</div>
									<div class="fw-semibold text-gray-600">Topup Confirmed</div>
								</div>
							</div>
							<div class="col-xl-4 text-center" data-kt-billing-element="card">
								<div class="card card-dashed h-xl-100 p-6 d-flex flex-column align-items-center">
									<i class="bi bi-box-fill fs-1 text-warning mb-3"></i>
									<div class="fs-4 fw-bold mb-1">Rp. 1.800.000</div>
									<div class="fw-semibold text-gray-600">Topup Un-Confirmed</div>
								</div>
							</div>
							<div class="col-xl-4 text-center" data-kt-billing-element="card">
								<div class="card card-dashed h-xl-100 p-6 d-flex flex-column align-items-center">
									<i class="bi bi-exclamation-triangle-fill fs-1 text-danger mb-3"></i>
									<div class="fs-4 fw-bold mb-1">Rp. 2.100.000</div>
									<div class="fw-semibold text-gray-600">Topup Canceled</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Payment methods-->
			<!--begin::Billing Address-->
			<!--end::Billing Address-->
			<!--begin::Billing History-->
			<div class="card">
				<div class="card-header border-0 pt-6">
					<div class="card-title">
						<div class="d-flex align-items-center position-relative my-1">
							<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
							<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Code" />
						</div>
					</div>
					<div class="card-toolbar">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							<a href="#" class="btn btn-sm btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_download_topup">
								<i class="fas fa-download"></i> Download
							</a>
							<a href="<?= base_url('v3/admin/topup/deposit') ?>" class="btn btn-sm btn-primary">
								<i class=" fas fa-plus"></i> Topup Deposit
							</a>
						</div>
					</div>
				</div>
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

				
				<div class="card-body py-4">
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
						<thead>
							<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
								<th class="w-10px pe-2">
									<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
										<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
									</div>
								</th>
								<th class="min-w-125px">Code</th>
								<th class="min-w-125px">Account</th>
								<th class="min-w-125px">Name</th>
								<th class="min-w-125px">Nominal Topup</th>
								<th class="min-w-125px">Topup Date</th>
								<th class="min-w-125px">Bank From</th>
								<th class="min-w-125px">Transfer Proof</th>
								<th class="min-w-125px">Status</th>
								<th class="min-w-125px">Bank Destination</th>
							</tr>
						</thead>
						<tbody class="text-gray-600 fw-semibold">
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>155972</td>
								<td>CAFRAME</td>
								<td>Sahid</td>
								<td>500.000</td>
								<td>21 Jun 2025, 3:20 pm</td>
								<td>BRI</td>
								<td>
									<img src="https://office.choirexpress.co.id/uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg" alt="" width="40" class="img-circle" data-toggle="tooltip" data-placement="bottom" title="uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg">
								</td>
								<td>Accepted</td>
								<td>BCA 123-456-7890</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>151522</td>
								<td>CAFRAME</td>
								<td>Mulyono</td>
								<td>300.000</td>
								<td>11 Jun 2025, 12:20 pm</td>
								<td>BCA</td>
								<td>
									<img src="https://office.choirexpress.co.id/uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg" alt="" width="40" class="img-circle" data-toggle="tooltip" data-placement="bottom" title="uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg">
								</td>
								<td>Pending</td>
								<td>BCA 123-456-7890</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>144272</td>
								<td>CAFRAME</td>
								<td>Prabowo</td>
								<td>250.000</td>
								<td>24 Jun 2025, 5:20 pm</td>
								<td>BCA</td>
								<td>
									<img src="https://office.choirexpress.co.id/uploads/deposit/1733300665_profile_bukti_tf_CAFRAME_1733300664.jpg" alt="" width="40" class="img-circle" data-toggle="tooltip" data-placement="bottom" title="uploads/deposit/1733300665_profile_bukti_tf_CAFRAME_1733300664.jpg">
								</td>
								<td>Rejected</td>
								<td>BCA 123-456-7890</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>189272</td>
								<td>CAFRAME</td>
								<td>Ganjar</td>
								<td>650.000</td>
								<td>24 Aug 2025, 9:20 pm</td>
								<td>BRI</td>
								<td>
									<img src="https://office.choirexpress.co.id/uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg" alt="" width="40" class="img-circle" data-toggle="tooltip" data-placement="bottom" title="uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg">
								</td>
								<td>Accepted</td>
								<td>BCA 123-456-7890</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>144272</td>
								<td>CAFRAME</td>
								<td>Bapak Mulyono</td>
								<td>850.000</td>
								<td>27 Jun 2025, 5:50 pm</td>
								<td>BCA</td>
								<td>
									<img src="https://office.choirexpress.co.id/uploads/deposit/1733300665_profile_bukti_tf_CAFRAME_1733300664.jpg" alt="" width="40" class="img-circle" data-toggle="tooltip" data-placement="bottom" title="uploads/deposit/1733300665_profile_bukti_tf_CAFRAME_1733300664.jpg">
								</td>
								<td>Rejected</td>
								<td>BCA 123-456-7890</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
			<!--end::Billing Address-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>