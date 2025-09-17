var inboundModal = document.getElementById("kt_modal_inbound_detail");

inboundModal.addEventListener("shown.bs.modal", function (event) {
	var button = event.relatedTarget;

	// Ambil data-* dari tombol
	var date = button.getAttribute("data-inbound-date");
	var name = button.getAttribute("data-sender-name");
	var phone = button.getAttribute("data-phone");
	var weight = button.getAttribute("data-weight");
	var desc = button.getAttribute("data-goods-desc");
	var cs = button.getAttribute("data-inbound-cs");

	// Set ke modal (text)
	this.querySelector("#detail-date").textContent = date;
	this.querySelector("#detail-cs").textContent = cs;
	this.querySelector("#detail-shipper").textContent = name;
	this.querySelector("#detail-phone").textContent = phone;
	this.querySelector("#detail-weight").textContent = weight;
	this.querySelector("#detail-goods-desc").textContent = desc;

	// Foto (tetap tampil meskipun kosong)
	for (let i = 1; i <= 3; i++) {
		let picture = button.getAttribute("data-inbound-picture-" + i);
		let imgEl = this.querySelector("#detail-picture-" + i);

		if (picture) {
			imgEl.src = baseUrl + picture;
			imgEl.style.display = "block";
		} else {
			imgEl.src = "";
			imgEl.style.display = "none";
		}
	}
});
