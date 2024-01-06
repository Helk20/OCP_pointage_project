<?php

chdir('..');
include_once 'services/AnalyseChService.php';
extract($_POST);

$ds = new AnalyseChService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new AnalyseCh(0, $date, $ch,$laboPh, $laboCd, $laboTac,$laboFe, $laboTh, $laboO2,$laboP2O5, $laboN2H4, $laboCi,$centPhP1, $centPhP2, $centPhP3,$centCd1, $centCd2, $centCd3,$centInjectP1, $centInjectP2, $centInjectP3));
    } elseif ($op == 'update') {
        $ds->update(new AnalyseCh($id,  $date, $ch,$laboPh, $laboCd, $laboTac,$laboFe, $laboTh, $laboO2,$laboP2O5, $laboN2H4, $laboCi,$centPhP1, $centPhP2, $centPhP3,$centCd1, $centCd2, $centCd3,$centInjectP1, $centInjectP2, $centInjectP3));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
