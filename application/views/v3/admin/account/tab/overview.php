<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Profile Details</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
        <a
            href="account/settings.html"
            class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Username</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800"><?= $users->username ?></span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Agent</label>
            <!--end::Label-->
            <!--begin::Col-->
            <?php
            if ($users->agent) {
                $agent = $users->agent;
                $color = "text-gray-800";
            } else {
                $agent = "Please fill this data";
                $color = "badge badge-light-warning";
            }
            ?>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold <?= $color ?> fs-6"><?= $agent ?></span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Contact Phone
                <span
                    class="ms-1"
                    data-bs-toggle="tooltip"
                    title="Phone number must be active">
                    <i class="ki-duotone ki-information fs-7">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i> </span></label>
            <!--end::Label-->
            <!--begin::Col-->
            <?php
            if ($users->phone) {
                $phone = $users->phone;
                $color = "text-gray-800";
            } else {
                $phone = "Please fill this data";
                $color = "badge badge-light-warning";
            }
            ?>
            <div class="col-lg-8 d-flex align-items-center">
                <span class="fw-bold fs-6 <?= $color ?> me-2"><?= $phone ?></span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Email</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <a
                    href="#"
                    class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?= $users->email ?></a>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Address
                <span
                    class="ms-1"
                    data-bs-toggle="tooltip"
                    title="Country of origination">
                    <i class="ki-duotone ki-information fs-7">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i> </span></label>
            <!--end::Label-->
            <!--begin::Col-->
            <?php
            if ($users->address) {
                $address = $users->address;
                $color = "text-gray-800";
            } else {
                $address = "Please fill this data";
                $color = "badge badge-light-warning";
            }
            ?>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 <?= $color ?>"><?= $address ?></span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Created At</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800"><?= $users->created_at ?></span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-10">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Update At</label>
            <!--begin::Label-->
            <!--begin::Label-->
            <?php
            if ($users->updated_at) {
                $update = $users->updated_at;
                $color = "text-gray-800";
            } else {
                $update = "Not Update Yet";
                $color = "text-muted";
            }
            ?>
            <div class="col-lg-8">
                <span class='fw-semibold fs-6 <?= $color ?>'><?= $update ?></span>
            </div>
            <!--begin::Label-->
        </div>
        <!--end::Input group-->
        <?php if (empty($users->agent) || empty($users->phone) || empty($users->address)): ?>

            <!--begin::Notice-->
            <div
                class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                <!--begin::Icon-->

                <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>

                <!--end::Icon-->
                <!--begin::Wrapper-->

                <div class="d-flex flex-stack flex-grow-1">

                    <!--begin::Content-->

                    <div class="fw-semibold">
                        <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                        <div class="fs-6 text-gray-700">
                            Your profile is incomplete. Please
                            <a class="fw-bold" href="<?= base_url('v3/admin/account/index?tab=settings') ?>">add more details</a>.
                        </div>
                    </div>

                    <!--end::Content-->

                </div>

                <!--end::Wrapper-->
            </div>
        <?php endif;  ?>
        <!--end::Notice-->
    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->