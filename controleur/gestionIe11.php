<?php

chdir('..');
include_once 'services/Ie11Service.php';
extract($_POST);

$ds = new Ie11Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ie11(0, $date, $operateur, $chef, $hr, $etNor, $stNor, $stMer));
    } elseif ($op == 'update') {
        $ds->update(new Ie11($id, $date, $operateur, $chef, $hr, $etNor, $stNor, $stMer));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
