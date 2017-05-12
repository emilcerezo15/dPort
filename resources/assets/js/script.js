var stat = 1;
$(document).ready(function () {
    var thisFile = '';
    var bg = $('.bg');
    var afterHashUrl = location.hash.substr(1);

    bg.hover(function () {
        bg.removeClass('show');
        thisFile = $(this);
        thisFile.addClass('show');
    }, function () {
        bg.removeClass('show');
        $('.bg:first-child').addClass('show');
    });

    $('.navAClick').on('click', function () {
        var id = $(this).attr('id');
        $('nav').css({'top': 0, 'line-height': '64px'});
        $('.home').find('a').addClass('click');
        if(afterHashUrl || id) {
            setTimeout(function () {
                $('.nav-content').css('text-align', 'right');
                $('a.click').find('span').fadeIn();
            }, 600);
        }
        $('aside').removeClass('active');
        $('.'+id).addClass('active');
    });

    if(afterHashUrl) $('#'+afterHashUrl).trigger('click');

    /** Initializations **/
    $('.modal').modal();

});
