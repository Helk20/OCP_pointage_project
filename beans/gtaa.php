<?php

class Gtaa {
    private $id;
    private $date;
    private $poste;
    private $heure;
    private $operateur;
    private $chefEquipe;
    private $tEMer;
    private $tSMerG;
    private $tSMerD;
    private $ouvMer1;
    private $ouvMer2;
    private $filtreSce;
    private $pHuile;
    private $granitH;
    private $granitB;
    private $tFond;
    private $nivHuile;
    private $prVide20BC01;
    private $prVide20LC01;
    private $ampVide20BC01;
    private $ampVide20LC01;
    private $prAspi20LP01;
    private $prAspi20BP01;
    private $prRefoulement20LP01;
    private $prRefoulement20BP01;
    
    function __construct($id, $date, $poste, $heure, $operateur, $chefEquipe, $tEMer, $tSMerG, $tSMerD, $ouvMer1, $ouvMer2, $filtreSce, $pHuile, $granitH, $granitB, $tFond, $nivHuile, $prVide20BC01, $prVide20LC01, $ampVide20BC01, $ampVide20LC01, $prAspi20LP01, $prAspi20BP01, $prRefoulement20LP01, $prRefoulement20BP01 ) {
        $this->id = $id;
        $this->date = $date;
        $this->poste = $poste;
        $this->heure = $heure;
        $this->operateur = $operateur;
        $this->chefEquipe = $chefEquipe;$this->tEMer = $tEMer;
        $this->tSMerG = $tSMerG;
        $this->tSMerD = $tSMerD;
        $this->ouvMer1 = $ouvMer1;
        $this->ouvMer2 = $ouvMer2;
        $this->filtreSce = $filtreSce;
        $this->pHuile = $pHuile;
        $this->granitH = $granitH;
        $this->granitB = $granitB;
        $this->tFond = $tFond;
        $this->nivHuile = $nivHuile;
        $this->prVide20BC01 = $prVide20BC01;
        $this->prVide20LC01 = $prVide20LC01;
        $this->ampVide20BC01 = $ampVide20BC01;
        $this->ampVide20LC01 = $ampVide20LC01;
        $this->prAspi20LP01 = $prAspi20LP01;
        $this->prAspi20BP01 = $prAspi20BP01;
        $this->prRefoulement20LP01 = $prRefoulement20LP01;
        $this->prRefoulement20BP01 = $prRefoulement20BP01;
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

    function getHeure() {
        return $this->heure;
    }

    function getOperateur() {
        return $this->operateur;
    }

    function getChefEquipe() {
        return $this->chefEquipe;
    }

    function getTEMer() {
        return $this->tEMer;
    }

    function getTSMerG() {
        return $this->tSMerG;
    }

    function getTSMerD() {
        return $this->tSMerD;
    }

    function getOuvMer1() {
        return $this->ouvMer1;
    }

    function getOuvMer2() {
        return $this->ouvMer2;
    }

    function getFiltreSce() {
        return $this->filtreSce;
    }

    function getPHuile() {
        return $this->pHuile;
    }

    function getGranitH() {
        return $this->granitH;
    }

    function getGranitB() {
        return $this->granitB;
    }

    function getTFond() {
        return $this->tFond;
    }

    function getNivHuile() {
        return $this->nivHuile;
    }

    function getPrVide20BC01() {
        return $this->prVide20BC01;
    }

    function getPrVide20LC01() {
        return $this->prVide20LC01;
    }

    function getAmpVide20BC01() {
        return $this->ampVide20BC01;
    }

    function getAmpVide20LC01() {
        return $this->ampVide20LC01;
    }

    function getPrAspi20LP01() {
        return $this->prAspi20LP01;
    }

    function getPrAspi20BP01() {
        return $this->prAspi20BP01;
    }

    function getPrRefoulement20LP01() {
        return $this->prRefoulement20LP01;
    }

    function getPrRefoulement20BP01() {
        return $this->prRefoulement20BP01;
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

    function setHeure($heure) {
        $this->heure = $heure;
    }

    function setOperateur($operateur) {
        $this->operateur = $operateur;
    }

    function setChefEquipe($chefEquipe) {
        $this->chefEquipe = $chefEquipe;
    }

    function setTEMer($tEMer) {
        $this->tEMer = $tEMer;
    }

    function setTSMerG($tSMerG) {
        $this->tSMerG = $tSMerG;
    }

    function setTSMerD($tSMerD) {
        $this->tSMerD = $tSMerD;
    }

    function setouvMer1($ouvMer1) {
        $this->ouvMer1 = $ouvMer1;
    }

    function setOuvMer2($ouvMer2) {
        $this->ouvMer2 = $ouvMer2;
    }

    function setFiltreSce($filtreSce) {
        $this->filtreSce = $filtreSce;
    }

    function setPHuile($pHuile) {
        $this->pHuile = $pHuile;
    }

    function setGranitH($granitH) {
        $this->granitH = $granitH;
    }

    function setGranitB($granitB) {
        $this->granitB = $granitB;
    }

    function setTFond($tFond) {
        $this->tFond = $tFond;
    }

    function setNivHuile($nivHuile) {
        $this->nivHuile = $nivHuile;
    }

    function setPrVide20BC01($prVide20BC01) {
        $this->prVide20BC01 = $prVide20BC01;
    }

    function setPrVide20LC01($prVide20LC01) {
        $this->prVide20LC01 = $prVide20LC01;
    }

    function setAmpVide20BC01($ampVide20BC01) {
        $this->ampVide20BC01 = $ampVide20BC01;
    }

    function setAmpVide20LC01($ampVide20LC01) {
        $this->ampVide20LC01 = $ampVide20LC01;
    }

    function setPrAspi20LP01($prAspi20LP01) {
        $this->prAspi20LP01 = $prAspi20LP01;
    }

    function setPrAspi20BP01($prAspi20BP01) {
        $this->prAspi20BP01 = $prAspi20BP01;
    }

    function setPrRefoulement20LP01($prRefoulement20LP01) {
        $this->prRefoulement20LP01 = $prRefoulement20LP01;
    }

    function setPrRefoulement20BP01($prRefoulement20BP01) {
        $this->prRefoulement20BP01 = $prRefoulement20BP01;
    }


}
