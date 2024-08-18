import Swiper from "swiper/bundle";
import "swiper/css/bundle";

/**------------------------------------------------------------------------
 **                     Links deslizar con efecto smooth
 *------------------------------------------------------------------------**/
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - 180, // Retrocede 180px después de llegar
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

/**------------------------------------------------------------------------
 *?                      Slider para section servicios
 *------------------------------------------------------------------------**/
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
		el: ".swiper-pagination-servicios",
		clickable: true,
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 30,
		},
	}
});

/**------------------------------------------------------------------------
 *?                     Slider para section de Nosotros
 *------------------------------------------------------------------------**/
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

/**------------------------------------------------------------------------
 **                     Integración de Map con Leafletjs
 *------------------------------------------------------------------------**/
function getMap() {

    const markerIcon = L.icon({
        iconUrl: '../../images/content/location_marker.png',
        // shadowUrl: 'url-imagen-sombreado',

        iconSize:     [50, 50], // size of the icon
        // shadowSize:   [50, 64], // size of the shadow
        iconAnchor:   [29, 94], // point of the icon which will correspond to marker's location
        // shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    //? setView -> Guadalajara , Zoom initial
    const map = L.map('map').setView([20.68699881556423, -103.35197709710874], 13);

    // Marcadores
    const norte = L.marker([20.66535779306107, -103.34835597223844], {icon: markerIcon}).addTo(map);
    const sur = L.marker([20.67566013417236, -103.33401927377234], {icon: markerIcon}).addTo(map);
    const matriz = L.marker([20.672487298677275, -103.36636699567585], {icon: markerIcon}).addTo(map);

    //? (opcional) Agregar un popup
    //? openPopup() -> abre popup al cargar web, sólo funciona en un marcador
    norte.bindPopup("<b>ADVANCE DETAIL (Sur)</b>");
    matriz.bindPopup("<b>ADVANCE DETAIL (Matriz)</b>").openPopup();
    sur.bindPopup("<b>ADVANCE DETAIL (Norte)</b>");

    const options = {
        minZoom: 13,
        maxZoom: 18,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a>'
    };

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', options).addTo(map);


}

getMap();
