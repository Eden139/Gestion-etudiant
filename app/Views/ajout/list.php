<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
        <link rel="stylesheet" href="cropperjs-main/dist/cropper.min.css">
        <link rel="stylesheet" href="package/swiper-bundle.min.css">
        <title>Document</title>
        <script src="index.js" defer></script>
        <script src="verify.js" defer></script>
        <script src="cropperjs-main/dist/cropper.min.js" defer></script>
    </head>
    <body>
        <main class="main-container">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="image">
                    <div class="profile-image">
                        <button class="noimage" type="button" onclick="openpopup()"></button>
                        <label for="profile">
                            <i class="fa-solid fa-camera"></i>
                        </label>
                        <input 
                            type="file"
                            id="profile" 
                            style="display: none;" 
                            accept="image/png, image/jpg, image/jpeg"
                            class="image-input"
                        />
                    </div>

                    <div class="popup">
                        <i class="fa-solid fa-circle-xmark close-popup" onclick="closepopup()"></i>
                        <div class="crop-title">
                            <h3>Découpage</h3>
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
                <script src="image.js"></script>

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="student-information swiper-slide">
                            <div class="input-group">
                                <input type="text" name="name" id="name" required>
                                <label for="name">Nom...</label>
                                <i class="fa-solid fa-user input-icon"></i>
                            </div>
                            <div class="input-group">
                                <input type="text" name="firstname" id="firstname" required>
                                <label for="firstname">Prénom...</label>
                                <i class="fa-regular fa-user input-icon"></i>
                            </div>
                            <div class="input-group">
                                <input type="text" id="birthday" name="birthday" onfocus="type='date'" onblur="type='text'" required>
                                <label for="birthday">Date de naissance...</label>
                                <i class="fa-regular fa-calendar-xmark input-icon"></i>
                            </div>
                            <div class="input-group">
                                <input type="text" name="birthlocation" id="birthlocation" required>
                                <label for="birthlocation">Lieu de naissance...</label>
                                <i class="fa-solid fa-map-location-dot input-icon"></i>
                            </div>
                            <div class="input-group">
                                <input type="tel" name="tel" id="tel" value="3" required>
                                <label for="tel">Téléphone... </label>
                                <span class="mada-code">🇲🇬 +261</span>
                                <i class="fa-solid fa-phone input-icon"></i>
                            </div>
                        </div>
                        <div class="student-information swiper-slide">
                            <div class="input-group">
                                <input type="email" name="email" id="email" required>
                                <label for="email">E-mail...</label>
                                <i class="fa-regular fa-envelope input-icon"></i>
                            </div>
                            <div class="input-group">
                                <input type="text" name="cin" id="cin" required>
                                <label for="cin">CIN...</label>
                                <i class="fa-solid fa-id-card input-icon"></i>
                            </div>
                            <div class="input-group">
                                <input type="text" name="address" id="address" required>
                                <label for="address">Adresse...</label>
                                <i class="fa-solid fa-house input-icon"></i>
                            </div>
                            <div class="input-group">
                                <input type="text" name="annee_bacc" id="annee_bacc" required>
                                <label for="annee_bacc">Année du bacc...</label>
                                <i class="fa-regular fa-calendar-check input-icon"></i>
                            </div>
                            <div class="input-group">
                                <input type="text" name="num_bacc" id="num_bacc" required>
                                <label for="num_bacc">Numéro du bacc...</label>
                                <i class="fa-solid fa-hashtag input-icon"></i>
                            </div>
                        </div>
                        <div class="student-information swiper-slide">
                            <div class="input-group">
                                <input type="text" name="nationality" id="nationality" required>
                                <label for="nationality">Nationalité...</label>
                                <i class="fa-regular fa-flag input-icon"></i>
                            </div>
                            <div class="gender">
                                <label for="gender">Genre : </label>
                                    
                                <div class="gender-select">
                                    <div>
                                        <input type="radio" name="gender" value="h" id="homme">
                                        <label for="homme">Homme <i class="fa-solid fa-mars input-icon"></i></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="gender" value="f" id="femme">
                                        <label for="femme">Femme <i class="fa-solid fa-venus input-icon"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="swiper-button-next" style="right:-.2rem;color: #000a">
                    </div>
                    <div class="swiper-button-prev" style="left:-.2rem;color: #000a">
                    </div>
                </div>
                <div class="submit-div">
                    <input class="input-submit" type="submit" value="Enregistrer">
                </div>
            </form>
        </main>
        <script src="package/swiper-bundle.js"></script>
    </body>
</html>
