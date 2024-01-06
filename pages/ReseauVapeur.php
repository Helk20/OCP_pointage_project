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
            <p class="h2 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">Gestion de Reseau Vapeur</p>
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
                    <label for="libelle">Pr. Hp NORD : </label>
                    <input class="form-control" type="text" id="prHpNord" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Temp. Hp NORD : </label>
                    <input class="form-control" type="text" id="tHpNord" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Hp SUD : </label>
                    <input class="form-control" type="text" id="prHpSud" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Temp. Hp SUD : </label>
                    <input class="form-control" type="text" id="tHpSud" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Mp NORD : </label>
                    <input class="form-control" type="text" id="prMpNord" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Temp. Mp NORD : </label>
                    <input class="form-control" type="text" id="tMpNord	" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr. Mp SUD : </label>
                    <input class="form-control" type="text" id="prMpSud" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Temp. Mp SUD : </label>
                    <input class="form-control" type="text" id="tMpSud" required>
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
                            <th scope="col">Pr. Hp NORD</th>
                            <th scope="col">Temp. Hp NORD</th>
                            <th scope="col">Pr. Hp SUD</th>
                            <th scope="col">Temp. Hp SUD</th>
                            <th scope="col">Pr. Mp NORD</th>
                            <th scope="col">Temp. Mp NORD</th>
                            <th scope="col">Pr. Mp SUD</th>
                            <th scope="col">Temp. Mp SUD</th>
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
<script src="script/reseauVapeur.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
