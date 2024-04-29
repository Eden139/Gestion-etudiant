<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulaire</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
      <body>
        <main>
            <h1>Liste des étudiants inscrits</h1>
            <form action="list/" method="get" class="search-form">
                <input type="text" name="q" id="q">
                <input type="submit" value="recherche" class="search">
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Birthday</th>
                        <th>Mail</th>
                        <th>Genre</th>
                        <th>Options</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['firstname'] ?></td>
                            <td><?= $user['address'] ?></td>
                            <td><?= $user['birth'] ?></td>
                            <td><?= $user['mail'] ?></td>
                            <td><?= $user['gender'] ?></td>
                            <td>
                            <a href="list/delete">
                            </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </main>
    </body>
</html>
