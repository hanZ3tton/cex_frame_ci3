		<!--begin::Modal - Support Center - Create Ticket-->
		<div class="modal fade" id="kt_modal_inbound_detail" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-750px">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
						<!--begin:Form-->
						<form id="kt_modal_inbound_detail" class="form" action="#">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<!--begin::Title-->
								<h1 class="mb-3">Detail Data Inbound</h1>
								<!--end::Title-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="fs-6 fw-semibold mb-2">Date Inbound</label>
									<!--begin::Input-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<div class="symbol symbol-20px me-4 position-absolute ms-4">
											<span class="symbol-label bg-secondary">
												<i class="ki-duotone ki-element-11">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
										</div>
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="" name="inbound-date" id="detail-date" disabled />
										<!--end::Datepicker-->
									</div>
									<!--end::Input-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row ">
									<label class="fs-6 fw-semibold mb-2">CS</label>
									<input class="form-control form-control-solid" name="package" id="detail-cs" value="" disabled />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="fs-6 fw-semibold mb-2">Shipper Name</label>
									<input class="form-control form-control-solid" name="package" id="detail-shipper" value="" disabled />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="fs-6 fw-semibold mb-2">Phone Number</label>
									<input class="form-control form-control-solid" name="package" id="detail-phone" value="" disabled />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<div class="col-md-6 fv-row">
									<label class="fs-6 fw-semibold mb-2">Package</label>
									<input class="form-control form-control-solid" name="package" id="detail-goods-desc" value="" disabled />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="fs-6 fw-semibold mb-2">Package Weight</label>
									<input class="form-control form-control-solid" name="package" id="detail-weight" value="" disabled />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
						</form>
						<!--end:Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Support Center - Create Ticket-->
		<script>
			var inboundModal = document.getElementById('kt_modal_inbound_detail');
			inboundModal.addEventListener('show.bs.modal', function(event) {
				var button = event.relatedTarget;

				// Ambil data-* dari tombol
				var date = button.getAttribute('data-inbound-date');
				var cs = button.getAttribute('data-inbound-cs');
				var name = button.getAttribute('data-sender-name');
				var phone = button.getAttribute('data-phone');
				var weight = button.getAttribute('data-weight');
				var desc = button.getAttribute('data-goods-desc');

				// Set ke modal
				this.querySelector('#detail-date').value = date;
				this.querySelector('#detail-cs').value = cs;
				this.querySelector('#detail-shipper').value = name;
				this.querySelector('#detail-phone').value = phone;
				this.querySelector('#detail-weight').value = weight;
				this.querySelector('#detail-goods-desc').value = desc;
			});
		</script>