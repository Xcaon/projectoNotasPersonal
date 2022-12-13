<?php require_once 'consultar.php'; ?> 
<?php require_once 'conexion.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>

    <div class="contenedorCabecera">
        <form class="formulario" action="filtrar.php" method="POST">
            
            <label for="id">ID</label>
            <input class="boton" type="text" name="id" value="id">
            <label for="contenido">Contenido</label>
            <input class="boton" type="text" name="contenido" value="contenido">   
            
            <strong><input class="boton" type="submit" value="Consultar"></strong>
        </form>

        
      <a href="crearNota.html">  <button class="boton" href>Crear Nota<span><i class="fa fa-plus" aria-hidden="true"></i></span></button></a>
    </div>

    <div class="tituloListaNotas">
        <h1 class="titulos">Notas</h1>
        <div class="listadoNotas">
        <?php $notas = devolverNotas($db); ?>
        <?php if ( !empty($notas)) : ?>
            <?php while( $nota = mysqli_fetch_assoc($notas)) : ?>
                <div style="background-color: grey; padding:6px; margin-bottom: 5px; border-radius: 4px; color: white;"> <?= $nota['id'] ?>  <?= $nota['titulo']  ?> <?= $nota['descripcion']  ?> <a href="modificarNota.php?id=<?= $nota['id'] ?> " ?><button>Modificar</button></a> <a href="eliminarNota.php?id= <?= $nota['id'] ?> " ?><button>Eliminar</button></a> </div>
            <?php endwhile; ?>
        <?php endif; ?>            

    </div>
    
    
    </div>

    

</body>
</html>
