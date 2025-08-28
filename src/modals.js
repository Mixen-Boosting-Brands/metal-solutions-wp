import Swiper from "swiper";
import { Navigation } from "swiper/modules";

// Productos y Servicios
document.addEventListener("DOMContentLoaded", function () {
  const elementoButtons = document.querySelectorAll(".elemento");
  const modal = new bootstrap.Modal(document.getElementById("elementoModal"));
  const modalContent = document.querySelector("#elementoModal .elemento-modal");

  elementoButtons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();

      // Get data from clicked elemento
      const imgPath = btn.getAttribute("data-bs-img");
      const firstP = btn.querySelector("p.fw-bold")?.textContent || "";

      // Find second p.mb-0 OR a ul list
      const secondP = btn.querySelector("p.mb-0");
      const ulList = btn.querySelector("ul");

      let secondContent = "";

      if (secondP) {
        // If it's a p
        secondContent = `<p class="mb-0">${secondP.textContent}</p>`;
      } else if (ulList) {
        // If it's a ul
        const lis = ulList.querySelectorAll("li");
        let listItems = "";

        // Add all li items (no truncation)
        lis.forEach((li) => {
          listItems += `<li>${li.textContent}</li>`;
        });

        secondContent = `<ul>${listItems}</ul>`;
      }

      // Inject into modal
      modalContent.innerHTML = `
        <div class="overlay"></div>
        <p class="fw-bold">${firstP}</p>
        ${secondContent}
      `;

      // Set background image via inline style
      modalContent.style.background = `url('${imgPath}') no-repeat center center`;
      modalContent.style.backgroundSize = "cover";

      // Show modal
      modal.show();
    });
  });
});

// Galería de Fotos
document.addEventListener("DOMContentLoaded", function () {
  const galeriaModal = new bootstrap.Modal(
    document.getElementById("galeriaModal"),
  );
  const swiperGaleriaSlides = document.querySelectorAll(
    ".swiper-galeria .swiper-slide img",
  );
  const modalWrapper = document.querySelector(
    ".swiper-modal-galeria .swiper-wrapper",
  );

  // Populate modal Swiper once (or you can generate it dynamically every time)
  swiperGaleriaSlides.forEach((img) => {
    const slide = document.createElement("div");
    slide.classList.add("swiper-slide");

    const newImg = document.createElement("img");
    newImg.src = img.src;
    newImg.classList.add("img-fluid");

    slide.appendChild(newImg);
    modalWrapper.appendChild(slide);
  });

  // Init modal Swiper instance
  const swiperModalGaleria = new Swiper(".swiper-modal-galeria", {
    modules: [Navigation],
    navigation: {
      nextEl: ".swiper-modal-galeria .swiper-button-next",
      prevEl: ".swiper-modal-galeria .swiper-button-prev",
    },
    loop: true,
    spaceBetween: 0,
    slidesPerView: 1,
  });

  // Open modal on image click and navigate to correct slide
  swiperGaleriaSlides.forEach((img, index) => {
    img.closest("a").addEventListener("click", (e) => {
      e.preventDefault();
      galeriaModal.show();
      swiperModalGaleria.slideToLoop(index, 0);
    });
  });
});
