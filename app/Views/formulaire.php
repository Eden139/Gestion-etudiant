<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MIT | Ajout</title>
  <script src="js/index.js" defer></script>
  <script src="js/verify.js" defer></script>
  <script src="js/cropperjs-main/dist/cropper.min.js" defer></script>
  <link rel="stylesheet" crossorigin href="/assets/index-C_83jfAn.css">
</head>

<body>
  <div class="principal">
    <main class="main-container">
      <form action="insert" method="post" enctype="multipart/form-data">
        <div class="image">
          <div class="profile-image">
            <button class="noimage" type="button" onclick="openpopup()"></button>
            <label for="profile">
              <i class="fa-solid fa-camera"></i>
            </label>
            <input type="file" id="profile" style="display: none" accept="image/png, image/jpg, image/jpeg" name="photo" class="image-input" />
          </div>

          <div class="popup">
            <i class="fa-solid fa-circle-xmark close-popup" onclick="closepopup()"></i>
            <div class="crop-title">
              <h3>Découpage <i class="fa-solid fa-scissors"></i></h3>
            </div>

            <div class="image-container">
              <!-- <img src="img/noprofil.jpg" class="image-crop">
                        <p>Déposer une image ici ou <label for="Insert" class="insert">Insérer</label>
                            <input type="file" name="file" id="Insert" style="display: none;" accept="image/jpg, image/png, image/jpeg">
                        </p> -->
              <!-- <img src="img/noprofil.jpg" alt="" class="image-crop"> -->
            </div>
            <div class="image-actions">
              <label for="profile" class="button-change">Changer</label>
              <button type="button" onclick="closepopup()" class="popup-close" id="image-update">
                Valider
              </button>
            </div>
          </div>
        </div>
        <script src="js/image.js"></script>

        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="student-information swiper-slide">
              <div class="input-group name-input">
                <input type="text" name="name" id="name" required />
                <label for="name">Nom...</label>
                <i class="fa-solid fa-user input-icon"></i>
              </div>

              <div class="input-group firstname-input">
                <input type="text" name="firstname" id="firstname" required />
                <label for="firstname">Prénom...</label>
                <i class="fa-regular fa-user input-icon"></i>
                <!-- <span class="error-message">Votre nom est invalide</span> -->
              </div>

              <div class="input-group birthday-input">
                <input type="text" id="birthday" name="birthday" onfocus="type='date'" onblur="type='text'" required />
                <label for="birthday">Date de naissance...</label>
                <i class="fa-regular fa-calendar-xmark input-icon"></i>
              </div>

              <div class="input-group birthlocation-input">
                <input type="text" name="birthlocation" id="birthlocation" required />
                <label for="birthlocation">Lieu de naissance...</label>
                <i class="fa-solid fa-map-location-dot input-icon"></i>
                <div class="error-input">
                  <h4>Votre adresse doit être:</h4>
                  <ul>
                    <li style="color: red">
                      >4 caractères
                      <i class="fa-regular fa-circle-xmark" style="color: red"></i>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="input-group tel-input">
                <input type="tel" name="tel" id="tel" required />
                <label for="tel">Téléphone...
                  <span style="color: grey; font-style: italic">(facultatif)</span></label>
                <span class="mada-code">🇲🇬 +261</span>
                <i class="fa-solid fa-phone input-icon"></i>
                <div class="error-input">
                  <h4>Votre numéro doit:</h4>
                  <ul>
                    <li style="color: red">
                      être 9 caractères numériques
                      <i class="fa-regular fa-circle-xmark" style="color: red"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="student-information swiper-slide change">
              <div class="input-group email-input">
                <input type="text" name="email" id="email" required />
                <label for="email">E-mail...
                  <span style="color: grey; font-style: italic">(facultatif)</span></label>
                <i class="fa-regular fa-envelope input-icon"></i>
                <div class="error-input">
                  <h4>Le mail est de la forme:</h4>
                  <ul>
                    <li style="color: red">
                      utilisateur@domaine.extension
                      <i class="fa-regular fa-circle-xmark" style="color: red"></i>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="input-group cin-input">
                <input type="text" name="cin" id="cin" required />
                <label for="cin">CIN...
                  <span style="color: grey; font-style: italic">(facultatif)</span></label>
                <i class="fa-solid fa-id-card input-icon"></i>
                <div class="error-input">
                  <h4>Le CIN doit être:</h4>
                  <ul>
                    <li style="color: red">
                      12 caractères numériques
                      <i class="fa-regular fa-circle-xmark" style="color: red"></i>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="input-group address-input">
                <input type="text" name="address" id="address" required />
                <label for="address">Adresse...</label>
                <i class="fa-solid fa-house input-icon"></i>
                <div class="error-input">
                  <h4>Votre adresse doit être:</h4>
                  <ul>
                    <li style="color: red">
                      >4 caractères
                      <i class="fa-regular fa-circle-xmark" style="color: red"></i>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="input-group">
                <input type="text" name="annee_bacc" id="annee_bacc" required />
                <label for="annee_bacc">Année du bacc...</label>
                <i class="fa-regular fa-calendar-check input-icon"></i>
              </div>
              <div class="input-group num_bacc-input">
                <input type="text" name="num_bacc" id="num_bacc" required />
                <label for="num_bacc">Numéro du bacc...</label>
                <i class="fa-solid fa-hashtag input-icon"></i>
                <div class="error-input">
                  <h4>Le numéro doit être:</h4>
                  <ul>
                    <li style="color: red">
                      7 caractères numériques
                      <i class="fa-regular fa-circle-xmark" style="color: red"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="student-information swiper-slide">
              <div class="input-group nationality-input">
                <input type="text" name="nationality" id="nationality" required />
                <label for="nationality">Nationalité...</label>
                <i class="fa-regular fa-flag input-icon"></i>
              </div>
              <div class="gender">
                <label for="gender">Genre : </label>

                <div class="gender-select">
                  <div>
                    <input type="radio" name="gender" value="H" id="homme" />
                    <label for="homme">Homme <i class="fa-solid fa-mars input-icon"></i></label>
                  </div>
                  <div>
                    <input type="radio" name="gender" value="F" id="femme" />
                    <label for="femme">Femme <i class="fa-solid fa-venus input-icon"></i></label>
                  </div>
                </div>
              </div>
              <div>
                <label for="notes">Relevé de notes: </label>
                <input type="file" id="notes" accept="image/png, image/jpg, image/jpeg" name="notes" />
              </div>
              <div>
                <label for="identite">CIN ou copie (-18): </label>
                <input type="file" id="identite" accept="image/png, image/jpg, image/jpeg" name="identite" multiple />
              </div>
            </div>
          </div>
          <div class="swiper-button-next" style="right: -0.2rem; color: #000a"></div>
          <div class="swiper-button-prev" style="left: -0.2rem; color: #000a"></div>
        </div>
        <div class="submit-div">
          <input class="input-submit" type="submit" value="Enregistrer" />
        </div>
      </form>
    </main>
  </div>
  <script src="package/swiper-bundle.js"></script>
</body>

</html>
