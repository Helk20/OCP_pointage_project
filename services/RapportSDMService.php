<?php

include_once 'beans/RapportSDM.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class RapportSDMService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO rapportsdm VALUES (NULL,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getOperateur(),$o->getEquipement(),$o->getActivite() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM rapportsdm WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from rapportsdm";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from rapportsdm where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new RapportSDM($res->id, $res->date, $res->poste, $res->operateur, $res->equipement, $res->activite);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from rapportsdm where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE rapportsdm SET activite = ?, equipement = ?, operateur = ?, poste = ?, date = ? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getActivite(),$o->getEquipement(),$o->getOperateur(),$o->getPoste(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
