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
					Account Overview
				</h1>
				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<ul
					class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
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
					<li class="breadcrumb-item text-muted">Account</li>
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

			<!--begin:: Navbar Profile-->
			<?php $this->load->view('admin/account/nav', [
				'active_tab' => isset($active_tab) ? $active_tab : 'overview',
				'tab_url'    => isset($tab_url) ? $tab_url : site_url('admin/account/index'),
			]); ?>
			<!--end:: Navbar Profile-->

			<!--begin:: Tab Profile-->
			<?php $this->load->view($tab_view); ?>
			<!--end:: Tab Profile-->

		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
<!--end::Content wrapper-->