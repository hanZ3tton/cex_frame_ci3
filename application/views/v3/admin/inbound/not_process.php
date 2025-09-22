<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"><?= $title ?></h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Shipment', 'List Inbound']]); ?>
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
                    <!--begin::Card title-->
                    <?php $this->load->view('v3/admin/_partials/search', [
                        'module' => 'inbound',
                        'placeholder' => 'Search Package'
                    ]); ?>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <?php $this->load->view('v3/admin/_partials/toolbar', [
                        'show_add_button'  => true,
                        'show_edit_button' => true,
                        'add_url'          => base_url('admin/inbound/create')
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
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_inbounds .form-check-input" value="1" />
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
                                <th class="text-end min-w-100px">Actions</th>
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
                                            data-inbound-picture-3="<?= $inbound->picture3 ?>">
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
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-2">
                                            <a
                                                href="<?= base_url('admin/inbound/edit/' . $inbound->code) ?>"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a
                                                href="<?= base_url('admin/inbound/delete/' . $inbound->code) ?>"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!--begin::Modal detail inbound-->
                                <?php $this->load->view('v3/admin/inbound/modal/index', ['inbound' => $inbound]); ?>
                                <!--end::Modal detail inbound-->
                            <?php endforeach ?>
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