<?php
class RapportSDP {

private $id;
private $date;
private $poste;
private $operateur;
private $activites;

function __construct($id, $date, $poste, $operateur, $activites) {
    $this->id = $id;
    $this->date = $date;
    $this->poste = $poste;
    $this->operateur = $operateur;
    $this->activites = $activites;
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

function getActivites() {
    return $this->activites;
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

function setActivites($activites) {
    $this->activites = $activites;
}

}
