<?php


class RapportSDM {
    private $id;
    private $date;
    private $poste;
    private $operateur;
    private $equipement;
    private $activite;
    
    
    function __construct($id, $date, $poste, $operateur, $equipement, $activite) {
        $this->id = $id;
        $this->date = $date;
        $this->poste = $poste;
        $this->operateur = $operateur;
        $this->equipement = $equipement;
        $this->activite = $activite;

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

    function getEquipement() {
        return $this->equipement;
    }
    function getActivite() {
        return $this->activite;
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
        $this->id = $id;
    }

    function setEquipement($equipement) {
        $this->equipement = $equipement;
    }

    function setActivite($activite) {
        $this->activite = $activite;
    }


}
