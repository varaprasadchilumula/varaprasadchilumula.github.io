/*---- Home Testimonials scroll ----*/
jQuery(document).ready(function () {
    var owlCarousel = jQuery('.carousel-main');
    owlCarousel.owlCarousel({
        items: 6,
        autoplayHoverPause: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        margin: 20,
        nav: true,
        dots: false,
        responsive: {
            0: { items: 2 },
            480: { items: 2 },
            575: { items: 2 },
            768: { items: 3 },
            991: { items: 4 },
            1200: { items: 9 },
            1600: { items: 6 }
        }
    });
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) {
            owlCarousel.trigger('stop.owl.autoplay');
        } else {
            owlCarousel.trigger('play.owl.autoplay');
        }
    });
});
