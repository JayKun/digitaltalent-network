var scroll_pos = 0;
var scroll_time;

$(window).scroll(function() {
    clearTimeout(scroll_time);
    var curScroll = $(window).scrollTop();

    if (curScroll >= $('nav').outerHeight()) {
        if (curScroll <= scroll_pos) {
            $('nav').removeClass('hidden');    
        }
        else {
            $('nav').addClass('hidden');  
        }
    }

    scroll_time = setTimeout(function() {
        scroll_pos = $(window).scrollTop();
    }, 400);
});