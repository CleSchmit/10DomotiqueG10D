<?php ob_start();

$body="<div class='main'>
        <br>
        <div id=\"containerGalerie\">
        <input type=\"radio\" name=\"images\" id=\"i1\" checked>
        <input type=\"radio\" name=\"images\" id=\"i2\">
        <input type=\"radio\" name=\"images\" id=\"i3\">
        <div class=\"image\" id=\"one\">
            <img src=\"view/images/image1.jpg\">
            <label for=\"i3\" class=\"precedent\">&lt;</label>
            <label for=\"i2\" class=\"suivant\">&gt;</label>
        </div>
        <div class=\"image\" id=\"two\">
            <img src=\"view/images/image2.jpg\">
            <label for=\"i1\" class=\"precedent\">&lt;</label>
            <label for=\"i3\" class=\"suivant\">&gt;</label>
        </div>
        <div class=\"image\" id=\"three\">
            <img src=\"view/images/image3.jpg\">
            <label for=\"i2\" class=\"precedent\">&lt;</label>
            <label for=\"i1\" class=\"suivant\">&gt;</label>
        </div>
            
</div>
<br>
</div>
        ";

require("template/template.php"); ?>