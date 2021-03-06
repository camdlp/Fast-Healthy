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
} else if (!isset($_SESSION['admin'])) {
    echo "<script type='text/javascript'>location.href='https://carlosabiamer.000webhostapp.com/index.php'</script>";
}

include 'misFunciones.php';

$mysqli = conectaBBDD();

$resultadoQuery = $mysqli->query("SELECT * FROM pedidos WHERE pendiente = 1 ORDER BY fecha");

$numPedidos = $resultadoQuery->num_rows;

for ($i = 0; $i < $numPedidos; $i++) {
    $pedidos = $resultadoQuery->fetch_array(); //lee una fila del resultado de la query

    $listaPedidos[$i][0] = $pedidos['id'];
    $listaPedidos[$i][1] = $pedidos['alias_clientes'];
    $listaPedidos[$i][2] = $pedidos['fecha'];


    //Teniendo el cuenta el id de cada pedido pendiente, extraigo los platos de cada uno.    
    $resultadoQuery1 = $mysqli->query("SELECT * FROM pedidos_platos WHERE id_pedido = " . $listaPedidos[$i][0] . " AND preparado = 0");
    $numPedidos_platos = $resultadoQuery1->num_rows;

    if ($numPedidos_platos > 0) {
        //Número por el que vamos del array bidimensional
        $numeroPlato = 3;
        //Guardo los platos de cada pedido en su nivel del array
        for ($j = 0; $j < $numPedidos_platos; $j++) {
            $pedidos_platos = $resultadoQuery1->fetch_array(); //lee una fila del resultado de la query

            $listaPedidos[$i][$numeroPlato + $j] = $pedidos_platos['id_plato'];
        }
    }else{  
        //Si no hay platos en un pedido abierto se cerrará automáticamente
        $mysqli->query("UPDATE pedidos SET pendiente = 0 WHERE id = ".$listaPedidos[$i][0]);
    }
}


//Guardo la lista de platos
$resultadoQuery2 = $mysqli->query("SELECT * FROM platos");

$numPlatos2 = $resultadoQuery2->num_rows;

for ($i = 0; $i < $numPlatos2; $i++) {
    $platos2 = $resultadoQuery2->fetch_array(); //lee una fila del resultado de la query

    $listaPlatos2[$i][0] = $platos2['id'];
    $listaPlatos2[$i][1] = $platos2['nombre'];
    $listaPlatos2[$i][2] = $platos2['precio'];
    $listaPlatos2[$i][3] = $platos2['tipo'];
}




require 'kitchenDesign.php';



