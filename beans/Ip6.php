<?php

class Ip6 {
    private $id;
    private $date;
    private $operateur;
    private $chef;
    private $hr;
    private $amp;
    private $pAspi;
    private $pRefou;
    private $pEqui;
    private $pFil;
    private $nivH;
    private $tpali;
    private $tSor;
    
    function __construct($id, $date, $operateur,$chef, $hr, $amp,$pAspi, $pRefou, $pEqui,$pFil, $nivH, $tpali, $tSor) {
        $this->id = $id;
        $this->date = $date;
        $this->operateur = $operateur;
        $this->chef = $chef;
        $this->hr = $hr;
        $this->amp = $amp;
        $this->pAspi = $pAspi;
        $this->pRefou = $pRefou;
        $this->pEqui = $pEqui;
        $this->pFil = $pFil;
        $this->nivH = $nivH;
        $this->tpali = $tpali;
        $this->tSor = $tSor;
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

    function getPRefou() {
        return $this->pRefou;
    }

    function getPEqui() {
        return $this->pEqui;
    }

    function getPFil() {
        return $this->pFil;
    }

    function getNivH() {
        return $this->nivH;
    }

    function getTpali() {
        return $this->tpali;
    }

    function getTSor() {
        return $this->tSor;
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

    function setPRefou($pRefou) {
        $this->pRefou = $pRefou;
    }

    function setPEqui($pEqui) {
        $this->pEqui = $pEqui;
    }

    function setPFil($pFil) {
        $this->pFil = $pFil;
    }

    function setNivH($nivH) {
        $this->nivH = $nivH;
    }

    function setTpali($tpali) {
        $this->tpali = $tpali;
    }

    function setTSor($tSor) {
        $this->tSor = $tSor;
    }


}
