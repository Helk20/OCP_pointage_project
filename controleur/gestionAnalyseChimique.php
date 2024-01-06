<?php

chdir('..');
include_once 'services/AnalyseChimiqueService.php';
extract($_POST);

$ds = new AnalyseChimiqueService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new AnalyseChimique(0, $date, $operateur,$chefEquipe, $heure,$l3, $l4,$l5, $l6, $l7,$l8, $l9, $l10,$l11, $l12, $l13, $l14, $l15));
    } elseif ($op == 'update') {
        $ds->update(new AnalyseChimique($id, $date, $operateur,$chefEquipe, $heure,$l3, $l4,$l5, $l6, $l7,$l8, $l9, $l10,$l11, $l12, $l13, $l14, $l15));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
