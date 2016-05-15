jQuery(document).ready(function ($) {
    var $slider = $('#slider'),
        $slider_li = $slider.find('ul li'),
        $slider_ul = $slider.find('ul'),
        slideCount = $slider_li.length,
        slideWidth = $slider_li.width(),
        //slideHeight = $slider_li.height(),
        sliderUlWidth = slideCount * slideWidth;

    $slider.css({ width: slideWidth, /*height: slideHeight*/ });

    $slider_ul.css({ width: sliderUlWidth, marginLeft: - slideWidth });

    $slider.find('ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $slider_ul.animate({
            left: + slideWidth
        }, 200, function () {
            $slider.find('ul li:last-child').prependTo('#slider ul');
            $slider_ul.css('left', '');
        });
    };

    function moveRight() {
        $slider_ul.animate({
            left: - slideWidth
        }, 200, function () {
            $slider.find('ul li:first-child').appendTo('#slider ul');
            $slider_ul.css('left', '');
        });
    };

    $('a.control_prev').off('click').on('click', function (e) {
        e.preventDefault();

        moveLeft();
    });

    $('a.control_next').off('click').on('click', function (e) {
        e.preventDefault();

        moveRight();
    });

    $('a.call_button').off('click').on('click', function (e) {
        e.preventDefault();
        $("#modal").modal({
            close: true,
            escClose: true,
            overlayClose:true
        });
    });
});