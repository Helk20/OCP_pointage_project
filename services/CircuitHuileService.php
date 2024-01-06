<?php

include_once 'beans/CircuitHuile.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class CircuitHuileService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO circuithuile VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getHeure(),$o->getOperateur(),$o->getChefEquipe(), $o->getBac(), $o->getBacN(), $o->getEtatGta1(), $o->getEtatGta2(), $o->getEtatGta3(), $o->getNbrFiltre() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM circuithuile WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from circuithuile";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from circuithuile where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new CircuitHuile($res->id, $res->date, $res->poste, $res->heure , $res->operateur, $res->chefEquipe, $res->bac, $res->bacN, $res->etatGta1, $res->etatGta2 , $res->etatGta3, $res->nbrFiltre);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from circuithuile where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE circuithuile SET nbrFiltre=? ,etatGta3=? ,etatGta2=? ,etatGta1=? ,bacN = ?, bac = ?, chefEquipe = ?, operateur = ?, heure = ?, poste = ?, date = ? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNbrFiltre(),$o->getEtatGta3(),$o->getEtatGta2(),$o->getEtatGta1() , $o->getBacN(),$o->getBac(),$o->getChefEquipe(),$o->getOperateur(),$o->getHeure(),$o->getPoste(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
