<?php
class Gestionnaire {
    private $o_accessBD;
    private $menu;
    
       public function Gestionnaire(){
        //local
        $dsn="mysql:host=localhost;dbname=portfolio";
        $user='root';
        $mdp='';
        //online
//        $dsn="mysql:host=sql2.olympe.in;dbname=18x16tka";
//        $user='18x16tka';
//        $mdp='ftp@portfolio2015';
        try {	
            $this->o_accessBD = new PDO($dsn,$user,$mdp);
        }
        catch(Exception $e){
            echo 'Echec de la connexion à la base de donnees <br />';
            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
            die();
        }
    }
    
    public function requete($req){
        $exec=$this->o_accessBD->query($req);
        $exec->setFetchMode(PDO::FETCH_OBJ);
        return $exec;
    }
    
}
?>