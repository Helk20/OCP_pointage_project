<?php

chdir('..');
include_once 'services/Ie10Service.php';
extract($_POST);

$ds = new Ie10Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ie10(0, $date, $operateur, $chef, $hr, $etNor, $stNor, $stMer));
    } elseif ($op == 'update') {
        $ds->update(new Ie10($id, $date, $operateur, $chef, $hr, $etNor, $stNor, $stMer));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
