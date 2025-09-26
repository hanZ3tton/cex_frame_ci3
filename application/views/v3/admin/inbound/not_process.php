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
            <?php if ($this->session->flashdata('success')): ?>
                <!--begin::Alert-->
                <div class="alert alert-dismissible bg-light-success border border-success d-flex flex-column flex-sm-row p-5 mb-10">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h5 class="mb-1 text-success">Successfully</h5>
                        <!--end::Title-->

                        <!--begin::Content-->
                        <span class="text-success"><?= $this->session->flashdata('success') ?></span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                        <i class="ki-duotone ki-cross fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                    </button>
                    <!--end::Close-->
                </div>
                <!--end::Alert-->
            <?php elseif ($this->session->flashdata('error')): ?>
                <!--begin::Alert-->
                <div class="alert alert-dismissible bg-light-danger border border-danger d-flex flex-column flex-sm-row p-5 mb-10">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-information fs-2hx text-danger me-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h5 class="mb-1 text-danger">Error</h5>
                        <!--end::Title-->

                        <!--begin::Content-->
                        <span class="text-danger"><?= $this->session->flashdata('error') ?></span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                        <i class="ki-duotone ki-cross fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>
                    </button>
                    <!--end::Close-->
                </div>
                <!--end::Alert-->
            <?php endif ?>
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
                        'title'          => 'Add Inbound',
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
                                <th class="min-w-100px">Actions</th>
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
                                    <td class="text-center">
                                        <a
                                            href="#"
                                            class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                            data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a
                                                    href="<?= base_url('admin/inbound/edit/' . $inbound->code) ?>"
                                                    class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a
                                                    href="<?= base_url('v3/admin/inbound/soft_delete/' . $inbound->code) ?>"
                                                    class="menu-link px-3">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a
                                                    href="<?= base_url('v3/admin/inbound/claim_to_receipt/' . $inbound->code) ?>"
                                                    class="menu-link px-3">Claim To Recipt</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
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