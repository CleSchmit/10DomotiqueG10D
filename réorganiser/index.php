<?php


require "controller/controller.php";

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);
    seeView($action);


} else {
    seeView("Accueil");
}