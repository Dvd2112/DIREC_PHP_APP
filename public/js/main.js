// ----------------------------
// Navbar transparente no scroll
// ----------------------------
window.addEventListener("scroll", () => {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// ----------------------------
// Bootstrap: tooltips & popovers
// ----------------------------
document.addEventListener("DOMContentLoaded", () => {
  // Tooltips
  const tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  tooltipTriggerList.map((el) => new bootstrap.Tooltip(el));

  // Popovers
  const popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
  );
  popoverTriggerList.map((el) => new bootstrap.Popover(el));
});

// ----------------------------
// Carrossel com animações leves
// ----------------------------
document.addEventListener("DOMContentLoaded", () => {
  const carouselEl = document.querySelector("#mainCarousel");
  if (carouselEl) {
    const carousel = new bootstrap.Carousel(carouselEl, {
      interval: 4000, // tempo entre slides
      ride: "carousel",
      pause: "hover",
      wrap: true,
    });

    // Adiciona animação suave nos elementos dentro do slide
    carouselEl.addEventListener("slide.bs.carousel", (event) => {
      const activeItems = event.relatedTarget.querySelectorAll(".carousel-caption, img");
      activeItems.forEach((item) => {
        item.style.opacity = 0;
        setTimeout(() => {
          item.style.transition = "opacity 1s ease-in-out, transform 1s ease-in-out";
          item.style.opacity = 1;
          item.style.transform = "translateY(0)";
        }, 50);
      });
    });
  }
});

// ----------------------------
// Scroll suave para âncoras
// ----------------------------
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

// ----------------------------
// Animações de entrada (fade-in)
// ----------------------------
const fadeEls = document.querySelectorAll(".fade-in");
const appearOnScroll = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add("show");
      observer.unobserve(entry.target);
    });
  },
  { threshold: 0.2 }
);

fadeEls.forEach((el) => appearOnScroll.observe(el));