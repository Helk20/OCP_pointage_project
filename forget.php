<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title Page-->
        <title>Gestion pointage</title>

        <!-- Fontfaces CSS-->
        <link href="style/font-face.css" rel="stylesheet" media="all">
        <link href="vedor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vedor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vedor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vedor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- vedor CSS-->
        <link href="vedor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vedor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vedor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vedor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vedor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vedor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vedor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="style/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="https://www.ocpgroup.ma/">
                                    
                                <img src="img/logo.png">
                                    <span class="h2 text-dark">OCP Jorf Lasfar</span>
                                </a>
                            </div>
                            <div class="login-form">
                              <?php
                                    if(isset($_GET['success']))
                                        if($_GET['success']=="ok")
                                            echo '<div class="alert alert-success" role="alert">Mot de passe été envoyé à votre email</div>';
                                    if(isset($_GET['error'])){
                                        if($_GET['error']=="invalid")
                                            echo '<div class="alert alert-danger" role="alert">Invalide email</div>';
                                        if($_GET['error']=="vide")
                                            echo '<div class="alert alert-danger" role="alert">Champ email est vide</div>';
                                    }
                               ?>
                                <form action="controleur/forgetPassword.php" method="POST" id="checkLogin" >
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input class="au-input au-input--full" type="email" id="email" name="email" placeholder="Email">
                                    </div>
                                    <button id="connect" name="btn_submit" class="btn au-btn--block btn-outline-success" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="vedor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vedor/bootstrap-4.1/popper.min.js"></script>
        <script src="vedor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- vedor JS       -->
        <script src="vedor/slick/slick.min.js">
        </script>
        <script src="vedor/wow/wow.min.js"></script>
        <script src="vedor/animsition/animsition.min.js"></script>
        <script src="vedor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vedor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vedor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vedor/circle-progress/circle-progress.min.js"></script>
        <script src="vedor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vedor/chartjs/Chart.bundle.min.js"></script>
        <script src="vedor/select2/select2.min.js"></script>


        <!-- Main JS-->
        <script src="js/main.js"></script>
        <script src="script/main.js" type="text/javascript"></script>
    </body>

</html>
