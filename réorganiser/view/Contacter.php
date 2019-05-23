<?php session_start();

include_once 'controller/EnvoieFormulaire.php';

ob_start();
if(isset($_SESSION['Email'])){
    $body="
	<div class='main'>
		<div id='Cforum'>
			<h1>Formulaire</h1>
			<form method='post' action='index.php?action=Contacter'>
					<p><input class='connexion' type='text' name='objet' placeholder=' Objet...' required /></p>
					<p><textarea class='connexion' name='message' placeholder=' Message...' required></textarea></p>
					<input class='bouton' type='submit' value='Envoyer' />
			 </form>
		</div>
    </div>";
}else{
    $body="
	<div class='main'>
		<div id='Cforum'>
			<h1>Formulaire</h1>
			<form method='post' action='index.php?action=Contacter'>
					<p><input class='connexion' type='text' name='objet' placeholder=' Objet...' required /></p>
					<p><input class='connexion' type='email' name='mail' placeholder=' E-mail' required /></p>
					<p><textarea class='connexion' name='message' placeholder=' Message...' required></textarea></p>
					<input class='bouton' type='submit' value='Envoyer' />
			 </form>
		</div>
    </div>";
    
}


require("template/template.php"); ?>