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
        <nav class="navbar-material">
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
            <li><a href=""><i class="material-icons">account_circle</i>Cuenta</a></li>
            <li><a href=""><i class="material-icons">restaurant_menu</i>Menú</a></li>
            <li><a href=""><i class="material-icons">shopping_cart</i>Cesta</a></li>
        </ul>
        <!-- NAVBAR -->


        <?php
        // put your code here
        ?>

        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
    </body>
</html>
