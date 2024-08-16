// import './bootstrap';
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - 180, // Retrocede 20px después de llegar
            behavior: 'smooth'
        });

        // Remover clase active de todos los enlaces
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.classList.remove('active');
        });

        // Agregar clase active al enlace clicado
        this.classList.add('active');
    });
});

const swServicios = new Swiper(".swiper-servicios", {
	direction: "horizontal",
	lazy: true,
	loop: true,
	// effect: 'fade',
	slidesPerView: 1,
	// autoHeight: false,
	// spaceBetween: 30,
	keyboard: {
		enabled: true, // u can slide items using keyboard arrows
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 30,
		},
	}
});

const swNosotros = new Swiper(".swiper-nosotros", {
	direction: "horizontal",
	slidesPerView: 1,
	keyboard: {
		enabled: true,
	},
	pagination: {
		el: ".swiper-pagination-nosotros",
		clickable: true,
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 30,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 10,
		},
		1200: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
	}
});
