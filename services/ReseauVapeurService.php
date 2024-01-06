<?php


include_once 'beans/ReseauVapeur.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class ReseauVapeurService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO reseauvapeur VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getHeure(),$o->getOperateur(),$o->getChefEquipe(),$o->getPrHpNord(),$o->getTHpNord(),$o->getPrHpSud(),$o->getTHpSud(),$o->getPrMpNord(),$o->getTMpNord(),$o->getPrMpSud(),$o->getTMpSud() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM reseauvapeur WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from reseauvapeur";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from reseauvapeur where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new ReseauVapeur($res->id, $res->date, $res->poste, $res->heure , $res->operateur, $res->chefEquipe, $res->prHpNord, $res->tHpNord, $res->prHpSud, $res->tHpSud , $res->prMpNord, $res->tMpNord, $res->prMpSud, $res->tMpSud);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from reseauvapeur where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE reseauvapeur SET tMpSud = ?,prMpSud=?,tMpNord=?,prMpNord=?,tHpSud=?,prHpSud=?,tHpNord=?,prHpNord=?,chefEquipe = ?, operateur = ?, heure = ?, poste = ?, date = ? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getTMpSud(),$o->getPrMpSud(),$o->getTMpNord(),$o->getPrMpNord(),$o->getTHpSud(), $o->getPrHpSud(),$o->getTHpNord(), $o->getPrHpNord(),$o->getChefEquipe(),$o->getOperateur(),$o->getHeure(),$o->getPoste(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
