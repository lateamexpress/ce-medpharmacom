"use strict";

$(document).ready(() => {
    $('#loader').fadeOut();
    $('.dropdown-button').dropdown({
        belowOrigin: true
    });
    /* ENABLE SIDENAV */
    $(".button-collapse-side").sideNav();
    // ENABLE SIDENAV ADMIN
    $(".button-collapse").sideNav();
});