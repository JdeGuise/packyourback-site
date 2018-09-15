$("#distribution_slide").click(function() {
    $('html,body').animate(
    	{
       		scrollTop: $("#distribution_section").offset().top
    	},
    	'slow'
    );
});