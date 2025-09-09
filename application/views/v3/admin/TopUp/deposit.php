<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Download TopUp</h1>
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
									<div class="card mb-5 mb-xl-10">
										<!--begin::Card body-->

										<!--end::Card body-->
									</div>
									<!--end::Billing Summary-->
									<!--begin::Payment methods-->
                                        
									<!--end::Payment methods-->
									<!--begin::Billing Address-->
									<!--end::Billing Address-->
									<!--begin::Billing History-->
									<div class="d-flex flex-center">
                                        <div class="card card-flush h-lg-100" id="kt_contacts_main">
											<!--begin::Card header-->
											<div class="card-header pt-3" id="kt_chat_contacts_header">
												<!--begin::Card title-->
												<div class="card-title">
													<i class="ki-duotone ki-badge fs-1 me-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
													</i>
													<h2>User Form</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-5">
												<!--begin::Form-->
												<form id="kt_ecommerce_settings_general_form" class="form" action="#">
													<!--begin::Input group-->
													<div class="mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-semibold mb-3">
															<span>Avatar</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Image input wrapper-->
														<div class="mt-1">
															<!--begin::Image placeholder-->
															<style>
																.image-input-placeholder {
																	background-image: url('assets/media/svg/files/blank-image.svg');
																}

																[data-bs-theme="dark"] .image-input-placeholder {
																	background-image: url('assets/media/svg/files/blank-image-dark.svg');
																}
															</style>
															<!--end::Image placeholder-->
															<!--begin::Image input-->
															<div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
																<!--end::Preview existing avatar-->
																<!--begin::Edit-->
																<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																	<i class="ki-duotone ki-pencil fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<!--begin::Inputs-->
																	<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																	<input type="hidden" name="avatar_remove" />
																	<!--end::Inputs-->
																</label>
																<!--end::Edit-->
																<!--begin::Cancel-->
																<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																	<i class="ki-duotone ki-cross fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<!--end::Cancel-->
																<!--begin::Remove-->
																<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																	<i class="ki-duotone ki-cross fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<!--end::Remove-->
															</div>
															<!--end::Image input-->
														</div>
														<!--end::Image input wrapper-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-semibold form-label mt-3">
															<span class="required">Full Name</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="name" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->

													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-semibold form-label mt-3">
															<span class="required">Email</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's company name (optional).">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="company_name" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->

													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-semibold form-label mt-3">
															<span class="required">Password</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's company name (optional).">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="password" class="form-control form-control-solid" name="company_name" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->

													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-semibold form-label mt-3">
															<span class="required">Confrim Password</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's company name (optional).">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="company_name" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->

													<!--begin::Input group-->
													
													<!--end::Input group-->


													<!--begin::Roles-->
													<!--begin::Input row-->
													
													<!--end::Input row-->

												
													<!--begin::Input row-->
													
													<!--end::Action buttons-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Card body-->
										</div>
                                    </div>  
									<!--end::Billing Address-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>