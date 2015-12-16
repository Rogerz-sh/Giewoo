/**
 * Created by roger on 15/10/27.
 */
$(function () {
    $('.nav-list>li').bind('mouseenter', function () {
        var li = $(this);
        if (li.find('span.caret').length > 0) {
            li.find('.sub-nav').show().css({'min-width': li.outerWidth(), 'top': li.outerHeight()});
        }
    }).bind('mouseleave', function () {
        var li = $(this);
        if (li.find('span.caret').length > 0) {
            li.find('.sub-nav').hide();
        }
    });
});