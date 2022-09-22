// let sideBar = document.querySelector('.side-bar');

// document.querySelector('#menu-btn').onclick = () => {
//     sideBar.classList.toggle('active');
// }

// document.querySelector('#close-side-bar').onclick = () => {
//     sideBar.classList.remove('active');
// }


// let searchForm = document.querySelector('.search-form');
// document.querySelector('#search-btn').onclick = () => {
//     searchForm.classList.toggle('active');
// }

document.querySelectorAll('.accordion-container .accordion').forEach(accordion => accordion.onclick = () => {
    accordion.classList.toggle('active');
});


var swiper = new Swiper(".review-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",

    },
    autoplay: {
        disableOnInteraction: false,
        delay : 5000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".home-slider", {
    loop: true,
    grabCursor: true,
    autoplay: {
        disableOnInteraction: false,
      delay: 3000,  
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",

    },
})  

var swiper = new Swiper(".cmr", {
    loop: true,
    grabCursor: true,
    autoplay: {
        disableOnInteraction: false,
      delay: 7000,  
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",

    },
})    