<?php

class GtaDemarrage {
    private $id;
    private $date;
    private $poste;
    private $heure;
    private $agent;
    private $admVanne;
    private $admT;
    private $admPr;
    private $STVanne;
    private $STT;
    private $STPr;
    private $vitesse;
    private $TCorpsSup;
    private $TCorpsInf;
    private $TfondBp;
    private $DilDiff;
    private $OuvSppeHpBp;
    private $videBar;
    private $eauMer;
    
    function __construct($id, $date, $poste, $heure, $agent, $admVanne, $admT, $admPr, $STVanne, $STT, $STPr, $vitesse, $TCorpsSup, $TCorpsInf, $TfondBp, $DilDiff, $OuvSppeHpBp, $videBar, $eauMer) {
        $this->id = $id;
        $this->date = $date;
        $this->poste = $poste;
        $this->heure = $heure;
        $this->agent = $agent;
        $this->admVanne = $admVanne;
        $this->admT = $admT;
        $this->admPr = $admPr;
        $this->STVanne = $STVanne;
        $this->STT = $STT;
        $this->STPr = $STPr;
        $this->vitesse = $vitesse;
        $this->TCorpsSup = $TCorpsSup;
        $this->TCorpsInf = $TCorpsInf;
        $this->TfondBp = $TfondBp;
        $this->DilDiff = $DilDiff;
        $this->OuvSppeHpBp = $OuvSppeHpBp;
        $this->videBar = $videBar;
        $this->eauMer = $eauMer;
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

    function getAgent() {
        return $this->agent;
    }

    function getAdmVanne() {
        return $this->admVanne;
    }
    function getAdmT() {
        return $this->admT;
    }

    function getAdmPr() {
        return $this->admPr;
    }

    function getSTVanne() {
        return $this->STVanne;
    }

    function getSTT() {
        return $this->STT;
    }

    function getSTPr() {
        return $this->STPr;
    }

    function getVitesse() {
        return $this->vitesse;
    }

    function getTCorpsSup() {
        return $this->TCorpsSup;
    }

    function getTCorpsInf() {
        return $this->TCorpsInf;
    }

    function getTfondBp() {
        return $this->TfondBp;
    }

    function getDilDiff() {
        return $this->DilDiff;
    }

    function getOuvSppeHpBp() {
        return $this->OuvSppeHpBp;
    }

    function getVideBar() {
        return $this->videBar;
    }

    function getEauMer() {
        return $this->eauMer;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setPoste($poste) {
        $this->$poste = $poste;
    }

    function setHeure($heure) {
        $this->heure = $heure;
    }

    function setAgent($agent) {
        $this->agent = $agent;
    }

    function setAdmVanne($admVanne) {
        $this->admVanne = $admVanne;
    }

    function setAdmT($admT) {
        $this->admT = $admT;
    }

    function setAdmPr($admPr) {
        $this->admPr = $admPr;
    }

    function setSTVanne($STVanne) {
        $this->STVanne = $STVanne;
    }

    function setSTT($STT) {
        $this->STT = $STT;
    }

    function setSTPr($STPr) {
        $this->STPr = $STPr;
    }

    function setVitesse($vitesse) {
        $this->vitesse = $vitesse;
    }

    function setTCorpsSup($TCorpsSup) {
        $this->TCorpsSup = $TCorpsSup;
    }

    function setTCorpsInf($TCorpsInf) {
        $this->TCorpsInf = $TCorpsInf;
    }

    function setTfondBp($TfondBp) {
        $this->TfondBp = $TfondBp;
    }

    function setDilDiff($DilDiff) {
        $this->DilDiff = $DilDiff;
    }

    function setOuvSppeHpBp($OuvSppeHpBp) {
        $this->OuvSppeHpBp = $OuvSppeHpBp;
    }

    function setVideBar($videBar) {
        $this->videBar = $videBar;
    }

    function setEauMer($eauMer) {
        $this->eauMer = $eauMer;
    }


}
