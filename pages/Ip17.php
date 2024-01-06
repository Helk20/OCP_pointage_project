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
            <p class="h2 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">20IP17</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="code">Date : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="date" id="date" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Operateur : </label>
                    <input class="form-control" type="text" id="operateur" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Chef d'equipe : </label>
                    <input class="form-control" type="text" id="chef" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Heure : </label>
                    <input class="form-control" type="time" id="hr" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Amperage : </label>
                    <input class="form-control" type="text" id="amp" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pression aspiration : </label>
                    <input class="form-control" type="text" id="pAspi" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Pression Refoulement : </label>
                    <input class="form-control" type="text" id="pRefou" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Pression filtre : </label>
                    <input class="form-control" type="text" id="pFil" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Niveau huile : </label>
                    <input class="form-control" type="text" id="nivH" required>
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
                    <tr class="text-uppercase " style="background-color:#ebe6b4">
                            <th scope="col" rowspan="2">Id</th>
                            <th scope="col" rowspan="2">Date</th>
                            <th scope="col" rowspan="2">Operateur</th>
                            <th scope="col" rowspan="2">Chef d'equipe</th>
                            <th scope="col" rowspan="2">Heure</th>
                            <th scope="col">Amperage</th>
                            <th scope="col">Pression aspiration</th>
                            <th scope="col">Pression refoulement</th>
                            <th scope="col">Pression filtre</th>
                            <th scope="col">Niveau huile</th>
                            <th scope="col" rowspan="2">Supprimer</th>
                            <th scope="col" rowspan="2">Modifier</th>
                        </tr>
                        <tr class="text-uppercase" style="background-color:#A6CF98">
                            <th scope="col">1a1,5 bar</th>
                            <th scope="col"><0,15bar</th>
                            <th scope="col">>7bar</th>
                            <th scope="col">80%</th>
                            <th scope="col">140A</th>
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
<script src="script/ip17.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
