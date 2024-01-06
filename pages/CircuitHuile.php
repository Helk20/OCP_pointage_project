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
        <div class="card-header" style="background-color:#F2F5C8">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">Gestion Circuit Huile</p>
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
                    <label for="libelle">Bac Epurée : </label>
                    <input class="form-control" type="text" id="bac" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Bac N epurée : </label>
                    <input class="form-control" type="text" id="bacN" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Etat Centrifugeuse Gta1 : </label>
                    <input class="form-control" type="text" id="etatGta1" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Etat Centrifugeuse Gta2 : </label>
                    <input class="form-control" type="text" id="etatGta2" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Etat Centrifugeuse Gta3 : </label>
                    <input class="form-control" type="text" id="etatGta3" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Nbre filtres nettoyés : </label>
                    <input class="form-control" type="text" id="nbrFiltre" >
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
                        <tr class="text-uppercase" style="background-color:#A6CF98">
                            <th scope="col">Id</th>
                            <th scope="col">Date</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Heure</th>
                            <th scope="col">Operateur</th>
                            <th scope="col">Chef d'equipe</th>
                            <th scope="col">Bac Epurée</th>
                            <th scope="col">Bac N epurée</th>
                            <th scope="col">Etat Centrifugeuse Gta1</th>
                            <th scope="col">Etat Centrifugeuse Gta2</th>
                            <th scope="col">Etat Centrifugeuse Gta3</th>
                            <th scope="col">Nbre filtres nettoyés</th>
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
<script src="script/circuitHuile.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
