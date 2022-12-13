<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
</body>
</html>

<?php

require_once ('conexion.php');

$idNota = isset($_GET['id']) ? mysqli_real_escape_String($db, $_GET['id']) : false;
//var_dump($idNota);
$sql = "SELECT * FROM notas where id = '$idNota'";

$query = mysqli_query($db, $sql);


if ( !empty($query)){
    
    while( $nota = mysqli_fetch_assoc($query) ) {
        echo "<h1> Datos de la nota $idNota</h1>";
    echo '<form action="lanzarModificacion.php" method="GET">';
    echo '<label for="id">ID</label>';
   echo '<input class="botonEstiloCrear" type="text" name="id" value="' .$nota['id']. '" readonly>';
   echo '<label for="titulo">Titulo</label>';
   echo '<input class="botonEstiloCrear" type="text" name="titulo" value="' .$nota['titulo']. '">';
    echo "<br>";
   echo '<label for="descripcion">Descripcion</label>';
   echo '<input class="botonEstiloCrear" type="text" name="descripcion" value="' .$nota['descripcion']. '">';
   echo "<br>";
   echo '<label for="prioridad">Prioridad</label>';    
   echo '<input class="botonEstiloCrear" type="text" name="prioridad" value=" ' .$nota['prioridad']. ' ">';
   echo "<br>";
   echo '<input type="submit" value="Modificar">';
   echo '</form>';
    }
}

function mostrarMensaje(){
    echo "No se ha recogido bien la variable";
}


?>

