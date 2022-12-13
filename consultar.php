<?php 


function devolverNotas($db){
// comprobamos que nos hemos conectado
if (mysqli_connect_errno()){
    echo "<h3 style='background-color: red;',color: black;'>La conexion no ha tenido exito</h3>";
} 

$tabla = "notas";
// Hacemos la escritura
$sql = "SELECT * from notas";

$notas = mysqli_query($db, $sql);

$result = null;
if ($notas && mysqli_num_rows($notas) >= 1){
    // Resultado sera un array con todos los datos
    $result = $notas;
}

return $result;

}


function modificarRegistro($db, $idNota,$tituloNota,$descripcionNota,$prioridadNota){

    $sql = "UPDATE notas set titulo='$tituloNota', descripcion='$descripcionNota', prioridad='$prioridadNota' WHERE id=$idNota";
    

     if (mysqli_query($db, $sql)){
        echo "<p style='padding:4px; background-color: green; color: white;'> Se ha modificado la nota exitosamente</p>";
        // redirect con delay
        header( "refresh:5; url=index.php" ); 
    } else {
        echo "<p style='padding:4px; background-color: red; color: black;'> No se ha modificado la nota</p>";
    }

}


?>