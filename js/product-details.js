/**
 * @Description,
 *   Scripts to alter the functionality of the WooCommerce product details page.
 */


// Confirm this plugin is loading appropriately.
console.log("Boilerplate loaded.");



jQuery(function() {


	// let tab = document.querySelector(".product-details-desc");
	let tab = document.querySelector("#tab-description");
	
	console.log(tab.innerText);


	let target = document.querySelector(".entry-summary");
	
	let desc = document.createElement("div");
	desc.setAttribute("class","highscope-product-description");
	let textDesc = document.createTextNode(tab.innerText);
	desc.appendChild(textDesc);
	
	target.appendChild(desc);
});



function makeActiveTab(tabId) {

}