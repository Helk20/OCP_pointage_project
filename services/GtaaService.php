<?php


include_once 'beans/gtaa.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class GtaaService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO gtaa VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getHeure(),$o->getOperateur(),$o->getChefEquipe(),$o->getTEMer(),$o->getTSMerG(),$o->getTSMerD(),$o->getOuvMer1(),$o->getOuvMer2(),$o->getFiltreSce(),$o->getPHuile(),$o->getGranitH(),$o->getGranitB(),$o->getTFond(),$o->getNivHuile(),$o->getPrVide20BC01(),$o->getPrVide20LC01(),$o->getAmpVide20BC01(),$o->getAmpVide20LC01(),$o->getPrAspi20LP01(),$o->getPrAspi20BP01(),$o->getPrRefoulement20LP01(),$o->getPrRefoulement20BP01() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM gtaa WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from gtaa";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from gtaa where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Gtaa($res->id, $res->date, $res->poste, $res->heure , $res->operateur, $res->chefEquipe, $res->tEMer, $res->tSMerG, $res->tSMerD , $res->ouvMer1, $res->ouvMer2, $res->filtreSce, $res->pHuile, $res->granitH, $res->granitB , $res->tFond, $res->nivHuile, $res->prVide20BC01, $res->prVide20LC01, $res->ampVide20BC01, $res->ampVide20LC01 , $res->prAspi20LP01, $res->prAspi20BP01, $res->prRefoulement20LP01, $res->prRefoulement20BP01);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from gtaa where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE gtaa SET prRefoulement20MP01 = ?,prRefoulement20CP01=?,prAspi20MP01 = ?,prAspi20CP01=?,ampVide20MC01 = ?,ampVide20CC01=?,prVide20MC01 = ?,prVide20CC01=?,nivHuile = ?,tFond=?,granitB = ?,granitH=?,pHuile = ?,filtreSce=?,ouvMer2 = ?,ouvMer1=?,tSMerD = ?,tSMerG=?,tEMer = ?,chefEquipe=?,operateur = ?,heure=?,poste = ?,	date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getPrRefoulement20MP01(),$o->getPrRefoulement20CP01(), $o->getPrAspi20MP01(),$o->getPrAspi20CP01(),$o->getAmpVide20MC01(), $o->getAmpVide20CC01(),$o->getPrVide20MC01(),$o->getPrVide20CC01(), $o->getNivHuile(),$o->getTFond(),$o->getGranitB(), $o->getGranitH(),$o->getPHuile(),$o->getFiltreSce(), $o->getOuvMer2(),$o->getOuvMer1(),$o->getTSMerD(), $o->getTSMerG(),$o->getTEMer(),$o->getChefEquipe(), $o->getOperateur(),$o->getHeure(),$o->getPoste(), $o->getDate(), $o->getId())) or die('Error');       
    }

}
