<?php


include_once 'beans/Ip8.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class Ip8Service implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO ip8 VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getOperateur	(),$o->getChef(),$o->getHr(),$o->getAmp(),$o->getPAspi(),$o->getPRefou(),$o->getPEqui(),$o->getPFil(),$o->getNivH(),$o->getTpali(),$o->getTSor() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM ip8 WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from ip8";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from ip8 where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Ip8($res->id,$res->date, $res->operateur,$res->chef, $res->hr,$res->amp, $res->pAspi,$res->pRefou, $res->pEqui,$res->pFil, $res->nivH,$res->tpali, $res->tSor);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from ip8 where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE ip8 SET tSor = ?,	tpali=?, nivH = ?, pFil=?, pEqui = ?,pRefou=?, pAspi = ?, amp=?, hr = ?,chef=?,operateur = ?,date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getTSor(),$o->getTpali(),$o->getNivH(),$o->getPFil(),$o->getPEqui(),$o->getPRefou(),$o->getPAspi(),$o->getAmp(),$o->getHr(),$o->getChef(),$o->getOperateur(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
