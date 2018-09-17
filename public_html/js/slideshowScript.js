function showDivs() {
	const mySlides = document.getElementsByClassName("mySlides");

	for (var i = 0; i < mySlides.length; i++) {
		mySlides[i].style.display = "none";
	}
	slideIndex++;

	if (slideIndex > mySlides.length) {
		slideIndex = 1;
	}

	mySlides[slideIndex-1].style.display = "block";

	setTimeout(showDivs, 4500);
}

var slideIndex = 0;
showDivs();
