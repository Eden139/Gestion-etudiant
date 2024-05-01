<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="/css/modify.css"> -->
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
        <link rel="stylesheet" href="cropperjs-main/dist/cropper.min.css">
        <link rel="stylesheet" href="package/swiper-bundle.min.css">
        <link rel="stylesheet" href="error.css">
        <style>
            /* <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'modify.css')) ?> */
        </style>
        <title>MIT | Ajout</title>
        <script src="/js/index.js"></script>
        <script src="/js/verify.js" defer></script>
        <script src="cropperjs-main/dist/cropper.min.js" defer></script>
    </head>
    <body>
        <div class="principal">
        <main class="main-container">
            <form action="ajout.php" method="post" enctype="multipart/form-data">
                <div class="statut-container">
                    <select name="state" id="state">
                        <option value="1">
                            Professeur
                        </option>
                        <option value="2" selected>
                            Étudiant
                        </option>
                        <option value="3">
                            Autre 
                        </option>
                    </select>
                </div>
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
                            name="photo"
                            class="image-input"
                            value="/img/etudiant/<?= $id."jpeg" ?>"
                        />
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
                <!-- <script src="/js/image.js"> -->
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="student-information swiper-slide">
                        <?php foreach($etudiants as $etd){?>
                            
                            <div class="input-group name-input">
                                <input type="text" name="name" id="name"   value="<?= $etd['nom']?>" required>
                                <label for="name">Nom...</label>
                                <i class="fa-solid fa-user input-icon"></i>
                            
                            </div>

                            <div class="input-group firstname-input">
                                <input type="text" name="firstname" id="firstname"  value="<?= $etd['prenoms']?>"  required>
                                <label for="firstname">Prénom...</label>
                                <i class="fa-regular fa-user input-icon"></i>
                            </div>

                            <div class="input-group birthday-input">
                                <input type="text" id="birthday" name="birthday" value="<?= $etd['date_naissance']?>" onfocus="type='date'" onblur="type='text'" required>
                                <label for="birthday">Date de naissance...</label>
                                <i class="fa-regular fa-calendar-xmark input-icon"></i>
                            </div>

                            <div class="input-group birthlocation-input">
                                <input type="text" name="birthlocation" value="<?= $etd['lieu_naissance']?>" id="birthlocation" required>
                                <label for="birthlocation">Lieu de naissance...</label>
                                <i class="fa-solid fa-map-location-dot input-icon"></i>
                                <div class="error-input">
                                    <h4>Votre adresse doit être:</h4>
                                    <ul>
                                        <li style="color:red;">>4 caractères <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="input-group tel-input">
                                <input type="tel" name="tel" id="tel" value="<?= $etd['telephone']?>" required>
                                <label for="tel">Téléphone... <span style="color:grey;font-style:italic">(facultatif)</span></label>
                                <span class="mada-code">🇲🇬 +261</span>
                                <i class="fa-solid fa-phone input-icon"></i>
                                <div class="error-input">
                                    <h4>Votre numéro doit:</h4>
                                    <ul>
                                        <li style="color:red;">être 9 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="student-information swiper-slide change">
                            <div class="input-group email-input">
                                <input type="text" name="email" id="email" value="<?= $etd['email']?>" required>
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
                                <input type="text" name="cin" id="cin" value="<?= $etd['cin']?>" required>
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
                                <input type="text" name="address" id="address" value="<?= $etd['adresse']?>" required>
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
                                <input type="text" name="annee_bacc" id="annee_bacc" value="<?= $etd['annee_bacc']?>" required>
                                <label for="annee_bacc">Année du bacc...</label>
                                <i class="fa-regular fa-calendar-check input-icon"></i>
                            </div>
                            <div class="input-group num_bacc-input">
                                <input type="text" name="num_bacc" id="num_bacc" value="<?= $etd['num_bacc']?>" required>
                                <label for="num_bacc">Numéro du bacc...</label>
                                <i class="fa-solid fa-hashtag input-icon"></i>
                                <div class="error-input">
                                    <h4>Le numéro doit être:</h4>
                                    <ul>
                                        <li style="color:red;">7 caractères numériques <i class="fa-regular fa-circle-xmark" style="color:red;"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="student-information swiper-slide">
                            <div class="input-group nationality-input">
                                <input type="text" name="nationality" id="nationality" value="<?= $etd['nationalite']?>" required>
                                <label for="nationality">Nationalité...</label>
                                <i class="fa-regular fa-flag input-icon"></i>
                            </div>
                            <?php }
                                foreach($inscription as $i){
                            ?>
                            <div class="input-group">
                                <input type="text" id="numInscr" name="numInscr" value="<?= "UA".$i['num_inscription']."FS2024" ?>" required>
                                <label for="numInscr">Numero d'inscription...</label>
                            </div>
                            <div class="input-group select-container">
                                <span class="select"><b>Grade:</b> </span>
                                <select name="grade" class="grade" selected="<?= $i['grade'] ?>">
                                    <?php if($i['grade']==="L"){?>
                                    <option value="L">
                                        Licence
                                    </option>
                                    <option value="M">
                                        Master
                                    </option>
                                    <?php }if($i['grade']==="M"){?>
                                        <option value="M">
                                            Master
                                        </option>
                                        <option value="L">
                                            Licence
                                        </option>
                                    
                                 <?php } ?>
                                    
                                </select>
                            </div> 
                            <div class="input-group">
                                <span class="select" ><b>Niveau:</b></span>
                                <?php if($i['niveau']==="1"){?>
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
                                
                                <?php }if($i['niveau']==="2"){?>
                                    <select name="niveau" id="niveau">
                                    <option value="2">
                                        2
                                    </option>
                                    <option value="1">
                                        1
                                    </option>
                                    <option value="3">
                                        3
                                    </option>
                                </select>
                                <?php }if($i['niveau']==="3"){?>
                                    <option value="1">
                                        1
                                    </option>
                                    <option value="2">
                                        2
                                    </option>
                                    <option value="3">
                                        3
                                    </option>
                                <?php } ?>
                            </div>
                            <div class="input-group">
                                <span class="select" selected="<?= $i['id_parcours'] ?>"><b>Parcours:</b> </span>
                                <select name="parcours" id="parcours">
                                    <?php if($i['id_parcours']==="1"){?>
                                    <option value="1">
                                        MIT
                                    </option>
                                    <option value="2">
                                        MISA
                                    </option>
                                    <option value="3">
                                        INT
                                    </option>
                                    <?php }if($i['id_parcours']==="2"){?>
                                    <option value="2">
                                        MISA
                                    </option>
                                    <option value="1">
                                        MIT
                                    </option>
                                   
                                    <option value="3">
                                        INT
                                    </option>
                                    
                                    <?php }if($i['id_parcours']==="3"){?>
                                        <option value="3">
                                            INT
                                        </option>
                                        <option value="2">
                                            MISA
                                        </option>
                                        <option value="1">
                                            MIT
                                        </option>
                                    <?php }?>

                                </select>
                            </div>
                            <div class="input-group ">
                                <span class="select" selected="<?= $i['statut'] ?>"><b>Status:</b> </span>
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
                        <?php } foreach($etudiants as $e){?>
                        <div class="student-information swiper-slide">
                            <div class="gender">
                                <label for="gender">Genre : </label>
                                <div class="gender-select">
                                    <div>
                                        <input type="radio" name="gender" value="H" id="homme">
                                        <label for="homme">Homme <i class="fa-solid fa-mars input-icon"></i></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="gender" value="F" id="femme">
                                        <label for="femme">Femme <i class="fa-solid fa-venus input-icon"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <?php }?> 
                    </div>
                    <div class="swiper-button-next" style="right:-.2rem;color: #000a;"></div>
                    <div class="swiper-button-prev" style="left:-.2rem;color: #000a"></div>
            </div>
            <div class="submit-div">
                <input class="input-submit" type="submit" value="Enregistrer">
            </div>
        </form>
    </main>
</div>
        <script src="package/swiper-bundle.js"></script>
        <script src="./index1.js"></script>
    </body>
</html>
                                        
