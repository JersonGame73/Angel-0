<?php
include("../db/conect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<?php
$id=$_GET['#']
$sql="select * from datos where id='".$id."'";
$resultado=mysqli_query($conectar, $sql);
$fila=mysqli_fetch_assoc($resultado);

$nombre=$fila["nombre"];
$celular=$fila["celular"];
$placas=$fila["placa"];
$direccionin=$fila["direccionin"];
$direccionfin=$fila["direccionfin"];
$comentario=$fila["comentario"];

mysqli_close($conectar);
?>
    <h1>Editar Servicio</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>">
        <label for="">Nombre</label>
        <input value="<?php echo $nombre; ?>" type="text"> <br/>

        <label for="">Celular</label>
        <input value="<?php echo $celular; ?>" type="text"> <br/>

        <label for="">Placa</label>
        <input value="<?php echo $placas; ?>" type="text"> <br/>

        <label for="">Direccionin</label>
        <input value="<?php echo $direccionin; ?>" type="text"> <br/>

        <label for="">Direccionfin</label>
        <input value="<?php echo $direccionfin; ?>" type="text"> <br/>

        <label for="">Comentario</label>
        <input value="<?php echo $comentario; ?>" type="text"> <br/>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <input type="submit" value="Actualizar">
        <a href="index.php">Regresar</a>
    </form>
    
</body>
</html>
