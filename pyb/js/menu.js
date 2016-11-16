// var thing1 = document.getElementById("hamburger");
// thing1.onclick = function() {
// 	var origclassname = "dropdown_menuitem"
// 	//alert("test")
// 	//var str = thing1.className;
// 	alert(String(thing1.className));
// 	if(!thing1.className.includes('show'){
// 		document.getElementById("hamburger").classList = origclassname + " " + "show";

// 	} 
// 	else {
// 		thing1.classList = origclassname + " " + "hide";
// 	}
// }
function testf(){
	alert("test");
}
$(document).ready( function() {



	$('#hamburger').on('click', function(){ 
		var dropdown = document.getElementById("myDropdown");
		var dropdown_overlay = document.getElementById("dropdownOverlay");
		var display = dropdown.style.display;


		if (display == "block"){
			dropdown.style.display= "none";
			dropdown_overlay.style.display = "none";
		}
		else {
			dropdown.style.display = "block";
			dropdown_overlay.style.display = "block";
		}
	});
});


// var $modalOverlay = $('#dropdownOverlay');
// var $modal        = $('#thedropdown');
// var $modalClose   = $('#hamburger');
// var $modalOpen    = $('#hamburger');

// $modalOpen.click(function(){
//   $modalOverlay.stop().fadeTo(500,1);
// });

// $modalOverlay.click(function(){
//   $modalOverlay.stop().fadeTo(500,0, function(){ $(this).hide(); });
// });


// $modal.click(function( e ) {
//    e.stopPropagation(); 
// });

// $modalClose.click(function(){
//   $modalOverlay.click();
// });