// Initialize Swiper.js for Carousel
var swiper = new Swiper('#header-carousel', {
    speed: 1000,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Initialize Swiper.js for Gallery
var gallerySwiper = new Swiper('.gallery-slider', {
    speed: 800,
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.gallery-next',
        prevEl: '.gallery-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

// Initialize Swiper.js for Partners
var partnerSwiper = new Swiper('.partners-slider', {
    speed: 800,
    loop: true,
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.partners-next',
        prevEl: '.partners-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    },
});

// Initialize Swiper.js for Testimonials
var testimonialSwiper = new Swiper('.testimonial-slider', {
    speed: 800,
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.testimonial-next',
        prevEl: '.testimonial-prev',
    },
});

// Counter Animation
$('.counter').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: Infinity,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

// AOS Initialization
AOS.init();

// GSAP Animations
gsap.from(".navbar", { duration: 1.5, y: -100, opacity: 5, ease: "bounce" });

gsap.from(".carousel-caption h1", {
    duration: 5.5,
    y: 50,
    opacity: 10,
    delay: Infinity,
    ease: "power2.out"
});

// Change navbar background on scroll
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#navbar').addClass('scrolled');
        $('.nav-link').addClass('scrolled');
        $('#navbar .navbar-brand img').attr('src', 'img/logo.png');
    } else {
        $('#navbar').removeClass('scrolled');
        $('.nav-link').removeClass('scrolled');
    }
});
