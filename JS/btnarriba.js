// import $ from 'jquery';

// JavaScript para mostrar/ocultar el botón "Volver arriba"
// $(document).ready(function () {
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 100) {
//             $('#scroll-to-top').fadeIn();
//         } else {
//             $('#scroll-to-top').fadeOut();
//         }
//     });

//     $('#scroll-to-top').click(function () {
//         $('html, body').animate({ scrollTop: 0 }, 800);
//         return false;
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    var scrollButton = document.getElementById("scroll-to-top");

    // Mostrar o ocultar el botón cuando se desplaza la página
    window.addEventListener("scroll", function () {
        if (window.scrollY > 100) {
            scrollButton.style.display = "block";
        } else {
            scrollButton.style.display = "none";
        }
    });

    // Desplazar suavemente hacia arriba al hacer clic en el botón
    scrollButton.addEventListener("click", function () {
        var currentPosition = window.scrollY;
        var scrollDuration = 800;
        var startTime = performance.now();

        function scrollToTop(currentTime) {
            var elapsedTime = currentTime - startTime;
            window.scrollTo(0, easeInOutCubic(elapsedTime, currentPosition, -currentPosition, scrollDuration));
            if (elapsedTime < scrollDuration) {
                requestAnimationFrame(scrollToTop);
            }
        }

        function easeInOutCubic(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return (c / 2) * t * t * t + b;
            t -= 2;
            return (c / 2) * (t * t * t + 2) + b;
        }

        requestAnimationFrame(scrollToTop);
    });
});


