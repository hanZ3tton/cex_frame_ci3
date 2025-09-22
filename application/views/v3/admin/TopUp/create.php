<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Topup Deposit</h1>
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
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Card-->
				<div class="card card-flush h-lg-100 w-md-500px mx-auto" id="kt_contacts_main">
					<!--begin::Card header-->
					<div class="card-header pt-3" id="kt_chat_contacts_header">
						<!--begin::Card title-->
						<div class="card-title">
							<h2>Add Deposit</h2>
						</div>
						<!--end::Card title-->
						<!--begin::Close button-->

						<!--end::Close button-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-5">
						<!--begin::Form-->
						<form id="kt_ecommerce_settings_general_form" class="form" action="#">
							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<!--begin::Label-->
								<label class="fs-6 fw-semibold form-label mt-3">
									<span class="required">Bank Name</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Enter The Bank Name">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input type="text" placeholder="Bank Name" class="form-control form-control-solid" name="BankName" value="" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<!--begin::Label-->
								<label class="fs-6 fw-semibold form-label mt-3">
									<span class="required">Bank Account Name</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Enter The Bank Account Name">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input type="text" placeholder="Bank Account Name" class="form-control form-control-solid" name="BankAccountName" value="" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<!--begin::Label-->
								<label class="fs-6 fw-semibold form-label mt-3">
									<span class="required">Bank Destination</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Enter The Bank Destination">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<!--begin::Select-->
								<select class="form-select form-control-solid" data-control="select2" name="BankDestination" data-placeholder="Select a bank destination">
									<option value="BCA 586-520-2641">BCA 586-520-2641</option>
									<!-- Other options can be added here -->
								</select>
								<!--end::Select-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<!--begin::Label-->
								<label class="fs-6 fw-semibold form-label mt-3">
									<span class="required">Nominal</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Enter the deposit amount">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input type="text" placeholder="Nominal..." class="form-control form-control-solid" name="Nominal" value="" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group for Transfer Proof-->
							<div class="fv-row mb-7">
								<!--begin::Label-->
								<label class="fs-6 fw-semibold form-label mt-3">
									<span class="required">Transfer Proof</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Upload a screenshot of the transfer proof">
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
									<div class="image-input image-input-outline image-input-placeholder image-input-empty" data-kt-image-input="true">
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
							<!--end::Input group for Transfer Proof-->
							<!--begin::Action buttons-->
							<div class="d-flex justify-content-end pt-5">
								<a href="<?= base_url('admin/topup') ?>" class="btn btn-light me-3" data-kt-contacts-type="cancel">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
							<!--end::Action buttons-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Wrapper-->
			<!--end::Billing Address-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>