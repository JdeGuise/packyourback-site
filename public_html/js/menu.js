$(document).ready( function() {
	$('#hamburger').on('click', function(){
		var dropdown = document.getElementById("myDropdown");
		console.log(dropdown);
		var dropdown_overlay = document.getElementById("dropdownOverlay");
		var display = dropdown.style.display;

		if (display == "block"){
			dropdown.style.display= "none";
			dropdown_overlay.style.display = "none";
			$(this).css({"transform" : "rotate(12deg)", "opacity" : ".8"});
		}
		else {
			dropdown.style.display = "block";
			dropdown_overlay.style.display = "block";

			$(this).css({"transform" : "rotate(-90deg)", "opacity" : ".8"});
		}
	});
});

$("#hamburger").hover(
	function(){
		if (document.getElementById("myDropdown").style.display == "block"){
			$(this).css({
				"opacity" : ".8",
				"transform" : "rotate(-90deg)",
				"transition" : ".3s ease"
			});
		} else {
			$(this).css({
				"opacity" : ".8",
				"transform" : "rotate(12deg)",
				"transition" : ".3s ease"
			});
		}
	}, function(){
		if (document.getElementById("myDropdown").style.display == "block"){
			$(this).css({
				"opacity" : "1",
				"transform" : "rotate(-90deg)"
			});
		} else {
			$(this).css({
				"opacity" : "1",
				"transform" : "rotate(0deg)"
			});
		}
	}
);