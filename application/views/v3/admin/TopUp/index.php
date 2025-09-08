<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Top Up</h1>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_685c320bcceeb">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_685c320bcceeb" data-allow-clear="true">
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
									<!--begin::Navbar-->
									<!--end::Navbar-->
									<!--begin::Billing Summary-->
									<div class="card mb-5 mb-xl-10">
										<!--begin::Card body-->

										<!--end::Card body-->
									</div>
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
													<a href="#" class="btn btn-sm btn-light-primary me-3">
														<i class="fas fa-download"></i> Download
													</a>
													<a href="#" class="btn btn-sm btn-primary">
														<i class="fas fa-plus"></i> Top up Deposit
													</a>
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
														<td>BCA</td>
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
															<img src="https://office.choirexpress.co.id/uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg" alt="" width="40" class="img-circle" data-toggle="tooltip" data-placement="bottom" title="uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg">
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
														<td>BCA</td>
														<td>
															<img src="https://office.choirexpress.co.id/uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg" alt="" width="40" class="img-circle" data-toggle="tooltip" data-placement="bottom" title="uploads/deposit/1750074684_profile_bukti_tf_CAFRAME_1750074684.jpg">
														</td>
														<td>Accepted</td>
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