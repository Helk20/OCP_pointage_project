<?php

chdir('..');
include_once 'services/Ip16Service.php';
extract($_POST);

$ds = new Ip16Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ip16(0, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pFil, $nivH));
    } elseif ($op == 'update') {
        $ds->update(new Ip16($id, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pFil, $nivH));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
