<?php ob_start();

$body="<div class='main'>
            <img src='view/images/FondMaison.jpg' class='imageFond'>
            <a href='index.php?action=NosProduits' class='VersProduit'>Découvrir nos Produits</a>
            <a href=\"index.php?action=Connexion\" class='VersConnexion'>&emsp;Se Connecter&emsp;</a>

        <br><br><br>
        <div class='information' style='    border-top-left-radius: 20px ;  border-bottom-left-radius: 20px ;'>
            <div><p>&emsp;Vous voulez faire des économies, améliorer votre quotidien ? <br> &emsp;Vous souhaitez bénéficier de nos services</p><br><br>
            <a href=#><div class='contact'>Contactez Nous</div></a></div>
            <img src='view/images/Ask.png'>
        </div>
        
        <br>
        <div class='information' style='    border-top-right-radius: 20px ;  border-bottom-right-radius: 20px ;'>
            <img src='view/images/Ask.png'>
            <div class='ins'><p>&emsp;Vous bénéficiez de nos services <br> &emsp;vous n'avez pas de compte ?</p><br><br>
            <a href='index.php?action=inscription'><div class='contact'>Inscrivez Vous</div></a></div>
        </div>
        <br>
        
        </div>
        ";

require("template/template.php"); ?>