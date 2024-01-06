<?php


class Gta {
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
    private $prVide20AC01;
    private $prVide20KC01;
    private $ampVide20AC01;
    private $ampVide20KC01;
    private $prAspi20AP01;
    private $prAspi20KP01;
    private $prRefoulement20AP01;
    private $prRefoulement20KP01;
    
    function __construct($id, $date, $poste, $heure, $operateur, $chefEquipe, $tEMer, $tSMerG, $tSMerD, $ouvMer1, $ouvMer2, $filtreSce, $pHuile, $granitH, $granitB, $tFond, $nivHuile, $prVide20AC01, $prVide20KC01, $ampVide20AC01, $ampVide20KC01, $prAspi20AP01, $prAspi20KP01, $prRefoulement20AP01, $prRefoulement20KP01 ) {
        $this->id = $id;
        $this->date = $date;
        $this->poste = $poste;
        $this->heure = $heure;
        $this->operateur = $operateur;
        $this->chefEquipe = $chefEquipe;
        $this->tEMer = $tEMer;
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
        $this->prVide20AC01 = $prVide20AC01;
        $this->prVide20KC01 = $prVide20KC01;
        $this->ampVide20AC01 = $ampVide20AC01;
        $this->ampVide20KC01 = $ampVide20KC01;
        $this->prAspi20AP01 = $prAspi20AP01;
        $this->prAspi20KP01 = $prAspi20KP01;
        $this->prRefoulement20AP01 = $prRefoulement20AP01;
        $this->prRefoulement20KP01 = $prRefoulement20KP01;
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

    function getPrVide20AC01() {
        return $this->prVide20AC01;
    }

    function getPrVide20KC01() {
        return $this->prVide20KC01;
    }

    function getAmpVide20AC01() {
        return $this->ampVide20AC01;
    }

    function getAmpVide20KC01() {
        return $this->ampVide20KC01;
    }

    function getPrAspi20AP01() {
        return $this->prAspi20AP01;
    }

    function getPrAspi20KP01() {
        return $this->prAspi20KP01;
    }

    function getPrRefoulement20AP01() {
        return $this->prRefoulement20AP01;
    }

    function getPrRefoulement20KP01() {
        return $this->prRefoulement20KP01;
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

    function setOuvMer1($ouvMer1) {
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

    function setPrVide20AC01($prVide20AC01) {
        $this->prVide20AC01 = $prVide20AC01;
    }

    function setPrVide20KC01($prVide20KC01) {
        $this->prVide20KC01 = $prVide20KC01;
    }

    function setAmpVide20AC01($ampVide20AC01) {
        $this->ampVide20AC01 = $ampVide20AC01;
    }

    function setAmpVide20KC01($ampVide20KC01) {
        $this->ampVide20KC01 = $ampVide20KC01;
    }

    function setPrAspi20AP01($prAspi20AP01) {
        $this->prAspi20AP01 = $prAspi20AP01;
    }

    function setPrAspi20KP01($prAspi20KP01) {
        $this->prAspi20KP01 = $prAspi20KP01;
    }

    function setPrRefoulement20AP01($prRefoulement20AP01) {
        $this->prRefoulement20AP01 = $prRefoulement20AP01;
    }

    function setPrRefoulement20KP01($prRefoulement20KP01) {
        $this->prRefoulement20KP01 = $prRefoulement20KP01;
    }


}
