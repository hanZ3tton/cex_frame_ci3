"use strict";

var KTAppReportShipment = (function () {
	var table;
	var datatable;

	// Init datatable
	var initDatatable = function () {
		table = document.querySelector("#kt_report_shipment_table");

		if (!table) return;

		datatable = $(table).DataTable({
			info: false,
			order: [],
			pageLength: 10,
		});
	};

	// Init daterangepicker
	var initDaterangepicker = function () {
		var start = moment().subtract(29, "days");
		var end = moment();
		var input = $("#kt_report_shipment_daterangepicker");

		function cb(start, end) {
			input.val(
				start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
			);
		}

		input.daterangepicker(
			{
				startDate: start,
				endDate: end,
				ranges: {
					Today: [moment(), moment()],
					Yesterday: [
						moment().subtract(1, "days"),
						moment().subtract(1, "days"),
					],
					"Last 7 Days": [moment().subtract(6, "days"), moment()],
					"Last 30 Days": [moment().subtract(29, "days"), moment()],
					"This Month": [moment().startOf("month"), moment().endOf("month")],
					"Last Month": [
						moment().subtract(1, "month").startOf("month"),
						moment().subtract(1, "month").endOf("month"),
					],
				},
			},
			cb
		);

		cb(start, end);
	};

	// Export buttons
	var exportButtons = function () {
		var documentTitle = "Shipment Report";

		new $.fn.dataTable.Buttons(table, {
			buttons: [
				{ extend: "copyHtml5", title: documentTitle },
				{ extend: "excelHtml5", title: documentTitle },
				{ extend: "csvHtml5", title: documentTitle },
				{ extend: "pdfHtml5", title: documentTitle },
			],
		})
			.container()
			.appendTo($("#kt_report_shipment_export"));

		const exportButtons = document.querySelectorAll(
			"#kt_report_shipment_export_menu [data-kt-report-export]"
		);

		exportButtons.forEach((exportButton) => {
			exportButton.addEventListener("click", (e) => {
				e.preventDefault();
				const exportValue = e.target.getAttribute("data-kt-report-export");
				const target = document.querySelector(
					".dt-buttons .buttons-" + exportValue
				);
				target.click();
			});
		});
	};

	// Search
	var handleSearchDatatable = function () {
		const filterSearch = document.querySelector(
			'[data-kt-report-order-filter="search"]'
		);
		filterSearch.addEventListener("keyup", function (e) {
			datatable.search(e.target.value).draw();
		});
	};

	return {
		init: function () {
			initDatatable();
			initDaterangepicker();
			exportButtons();
			handleSearchDatatable();
		},
	};
})();

KTUtil.onDOMContentLoaded(function () {
	KTAppReportShipment.init();
});
