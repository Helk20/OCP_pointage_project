<?php


class ReseauVapeur {
    private $id;
    private $date;
    private $poste;
    private $heure;
    private $operateur;
    private $chefEquipe;
    private $prHpNord;
    private $tHpNord;
    private $prHpSud;
    private $tHpSud;
    private $prMpNord;
    private $tMpNord;
    private $prMpSud;
    private $tMpSud;
    
    function __construct($id, $date, $poste, $heure, $operateur, $chefEquipe, $prHpNord, $tHpNord, $prHpSud, $tHpSud, $prMpNord,$tMpNord, $prMpSud, $tMpSud) {
        $this->id = $id;
        $this->date = $date;
        $this->poste = $poste;
        $this->heure = $heure;
        $this->operateur = $operateur;
        $this->chefEquipe = $chefEquipe;
        $this->prHpNord = $prHpNord;
        $this->tHpNord = $tHpNord;
        $this->prHpSud = $prHpSud;
        $this->tHpSud = $tHpSud;
        $this->prMpNord = $prMpNord;
        $this->tMpNord = $tMpNord;
        $this->prMpSud = $prMpSud;
        $this->tMpSud = $tMpSud;
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

    function getPrHpNord() {
        return $this->prHpNord;
    }

    function getTHpNord() {
        return $this->tHpNord;
    }

    function getPrHpSud() {
        return $this->prHpSud;
    }

    function getTHpSud() {
        return $this->tHpSud;
    }

    function getPrMpNord() {
        return $this->prMpNord;
    }

    function getTMpNord() {
        return $this->tMpNord;
    }
    function getPrMpSud() {
        return $this->prMpSud;
    }

    function getTMpSud() {
        return $this->tMpSud;
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

    function setPrHpNord($prHpNord) {
        $this->prHpNord = $prHpNord;
    }

    function setTHpNord($tHpNord) {
        $this->tHpNord = $tHpNord;
    }

    function setPrHpSud($prHpSud) {
        $this->prHpSud = $prHpSud;
    }

    function setTHpSud($tHpSud) {
        $this->tHpSud = $tHpSud;
    }

    function setPrMpNord($prMpNord) {
        $this->prMpNord = $prMpNord;
    }

    function setTMpNord($tMpNord) {
        $this->tMpNord = $tMpNord;
    }

    function setPrMpSud($prMpSud) {
        $this->prMpSud = $prMpSud;
    }

    function setTMpSud($tMpSud) {
        $this->tMpSud = $tMpSud;
    }


}
