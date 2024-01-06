<?php


include_once 'beans/AnalyseChimique.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class AnalyseChimiqueService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO analysechimique VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getOperateur(),$o->getChefEquipe(),$o->getHeure(),$o->getL3(),$o->getL4(),$o->getL5(),$o->getL6(),$o->getL7(),$o->getL8(),$o->getl9(),$o->getL10(),$o->getL11(),$o->getL12(),$o->getL13(),$o->getL14(),$o->getL15() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM analysechimique WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from analysechimique";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from analysechimique where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new analysechimique($res->id,$res->date, $res->operateur,$res->chefEquipe, $res->heure,$res->l3, $res->l4,$res->l5, $res->l6,$res->l7, $res->l8,$res->l9, $res->l10,$res->l11, $res->l12,$res->l13, $res->l14,$res->l15);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from analysechimique where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE analysechimique SET l15=?, l14= ?, l13=?, l12= ?, l11=?, l10 = ?, l9=?, l8 = ?, l7=?, l6 = ?, l5=?, l4 = ?, l3=?, heure = ?, chefEquipe=?, operateur = ?, date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getL15(),$o->getL14(),$o->getL13(),$o->getL12(),$o->getL11(),$o->getL10(),$o->getL9(),$o->getL8(),$o->getL7(),$o->getL6(),$o->getL5(),$o->getL4(),$o->getL3(),$o->getHeure(),$o->getChefEquipe(),$o->getOperateur(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
