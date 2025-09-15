var inboundModal = document.getElementById("kt_modal_inbound_detail");

inboundModal.addEventListener("shown.bs.modal", function (event) {
	var button = event.relatedTarget;

	// Ambil data-* dari tombol
	var date = button.getAttribute("data-inbound-date");
	var cs = button.getAttribute("data-inbound-cs");
	var name = button.getAttribute("data-sender-name");
	var phone = button.getAttribute("data-phone");
	var weight = button.getAttribute("data-weight");
	var desc = button.getAttribute("data-goods-desc");

	// Set ke modal (sudah aman karena modal visible)
	this.querySelector("#detail-date").textContent = date;
	this.querySelector("#detail-cs").textContent = cs;
	this.querySelector("#detail-shipper").textContent = name;
	this.querySelector("#detail-phone").textContent = phone;
	this.querySelector("#detail-weight").textContent = weight;
	this.querySelector("#detail-goods-desc").textContent = desc;
});
