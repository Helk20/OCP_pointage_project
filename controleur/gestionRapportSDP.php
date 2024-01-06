<?php

chdir('..');
include_once 'services/RapportSDPService.php';
extract($_POST);

$ds = new RapportSDPService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new RapportSDP(0, $date, $poste, $operateur, $activites));
    } elseif ($op == 'update') {
        $ds->update(new RapportSDP($id, $date, $poste, $operateur, $activites));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
