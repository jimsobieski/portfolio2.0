<?php
session_start();
$_SESSION['page'] = 1;
require_once 'Gestionnaire.php';
$gestionnaire = new Gestionnaire();
?>
<html>
    <head>
        <?php
        require "composants/head.html";
        ?>
        <link rel="stylesheet" href="style/competences.css" type="text/css">
    </head>
    <body>

        <?php
        require"composants/barre.php";
        $req = "select * from competence where type='lan';";
        $exec = $gestionnaire->requete($req);
        ?>
        <section>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-5">
                    <?php
                    echo"<table class='competences'><caption>LANGAGES DE PROGRAMMATION</caption>";
                    while ($ligne = $exec->fetch()) {
                        echo"<tr><td class='logo'><img src=images/" . $ligne->fichier
                                . "></td><td class='language'><p class='nomlanguage'>" . $ligne->nom 
                                . "</p><p class='wait'>" . $ligne->description . "</p></td></tr>"; //79varchar
                    }
                    echo"</table>";
                    ?>
                </div>
                <div class="col-sm-offset-1 col-sm-5">
                    <?php
                    $req = "select * from competence where type='log';";
                    $exec = $gestionnaire->requete($req);
                    echo"<table class='competences'><caption>LOGICIELS</caption>";
                    while ($ligne = $exec->fetch()) {
                        echo"<tr><td class='logo'><img src=images/" . $ligne->fichier 
                                . "></td><td class='language'><p class='nomlanguage'>" . $ligne->nom 
                                . "</p><p class='wait'>" . $ligne->description . "</p></td></tr>";
                    }
                    echo"</table>";
                    ?>
                </div>
            </div>        
        </section>
        <?php
            require 'composants/footer.php';
        ?>
    </body>
</html>