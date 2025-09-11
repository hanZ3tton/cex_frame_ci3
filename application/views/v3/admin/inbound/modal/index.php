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
		          <div class="d-flex flex-column mb-8 fv-row">
		            <!--begin::Col-->
		            <div class="col-md-12 fv-row">
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
		                <input class="form-control form-control-solid ps-12" placeholder="<?= $inbound->inbound_date ?>" name="inbound_date" id="inbound_date" disabled />
		                <!--end::Datepicker-->
		              </div>
		              <!--end::Input-->
		            </div>
		            <!--end::Col-->

		          </div>
		          <!--end::Input group-->
		          <!--begin::Input group-->
		          <div class="row g-9 mb-8">
		            <!--begin::Col-->
		            <div class="col-md-6 fv-row">
		              <label class="required fs-6 fw-semibold mb-2">Product</label>
		              <input class="form-control form-select-solid" name="product">
		            </div>
		            <!--end::Col-->
		            <!--begin::Col-->
		            <div class="col-md-6 fv-row">
		              <label class="required fs-6 fw-semibold mb-2">Assign</label>
		              <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user">
		                <option value="">Select a user...</option>
		                <option value="1">Karina Clark</option>
		                <option value="2">Robert Doe</option>
		                <option value="3">Niel Owen</option>
		                <option value="4">Olivia Wild</option>
		                <option value="5">Sean Bean</option>
		              </select>
		            </div>
		            <!--end::Col-->
		          </div>
		          <!--end::Input group-->
		          <!--begin::Input group-->
		          <div class="row g-9 mb-8">
		            <!--begin::Col-->
		            <div class="col-md-6 fv-row">
		              <label class="required fs-6 fw-semibold mb-2">Status</label>
		              <select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
		                <option value=""></option>
		                <option value="1" selected="selected">Open</option>
		                <option value="2">Pending</option>
		                <option value="3">Resolved</option>
		                <option value="3">Closed</option>
		              </select>
		            </div>
		            <!--end::Col-->
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
		                <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" id="kt_daterangepicker_3" />
		                <!--end::Datepicker-->
		              </div>
		              <!--end::Input-->
		            </div>
		            <!--end::Col-->
		          </div>
		          <!--end::Input group-->
		          <!--begin::Input group-->
		          <div class="d-flex flex-column mb-8 fv-row">
		            <label class="fs-6 fw-semibold mb-2">Description</label>
		            <textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description"></textarea>
		          </div>
		          <!--end::Input group-->
		          <!--begin::Input group-->
		          <div class="fv-row mb-8">
		            <label class="fs-6 fw-semibold mb-2">Attachments</label>
		            <!--begin::Dropzone-->
		            <div class="dropzone" id="kt_modal_create_inbound_detail">
		              <!--begin::Message-->
		              <div class="dz-message needsclick align-items-center">
		                <!--begin::Icon-->
		                <i class="ki-duotone ki-file-up fs-3hx text-primary">
		                  <span class="path1"></span>
		                  <span class="path2"></span>
		                </i>
		                <!--end::Icon-->
		                <!--begin::Info-->
		                <div class="ms-4">
		                  <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
		                  <span class="fw-semibold fs-7 text-gray-500">Upload up to 10 files</span>
		                </div>
		                <!--end::Info-->
		              </div>
		            </div>
		            <!--end::Dropzone-->
		          </div>
		          <!--end::Input group-->
		          <!--begin::Input group-->
		          <div class="mb-15 fv-row">
		            <!--begin::Wrapper-->
		            <div class="d-flex flex-stack">
		              <!--begin::Label-->
		              <div class="fw-semibold me-5">
		                <label class="fs-6">Notifications</label>
		                <div class="fs-7 text-gray-500">Allow Notifications by Phone or Email</div>
		              </div>
		              <!--end::Label-->
		              <!--begin::Checkboxes-->
		              <div class="d-flex align-items-center">
		                <!--begin::Checkbox-->
		                <label class="form-check form-check-custom form-check-solid me-10">
		                  <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked" />
		                  <span class="form-check-label fw-semibold">Email</span>
		                </label>
		                <!--end::Checkbox-->
		                <!--begin::Checkbox-->
		                <label class="form-check form-check-custom form-check-solid">
		                  <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone" />
		                  <span class="form-check-label fw-semibold">Phone</span>
		                </label>
		                <!--end::Checkbox-->
		              </div>
		              <!--end::Checkboxes-->
		            </div>
		            <!--end::Wrapper-->
		          </div>
		          <!--end::Input group-->
		          <!--begin::Actions-->
		          <div class="text-center">
		            <button type="reset" id="kt_modal_new_inbound_cancel" class="btn btn-light me-3">Cancel</button>
		            <button type="submit" id="kt_modal_new_inbound_submit" class="btn btn-primary">
		              <span class="indicator-label">Submit</span>
		              <span class="indicator-progress">Please wait...
		                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
		            </button>
		          </div>
		          <!--end::Actions-->
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