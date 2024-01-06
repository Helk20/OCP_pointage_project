<?php

class Ie10 {
    private $id;
    private $date;
    private $operateur;
    private $chef;
    private $hr;
    private $etNor;
    private $stNor;
    private $stMer;
    
    function __construct($id, $date, $operateur,$chef, $hr, $etNor,$stNor, $stMer) {
        $this->id = $id;
        $this->date = $date;
        $this->operateur = $operateur;
        $this->chef = $chef;
        $this->hr = $hr;
        $this->etNor = $etNor;
        $this->stNor = $stNor;
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

    function getEtNor() {
        return $this->etNor;
    }

    function getStNor() {
        return $this->stNor;
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

    function setEtNor($etNor) {
        $this->etNor = $etNor;
    }

    function setStNor($stNor) {
        $this->stNor = $stNor;
    }

    function setStMer($stMer) {
        $this->stMer = $stMer;
    }


}
