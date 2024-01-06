<?php


include_once 'beans/RapportSDP.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class RapportSDPService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO rapportsdp VALUES (NULL,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getOperateur(),$o->getActivites() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM rapportsdp WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from rapportsdp";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from rapportsdp where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new RapportSDP($res->id,$res->date, $res->poste, $res->operateur, $res->activites);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from rapportsdp where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE rapportsdp SET activites = ?, operateur=?, poste = ?, date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getActivites(),$o->getOperateur(),$o->getPoste(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
