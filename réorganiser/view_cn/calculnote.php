<?php
require 'model/function.php';

$bdd = bdd();
$note = $_POST['note'];
$commentaire = $_POST['commentaire'];
$capteur = $_GET['nom'];


//insérer note et commentaire dans bdd
$noter = $bdd -> prepare('INSERT INTO notation(Nb_Etoile,Commentaire,Nom) VALUES (:nb,:com,:nom) ');
$noter -> execute(array('nb' => $note,
						'com' => $commentaire,
						'nom' => $capteur));


// nombre de note
$requeteCompter = $bdd -> prepare('SELECT COUNT(*) AS nb_note FROM notation WHERE Nom=:nom ');
$requeteCompter ->execute(array('nom' => $capteur));
$temp = $requeteCompter -> fetch();
$nombre = $temp['nb_note'];

//moyenne, note
$moyenne = 0;
$requeteMoyenne = $bdd -> prepare('SELECT * FROM notation WHERE Nom=:nom ');
$requeteMoyenne -> execute(array('nom' =>$capteur));
while($donnee = $requeteMoyenne->fetch()){
	$moyenne = $moyenne + $donnee['Nb_Etoile'];
}
$moyenne = $moyenne/$nombre;

header("Location: index_cn.php?action=NosProduits")

?>


