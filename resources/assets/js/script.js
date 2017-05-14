$(document).ready(function () {
    var thisFile = '';
    var bg = $('.bg');
    var afterHashUrl = location.hash.substr(1);

//    bg.hover(function () {
//        bg.removeClass('show');
//        thisFile = $(this);
//        thisFile.addClass('show');
//    }, function () {
//        bg.removeClass('show');
//        $('.bg:first-child').addClass('show');
//    });

    $('.navAClick').on('click', function () {
        var id = $(this).attr('id');
        var nav = $('nav');

        nav.find('a').hide();

        if(id != 'profile') {
            $('.bg > a').attr('id', 'profile');
            $('.nav-content').css('text-align', 'right');

            nav.find('a').addClass('click');
            nav.addClass('active');

            setTimeout(function () {
                $('a.click').find('span').fadeIn();
                nav.find('a').fadeIn();
            }, 600);

        } else {
//            $('a.click').find('span').fadeOut();
            nav.find('a').fadeOut(function () {
                nav.removeClass('active');
                $('.nav-content').css('text-align', 'center');
                $('.bg > a').removeAttr('id');
                setTimeout(function (){
                    nav.find('a').removeClass('click');
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

});
