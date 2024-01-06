<?php

class AnalyseCh {
    private $id;
    private $date;
    private $ch;
    private $laboPh;
    private $laboCd;
    private $laboTac;
    private $laboFe;
    private $laboTh;
    private $laboO2;
    private $laboP2O5;
    private $laboN2H4;
    private $laboCi;
    private $centPhP1;
    private $centPhP2;
    private $centPhP3;
    private $centCd1;
    private $centCd2;
    private $centCd3;
    private $centInjectP1;
    private $centInjectP2;
    private $centInjectP3;
    
    function __construct($id, $date, $ch,$laboPh, $laboCd, $laboTac,$laboFe, $laboTh, $laboO2,$laboP2O5, $laboN2H4, $laboCi,$centPhP1, $centPhP2, $centPhP3,$centCd1, $centCd2, $centCd3,$centInjectP1, $centInjectP2, $centInjectP3) {
        $this->id = $id;
        $this->date = $date;
        $this->ch = $ch;
        $this->laboPh = $laboPh;
        $this->laboCd = $laboCd;
        $this->laboTac = $laboTac;
        $this->laboFe = $laboFe;
        $this->laboTh = $laboTh;
        $this->laboO2 = $laboO2;
        $this->laboP2O5 = $laboP2O5;
        $this->laboN2H4 = $laboN2H4;
        $this->laboCi = $laboCi;
        $this->centPhP1 = $centPhP1;
        $this->centPhP2 = $centPhP2;
        $this->centPhP3 = $centPhP3;
        $this->centCd1 = $centCd1;
        $this->centCd2 = $centCd2;
        $this->centCd3 = $centCd3;
        $this->centInjectP1 = $centInjectP1;
        $this->centInjectP2 = $centInjectP2;
        $this->centInjectP3 = $centInjectP3;
    }

    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getCh() {
        return $this->ch;
    }

    function getLaboPh() {
        return $this->laboPh;
    }

    function getLaboCd() {
        return $this->laboCd;
    }

    function getLaboTac() {
        return $this->laboTac;
    }

    function getLaboFe() {
        return $this->laboFe;
    }

    function getLaboTh() {
        return $this->laboTh;
    }

    function getLaboO2() {
        return $this->laboO2;
    }

    function getLaboP2O5() {
        return $this->laboP2O5;
    }

    function getLaboN2H4() {
        return $this->laboN2H4;
    }

    function getLaboCi() {
        return $this->laboCi;
    }

    function getCentPhP1() {
        return $this->centPhP1;
    }

    function getCentPhP2() {
        return $this->centPhP2;
    }

    function getCentPhP3() {
        return $this->centPhP3;
    }

    function getCentCd1() {
        return $this->centCd1;
    }

    function getCentCd2() {
        return $this->centCd2;
    }

    function getCentCd3() {
        return $this->centCd3;
    }

    function getCentInjectP1() {
        return $this->centInjectP1;
    }

    function getCentInjectP2() {
        return $this->centInjectP2;
    }

    function getCentInjectP3() {
        return $this->centInjectP3;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setCh($ch) {
        $this->ch = $ch;
    }

    function setLaboPh($laboPh) {
        $this->laboPh = $laboPh;
    }

    function setLaboCd($laboCd) {
        $this->laboCd = $laboCd;
    }

    function setLaboTac($laboTac) {
        $this->laboTac = $laboTac;
    }

    function setLaboFe($laboFe) {
        $this->laboFe = $laboFe;
    }

    function setLaboTh($laboTh) {
        $this->laboTh = $laboTh;
    }

    function setLaboO2($laboO2) {
        $this->laboO2 = $laboO2;
    }

    function setLaboP2O5($laboP2O5) {
        $this->laboP2O5 = $laboP2O5;
    }

    function setLaboN2H4($laboN2H4) {
        $this->laboN2H4 = $laboN2H4;
    }

    function setLaboCi($laboCi) {
        $this->laboCi = $laboCi;
    }

    function setCentPhP1($centPhP1) {
        $this->centPhP1 = $centPhP1;
    }

    function setCentPhP2($centPhP2) {
        $this->centPhP2 = $centPhP2;
    }

    function setCentPhP3($centPhP3) {
        $this->centPhP3 = $centPhP3;
    }

    function setCentCd1($centCd1) {
        $this->centCd1 = $centCd1;
    }

    function setCentCd2($centCd2) {
        $this->centCd2 = $centCd2;
    }

    function setCentCd3($centCd3) {
        $this->centCd3 = $centCd3;
    }

    function setCentInjectP1($centInjectP1) {
        $this->centInjectP1 = $centInjectP1;
    }

    function setCentInjectP2($centInjectP2) {
        $this->centInjectP2 = $centInjectP2;
    }

    function setCentInjectP3($centInjectP3) {
        $this->centInjectP3 = $centInjectP3;
    }

    

}
