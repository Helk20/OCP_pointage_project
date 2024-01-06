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
    <div class="card">
        <div class="card-header " style="background-color:#F2F5C8">
            <p class="h3 text-center text-uppercase font-weight-bold pt-2" style="color:#333c3e; font-family:Comic Sans MS;">Historique de pointage</p>
        </div>
        <div class="card-body bg-white">
            <form>
                <fieldset>
                    <div class="form-group">
                        <label for="select">Employé :  </label>
                        <select class="custom-select" id="select">
                        </select>
                    </div>
                    <div class="card bg-white">
                        <div class="card-header pt-3">
                            <div class="checkbox">
                                <label class="switch switch-3d switch-secondary mr-3">
                                    <input class="switch-input" name="remember" id="check" type="checkbox" value="Entre deux dates">
                                    <span class="switch-label" style="border-color: rgba(0, 0, 0, 0.1); background-color: rgba(0, 0, 0, 0.008);"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <span class="">Entre deux dates</span>
                            </div>
                        </div>
                        <div class="card-body d-none" id="cardDate">
                            <div class="form-group">
                                <label for="dated">Date debut :  </label>
                                <input class="form-control" type="date" id="dated" disabled>
                            </div>
                            <div class="form-group">
                                <label for="dated">Date fin :  </label>
                                <input class="form-control" type="date" id="datef" disabled>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
            <hr>
            <div class="row table-responsive m-auto rounded">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-uppercase font-weight-bold " style="background-color:#A6CF98">
                            <th scope="col">Date</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Nombre d'heures</th>
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
<script src="script/historique.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
