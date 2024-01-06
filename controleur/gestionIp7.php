<?php

chdir('..');
include_once 'services/Ip7Service.php';
extract($_POST);

$ds = new Ip7Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ip7(0, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pEqui, $pFil, $nivH, $tpali, $tSor));
    } elseif ($op == 'update') {
        $ds->update(new Ip7($id, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pEqui, $pFil, $nivH, $tpali, $tSor));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
