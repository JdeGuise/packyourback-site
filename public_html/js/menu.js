const hamburger = document.getElementById('hamburger');
const myDropdown = document.getElementById('myDropdown');

hamburger.addEventListener('click', function() {
	const dropdown = document.getElementById("myDropdown");
	const dropdownOverlay = document.getElementById("dropdownOverlay");

	if (dropdown.style.display === "block"){
		dropdown.style.display = "none";
		dropdownOverlay.style.display = "none";
		hamburger.style.transform = "rotate(12deg)";
	}
	else {
		dropdown.style.display = "block";
		dropdownOverlay.style.display = "block";
		hamburger.style.transform = "rotate(-90deg)";
	}
});

hamburger.addEventListener('mouseover', function() {
	if (myDropdown.style.display === "block"){
		hamburger.style.transform = "rotate(-90deg)";
	} else {
		hamburger.style.transform = "rotate(12deg)";
	}
});

hamburger.addEventListener('mouseout', function() {
	if (myDropdown.style.display === "block"){
		hamburger.style.transform = "rotate(-90deg)";
	} else {
		hamburger.style.transform = "rotate(0deg)";
	}
});
