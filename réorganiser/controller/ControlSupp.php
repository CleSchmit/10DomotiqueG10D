<?php
include_once 'model/function.php';
include_once 'model/supp.php';

$bdd = bdd();
$erreur = NULL;

$supp = new supp($Email);
$supp->suppression();

header('Location: index.php?action=Connexion');


