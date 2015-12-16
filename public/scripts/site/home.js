/**
 * Created by roger on 15/12/2.
 */
$(function () {
    $('#news-title').delegate('li', 'click', function () {
        var target = $(this).data('target');
        $(this).addClass('active').siblings('li').removeClass('active');
        $('#news-content').children().eq(target).addClass('active').siblings('div').removeClass('active');
    });

    $('.site-nav li:not(.sub-nav-title)').each(function (i, li) {
        $(li).click(function () {
            var target = $(this).data('target')
            $('.site-nav li').removeClass('active');
            $(this).addClass('active').parent().prev('.sub-nav-title').addClass('active');
            $('.site-content li').removeClass('active');
            $(target).addClass('active');
        });
    });

    $('#side-tools').delegate('li.side-tools-top', 'click', function () {
        $(document).scrollTop(0)
    });

    //$(document).bind('scroll', function (e) {
    //    var top = $(this).scrollTop();
    //    if (top > 120) {
    //        $('header,nav').css('top', top+'px');
    //    } else {
    //        $('header,nav').css('top', 0);
    //    }
    //});

    function setBottom() {
        //var $bottom = $('#contact').length() ? $('#contact') : $('footer');
        var bottomHeight = $('#contact').length ? 400 : 50;
        var mainHeight = Math.ceil($('.container-fluid').position().top + $('.container-fluid').height());
        var isBottom = (mainHeight + bottomHeight) >= document.body.scrollHeight;
        if (!isBottom) {
            $('html, body').addClass('full-height');
            $('footer').addClass('pos-abs bottom');
            $('#contact').addClass('pos-abs').css({'bottom': '50px', 'position': 'absolute'});
        } else {
            $('html, body').removeClass('full-height');
            $('footer').removeClass('pos-abs bottom');
            $('#contact').removeClass('pos-abs').removeAttr('style');
        }
    }

    $(document).bind('click', setBottom);

    setBottom();
});