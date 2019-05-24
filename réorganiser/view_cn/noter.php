<?php ob_start();

$body ="    <script type=\"text/javascript\" src=\"view/notation/etoile.js\"></script>

    <script type='text/javascript'>
        function js(){
            var x = document.forms['formulaire']['note'].value;
            if(x==''){
                alert('请评价');
                return false;
            }
        }
    </script>
 <br><br>
<div id='Cforum'>
                <h3><br>传感器的评价 ".$_GET['nom']."<br><br></h3><br>选择要评价的星数 :<br> 
                <div id='A1'><script type='text/javascript'>CreateListeEtoile('A1',5);</script>
                </div>
            
        <form class='formulaire' onsubmit='return js()' name='formulaire' method='POST' action='index_cn.php?action=calculnote&nom=".$_GET['nom']."'>
            <br>

            <input id='nom' type='hidden' value=".$_GET['nom'].">
            <input id='note' type='hidden' name ='note'       class='note' min='0' max='5'>
            <br>
            <label>评价: </label>
            <div class='scroll'>
            <textarea id='commentaire'  name='commentaire' class='commentaire'></textarea><br><br>

            <input type='submit' name='valider' class='valider' value='生效'>
        </form><br><br><br></div>";


require("view_cn/template/template.php");
