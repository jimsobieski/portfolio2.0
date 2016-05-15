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
    </head>
    <body>
        <?php
        require "composants/barre.php";
        ?>
        <section>
            <center>
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-index profil">
                                <img src="images/img-profil2.jpg">
                                <div class="detail-profil">
                                    <h3>S.T</h3>
                                    <table>
                                        <tr><td class="text-left">D&eacute;veloppeur web</td></tr>
                                        <tr><td class="text-left">Applications</td></tr>
                                        <tr><td class="text-left">Bases de donn&eacute;es</td></tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="card-index">
                                <a href="parcours.php"><h2>Mon Parcours</h2>
                                    <img class="design-card-img" src="images/parcours.png"></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-index">
                                <a href="realisations.php"><h2>Mes R&eacute;alisations</h2>
                                    <img class="design-card-img" src="images/laptop129.png"></a>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-index">
                                <a href="competences.php"><h2>Mes Comp&eacute;tences</h2>
                                    <img class="design-card-img" src="images/competences.png"></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-index infos-comp">
                                <a href="contact.php"><h2>Contactez-moi</h2>
                                    <img class="design-card-img" src="images/email5.png"></a>                                   
                            </div>
                        </div>                            
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card-index infos-comp">
                                <h2>Infos compl&eacute;mentaires</h2>
                                <table>
                                    <tr>
                                        <td class="text-left">Age</td>
                                        <td class="text-right">21 ans</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Mail</td>
                                        <td class="text-right">seb.taton@hotmail.fr</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Pays</td>
                                        <td class="text-right">France</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-index">
                                <a target="_blank"
                                   href="https://www.linkedin.com/pub/s%C3%A9bastien-taton/104/320/b0a?domainCountryName=&csrfToken=ajax%3A0761093031425349163"><h2>Mon Linkedin</h2>
                                    <img class="design-card-img" src="images/biglinkedin.png"></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12">
                        <?php
                        require 'composants/footer.php';
                        ?>
                    </div>
                </div>

            </center>

        </section>

    </body>
</html>