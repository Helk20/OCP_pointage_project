<?php

chdir('..');
include_once 'services/Ie7Service.php';
extract($_POST);

$ds = new Ie7Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ie7(0, $date, $operateur, $chef, $hr, $etCond, $stCond, $etMer, $stMer));
    } elseif ($op == 'update') {
        $ds->update(new Ie7($id, $date, $operateur, $chef, $hr, $etCond, $stCond, $etMer, $stMer));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
