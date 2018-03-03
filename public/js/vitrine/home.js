$(document).ready(() => {
    if($('.carousel').length) {
        /* ENABLE SLIDER */
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        /* DO AUTO PLAY SLIDER */
        setTimeout(autoPlayCarousel, 4500);
        /* END AUTO PLAY SLIDER */
    }

    function autoPlayCarousel() {
        $('.carousel').carousel('next');
        setTimeout(autoPlayCarousel, 4500);
    }
});
