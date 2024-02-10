import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

import "swiper/scss";
import "swiper/css/navigation";

document.addEventListener("DOMContentLoaded", () => {
	initSliders();
});

const initSliders = () => {
	document.querySelectorAll(".product-slider-wrapper").forEach((el, key) => {
		const id = el.dataset.id;
		const swiper = new Swiper(el, {
			a11y: true,
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
			navigation: {
				nextEl: `.swiper-button-next-${id}`,
				prevEl: `.swiper-button-prev-${id}`,
			},
		});
	});
};
