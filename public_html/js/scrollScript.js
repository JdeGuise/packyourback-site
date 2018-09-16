$("#distribution-slide").click(function() {
    $('html,body').animate(
    	{
       		scrollTop: $("#distribution-section").offset().top
    	},
    	'slow'
    );
});
