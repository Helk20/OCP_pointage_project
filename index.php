<?php
if(session_status() != PHP_SESSION_ACTIVE) {
session_start();
}
if ($_SESSION["employe"]) {
    if ($_SESSION['role'] == "Admin") {
?>
<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <title>Gestion Pointage</title>

    <script src='vedor/jquery-3.2.1.min.js'></script>
    <script src='vedor/bootstrap-4.1/popper.min.js'></script>
    <script src='vedor/bootstrap-4.1/bootstrap.min.js'></script>
    <link rel='stylesheet' href='vedor/bootstrap-4.1/bootstrap.min.css'>
    <link rel='stylesheet' href='vedor/font-awesome-5/css/fontawesome-all.min.css'>
    <link href="vedor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/theme.css">
    <link rel="stylesheet" href="style/main.css">

    
</head>
<body>
    <div class="page-wrapper chiller-theme toggled"  >
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper" style="background-color:#333c3e">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="./" class="h5 pt-2">OCP Jorf Lasfar</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded"
                            src="img/<?php if (isset($_SESSION['photo'])) {
                                        echo $_SESSION['photo'];
                                        } else
                                            echo 'no-photo.png'
                                        ?>"
                            alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong><?php
                                        if (isset($_SESSION['nom'])) {
                                            echo $_SESSION['nom'];
                                        }
                                    ?></strong>
                        </span>
                        <span class="user-role"><?php
                                        if (isset($_SESSION['role'])) {
                                            echo $_SESSION['role'];
                                        }
                                    ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->

                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span></span>
                        </li>
                       
                        <li>
                            <a href="./index.php?p=employe" ><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Employés</a>
                        </li>
                        <li>
                            <a href="./index.php?p=pointage"><i class="zmdi zmdi-hc-1x zmdi-check"></i>Pointages</a>
                        </li>
                        <li>
                            <a href="./index.php?p=rapportsdp"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Rapports SDP</a>
                        </li>
                        <li>
                            <a href="./index.php?p=rapportsdm"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Rapports SDM</a>
                        </li>
                        <li>
                            <a href="./index.php?p=stockma"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Stocks MA</a>
                        </li>
                        <li>
                            <a href="./index.php?p=prbexploitation"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Problemes Exploitation</a>
                        </li>
                        <li>
                            <a href="./index.php?p=gtademarrage"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Gta Demarrage</a>
                        </li>
                        <li>
                            <a href="./index.php?p=analyseCh"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Analyse CH</a>
                        </li>
                        <li class="header-menu">
                            <span>Relves SDM</span>
                        </li>
                        <li>
                            <a href="./index.php?p=gta"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>GTA1</a>
                        </li>
                        <li>
                            <a href="./index.php?p=gtaa"><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>GTA2</a>
                        </li>
                        <li>
                            <a href="./index.php?p=gtaaa"><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>GTA3</a>
                        </li>
                        <li>
                            <a href="./index.php?p=reseauVapeur"><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Reseau Vapeur</a>
                        </li>
                        <li>
                            <a href="./index.php?p=circuitHuile"><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Circuit Huile</a>
                        </li>
                        <li class="header-menu">
                            <span>Relves SDP</span>
                        </li>
                        <li>
                            <a href="./index.php?p=analyseChimique"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Analyse Chimique</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip1"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP01</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip2"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP02</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip3"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP03</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip6"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP06</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip7"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP07</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip8"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP08</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip13"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP13</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip14"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP14</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip15"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP15</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip16"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP16</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ip17"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IP17</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ie1"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IE01</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ie2"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IE02</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ie6"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IE06</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ie7"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IE07</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ie8"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IE08</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ie9"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IE09</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ie10"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IE10</a>
                        </li>
                        <li>
                            <a href="./index.php?p=ie11"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>20IE11</a>
                        </li>
          
                        
                        <li class="header-menu">
                            <span>Statistique</span>
                        </li>
                        <li>
                            <a href="./index.php?p=statistiques"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Statistiques</a>
                        </li>
                        <li>
                            <a href="./index.php?p=historique"><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Historique</a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="./logout.php">
                    <i class="fa fa-power-off"></i>
                    <span>Déconnexion</span>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid" id="main-content">

                <?php
                    if( isset($_GET['p']) && $_GET['p'] != ""){
                        if($_GET['p']=="departement"){
                            include_once './pages/Departement.php';
                        }elseif ($_GET['p']=="employe"){
                            include_once './pages/Employe.php';
                        }elseif($_GET['p']=="fonction"){
                            include_once './pages/Fonction.php';
                        }elseif($_GET['p']=="pointage"){
                            include_once './pages/Pointage.php';
                        }elseif($_GET['p']=="rapportsdp"){
                            include_once './pages/rapportsdp.php';
                        }elseif($_GET['p']=="rapportsdm"){
                            include_once './pages/rapportsdm.php';
                        }elseif($_GET['p']=="stockma"){
                            include_once './pages/StockMA.php';
                        }elseif($_GET['p']=="prbexploitation"){
                            include_once './pages/ProbExploitation.php';
                        }elseif($_GET['p']=="gtademarrage"){
                            include_once './pages/GtaDemarrage.php';
                        }elseif($_GET['p']=="analyseCh"){
                            include_once './pages/AnalyseCh.php';
                        }elseif($_GET['p']=="gta"){
                            include_once './pages/Gta.php';
                        }elseif($_GET['p']=="gtaa"){
                            include_once './pages/Gtaa.php';
                        }elseif($_GET['p']=="gtaaa"){
                            include_once './pages/Gtaaa.php';
                        }elseif($_GET['p']=="reseauVapeur"){
                            include_once './pages/ReseauVapeur.php';
                        }elseif($_GET['p']=="circuitHuile"){
                            include_once './pages/CircuitHuile.php';
                        }elseif($_GET['p']=="analyseChimique"){
                            include_once './pages/AnalyseChimique.php';
                        }elseif($_GET['p']=="ip1"){
                            include_once './pages/Ip1.php';
                        }elseif($_GET['p']=="ip2"){
                            include_once './pages/Ip2.php';
                        }elseif($_GET['p']=="ip3"){
                            include_once './pages/Ip3.php';
                        }elseif($_GET['p']=="ip6"){
                            include_once './pages/Ip6.php';
                        }elseif($_GET['p']=="ip7"){
                            include_once './pages/Ip7.php';
                        }elseif($_GET['p']=="ip8"){
                            include_once './pages/Ip8.php';
                        }elseif($_GET['p']=="ip13"){
                            include_once './pages/Ip13.php';
                        }elseif($_GET['p']=="ip14"){
                            include_once './pages/Ip14.php';
                        }elseif($_GET['p']=="ip15"){
                            include_once './pages/Ip15.php';
                        }elseif($_GET['p']=="ip16"){
                            include_once './pages/Ip16.php';
                        }elseif($_GET['p']=="ip17"){
                            include_once './pages/Ip17.php';
                        }elseif($_GET['p']=="ie1"){
                            include_once './pages/Ie1.php';
                        }elseif($_GET['p']=="ie2"){
                            include_once './pages/Ie2.php';
                        }elseif($_GET['p']=="ie6"){
                            include_once './pages/Ie6.php';
                        }elseif($_GET['p']=="ie7"){
                            include_once './pages/Ie7.php';
                        }elseif($_GET['p']=="ie8"){
                            include_once './pages/Ie8.php';
                        }elseif($_GET['p']=="ie9"){
                            include_once './pages/Ie9.php';
                        }elseif($_GET['p']=="ie10"){
                            include_once './pages/Ie10.php';
                        }elseif($_GET['p']=="ie11"){
                            include_once './pages/Ie11.php';
                        }elseif($_GET['p']=="historique"){
                            include_once './pages/historique.php';
                        }elseif($_GET['p']=="statistiques"){
                            include_once './pages/statistiques.php';
                        }
                    }else{
                        include_once './pages/statistiques.php';
                    }
                ?>
            </div>

        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="script/index.js"></script>

</body>
</html>
<?php
    } else {
        include_once './pages/HistoriqueSimple.php';
    }
} else {
    header('Location:./login.php');
}
?>