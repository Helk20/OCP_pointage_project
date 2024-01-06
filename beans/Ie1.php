<?php

class Ie1 {
    private $id;
    private $date;
    private $operateur;
    private $chef;
    private $hr;
    private $etVap;
    private $stCond;
    private $stMer;
    
    function __construct($id, $date, $operateur,$chef, $hr, $etVap,$stCond, $stMer) {
        $this->id = $id;
        $this->date = $date;
        $this->operateur = $operateur;
        $this->chef = $chef;
        $this->hr = $hr;
        $this->etVap = $etVap;
        $this->stCond = $stCond;
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

    function getEtVap() {
        return $this->etVap;
    }

    function getStCond() {
        return $this->stCond;
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

    function setEtVap($etVap) {
        $this->etVap = $etVap;
    }

    function setStCond($stCond) {
        $this->stCond = $stCond;
    }

    function setStMer($stMer) {
        $this->stMer = $stMer;
    }

}
