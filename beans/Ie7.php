<?php

class Ie7 {
    private $id;
    private $date;
    private $operateur;
    private $chef;
    private $hr;
    private $etCond;
    private $stCond;
    private $etMer;
    private $stMer;
    
    function __construct($id, $date, $operateur,$chef, $hr, $etCond,$stCond, $etMer, $stMer) {
        $this->id = $id;
        $this->date = $date;
        $this->operateur = $operateur;
        $this->chef = $chef;
        $this->hr = $hr;
        $this->etCond = $etCond;
        $this->stCond = $stCond;
        $this->etMer = $etMer;
        $this->stMer = $stMer;
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

    function getEtCond() {
        return $this->etCond;
    }

    function getStCond() {
        return $this->stCond;
    }

    function getEtMer() {
        return $this->etMer;
    }

    function getStMer() {
        return $this->stMer;
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

    function setEtCond($etCond) {
        $this->etCond = $etCond;
    }

    function setStCond($stCond) {
        $this->stCond = $stCond;
    }

    function setEtMer($etMer) {
        $this->etMer = $etMer;
    }

    function setStMer($stMer) {
        $this->stMer = $stMer;
    }


}

