import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

import "swiper/scss";
import "swiper/css/navigation";
// import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", () => {
	initSliders();
});

const initSliders = () => {
	const swiper = new Swiper(".product-slider-wrapper", {
		modules: [Navigation, Pagination],

		slidesPerView: 1,
		spaceBetween: 16,

		breakpoints: {
			640: {
				slidesPerView: 2,
			},
			1024: {
				slidesPerView: 3,
			},
		},

		// If we need pagination
		// pagination: {
		// 	el: ".swiper-pagination",
		// },

		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
};
