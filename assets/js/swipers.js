var swiperHero = new Swiper(".mySwiperHeroAbout", {
    slidesPerView: "auto",
    speed: 7000,
    autoplay: {
        delay: 0, // Задержка между сменой слайдов в миллисекундах (например, 5000 = 5 секунд)
        disableOnInteraction: false, // Отключить автопрокрутку при взаимодействии с пользователем (по умолчанию true)
    },
    breakpoints: {
        320: {
            spaceBetween: 15,
        },
        576: {
            spaceBetween: 30,
        },
    },
});

swiperHero.on('touchStart', function() {
    swiperHero.params.autoplay.delay = 4000; // Устанавливаем задержку 3000 мс при начале взаимодействия с пользователем
    swiperHero.autoplay.stop(); // Останавливаем автопрокрутку при взаимодействии с пользователем
    swiperHero.autoplay.start(); // Запускаем автопрокрутку с новой задержкой
});

$(document).on('click', '.fancybox', function() {
    swiperHero.autoplay.stop(); // Останавливаем автопрокрутку при открытии FancyBox
});

$(document).on('click', '.fancybox-close', function() {
    setTimeout(function() {
        swiperHero.autoplay.start(); // Возобновляем автопрокрутку после закрытия FancyBox
    }, 300); // Даем FancyBox немного времени для закрытия
});



const swiperTwo = new Swiper('.feedback__card', {

	loop: false,
	// slidesPerView: "2",
	spaceBetween: 30,

	pagination: {
		el: '.swiper-pagination',
	},
	breakpoints: {
		300: {
			slidesPerView: 1,
		},
		480: {
			slidesPerView: 1,
			spaceBetween: 20
		},
		// when window width is >= 640px
		640: {
			slidesPerView: 1,	
		},

		800: {
			slidesPerView: 2,
		},
		1200: {
			slidesPerView: 3,
		},

	},

});

const swiperThree = new Swiper('.tab__nav--scrollable', {

	loop: false,
	// centeredSlides: true,
	// slidesPerView: "auto",
	// spaceBetween: 20,

	scrollbar: {
		el: '.swiper-scrollbar',
	},

	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 2,
			spaceBetween: 10,
			centeredSlides: true,
		},
		// when window width is >= 480px
		480: {
			slidesPerView: 2,
			spaceBetween: 20,
			// centeredSlides: true,
		},
		// when window width is >= 640px
		640: {
			slidesPerView: 2,
			// centeredSlides: true,
		},
		1400: {
			slidesPerView: 'auto',
			// centeredSlides: true,
		}
	},

});

var swiper = new Swiper('.tour__slider', {
    slidesPerView: 1,
    spaceBetween: 10,
	allowTouchMove: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        paginationRender: function () {
            var paginationBullets = this.pagination.bullets;
            for (var i = 0; i < paginationBullets.length; i++) {
                paginationBullets[i].textContent = i + 1;
            }
        },
    },
});


/* swiperTours.on('slideChange', function () {
    var activeSlideIndex = swiper.realIndex;
    var activeSlide = swiper.slides[activeSlideIndex];
    var swiperWidth = swiper.width;
    var activeSlideWidth = activeSlide.offsetWidth;

    // Рассчитываем смещение для центрирования активного слайда
    var offset = (swiperWidth - activeSlideWidth) / 2;

    // Центрируем активный слайд
    swiper.setTranslate(offset - activeSlide.offsetLeft);
}); */





var swiper = new Swiper(".info__slider", {

	slidesPerView: "auto",
	spaceBetween: 30,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},

	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: "auto",
			// spaceBetween: 20,
			centeredSlides: true,
		},
		// when window width is >= 480px
		480: {
			slidesPerView: "auto",
			spaceBetween: 30,
			centeredSlides: false,
		},

	},
});