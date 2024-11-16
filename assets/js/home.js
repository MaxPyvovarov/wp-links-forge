//Why Us

const benefits = document.querySelectorAll('.benefit');
benefits.forEach(benefit => {
	benefit.addEventListener('click', () => {
		//Making only 1 active at the time
		// benefits.forEach(b => (b === benefit ? '' : b.classList.remove('active')));
		benefit.classList.toggle('active');
	});
});

//Qualities
const qualityElements = document.querySelectorAll('.quality');
const maxZIndex = qualityElements.length;

qualityElements.forEach((element, index) => {
	element.style.zIndex = maxZIndex - index;
});

//Clients swiper
const clientsSwiper = new Swiper('.clients-swiper', {
	autoplay: {
		delay: 5000,
		// stopOnLastSlide: true,
		disableOnInteraction: true,
	},

	grabCursor: true,
	watchOverflow: true,

	slidesPerView: 3,
	spaceBetween: 40,
	grid: {
		rows: 2,
		fill: 'row',
	},

	speed: 500,

	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},

	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	breakpoints: {
		768: {
			slidesPerView: 3,
			grid: {
				rows: 2,
			},
		},
		576: {
			slidesPerView: 2,
			grid: {
				rows: 2,
			},
		},
		480: {
			slidesPerView: 2,
			grid: {
				rows: 2,
			},
		},
		320: {
			slidesPerView: 1,
			grid: {
				rows: 2,
			},
		},
		0: {
			slidesPerView: 1,
			grid: {
				rows: 2,
			},
		},
	},
});

//Reviews swiper
const reviewsSwiper = new Swiper('.reviews-swiper', {
	autoplay: {
		delay: 5000,
		// stopOnLastSlide: true,
		disableOnInteraction: true,
	},

	watchOverflow: true,
	autoHeight: true,

	simulateTouch: false,

	slidesPerView: 2,
	spaceBetween: 50,

	speed: 500,

	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},

	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	breakpoints: {
		1100: {
			slidesPerView: 2,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 50,
		},
		576: {
			slidesPerView: 2,
			spaceBetween: 30,
		},
		500: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		320: {
			slidesPerView: 1,
		},
		0: {
			slidesPerView: 1,
		},
	},
});
