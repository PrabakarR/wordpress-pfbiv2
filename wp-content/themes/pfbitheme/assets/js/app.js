/*************home logo slides******** */
document.addEventListener("DOMContentLoaded", function() {
var homelogoslider = new Swiper(".heroCarousel", {
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 15000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
});
});