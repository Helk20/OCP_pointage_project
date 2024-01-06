<?php

class Ip3 {
    private $id;
    private $date;
    private $operateur;
    private $chef;
    private $hr;
    private $amp;
    private $pAspi;
    private $pFil;
    private $nivH;
    
    function __construct($id, $date, $operateur,$chef, $hr, $amp,$pAspi,$pFil, $nivH) {
        $this->id = $id;
        $this->date = $date;
        $this->operateur = $operateur;
        $this->chef = $chef;
        $this->hr = $hr;
        $this->amp = $amp;
        $this->pAspi = $pAspi;
        $this->pFil = $pFil;
        $this->nivH = $nivH;
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

    function getChef() {
        return $this->chef;
    }

    function getHr() {
        return $this->hr;
    }

    function getAmp() {
        return $this->amp;
    }

    function getPAspi() {
        return $this->pAspi;

    }

    function getPFil() {
        return $this->pFil;
    }

    function getNivH() {
        return $this->nivH;
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

    function setChef($chef) {
        $this->chef = $chef;
    }

    function setHr($hr) {
        $this->hr = $hr;
    }

    function setAmp($amp) {
        $this->amp = $amp;
    }

    function setPAspi($pAspi) {
        $this->pAspi = $pAspi;
    }

    function setPFil($pFil) {
        $this->pFil = $pFil;
    }

    function setNivH($nivH) {
        $this->nivH = $nivH;
    }



}
