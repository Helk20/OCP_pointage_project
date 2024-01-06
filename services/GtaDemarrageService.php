<?php


include_once 'beans/GtaDemarrage.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class GtaDemarrageService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO gtademarrage VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getHeure(),$o->getAgent(),$o->getAdmVanne(),$o->getAdmT(), $o->getAdmPr(),$o->getSTVanne(),$o->getSTT(),$o->getSTPr(),$o->getVitesse(),$o->getTCorpsSup(),$o->getTCorpsInf(),$o->getTfondBp(),$o->getDilDiff(),$o->getOuvSppeHpBp(),$o->getVideBar(),$o->getEauMer() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM gtademarrage WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from gtademarrage";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from gtademarrage where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new GtaDemarrage($res->id, $res->date, $res->poste, $res->heure, $res->agent, $res->admVanne, $res->admT, $res->admPr, $res->STVanne, $res->STT, $res->STPr, $res->vitesse, $res->TCorpsSup, $res->TCorpsInf, $res->TfondBp, $res->DilDiff, $res->OuvSppeHpBp, $res->videBar, $res->eauMer);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from gtademarrage where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE gtademarrage SET eauMer = ?, videBar =? , OuvSppeHpBp = ? , DilDiff=?, TfondBp = ?, TCorpsInf=?,TCorpsSup = ?,vitesse=?, STPr = ?, STT=?, STVanne = ?, admPr=?, admT = ?, admVanne=?, agent = ?, heure=?, poste = ?, date	=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getEauMer(),$o->getVideBar(), $o->getOuvSppeHpBp(),$o->getDilDiff(),$o->getTfondBp(), $o->getTCorpsInf(),$o->getTCorpsSup(),$o->getVitesse(), $o->getSTPr(),$o->getSTT(),$o->getSTVanne(), $o->getAdmPr(),$o->getAdmT(),$o->getAdmVanne(), $o->getAgent(),$o->getHeure(),$o->getPoste(), $o->getDate(), $o->getId())) or die('Error');       
    }

}
