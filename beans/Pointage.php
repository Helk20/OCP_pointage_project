<?php

class Pointage {
    private $id;
    private $date;
    private $etat;
    private $employe;
    function __construct($id, $date, $etat, $employe) {
        $this->id = $id;
        $this->date = $date;
        $this->etat = $etat;
        $this->employe = $employe;
    }
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getEtat() {
        return $this->etat;
    }

    function getEmploye() {
        return $this->employe;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setEmploye($employe) {
        $this->employe = $employe;
    }



}
