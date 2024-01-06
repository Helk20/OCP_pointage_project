<?php

chdir('..');
include_once 'services/Ie2Service.php';
extract($_POST);

$ds = new Ie2Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ie2(0, $date, $operateur, $chef, $hr, $etVap, $stCond, $stMer));
    } elseif ($op == 'update') {
        $ds->update(new Ie2($id, $date, $operateur, $chef, $hr, $etVap, $stCond, $stMer));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
