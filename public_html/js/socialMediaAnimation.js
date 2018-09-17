$(".sm-circles").hover(
	//below function for OnMouseHover
	function(){
		$(this).find(".social-media-text").css({
			"font-size": "18px",
			"font-weight": "bold",
			"transition":".3s all"
		});

		$(this).find(".social-media-icons").css({
			"height": "45%",
			"width": "45%",
			"margin-left" :"37px",
			"margin-top": "12px",
			"margin-bottom":"-5px",
			"transition" : ".3s all"
		});

		$(this).css({
			"opacity": "1",
			"border-width": "6px",
			"background-color": "rgb(0, 186, 249)",
			"transition" : ".3s all"
		});
	},
	//below function for OnMouseExit
	function(){
		$(this).find(".social-media-text").css({
			"font-size": "16px",
			"font-weight": "normal"
		});

		$(this).find(".social-media-icons").css({
			"height": "40%",
			"width": "40%",
			"margin-left" :"42px",
			"margin-top": "16px",
			"margin-bottom":"0px"
		});

		$(this).css({
			"border-width": "1px",
			"opacity": "1",
			"background-color": "rgb(76, 206, 251)"
		});
	}
);
