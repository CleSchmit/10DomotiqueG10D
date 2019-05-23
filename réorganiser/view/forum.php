<?php
session_start();
include_once 'model/function.php';
include_once 'controller/ControlMessage.php';
include_once 'controller/ControlConversation.php';

$_SESSION['convName']="Choisissez un Sujet";
if (isset($_GET['conv'])){
    $_SESSION['convName'] = $_GET['conv'];
}
?>
<html>
	<head>
		<title>10Domotique</title>
		<link rel="stylesheet" href="view/style.css" />
	</head>
	<body>
		<header>
    		<?php include "template/Header.php" ?>
		</header>
			<div id="forum">
				<div class="ListeForum">
                    <h3 style="background-color: darkorange; color: black;    border-bottom: solid black;"><br>&emsp;Liste des Sujets<br><br></h3>
                    	<?php         
                            $bdd = bdd();
                            $conversation = $bdd->query('SELECT nom FROM conversation');
                            if (isset($_SESSION['Nom'])){
                                echo "<a href='index.php?action=forum&conv=add'><div class='Add'><br><p>&emsp;</p><img class='imgAjoutF' src='view/images/Ajout.png'>&ensp;Ajouter une question&emsp;<br><br></div></a>";
                            }
                            while ($donnees = $conversation->fetch()) {
                                echo "<a href='index.php?action=forum&conv=" . $donnees['nom'] . "'><div class='LienForum'>" . $donnees['nom'] . "</div></a>";
                            }
                            $conversation->closeCursor();

                           
                        ?>
				</div>
			<div class="conv">

				<p>
                	<?php
                    $delete = '';
                    if(isset($_SESSION['Role'])){
                        if($_SESSION['Role'] == 'Admin'){
                            $delete = "<a href='index.php?action=forum&conv=caca' class='delete' id='DelP'>&times;&emsp;</a>";
                        }
                    }


                    echo "<h3><br>&emsp;".$_SESSION['convName']."$delete<br><br></h3><br>";
                        if (isset($_GET['conv'])) {
                            $bdd = bdd();
                            $conversation_id = $bdd->query('SELECT id FROM conversation WHERE nom = \'' . $_GET['conv'] . '\'');
                            $_SESSION['id_conv'] = $conversation_id->fetch()['id'];
                        }
                        if (isset($_SESSION['id_conv'])) {
                            $messages = $bdd->query('SELECT * FROM messages WHERE id_conv= \'' . $_SESSION['id_conv'] . '\'  ORDER BY id ASC');
                            while ($message = $messages->fetch()) {
                                echo "<div class='user'><strong>" . $message['utilisateur'] . " : </strong><a href=# class='delete' style='font-size: 120%;'>&times;&emsp;</a></div><div class='message'><br>" . $message['contenu'] . "</br></br></div><br>";
                            }
                            $conversation->closeCursor();
                        }
                    ?>
        		</p>
   				<?php
       				if (isset($_SESSION['Nom'])){
       				    if (isset($_SESSION['id_conv'])) {
       				        echo "
                        <form action='index.php?action=forum' method='post'>
                              <p><br>
                                  <textarea class='connexion' style='width: 100%;' name='message' placeholder=' Message...' required></textarea></br>
                                  <br><input class = 'boutonbis' type='submit' value='Valider' /> </br>
                              </p>
                        </form>";

       				    }
       				    if (isset($_GET['conv']) and $_GET['conv'] == 'add') {
       				        echo "
                        <form action='index.php?action=forum' method='post'>
                              <p><br>
                                  <input class='connexion' style='width: 100%;' type='text' name='nomNouvelConv' placeholder=' Nom nouveau sujet..' required/> </br>
                                  <br><input class='boutonbis' type='submit' value='Valider' /> </br>
                              </p>
                        </form>";
       				    }
       				}
                    
                ?>
    		</div>
		</div>
	<footer>
    	<?php include "template/Footer.php" ?>
	</footer>
</body>
<html>