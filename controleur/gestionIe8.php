<?php

chdir('..');
include_once 'services/Ie8Service.php';
extract($_POST);

$ds = new Ie8Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ie8(0, $date, $operateur, $chef, $hr, $etCond, $stCond, $etMer, $stMer));
    } elseif ($op == 'update') {
        $ds->update(new Ie8($id, $date, $operateur, $chef, $hr, $etCond, $stCond, $etMer, $stMer));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
