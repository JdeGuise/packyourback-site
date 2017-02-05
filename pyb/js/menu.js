$(".menuitem").hover(
	function(){
		$(this).css({"border-bottom" : "7px",
					"border-color": "rgb(48, 88, 164)",
					"transition" : ".2s all",
					'border-style': "none none solid none"});
	}, function(){
		$(this).css({"border-bottom" : "7px",
					"border-color" : "rgb(242, 242, 242)",
					'border-style': "none none solid none",
					"transition" : ".2s all"});
	}
);

$(".dropdown_menuitem").hover(
	function(){
		$(this).css({"border-bottom" : "7px",
					"border-color": "rgb(48, 88, 164)",
					"border-color": "rgba(48, 88, 164, 1)",
					"transition" : ".2s all",
					'border-style': "none none solid none"});
	}, function(){
		$(this).css({"border-bottom" : "7px",
					"border-color" : "rgb(242, 242, 242)",
					"border-color" : "rgba(242, 242, 242, 0)",
					'border-style': "none none solid none",
					"transition" : ".2s all"});
	}
);

$("#donatebutton").hover(
	function(){
		$(this).css({"border-width" : "2px",
					"border-color": "rgb(48, 88, 164)",
					"transition" : ".2s all",
					'border-style': "outset"});
	}, function(){
		$(this).css({"border-width" : "2px",
					"border-color" : "rgb(255, 255, 255)",
					'border-style': "outset",
					"transition" : ".2s all",
					"top" : "9px",
					"right" : "9px"});
	}
);

$("#dropdown_donatebutton").hover(
	function(){
		$(this).css({"border-width" : "2px",
					"border-color": "rgb(48, 88, 164)",
					"transition" : ".2s all",
					'border-style': "outset"});
	}, function(){
		$(this).css({"border-width" : "2px",
					"border-color" : "rgb(255, 255, 255)",
					'border-style': "outset",
					"transition" : ".2s all",});
	}
);
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



$("#hamburger").hover(
  function(){
  	if (document.getElementById("myDropdown").style.display == "block"){
    	$(this).css({"opacity" : ".8", "transform" : "rotate(-90deg)","transition" : ".3s ease"});
	} else {
		$(this).css({"opacity" : ".8", "transform" : "rotate(12deg)", "transition" : ".3s ease"});
	}
  }, function(){
  	if (document.getElementById("myDropdown").style.display == "block"){
    	$(this).css({"opacity" : "1", "transform" : "rotate(-90deg)"});
    } else {
    	$(this).css({"opacity" : "1", "transform" : "rotate(0deg)"});
    }
  });

// $("#hamburger").onClick(
//   function(){
//     $(this).css({"transform" : "rotate(90deg)", "opacity" : ".2"});
//   }, function(){
//     $(this).css({"transform" : "rotate(0deg)", "opacity" : "1"});
//   });

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