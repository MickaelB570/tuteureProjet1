<html>
<link rel="stylesheet" href="css_blog.css" />
<head>
<h1><center><?= $connexion ?></center></h1>
<br><center><?= $msg_co ?></center></br>
<meta charset="UTF-8">
</head>
</br>
<center>
	<br>
<form method="post" name="form1" onsubmit="verifie()" action="?uc=connexion&action=connexion&option=validerSaisie" class="co_encadree"> 
<?= $adresse_mail ?> : <br/> <input type="text" size=30 name="mail" id="mail" required><br/>
<?= $mot_de_passe ?> : <br/> <input type="password" size=20 name="mdp" id="mdp" required><br/>
<p><?= $inscrit ?> <a href="?uc=inscription"><?= $inscrit2 ?></a></p>

<br><INPUT TYPE="submit" NAME="valider" VALUE=" <?= $valider ?> " class="btn btn-outline-success">
</form>
<p> <?= $estValide; ?> </p>
<center>
<script language="javascript"> 
 function verifie(){
	
	var str = document.forms['form1'].mail.value;
	var str2 = document.forms['form1'].pseudo.value;
    if( !str.trim().replace(/\s+/, '').length && !str2.trim().replace(/\s+/, '').length) {
    alert( "L'adresse mail est vide!" );
    return false;
       }
	 var str = document.forms['form1'].mdp.value;
    if( !str.trim().replace(/\s+/, '').length ) {
    alert( "Le champ mot de passe est vide!" );
    return false;
       }  
	 
	 
 }
 </script>
  <body class="acc_fond">
 <div  class="acc_fond2">
 </html>