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

        <title>Menú Fast & Healthy®</title>

    </head>
    <body>

        <!-- NAVBAR -->
        <nav class="navbar-material white no-shadows">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo left"><img class="responsive-img" id="logo" style="margin: 10%;" src="img/icon-color.png"/></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons red-text">menu</i></a>
                <ul class="right hide-on-med-and-down">                    
                    <li><a href="#"><i class="material-icons red-text">account_circle</i>Cuenta</a></li>
                    <li><a class="menu"><i class="material-icons red-text">restaurant_menu</i>Menú</a></li>
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
            <li><a class="menu"><i class="material-icons red-text">restaurant_menu</i>Menú</a></li>
            <li><a href=""><i class="material-icons red-text">shopping_cart</i>Cesta</a></li>
        </ul>
        <!-- END NAVBAR -->


        <!-- CONTENIDO -->
        <div id="contenido">
            <div class="row">
                <div class="col s12">
                    <h4>Platos del menú</h4>
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#primeros">Primeros</a></li>
                        <li class="tab col s3"><a href="#segundos">Segundos</a></li>                    
                        <li class="tab col s3"><a href="#terceros">Terceros</a></li>
                    </ul>


                    <!-- PRIMEROS -->
                    <div class="col s12" id="primeros" >
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img"src="img/icon-color.png">
                                <span class="card-title black-text">Acelgas</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                                <p>Plato de acelgas sanísimo</p>
                            </div>
                        </div>
                    </div>
                    <!-- END PRIMEROS -->

                    <!-- SEGUNDOS -->
                    <div id="segundos" class="col s12">

                    </div>
                    <!-- END SEGUNDOS -->

                    <!-- TERCEROS -->
                    <div id="terceros" class="col s12">

                    </div>
                    <!-- END TERCEROS -->
                </div>
            </div>

            <!-- CESTA -->
            <div class="cesta row">
                <div class="contenido-cesta">

                    <div class="col s1 offset-s1"><i class="material-icons">shopping_cart</i></div>
                    <div class="col s7 center contenido-cesta"><b>Subtotal</b></div>
                    <div class="col s3 contenido-cesta"><b>00'00€</b></div>

                </div>
            </div>
            <!-- END CESTA -->
        </div>
        <!-- END CONTENIDO -->        

        




        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <!-- END CARGA DE JAVASCRIPTS -->

    </body>
</html>
