"use strict";

var KTOrdersList = (function () {
	// Define shared variables
	var table = document.getElementById("kt_table_orders");
	var datatable;

	// Private functions
	var initOrderTable = function () {
		if (!table) return;

		// kalau mau proses tiap row, pakai table.querySelectorAll("tbody tr")
		// const tableRows = table.querySelectorAll("tbody tr");
		// tableRows.forEach((row) => { /* ... */ });

		// Init datatable --- more info on datatables: https://datatables.net/manual/
		datatable = $(table).DataTable({
			info: false,
			order: [],
			pageLength: 10,
			lengthChange: false,
			columnDefs: [
				{ orderable: false, targets: 0 },
				{ orderable: false, targets: 6 },
			],
		});
	};

	// Search Datatable
	var handleSearchDatatable = () => {
		// dukungan selector ganda (order / inbound), jadi lebih tahan terhadap perbedaan atribut
		const filterSearch = document.querySelector(
			'[data-kt-order-table-filter="search"], [data-kt-inbound-table-filter="search"], [data-kt-table-filter="search"]'
		);
		if (!filterSearch || !datatable) return;

		filterSearch.addEventListener("keyup", function (e) {
			datatable.search(e.target.value).draw();
		});
	};

	// Filter Datatable
	var handleFilterDatatable = () => {
		const filterForm = document.querySelector(
			'[data-kt-order-table-filter="form"], [data-kt-inbound-table-filter="form"], [data-kt-table-filter="form"]'
		);
		if (!filterForm || !datatable) return;

		const filterButton = filterForm.querySelector(
			'[data-kt-order-table-filter="filter"], [data-kt-inbound-table-filter="filter"], [data-kt-table-filter="filter"]'
		);
		const selectOptions = filterForm.querySelectorAll("select");

		if (!filterButton) return;

		filterButton.addEventListener("click", function () {
			let filterString = "";

			selectOptions.forEach((item, index) => {
				if (item.value && item.value !== "") {
					if (index !== 0) filterString += " ";
					filterString += item.value;
				}
			});

			datatable.search(filterString).draw();
		});
	};

	// Reset Filter
	var handleResetForm = () => {
		const resetButton = document.querySelector(
			'[data-kt-order-table-filter="reset"], [data-kt-inbound-table-filter="reset"], [data-kt-table-filter="reset"]'
		);
		if (!resetButton || !datatable) return;

		resetButton.addEventListener("click", function () {
			const filterForm = document.querySelector(
				'[data-kt-order-table-filter="form"], [data-kt-inbound-table-filter="form"], [data-kt-table-filter="form"]'
			);
			if (!filterForm) return;

			const selectOptions = filterForm.querySelectorAll("select");

			selectOptions.forEach((select) => {
				$(select).val("").trigger("change");
			});

			datatable.search("").draw();
		});
	};

	return {
		// Public functions
		init: function () {
			if (!table) {
				// kalau halaman ini gak ada table, jangan lanjutin
				return;
			}

			initOrderTable();
			handleSearchDatatable();
			handleResetForm();
			handleFilterDatatable();
		},
	};
})();

// On document ready (Metronic util)
KTUtil.onDOMContentLoaded(function () {
	KTOrdersList.init();
});
