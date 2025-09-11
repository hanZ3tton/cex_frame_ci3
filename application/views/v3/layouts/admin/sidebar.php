 <div
     id="kt_app_sidebar"
     class="app-sidebar flex-column"
     data-kt-drawer="true"
     data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true"
     data-kt-drawer-width="225px"
     data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
     <!--begin::Logo-->
     <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
         <!--begin::Logo image-->
         <a href="<?= base_url('v3/admin/dashboard') ?>">
             <img
                 alt="Logo"
                 src="assets/media/logos/default-dark.svg"
                 class="h-25px app-sidebar-logo-default" />
             <img
                 alt="Logo"
                 src="assets/media/logos/default-small.svg"
                 class="h-20px app-sidebar-logo-minimize" />
         </a>
         <!--end::Logo image-->
         <!--begin::Sidebar toggle-->
         <div
             id="kt_app_sidebar_toggle"
             class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
             data-kt-toggle="true"
             data-kt-toggle-state="active"
             data-kt-toggle-target="body"
             data-kt-toggle-name="app-sidebar-minimize">
             <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                 <span class="path1"></span>
                 <span class="path2"></span>
             </i>
         </div>
         <!--end::Sidebar toggle-->
     </div>
     <!--end::Logo-->
     <!--begin::sidebar menu-->
     <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
         <!--begin::Menu wrapper-->
         <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
             <!--begin::Scroll wrapper-->
             <div
                 id="kt_app_sidebar_menu_scroll"
                 class="scroll-y my-5 mx-3"
                 data-kt-scroll="true"
                 data-kt-scroll-activate="true"
                 data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                 data-kt-scroll-wrappers="#kt_app_sidebar_menu"
                 data-kt-scroll-offset="5px"
                 data-kt-scroll-save-state="true">
                 <!--begin::Menu-->
                 <div
                     class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                     id="#kt_app_sidebar_menu"
                     data-kt-menu="true"
                     data-kt-menu-expand="false">
                     <!--begin:Menu item-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item here show menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-element-11 fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                     <span class="path4"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Admin</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link active" href="<?= base_url('v3/admin/dashboard') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Dashboard</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="v3/dashboards/ecommerce.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">eCommerce</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu item-->

                     <!--begin:Menu item-->
                     <div class="menu-item pt-5">
                         <!--begin:Menu content-->
                         <div class="menu-content">
                             <span class="menu-heading fw-bold text-uppercase fs-7">Menu</span>
                         </div>
                         <!--end:Menu content-->
                     </div>
                     <!--end:Menu item-->

                     <!--begin:Menu Shipment-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-parcel fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                     <span class="path3"></span>
                                     <span class="path4"></span>
                                     <span class="path5"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Shipment</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="<?= base_url('admin/list_inbound_all') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">All Inbound</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->

                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="<?= base_url('admin/list_inbound') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Not Proccess</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->

                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="<?= base_url('admin/list_order') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Not Completed</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->

                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="<?= base_url('admin/list_order_completed') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Completed</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->

                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/user-profile/followers.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Outbound</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->

                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu Shipement-->

                     <!--begin:Menu Data Heed Office-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="bi bi-building fs-2"></i>
                             </span>
                             <span class="menu-title">Data Head Office</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="<?= base_url('v3/admin/data_head_office/direct_inbound_ho') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Direct Inbound HO</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="<?= base_url('v3/admin/data_head_office/not_completed') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Not Completed</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="<?= base_url('v3/admin/data_head_office/data_receipt') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Data receipt</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu Data Heed Office-->

                     <!--begin: Menu Kalog-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="bi bi-train-front-fill fs-2"></i>
                             </span>
                             <span class="menu-title">Kalog</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="pages/social/feeds.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Data Kalog</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->

                     </div>
                     <!--end: Menu Kalog-->

                     <!--begin: Menu JNE Cargo-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-delivery fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                     <span class="path4"></span>
                                     <span class="path5"></span>
                                 </i>
                             </span>
                             <span class="menu-title">JNE Cargo</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="pages/social/feeds.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Data JNT Cargo</span>
                                     <span class="menu-badge">
                                         <span class="badge badge-success">3</span>
                                     </span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->

                     </div>
                     <!--end: Menu JNE Cargo-->

                     <!--begin: Menu Dosmestics-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-logistic fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                     <span class="path4"></span>
                                     <span class="path5"></span>
                                     <span class="path6"></span>
                                     <span class="path7"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Domestics</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="pages/social/feeds.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Exsys Shipment</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="pages/social/feeds.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">J&T Express</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->

                     </div>
                     <!--end: Menu Dosmestics-->

                     <!--begin:Menu Tracking-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-geolocation fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Tracking</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="pages/social/feeds.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Tracking Shipment</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/social/activity.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Update Location</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/social/followers.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Tracking History</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu Tracking-->

                     <!--begin: Menu Deposit-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-wallet fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                     <span class="path4"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Deposit</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="<?= base_url('v3/admin/topup') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Top Up</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->

                     </div>
                     <!--end: Menu Deposit-->

                     <!--begin:Menu Reports-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-document fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Reports</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="pages/social/feeds.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Shipment Reports</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/social/activity.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Revanue Reports</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/social/followers.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Perfomance Reports</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu Reports-->

                     <!--begin: Title-->
                     <div class="menu-item pt-5">
                         <!--begin:Menu content-->
                         <div class="menu-content">
                             <span class="menu-heading fw-bold text-uppercase fs-7">Settings</span>
                         </div>
                         <!--end:Menu content-->
                     </div>
                     <!--end: Title-->

                     <!--begin:Menu Shipping Rates-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a
                             class="menu-link"
                             href="<?= base_url('v3/admin/shipping_rates') ?>">
                             <span class="menu-icon">
                                 <i class="bi bi-currency-dollar fs-2"></i>
                             </span>
                             <span class="menu-title">Shipping Rates</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu Shipping Rates-->

                     <!--begin:Menu User Management-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-abstract-28 fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                 </i>
                             </span>
                             <span class="menu-title">User Management</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="<?= base_url('v3/admin/user') ?>">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">All User</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu User Management-->

                     <!--begin:Menu Guide-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-book fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Guide</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion menu-active-bg">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="pages/faq/classic.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Guide</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="pages/faq/extended.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">FAQ Extended</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu Guide-->

                     <!--begin:Menu item-->
                     <div class="menu-item pt-5">
                         <!--begin:Menu content-->
                         <div class="menu-content">
                             <span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span>
                         </div>
                         <!--end:Menu content-->
                     </div>
                     <!--end:Menu item-->

                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a
                             class="menu-link"
                             href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-abstract-13 fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Layout Builder</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->

                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a
                             class="menu-link"
                             href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                             target="_blank">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-rocket fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Components</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->

                 </div>
                 <!--end::Menu-->
             </div>
             <!--end::Scroll wrapper-->
         </div>
         <!--end::Menu wrapper-->
     </div>
     <!--end::sidebar menu-->
     <!--begin::Footer-->
     <div
         class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6"
         id="kt_app_sidebar_footer">
         <a
             href="https://preview.keenthemes.com/html/metronic/docs"
             class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
             data-bs-toggle="tooltip"
             data-bs-trigger="hover"
             data-bs-dismiss-="click"
             title="200+ in-house components and 3rd-party plugins">
             <span class="btn-label">Docs & Components</span>
             <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                 <span class="path1"></span>
                 <span class="path2"></span>
             </i>
         </a>
     </div>
     <!--end::Footer-->
 </div>