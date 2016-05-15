<?php
session_start();
$_SESSION['page']=3;
require_once 'Gestionnaire.php';
$gestionnaire=new Gestionnaire();
?>
<html>
    <head>
        <?php
            require "composants/head.html";
        ?>
        <link rel="stylesheet" type="text/css" href="style/realisations.css">
    </head>
    <body>
        <?php
            require"composants/barre.php";
            $req="select * from realisation order by id desc;";
            $exec=$gestionnaire->requete($req);
        ?>
        <section>
        <?php
            echo"<table id='realisation'><caption>PROJETS</caption>";
            while ($ligne=$exec->fetch()){
                echo"<tr><td class='logo'><img src='images/rea.png'></td><td class='real'><div><p>".$ligne->libelle."</p>";
                if($ligne->rapport!=null){
                    echo"<p class='rapport'><a href='images/".$ligne->rapport."'target='_blank'>RAPPORT</a></p>";
                }
                echo "</div><p class='wait2'>".$ligne->description."</p></td></tr>";
            }
            echo"</table>";
        ?>
        </section>
        <?php
            require 'composants/footer.php';
        ?>
    </body>
</html>