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


// Triggering the animation of the cards in the project section. I will change it for a foreach loop.
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
cards[4].addEventListener("click", ()=>{
    if(unfolded[4].classList.contains("unrolled")){
        unfolded[4].classList.remove("unrolled");
        foldCross[4].innerHTML = "+"
    } else {
        unfolded[4].classList.add("unrolled");
        foldCross[4].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})
cards[5].addEventListener("click", ()=>{
    if(unfolded[5].classList.contains("unrolled")){
        unfolded[5].classList.remove("unrolled");
        foldCross[5].innerHTML = "+"
    } else {
        unfolded[5].classList.add("unrolled");
        foldCross[5].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})
cards[6].addEventListener("click", ()=>{
    if(unfolded[6].classList.contains("unrolled")){
        unfolded[6].classList.remove("unrolled");
        foldCross[6].innerHTML = "+"
    } else {
        unfolded[6].classList.add("unrolled");
        foldCross[6].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})
cards[7].addEventListener("click", ()=>{
    if(unfolded[7].classList.contains("unrolled")){
        unfolded[7].classList.remove("unrolled");
        foldCross[7].innerHTML = "+"
    } else {
        unfolded[7].classList.add("unrolled");
        foldCross[7].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})
cards[8].addEventListener("click", ()=>{
    if(unfolded[8].classList.contains("unrolled")){
        unfolded[8].classList.remove("unrolled");
        foldCross[8].innerHTML = "+"
    } else {
        unfolded[8].classList.add("unrolled");
        foldCross[8].innerHTML = "<i class=\"fas fa-times ms-3\"></i>"
    }
})


// Scroll reveal library
const sr = ScrollReveal();
   
sr.reveal(".navReveal", {
    origin: "top",
    duration: 2000,
    distance: "100px",
    delay: 4700,
    

});
sr.reveal(".appearLeft",{
    origin:"left",
    duration: 1000,
    distance: "200px",
    delay: 200,
    mobile: false
    
});
sr.reveal(".appearLeftMain",{
    origin:"left",
    duration: 1000,
    distance: "200px",
    delay: 4600,
    mobile: false
    
});

sr.reveal(".appearRightMain",{
    origin:"right",
    duration: 1000,
    distance: "100px",
    delay: 4500,
    mobile: false,
});

sr.reveal(".appearLeftTitle", {
    origin : "left",
    duration : 1200,
    distance : "200px",
    delay: 300,
    mobile : false,
});
sr.reveal(".appearLeftSkills", {
    origin : "left",
    duration : 800,
    distance : "50px",
    delay: 600,
    mobile : false,
});
sr.reveal(".appearLeftText",{
    origin:"left",
    duration: 800,
    distance: "200px",
    delay: 300,
    mobile: false,
});
sr.reveal(".appearLeftTextMain",{
    origin:"left",
    duration: 800,
    distance: "200px",
    delay: 4600,
    mobile: false,
});
sr.reveal(".soberReveal", {
    delay:100,
    origin:"bottom",
    distance: "15px",
    
});
sr.reveal(".skills-div-one", {
    duration: 1000,
    delay:300,
    origin:"left",
    distance: "100px",
    
    mobile: false
    
});
sr.reveal(".skills-div-two", {
    duration: 1000,
    delay:400,
    origin:"left",
    distance: "100px",
    mobile: false
    
});
sr.reveal(".skills-div-three", {
    duration: 1000,
    delay:500,
    origin:"left",
    distance: "100px",
    mobile: false
});
sr.reveal(".projectRevealLeft",{
    origin: "left",
    duration : 2000,
    distance : "50px",
    mobile: false
    
});
sr.reveal(".projectRevealRight",{
    origin: "right",
    duration : 2000,
    distance : "50px",
    mobile: false
    
});
sr.reveal(".projectTextLeft",{
    origin: "left",
    duration : 2000,
    distance : "50px",
    mobile: false
    
});
sr.reveal(".projectTextRight",{
    origin: "right",
    duration : 2000,
    distance : "50px",
    mobile: false
    
});
sr.reveal(".hello-loader",{
    origin: "bottom",
    duration : 2000,
    delay : 500,
    distance : "5px",
    mobile: true,
    
});
sr.reveal(".welcome-loader",{
    origin: "bottom",
    duration : 2000,
    delay : 2500,
    distance : "5px",
    mobile: true,
    
});
sr.reveal(".dot-loader",{
    origin: "bottom",
    duration : 2000,
    delay : 2500,
    distance : "5px",
    mobile: true,
    
});

// recaptcha script to prevent submission if the conditions are not filled

function validateRecaptcha() {
    var response = grecaptcha.getResponse();
    if (response.length === 0) {
        alert("Veuillez valider le captcha.");
        return false;
    } else {
        
        return true;
    }
}

// Function to make the two parts of the loader disappear after the animation
setTimeout( function(){
    let loaderTop = document.getElementById('loader-top');
    let loaderBottom = document.getElementById('loader-bottom');
    loaderTop.style = "display :none!important;";
    loaderBottom.style = "display:none!important;";
    console.log(loaderTop)
}, 4900);










