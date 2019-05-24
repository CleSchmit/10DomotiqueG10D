<?php
session_start();
include_once 'model/function.php';
include_once 'controller/ControlMessage.php';
include_once 'controller/ControlConversation.php';
$_SESSION['convName']="选择一个主题";
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
		<div class="corps">
			<div id="forum">
				<div class="ListeForum">
                    <h3 style="background-color: darkorange; color: black;    border-bottom: solid black;"><br>&emsp;主题列表<br><br></h3>
                    	<?php         
                            $bdd = bdd();
                            $conversation = $bdd->query('SELECT nom FROM conversation');
                            if (isset($_SESSION['Nom'])){
                                echo "<a href='index_cn.php?action=forum&conv=add'><div class='Add'><br><p>&emsp;</p><img class='imgAjoutF' src='view/images/Ajout.png'>&ensp;添加一个问题&emsp;<br><br></div></a>";
                            }
                            while ($donnees = $conversation->fetch()) {
                                echo "<a href='index_cn.php?action=forum&conv=" . $donnees['nom'] . "'><div class='LienForum'>" . $donnees['nom'] . "</div></a>";
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
                            $delete = "<a href='index_cn.php?action=forum&conv=sup' class='delete' id='DelP'>&times;&emsp;</a>";
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
                                echo "<div class='user'>Ecrit par <strong>" . $message['utilisateur'];
                                if(isset($_SESSION['Role'])){
                                    if($_SESSION['Role'] == 'Admin' OR $message['utilisateur'] == $_SESSION['Nom']. " ".$_SESSION['Prenom']){
                                        echo "<a href='index_cn.php?action=forum&id=".$message['id']."' class='delete' style='font-size: 120%;'>&times;&emsp;</a>";
                                    }
                                }
                                
                                echo " </strong></br></strong>".$message['date']."</div><div class='message'><br>" . $message['contenu'] . "</br></br></div><br>";
                            }
                            $conversation->closeCursor();
                        }
                    ?>
        		</p>
   				<?php
       				if (isset($_SESSION['Nom'])){
       				    if (isset($_SESSION['id_conv'])) {
       				        echo "
                        <form action='index_cn.php?action=forum' method='post'>
                              <p><br>
                                  <textarea class='connexion' style='width: 100%;' name='message' placeholder='  信息...' required></textarea></br>
                                  <br><input class = 'boutonbis' type='submit' value='生效' /> </br>
                              </p>
                        </form>";
       				    }
       				    if (isset($_GET['conv']) and $_GET['conv'] == 'add') {
       				        echo "
                        <form action='index_cn.php?action=forum' method='post'>
                              <p><br>
                                  <input class='connexion' style='width: 100%;' type='text' name='nomNouvelConv' placeholder=' 新主题名字...' required/> </br>
                                  <br><input class='boutonbis' type='submit' value='生效' /> </br>
                              </p>
                        </form>";
       				    }
       				}
                    
                ?>
    		</div>
		</div>
		</div>
	<footer>
    	<?php include "template/Footer.php" ?>
	</footer>
</body>
<html>
