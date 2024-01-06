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
        <div class="card-header" style=" background-color:#F2F5C8 ">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">Gestion des rapports SDM</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="date">Date : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="date" id="date" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Poste : </label>
                    <select id="poste" class="custom-select" required >
                        <option value="p1" selected>P1</option>
                        <option value="p2">P2</option>
                        <option value="p3">P3</option>

                    </select>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Operateur : </label>
                    <input class="form-control" type="text" id="operateur" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Equipement : </label>
                    <input class="form-control" type="text" id="equipement" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="activite">activite : </label>
                    <textarea class="form-control" type="text" id="activite" required></textarea>
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
                            <th scope="col">Operateur</th>
                            <th scope="col">Equipement</th>
                            <th scope="col">Activite</th>
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
<script src="script/rapportsdm.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
