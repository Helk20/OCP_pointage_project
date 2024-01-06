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
  border: 1px solid;
}
td {
  width:1000px;
}

</style>
</head>
<body>
<div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header" style="background-color:#F2F5C8">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2"  style="color:#333c3e; font-family:Comic Sans MS;">Gestion des analyses CH</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="code">Date : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="date" id="date" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label>CH : </label>
                    <select class="form-control" id="ch" required>
                    <option value="ch1" selected>ch1</option>
                    <option value="ch2">ch2</option>
                    </select>
                </div>
                <label class="col-sm-6 mb-2" style="font-size:25px; font-weight: bold; font-family: serif; ">Labo : </label>
                <div class="col-sm-6 mb-2">
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">pH : </label>
                    <input class="form-control" type="text" id="laboPh" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">cd : </label>
                    <input class="form-control" type="text" id="laboCd" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">TAC : </label>
                    <input class="form-control" type="text" id="laboTac" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Fe : </label>
                    <input class="form-control" type="text" id="laboFe" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">TH : </label>
                    <input class="form-control" type="text" id="laboTh" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">O2 : </label>
                    <input class="form-control" type="text" id="laboO2" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">P2O5 : </label>
                    <input class="form-control" type="text" id="laboP2O5" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">N2H4 : </label>
                    <input class="form-control" type="text" id="laboN2H4" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Cl- : </label>
                    <input class="form-control" type="text" id="laboCi" required>
                </div>
                <div class="col-sm-6 mb-2">
                </div>
                
                <label class="col-sm-6 mb-2" style="font-size:25px; font-weight: bold; font-family: serif;">Centrale : </label>
                <div class="col-sm-6 mb-2">
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">pH p1: </label>
                    <input class="form-control" type="text" id="centPhP1" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">pH p2: </label>
                    <input class="form-control" type="text" id="centPhP2" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">pH p3: </label>
                    <input class="form-control" type="text" id="centPhP3" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Cd p1 : </label>
                    <input class="form-control" type="text" id="centCd1" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Cd p2 : </label>
                    <input class="form-control" type="text" id="centCd2" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Cd p3 : </label>
                    <input class="form-control" type="text" id="centCd3" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="code">Injection p1: </label>
                    <input class="form-control" type="text" id="centInjectP1" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Injection p2 : </label>
                    <input class="form-control" type="text" id="centInjectP2" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Injection p3 : </label>
                    <input class="form-control" type="text" id="centInjectP3" required>
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
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col" colspan="9" style="text-align:center">LABO</th>
                            <th scope="col" colspan="9" style="text-align:center">Centrale</th>
                            
                        </tr>
                        <tr class="text-uppercase " style="background-color:#bfc69b">
                            <th scope="col">Id</th>
                            <th scope="col">date</th>
                            <th scope="col"></th>
                            <th scope="col">pH</th>
                            <th scope="col">cd</th>
                            <th scope="col">TAC</th>
                            <th scope="col">Fe</th>
                            <th scope="col">TH</th>
                            <th scope="col">O2</th>
                            <th scope="col">P2O5</th>
                            <th scope="col">N2H4</th>
                            <th scope="col">Cl-</th>
                            <th scope="col">pH(P1)</th>
                            <th scope="col">pH(P2)</th>
                            <th scope="col">pH(P3)</th>
                            <th scope="col">Cd(P1)</th>
                            <th scope="col">Cd(P2)</th>
                            <th scope="col">Cd(P3)</th>
                            <th scope="col">injection(P1)</th>
                            <th scope="col">injection(P2)</th>
                            <th scope="col">injection(P3)</th>
                            
                        </tr>
                        <tr class="text-uppercase" style="background-color:#A6CF98; height:15px; ">
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">10-11</th>
                            <th scope="col">100-200</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">50-80</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col" colspan="3" style="text-align:center">10-11</th>
                            <th scope="col" colspan="3" style="text-align:center">100-200</th>
                            <th scope="col" colspan="3" style="text-align:center"></th>
                            <th scope="col" rowspan="3">Supprimer</th>
                            <th scope="col" rowspan="3">Modifier</th>
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
<script src="script/analyseCh.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
