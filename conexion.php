<?php

// Variables
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$database = 'notas';

$db = mysqli_connect($servidor, $usuario, $password, $database);
mysqli_query($db, "SET NAMES 'utf8'");


?>