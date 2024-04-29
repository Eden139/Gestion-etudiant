<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/inscription.css">
        <title>Inscription</title>
    </head>
    <body>
        <form action="/index.php/GestionEtudiant/inscription" method="post">
            <main class="main-container">
                    <div class="image">
                        <div class="profile-image">
                        <img src="./inscription.png">
                        </div>
                    </div>
                        <div class="information">
                            <input type="hidden" id="idEtd" name="idEtd" value="<?= $_POST['id']?>" required>
                            <div class="input-group">
                                <input type="text" id="numInscr" name="numInscr" title="UA31455FS2024" required>
                                <label for="numInscr">Numero d'inscription...</label>
                            </div>
                            <div class="input-group select-container">
                                <span>Grade: </span>
                                <select name="grade" class="grade">
                                    <option value="L">
                                        Licence
                                    </option>
                                    <option value="M">
                                        Master
                                    </option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span>Niveau: </span>
                                <select name="niveau" id="niveau">
                                    <option value="1">
                                        1
                                    </option>
                                    <option value="2">
                                        2
                                    </option>
                                    <option value="3">
                                        3
                                    </option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span>Parcours: </span>
                                <select name="parcours" id="parcours">
                                    <option value="1">
                                        MIT
                                    </option>
                                    <option value="2">
                                        MISA
                                    </option>
                                    <option value="3">
                                        INT
                                    </option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span>Status: </span>
                                <select name="status" id="status">
                                    <option value="P">
                                        Passant
                                    </option>
                                    <option value="R">
                                        Redoublant
                                    </option>
                                </select>
                            </div>
                        </div>
                    <div class="submit-div">
                        <input class="input-submit" type="submit" value="Enregistrer">
                    </div>
                </form>
            </main>
        </form>
        <script>
            const imageProfile = document.querySelector(".image-profile");

const popup = document.querySelector(".image .popup");

imageInput.addEventListener("change", (e) => {
    const image = e.currentTarget.files;
    
});

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

const right = document.querySelector(".right");
const laptop = document.querySelector(".laptop-container");
const tab = [right,laptop];
tab.forEach(e => {
    e.addEventListener("mouseenter", () => {
        tab.map((i) => {
            i.style.color="#fff";
        });
    });
    e.addEventListener("mouseleave",() => {
        tab.map((i) => {
            i.style.color="gray";
        });
    });
});
const container = document.querySelector(".container");
const main_container = document.querySelector(".main-container");
tab.forEach(e => {
    e.addEventListener("click", () => {
        container.classList.toggle("translate-right");
        main_container.classList.toggle("translate-left");
    });
});


