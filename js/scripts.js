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
const sr = ScrollReveal();
   
sr.reveal(".navReveal", {
    origin: "top",
    duration: 2000,
    distance: "100px",
    delay: 600

});
sr.reveal(".appearLeft",{
    origin:"left",
    duration: 1000,
    distance: "200px",
    reset: true,
    delay: 200
    
});
sr.reveal(".appearLeftHeader",{
    origin:"left",
    duration: 1000,
    distance: "300px",
    reset: true,
    delay: 400
});
sr.reveal(".appearRightMain",{
    origin:"right",
    duration: 1000,
    distance: "100px",
    reset: true,
    delay: 200
});
sr.reveal(".appearRightText",{
    origin:"right",
    duration: 1000,
    distance: "300px",
    reset: true,
    delay: 400
});
sr.reveal(".soberReveal", {
    delay:100,
    origin:"bottom",
    distance: "15px",
    reset: true
});
sr.reveal(".skills-div-one", {
    duration: 1000,
    delay:300,
    origin:"left",
    distance: "500px",
    reset:true
    
});
sr.reveal(".skills-div-two", {
    duration: 1000,
    delay:400,
    origin:"left",
    distance: "500px",
    reset: true
    
});
sr.reveal(".skills-div-three", {
    duration: 1000,
    delay:500,
    origin:"left",
    distance: "500px",
    reset: true    
});
sr.reveal(".projectRevealLeft",{
    origin: "left",
    duration : 2000,
    distance : "50px",
    reset: true
});
sr.reveal(".projectRevealRight",{
    origin: "right",
    duration : 2000,
    distance : "50px",
    reset: true
});
sr.reveal(".projectTextLeft",{
    origin: "left",
    delay: 300,
    duration : 2000,
    distance : "50px",
    reset: true
});
sr.reveal(".projectTextRight",{
    origin: "right",
    delay: 300,
    duration : 2000,
    distance : "50px",
    reset: true
});
sr.reveal(".find-more-icons",{
    origin: "top",
    delay: 300,
    duration : 1000,
    distance : "100px",
    reset: true
});





