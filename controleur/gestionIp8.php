<?php

chdir('..');
include_once 'services/Ip8Service.php';
extract($_POST);

$ds = new Ip8Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ip8(0, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pEqui, $pFil, $nivH, $tpali, $tSor));
    } elseif ($op == 'update') {
        $ds->update(new Ip8($id, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pEqui, $pFil, $nivH, $tpali, $tSor));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