const select = document.querySelector("#state");
const change = document.querySelector('.change');
select.addEventListener('change', () => {
    if (select.value==='2') {

        change.innerHTML = `
        <div class="student-information swiper-slide change">
            <div class="input-group email-input">
                <input type="text" name="email" id="email" required>
                <label for="email">E-mail... <span style="color:grey;font-style:italic">(facultatif)</span></label>
                <i class="fa-regular fa-envelope input-icon"></i>
                <div class="error-input">
                    <h4>Le mail est de la forme:</h4>
                    <ul>
                        <li style="color:red;">utilisateur@domaine.extension <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>
            <div class="input-group cin-input">
                <input type="text" name="cin" id="cin" required>
                <label for="cin">CIN... <span style="color:grey;font-style:italic">(facultatif)</span></label>
                <i class="fa-solid fa-id-card input-icon"></i>
                <div class="error-input">
                    <h4>Le CIN doit être:</h4>
                    <ul>
                        <li style="color:red;">12 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>

            <div class="input-group address-input">
                <input type="text" name="address" id="address" required>
                <label for="address">Adresse...</label>
                <i class="fa-solid fa-house input-icon"></i>
                <div class="error-input">
                    <h4>Votre adresse doit être:</h4>
                    <ul>
                        <li style="color:red;">>4 caractères <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>
            <div class="input-group">
                <input type="text" name="annee_bacc" id="annee_bacc" required>
                <label for="annee_bacc">Année du bacc...</label>
                <i class="fa-regular fa-calendar-check input-icon"></i>
            </div>
            <div class="input-group num_bacc-input">
                <input type="text" name="num_bacc" id="num_bacc" required>
                <label for="num_bacc">Numéro du bacc...</label>
                <i class="fa-solid fa-hashtag input-icon"></i>
                <div class="error-input">
                    <h4>Le numéro doit être:</h4>
                    <ul>
                        <li style="color:red;">7 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
        </div>
        `

    }
    if (select.value === '1') {
        change.innerHTML = `
        <div class="student-information swiper-slide change">
        <div class="input-group email-input">
                <input type="text" name="email" id="email" required>
                <label for="email">E-mail... <span style="color:grey;font-style:italic">(facultatif)</span></label>
                <i class="fa-regular fa-envelope input-icon"></i>
                <div class="error-input">
                    <h4>Le mail est de la forme:</h4>
                    <ul>
                        <li style="color:red;">utilisateur@domaine.extension <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>
            <div class="input-group cin-input">
                <input type="text" name="cin" id="cin" required>
                <label for="cin">CIN... <span style="color:grey;font-style:italic">(facultatif)</span></label>
                <i class="fa-solid fa-id-card input-icon"></i>
                <div class="error-input">
                    <h4>Le CIN doit être:</h4>
                    <ul>
                        <li style="color:red;">12 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>

            <div class="input-group address-input">
                <input type="text" name="address" id="address" required>
                <label for="address">Adresse...</label>
                <i class="fa-solid fa-house input-icon"></i>
                <div class="error-input">
                    <h4>Votre adresse doit être:</h4>
                    <ul>
                        <li style="color:red;">>4 caractères <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>
            <div class="input-group address-input">
            <input type="text" name="ue" id="ue" required>
            <label for="ue">UE...</label>
            <i class="fa-regular fa"></i>
            <div class="error-input">
                <h4>Votre UE doit être:</h4>
                <ul>
                    <li style="color:red;">>4 caractères <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                </ul>
            </div>
        </div>
        
        `;
    }
    if (select.value === '3') {
        change.innerHTML = `
        <div class="student-information swiper-slide change">
        <div class="input-group email-input">
                <input type="text" name="email" id="email" required>
                <label for="email">E-mail... <span style="color:grey;font-style:italic">(facultatif)</span></label>
                <i class="fa-regular fa-envelope input-icon"></i>
                <div class="error-input">
                    <h4>Le mail est de la forme:</h4>
                    <ul>
                        <li style="color:red;">utilisateur@domaine.extension <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>
            <div class="input-group cin-input">
                <input type="text" name="cin" id="cin" required>
                <label for="cin">CIN... <span style="color:grey;font-style:italic">(facultatif)</span></label>
                <i class="fa-solid fa-id-card input-icon"></i>
                <div class="error-input">
                    <h4>Le CIN doit être:</h4>
                    <ul>
                        <li style="color:red;">12 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>

            <div class="input-group address-input">
                <input type="text" name="address" id="address" required>
                <label for="address">Adresse...</label>
                <i class="fa-solid fa-house input-icon"></i>
                <div class="error-input">
                    <h4>Votre adresse doit être:</h4>
                    <ul>
                        <li style="color:red;">>4 caractères <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                    </ul>
                </div>
            </div>
            <div class="input-group address-input">
            <input type="text" name="resp" id="resp" required>
            <label for="resp">Responsabilité...</label>
            <i class="fa-regular fa"></i>
            <div class="error-input">
                <h4>Votre responsabilité doit être:</h4>
                <ul>
                    <li style="color:red;">>4 caractères <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                </ul>
            </div>
        </div>
        `;
    }

});
        </script>
    </body>
</html>
