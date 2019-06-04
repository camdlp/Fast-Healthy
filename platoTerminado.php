<?php

require 'misFunciones.php'; 

$idPedido = $_POST['id_pedido'];
$idPlato = $_POST['id_plato'];

$mysqli = conectaBBDD();

$mysqli->query("UPDATE pedidos_platos SET preparado = 1 WHERE id_pedido = '".$idPedido."' AND id_plato = '".$idPlato."'");