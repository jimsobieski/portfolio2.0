<?php
session_start();
$_SESSION['page']=2;
require_once 'Gestionnaire.php';
$gestionnaire=new Gestionnaire();
?>
<html>
    <head>
        <?php
            require "composants/head.html";
        ?>
        <link type="text/css" rel="stylesheet" href="style/parcours.css">
    </head>
    <body>
        <?php
            require"composants/barre.php";
            $req="select * from parcours order by id desc;";
            $exec=$gestionnaire->requete($req);
        ?>
        <section>
        <?php
            echo"<table id='parcours'><caption>EXPERIENCES</caption>";
            while ($ligne=$exec->fetch()){
                if($ligne->type=='p'){
                    $logo="pro";                  
                }
                else{
                    $logo="sco";                   
                }
               echo"<tr><td class='date'><center><img src=images/".$logo.".png><p>".$ligne->date."</p></center></td>";
               echo"<td class='lib_parcours'><div><p>".$ligne->libelle."</p>";
               if($ligne->rapport!=null){
                   echo "<p class='rapport'><a href='images/".$ligne->rapport."' target='_blank'>RAPPORT</a></p>";
                   }
               echo"</div></td></tr>";
            }
            echo"</table>";
        ?>
        </section>
        <?php
            require 'composants/footer.php';
        ?>
    </body>
</html>