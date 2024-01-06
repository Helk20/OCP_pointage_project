<?php

chdir('..');
include_once 'services/GtaaService.php';
extract($_POST);

$ds = new GtaaService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Gtaa(0, $date, $poste, $heure, $operateur , $chefEquipe, $tEMer, $tSMerG, $tSMerD , $ouvMer1, $ouvMer2, $filtreSce, $pHuile , $granitH, $granitB, $tFond, $nivHuile, $prVide20BC01, $prVide20LC01, $ampVide20BC01 , $ampVide20LC01, $prAspi20LP01 , $prAspi20BP01, $prRefoulement20LP01 , $prRefoulement20BP01));
    } elseif ($op == 'update') {
        $ds->update(new Gtaa($id, $date, $poste, $heure, $operateur , $chefEquipe, $tEMer, $tSMerG, $tSMerD , $ouvMer1, $ouvMer2, $filtreSce, $pHuile , $granitH, $granitB, $tFond, $nivHuile, $prVide20BC01, $prVide20LC01, $ampVide20BC01 , $ampVide20LC01, $prAspi20LP01 , $prAspi20BP01, $prRefoulement20LP01 , $prRefoulement20BP01));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());

