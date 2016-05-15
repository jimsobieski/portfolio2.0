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
                    $cmp = 0;
                    while ($ligne = $exec->fetch()) {
                        if ($cmp == 2) {
                            echo"</div>";
                            $cmp = 0;
                        }
                        if ($cmp == 0) {
                            echo "<div class='row'>";
                        }
                        ?>
                        <div class="competences-card col-sm-offset-1 col-sm-5">
                            <h2><?php echo $ligne->nom ?></h2>
                            <img src="images/<?php echo $ligne->fichier ?>">
                            <p><?php echo $ligne->description ?></p>
                        </div>
                        <?php
                        $cmp++;
                    }
                    ?>
                </div>
                <div class="col-sm-offset-1 col-sm-5">
                    <?php
                    $req = "select * from competence where type='log';";
                    $exec = $gestionnaire->requete($req);
                    ?>
                </div>
            </div>        
        </section>
        <?php
        require 'composants/footer.php';
        ?>
    </body>
</html>