import $ from 'jquery';

// JavaScript para mostrar/ocultar el botón "Volver arriba"
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll-to-top').fadeIn();
        } else {
            $('#scroll-to-top').fadeOut();
        }
    });

    $('#scroll-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
});

