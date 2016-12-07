
function testf(){
	alert("test");
}
$(document).ready( function() {
	$('#hamburger').on('click', function(){ 
		var dropdown = document.getElementById("myDropdown");
		var dropdown_overlay = document.getElementById("dropdownOverlay");
		var display = dropdown.style.display;


		if (display == "block"){
			// dropdown.css("display","none")
			// dropdown_overlay.css({"display":"none"})
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



// $modalOpen.click(function(){
//   $modalOverlay.stop().fadeTo(500,1);
// });

