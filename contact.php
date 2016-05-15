<?php
session_start();
$_SESSION['page'] = 0;
require_once 'Gestionnaire.php';
//$gestionnaire=new Gestionnaire();
//phpinfo();
?>
<html>
    <head>
        <?php
        require "composants/head.html";
        ?>
        <link rel="stylesheet" type="text/css" href="style/contact.css">
    </head>
    <body>
        <?php
        require "composants/barre.php";
        ?>
        <section>
            <div class="col-sm-offset-3 col-sm-6">
                <div id="form-card">
                    <form method="POST" action="contact.php">
                        <h1>Formulaire de Contact</h1>
                        <div class="ligne"></div>
                        <h2>Contenu</h2>
                        <textarea id="form-text"></textarea>
                        <h2>E-mail</h2>
                        <input type="text">
                        <hr>
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
