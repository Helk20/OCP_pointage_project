<?php

chdir('..');
include_once 'services/CircuitHuileService.php';
extract($_POST);

$ds = new CircuitHuileService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new CircuitHuile(0, $date, $poste, $heure, $operateur , $chefEquipe, $bac, $bacN, $etatGta1, $etatGta2, $etatGta3, $nbrFiltre));
    } elseif ($op == 'update') {
        $ds->update(new CircuitHuile($id, $date, $poste, $heure, $operateur , $chefEquipe, $bac, $bacN, $etatGta1, $etatGta2, $etatGta3, $nbrFiltre));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());

