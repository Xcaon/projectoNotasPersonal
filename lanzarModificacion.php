<?php

require_once ('conexion.php');
require_once ('consultar.php');

$idNota = isset($_GET['id']) ? mysqli_real_escape_String($db, $_GET['id']) : mostrarMensaje();
$tituloNota = isset($_GET['titulo']) ? mysqli_real_escape_String($db, $_GET['titulo']) : mostrarMensaje();
$descripcionNota = isset($_GET['descripcion']) ? mysqli_real_escape_String($db, $_GET['descripcion']) : mostrarMensaje();
$prioridadNota = isset($_GET['prioridad']) ? mysqli_real_escape_String($db, $_GET['prioridad']) : mostrarMensaje();

if ( !empty($idNota) && !empty($tituloNota) && !empty($descripcionNota) && !empty($prioridadNota) ){

   $resultado =  modificarRegistro($db, $idNota,$tituloNota,$descripcionNota,$prioridadNota);

}

function mostrarMensaje(){
    echo "No se ha recogido bien la variable DE MODIFICAR";
}

?>