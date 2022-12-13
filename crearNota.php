<?php 

require_once ('conexion.php');

// comprobamos que nos hemos conectado
if (mysqli_connect_errno()){
    echo "<h3 style='background-color: red;',color: black;'>La conexion no ha tenido exito</h3>";
} else {
    echo "<h3 style='background-color: green; color: white; padding: 10px;'>La conexion ha tenido exito<h3>";
}

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$prioridad = $_POST['prioridad'];
$fecha = $_POST['fecha'];
 
if ( !empty($titulo) && !empty($descripcion) && !empty($prioridad) && !empty($fecha) )
{

// Hacemos la escritura
$sql = "INSERT INTO notas VALUES (null, '$titulo', '$descripcion', '$prioridad', '$fecha');";

$query = mysqli_query($db, $sql);

// Si la query existe esque ha tenido exito
if ($query) {
    echo "<p style='padding:4px; background-color: green; color: white;'> Se ha creado la nota exitosamente</p>";
    // redirect con delay
    header( "refresh:5; url=index.php" ); 
} else {
    echo "<p style='padding:4px; background-color: red; color: black;'> No se ha creado la nota</p>";
}

} 
else 
{
    echo "<h3>Algun campo esta vacio para crear la nota </h3>";
}