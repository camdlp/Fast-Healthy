<?php


include 'misFunciones.php';

$elementosPedido = $_POST['elementosPedido'];
//echo $elementosPedido[0];

$mysqli = conectaBBDD();

$resultadoQuery = $mysqli->query("INSERT INTO `pedidos` (`alias_clientes`) VALUES ('carlos');");



for($i = 0; $i < sizeof($elementosPedido); $i++){
    
    $resultadoQuery = $mysqli->query("INSERT INTO `pedidos_platos` (`id_pedido`, `id_plato`) VALUES ((SELECT MAX(id) FROM pedidos), '".$elementosPedido[$i]."');");
}

echo '<a class="waves-effect waves-light btn-flat white red-text" href="menu.php"><i class="fas fa-redo left"></i>Vuelve a pedir</a>';
