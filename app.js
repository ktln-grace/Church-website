//Burger Animation    
    const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',()=>{
        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Links Animation
        navLinks.forEach((link,index) =>{
            if (link.style.animation){
                link.style.animation = ''
            }
            else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //Burger Animation
        burger.classList.toggle('toggle');
    });
}
navSlide();


//Intro Animation
    const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

    tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
    tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
    tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
    tl.fromTo(".logo, .nav-links", { opacity: 0 }, { opacity: 1, duration: 1 });
    tl.fromTo(".content h4, .content h3", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=0.5");
    tl.fromTo(".home .content p", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=0.25");
    tl.fromTo(".home .content a", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=0.15");
