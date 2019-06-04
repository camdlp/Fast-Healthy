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
        <link rel="shortcut icon" type="image/png" href="img/icon-outline.png"/>
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
                <div class="pedidoLabel center">PEDIDOS</div>

                <div id="pedidosResumen">
                    <!-- AQUÍ VAN LOS RESÚMENES DE CADA PEDIDO -->
                </div>
            </div>
            <!-- END RESUMEN PEDIDO -->

            <!-- COLA PEDIDO -->
            <div class="cola">
                <div class="colaLabel center">PLATOS EN COLA</div>

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
            
            console.log(pedidosListaPlatos);
            var ultimaActualizacion;
            
            if (colaPedidos != null) {
                //Crea las cartas de los platos de cada pedido para la cola
                creaCardsPlatos();
                //Crea las listas con los platos de cada pedido
                creaCardsPedidos();
            }


            //Crea una card por cada plato de cada pedido
            //Se le resta uno a 'colaPedidos[i][j]-1' porque los id's están adelantados en 1 
            //a los id's, ya que estos empiezan en 1 mientras que los arrays lo hacen en 0
            function creaCardsPlatos() {
                var output = '';
                //Variable de color que hará que las cards se alernen en color para distinguir los platos de uno y otro pedido.
                var color = true;
                for (var i = 0; i < colaPedidos.length; i++) {

                    for (var j = 3; j < colaPedidos[i].length; j++) {

                        contadorId = i + '-' + colaPedidos[i][j];
                        console.log(contadorId);

                        output += '<div id="cola' + contadorId + '" class="col s6 card1 ">';

                        if (color) {
                            output += '<div id="' + pedidosListaPlatos[colaPedidos[i][j] - 1][0] + '" class="card" style="border-top:4px solid #D13832;border-bottom:4px solid #D13832">';
                        } else
                            output += '<div id="' + pedidosListaPlatos[colaPedidos[i][j] - 1][0] + '" class="card" style="border-top:4px solid #A46F3E;border-bottom:4px solid #A46F3E">';

                        output += `<div class="card-image">
                            <img class="responsive-img"src="img/icon-color.png">
                            <span class="card-title black-text">` + pedidosListaPlatos[colaPedidos[i][j] - 1][1] + `</span>
                            <a id="` + contadorId + `" class="btn-floating btn-large halfway-fab waves-effect waves-light red quitar"><i class="material-icons">remove</i></a>
                        </div>
                            <div class="card-content">
                                <h6>Ingredientes</p>
                            </div>
                        </div><br>'`;
                        output += '</div>'

                    }
                    //Al cambiar de pedido cambio de color
                    color = !color;
                }



                $('#pedidosCola').html(output);
            }

            function creaCardsPedidos() {
                var output = '';
                //Variable de color que hará que las cards se alernen en color para distinguir los platos de uno y otro pedido.
                var color = true;
                console.log('Creado');

                for (var i = 0; i < colaPedidos.length; i++) {
                    console.log(colaPedidos.length);
                    if (color) {
                        output += `<ul class="collection" id="pedido` + colaPedidos[i][0] + `" style="border-left:4px solid #D13832">`;
                    } else
                        output += `<ul class="collection" id="pedido` + colaPedidos[i][0] + `"style="border-left:4px solid #A46F3E">`;

                    var primeros = '';
                    var segundos = '';
                    var terceros = '';
                    //Agrupo los  platos de cada tipo
                    for (var j = 3; j < colaPedidos[i].length; j++) {
                        if (pedidosListaPlatos[colaPedidos[i][j] - 1][3] == 1) {
                            primeros += '<li>' + pedidosListaPlatos[colaPedidos[i][j] - 1][1] + '</li>';
                        } else if (pedidosListaPlatos[colaPedidos[i][j] - 1][3] == 2) {
                            segundos += '<li>' + pedidosListaPlatos[colaPedidos[i][j] - 1][1] + '</li>';
                        } else {
                            terceros += '<li>' + pedidosListaPlatos[colaPedidos[i][j] - 1][1] + '</li>';
                        }
                    }


                    output += `<li class="collection-header"><h5 class="center">Pedido nº <b>` + colaPedidos[i][0] + `</b></h5></li>
                                <li class="collection-item avatar">
                                    <i class="fa fa-hand-pointer circle"></i>
                                    <span class="title"><b>Primeros</b></span>`;
                    output += `<p id="nombrePrimero"><ol>` + primeros;

                    output += ` </ol></p>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="fa fa-hand-peace circle"></i>
                                    <span class="title"><b>Segundos</b></span>
                                    <p id="nombreSegundo"><ol>` + segundos;

                    output += `</ol></p>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="fa fa-apple-alt circle"></i>
                                    <span class="title"><b>Postres</b></span>
                                    <p id="nombrePostre"><ol>` + terceros;

                    output += `<ol></p>
                                </li>
                            </ul>`;

                    color = !color;
                }


                $('#pedidosResumen').html(output);
            }





            //Quitar un plato ya hecho y recuperarlo si hiciera falta
            $('.contendorCocina').on('click', '.quitar', function () {
                var idCard = this.id;
                console.log("Pulsado " + idCard);
                $('#cola' + idCard).fadeOut(500);

                //Divido el id del botón donde guardé el número de pedido junto al número de plato 
                //para obtener el id del plato.
                var arrayAux = idCard.split('-');

                var toastHTML = '<span id="toast">Eliminado ' + pedidosListaPlatos[arrayAux[1] - 1][1] + '</span><button class="btn-flat toast-action recupera1">Recuperar</button>';
                //En cuanto termina el toast, es decir, si no ha recuperado la card
                M.toast({html: toastHTML, completeCallback: function () {
                        //Quito el último valor del array del pedido
                        colaPedidos[arrayAux[0]].pop();
                        
                        console.log(colaPedidos);
                        //Pone el plato en preparado en la base de datos
                        $(this).load("platoTerminado.php", {id_pedido: colaPedidos[arrayAux[0]][0], id_plato: arrayAux[1]});
                        
                        if (colaPedidos[arrayAux[0]].length <= 3) {
                            $('#pedido' + colaPedidos[arrayAux[0]][0]).fadeOut(500);
                            //Actualizo en la base de datos el estado del pedido que ya está finalizado.    
                            $(this).load("pedidoFinalizado.php", {id_pedido: colaPedidos[arrayAux[0]][0]});
                        }

                        

                    }});




                $('.recupera1').click(function () {
                    colaPedidos[arrayAux[0]].push('');
                    $('#cola' + idCard).fadeIn(500);
                    console.log("Recuperado " + idCard);

                    // Quito el toast
                    var toastElement = document.querySelector('.toast');
                    var toastInstance = M.Toast.getInstance(toastElement);
                    toastInstance.dismiss();
                });
            });

            //Creo una función que cada 5 segundo compruebe que no hay pedidos nuevos en la base de datos 
            $(function () {
                cron();
                function cron() {
                    $.ajax({
                        method: "POST",
                        url: "/actualiza.php", //Dependiente de los directorio de la página 
                        data: {
                            action: 1
                        }
                    }).done(function (msg) {
                        if (ultimaActualizacion == undefined) {
                            ultimaActualizacion = msg;
                        } else if (ultimaActualizacion != msg) {
                            //Si hay algún toast activo no se refrescará hasta que no lo haya.
                            if(document.querySelector('.toast') != null){
                                ultimaActualizacion = msg;
                                location.reload();
                            }
                            
                        }
                        console.log(msg);

                    });
                }
                setInterval(function () {
                    cron();
                }, 5000); // Lanzará la petición cada 5 segundos
            });



        </script>
    </body>
</html>
