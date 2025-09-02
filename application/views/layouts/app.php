<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <!--begin::Partials Head-->
    <?php $this->load->view('layouts/_partials/head'); ?>
    <!--end::Partials Head-->

    <!--begin::Page-level Assets CSS-->
    <?php foreach ($styles as $style) : ?>
        <link rel="stylesheet" href="<?= base_url($style); ?>">
    <?php endforeach; ?>
    <!--end::Page-level Assets CSS-->

</head>
<!--end::Head-->
<!--begin::Body-->

<body
    id="kt_app_body"
    data-kt-app-layout="dark-sidebar"
    data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true"
    data-kt-app-toolbar-enabled="true"
    class="app-default">

    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode =
                    document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
                    "dark" :
                    "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">

        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!--begin::Header-->
            <?php $this->load->view('layouts/admin/header'); ?>
            <!--end::Header-->

            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::Sidebar-->
                <?php $this->load->view('layouts/admin/sidebar'); ?>
                <!--end::Sidebar-->

                <!--begin::Main-->
                <?php $this->load->view($contents) ?>
                <!--end:::Main-->

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->

    </div>
    <!--end::App-->

    <!--begin::Drawers-->
    <?php $this->load->view('layouts/_partials/drawer') ?>
    <!--end::Drawers-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->
    <?php $this->load->view('layouts/_partials/modal') ?>
    <!--end::Modals-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Page-level Assets JS-->
    <?php foreach ($scripts as $script) : ?>
        <script src="<?= base_url($script); ?>"></script>
    <?php endforeach; ?>
    <!--end::Page-level Assets JS-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>