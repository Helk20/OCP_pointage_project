<?php


include_once 'beans/Ip3.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class Ip3Service implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO ip3 VALUES (NULL,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getOperateur	(),$o->getChef(),$o->getHr(),$o->getAmp(),$o->getPAspi(),$o->getPFil(),$o->getNivH() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM ip3 WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from ip3";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from ip3 where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Ip3($res->id,$res->date, $res->operateur,$res->chef, $res->hr,$res->amp, $res->pAspi,$res->pFil, $res->nivH);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from ip3 where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE ip3 SET  nivH = ?, pFil=?, pAspi = ?, amp=?, hr = ?,chef=?,operateur = ?,date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNivH(),$o->getPFil(),$o->getPAspi(),$o->getAmp(),$o->getHr(),$o->getChef(),$o->getOperateur(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
 