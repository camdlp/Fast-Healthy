<!DOCTYPE html>
<?php
//Comprueba si la sesión está empezada.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Comprueba si la sesión está empezada.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//Si la variable de sesión no existe lanza el javascript del login
if (!isset($_SESSION['nombreUsuario'])) {
    echo "<script type='text/javascript'>location.href='https://carlosabiamer.000webhostapp.com/loginDesign.php'</script>";
}
?>
<!--
TFG Carlos Abia. Universidad Francisco de Vitoria 2019.
Modelo seguido: https://magoz.is/
Logo made by SmashIcons from www.flaticon.com 
-->
<html class="fondo">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" type="image/png" href="img/icon-color.png"/>

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
        <nav class="navbar-material transparent no-shadows">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo left"><img class="responsive-img flip-scale-up-hor" id="logo" style="margin: 10%;" src="img/icon-color.png"/></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons red-text rotate-in-center">menu</i></a>
                <ul class="right hide-on-med-and-down">                    
                    <li><a href="#"><i class="material-icons red-text">account_circle</i>Cuenta</a></li>
                    <li><a class="menu" href="menu.php"><i class="material-icons red-text">restaurant_menu</i>Menú</a></li>
                    <li><a href="logout.php"><i class="material-icons red-text">exit_to_app</i>Salir de la cuenta</a></li>
                    
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
                    <a href="#name"><span class="grey-text" id="nickSideBar"><?php echo $_SESSION['nombreUsuario']; ?></span></a>
                    
                </div>
            </li>          
            <li><a href=""><i class="material-icons red-text">account_circle</i>Cuenta</a></li>
            <li><a href="menu.php"><i class="material-icons red-text">restaurant_menu</i>Menú</a></li>
            <li><a href="logout.php"><i class="material-icons red-text">exit_to_app</i>Salir de la cuenta</a></li>
            
        </ul>
        <!-- END NAVBAR -->


        <!-- CONTENIDO -->
        <div id="contenido">



            <div class="row center">
                <h4 class="grey-text text-darken-3">Fast & Healthy</h4>
                <h5 class="grey-text text-darken-2">Tu cadena de comida rápida y saludable.</h5>
                <a href="menu.php"class="btn-large red comienza">
                    ¡COMIENZA TU PEDIDO YA!
                </a>

            </div>

        </div>
        <!-- END CONTENIDO -->        

        <!-- FOOTER -->
        <footer class="foot rotado">
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
            <!--<p style="color: #88BF57;">Fast & Healthy® 2019</p>-->
        </footer>
        <!-- END FOOTER -->




        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <script type="text/javascript">$('html').addClass('fondo');</script>
        <!-- END CARGA DE JAVASCRIPTS -->
    </body>

</html>
