$(document).ready(function () {
    var nav = $('nav');
    var afterHashUrl = location.hash.substr(1);
    var aside = $('aside');

    nav.find('a').hover(function () {
        nav.find('a').addClass('fade');
        $(this).addClass('focus');
    }, function () {
        nav.find('a').removeClass('fade').removeClass('focus');
    });

    $('.navAClick').on('click', function () {
        var id = '';
        afterHashUrl = $(this).attr('href');

        if(afterHashUrl.replace('#', '')) id = $(this).attr('id');
        else {
            $('.bg > a').attr('id', 'profile');
            id = $('.profile').attr('id');
        }

        if(id != 'profile') {
            $('.nav-content').css('text-align', 'right');
            nav.addClass('active');
            nav.find('a').addClass('click');

            setTimeout(function () {
                $('a.click').find('span').fadeIn();
                nav.find('a').fadeIn();
            }, 600);
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

        aside.removeClass();

        if(afterHashUrl) {
            aside.not('#'+id).addClass('down');
            $('aside#'+id).addClass('up');
        }

        navBarMobile(location.hash.substr(1));

    });

    if(afterHashUrl) {
        $('#'+afterHashUrl).trigger('click');
    } else {
        $('.profile').trigger('click');
    }

    $('.custom-btn-collapse').click(function () {
        var target = $(this).data('target');
        $('#'+target).addClass('collapse');
    });

    $('#closeSidebar').click(function () {
        var target = $(this).data('target');
        $('#'+target).removeClass('collapse');
    });


    /** Initializations **/
    $('.modal').modal();
    $('.carousel').carousel();
});

$( window ).resize(function() {
    navBarMobile(location.hash.substr(1));
});

function navBarMobile (afterHashUrl){
    var width = $( window ).width();
    var navCollapse = $('.nav-collapse');

    if(width < 600) {
        alert(afterHashUrl);
        if(afterHashUrl) navCollapse.addClass('hide-on-collapse');
        else navCollapse.removeClass('hide-on-collapse');
    } else
        navCollapse.addClass('hide-on-collapse');
}