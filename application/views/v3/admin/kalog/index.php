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
                <?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Shipment', 'List Order']]); ?>
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
                    <!--begin::Card Search Bar-->
                    <?php $this->load->view('v3/admin/_partials/search', [
                        'module' => 'kalog',
                        'placeholder' => 'Search Package'
                    ]); ?>
                    <!--begin::Card Search Bar-->
                    <!--begin::Card toolbar-->
                    <?php $this->load->view('v3/admin/_partials/toolbar', [
                        'show_add_button'  => true,
                        'title'            => 'Request Kalog',
                        'add_url'          => base_url('admin/kalog/create')
                    ]); ?>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle text-truncate table-row-dashed fs-6 gy-5" id="kt_table_kalog">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">Actions</th>
                                <th class="min-w-100px text-start">Receipt number</th>
                                <th class="min-w-50px">Sent Date</th>
                                <th class="min-w-50px text-start">Weight</th>
                                <th class="min-w-125px text-center">Colly Ammount</th>
                                <th class="min-w-125px text-center">Made By</th>
                                <th class="min-w-125px text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <?php foreach ($kalog as $row): ?>
                                <tr>
                                    <td class="text-start">
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
                                                    href="<?= base_url('admin/inbound/edit/') ?>"
                                                    class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a
                                                    href="<?= base_url('admin/inbound/delete/') ?>"
                                                    class="menu-link px-3"
                                                    data-kt-users-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <td class="text-start"><?= $row->receipt_number ?></td>
                                    <td><?= date('d/m/Y', strtotime($row->sent_date)) ?></td>
                                    <td class="text-start"><?= $row->weight ?></td>
                                    <td class="text-center"><?= $row->total_colly ?></td>
                                    <td class="text-center"><?= $row->created_by ?></td>
                                    <td class="text-center"><span class="<?= $row->status_label ?>"><?= $row->status_name ?></span></td>
                                </tr>
                            <?php endforeach; ?>
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