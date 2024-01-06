<?php

chdir('..');
include_once 'services/Ip17Service.php';
extract($_POST);

$ds = new Ip17Service();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Ip17(0, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pFil, $nivH));
    } elseif ($op == 'update') {
        $ds->update(new Ip17($id, $date, $operateur, $chef, $hr, $amp, $pAspi, $pRefou, $pFil, $nivH));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
