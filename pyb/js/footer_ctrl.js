$(document).ready( function() {
	// alert("working");


// 	if (document.documentElement.clientWidth < 1200){alert("super working");
// 		$('#shift').addClass('span2of3');
// 		$('#shift').addClass('a');
// 		$('#shift').removeClass('span1of2');
// 	// 	document.getElementById("shift").className += " span2of3";
// 	// 	document.getElementById("shift").className += " a";
// 	// 	document.getElementById("shift").className =
//  //   			document.getElementById("shift").className.replace
//  //      		( /(?:^|\s)span1of2(?!\S)/g , '' );
// 	}
// 	else{
// 		$('#shift').addClass('span1of2');
// 		$('#shift').removeClass('span2of3');
// 		$('#shift').removeClass('a');
// 	}
// 	// $(".shift")




	$( window ).resize(function(){

		if($(window).width() <= 1000){
			// $('.l-primary').css({"width":"100%"})
			// $('.l-secondary').css({"width":"100%",
			// 						"border-style": "solid",
			// 						"border-width":"5px",
			// 						"border-color":"white"});

			// $('#l-shift').css({"border-bottom": "7px",
			// "border-color": "rgb(242, 242, 242)",
			// "padding-top": "15px",
			// "border-style": "none none solid none"});
			$('#l-shift').removeClass('spanHalf');
			$('#l-shift').addClass('spanFull');
			// $('#l-shift').addClass('a');

			$('#r-shift').removeClass('spanHalf');
			$('#r-shift').addClass('spanFull');
			// $('#r-shift').addClass('a');
			$('#right').css({"float": "right"});
			// $('#container_shift').removeClass('a');
		}
		if($(window).width() > 1000){
			// $('.l-primary').css({"width":"66.6667%"})
			// $('.l-secondary').css({"width":"33.3333%"})

			$('#l-shift').removeClass('spanFull');
			$('#l-shift').addClass('spanHalf');
			// $('#l-shift').addClass('a');

			$('#r-shift').removeClass('spanFull');
			$('#r-shift').addClass('spanHalf');
			// $('#r-shift').addClass('a');
			$('#right').css({"float": "left"});


			// $('#container_shift').addClass('a');
		}

	});
});
