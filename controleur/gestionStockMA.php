<?php

chdir('..');
include_once 'services/StockMAService.php';
extract($_POST);

$ds = new StockMAService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new StockMA(0, $date, $poste, $operateur, $quniteCortrol, $quniteBioxin, $quniteNa3PO4, $quniteNH3, $stockCortrol, $stockEliminox, $stockBioxin, $stockNH3, $stockNBR, $stockNa3PO4, $combustileGO, $combustileFO, $injectionChaud1, $injectionChaud2));
    } elseif ($op == 'update') {
        $ds->update(new StockMA($id, $date, $poste, $operateur, $quniteCortrol, $quniteBioxin, $quniteNa3PO4, $quniteNH3, $stockCortrol, $stockEliminox, $stockBioxin, $stockNH3, $stockNBR, $stockNa3PO4, $combustileGO, $combustileFO, $injectionChaud1, $injectionChaud2));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
