<?php


include_once 'beans/Ie7.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class Ie7Service implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO ie7 VALUES (NULL,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getOperateur	(),$o->getChef(),$o->getHr(),$o->getEtCond(),$o->getStCond(),$o->getEtMer(),$o->getStMer())) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM ie7 WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from ie7";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from ie7 where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Ie7($res->id,$res->date, $res->operateur,$res->chef, $res->hr,$res->etCond, $res->stCond,$res->etMer, $res->stMer);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from ie7 where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE ie7 SET stMer = ?,etMer=?, stCond = ?, etCond=?, hr = ?,chef=?,operateur = ?,date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getStMer(),$o->getEtMer(),$o->getStCond(),$o->getEtCond(),$o->getHr(),$o->getChef(),$o->getOperateur(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
 