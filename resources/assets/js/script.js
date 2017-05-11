$(document).ready(function () {
    var thisFile = '';
    var bg = $('.bg');

    bg.hover(function () {
        bg.removeClass('show');
        thisFile = $(this);
        thisFile.addClass('show');

    }, function () {
        bg.removeClass('show');
        $('.bg:first-child').addClass('show');
    });

    /** Initializations **/
    $('.modal').modal();

});