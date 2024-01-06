<?php


include_once 'beans/StockMA.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class StockMAService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO stockma VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDate(),$o->getPoste(),$o->getOperateur(),$o->getQuniteCortrol(),$o->getQuniteBioxin(),$o->getQuniteNa3PO4(),$o->getQuniteNH3(),$o->getStockCortrol(),$o->getStockEliminox(),$o->getStockBioxin(),$o->getStockNH3(),$o->getStockNBR(),$o->getStockNa3PO4(),$o->getCombustileGO(),$o->getCombustileFO(),$o->getInjectionChaud1(),$o->getInjectionChaud2() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM stockma WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from stockma";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from stockma where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new StockMA($res->id,$res->date, $res->poste,$res->operateur, $res->quniteCortrol ,$res->quniteBioxin, $res->quniteNa3PO4, $res->quniteNH3, $res->stockCortrol, $res->stockEliminox, $res->stockBioxin, $res->stockNH3, $res->stockNBR, $res->stockNa3PO4, $res->combustileGO, $res->combustileGO, $res->injectionChaud1, $res->injectionChaud2);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from stockma where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE stockma SET injectionChaud2 = ?, injectionChaud1=?, combustileFO = ?, combustileGO=?, stockNa3PO4 = ?, stockNBR=?, stockNH3 = ?, stockBioxin=?, stockEliminox = ?, stockCortrol=?, quniteNH3 = ?, quniteNa3PO4=?, quniteBioxin = ?, quniteCortrol=?, operateur = ?,poste=? , date=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getInjectionChaud2(),$o->getInjectionChaud1(),$o->getCombustileFO(),$o->getCombustileGO(),$o->getStockNa3PO4(),$o->getStockNBR(),$o->getStockNH3(),$o->getStockBioxin(),$o->getStockEliminox(),$o->getStockCortrol(),$o->getQuniteNH3(),$o->getQuniteNa3PO4(),$o->getQuniteBioxin(),$o->getQuniteCortrol(),$o->getOperateur(),$o->getPoste(),$o->getDate(), $o->getId())) or die('Error');       
    }

}
