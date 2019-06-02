<?php

include 'misFunciones.php';

if (isset($_POST["action"])) { // Se pasa una acción
    switch (sprintf("%d", $_POST["action"])) { // ¿Qué acción?
        case 1:            
            //Saco el valor del resultado de la query, en este caso la fecha, para 
            //pasarselo a la función de kitchenDesign.php
            echo date(sacaHora()['UPDATE_TIME']); 
            
            break;
        default:
            echo "Error: Falta una acción";
    }
}

function sacaHora() {
    $mysqli = conectaBBDD();
    $resultadoActualizacion = $mysqli->query("SELECT UPDATE_TIME FROM information_schema.tables WHERE TABLE_SCHEMA = 'id7841676_fh' AND TABLE_NAME = 'pedidos'");
    
    $time = $resultadoActualizacion->fetch_assoc();
       
    return $time;
}
