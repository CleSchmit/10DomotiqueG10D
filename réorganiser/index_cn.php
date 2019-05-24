<?php


require "controller/controller2.php";

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);
    seeView($action);


} else {
    seeView("Accueil");
}
