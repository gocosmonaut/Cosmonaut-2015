$(document).scroll(function(){
    var el = $('.selectedwork'),
        top = $('#navbar').offset().top - $(document).scrollTop();
    if (top < 200 && !el.is('.bg-black')){
        $(el).addClass('bg-black');
    }
    if (top > 200 && el.is('.bg-black')){
        $(el).removeClass('bg-black');
    }  
});