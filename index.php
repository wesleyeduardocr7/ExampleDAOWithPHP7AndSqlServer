<?php

require_once("config.php");

echo json_encode(Usuario::getList());

?>