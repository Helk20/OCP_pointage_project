<?php


include_once 'beans/Ie1.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class Ie1Service implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO ie1 VALUES (NULL,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getOperateur	(),$o->getChef(),$o->getHr(),$o->getEtVap(),$o->getStCond(),$o->getStMer() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM ie1 WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from ie1";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from ie1 where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Ie1($res->id,$res->date, $res->operateur,$res->chef, $res->hr,$res->etVap, $res->stCond,$res->stMer);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from ie1 where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE ie1 SET stMer=?, stCond = ?, etVap=?, hr = ?,chef=?,operateur = ?,date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getStMer(),$o->getStCond(),$o->getEtVap(),$o->getHr(),$o->getChef(),$o->getOperateur(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
 