<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    include("db/conect.php");
    $sql="select * from datos";
    $result=mysqli_query($conectar, $sql);
    ?>
    <h1>Servicios</h1>
    <a href="../../../Solicitar Servicio/index.html">Nuevo Servicio</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Placa</th>
                <th>Direccionin</th>
                <th>Direccionfin</th>
                <th>Comentario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($filas = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td> <?php echo $filas['#'] ?> </td>
                    <td> <?php echo $filas['nombre'] ?> </td>
                    <td> <?php echo $filas['celular'] ?> </td>
                    <td> <?php echo $filas['placa'] ?> </td>
                    <td> <?php echo $filas['direccionin'] ?> </td>
                    <td> <?php echo $filas['direccionfin'] ?> </td>
                    <td> <?php echo $filas['comentario'] ?> </td>
                    <td>
                        <?php echo "<a href='Editar/editar.php?=id".$filas['#']."'>EDITAR</a>"?>
                        - 
                        <?php echo "<a href=''>ELIMINAR</a>"?>
                    </td>
                </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
    <?php
    mysqli_close($conectar)
    ?>
</body>
</html>