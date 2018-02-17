"use strict";

$(document).ready(() => {
    $('#loader').fadeOut();
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
    /* ENABLE SIDENAV */
    $(".button-collapse-side").sideNav();

    /* CHART ADMIN PANEL */
    let pie = document.querySelector('#pie');
    new Chart(pie,
        {
            type:"pie",
            data:{
                labels:["Produits en vente","Produits achetés","Produits en cours d'acheminement"],
                datasets:[{
                    label:"My First Dataset",
                    data:[300,50,70],
                    backgroundColor:["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]
            },
            options: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    );

    let line = document.querySelector('#line');
    new Chart(line,
        {
            type:"line",
            data:{
                labels:["Janvier","Février","Mars","Avril","Mai","Juin","Juillet"],
                datasets:[{
                    label:"My First Dataset",
                    data:[65,59,80,81,56,55,40],
                    fill:false,"borderColor":"rgb(75, 192, 192)",
                    lineTension:0.1}]
            },
            options:{

            }
        }
    );

    let horizontalBar = document.querySelector('#horizontal-bar');
    new Chart(horizontalBar,
        {
            type:"horizontalBar",
            data:{
                labels:["Janvier","Février","Mars","Avril","Mai","Juin","Juillet"],
                datasets:[{
                    label:"My First Dataset",
                    data:[65,59,80,81,56,55,40],
                    fill:false,
                    backgroundColor:["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],
                    borderColor:["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],
                    borderWidth:1}]
            },
            options:{
                scales:{
                    xAxes:[{
                        ticks:{
                            beginAtZero:true
                        }
                    }]
                }
            }
        }
    );

    let polarArea = document.querySelector('#polar-area');
    new Chart(polarArea,
        {
            type:"polarArea",
            data:{
                labels:["Red","Green","Yellow"],
                datasets:[{
                    label:"My First Dataset",
                    data:[11,16,16],
                    backgroundColor:["rgb(255, 99, 132)","rgb(75, 192, 192)","rgb(255, 205, 86)"]
                }]
            },
            options: {
                legend: {
                    //position: 'bottom'
                }
            }
        }
    );

    let doughnut = document.querySelector('#doughnut');
    new Chart(doughnut,
        {
            type:"doughnut",
            data:{
                labels:["Red","Blue","Yellow"],
                datasets:[{
                    label:"My First Dataset",
                    data:[300,50,100],
                    backgroundColor:["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
                }]
            },
            options: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    );

    /* END CHART */

    $('.dropdown-button').dropdown({
        belowOrigin: true
    });

});

function autoPlayCarousel() {
    $('.carousel').carousel('next');
    setTimeout(autoPlayCarousel, 4500);
}