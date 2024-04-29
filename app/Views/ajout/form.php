<       !DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulaire</title>
</head>

<body>
    <main>
        <h2>Inscription</h2>
        <form action="insert" method="post">
            <div class="input-group">
                <label for="name">Nom: </label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-group">
                <label for="firstname">Prénom: </label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="input-group">
                <label for="address">Adresse: </label>
                <input type="text" name="address" id="address">
            </div>
            <div class="input-group">
                <label for="birth">Date de naissance: </label>
                <input type="date" name="birth" id="birth">
            </div>
            <div class="input-group">
                <label for="mail">E-mail: </label>
                <input type="text" name="mail" id="mail">
            </div>
            <div class="input-group">
                <label for="sexe">Sexe: </label>
                <select name="sexe" id="sexe">
                    <option value="H">Homme</option>
                    <option value="F">Femme</option>
                </select>
            </div>
            <input type="submit" value="S'inscrire">
        </form>
    </main>
</body>

</html>
