<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Shipment Reports</h1>
				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Reports', 'Shipment Reports']]); ?>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Filter menu-->
				<div class="m-0">
					<!--begin::Menu toggle-->
					<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
					<i class="ki-duotone ki-filter fs-6 text-muted me-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>Filter</a>
					<!--end::Menu toggle-->
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_685c322e4862e">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Status:</label>
								<!--end::Label-->
								<!--begin::Input-->
								<div>
									<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_685c322e4862e" data-allow-clear="true">
										<option></option>
										<option value="1">Approved</option>
										<option value="2">Pending</option>
										<option value="2">In Process</option>
										<option value="2">Rejected</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Member Type:</label>
								<!--end::Label-->
								<!--begin::Options-->
								<div class="d-flex">
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" value="1" />
										<span class="form-check-label">Author</span>
									</label>
									<!--end::Options-->
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="2" checked="checked" />
										<span class="form-check-label">Customer</span>
									</label>
									<!--end::Options-->
								</div>
								<!--end::Options-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Notifications:</label>
								<!--end::Label-->
								<!--begin::Switch-->
								<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
									<label class="form-check-label">Enabled</label>
								</div>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
								<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
					</div>
					<!--end::Menu 1-->
				</div>
				<!--end::Filter menu-->
				<!--begin::Secondary button-->
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
				<!--end::Primary button-->
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
			<!--begin::Products-->
			<div class="card card-flush">
				<!--begin::Card header-->
				<div class="card-header align-items-center py-5 gap-2 gap-md-5">
					<!--begin::Card title-->
					<div class="card-title">
						<div class="d-flex align-items-center position-relative my-1">
							<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
							<input type="text" data-kt-report-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Reports" />
						</div>
					</div>
					<!--end::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
						<!--begin::Daterangepicker-->
						<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_report_daterangepicker" />
						<!--end::Daterangepicker-->
						<!--begin::Export dropdown-->
						<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-exit-up fs-2">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>Export Report</button>
						<!--begin::Menu-->
						<div id="kt_report_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-report-export="copy">Copy to clipboard</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-report-export="excel">Export as Excel</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-report-export="csv">Export as CSV</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-report-export="pdf">Export as PDF</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
						<!--end::Export dropdown-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<div class="table-responsive">
					<!--begin::Table-->
					<table class="table align-middle text-truncate table-row-dashed fs-6 gy-5" id="kt_table_report">
						<thead>
							<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
								<th class="w-10px pe-2">
									<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
										<input class="form-check-input" type="checkbox" data-kt-check="true"
										data-kt-check-target="#kt_table_report .form-check-input" value="1" />
									</div>
								</th>
								<th class="min-w-100px">Date</th>
								<th class="text-end min-w-75px">Airwaybill</th>
								<th class="text-end min-w-75px">Shipper</th>
								<th class="text-end min-w-75px">Receiver Name</th>
								<th class="text-end min-w-100px">Receiver Phone</th>
								<th class="text-end min-w-100px">Receiver Address</th>
								<th class="text-end min-w-100px">Receiver PostCode</th>
								<th class="text-end min-w-100px">Destination</th>
								<th class="text-end min-w-100px">Weight (Kg)</th>
								<th class="text-end min-w-100px">Goods Description</th>
								<th class="text-end min-w-100px">Customs Value</th>
								<th class="text-end min-w-100px">Status</th>
								<th class="text-end min-w-100px">Ongkir</th>
								<th class="text-end min-w-100px">Shipper Name</th>
								<th class="text-end min-w-100px">Shipper Address</th>
								<th class="text-end min-w-100px">Shipper Phone</th>
							</tr>
						</thead>
						<tbody class="fw-semibold text-gray-600">
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>2024-10-01</td>
								<td class="text-end pe-0">MY37210027686</td>
								<td class="text-end pe-0">CAFRAME - CAFRAME</td>
								<td class="text-end pe-0">ALIT</td>
								<td class="text-end pe-0">+601136930780</td>
								<td class="text-end pe-0">JLN.YORK 111 ,GEORGETOWN,PULAU PINANG 10450</td>
								<td class="text-end pe-0">10450</td>
								<td class="text-end pe-0">MALAYSIA</td>
								<td class="text-end pe-0">15</td>
								<td class="text-end pe-0">SPORT EQUIPMENT</td>
								<td class="text-end pe-0">150</td>
								<td class="text-end pe-0">DELIVERED</td>
								<td class="text-end pe-0">450000</td>
								<td class="text-end pe-0">Samuel</td>
								<td class="text-end pe-0">Tangsel</td>
								<td class="text-end">0857174616417</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>2025-07-25</td>
								<td class="text-end pe-0">ECS02053823</td>
								<td class="text-end pe-0">CAFRAME - CAFRAME</td>
								<td class="text-end pe-0">Samuel</td>
								<td class="text-end pe-0">54861860</td>
								<td class="text-end pe-0">(SH1401) Shop No. G04, G/F, So Uk Shopping Centre, So Uk Estate, Sham Shui Po</td>
								<td class="text-end pe-0">-</td>
								<td class="text-end pe-0">HONGKONG</td>
								<td class="text-end pe-0">6</td>
								<td class="text-end pe-0">Dress</td>
								<td class="text-end pe-0">30</td>
								<td class="text-end pe-0"></td>
								<td class="text-end pe-0">900000</td>
								<td class="text-end pe-0">Rama</td>
								<td class="text-end pe-0">Jakarta</td>
								<td class="text-end">081287773535</td>
							</tr>
						</tbody>
					</table>
					<!--end::Table-->
					</div>
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Products-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>