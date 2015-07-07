
$(function() {
    //Active Class////////////////////////////////////////////
    var pgurl = window.location.href.substr(window.location.href
        .lastIndexOf("/")+1);
    $("div#navbar ul li a").each(function(){
        if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
            $(this).parent().addClass("active");
    })
    /////////////////////////////////////////////////////////


});

