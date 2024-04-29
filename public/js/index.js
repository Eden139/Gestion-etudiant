const imageProfile = document.querySelector(".image-profile");

const popup = document.querySelector(".image .popup");
function openpopup() {
  popup.classList.add("open-popup");
}

function closepopup() {
  popup.classList.remove("open-popup");
}

const swiper = new Swiper(".swiper", {
  loop: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  direction: "horizontal",
});
