<?php
require_once ('conexion.php');

$idNota = isset($_GET['id']) ? mysqli_real_escape_String($db, $_GET['id']) : mostrarMensaje();

if ( !empty($idNota)) {

    // Creamos el sql
    $sql = "DELETE FROM notas where id = '$idNota' ";
    // Lanzamos la query
    $query = mysqli_query($db, $sql);

    if ($query){
        echo "<p style='padding:4px; background-color: green; color: white;'> Se ha eliminado exitosamente</p>";
         // redirect con delay
        header( "refresh:5; url=index.php" ); 
    } else {
        echo "<p style='padding:4px; background-color: red; color: black;'> No se ha eliminado la nota</p>";
    }
}

function mostrarMensaje(){
    echo "No se ha recogido bien la variable";
}

?>