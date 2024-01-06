<?php

class Gtaaa {
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
    private $prVide20CC01;
    private $prVide20MC01;
    private $ampVide20CC01;
    private $ampVide20MC01;
    private $prAspi20CP01;
    private $prAspi20MP01;
    private $prRefoulement20CP01;
    private $prRefoulement20MP01;
    
    
    function __construct($id, $date, $poste, $heure, $operateur, $chefEquipe, $tEMer, $tSMerG, $tSMerD, $ouvMer1, $ouvMer2, $filtreSce, $pHuile, $granitH, $granitB, $tFond, $nivHuile, $prVide20CC01, $prVide20MC01, $ampVide20CC01, $ampVide20MC01, $prAspi20CP01, $prAspi20MP01, $prRefoulement20CP01, $prRefoulement20MP01 ) {
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
        $this->prVide20CC01 = $prVide20CC01;
        $this->prVide20MC01 = $prVide20MC01;
        $this->ampVide20CC01 = $ampVide20CC01;
        $this->ampVide20MC01 = $ampVide20MC01;
        $this->prAspi20CP01 = $prAspi20CP01;
        $this->prAspi20MP01 = $prAspi20MP01;
        $this->prRefoulement20CP01 = $prRefoulement20CP01;
        $this->prRefoulement20MP01 = $prRefoulement20MP01;
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

    function getPrVide20CC01() {
        return $this->prVide20CC01;
    }

    function getPrVide20MC01() {
        return $this->prVide20MC01;
    }

    function getAmpVide20CC01() {
        return $this->ampVide20CC01;
    }

    function getAmpVide20MC01() {
        return $this->ampVide20MC01;
    }

    function getPrAspi20CP01() {
        return $this->prAspi20CP01;
    }

    function getPrAspi20MP01() {
        return $this->prAspi20MP01;
    }

    function getPrRefoulement20CP01() {
        return $this->prRefoulement20CP01;
    }

    function getPrRefoulement20MP01() {
        return $this->prRefoulement20MP01;
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

    function setPrVide20CC01($prVide20CC01) {
        $this->prVide20CC01 = $prVide20CC01;
    }

    function setPrVide20MC01($prVide20MC01) {
        $this->prVide20MC01 = $prVide20MC01;
    }

    function setAmpVide20CC01($ampVide20CC01) {
        $this->ampVide20CC01 = $ampVide20CC01;
    }

    function setAmpVide20MC01($ampVide20MC01) {
        $this->ampVide20MC01 = $ampVide20MC01;
    }

    function setPrAspi20CP01($prAspi20CP01) {
        $this->prAspi20CP01 = $prAspi20CP01;
    }

    function setPrAspi20MP01($prAspi20MP01) {
        $this->prAspi20MP01 = $prAspi20MP01;
    }

    function setPrRefoulement20CP01($prRefoulement20CP01) {
        $this->prRefoulement20CP01 = $prRefoulement20CP01;
    }

    function setPrRefoulement20MP01($prRefoulement20MP01) {
        $this->prRefoulement20MP01 = $prRefoulement20MP01;
    }



}
