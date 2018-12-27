<!DOCTYPE html>
<!--
Colores
Header y Footer: #FF1744 red accent-3
Menu: #64DD17  light-green accent-4

-->
<html>
    <head>
        <meta charset="UTF-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link href="css/basics.css" rel="stylesheet" type="text/css"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Fast n' Healthy</title>

    </head>
    <body>

        <!-- NAVBAR -->
        <nav class="navbar-material red accent-2">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo center"><img class="responsive-img" id="logo" src="img/icon-color.png"/></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">                    
                    <li><a href=""><i class="material-icons">account_circle</i>Cuenta</a></li>
                    <li><a href=""><i class="material-icons">restaurant_menu</i>Menú</a></li>
                    <li><a href=""><i class="material-icons">shopping_cart</i>Cesta</a></li>
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
            <li><a href=""><i class="material-icons">account_circle</i>Cuenta</a></li>
            <li><a href=""><i class="material-icons">restaurant_menu</i>Menú</a></li>
            <li><a href=""><i class="material-icons">shopping_cart</i>Cesta</a></li>
        </ul>
        <!-- NAVBAR -->


        <!-- CONTENIDO -->
        <div id="contenido">
            <blockquote>
                This is an example quotation that uses the blockquote tag.
            </blockquote>
        </div>
        <!-- CONTENIDO -->

        <!-- FOOTER -->
        <footer class="page-footer red accent-2">
            <div class="footer-copyright">
                <div class="container">
                    © 2019 Copyright Fast n' Healthy
                    <a class="grey-text text-lighten-4 right" href="#!">Sobre nosotros</a>
                </div>
            </div>
        </footer>
        <!-- FOOTER -->
        <?php
        // put your code here
        ?>

        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
    </body>
</html>
