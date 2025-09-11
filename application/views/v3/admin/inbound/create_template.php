 <!--begin::Content wrapper-->
 <div class="d-flex flex-column flex-column-fluid">
   <!--begin::Toolbar-->
   <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
     <!--begin::Toolbar container-->
     <div
       id="kt_app_toolbar_container"
       class="app-container container-xxl d-flex flex-stack">
       <!--begin::Page title-->
       <div
         class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
         <!--begin::Title-->
         <h1
           class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
           Product Form
         </h1>
         <!--end::Title-->
         <!--begin::Breadcrumb-->
         <ul
           class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
           <!--begin::Item-->
           <li class="breadcrumb-item text-muted">
             <a
               href="index.html"
               class="text-muted text-hover-primary">Home</a>
           </li>
           <!--end::Item-->
           <!--begin::Item-->
           <li class="breadcrumb-item">
             <span class="bullet bg-gray-500 w-5px h-2px"></span>
           </li>
           <!--end::Item-->
           <!--begin::Item-->
           <li class="breadcrumb-item text-muted">eCommerce</li>
           <!--end::Item-->
           <!--begin::Item-->
           <li class="breadcrumb-item">
             <span class="bullet bg-gray-500 w-5px h-2px"></span>
           </li>
           <!--end::Item-->
           <!--begin::Item-->
           <li class="breadcrumb-item text-muted">Catalog</li>
           <!--end::Item-->
         </ul>
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
     <div
       id="kt_app_content_container"
       class="app-container container-xxl">
       <!--begin::Form-->
       <form
         id="kt_ecommerce_add_product_form"
         class="form d-flex flex-column flex-lg-row"
         data-kt-redirect="apps/ecommerce/catalog/products.html">
         <!--begin::Aside column-->
         <div
           class="d-flex flex-column gap-7 gap-lg-10 w-50 mb-7 me-lg-10">
           <!--begin::Status-->
           <div class="card card-flush py-4">
             <!--begin::Card header-->
             <div class="card-header">
               <!--begin::Card title-->
               <div class="card-title">
                 <h2>Status</h2>
               </div>
               <!--end::Card title-->
               <!--begin::Card toolbar-->
               <div class="card-toolbar">
                 <div
                   class="rounded-circle bg-success w-15px h-15px"
                   id="kt_ecommerce_add_product_status"></div>
               </div>
               <!--begin::Card toolbar-->
             </div>
             <!--end::Card header-->
             <!--begin::Card body-->
             <div class="card-body pt-0">
               <!--begin::Select2-->
               <select
                 class="form-select mb-2"
                 data-control="select2"
                 data-hide-search="true"
                 data-placeholder="Select an option"
                 id="kt_ecommerce_add_product_status_select">
                 <option></option>
                 <option value="published" selected="selected">
                   Published
                 </option>
                 <option value="draft">Draft</option>
                 <option value="scheduled">Scheduled</option>
                 <option value="inactive">Inactive</option>
               </select>
               <!--end::Select2-->
               <!--begin::Description-->
               <div class="text-muted fs-7">
                 Set the product status.
               </div>
               <!--end::Description-->
               <!--begin::Datepicker-->
               <div class="d-none mt-10">
                 <label
                   for="kt_ecommerce_add_product_status_datepicker"
                   class="form-label">Select publishing date and time</label>
                 <input
                   class="form-control"
                   id="kt_ecommerce_add_product_status_datepicker"
                   placeholder="Pick date & time" />
               </div>
               <!--end::Datepicker-->
             </div>
             <!--end::Card body-->
           </div>
           <!--end::Status-->
           <!--begin::Category & tags-->
           <div class="card card-flush py-4">
             <!--begin::Card header-->
             <div class="card-header">
               <!--begin::Card title-->
               <div class="card-title">
                 <h2>Product Details</h2>
               </div>
               <!--end::Card title-->
             </div>
             <!--end::Card header-->

             <!--begin::Card body-->
             <div class="card-body pt-0">
               <!--begin::Input group-->
               <div class="">
                 <!--begin::Label-->
                 <label class="form-label">Categories</label>
                 <!--end::Label-->
                 <!--begin::Select2-->
                 <select
                   class="form-select mb-2"
                   data-control="select2"
                   data-placeholder="Select an option"
                   data-allow-clear="true"
                   multiple="multiple">
                   <option></option>
                   <option value="Computers">Computers</option>
                   <option value="Watches">Watches</option>
                   <option value="Headphones">Headphones</option>
                   <option value="Footwear">Footwear</option>
                   <option value="Cameras">Cameras</option>
                   <option value="Shirts">Shirts</option>
                   <option value="Household">Household</option>
                   <option value="Handbags">Handbags</option>
                   <option value="Wines">Wines</option>
                   <option value="Sandals">Sandals</option>
                 </select>
                 <!--end::Select2-->
                 <!--begin::Description-->
                 <div class="text-muted fs-7 mb-7">
                   Add product to a category.
                 </div>
                 <!--end::Description-->
               </div>

               <div class="">
                 <!--begin::Label-->
                 <label class="form-label d-block">Name Item</label>
                 <!--end::Label-->
                 <!--begin::Input-->
                 <input
                   id="kt_ecommerce_add_product_tags"
                   name="kt_ecommerce_add_product_tags"
                   class="form-control mb-2"
                   value="" />
                 <!--end::Input-->
                 <!--begin::Description-->
                 <div class="text-muted fs-7 mb-7">
                   Add product to a category.
                 </div>
                 <!--end::Description-->
                 <!--end::Input group-->
               </div>

               <!--begin::Input group-->
               <div class="mb-10 fv-row row">
                 <div class="col-4">
                   <!--begin::Label-->
                   <label class="required form-label">Quantity</label>
                   <!--end::Label-->
                   <!--begin::Input-->
                   <input
                     type="number"
                     name="shelf"
                     class="form-control mb-2"
                     placeholder="On shelf"
                     value="" />
                   <!--end::Input-->
                 </div>

                 <div class="col-4">
                   <!--begin::Label-->
                   <label class="required form-label">Quantity</label>
                   <!--end::Label-->
                   <!--begin::Input-->
                   <input
                     type="number"
                     name="warehouse"
                     class="form-control mb-2"
                     placeholder="In warehouse" />
                   <!--end::Input-->
                 </div>

                 <div class="col-4">
                   <!--begin::Label-->
                   <label class="required form-label">Quantity</label>
                   <!--end::Label-->
                   <!--begin::Input-->
                   <input
                     type="number"
                     name="warehouse"
                     class="form-control mb-2"
                     placeholder="In warehouse" />
                   <!--end::Input-->
                 </div>
               </div>
               <!--end::Input group-->
             </div>
             <!--end::Card body-->
           </div>
           <!--end::Category & tags-->
           <!--begin::Table Detail Package-->
           <div class="card card-xl-stretch mb-xl-8">
             <!--begin::Header-->
             <div class="card-header border-0 pt-5">
               <h3 class="card-title align-items-start flex-column">
                 <span class="card-label fw-bold fs-3 mb-1">Latest Orders</span>
                 <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
               </h3>
               <div class="card-toolbar">
                 <ul class="nav">
                   <li class="nav-item">
                     <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_7_tab_1">Month</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_7_tab_2">Week</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_7_tab_3">Day</a>
                   </li>
                 </ul>
               </div>
             </div>
             <!--end::Header-->
             <!--begin::Body-->
             <div class="card-body py-3">
               <div class="tab-content">
                 <!--begin::Tap pane-->
                 <div class="tab-pane fade show active" id="kt_table_widget_7_tab_1">
                   <!--begin::Table container-->
                   <div class="table-responsive">
                     <!--begin::Table-->
                     <table class="table align-middle gs-0 gy-3">
                       <!--begin::Table head-->
                       <thead>
                         <tr>
                           <th class="p-0 w-50px"></th>
                           <th class="p-0 min-w-150px"></th>
                           <th class="p-0 min-w-140px"></th>
                           <th class="p-0 min-w-120px"></th>
                         </tr>
                       </thead>
                       <!--end::Table head-->
                       <!--begin::Table body-->
                       <tbody>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-success">
                                 <i class="ki-duotone ki-scroll fs-2x text-success">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                   <span class="path3"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Media Device</a>
                             <span class="text-muted fw-semibold d-block fs-7">Voice and video recorder</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">5 day ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-success fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-danger">
                                 <i class="ki-duotone ki-element-11 fs-2x text-danger">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                   <span class="path3"></span>
                                   <span class="path4"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Special Meal</a>
                             <span class="text-muted fw-semibold d-block fs-7">Quona Rice</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">2 day ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-danger fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-primary">
                                 <i class="ki-duotone ki-compass fs-2x text-primary">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New Users</a>
                             <span class="text-muted fw-semibold d-block fs-7">Awesome Users</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">4 day ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-primary fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-warning">
                                 <i class="ki-duotone ki-abstract-26 fs-2x text-warning">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                             <span class="text-muted fw-semibold d-block fs-7">Best Customers</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">1 day ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-warning fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-info">
                                 <i class="ki-duotone ki-bucket fs-2x text-info">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                   <span class="path3"></span>
                                   <span class="path4"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Strawberry Boxes</a>
                             <span class="text-muted fw-semibold d-block fs-7">From Spain</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">7 day ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-info fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                       </tbody>
                       <!--end::Table body-->
                     </table>
                   </div>
                   <!--end::Table-->
                 </div>
                 <!--end::Tap pane-->
                 <!--begin::Tap pane-->
                 <div class="tab-pane fade" id="kt_table_widget_7_tab_2">
                   <!--begin::Table container-->
                   <div class="table-responsive">
                     <!--begin::Table-->
                     <table class="table align-middle gs-0 gy-3">
                       <!--begin::Table head-->
                       <thead>
                         <tr>
                           <th class="p-0 w-50px"></th>
                           <th class="p-0 min-w-150px"></th>
                           <th class="p-0 min-w-140px"></th>
                           <th class="p-0 min-w-120px"></th>
                         </tr>
                       </thead>
                       <!--end::Table head-->
                       <!--begin::Table body-->
                       <tbody>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-info">
                                 <i class="ki-duotone ki-abstract-41 fs-2x text-info">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Strawberry Boxes</a>
                             <span class="text-muted fw-semibold d-block fs-7">From Spain</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">4 week ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-info fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-danger">
                                 <i class="ki-duotone ki-element-11 fs-2x text-danger">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                   <span class="path3"></span>
                                   <span class="path4"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Special Meal</a>
                             <span class="text-muted fw-semibold d-block fs-7">Quona Rice</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">2 week ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-danger fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-warning">
                                 <i class="ki-duotone ki-abstract-26 fs-2x text-warning">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                             <span class="text-muted fw-semibold d-block fs-7">Best Customers</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">5 week ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-warning fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                       </tbody>
                       <!--end::Table body-->
                     </table>
                   </div>
                   <!--end::Table-->
                 </div>
                 <!--end::Tap pane-->
                 <!--begin::Tap pane-->
                 <div class="tab-pane fade" id="kt_table_widget_7_tab_3">
                   <!--begin::Table container-->
                   <div class="table-responsive">
                     <!--begin::Table-->
                     <table class="table align-middle gs-0 gy-3">
                       <!--begin::Table head-->
                       <thead>
                         <tr>
                           <th class="p-0 w-50px"></th>
                           <th class="p-0 min-w-150px"></th>
                           <th class="p-0 min-w-140px"></th>
                           <th class="p-0 min-w-120px"></th>
                         </tr>
                       </thead>
                       <!--end::Table head-->
                       <!--begin::Table body-->
                       <tbody>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-success">
                                 <i class="ki-duotone ki-basket fs-2x text-success">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                   <span class="path3"></span>
                                   <span class="path4"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Media Device</a>
                             <span class="text-muted fw-semibold d-block fs-7">Voice and video recorder</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">3 month ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-success fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-danger">
                                 <i class="ki-duotone ki-element-11 fs-2x text-danger">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                   <span class="path3"></span>
                                   <span class="path4"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Special Meal</a>
                             <span class="text-muted fw-semibold d-block fs-7">Quona Rice</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">5 month ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-danger fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-warning">
                                 <i class="ki-duotone ki-abstract-26 fs-2x text-warning">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                             <span class="text-muted fw-semibold d-block fs-7">Best Customers</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">6 month ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-warning fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                         <tr>
                           <td>
                             <div class="symbol symbol-50px me-2">
                               <span class="symbol-label bg-light-info">
                                 <i class="ki-duotone ki-abstract-41 fs-2x text-info">
                                   <span class="path1"></span>
                                   <span class="path2"></span>
                                 </i>
                               </span>
                             </div>
                           </td>
                           <td>
                             <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Strawberry Boxes</a>
                             <span class="text-muted fw-semibold d-block fs-7">From Spain</span>
                           </td>
                           <td class="text-end">
                             <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                             <span class="text-gray-900 fw-bold d-block fs-7">4 month ago</span>
                           </td>
                           <td class="text-end">
                             <span class="badge badge-light-info fs-7 fw-bold">Delivered</span>
                           </td>
                           <td class="text-end">
                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                               <i class="ki-solid ki-dots-horizontal fs-1"></i>
                             </a>
                           </td>
                         </tr>
                       </tbody>
                       <!--end::Table body-->
                     </table>
                   </div>
                   <!--end::Table-->
                 </div>
                 <!--end::Tap pane-->
               </div>
             </div>
             <!--end::Body-->
           </div>
           <!--end::Table Detail Package--->
         </div>
         <!--end::Aside column-->

         <!--begin::Main column-->
         <div
           class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 w-100">
           <!--begin:::Tabs-->
           <ul
             class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
             <!--begin:::Tab item-->
             <li class="nav-item">
               <a
                 class="nav-link text-active-primary pb-4 active"
                 data-bs-toggle="tab"
                 href="#kt_ecommerce_add_product_general">General</a>
             </li>
             <!--end:::Tab item-->
             <!--begin:::Tab item-->
             <li class="nav-item">
               <a
                 class="nav-link text-active-primary pb-4"
                 data-bs-toggle="tab"
                 href="#kt_ecommerce_add_product_advanced">Advanced</a>
             </li>
             <!--end:::Tab item-->
           </ul>
           <!--end:::Tabs-->

           <!--begin::Tab content-->
           <div class="tab-content">
             <!--begin::Tab pane-->
             <div
               class="tab-pane fade show active"
               id="kt_ecommerce_add_product_general"
               role="tab-panel">
               <div class="d-flex flex-column gap-7 gap-lg-10">
                 <!--begin::General options-->
                 <div class="card card-flush py-4">
                   <!--begin::Card header-->
                   <div class="card-header">
                     <div class="card-title">
                       <h2>Information Sender</h2>
                     </div>
                   </div>
                   <!--end::Card header-->
                   <!--begin::Card body-->
                   <div class="card-body row pt-0">
                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Sender Name</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Phone Number</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row ">
                       <!--begin::Label-->
                       <label class="required form-label">Address Sender</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <textarea
                         type="text"
                         name="sender_name"
                         style="
                          resize: none;
                          height: 100px;"
                         class="form-control mb-2"
                         placeholder="Address Sender"></textarea>
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->
                   </div>
                   <!--end::Card header-->
                 </div>
                 <!--end::General options-->

                 <!--begin::General options-->
                 <div class="card card-flush py-4">
                   <!--begin::Card header-->
                   <div class="card-header">
                     <div class="card-title">
                       <h2>Information Receiver</h2>
                     </div>
                   </div>
                   <!--end::Card header-->
                   <!--begin::Card body-->
                   <div class="card-body row pt-0">
                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Sender Name</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Phone Number</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Sender Name</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Phone Number</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Sender Name</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Phone Number</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row ">
                       <!--begin::Label-->
                       <label class="required form-label">Address Sender</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <textarea
                         type="text"
                         name="sender_name"
                         style="
                          resize: none;
                          height: 100px;"
                         class="form-control mb-2"
                         placeholder="Address Sender"></textarea>
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->
                   </div>
                   <!--end::Card header-->
                 </div>
                 <!--end::General options-->

                 <!--begin::General options-->
                 <div class="card card-flush py-4">
                   <!--begin::Card header-->
                   <div class="card-header">
                     <div class="card-title">
                       <h2>Information Package</h2>
                     </div>
                   </div>
                   <!--end::Card header-->
                   <!--begin::Card body-->
                   <div class="card-body row pt-0">
                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Sender Name</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Phone Number</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Sender Name</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Phone Number</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Sender Name</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="mb-10 fv-row col-6">
                       <!--begin::Label-->
                       <label class="required form-label">Phone Number</label>
                       <!--end::Label-->
                       <!--begin::Input-->
                       <input
                         type="text"
                         name="sender_name"
                         class="form-control mb-2"
                         placeholder="Product name"
                         value="" />
                       <!--end::Input-->
                       <!--begin::Description-->
                       <div class="text-muted fs-7">
                         A product name is required and recommended
                         to be unique.
                       </div>
                       <!--end::Description-->
                     </div>
                     <!--end::Input group-->
                   </div>
                   <!--end::Card header-->
                 </div>
                 <!--end::General options-->

                 <!--begin::Button-->
                 <div class="d-flex justify-content-end mt-5 mb-3">
                   <!--begin::Button-->
                   <a
                     href="apps/ecommerce/catalog/products.html"
                     id="kt_ecommerce_add_product_cancel"
                     class="btn btn-light me-5">Cancel</a>
                   <!--end::Button-->
                   <!--begin::Button-->
                   <button
                     type="submit"
                     id="kt_ecommerce_add_product_submit"
                     class="btn btn-primary">
                     <span class="indicator-label">Save Changes</span>
                     <span class="indicator-progress">Please wait...
                       <span
                         class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                   </button>
                   <!--end::Button-->
                 </div>
                 <!--end::Button-->
               </div>
             </div>
             <!--end::Tab pane-->

             <!--begin::Tab pane-->
             <div
               class="tab-pane fade"
               id="kt_ecommerce_add_product_advanced"
               role="tab-panel">
               <div class="d-flex flex-column gap-7 gap-lg-10">
                 <!--begin::Media-->
                 <div class="card card-flush py-4">
                   <!--begin::Card header-->
                   <div class="card-header">
                     <div class="card-title">
                       <h2>Information package photo</h2>
                     </div>
                   </div>
                   <!--end::Card header-->
                   <!--begin::Card body-->
                   <div class="card-body pt-0">
                     <!--begin::Input group-->
                     <div class="fv-row mb-2">
                       <!--begin::Input File-->
                       <div class="">
                         <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                         <input class="form-control" type="file" id="formFileMultiple" multiple>
                       </div>
                       <!--end::Input File-->
                     </div>
                     <!--end::Input group-->

                     <!--begin::Description-->
                     <div class="text-muted fs-7">
                       Set the product media gallery.
                     </div>
                     <!--end::Description-->
                   </div>
                   <!--end::Card header-->
                 </div>
                 <!--end::Media-->
               </div>

               <!--begin::Button-->
               <div class="d-flex justify-content-end mt-5 mb-3">
                 <!--begin::Button-->
                 <a
                   href="apps/ecommerce/catalog/products.html"
                   id="kt_ecommerce_add_product_cancel"
                   class="btn btn-light me-5">Cancel</a>
                 <!--end::Button-->
                 <!--begin::Button-->
                 <button
                   type="submit"
                   id="kt_ecommerce_add_product_submit"
                   class="btn btn-primary">
                   <span class="indicator-label">Upload</span>
                   <span class="indicator-progress">Please wait...
                     <span
                       class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                 </button>
                 <!--end::Button-->
               </div>
               <!--end::Button-->
             </div>
             <!--end::Tab pane-->
           </div>
           <!--end::Tab content-->

         </div>
         <!--end::Main column-->
       </form>
       <!--end::Form-->
     </div>
     <!--end::Content container-->
   </div>
   <!--end::Content-->
 </div>
 <!--end::Content wrapper-->