<?php session_start();

ob_start();

include_once 'controller/ControlCapteurAction2.php';

$link = "index_cn.php?action=CapteurAction&Maison=".$_GET['Maison']."&Piece=".$_GET['Piece']."&Capteur=".$_GET['Capteur']."";
$check = '';
if ($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][2] == 1){
    $check='checked';
}

if ($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][3] == 1){
    $action ="
        <form method='post' action=$link>
            <div class='CheckCapteur'>
            你想要激活警铃吗 ?
            <div class=\"slideThree\">  
                      <input type=\"checkbox\"  id=\"slideThree\" name=\"Alarm\" class='Alarm' $check/>
                      <label for=\"slideThree\"></label>
            </div>  
            </div>
            <input class=\"boutonbis\" type=\"submit\" value=\"生效\" />
        </form>      

        <h3>传感器的状态: </h3>
";
}





$body = "<div id=\"Cforum\">
    <h1>传感器 : ".$_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][1]."</h1>
    ".$action."
    <br>
</div>
";

require("template/template.php"); ?>
