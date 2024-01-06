<?php
if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
  if(isset($_SESSION['employe'])){

 ?>

 <html>
<head>
<style>
table {
  border: 1px solid ;
}
th, td {
  border: 2px solid;
  width:100px;
}

</style>
</head>
<body>
<div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header " style="background-color:#F2F5C8">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">Gestion des GTA1</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="code">Date : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="date" id="date" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="poste">Poste : </label>
                    <select id="poste" class="custom-select" >
                    <option value="p1" selected>p1</option>
                    <option value="p2" >p2</option>
                    <option value="p3" >p3</option>
                    </select>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">heure : </label>
                    <input class="form-control" type="time" id="heure" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Operateur : </label>
                    <input class="form-control" type="text" id="operateur" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Chef d'equipe : </label>
                    <input class="form-control" type="text" id="chefEquipe" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">T° entrée Eau de mer : </label>
                    <input class="form-control" type="text" id="tEMer" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">T° Sortie Eau de mer G : </label>
                    <input class="form-control" type="text" id="tSMerG" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">T° Sortie Eau de mer D : </label>
                    <input class="form-control" type="text" id="tSMerD" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">% ouv. vanne S.E.de mer G : </label>
                    <input class="form-control" type="text" id="ouvMer1" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">% ouv. vanne S.E.de mer D : </label>
                    <input class="form-control" type="text" id="ouvMer2" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Filtre en sce : </label>
                    <input class="form-control" type="text" id="filtreSce" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">ΔP huile : </label>
                    <input class="form-control" type="text" id="pHuile" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Garniture HP : </label>
                    <input class="form-control" type="text" id="granitH" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">GarnitureBP : </label>
                    <input class="form-control" type="text" id="granitB" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">T fond BP (L) : </label>
                    <input class="form-control" type="text" id="tFond" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Niv caisse à huile : </label>
                    <input class="form-control" type="text" id="nivHuile" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Asp Air ppe à vide 20AC01 : </label>
                    <input class="form-control" type="text" id="prVide20AC01" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Asp Air ppe à vide 20KC01 : </label>
                    <input class="form-control" type="text" id="prVide20KC01" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Amp. Pp à vide 20AC01 : </label>
                    <input class="form-control" type="text" id="ampVide20AC01" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Amp. Pp à vide 20KC01 : </label>
                    <input class="form-control" type="text" id="ampVide20KC01" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Aspiration 20AP01: </label>
                    <input class="form-control" type="text" id="prAspi20AP01" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Aspiration 20KP01: </label>
                    <input class="form-control" type="text" id="prAspi20KP01" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Refoulement 20AP01: </label>
                    <input class="form-control" type="text" id="prRefoulement20AP01" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Refoulement 20KP01 : </label>
                    <input class="form-control" type="text" id="prRefoulement20KP01" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-success mt-3 mb-3" id="btn">Ajouter</button>
                </div>
            </div>
            <div class="row table-responsive m-auto rounded">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-uppercase " style="background-color:#A6CF98">
                            <th scope="col">Id</th>
                            <th scope="col">Date</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Heure</th>
                            <th scope="col">Operateur</th>
                            <th scope="col">Chef d'equipe</th>
                            <th scope="col">T° entrée-Eau-de-mer</th>
                            <th scope="col">T° Sortie-Eau-de-mer G</th>
                            <th scope="col">T° Sortie-Eau-de-mer D</th>
                            <th scope="col">% ouv. vanne S.E.de mer G</th>
                            <th scope="col">% ouv. vanne S.E.de mer D</th>
                            <th scope="col">Filtre en sce</th>
                            <th scope="col">ΔP huile</th>
                            <th scope="col">Garniture HP</th>
                            <th scope="col">Garniture BP</th>
                            <th scope="col">T fond BP (L)</th>
                            <th scope="col">Niv caisse à huile</th>
                            <th scope="col">Pr. Asp Air ppe à vide 20AC01</th>
                            <th scope="col">Pr. Asp Air ppe à vide 20KC01</th>
                            <th scope="col">Amp. Pp à vide 20AC01</th>
                            <th scope="col">Amp. Pp à vide 20KC01</th>
                            <th scope="col">Pr. Aspiration 20AP01</th>
                            <th scope="col">Pr. Aspiration 20KP01</th>
                            <th scope="col">Pr. Refoulement 20AP01</th>
                            <th scope="col">Pr. Refoulement 20KP01</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col">Modifier</th>
                        </tr>
                    </thead>
                    <tbody id="table-content">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="script/gta.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
