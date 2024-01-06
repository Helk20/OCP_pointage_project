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
            <p class="h2 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">Gestion des analyses chimiques</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="code">Date : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="date" id="date" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">operateur : </label>
                    <input class="form-control" type="text" id="operateur" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Chef d'equipe : </label>
                    <input class="form-control" type="text" id="chefEquipe" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">heure : </label>
                    <input class="form-control" type="time" id="heure" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">L3 : </label>
                    <input class="form-control" type="text" id="l3" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">L4 : </label>
                    <input class="form-control" type="text" id="l4" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">L5 : </label>
                    <input class="form-control" type="text" id="l5" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">L6 : </label>
                    <input class="form-control" type="text" id="l6" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">L7 : </label>
                    <input class="form-control" type="text" id="l7" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">L8 : </label>
                    <input class="form-control" type="text" id="l8" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">L9 : </label>
                    <input class="form-control" type="text" id="l9" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">L10: </label>
                    <input class="form-control" type="text" id="l10" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">L11: </label>
                    <input class="form-control" type="text" id="l11" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">L12: </label>
                    <input class="form-control" type="text" id="l12" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">L13 : </label>
                    <input class="form-control" type="text" id="l13" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">L14 : </label>
                    <input class="form-control" type="text" id="l14" required>
                </div>
                <div class="col-sm-6 mb-2" >
                    <label for="libelle">L15 : </label>
                    <input class="form-control" type="text" id="l15" required>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-success mt-3 mb-3" id="btn">Ajouter</button>
                </div>
            </div>
            <div class="row table-responsive m-auto rounded">
                <table class="table table-hover" >
                    <thead>
                        <tr class="text-uppercase" style="background-color:#A6CF98">
                            <th scope="col">Id</th>
                            <th scope="col">Date</th>
                            <th scope="col">Operateur</th>
                            <th scope="col" >Chef d'equipe</th>
                            <th scope="col">Heure</th>
                            <th scope="col">L3</th>
                            <th scope="col">L4</th>
                            <th scope="col">L5</th>
                            <th scope="col">L6</th>
                            <th scope="col">L7</th>
                            <th scope="col">L8</th>
                            <th scope="col">L9</th>
                            <th scope="col">L10</th>
                            <th scope="col">L11</th>
                            <th scope="col">L12</th>
                            <th scope="col">L13</th>
                            <th scope="col">L14</th>
                            <th scope="col">L15</th>
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
<script src="script/analyseChimique.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
