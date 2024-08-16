try {
  const swiper = new Swiper('.featured .swiper', {
    speed: 400,
    spaceBetween: 15,
    slidesPerView: 2,
    loopPreventsSliding: false,
    grabCursor: true,

    breakpoints: {
      100: {
        slidesPerView: 2,
      },
      500: {
        slidesPerView: 1,
      },
      760: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      }
    },

    pagination: {
      el: '.featured .swiper-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.featured .swiper-button-next',
      prevEl: '.featured .swiper-button-prev',
    },
  });
} catch (error) {
  console.warn("Something wrong with features' slider")
}

try {
  const swiper = new Swiper('.excerpts .swiper', {
    speed: 400,
    spaceBetween: 15,
    slidesPerView: 1,
    loopPreventsSliding: false,
    grabCursor: true,

    breakpoints: {
      100: {
        slidesPerView: 1,
      },
      500: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      }
    },

    pagination: {
      el: '.excerpts .swiper-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.excerpts .swiper-button-next',
      prevEl: '.excerpts .swiper-button-prev',
    },
  });
} catch (error) {
  console.warn("Something wrong with excerpts' slider")
}
