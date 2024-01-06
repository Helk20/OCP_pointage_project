<?php

chdir('..');
include_once 'services/ReseauVapeurService.php';
extract($_POST);

$ds = new ReseauVapeurService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new ReseauVapeur(0, $date, $poste, $heure, $operateur , $chefEquipe, $prHpNord, $tHpNord, $prHpSud,$tHpSud, $prMpNord, $tMpNord	,$prMpSud, $tMpSud  ));
    } elseif ($op == 'update') {
        $ds->update(new ReseauVapeur($id, $date, $poste, $heure, $operateur , $chefEquipe, $prHpNord, $tHpNord, $prHpSud,$tHpSud, $prMpNord, $tMpNord ,$prMpSud, $tMpSud  ));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());

