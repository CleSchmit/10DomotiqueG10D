<?php session_start();

include_once 'controller/EnvoieFormulaire.php';

ob_start();
if(isset($_SESSION['Email'])){
    $body="
	<div class='main'>
		<div id='Cforum'>
			<h1>调查表</h1>
			<form method='post' action='index_cn.php?action=Contacter'>
					<p><input class='connexion' type='text' name='objet' placeholder=' 主题...' required /></p>
					<p><textarea class='connexion' name='message' placeholder=' 消息...' required></textarea></p>
					<input class='bouton' type='submit' value='发送' />
			 </form>
		</div>
    </div>";
}else{
    $body="
	<div class='main'>
		<div id='Cforum'>
			<h1>调查表</h1>
			<form method='post' action='index_cn.php?action=Contacter'>
					<p><input class='connexion' type='text' name='objet' placeholder=' 主题...' required /></p>
					<p><input class='connexion' type='email' name='mail' placeholder=' 邮箱' required /></p>
					<p><textarea class='connexion' name='message' placeholder=' x消息...' required></textarea></p>
					<input class='bouton' type='submit' value='发送' />
			 </form>
		</div>
    </div>";
    
}


require("template/template.php"); ?>
