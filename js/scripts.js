/*!
* Start Bootstrap - Grayscale v7.0.3 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

// Scroll reveal
ScrollReveal().reveal('.letter');
ScrollReveal().reveal('#my-photo', {delay: 1500});
ScrollReveal().reveal('#what-i-am', {delay: 600});
ScrollReveal().reveal('#seeking', {delay: 900});
ScrollReveal().reveal('#about-title', {delay: 400});
ScrollReveal().reveal('.about-first', {delay: 500});
ScrollReveal().reveal('.about-second', {delay: 500});
ScrollReveal().reveal('.about-img');
ScrollReveal().reveal('.skill-title', {delay: 100});
ScrollReveal().reveal('.skill-sub', {delay: 100});
ScrollReveal().reveal('.skills-div-one', {delay: 300});
ScrollReveal().reveal('.skills-div-two', {delay: 400});
ScrollReveal().reveal('.skills-div-three', {delay: 500});
ScrollReveal().reveal('.soft-skills', {delay: 600});
ScrollReveal().reveal('.planet', {delay: 200});
ScrollReveal().reveal('.gamepad', {delay: 400});
ScrollReveal().reveal('.book', {delay: 600});
ScrollReveal().reveal('.fouet', {delay: 800});
ScrollReveal().reveal('.project-title', {delay: 100});
ScrollReveal().reveal('.project-img', {delay: 300});
ScrollReveal().reveal('.project-text', {delay: 500});
ScrollReveal().reveal('.contact-me', {delay: 200});
ScrollReveal().reveal('.form-floating', {delay: 400});
ScrollReveal().reveal('.submitButton', {delay: 400});




