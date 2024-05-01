<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/list.css">
 
    <script>
		function printDiv() {
			window.print();
		}
	</script>
</head>
<body>
    <div class="divBar links display">
        <h1>Navigation</h1>
        <hr>
        <ul>
            <li class="liens"><a href="/index.php/listsomeone">List</a></li>
            <li class="liens"><a href="/index.php/form_ajout_etudiant">Ajout</a></li> 
        </ul>
    </div>
    <div class="absolute" onclick="toogle()"></div>
    <header>
        <form action="/index.php/search" class="formFind">
            <input type="text" placeholder="Chercher ici" name="search">
            <button></button>
            <img src="./search.svg" alt="TROUVER" class="trouver">
        </form>
    </header>
    <nav class="Choose">
        <ul>
			<button onclick="printDiv()">Imprimer</button>
            <li><a href="/index.php/someoneregister?grade=all&niveau=all">Tout</a></li>
            <li><a href="/index.php/someoneregister?grade=L&niveau=1">L1</a></li>
            <li><a href="/index.php/someoneregister?grade=L&niveau=2">L2</a></li>
            <li><a href="/index.php/someoneregister?grade=L&niveau=3">L3</a></li>
            <li><a href="/index.php/someoneregister?grade=M&niveau=1">M1</a></li>
            <li><a href="/index.php/someoneregister?grade=M&niveau=2">M2</a></li>
        </ul>
    </nav>
    <section class="listes">
    <?php if($etudiants !=="vide"){
        foreach($etudiants as $etudiant) {?>
        <article>
            <figure>
                <img src="<?=WRITEPATH."uploads/etudiants/photos/".$etudiant['id_etudiant'].".png" ?>" alt="<?=WRITEPATH."uploads/etudiants/photos/".$etudiant['id_etudiant'].".png" ?>">
            </figure>
            <div>
                <p><?=$etudiant['nom'] ?></p>
                <p><?=$etudiant['prenoms']?></p>
                <p><?=$etudiant['grade']?></p>
                <p><?=$etudiant['statut']?></p>

                <p class="doNotShow not"><?=$etudiant['telephone'] ?></p>
                <p class="doNotShow not"><?=$etudiant['cin'] ?></p>
                <p class="doNotShow not"><?=$etudiant['annee_bacc'] ?></p>
                <p class="doNotShow not"><?=$etudiant['num_bacc'] ?></p>
                <p class="doNotShow not"><?=$etudiant['cin'] ?></p>
                <p class="doNotShow not"><?=$etudiant['date_naissance'] ?></p>
                <p class="doNotShow not"><?=$etudiant['lieu_naissance'] ?></p>
                <p class="doNotShow not"><?=$etudiant['email'] ?></p>

                <p><form action="/index.php/form_modify" method="post">
                    <input type="hidden" name ="id" value = "<?= $etudiant['id_etudiant']?>">
                    <input type="submit" name="Modify" value="Modifier">
                </form>
                <form action="/index.php/form_delete" method="post">
                    <input type="hidden" name ="id" value = "<?= $etudiant['id_etudiant']?>">
                    <input type="submit" name="Modify" value="Supprimer"></span>
                </form></p>
                <button class="doNotShow not btn">CLOSE THIS</button>

            </div>
        </article>
        <?php }
        } else{?>
            <h2 class="vide">La liste est vide</h2>
        <?php }?> 
    </section>
    <script>
		let articles = document.querySelectorAll(".listes article");

		articles.forEach(article=>{
			article.addEventListener('click',()=>{
				showThis(article, articles);
			})
		})

		function showThis(article, articles){
			articles.forEach(a=>{
				let pNot = a.querySelectorAll('.not')
				pNot.forEach(p=>{
					p.classList.add('doNotShow')
				})
				a.classList.remove('showMe')
			})

			let pNot = article.querySelectorAll(`.doNotShow`)
			pNot.forEach(p=>{
				p.classList.remove('doNotShow')
			})
			article.classList.add('showMe')
		}

		let btns= document.querySelectorAll('.btn')

		btns.forEach(btn=>{
			btn.addEventListener('click',()=>{
			let as = document.querySelectorAll(".listes article")
				as.forEach(a=>{
					a.classList.remove('showMe')
					window.location.reload()
				})
			})
		})
		function toogle(){
			let a= document.querySelector('.links')
			if(a.classList.contains('display')){
				a.classList.remove('display')
			} else{
				a.classList.add('display')
			}
		}
    </script>
</body>
</html>
