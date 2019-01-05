<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Cocina Fast & Healthy®</title>

        <!-- CARGA DE CSS -->
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/basics.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">             
        <!-- END CARGA DE CSS -->
    </head>
    <body>

        <div class="contendorCocina">

            <!-- RESUMEN PEDIDO -->
            <div class="pedido">
                <div class="pedidoLabel center">PEDIDO</div>

                <div>
                    <ul class="collection">         
                        <li class="collection-header"><h5 class="center">Pedido nº XX</h5></li>
                        <li class="collection-item avatar">
                            <i class="fa fa-hand-pointer circle"></i>
                            <span class="title">Primero</span>
                            <p id="nombrePrimero"></p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="fa fa-hand-peace circle"></i>
                            <span class="title">Segundo</span>
                            <p id="nombreSegundo"></p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="fa fa-apple-alt circle"></i>
                            <span class="title">Postre</span>
                            <p id="nombrePostre"></p>
                        </li>
                    </ul>
                    <ul class="collection">  
                        <li class="collection-header"><h5 class="center">Pedido nº XX</h5></li>
                        <li class="collection-item avatar">
                            <i class="fa fa-hand-pointer circle"></i>
                            <span class="title">Primero</span>
                            <p id="nombrePrimero"></p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="fa fa-hand-peace circle"></i>
                            <span class="title">Segundo</span>
                            <p id="nombreSegundo"></p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="fa fa-apple-alt circle"></i>
                            <span class="title">Postre <br>Postre <br>Postre <br>Postre <br>Postre <br></span>
                            <p id="nombrePostre"></p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END RESUMEN PEDIDO -->

            <!-- COLA PEDIDO -->
            <div class="cola">
                <div class="colaLabel center">COLA</div>
                
                <div>
                    
                </div>
            </div>
            <!-- END COLA PEDIDO -->

        </div>


        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <!-- END CARGA DE JAVASCRIPTS -->
    </body>
</html>
