<?php

chdir('..');
include_once 'services/GtaDemarrageService.php';
extract($_POST);

$ds = new GtaDemarrageService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new GtaDemarrage(0, $date, $poste, $heure, $agent, $admVanne, $admT, $admPr, $STVanne, $STT, $STPr, $vitesse ,$TCorpsSup , $TCorpsInf, $TfondBp, $DilDiff, $OuvSppeHpBp, $videBar, $eauMer));
    } elseif ($op == 'update') {
        $ds->update(new GtaDemarrage($id, $date, $poste, $heure, $agent, $admVanne, $admT, $admPr, $STVanne, $STT, $STPr, $vitesse ,$TCorpsSup , $TCorpsInf, $TfondBp, $DilDiff, $OuvSppeHpBp, $videBar, $eauMer));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
