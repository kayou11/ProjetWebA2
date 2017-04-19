/**
 * Created by antoine on 18/04/2017.
 */
$(document).ready(function () {
    var $slide1 = $('#slide1');
    var $slide2 = $('#slide2');
    var $slide3 = $('#slide3');
    var $slide4 = $('#slide4');
    var $slide5 = $('#slide5');
    var $s1 = $('#s1');
    var $s2 = $('#s2');
    var $s3 = $('#s3');
    var $s4 = $('#s4');
    var $s5 = $('#s5');

    masLoad($slide1,'.post-box',$s1);

    $s1.click(function(){
        masLoad($slide1,'.post-box',$s1);
    });
    $s2.click(function(){
        masLoad($slide2,'.post-box2',$s2);
    });
    $s3.click(function(){
        masLoad($slide3,'.post-box3',$s3);
    });
    $s4.click(function(){
        masLoad($slide4,'.post-box4',$s4);
    });
    $s5.click(function(){
        masLoad($slide5,'.post-box5',$s5);
    });

    $(window).resize(function () {
        masLoad($slide1,'.post-box',$s1);
        masLoad($slide2,'.post-box2',$s2);
        masLoad($slide3,'.post-box3',$s3);
        masLoad($slide4,'.post-box3',$s4);
        masLoad($slide5,'.post-box3',$s5);
    });

    $('.carousel').carousel({
        pause: true,
        interval: false
    });

});

function masLoad(slide,box,id) {
    slide.masonry('destroy');
    slide.imagesLoaded(function(){
        slide.masonry({
            itemSelector: box,
            columnWidth: box,
            transitionDuration: 2,
            isAnimated: true,
            isFitWidth: true
        });
    });

    $('.clink').removeClass('active');
    id.addClass('active');
};