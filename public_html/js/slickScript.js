$(document).on('ready', function() {
	$(".center").slick({
		dots: false,
		infinite: true,
		centerMode: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		autoplay: true,
		responsive: [
			{
				breakpoint: 1280,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 680,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
});