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






		if($(window).width() <= 1024){
			$('.lines_shift').css({"display":"block"});
			
			
		}
		if($(window).width() > 1024){
			$('.lines_shift').css({"display":"none"});
			
		}

		window.onresize = function() {
			if($(window).width() <= 1024){
				$('.lines_shift').css({"display":"block"});
				
				
			}
			if($(window).width() > 1024){
				$('.lines_shift').css({"display":"none"});
				
			}

		}

});
