<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->

<head>
    <!--begin::Partials Head-->
    <?php $this->load->view('layouts/_partials/head'); ?>
    <!--end::Partials Head-->
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank">
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

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <!--begin::Content-->
        <?php $this->load->view($contents) ?>
        <!--end::Content-->

    </div>
    <!--end::Root-->

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
        <?php if (parse_url($script, PHP_URL_SCHEME) === 'https') : ?>
            <script src="<?= $script; ?>"></script>
        <?php else : ?>
            <script src="<?= base_url($script); ?>"></script>
        <?php endif; ?>
    <?php endforeach; ?>
    <!--end::Page-level Assets JS-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>