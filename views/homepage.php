
<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
    	<title>Page accueil provisoire</title>
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
    	<h1>Page d'accueil provisoire</h1>
		
<script>
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