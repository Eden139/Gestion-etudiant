<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/list.css">
</head>
<body>
    <div class="divBar links">
        <ul>
            <li><a href="">List</a></li>
            <li><a href="">Ajout</a></li>
        </ul>
    </div>
    <div class="absolute" onclick="toogle()"></div>
    <header>
        <form action="search" class="formFind" method="get">
            <input type="text" placeholder="Chercher ici" name="search">
            <img src="./search.svg" alt="TROUVER" class="trouver">

        </form>
    </header>
    <nav class="Choose">
        <ul>
            <li><a href="someoneregister?grade=all&niveau=all">Tout</a></li>
            <li><a href="someoneregister?grade=L&niveau=1">L1</a></li>
            <li><a href="someoneregister?grade=L&niveau=2">L2</a></li>
            <li><a href="someoneregister?grade=L&niveau=3">L3</a></li>
            <li><a href="someoneregister?grade=M&niveau=1">M1</a></li>
            <li><a href="someoneregister?grade=M&niveau=2">M2</a></li>
        </ul>
    </nav>
    <section class="listes">
        <?php 
        if($etudiants==="vide"){
            echo "<center><H1 style=\"color:white;font-size:26px;right:0;\">Pas d'Etudiants</p></center>";
        }
        else{
        foreach($etudiants as $etudiant){ ?>
        <article>
            <figure>
                <img src="./lapin.jpg" alt="lapin">
            </figure>
            <div>
                <p><?=$etudiant['nom'] ?></p>
                <p><?=$etudiant['prenoms']?></p>
                <p><?=$etudiant['email'] ?></p>
                <form action="form_inscription" method="post">
                  <input type="hidden" value="<?=$etudiant['id_etudiant'] ?>" name="id" />
                  <input type="submit" value="S'inscrire" name="inscription"/>
                </form>
            </div>
        </article>
        <?php }}?>
    </section>
    <script src="./filter.js"></script>
</body>
</html>
