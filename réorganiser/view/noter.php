<?php ob_start();

$body ="    <script type=\"text/javascript\" src=\"view/notation/etoile.js\"></script>

    <script type='text/javascript'>
        function js(){
            var x = document.forms['formulaire']['note'].value;
            if(x==''){
                alert('veuillez attribuez une note');
                return false;
            }
        }
    </script>
        <br><br>

       <div id='Cforum'>
                <h3><br>Note du capteur ".$_GET['nom']."<br><br></h3><br>Choissisez le nombre d'étoiles que vous voulez attribuez :<br> 
                <div id='A1'><script type='text/javascript'>CreateListeEtoile('A1',5);</script>
                </div>
            
        <form class='formulaire' onsubmit='return js()' name='formulaire' method='POST' action='index.php?action=calculnote&nom=".$_GET['nom']."'>
            <br>

            <input id='nom' type='hidden' value=".$_GET['nom'].">
            <input id='note' type='hidden' name ='note' class='note' min='0' max='5'>
            <br>
            <label>Commentaire: </label>
            <div class='scroll'>
            <textarea id='commentaire'  name='commentaire' class='commentaire'></textarea><br><br>

            <input type='submit' name='valider' class='boutonbis' value='Valider'>
        </form>
        <br><br><br></div>";


require("view/template/template.php");