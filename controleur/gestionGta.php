<?php

chdir('..');
include_once 'services/GtaService.php';
extract($_POST);

$ds = new GtaService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Gta(0, $date, $poste, $heure, $operateur , $chefEquipe, $tEMer, $tSMerG, $tSMerD , $ouvMer1, $ouvMer2, $filtreSce, $pHuile , $granitH, $granitB, $tFond, $nivHuile, $prVide20AC01, $prVide20KC01, $ampVide20AC01 , $ampVide20KC01, $prAspi20AP01 , $prAspi20KP01, $prRefoulement20AP01 , $prRefoulement20KP01));
    } elseif ($op == 'update') {
        $ds->update(new Gta($id, $date, $poste, $heure, $operateur , $chefEquipe, $tEMer, $tSMerG, $tSMerD , $ouvMer1, $ouvMer2, $filtreSce, $pHuile , $granitH, $granitB, $tFond, $nivHuile, $prVide20AC01, $prVide20KC01, $ampVide20AC01 , $ampVide20KC01, $prAspi20AP01 , $prAspi20KP01, $prRefoulement20AP01 , $prRefoulement20KP01));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());

