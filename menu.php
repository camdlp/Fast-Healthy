
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'misFunciones.php';

$mysqli = conectaBBDD();

$resultadoQuery = $mysqli->query("SELECT * FROM platos");

$numPlatos = $resultadoQuery->num_rows; 

for($i = 0; $i < $numPlatos; $i++){
    $platos = $resultadoQuery->fetch_array(); //lee una fila del resultado de la query
    
    $listaPlatos[$i][0] = $platos['id'];
    $listaPlatos[$i][1] = $platos['nombre'];
    $listaPlatos[$i][2] = $platos['precio'];
    
}

if($numPlatos > 0){
    
    require 'menuDesign.php';
    
}else echo 'No hay platos disponibles';

?> 