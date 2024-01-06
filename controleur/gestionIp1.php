<?php

chdir('..');
include_once 'services/Ip1Service.php';
extract($_POST);

$ds = new Ip1Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ip1(0,$date, $operateur, $chef, $hr, $amp, $pAspi, $pFil, $nivH));
    } elseif ($op == 'update') {
        $ds->update(new Ip1($id, $date, $operateur, $chef, $hr, $amp, $pAspi, $pFil, $nivH));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
