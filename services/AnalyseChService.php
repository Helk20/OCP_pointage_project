<?php


include_once 'beans/AnalyseCh.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class AnalyseChService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO analysech VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getdate(),$o->getch(),$o->getlaboPh(),$o->getlaboCd(),$o->getlaboTac(),$o->getlaboFe(),$o->getlaboTh(),$o->getlaboO2(),$o->getlaboP2O5(),$o->getlaboN2H4(),$o->getlaboCi(),$o->getcentPhP1(),$o->getcentPhP2(),$o->getcentPhP3(),$o->getcentCd1(),$o->getcentCd2(),$o->getcentCd3(),$o->getcentInjectP1(),$o->getcentInjectP2(),$o->getcentInjectP3() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM analysech WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from analysech";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from analysech where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new AnalyseCh($res->id,$res->date, $res->ch,$res->laboPh, $res->laboCd,$res->laboTac, $res->laboFe,$res->laboTh, $res->laboO2,$res->laboP2O5, $res->laboN2H4,$res->laboCi, $res->centPhP1,$res->centPhP2, $res->centPhP3,$res->centCd1, $res->centCd2,$res->centCd3, $res->centInjectP1,$res->centInjectP2, $res->centInjectP3);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from analysech where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE analysech SET centInjectP3 = ?,centInjectP2=?,centInjectP1 = ?,centCd3=?,centCd2 = ?,centCd1=?,centPhP3 = ?,centPhP2=?,centPhP1 = ?,laboCi=?,laboN2H4 = ?,laboP2O5=?,laboO2 = ?,laboTh=?,laboFe = ?,laboTac=?,laboCd = ?,laboPh=?,ch = ?,date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getcentInjectP3(),$o->getcentInjectP2(),$o->getcentInjectP1(),$o->getcentCd3(),$o->getcentCd2(),$o->getcentCd1(),$o->getcentPhP3(),$o->getcentPhP2(),$o->getcentPhP1(),$o->getlaboCi(),$o->getlaboN2H4(),$o->getlaboP2O5(),$o->getlaboO2(),$o->getlaboTh(),$o->getlaboFe(),$o->getlaboTac(),$o->getlaboCd(),$o->getlaboPh(),$o->getch(),$o->getdate(), $o->getId())) or die('Error');       
    }

}
