
$(".sm_circles").hover(
  //below function for OnMouseHover
  function(){
    $(this).css({"opacity" : "1", "border" : "2px"}); //nullified opacity setting

    jQuery(this).find("#social_media_text").css({"font-size": "18px",
                                                  "font-weight": "bold",
                                                  "transition":".3s all"});
    jQuery(this).find("#social_media_icons").css({"height": "45%", 
                                                  "width": "45%", 
                                                  "margin-left" :"39px",
                                                  "margin-top": "13px",
                                                  "margin-bottom":"-5px",
                                                  "transition" : ".3s all"});
  //below function for OnMouseExit
  }, function(){
    $(this).css("opacity", "1");

    jQuery(this).find("#social_media_text").css({"font-size": "16px",
                                                 "font-weight": "normal"})
    jQuery(this).find("#social_media_icons").css({"height": "40%", 
                                                  "width": "40%", 
                                                  "margin-left" :"43px",
                                                  "margin-top": "16px",
                                                  "margin-bottom":"0px"});

});

