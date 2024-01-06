<?php

chdir('..');
include_once 'services/Ie1Service.php';
extract($_POST);

$ds = new Ie1Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ie1(0, $date, $operateur, $chef, $hr, $etVap, $stCond, $stMer));
    } elseif ($op == 'update') {
        $ds->update(new Ie1($id, $date, $operateur, $chef, $hr, $etVap, $stCond, $stMer));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
