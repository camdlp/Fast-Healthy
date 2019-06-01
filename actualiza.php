<?php

include 'misFunciones.php';

if (isset($_POST["action"])) { // Se pasa una acción
    switch (sprintf("%d", $_POST["action"])) { // ¿Qué acción?
        case 1:            
            echo date($fecha['UPDATE_TIME']); 
            
            break;
        default:
            echo "Error: Falta una acción";
    }
}

function sacaHora() {
    $mysqli = conectaBBDD();
    $resultadoActualizacion = $mysqli->query("SELECT UPDATE_TIME FROM information_schema.tables WHERE TABLE_SCHEMA = 'fh' AND TABLE_NAME = 'pedidos'");
    
    $time = $resultadoActualizacion->fetch_assoc();
       
    return $time;
}
