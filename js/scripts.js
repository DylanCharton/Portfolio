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
// Projects details

let cards = document.querySelectorAll(".project-img");
let unfolded = document.querySelectorAll(".unroll");
let foldCross = document.querySelectorAll(".know-more");




cards[0].addEventListener("click", ()=>{
    if(unfolded[0].classList.contains("unrolled")){
        unfolded[0].classList.remove("unrolled");
        foldCross[0].innerHTML = "+"
    } else {
        unfolded[0].classList.add("unrolled");
        foldCross[0].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})
cards[1].addEventListener("click", ()=>{
    if(unfolded[1].classList.contains("unrolled")){
        unfolded[1].classList.remove("unrolled");
        foldCross[1].innerHTML = "+"
    } else {
        unfolded[1].classList.add("unrolled");
        foldCross[1].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})
cards[2].addEventListener("click", ()=>{
    if(unfolded[2].classList.contains("unrolled")){
        unfolded[2].classList.remove("unrolled");
        foldCross[2].innerHTML = "+"
    } else {
        unfolded[2].classList.add("unrolled");
        foldCross[2].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})
cards[3].addEventListener("click", ()=>{
    if(unfolded[3].classList.contains("unrolled")){
        unfolded[3].classList.remove("unrolled");
        foldCross[3].innerHTML = "+"
    } else {
        unfolded[3].classList.add("unrolled");
        foldCross[3].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})


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
    
});
sr.reveal(".projectRevealRight",{
    origin: "right",
    duration : 2000,
    distance : "50px",
    
});
sr.reveal(".projectTextLeft",{
    origin: "left",
    duration : 2000,
    distance : "50px",
    
});
sr.reveal(".projectTextRight",{
    origin: "right",
    duration : 2000,
    distance : "50px",
    
});
sr.reveal(".find-more-icons",{
    origin: "top",
    delay: 300,
    duration : 1000,
    distance : "100px",
    reset: true
});






