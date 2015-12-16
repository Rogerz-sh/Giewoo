/**
 * Created by roger on 15/10/14.
 */
$(function () {
    var counter = 0, enabled = true;

    function sliderToIndex(idx) {
        $('.slider-main').css('top', '{0}px'.format(idx * 400 * -1));
        $('.slider-btn a:eq({0})'.format(idx)).siblings().removeClass('active').end().addClass('active');
    }

    setInterval(function () {
        if (enabled) {
            counter++;
            var idx = counter % 3;
            sliderToIndex(idx);
        }
    }, 3000);

    $('.slider-btn a').each(function (i, item) {
        $(item).bind('mouseenter', function () {
            enabled = false;
            counter = i;
            sliderToIndex(i);
        });
        $(item).bind('mouseleave', function () {
            enabled = true;
        })
    });
})
