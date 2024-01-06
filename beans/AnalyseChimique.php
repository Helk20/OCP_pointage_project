<?php

class AnalyseChimique {
    private $id;
    private $date;
    private $operateur;
    private $chefEquipe;
    private $heure;
    private $l3;
    private $l4;
    private $l5;
    private $l6;
    private $l7;
    private $l8;
    private $l9;
    private $l10;
    private $l11;
    private $l12;
    private $l13;
    private $l14;
    private $l15;
    
    
    function __construct($id, $date, $operateur,$chefEquipe, $heure, $l3, $l4, $l5, $l6, $l7, $l8, $l9, $l10, $l11, $l12, $l13, $l14, $l15) {
        $this->id = $id;
        $this->date = $date;
        $this->operateur = $operateur;
        $this->chefEquipe = $chefEquipe;
        $this->heure = $heure;
        $this->l3 = $l3;
        $this->l4 = $l4;
        $this->l5 = $l5;
        $this->l6 = $l6;
        $this->l7 = $l7;
        $this->l8 = $l8;
        $this->l9 = $l9;
        $this->l10 = $l10;
        $this->l11 = $l11;
        $this->l12 = $l12;
        $this->l13 = $l13;
        $this->l14 = $l14;
        $this->l15 = $l15;
    }

    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getOperateur() {
        return $this->operateur;
    }

    function getChefEquipe() {
        return $this->chefEquipe;
    }

    function getHeure() {
        return $this->heure;
    }

    function getL3() {
        return $this->l3;
    }

    function getL4() {
        return $this->l4;
    }

    function getL5() {
        return $this->l5;
    }

    function getL6() {
        return $this->l6;
    }

    function getL7() {
        return $this->l7;
    }

    function getL8() {
        return $this->l8;
    }

    function getL9() {
        return $this->l9;
    }

    function getL10() {
        return $this->l10;
    }

    function getL11() {
        return $this->l11;
    }

    function getL12() {
        return $this->l12;
    }

    function getL13() {
        return $this->l13;
    }

    function getL14() {
        return $this->l14;
    }

    function getL15() {
        return $this->l15;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setOperateur($operateur) {
        $this->operateur = $operateur;
    }

    function setChefEquipe($chefEquipe) {
        $this->chefEquipe = $chefEquipe;
    }

    function setHeure($heure) {
        $this->heure = $heure;
    }

    function setL3($l3) {
        $this->l3 = $l3;
    }

    function setL4($l4) {
        $this->l4 = $l4;
    }

    function setL5($l5) {
        $this->l5 = $l5;
    }

    function setL6($l6) {
        $this->l6 = $l6;
    }

    function setL7($l7) {
        $this->l7 = $l7;
    }

    function setL8($l8) {
        $this->l8 = $l8;
    }

    function setL9($l9) {
        $this->l9 = $l9;
    }

    function setL10($l10) {
        $this->l10 = $l10;
    }

    function setL11($l11) {
        $this->l11 = $l11;
    }

    function setL12($l12) {
        $this->l12 = $l12;
    }

    function setL13($l13) {
        $this->l13 = $l13;
    }

    function setL14($l14) {
        $this->l14 = $l14;
    }

    function setL15($l15) {
        $this->l15 = $l15;
    }

    

}
