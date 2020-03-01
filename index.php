<?php

require_once("config.php");

$usuario = new Usuario();
$resultado = $usuario->getList();
echo json_encode($resultado)

?>