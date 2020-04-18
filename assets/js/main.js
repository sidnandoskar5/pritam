$(document).ready(function(){
    $(document).on('click','.nav-menu span',function(){
        $(this).siblings().slideToggle();
    });

    $(document).on('click','.sidebar-title',function(){
        $('.sidebar-menu').slideToggle();
    });

    $("#hero-banner-slider").slick({
        infinite: true,
        arrows: false,
        dots:false,
        // autoplay: true,
        // autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1
    })
})