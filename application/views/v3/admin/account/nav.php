<!--begin::Navbar-->
<div class="card mb-5 mb-xl-10">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <div
                    class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <img src="assets/media/avatars/300-1.jpg" alt="image" />
                    <div
                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                </div>
            </div>
            <!--end::Pic-->
            <!--begin::Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div
                    class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a
                                href="#"
                                class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?= "Hi, " . $user->nama ?></a>
                            <a href="#">
                                <i class="ki-duotone ki-verify fs-1 text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div>
                        <!--end::Name-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                            <span
                                class="d-flex align-items-center text-gray-500 me-5 mb-2">
                                <i class="ki-duotone ki-abstract-12">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i><?= $mitra->account ?></span>
                            <span
                                class="d-flex align-items-center text-gray-500  me-5 mb-2">
                                <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span> </i><?= $user->grup ?></span>
                            <span
                                class="d-flex align-items-center text-gray-500  mb-2">
                                <i class="ki-duotone ki-sms fs-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span> </i><?= $mitra->email    ?></span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->

                </div>
                <!--end::Title-->
                <!--begin::Stats-->
                <div class="d-flex flex-wrap flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i
                                        class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <div
                                        class="fs-2 fw-bold"
                                        data-kt-countup="true"
                                        data-kt-countup-value="<?= $mitra->deposit_balance; ?>"
                                        data-kt-countup-prefix="Rp">
                                        0
                                    </div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500">
                                    Credit
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Progress-->
                    <div
                        <?php
                        $account = ($mitra->account) ? 20 : 0;
                        $agent = ($mitra->name) ? 20 : 0;
                        $phone = ($mitra->phone) ? 20 : 0;
                        $email = ($mitra->email) ? 20 : 0;
                        $address = ($mitra->address) ? 20 : 0;

                        $completion = $account + $agent + $phone + $email + $address;
                        ?>
                        class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                        <div
                            class="d-flex justify-content-between w-100 mt-auto mb-2">
                            <span class="fw-semibold fs-6 text-gray-500">Profile Completion</span>
                            <span class="fw-bold fs-6"><?= $completion ?>%</span>
                        </div>
                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                            <div
                                class="bg-success rounded h-5px"
                                role="progressbar"
                                style="width: <?= $completion ?>%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->
        <!--begin::Navs-->
        <?php
        function tab_link($base, $tab)
        {
            return $base . '?tab=' . urlencode($tab);
        }
        $tabs = [
            'overview' => 'Overview',
            'settings' => 'Settings',
        ];
        ?>
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
            <?php foreach ($tabs as $key => $label): ?>
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5   <?= ($active_tab === $key ? 'active' : ''); ?>"
                        href="<?= tab_link($tab_url, $key); ?>">
                        <?= $label; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <!--begin::Navs-->
    </div>
</div>
<!--end::Navbar-->