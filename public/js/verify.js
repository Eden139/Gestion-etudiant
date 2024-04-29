/* CIN verification*/

const cinInput = document.querySelector(".cin-input");
const cin = cinInput.querySelector("#cin");
const cinErrorUl = cinInput.querySelector("ul");
if (cin.value.length === 12) {
  cinInput.classList.add("input-valid");
  cinErrorUl.innerHTML =
    '<li style="color:#34b233">= 12 caractères numériques <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
}
cin.addEventListener("input", () => {
  if (/[^\d]/.test(cin.value)) {
    cinInput.classList.add("input-error");
  } else {
    cinInput.classList.remove("input-error");
  }

  cin.value = cin.value.replace(/[^\d]/g, "");
  if (cin.value.length > 12) {
    cin.value = cin.value.slice(0, 12);
  }
  if (cin.value.length === 12) {
    cinInput.classList.add("input-valid");
    cinErrorUl.innerHTML =
      '<li style="color:#34b233">= 12 caractères numériques <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
  } else {
    cinInput.classList.remove("input-valid");
    cinErrorUl.innerHTML =
      '<li style="color:red;">= 12 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>';
  }
});

/* E-mail verification */
const emailPattern = /^[A-Za-z0-9\._-]+\@[A-Za-z0-9-]+\.[a-zA-Z]{2,}$/;

const emailInput = document.querySelector(".email-input");
const email = emailInput.querySelector("#email");
const emailErrorUl = emailInput.querySelector("ul");
if (emailPattern.test(email.value)) {
  emailInput.classList.add("input-valid");
  emailErrorUl.innerHTML =
    '<li style="color:#34b233">utilisateur@domaine.extension <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
}
email.addEventListener("input", () => {
  if (emailPattern.test(email.value)) {
    emailInput.classList.add("input-valid");
    emailErrorUl.innerHTML =
      '<li style="color:#34b233">utilisateur@domaine.extension <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
  } else {
    emailInput.classList.remove("input-valid");
    emailErrorUl.innerHTML =
      '<li style="color:red;">utilisateur@domaine.extension <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>';
  }
});

/* num_bacc verification*/

const num_baccInput = document.querySelector(".num_bacc-input");
const num_bacc = num_baccInput.querySelector("#num_bacc");
const num_baccErrorUl = num_baccInput.querySelector("ul");
if (num_bacc.value.length === 7) {
  num_baccInput.classList.add("input-valid");
  num_baccErrorUl.innerHTML =
    '<li style="color:#34b233">= 12 caractères numériques <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
}
num_bacc.addEventListener("input", () => {
  if (/[^\d]/.test(num_bacc.value)) {
    num_baccInput.classList.add("input-error");
  } else {
    num_baccInput.classList.remove("input-error");
  }

  num_bacc.value = num_bacc.value.replace(/[^\d]/g, "");
  if (num_bacc.value.length > 7) {
    num_bacc.value = num_bacc.value.slice(0, 7);
  }
  if (num_bacc.value.length === 7) {
    num_baccInput.classList.add("input-valid");
    num_baccErrorUl.innerHTML =
      '<li style="color:#34b233">= 12 caractères numériques <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
  } else {
    num_baccInput.classList.remove("input-valid");
    num_baccErrorUl.innerHTML =
      '<li style="color:red;">= 12 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>';
  }
});

/* Address Verification*/

const addressInput = document.querySelector(".address-input");
const address = addressInput.querySelector("#address");
const addressErrorUl = addressInput.querySelector("ul");
if (address.value.length >= 4) {
  addressInput.classList.add("input-valid");
  addressErrorUl.innerHTML =
    '<li style="color:#34b233">> 4 caractères <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
}
address.addEventListener("input", () => {
  if (address.value.length >= 4) {
    addressInput.classList.add("input-valid");
    addressErrorUl.innerHTML =
      '<li style="color:#34b233">> 4 caractères <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
  } else {
    addressInput.classList.remove("input-valid");
    addressErrorUl.innerHTML =
      '<li style="color:red;">>4 caractères <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>';
  }
});

/* tel verification*/

