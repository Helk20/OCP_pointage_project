
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 
 */
class CircuitHuile {
    private $id;
    private $date;
    private $poste;
    private $heure;
    private $operateur;
    private $chefEquipe;
    private $bac;
    private $bacN;
    private $etatGta1;
    private $etatGta2;
    private $etatGta3;
    private $nbrFiltre;
    
    function __construct($id, $date, $poste, $heure, $operateur, $chefEquipe, $bac, $bacN, $etatGta1, $etatGta2, $etatGta3, $nbrFiltre) {
        $this->id = $id;
        $this->date = $date;
        $this->poste = $poste;
        $this->heure = $heure;
        $this->operateur = $operateur;
        $this->chefEquipe = $chefEquipe;
        $this->bac = $bac;
        $this->bacN = $bacN;
        $this->etatGta1 = $etatGta1;
        $this->etatGta2 = $etatGta2;
        $this->etatGta3 = $etatGta3;
        $this->nbrFiltre = $nbrFiltre;
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

    function getBac() {
        return $this->bac;
    }

    function getBacN() {
        return $this->bacN;
    }

    function getEtatGta1() {
        return $this->etatGta1;
    }

    function getEtatGta2() {
        return $this->etatGta2;
    }

    function getEtatGta3() {
        return $this->etatGta3;
    }

    function getNbrFiltre() {
        return $this->nbrFiltre;
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

    function setBac($bac) {
        $this->bac = $bac;
    }

    function setBacN($bacN) {
        $this->bacN = $bacN;
    }

    function setEtatGta1($etatGta1) {
        $this->etatGta1 = $etatGta1;
    }

    function setEtatGta2($etatGta2) {
        $this->etatGta2 = $etatGta2;
    }

    function setEtatGta3($etatGta3) {
        $this->etatGta3 = $etatGta3;
    }

    function setNbrFiltre($nbrFiltre) {
        $this->nbrFiltre = $nbrFiltre;
    }


}
