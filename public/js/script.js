$(document).ready(function(){

    /* ENABLE SLIDER */
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });

    /* DO AUTO PLAY SLIDER */
    setTimeout(autoPlayCarousel, 4500);
    function autoPlayCarousel() {
        $('.carousel').carousel('next');
        setTimeout(autoPlayCarousel, 4500);
    }
    /* END AUTO PLAY SLIDER */

    /* ENABLE SIDENAV */
    $(".button-collapse-side").sideNav();

});