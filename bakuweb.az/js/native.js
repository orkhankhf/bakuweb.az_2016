$(window).scroll(function(){
    if ($(this).scrollTop() > 4000){
        $(".yuxari_cix").fadeIn(1000);
    }
    else {
        $(".yuxari_cix").fadeOut(1000);
    }
});
$(".yuxari_cix").click(function(){
	$("#page-top").animate({ scrollTop: "0px" },1500);
});


$(window).scroll(function(){
    var innerw = window.innerWidth;
    if(innerw > 768){
        if ($(this).scrollTop() > 400){
        $(".fb-page").fadeOut(1000);
        }
        else {
            $(".fb-page").fadeIn(1000);
        }
    }else if ($(this).scrollTop() > 40){
        $(".fb-page").fadeOut(1000);
    }
    else {
        $(".fb-page").fadeIn(1000);
    }

});