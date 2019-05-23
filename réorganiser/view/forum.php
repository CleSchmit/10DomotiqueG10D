<?php
session_start();
include_once 'model/function.php';
include_once 'controller/ControlMessage.php';
include_once 'controller/ControlConversation.php';
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
				<div >
                    	<?php         
                            $bdd = bdd();
                            $conversation = $bdd->query('SELECT nom FROM conversation');
                            while ($donnees = $conversation->fetch()) {
                                echo "<a class='lien' href='index.php?action=forum&conv=" . $donnees['nom'] . "'><br>" . $donnees['nom'] . "</a>";
                            }
                            $conversation->closeCursor();
                            if (isset($_SESSION['Nom'])){
                                echo "<a href='index.php?action=forum&conv=add'><br>Add</a>";
                            }
                           
                        ?>
				</div>
			<div >
				<p>
                	<?php
                        if (isset($_GET['conv'])) {
                            $bdd = bdd();
                            $conversation_id = $bdd->query('SELECT id FROM conversation WHERE nom = \'' . $_GET['conv'] . '\'');
                            $_SESSION['id_conv'] = $conversation_id->fetch()['id'];
                        }
                        if (isset($_SESSION['id_conv'])) {
                            $messages = $bdd->query('SELECT * FROM messages WHERE id_conv= \'' . $_SESSION['id_conv'] . '\'  ORDER BY id ASC');
                            while ($message = $messages->fetch()) {
                                echo "<strong>" . $message['utilisateur'] . " : </strong>" . $message['contenu'] . "</br>";
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
                                  <textarea class='connexion' name='message' placeholder=' Message...' required></textarea></br>
                                  <input class = 'bouton' type='submit' value='Valider' /> </br>
                              </p>
                        </form>";
       				        if(isset($_SESSION['Role'])){
       				            if($_SESSION['Role'] == 'Admin'){
       				                echo "<a href='index.php?action=forum&conv=caca'><br>Supprimer</a>";;
       				            }
       				        }
       				    }
       				    if (isset($_GET['conv']) and $_GET['conv'] == 'add') {
       				        echo "
                        <form action='index.php?action=forum' method='post'>
                              <p><br>
                                  <input class='connexion' type='text' name='nomNouvelConv' placeholder=' Nom nouveau sujet..' required/> </br>
                                  <input class='bouton' type='submit' value='Valider' /> </br>
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