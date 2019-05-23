<?php

include_once 'controller/EnvoieFormulaire2.php';

ob_start();

$body="
	<div class='main'>
		<div id='Cforum'>
			<h1>Formulaire</h1>
			<form method='post' action='index_cn.php?action=Contacter'>
					<p><input class='connexion' type='text' name='objet' placeholder=' 项目...' required /></p>
					<p><input class='connexion' type='email' name='mail' placeholder=' 邮箱' required /></p>
					<p><textarea class='connexion' name='message' placeholder=' 消息...' required></textarea></p>
					<input class='bouton' type='submit' value='发送' />
			 </form>
		</div>
    </div>";


require("template/template.php"); ?>