const telInput = document.querySelector(".tel-input");
const tel = telInput.querySelector("#tel");
const telErrorUl = telInput.querySelector("ul");
if (tel.value.length === 9) {
  telInput.classList.add("input-valid");
  telErrorUl.innerHTML =
    '<li style="color:#34b233">être 9 caractères numériques <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
}
tel.addEventListener("input", () => {
  if (/[^\d]/.test(tel.value)) {
    telInput.classList.add("input-error");
  } else {
    telInput.classList.remove("input-error");
  }

  tel.value = tel.value.replace(/[^\d]/g, "");

  if (tel.value.length > 9) {
    tel.value = tel.value.slice(0, 9);
  }
  if (tel.value.length === 9) {
    telInput.classList.add("input-valid");
    telErrorUl.innerHTML =
      '<li style="color:#34b233">être 9 caractères numériques <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
  } else {
    telInput.classList.remove("input-valid");
    telErrorUl.innerHTML =
      '<li style="color:red;">être 9 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>';
  }
});
/* birthlocation Verification*/

const birthlocationInput = document.querySelector(".birthlocation-input");
const birthlocation = birthlocationInput.querySelector("#birthlocation");
const birthlocationErrorUl = birthlocationInput.querySelector("ul");
if (birthlocation.value.length >= 4) {
  birthlocationInput.classList.add("input-valid");
  birthlocationErrorUl.innerHTML =
    '<li style="color:#34b233">> 4 caractères <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
}
birthlocation.addEventListener("input", () => {
  if (birthlocation.value.length >= 4) {
    birthlocationInput.classList.add("input-valid");
    birthlocationErrorUl.innerHTML =
      '<li style="color:#34b233">> 4 caractères <i class="fa-regular fa-circle-check" style="color: #34b233;"></i></li>';
  } else {
    birthlocationInput.classList.remove("input-valid");
    birthlocationErrorUl.innerHTML =
      '<li style="color:red;">>4 caractères <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>';
  }
});

/* Date de naissance */

const birthdayInput = document.querySelector(".birthday-input");
const birthday = birthdayInput.querySelector("#birthday");
birthday.min = "1930-01-01";

/* NAME verification*/
const nameInput = document.querySelector(".name-input");
const nameI = nameInput.querySelector("#name");
const nameErrorUl = nameInput.querySelector("ul");
const namePattern = /[^a-z-_ ]/gi;

nameI.addEventListener("input", () => {
  if (namePattern.test(nameI.value)) {
    nameInput.classList.add("input-error");
  } else nameInput.classList.remove("input-error");

  nameI.value = nameI.value.replace(namePattern, "");
  nameI.value = nameI.value.toUpperCase();
});

/* firstname verification*/
const firstnameInput = document.querySelector(".firstname-input");
const firstnameI = firstnameInput.querySelector("#firstname");
const firstnameErrorUl = firstnameInput.querySelector("ul");
const firstnamePattern = /[^a-z-_ ]/gi;

firstnameI.addEventListener("input", () => {
  if (firstnamePattern.test(firstnameI.value)) {
    firstnameInput.classList.add("input-error");
  } else firstnameInput.classList.remove("input-error");

  firstnameI.value = firstnameI.value.replace(firstnamePattern, "");
});
/* nationality verification*/
const nationalityInput = document.querySelector(".nationality-input");
const nationalityI = nationalityInput.querySelector("#nationality");
const nationalityErrorUl = nationalityInput.querySelector("ul");
const nationalityPattern = /[^a-z-_ ]/gi;

nationalityI.addEventListener("input", () => {
  if (nationalityPattern.test(nationalityI.value)) {
    nationalityInput.classList.add("input-error");
  } else nationalityInput.classList.remove("input-error");

  nationalityI.value = nationalityI.value.replace(nationalityPattern, "");
  nationalityI.value = nationalityI.value.toLowerCase();
});

// Verification dans le serveur
const toVerify = [cin, email, tel, num_bacc];

toVerify.forEach((elt) => {
  elt.addEventListener("input", (e) => {

  });
});

async function check() {

}


