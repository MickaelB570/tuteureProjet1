
<html>
<link rel="stylesheet" href="css_blog.css" />
<head>
<h1><center><?= $titre_inscription ?></center></h1>
</head>
<center>
<form method="post" name="form1" onsubmit="verifie()" action="?uc=inscription&action=inscription&option=validerSaisie" class="co_encadree" > 
<meta charset="UTF-8">
<table class="table">
<tr> <td><strong><?= $nom_utilisateur ?> :</strong></td> <td> <input style="margin-left: 0%; margin-bottom: 1%; margin-top: 1%; " type="text" size=20 name="nom" id="nom" required></td></tr>
<tr> <td><strong><?= $adresse_mail ?> :</strong></td> <td> <input style="margin-left: 0%; margin-bottom: 1%; " type="mail" size=30 name="mail" id="mail" required></td></tr>
<tr> <td><strong><?= $mot_de_passe ?> :</strong></td> <td> <input style="margin-left: 0%; margin-bottom: 1%;" type="text" size=20 name="mdp" id="mdp" required></td></tr>
<tr> <td><strong><?= $mdp_confirm ?> :</strong></td> <td> <input style="margin-left: 0%; margin-bottom: 1%;" type="text" size=20 name="mdp2" id="mdp" required></td></tr>
</table>
</br>
<br><INPUT class="btn btn-outline-success"  TYPE="submit" NAME="valider" VALUE=" <?= $valider ?> " class="bouton">
</form>
<script language="javascript"> 
 function verifie(){
	
	var str = document.forms['form1'].nom.value;
    if( !str.trim().replace(/\s+/, '').length ) {
    alert( "Le champ nom est vide!" );
    return false;
       }
	   
	var str = document.forms['form1'].prenom.value;
    if( !str.trim().replace(/\s+/, '').length ) {
    alert( "Le champ prenom est vide!" );
    return false;
       }
	var str = document.forms['form1'].mail.value;
    if( !str.trim().replace(/\s+/, '').length ) {
    alert( "Le champ mail est vide!" );
    return false;
       }
	var str = document.forms['form1'].pseudo.value;
    if( !str.trim().replace(/\s+/, '').length ) {
    alert( "Le champ pseudo est vide!" );
    return false;
       }
	 var str = document.forms['form1'].mdp.value;
    if( !str.trim().replace(/\s+/, '').length ) {
    alert( "Le champ mot de passe est vide!" );
    return false;
       }  
	 
       var str = document.forms['form1'].mail.value.indexOf("@");
       var str2 = document.forms['form1'].mail.value.indexOf(".");
    if(str==-1)
    {
    alert( "ce n'est pas une adresse email valide!" );
    return false;
       }
    if(str2==-1)
    {
    alert( "ce n'est pas une adresse email valide!" );
    return false;
    }


 }
 </script>
<p> <?= $estValide; ?> </p>
</center>

  <body class="acc_fond">
 <div  class="acc_fond2">
 </html>