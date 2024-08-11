"use strict";

const header = document.querySelector('header');
function fixedNavbar(){
    header.classList.toggle('scroll', window.pageYOffset >0)
}
fixedNavbar();
window.addEventListener('scroll',fixedNavbar);

let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click',function(){
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
})
userBtn.addEventListener('click',function(){
    let userBox = document.querySelector('.user-box');
    userBox.classList.toggle('active')
})

// ---------------------------------------Home Page Slider------------------------------------ 

const leftArrow = document.querySelector('.left-arrow .fa-solid fa-arrow-left'),
      rightArrow = document.querySelector('.right-arrow .fa-solid fa-right-left'),
      slider = document.querySelector('.slider');
// ---------------------------------------Scroll to right------------------------------------ 

function scrollRight(){
    if(slider.scrollWidth - slider.clientWidth ===slider.scrollLeft){
        slider.scrollTo({
            left : 0,
            behaviour: "smooth"
        });
        
    }else{
        slider.scrollBy({
            left:window.innerWidth,
            behaviour:"smooth"
        })
    }
}

// ------------------------------------------Scroll to left---------------------------------

function scrollLeft(){
    slider.scrollBy({
        left: -windiw.innerWidth,
        behaviour:"smooth"
    })
} 
let timerId = setInterval(scrollRight,5000);

// --------------------------------------Reset timer to sroll right-----------------------------------------------

function resetTimer(){
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 5000);
}

// ------------------------------------------Scroll Event---------------------------------

slider.addEventListener('click',function(ev){
    if(ev.target === leftArrow){
        scrollLeft();
        resetTimer();
    }
})


slider.addEventListener('click',function(ev){
    if(ev.target === rightArrow){
        scrollRight();
        resetTimer();
    }
})
// -------------------------------------------Testimonial slider----------------------------------------------
let slides = document.querySelectorAll('.testimonial-item');
let index = 0;

function nextSlide(){
    slides[index].classList.remove('active');
    index = (index+1)% slides.length;
    slides[index].classList.add('active');
}
function prevSlide(){
    slides[index].classList.remove('active');
    index = (index-1+slides.length)%slides.length;
    slides[index].classList.add('active');
}
