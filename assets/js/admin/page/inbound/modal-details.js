document.addEventListener("DOMContentLoaded", function () {
	const inboundModal = document.getElementById("kt_modal_inbound_detail");

	// Kalau modal belum ada (data kosong), jangan jalankan apapun
	if (!inboundModal) {
		return;
	}

	inboundModal.addEventListener("shown.bs.modal", function (event) {
		var button = event.relatedTarget;
		if (!button) return;

		function safeAttr(btn, attr) {
			return btn.getAttribute(attr) || "-";
		}

		this.querySelector("#detail-date").textContent = safeAttr(
			button,
			"data-inbound-date"
		);
		this.querySelector("#detail-cs").textContent = safeAttr(
			button,
			"data-inbound-cs"
		);
		this.querySelector("#detail-shipper").textContent = safeAttr(
			button,
			"data-sender-name"
		);
		this.querySelector("#detail-phone").textContent = safeAttr(
			button,
			"data-phone"
		);
		this.querySelector("#detail-weight").textContent = safeAttr(
			button,
			"data-weight"
		);
		this.querySelector("#detail-goods-desc").textContent = safeAttr(
			button,
			"data-goods-desc"
		);

		// Foto
		for (let i = 1; i <= 3; i++) {
			let picture = button.getAttribute("data-inbound-picture-" + i);
			let imgEl = this.querySelector("#detail-picture-" + i);

			if (imgEl) {
				if (picture) {
					imgEl.src = baseUrl + picture;
					imgEl.style.display = "block";
				} else {
					imgEl.removeAttribute("src");
					imgEl.style.display = "none";
				}
			}
		}
	});
});
