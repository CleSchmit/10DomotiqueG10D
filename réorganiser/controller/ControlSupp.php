<?php
include_once 'model/function.php';
include_once 'model/supp.php';
$bdd = bdd();

$supp = new supp();
$supp->suppression();
