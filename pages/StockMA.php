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
            <p class="h2 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">Gestion des Stocks MA</p>
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
                    <label for="libelle">Operateur : </label>
                    <input class="form-control" type="text" id="operateur" required>
                </div>
                <div class="col-sm-6 mb-2">
                </div>
                <label class="col-sm-6 mb-2" style="font-size:25px; font-weight: bold; font-family: serif;">Quantités preparées : </label>
                <div class="col-sm-6 mb-2">
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">QCortrol+) Litre) : </label>
                    <input class="form-control" type="text" id="quniteCortrol" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">BIOXIN 60 : </label>
                    <input class="form-control" type="text" id="quniteBioxin" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Na3PO4 Kg : </label>
                    <input class="form-control" type="text" id="quniteNa3PO4"  >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">NH3 Litre : </label>
                    <input class="form-control" type="text" id="quniteNH3"  >
                </div>
                <label class="col-sm-6 mb-2" style="font-size:25px; font-weight: bold; font-family: serif;">Stocks : </label>
                <div class="col-sm-6 mb-2">
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Cortrol Fut : </label>
                    <input class="form-control" type="text" id="stockCortrol"  >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Eliminox : </label>
                    <input class="form-control" type="text" id="stockEliminox" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">BIOXIN 60 : </label>
                    <input class="form-control" type="text" id="stockBioxin" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">NH3 Fut : </label>
                    <input class="form-control" type="text" id="stockNH3" >
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">NBR fûts vide : </label>
                    <input class="form-control" type="text" id="stockNBR">
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Na3PO4 : </label>
                    <input class="form-control" type="text" id="stockNa3PO4" >
                </div>
                <label class="col-sm-6 mb-2" style="font-size:25px; font-weight: bold; font-family: serif;">Combustile en % : </label>
                <div class="col-sm-6 mb-2">
                </div>
                <div class="col-sm-6 mb-2">
                <label for="libelle"> Combustile GO : </label>
                    <input class="form-control" type="text" id="combustileGO"  >
                </div>
                <div class="col-sm-6 mb-2">
                <label for="libelle"> Combustile FO : </label>
                    <input class="form-control" type="text" id="combustileFO"  >
                </div>
                
                <div class="col-sm-6 mb-2">
                    <label for="libelle"> Injection Na3PO4 chaudiere CHAUD1 : </label><br>
                    <select id="injectionChaud1" class="custom-select" >
                    <option value="oui" selected>oui</option>
                    <option value="non" >non</option>
                    </select>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle"> Injection Na3PO4 chaudiere CHAUD2 : </label><br>
                    <select id="injectionChaud2" class="custom-select" >
                    <option value="oui" selected>oui</option>
                    <option value="non" >non</option>
                    </select>
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
                        <tr class="text-uppercase" style="background-color:#ebe6b4">
                            <th scope="col" rowspan="2">Id</th>
                            <th scope="col"rowspan="2">Date</th>
                            <th scope="col"rowspan="2">Poste</th>
                            <th scope="col"rowspan="2">Operateur</th>
                            <th scope="col" colspan="4" style="text-align:center">Quantités preparées</th>
                            <th scope="col" colspan="6" style="text-align:center">Stocks</th>
                            <th scope="col" colspan="2" style="text-align:center">Combustile</th>
                            <th scope="col" colspan="2" style="text-align:center">Injection Na3PO4 chaudiere</th>
                            <th scope="col" rowspan="2">Supprimer</th>
                            <th scope="col" rowspan="2">Modifier</th>
                        </tr>
                        <tr class="text-uppercase " style="background-color:#A6CF98">
                            <th scope="col">Cortrol+) Litre)</th>
                            <th scope="col">BIOXIN 60</th>
                            <th scope="col">Na3PO4(Kg)</th>
                            <th scope="col">NH3(Litre)</th>
                            <th scope="col">Cortrol(Fut)</th>
                            <th scope="col">Eliminox</th>
                            <th scope="col">BIOXIN 60</th>
                            <th scope="col">NH3(Fut)</th>
                            <th scope="col">NBR fûts vide</th>
                            <th scope="col">Na3PO4</th>
                            <th scope="col">GO (%)</th>
                            <th scope="col">FO (%)</th>
                            <th scope="col">CHAUD 1</th>
                            <th scope="col">CHAUD 2</th>
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
<script src="script/stockma.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
