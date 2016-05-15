<?php
$tab = ['index.php', 'competences.php', 'parcours.php', 'realisations.php'];
$nom = ['ACCUEIL', 'COMP&Eacute;TENCES', 'PARCOURS', 'R&Eacute;ALISATIONS'];
?>
<div class="row">
    <div class="col-sm-12 barre">
        <div class="row">
            <div class="col-sm-4">
                <h1>
                    <a id="linkedin-link"  target="_blank"
                       href="https://www.linkedin.com/pub/s%C3%A9bastien-taton/104/320/b0a?domainCountryName=&csrfToken=ajax%3A0761093031425349163">
                        <div class="name"><strong>S&Eacute;BASTIEN</strong>
                        <strong>TATON</strong>
                        </div>
                        <img id="linkedin-icon" src="images/linkedin.png">
                    </a>
                </h1>
            </div>
            <div class="col-sm-8">
                <nav>
                    <ul>
                        <?php
                        for ($i = 0; $i < 4; $i++) {

                            $html = "<li><a href='" . $tab[$i] . "'";
                            if ($_SESSION['page'] == $i) {
                                $html = $html . " class='selectpage'";
                            }
                            $html = $html . ">" . $nom[$i] . "</a></li>";
                            echo $html;
                        }
                        ?>
                        <!--                    <li><a href="index.php">HOME</a></li>
                                            <li><a href="competences.php">COMPETENCES</a></li>
                                            <li><a href="parcours.php">PARCOURS</a></li>
                                            <li><a href="realisations.php">REALISATIONS</a></li>-->
                    </ul>
                </nav>  
            </div>                   
        </div>                
    </div>
</div>