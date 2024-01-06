<?php


include_once 'beans/gtaaa.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class GtaaaService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO gtaaa VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getHeure(),$o->getOperateur(),$o->getChefEquipe(),$o->getTEMer(),$o->getTSMerG(),$o->getTSMerD(),$o->getOuvMer1(),$o->getOuvMer2(),$o->getFiltreSce(),$o->getPHuile(),$o->getGranitH(),$o->getGranitB(),$o->getTFond(),$o->getNivHuile(),$o->getPrVide20CC01(),$o->getPrVide20MC01(),$o->getAmpVide20CC01(),$o->getAmpVide20MC01(),$o->getPrAspi20CP01(),$o->getPrAspi20MP01(),$o->getPrRefoulement20CP01(),$o->getPrRefoulement20MP01() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM gtaaa WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from gtaaa";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from gtaaa where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Gtaaa($res->id, $res->date, $res->poste, $res->heure , $res->operateur, $res->chefEquipe, $res->tEMer, $res->tSMerG, $res->tSMerD , $res->ouvMer1, $res->ouvMer2, $res->filtreSce, $res->pHuile, $res->granitH, $res->granitB , $res->tFond, $res->nivHuile, $res->prVide20CC01, $res->prVide20MC01, $res->ampVide20CC01, $res->ampVide20MC01 , $res->prAspi20CP01, $res->prAspi20MP01, $res->prRefoulement20CP01, $res->prRefoulement20MP01);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from gtaaa where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE gtaaa SET prRefoulement20MP01= ?, prRefoulement20CP01= ?, prAspi20MP01 = ?, prAspi20CP01= ?, ampVide20MC01= ?, ampVide20CC01= ?, prVide20MC01= ?, prVide20CC01 = ?, nivHuile= ?, tFond= ?, granitB= ?, granitH= ?, pHuile= ?, filtreSce= ?, ouvMer2= ?, ouvMer1= ?, tSMerD= ?, tSMerG= ?, tEMer= ?, chefEquipe = ?, operateur = ?, heure = ?, poste = ?, date = ? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getPrRefoulement20MP01(),$o->getPrRefoulement20CP01() ,$o->getPrAspi20MP01(),$o->getPrAspi20CP01(),$o->getAmpVide20MC01(),$o->getAmpVide20CC01(),$o->getPrVide20MC01(),$o->getPrVide20CC01(),$o->getNivHuile(),$o->getTFond(),$o->getGranitB(),$o->getGranitH(),$o->getPHuile(),$o->getFiltreSce(),$o->getOuvMer2(),$o->getOuvMer1(),$o->getTSMerD(),$o->getTSMerG(),$o->getTEMer(),$o->getChefEquipe(),$o->getOperateur(),$o->getHeure(),$o->getPoste(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
