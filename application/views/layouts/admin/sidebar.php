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
         <a href="index.html">
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
                             <span class="menu-title">Dashboards</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link active" href="index.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Default</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="dashboards/ecommerce.html">
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
                                 <i class="bi bi-truck fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
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
                                     href="pages/user-profile/overview.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">All Inbound</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/user-profile/projects.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Not Proccess</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/user-profile/campaigns.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Not Completed</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/user-profile/documents.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Completed</span>
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
                                 <i class="bi bi-building fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                     <span class="path4"></span>
                                     <span class="path5"></span>
                                 </i>
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
                                 <a class="menu-link" href="account/overview.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Overview</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="account/settings.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Settings</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="account/security.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Security</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu Data Heed Office-->

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
                                     <span class="menu-title">Tracking SHipment</span>
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

                     <!--begin:Menu Deposit-->
                     <div
                         data-kt-menu-trigger="click"
                         class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-icon">
                                 <i class="ki-duotone ki-wallet fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                 </i>
                             </span>
                             <span class="menu-title">Deposit</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div
                                 data-kt-menu-trigger="click"
                                 class="menu-item menu-accordion">
                                 <!--begin:Menu link-->
                                 <span class="menu-link">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Topup</span>
                                     <span class="menu-arrow"></span>
                                 </span>
                                 <!--end:Menu link-->
                                 <!--begin:Menu sub-->
                                 <div
                                     class="menu-sub menu-sub-accordion menu-active-bg">
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/corporate/sign-in.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Sign-in</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/corporate/sign-up.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Sign-up</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/corporate/two-factor.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Two-Factor</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/corporate/reset-password.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Reset Password</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/corporate/new-password.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">New Password</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                 </div>
                                 <!--end:Menu sub-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div
                                 data-kt-menu-trigger="click"
                                 class="menu-item menu-accordion">
                                 <!--begin:Menu link-->
                                 <span class="menu-link">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Overlay Layout</span>
                                     <span class="menu-arrow"></span>
                                 </span>
                                 <!--end:Menu link-->
                                 <!--begin:Menu sub-->
                                 <div
                                     class="menu-sub menu-sub-accordion menu-active-bg">
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/overlay/sign-in.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Sign-in</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/overlay/sign-up.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Sign-up</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/overlay/two-factor.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Two-Factor</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/overlay/reset-password.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Reset Password</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div class="menu-item">
                                         <!--begin:Menu link-->
                                         <a
                                             class="menu-link"
                                             href="authentication/layouts/overlay/new-password.html">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">New Password</span>
                                         </a>
                                         <!--end:Menu link-->
                                     </div>
                                     <!--end:Menu item-->
                                 </div>
                                 <!--end:Menu sub-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu Deposit-->

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
                             href="#">
                             <span class="menu-icon">
                                 <i class="bi bi-currency-dollar fs-2">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                 </i>
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
                                     href="pages/user-profile/overview.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">All User</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/user-profile/projects.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Courier</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/user-profile/campaigns.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Staff</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a
                                     class="menu-link"
                                     href="pages/user-profile/documents.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Customers</span>
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