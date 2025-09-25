"use strict";

var KTOTrackingList = (function () {
	// Define shared variables
	var table = document.getElementById("kt_table_tracking");
	var datatable;

	// Private functions
	var initTrackingTable = function () {
		if (!table) return;

		// kalau mau proses tiap row, pakai table.querySelectorAll("tbody tr")
		// const tableRows = table.querySelectorAll("tbody tr");
		// tableRows.forEach((row) => { /* ... */ });

		// Init datatable --- more info on datatables: https://datatables.net/manual/
		datatable = $(table).DataTable({
			info: false,
			order: [],
			pageLength: 10,
			columnDefs: [
				{ orderable: false, targets: 0 },
				{ orderable: false, targets: 6 },
			],
		});
	};

	var handleSearchDatatable = () => {
		const filterSearch = document.querySelector(
			'[data-kt-tracking-table-filter="search"], [data-kt-tracking-table-filter="search"], [data-kt-table-filter="search"]'
		);
		if (!filterSearch || !datatable) return;

		filterSearch.addEventListener("keyup", function (e) {
			datatable.search(e.target.value).draw();
		});
	};

	// Filter Datatable
	var handleFilterDatatable = () => {
		const filterForm = document.querySelector(
			'[data-kt-tracking-table-filter="form"], [data-kt-tracking-table-filter="form"], [data-kt-table-filter="form"]'
		);
		if (!filterForm || !datatable) return;

		const filterButton = filterForm.querySelector(
			'[data-kt-tracking-table-filter="filter"], [data-kt-tracking-table-filter="filter"], [data-kt-table-filter="filter"]'
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
			'[data-kt-tracking-table-filter="reset"], [data-kt-tracking-table-filter="reset"], [data-kt-table-filter="reset"]'
		);
		if (!resetButton || !datatable) return;

		resetButton.addEventListener("click", function () {
			const filterForm = document.querySelector(
				'[data-kt-tracking-table-filter="form"], [data-kt-tracking-table-filter="form"], [data-kt-table-filter="form"]'
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

			initTrackingTable();
			handleSearchDatatable();
			handleResetForm();
			handleFilterDatatable();
		},
	};
})();

// On document ready (Metronic util)
KTUtil.onDOMContentLoaded(function () {
	KTOTrackingList.init();
});
