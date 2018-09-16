const hamburger = document.getElementById('hamburger');

hamburger.addEventListener('click', function() {
	const dropdown = document.getElementById("myDropdown");
	const dropdown_overlay = document.getElementById("dropdownOverlay");
	const display = dropdown.style.display;

	if (display == "block"){
		dropdown.style.display= "none";
		dropdown_overlay.style.display = "none";
		$(this).css({"transform" : "rotate(12deg)", "opacity" : "1"});
	}
	else {
		dropdown.style.display = "block";
		dropdown_overlay.style.display = "block";

		$(this).css({"transform" : "rotate(-90deg)", "opacity" : "1"});
	}
});

hamburger.addEventListener('mouseover', function() {
	if (document.getElementById("myDropdown").style.display == "block"){
		$(this).css({
			"opacity" : "1",
			"transform" : "rotate(-90deg)",
			"transition" : ".3s ease"
		});
	} else {
		$(this).css({
			"opacity" : "1",
			"transform" : "rotate(12deg)",
			"transition" : ".3s ease"
		});
	}
});

hamburger.addEventListener('mouseout', function() {
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
});
