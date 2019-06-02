<?php

include 'misFunciones.php';

$id_pedido = $_POST['id_pedido'];

$mysqli = conectaBBDD();
$resultadoQuery = $mysqli->query("UPDATE pedidos SET pendiente = '0' WHERE id = '".$id_pedido."'");


