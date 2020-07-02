var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 4000,
    lazyLoad: true,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        600:{
            items:1
        },
        800:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});