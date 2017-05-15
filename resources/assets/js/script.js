$(document).ready(function () {
    var nav = $('nav');
    var afterHashUrl = location.hash.substr(1);

    nav.find('a').hover(function () {
        nav.find('a').addClass('fade');
        $(this).addClass('focus');
    }, function () {
        nav.find('a').removeClass('fade').removeClass('focus');
    });

    $('.navAClick').on('click', function () {
        var id = $(this).attr('id');

        if(id != 'profile') {
            if(!$(this).hasClass('profile')) {
                $('.bg > a').attr('id', 'profile');
                $('.nav-content').css('text-align', 'right');

                nav.addClass('active');
                nav.find('a').addClass('click');

                setTimeout(function () {
                    $('a.click').find('span').fadeIn();
                    nav.find('a').fadeIn();
                }, 600);
            }
        } else {
            nav.find('a').fadeOut(function () {
                nav.removeClass('active');
                $('.nav-content').css('text-align', 'center');
                $('.bg > a').removeAttr('id').removeClass('active');
                $('a.click').find('span').removeAttr('style');
                nav.find('a').removeClass('click');
                setTimeout(function (){
                    nav.find('a').fadeIn();
                }, 600);
            });
        }

        $('aside').removeClass('active');

        $('.'+id).addClass('active');
    });

    if(afterHashUrl) $('#'+afterHashUrl).trigger('click');

    /** Initializations **/
    $('.modal').modal();
    $('.carousel').carousel();

});
