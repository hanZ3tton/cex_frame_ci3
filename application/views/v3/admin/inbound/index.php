<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"><?= $title; ?></h1>
				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Shipment', 'All Inbound']]); ?>
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
					<!--begin::Card Search Bar-->
					<?php $this->load->view('v3/admin/_partials/search', [
						'module' => 'inbound',
						'placeholder' => 'Search Package'
					]); ?>
					<!--begin::Card Search Bar-->
					<!--begin::Card toolbar-->
					<?php $this->load->view('v3/admin/_partials/toolbar', [
						'show_add_button' => false,
						'show_edit_button' => false
					]); ?>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body py-4">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_inbounds">
						<thead>
							<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
								<th class="w-10px pe-2">
									<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
										<input class="form-check-input" name type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_inbounds .form-check-input" value="" />
									</div>
								</th>
								<th class="min-w-75px text-start">Code</th>
								<th class="min-w-50px text-left">#</th>
								<th class="min-w-125px">Date</th>
								<th class="min-w-125px">Status</th>
								<th class="min-w-125px">Sender</th>
								<th class="min-w-150px text-start">Phone number</th>
								<th class="min-w-125px text-start">Weight</th>
								<th class="min-w-125px">Package</th>
								<th class="min-w-125px">CS</th>
								<th class="min-w-150px">Updated On</th>
								<th class="min-w-125px">Inbound by</th>
							</tr>
						</thead>
						<tbody class="text-gray-600 fw-semibold">
							<?php foreach ($inbounds as $inbound) : ?>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="<?= $inbound->code ?>" />
										</div>
									</td>
									<td class="text-start"><?= $inbound->code ?></td>
									<td>
										<a href="#"
											data-bs-toggle="modal"
											data-bs-target="#kt_modal_inbound_detail"
											data-inbound-date="<?= $inbound->inbound_date ?>"
											data-sender-name="<?= $inbound->shipper_name ?>"
											data-phone="<?= $inbound->shipper_phone ?>"
											data-weight="<?= $inbound->weight ?>"
											data-goods-desc="<?= $inbound->goods_desc ?>"
											data-inbound-cs="<?= $inbound->cs ?>"
											data-inbound-picture-1="<?= $inbound->picture ?>"
											data-inbound-picture-2="<?= $inbound->picture2 ?>"
											data-inbound-picture-3="<?= $inbound->picture3 ?>"
											data-bs-dismiss="modal"
											aria-label="Close">
											<i class="ki-duotone ki-magnifier fs-3 text-center">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
									</td>
									<td><?= date('d/m/Y', strtotime($inbound->inbound_date)) ?></td>
									<td><span class="<?= $inbound->label ?> "> <?= $inbound->status_name ?> </span></td>
									<td><?= $inbound->shipper_name ?></td>
									<td class="text-start"><?= $inbound->shipper_phone ?></td>
									<td class="text-start"><?= $inbound->weight ?></td>
									<td><?= $inbound->goods_desc ?></td>
									<td><?= $inbound->cs ?></td>
									<td>
										<?php if ($inbound->updatedon == NULL) : ?>
											<span class="badge badge-light-secondary">Not Updated</span>
										<?php endif; ?>
										<?= $inbound->updatedon ?>
									</td>
									<td><?= $inbound->updatedby ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
						<!--begin::Modal detail inbound-->
						<?php $this->load->view('v3/admin/inbound/modal/index'); ?>
						<!--end::Modal detail inbound-->
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