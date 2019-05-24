<?php session_start();

session_unset();
session_destroy();

header('Location: index_cn.php?action=Connexion');
