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
            <p class="h2 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">Gta Demarrage</p>
        </div>
        <div class="card-body container-fluid " >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="code">Date : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="date" id="date" >
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
                    <label for="code">Heure : </label>
                    <input class="form-control" type="time" id="heure" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Agent : </label>
                    <input class="form-control" type="text" id="agent" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">% Vanne adm : </label>
                    <input class="form-control" type="text" id="admVanne" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">T adm : </label>
                    <input class="form-control" type="text" id="admT" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Pr adm : </label>
                    <input class="form-control" type="text" id="admPr" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">% Vanne ST : </label>
                    <input class="form-control" type="text" id="STVanne" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">T ST : </label>
                    <input class="form-control" type="text" id="STT" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Pr ST : </label>
                    <input class="form-control" type="text" id="STPr" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Vitesse : </label>
                    <input class="form-control" type="text" id="vitesse" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">T corps Sup : </label>
                    <input class="form-control" type="text" id="TCorpsSup" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">T corps Inf : </label>
                    <input class="form-control" type="text" id="TCorpsInf" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">T Fond BP : </label>
                    <input class="form-control" type="text" id="TfondBp" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Dill Diff : </label>
                    <input class="form-control" type="text" id="DilDiff" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">% Ouv Sppe HP/BP : </label>
                    <input class="form-control" type="text" id="OuvSppeHpBp" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Vide (mbar) : </label>
                    <input class="form-control" type="text" id="videBar" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">% Eau de mer : </label>
                    <input class="form-control" type="text" id="eauMer" >
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
                    <tr class="text-uppercase " style="background-color:#ebe6b4">ebe6b4
                    <th scope="col" rowspan="2">Id</th>
                            <th scope="col" rowspan="2">Date</th>
                            <th scope="col" rowspan="2">Poste</th>
                            <th scope="col" rowspan="2">Heure</th>
                            <th scope="col" rowspan="2">Agent</th>
                            <th scope="col" colspan="3" style="text-align:center">Adm</th>
                            <th scope="col" colspan="3" style="text-align:center">ST</th>
                            <th scope="col" rowspan="2">Vitesse</th>
                            <th scope="col" rowspan="2">Temp corps sup</th>
                            <th scope="col" rowspan="2">T corps inf</th>
                            <th scope="col" rowspan="2">T fond BP</th>
                            <th scope="col" rowspan="2">Dill Diff</th>
                            <th scope="col" rowspan="2">% Ouv Sppe HP/BP</th>
                            <th scope="col" rowspan="2">Vide(mbar)</th>
                            <th scope="col" rowspan="2">%Eau de Mer</th>
                            <th scope="col" rowspan="2">Supprimer</th>
                            <th scope="col" rowspan="2">Modifier</th>
                        </tr>
                        <tr class="text-uppercase " style="background-color:#A6CF98">
                            <th scope="col">% Vanne</th>
                            <th scope="col">Temperature</th>
                            <th scope="col">Pr </th>
                            <th scope="col">% Vanne</th>
                            <th scope="col">Temperature</th>
                            <th scope="col">Pr </th>
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
<script src="script/GtaDemarrage.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
