<?php

chdir('..');
include_once 'services/GtaaaService.php';
extract($_POST);

$ds = new GtaaaService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Gtaaa(0, $date, $poste, $heure, $operateur , $chefEquipe, $tEMer, $tSMerG, $tSMerD , $ouvMer1, $ouvMer2, $filtreSce, $pHuile , $granitH, $granitB, $tFond, $nivHuile, $prVide20CC01, $prVide20MC01, $ampVide20CC01 , $ampVide20MC01, $prAspi20CP01 , $prAspi20MP01, $prRefoulement20CP01 , $prRefoulement20MP01));
    } elseif ($op == 'update') {
        $ds->update(new Gtaaa($id, $date, $poste, $heure, $operateur , $chefEquipe, $tEMer, $tSMerG, $tSMerD , $ouvMer1, $ouvMer2, $filtreSce, $pHuile , $granitH, $granitB, $tFond, $nivHuile, $prVide20CC01, $prVide20MC01, $ampVide20CC01 , $ampVide20MC01, $prAspi20CP01 , $prAspi20MP01, $prRefoulement20CP01 , $prRefoulement20MP01));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());

