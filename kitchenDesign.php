<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    //Comprueba si la sesión está iniciada.
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
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

                <div id="pedidosResumen">
                    <!-- AQUÍ VAN LOS RESÚMENES DE CADA PEDIDO -->
                </div>
            </div>
            <!-- END RESUMEN PEDIDO -->

            <!-- COLA PEDIDO -->
            <div class="cola">
                <div class="colaLabel center">COLA</div>

                <div id="pedidosCola" class="row">
                    <!-- AQUÍ VAN LOS PLATOS DE CADA PEDIDO -->
                                        
                </div>
                <!--<a href="index.php">Volver al Inicio</a>-->
            </div>
            <!-- END COLA PEDIDO -->

        </div>


        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <!-- END CARGA DE JAVASCRIPTS -->
        
        <script type="text/javascript">
            //Variables que guardan la cola de los pedidos y el número de pedidos en la cola
            var colaPedidos = <?php echo json_encode($listaPedidos); ?>;
            
            var pedidosListaPlatos = <?php echo json_encode($listaPlatos2); ?>;
            
            console.log(colaPedidos);console.log(pedidosListaPlatos);
            creaCardsPlatos();
            creaCardsPedidos();
    
            //Crea una card por cada plato de cada pedido
            //Se le resta uno a 'colaPedidos[i][j]-1' porque los id's están adelantados en 1 
            //a los id's, ya que estos empiezan en 1 mientras que los arrays lo hacen en 0
            function creaCardsPlatos(){
                var output = '';
                for (var i = 0; i < colaPedidos.length; i++) {
                    for (var j = 3; j < colaPedidos[i].length; j++) {
                        
                        output += '<div class="col s6 card1">';
                        output += '<div id="' + pedidosListaPlatos[colaPedidos[i][j]-1][0] + '" class="card">\
                        <div class="card-image">\
                            <img class="responsive-img"src="img/icon-color.png">\
                            <span class="card-title black-text">' + pedidosListaPlatos[colaPedidos[i][j]-1][1] + '</span>\
                            <a id="' + pedidosListaPlatos[colaPedidos[i][j]-1][0] + '" class="btn-floating btn-large halfway-fab waves-effect waves-light red quitar"><i class="material-icons">remove</i></a>\
                        </div>\
                            <div class="card-content">\
                                <h6>Ingredientes</p>\
                            </div>\
                        </div><br>';
                        output += '</div>'

                    }
                }

                

                $('#pedidosCola').append(output);
            }
            
            function creaCardsPedidos(){
                var output = '';
                for (var i = 0; i < colaPedidos.length; i++){
                    output+= `<ul class="collection">  
                                <li class="collection-header"><h5 class="center">Pedido nº <b>` + colaPedidos[i][0] + `</b></h5></li>
                                <li class="collection-item avatar">
                                    <i class="fa fa-hand-pointer circle"></i>
                                    <span class="title"><b>Primeros</b></span>
                                    <p id="nombrePrimero">`;
                    for(var j = 3; j < colaPedidos[i].length; j++){
                        output += '- ' + pedidosListaPlatos[colaPedidos[i][j]-1][1] + '<br/>';
                    }                
                    output += ` </p>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="fa fa-hand-peace circle"></i>
                                    <span class="title"><b>Segundos</b></span>
                                    <p id="nombreSegundo"></p>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="fa fa-apple-alt circle"></i>
                                    <span class="title"><b>Postres</b></span>
                                    <p id="nombrePostre"></p>
                                </li>
                            </ul>`;
                }
                
                $('#pedidosResumen').append(output);
            }
            
        </script>
    </body>
</html>
