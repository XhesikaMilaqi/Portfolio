// AFFICHAGE DU BORDER DE MENU & LOGO
const navigation = document.querySelector('header');

window.addEventListener('scroll', () =>{

    if(window.scrollY > 100){
        navigation.classList.add('anim');

    } else {
        navigation.classList.remove('anim');
    }
})

gsap.from("#logo", {duration:2, ease:2,});
gsap.fromTo("#logo", {autoAlpha: 2}, {autoAlpha: 1, duration: 3, delay:1},);



// gsap.to("#leftside", {x: 10, rotationY: 90, duration: 4, skewX: 95});
// gsap.to("#rightside", {x: 10, rotationY: 90, duration: 4, skewX: -95});

// ANIMATION DU LOGO pour le cacher
$(function(){
    $("#logo").delay(2000)
        $("#logo").fadeOut(500);
    
    
});

// AFFICHAGE DU CONTENU A PARTIR D'UNE TEMPS 

const myTimeout = setTimeout(function(){
    let barresMenu = document.getElementById('barres');
    barresMenu.classList.toggle('show');
    
}, 3000);

    
const myTimeoutD = setTimeout(function(){
    let mainPage = document.getElementById('main-page');
    mainPage.classList.toggle('show');
}, 3000);

// ANIMATIONS FADE IN DES LOGOS -> ENTRANCE 
gsap.from('.reseau-soc', {delay: 3, y: 180, stagger:0.3, duration: 1.5, ease: "back" });
gsap.from('#logo-x', {delay:3, y: -60, opacity: 1});
gsap.from('#barres', {delay:3, x: 60}); 
gsap.from('.background-first', {delay:3.2, z:90, opacity: 0, ease: "Expo.easeIn"});

gsap.timeline().from('.figcap', {delay: 4, duration: 2, opacity:0,  ease: "Expo.easeIn" });


// MENU BURGER
let menuB = document.getElementById('barres');
let menu = document.getElementById('menu');
    menuB.addEventListener('click', function(){
        menu.classList.toggle('show');
    });


