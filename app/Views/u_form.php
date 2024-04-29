<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Upload file</title> 
    </head>
    <body>
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        <?= form_open_multipart('upload/upload') ?>
            <div>
                <label for="profile">Profile: </label>
                <input type="file" name="profile" id="profile" accept="image/jpg, image/png, image/jpeg">
            </div>
            <div>
                <label for="notes">Relevé de notes: </label>
                <input type="file" name="notes" id="notes" accept="image/jpg, image/png, image/jpeg">
            </div>
            <div>
                <label for="identite">CIN ou Copie (-18 ans): </label>
                <input type="file" name="identite" id="identite" accept="image/jpg, image/png, image/jpeg">
            </div>
        </form>
    </body>

</html>
