<?php

include_once 'beans/Pointage.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class PointageService Implements IDao {

    //put your code here
    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }


    public function create($o) {
$query = "INSERT INTO pointage VALUES (NULL,?,?,?)";
$req = $this->connexion->getConnexion()->prepare($query);
$req->execute(array($o->getDate(),$o->getEtat(),$o->getEmploye())) or die('Error');

    }

    public function historique($cin, $dated, $datef) {
        $array = array();
        $query = "select * from pointageh where 1=1 ";
        if ($cin != "") {
            $query .= " and cin = ? ";
            array_push($array, $cin);
        }
        if ($dated != "" && $datef != "") {
            $query .= "and date between ? and ? ";
            array_push($array, $dated, $datef);
        }
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute($array);
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function delete($id) {
        $query = "DELETE FROM pointage WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from pointage";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findById($id) {
        $query = "select * from pointage where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        $pointage = new Pointage($res->id, $res->date, $res->etat, $res->employe);
        return $pointage;
    }

    public function findByIdApi($id) {
        $query = "select * from pointage where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE pointage SET employe=? ,etat = ?, date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getEmploye(),$o->getEtat(),$o->getDate(), $o->getId())) or die('Error');       
    
    }
}
