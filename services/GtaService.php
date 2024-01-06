<?php


include_once 'beans/gta.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class GtaService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO gta VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getHeure(),$o->getOperateur(),$o->getChefEquipe(),$o->getTEMer(),$o->getTSMerG(),$o->getTSMerD(),$o->getOuvMer1(),$o->getOuvMer2(),$o->getFiltreSce(),$o->getPHuile(),$o->getGranitH(),$o->getGranitB(),$o->getTFond(),$o->getNivHuile(),$o->getPrVide20AC01(),$o->getPrVide20KC01(),$o->getAmpVide20AC01(),$o->getAmpVide20KC01(),$o->getPrAspi20AP01(),$o->getPrAspi20KP01(),$o->getPrRefoulement20AP01(),$o->getPrRefoulement20KP01() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM gta WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from gta";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from gta where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Gta($res->id, $res->date, $res->poste, $res->heure , $res->operateur, $res->chefEquipe, $res->tEMer, $res->tSMerG, $res->tSMerD , $res->ouvMer1, $res->ouvMer2, $res->filtreSce, $res->pHuile, $res->granitH, $res->granitB , $res->tFond, $res->nivHuile, $res->prVide20AC01, $res->prVide20KC01, $res->ampVide20AC01, $res->ampVide20KC01 , $res->prAspi20AP01, $res->prAspi20KP01, $res->prRefoulement20AP01, $res->prRefoulement20KP01);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from gta where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE gta SET prRefoulement20KP01= ?,prRefoulement20AP01= ?,prAspi20KP01 = ?,prAspi20AP01= ?,ampVide20KC01= ?,ampVide20AC01= ?,prVide20KC01= ?,prVide20AC01 = ?,nivHuile= ?,tFond= ?,granitB= ?,granitH= ?,pHuile= ?,filtreSce= ?,ouvMer2= ?,ouvMer1= ?,tSMerD= ?,tSMerG= ?,tEMer= ?, chefEquipe = ?, operateur = ?, heure = ?, poste = ?, date = ? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getPrRefoulement20KP01(),$o->getPrRefoulement20AP01() ,$o->getPrAspi20KP01(),$o->getPrAspi20AP01(),$o->getAmpVide20KC01(),$o->getAmpVide20AC01(),$o->getPrVide20KC01(),$o->getPrVide20AC01(),$o->getNivHuile(),$o->getTFond(),$o->getGranitB(),$o->getGranitH(),$o->getPHuile(),$o->getFiltreSce(),$o->getOuvMer2(),$o->getOuvMer1(),$o->getTSMerD(),$o->getTSMerG(),$o->getTEMer(),$o->getChefEquipe(),$o->getOperateur(),$o->getHeure(),$o->getPoste(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
