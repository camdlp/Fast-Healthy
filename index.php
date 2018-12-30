<!DOCTYPE html>
<!--
TFG Carlos Abia. Universidad Francisco de Vitoria 2019.
Modelo seguido: https://magoz.is/
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/basics.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">        

        <title>Fast & Healthy®</title>

    </head>
    <body>

        <!-- NAVBAR -->
        <nav class="navbar-material white no-shadows">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo left"><img class="responsive-img" id="logo" style="margin: 10%;" src="img/icon-color.png"/></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons red-text">menu</i></a>
                <ul class="right hide-on-med-and-down">                    
                    <li><a href="#"><i class="material-icons red-text">account_circle</i>Cuenta</a></li>
                    <li><a class="menu" href="menu.php"><i class="material-icons red-text">restaurant_menu</i>Menú</a></li>
                    <li><a href="#"><i class="material-icons red-text">shopping_cart</i>Cesta</a></li>
                </ul>
            </div>



        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="img/icon-color.png" class="responsive-img" >
                    </div>
                    <a href="#user"><img class="circle white" src="img/icon-color.png" class="responsive-img"></a>
                    <a href="#name"><span class="grey-text" id="nickSideBar">Acceder</span></a>
                    <a href="#email"><span class="grey-text" id="emailSideBar">Registrarse</span></a>
                </div>
            </li>          
            <li><a href=""><i class="material-icons red-text">account_circle</i>Cuenta</a></li>
            <li><a class="menu" href="menu.php"><i class="material-icons red-text">restaurant_menu</i>Menú</a></li>
            <li><a href=""><i class="material-icons red-text">shopping_cart</i>Cesta</a></li>
        </ul>
        <!-- END NAVBAR -->


        <!-- CONTENIDO -->
        <div id="contenido">
            
            <br><br><a href="loginDesign.php">Login</a>
        </div>
        <!-- END CONTENIDO -->        

        <!-- FOOTER -->
        <footer class="center foot">
            <!-- REDES -->
            <div class="container social">
                <div class="row">

                    <div class="col s12 center">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <!-- END REDES -->
            <p style="color: #88BF57;">Fast & Healthy® 2018</p>
        </footer>
        <!-- END FOOTER -->




        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <!-- END CARGA DE JAVASCRIPTS -->

    </body>
</html>
