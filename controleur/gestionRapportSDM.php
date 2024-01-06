<?php

chdir('..');
include_once 'services/RapportSDMService.php';
extract($_POST);

$ds = new RapportSDMService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new RapportSDM(0, $date, $poste, $operateur, $equipement, $activite));
    } elseif ($op == 'update') {
        $ds->update(new RapportSDM($id, $date, $poste, $operateur, $equipement, $activite));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
