console.log("hello world");

const inputWeight = document.getElementById("weight");
const totalShippingCost = document.getElementById("total_shipping_cost");

function calculateShipping() {
	const weight = parseFloat(inputWeight.value) || 0;
	const ceilWeight = Math.ceil(weight);
	const shippingCost = 5000;
	const calculate = ceilWeight * shippingCost;
	totalShippingCost.value = calculate;
}

inputWeight.addEventListener("input", calculateShipping);
calculateShipping();
