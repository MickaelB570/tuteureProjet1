
<html>
<link rel="stylesheet" href="css_blog.css" />
<head>
<h1><center>Inscription</center></h1>
</head>
<center>
<form method="post" name="form1" onsubmit="verifie()" action="?uc=inscription&action=inscription&option=validerSaisie" class="co_encadree" > 
<meta charset="UTF-8">
<table class="co_table">
<tr> <td><strong>Nom :</strong></td> <td> <input type="text" size=20 name="nom" id="nom" required> </td> </tr>
<tr> <td><strong>Adresse mail :</strong></td> <td> <input type="mail" size=30 name="mail" id="mail" required></td> </tr>
<tr> <td><strong>Mot de passe :</strong></td> <td> <input type="text" size=20 name="mdp" id="mdp" required></td> </tr>
</br>
</table>
<br><INPUT class="btn btn-outline-success"  TYPE="submit" NAME="valider" VALUE=" Valider " class="bouton">
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