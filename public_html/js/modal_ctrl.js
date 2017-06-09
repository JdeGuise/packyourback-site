// Get the modal
var tos_modal = document.getElementById("tos_modal");
var pp_modal = document.getElementById("pp_modal");

// Get the button that opens the modal
var tos_btn = document.getElementById("tos_btn");
var pp_btn = document.getElementById("pp_btn");

// Get the <span> element that closes the modal
var tos_span = document.getElementsByClassName("tos_close")[0];
var pp_span = document.getElementsByClassName("pp_close")[0];

// When the user clicks the button, open the modal 
tos_btn.onclick = function() {
    tos_modal.style.display = "block";
}

pp_btn.onclick = function() {
	pp_modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
tos_span.onclick = function() {
    tos_modal.style.display = "none";
}

pp_span.onclick = function() {
	pp_modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == tos_modal) {
        tos_modal.style.display = "none";
    }
}

window.onclick = function(event) {
	if (event.target == pp_modal) {
		pp_modal.style.display = "none";
	}
}