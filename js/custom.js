/*
 * 
 * @param {type} param
 jQuery(document).ready(function ($) {
 var vn=$(".site-header").outerHeight();
 $(".header-banner").css({"border-top": vn + "solid red"});
 });
 */
jQuery(document).ready(function ($) {
    var headerHeight = $('#masthead').outerHeight();
    //$(window).load(function () {
    var vn = $(".site-header").outerHeight();
    $(".header-banner").css({"border-top": vn + "px solid rgb(52, 152, 219)"});

    $(".home .plx-nav.nav").onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        scrollOffset: headerHeight,
    });

    $(".testimonial-slider").bxSlider({
        pager: false,
        auto: true,
        nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>'
    });

    $(".main-slider").bxSlider({
        pager: false,
        controls: false,
        auto: true,
        mode: 'fade',
    });
    //Navigation background color change
    var mn = $(".site-header");
    mns = "main-nav-scrolled";
    hdr = $('.plx-slider-section').height();
    $(window).scroll(function () {
        if ($(this).scrollTop() > hdr) {
            mn.addClass(mns);
        } else {
            mn.removeClass(mns);
        }
    });
    //Navigation toggle
    $("#toggle").click(function () {
        $(this).toggleClass("on");
        $("#menu").slideToggle();
    });


    // Wow Init
    new WOW().init();

    var siteurl = $(".siteurl").attr('url');
    var next_sec = $('.home #content').children('section:nth-child(2)').attr('id');
    var slider_next_section = '#' + next_sec;
    $(".slider-down-btn").attr('href', slider_next_section);
    //alert(slider_next_section);
    $('.slider-down-btn').localScroll({
        offset: {
            top: -headerHeight
        }
    });

    // Parallax Effect
    $(window).on('load', function () {
    $('#plx_about_section').parallax('50%', 0.4, true);
    $('#plx_portfolio_section').parallax('50%', 0.4, true);
    $('#plx_services_section').parallax('50%', 0.4, true);
    $('#plx_blog_section').parallax('50%', 0.4, true);
    $('#plx_cta_section').parallax('50%', 0.4, true);
    $('#plx_testimonial_section').parallax('50%', 0.4, true);
    $('#plx_team_section').parallax('50%', 0.4, true);
    });

    $('.portfolio-post-container').mixItUp();
});