/**
 * @package YV Cookies
 * @author Yatharth Vyas https://github.com/YatharthVyas
 */

window.onload = (event) => {
	// Get the modal
	var modal = document.getElementById("yvcookie-modal");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("yvcookie-close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.classList.add("hide");
	};
}