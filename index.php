<!doctype html> 
	<html>
		<head> 
			<meta charset="utf-8">
			
		</head> 


<form action="script-captchas.php method="post">
<label for="captcha"> Veuillez saisir le code de sécurité! </label>


<?php
session_start();
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */
echo "<img src='script-captchas.php' alt='captchas' />";
?>

<input type="text" id="captcha" name="captcha"> </input>
<input type="submit" id="submit" name="VALIDER"> </input>
</html>
