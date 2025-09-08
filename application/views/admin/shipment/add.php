<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Product Form</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="index.html" class="text-muted text-hover-primary">Home</a>
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
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <!--begin::Form-->
                        <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="apps/ecommerce/catalog/products.html">

                            <!--begin::Main column-->
                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                <!--begin:::Tabs-->
                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Inbound Information</a>
                                    </li>
                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                        <div class="d-flex flex-column gap-7 gap-lg-10">
                                            <!--begin::General options-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>General</h2>
                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="row g-5">
                                                        <!-- AWB Number -->
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required form-label">AWB Number</label>
                                                            <input type="text" name="awb_number" class="form-control mb-2" placeholder="AWB Number" value="" />
                                                            <div class="text-muted fs-7">Enter the Air Waybill Number.</div>
                                                        </div>

                                                        <!-- Courier -->
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required form-label">Courier</label>
                                                            <input type="text" name="courier" class="form-control mb-2" placeholder="Courier" value="" />
                                                            <div class="text-muted fs-7">Enter courier name.</div>
                                                        </div>

                                                        <!-- Status -->
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required form-label">Status</label>
                                                            <select name="status" class="form-select mb-2">
                                                                <option value="">-- Select Status --</option>
                                                                <option value="pending">Pending</option>
                                                                <option value="received">Received</option>
                                                                <option value="problem">Problem</option>
                                                            </select>
                                                            <div class="text-muted fs-7">Choose the shipment status.</div>
                                                        </div>

                                                        <!-- Sender -->
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required form-label">Sender</label>
                                                            <input type="text" name="sender" class="form-control mb-2" placeholder="Sender" value="" />
                                                            <div class="text-muted fs-7">Enter sender name.</div>
                                                        </div>

                                                        <!-- Receiver -->
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required form-label">Receiver</label>
                                                            <input type="text" name="receiver" class="form-control mb-2" placeholder="Receiver" value="" />
                                                            <div class="text-muted fs-7">Enter receiver name.</div>
                                                        </div>

                                                        <!-- Received By -->
                                                        <div class="col-md-6 fv-row">
                                                            <label class="form-label">Received By</label>
                                                            <input type="text" name="received_by" class="form-control mb-2" placeholder="Receiver's Representative" value="" />
                                                            <div class="text-muted fs-7">Enter who received the package.</div>
                                                        </div>
                                                    </div>

                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div>
                                                        <!--begin::Label-->
                                                        <label class="form-label">Description</label>
                                                        <!--end::Label-->
                                                        <!--begin::Editor-->
                                                        <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div>
                                                        <!--end::Editor-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::General options-->
                                            <!--begin::Pricing-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Pricing</h2>
                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="required form-label">Base Price</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="" />
                                                        <!--end::Input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product price.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Discount Type
                                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select a discount type that will be applied to this product">
                                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span></label>
                                                        <!--End::Label-->
                                                        <!--begin::Row-->
                                                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                                    <!--begin::Radio-->
                                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                        <input class="form-check-input" type="radio" name="discount_option" value="1" checked="checked" />
                                                                    </span>
                                                                    <!--end::Radio-->
                                                                    <!--begin::Info-->
                                                                    <span class="ms-5">
                                                                        <span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
                                                                    </span>
                                                                    <!--end::Info-->
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                                    <!--begin::Radio-->
                                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                        <input class="form-check-input" type="radio" name="discount_option" value="2" />
                                                                    </span>
                                                                    <!--end::Radio-->
                                                                    <!--begin::Info-->
                                                                    <span class="ms-5">
                                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Percentage %</span>
                                                                    </span>
                                                                    <!--end::Info-->
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                                    <!--begin::Radio-->
                                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                        <input class="form-check-input" type="radio" name="discount_option" value="3" />
                                                                    </span>
                                                                    <!--end::Radio-->
                                                                    <!--begin::Info-->
                                                                    <span class="ms-5">
                                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Fixed Price</span>
                                                                    </span>
                                                                    <!--end::Info-->
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Set Discount Percentage</label>
                                                        <!--end::Label-->
                                                        <!--begin::Slider-->
                                                        <div class="d-flex flex-column text-center mb-5">
                                                            <div class="d-flex align-items-start justify-content-center mb-7">
                                                                <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                                                <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                            </div>
                                                            <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                                        </div>
                                                        <!--end::Slider-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Fixed Discounted Price</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price" />
                                                        <!--end::Input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the determined fixed price</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Tax-->
                                                    <div class="d-flex flex-wrap gap-5">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row w-100 flex-md-root">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Tax Class</label>
                                                            <!--end::Label-->
                                                            <!--begin::Select2-->
                                                            <select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                                                                <option></option>
                                                                <option value="0">Tax Free</option>
                                                                <option value="1">Taxable Goods</option>
                                                                <option value="2">Downloadable Product</option>
                                                            </select>
                                                            <!--end::Select2-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fs-7">Set the product tax class.</div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row w-100 flex-md-root">
                                                            <!--begin::Label-->
                                                            <label class="form-label">VAT Amount (%)</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control mb-2" value="" />
                                                            <!--end::Input-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fs-7">Set the product VAT about.</div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end:Tax-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::Pricing-->
                                        </div>
                                    </div>
                                    <!--end::Tab pane-->
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                        <div class="d-flex flex-column gap-7 gap-lg-10">
                                            <!--begin::Media-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Package Photo Information</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="mb-100 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="required form-label">Package Photo</label>
                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-2">
                                                        <!--begin::Dropzone-->
                                                        <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                            <!--begin::Message-->
                                                            <div class="dz-message needsclick">
                                                                <!--begin::Icon-->
                                                                <i class="ki-duotone ki-file-up text-primary fs-3x">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <!--end::Icon-->
                                                                <!--begin::Info-->
                                                                <div class="ms-4">
                                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                                    <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                        </div>
                                                        <!--end::Dropzone-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product media gallery.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::Media-->
                                            <!--begin::Variations-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Variations</h2>
                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Add Product Variations</label>
                                                        <!--end::Label-->
                                                        <!--begin::Repeater-->
                                                        <div id="kt_ecommerce_add_product_options">
                                                            <!--begin::Form group-->
                                                            <div class="form-group">
                                                                <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                                    <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                        <!--begin::Select2-->
                                                                        <div class="w-100 w-md-200px">
                                                                            <select class="form-select" name="product_option" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option">
                                                                                <option></option>
                                                                                <option value="color">Color</option>
                                                                                <option value="size">Size</option>
                                                                                <option value="material">Material</option>
                                                                                <option value="style">Style</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Select2-->
                                                                        <!--begin::Input-->
                                                                        <input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Variation" />
                                                                        <!--end::Input-->
                                                                        <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                                                            <i class="ki-duotone ki-cross fs-1">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Form group-->
                                                            <!--begin::Form group-->
                                                            <div class="form-group mt-5">
                                                                <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                                                    <i class="ki-duotone ki-plus fs-2"></i>Add another variation</button>
                                                            </div>
                                                            <!--end::Form group-->
                                                        </div>
                                                        <!--end::Repeater-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::Variations-->
                                            <!--begin::Shipping-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Shipping</h2>
                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row">
                                                        <!--begin::Input-->
                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" />
                                                            <label class="form-check-label">This is a physical product</label>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set if the product is a physical or digital item. Physical products may require shipping.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Shipping form-->
                                                    <div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10 fv-row">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Weight</label>
                                                            <!--end::Label-->
                                                            <!--begin::Editor-->
                                                            <input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="" />
                                                            <!--end::Editor-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Dimension</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                                                <input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="" />
                                                                <input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="" />
                                                                <input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="" />
                                                            </div>
                                                            <!--end::Input-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).</div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Shipping form-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::Shipping-->
                                            <!--begin::Meta options-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Meta Options</h2>
                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Meta Tag Title</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
                                                        <!--end::Input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Meta Tag Description</label>
                                                        <!--end::Label-->
                                                        <!--begin::Editor-->
                                                        <div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div>
                                                        <!--end::Editor-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set a meta tag description to the product for increased SEO ranking.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div>
                                                        <!--begin::Label-->
                                                        <label class="form-label">Meta Tag Keywords</label>
                                                        <!--end::Label-->
                                                        <!--begin::Editor-->
                                                        <input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" />
                                                        <!--end::Editor-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set a list of keywords that the product is related to. Separate the keywords by adding a comma
                                                            <code>,</code>between each keyword.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::Meta options-->
                                        </div>
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab content-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                        <span class="indicator-label">Save Changes</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
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
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->