
<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
    	<title><?= $titre_accueil ?> MangaStore !</title>
    	<link href="css/switch.css" rel="stylesheet" />
		<div id="searchbar" align="center">
		</div>
		<p> </p>
		<?php     
		//if($estAdministrateur == true) echo "<button class='btn btn-outline-success' onclick=\"window.location.href='?uc=ajoutManga'\">Ajouter un manga</button>";
		?>
		<!-- <label class="switch" id="switch" onclick="check()"> -->
		<!-- <input type="checkbox"/> -->
		<span></span>
		</label>
	</head>

	<body>
    	<h1 class="mt-5 text-center"><?= $titre_accueil ?> MangaStore !</h1>

		<?php
			$p = 0;
			//var_dump($lesMangas);
			for($i = 0;$i < 3;$i++)
			{
				?>
				<div class="bg-homepage mt-5">
				<?php
				for($k = 0;$k < 3;$k++)
				{
					?>
					<div class="card" style="width: 18rem;">
					<img src="<?= $lesMangas[$p]->getLien_image() ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?= $lesMangas[$p]->getNom_manga() ?></h5>
						<p class="card-text"><?= substr(str_replace("â€™", "'", $lesMangas[$p]->getDescription()), 0, 255)."..." ?></p>
						<a href="?uc=gererManga&action=consulterManga&id=<?= $lesMangas[$p]->getId() ?>" class="btn btn-primary"><?= $voir ?></a>
					</div>
					</div>
					<?php
					$p++;
				}
				?>
				</div>
				<?php
			}
		?>


<script>
	let description = document.getElementsByTagName("p");
	let nom_manga = document.getElementsByTagName("h5");
	console.log(description);
	for(let i=0; i<description.length; i++){
		description[i].innerHTML = description[i].innerHTML.replaceAll("â€™", "'");
		description[i].innerHTML = description[i].innerHTML.replaceAll("â€", " ");
	}
	for(let i=0; i<nom_manga.length; i++){
		nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("â€™", "'");
		nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("â€", " ");
	}
	/*
	let nbChecked;
	localStorage.setItem(nbChecked, 0);
	function check() {
    var remember = document.getElementById('switch');
    if (remember.checked){
        alert("checked") ;
    }else{
        alert("You didn't check it! Let me check it for you.")
    }

}
*/
</script>
    	<?php
    	//foreach ($posts as $post) {
    	?>
        	<div class="news">
            	<h3>
                	
            	</h3>
            	<p>
                	<?php
                	// We display the post content.
                	
                	?>
                	<br />
            	</p>
        	</div>
    	<?php
    	//} // The end of the posts loop.
    	?>
	</body>
</html>