(()=>{

    Array.from(document.getElementsByClassName("swiper")).forEach(element => {
    // get attributes to set swiper properties
    const swiperClass= element.getAttribute("data-swiperClass")
    const slidesToShow= element.getAttribute("data-slidesToShow");
    const spaceBetweenSlides= element.getAttribute("data-spaceBetweenSlides");

    // fire swiper
    const swiper = new Swiper(swiperClass, {
        spaceBetween: spaceBetweenSlides,
        centeredSlider: true,
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: slidesToShow-2,
            },
            768: {
                slidesPerView: slidesToShow-1,
            },
            992: {
                slidesPerView: slidesToShow-1,
            },
            1200: {
                slidesPerView: slidesToShow,
            },
        }
    });
    });

})()