$(document).on("ready", function () {
    $("#carrusel-enrrollable, #carrusel-romana, #carrusel-panel, #carrusel-sheer, #carrusel-triple, #carrusel-open, #carrusel-shangri, #carrusel-celulares, #carrusel-capriccio, #carrusel-aluminio, #carrusel-madera, #carrusel-verticales, #carrusel-toldos, #carrusel-cortineros, #carrusel-motorizacion").owlCarousel({
        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true
    });
    
    $('select').material_select();


    $("#contactForm input#distribuidor").click(function () {
        $('.field-dis').slideDown("slow");
    });
    $("#contactForm input#productos").click(function () {
        $('.field-dis').slideUp("slow");
    });
});
