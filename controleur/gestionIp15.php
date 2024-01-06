<?php

chdir('..');
include_once 'services/Ip15Service.php';
extract($_POST);

$ds = new Ip15Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ip15(0, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pFil, $nivH));
    } elseif ($op == 'update') {
        $ds->update(new Ip15($id, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pFil, $nivH));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
