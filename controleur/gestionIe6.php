<?php

chdir('..');
include_once 'services/Ie6Service.php';
extract($_POST);

$ds = new Ie6Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ie6(0, $date, $operateur, $chef, $hr, $etCond, $stCond, $etMer, $stMer));
    } elseif ($op == 'update') {
        $ds->update(new Ie6($id, $date, $operateur, $chef, $hr, $etCond, $stCond, $etMer, $stMer));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
