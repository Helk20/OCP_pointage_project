<?php

class StockMA {
    private $id;
    private $date;
    private $poste;
    private $operateur;
    private $quniteCortrol;
    private $quniteBioxin;
    private $quniteNa3PO4;
    private $quniteNH3;
    private $stockCortrol;
    private $stockEliminox;
    private $stockBioxin;
    private $stockNH3;
    private $stockNBR;
    private $stockNa3PO4;
    private $combustileGO;
    private $combustileFO;
    private $injectionChaud1;
    private $injectionChaud2;
    

    
    function __construct($id, $date, $poste, $operateur, $quniteCortrol, $quniteBioxin, $quniteNa3PO4, $quniteNH3, $stockCortrol, $stockEliminox, $stockBioxin, $stockNH3, $stockNBR, $stockNa3PO4, $combustileGO, $combustileFO, $injectionChaud1, $injectionChaud2 ) {
        $this->id = $id;
        $this->date = $date;
        $this->poste = $poste;
        $this->operateur = $operateur;
        $this->quniteCortrol = $quniteCortrol;
        $this->quniteBioxin = $quniteBioxin;
        $this->quniteNa3PO4 = $quniteNa3PO4;
        $this->quniteNH3 = $quniteNH3;
        $this->stockCortrol = $stockCortrol;
        $this->stockEliminox = $stockEliminox;
        $this->stockBioxin = $stockBioxin;
        $this->stockNH3 = $stockNH3;
        $this->stockNBR = $stockNBR;
        $this->stockNa3PO4 = $stockNa3PO4;
        $this->combustileGO = $combustileGO;
        $this->combustileFO = $combustileFO;
        $this->injectionChaud1 = $injectionChaud1;
        $this->injectionChaud2 = $injectionChaud2;
        
    }

    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getPoste() {
        return $this->poste;
    }

    function getOperateur() {
        return $this->operateur;
    }

    function getQuniteCortrol() {
        return $this->quniteCortrol;
    }

    function getQuniteBioxin() {
        return $this->quniteBioxin;
    }

    function getQuniteNa3PO4() {
        return $this->quniteNa3PO4;
    }

    function getQuniteNH3() {
        return $this->quniteNH3;
    }

    function getStockCortrol() {
        return $this->stockCortrol;
    }

    function getStockEliminox() {
        return $this->stockEliminox;
    }

    function getStockBioxin() {
        return $this->stockBioxin;
    }

    function getStockNH3() {
        return $this->stockNH3;
    }

    function getStockNBR() {
        return $this->stockNBR;
    }

    function getStockNa3PO4() {
        return $this->stockNa3PO4;
    }

    function getCombustileGO() {
        return $this->combustileGO;
    }

    function getCombustileFO() {
        return $this->combustileFO;
    }

    function getInjectionChaud1() {
        return $this->injectionChaud1;
    }

    function getInjectionChaud2() {
        return $this->injectionChaud2;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setPoste($poste) {
        $this->poste = $poste;
    }

    function setOperateur($operateur) {
        $this->operateur = $operateur;
    }

    function setQuniteCortrol($quniteCortrol) {
        $this->quniteCortrol = $quniteCortrol;
    }

    function setQuniteBioxin($quniteBioxin) {
        $this->quniteBioxin = $quniteBioxin;
    }

    function setQuniteNa3PO4($quniteNa3PO4) {
        $this->quniteNa3PO4 = $quniteNa3PO4;
    }

    function setQuniteNH3($quniteNH3) {
        $this->quniteNH3 = $quniteNH3;
    }

    function setStockCortrol($stockCortrol) {
        $this->stockCortrol = $stockCortrol;
    }

    function setStockEliminox($stockEliminox) {
        $this->stockEliminox = $stockEliminox;
    }

    function setStockBioxin($stockBioxin) {
        $this->stockBioxin = $stockBioxin;
    }

    function setStockNH3($stockNH3) {
        $this->stockNH3 = $stockNH3;
    }

    function setStockNBR($stockNBR) {
        $this->stockNBR = $stockNBR;
    }

    function setStockNa3PO4($stockNa3PO4) {
        $this->stockNa3PO4 = $stockNa3PO4;
    }

    function setCombustileGO($combustileGO) {
        $this->combustileGO = $combustileGO;
    }

    function setCombustileFO($combustileFO) {
        $this->combustileFO = $combustileFO;
    }

    function setInjectionChaud1($injectionChaud1) {
        $this->injectionChaud1 = $injectionChaud1;
    }

    function setInjectionChaud2($injectionChaud2) {
        $this->injectionChaud2 = $injectionChaud2;
    }


}
