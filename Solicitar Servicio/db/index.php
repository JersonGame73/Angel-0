<?php

    //recuperar datos
    $nombre=$_POST['nombre.completo'];
    $celular=$_POST['numero.celular'];
    $placa=$_POST['placa.vehiculo'];
    $direccionin=$_POST['direccion.in'];
    $direccionfin=$_POST['direccion.fin'];
    $infoadd=$_POST['info.add'];

    //conectarnos con el servidor 
    $conectar = mysqli_connect("localhost", "root", "root", "Angel-0")or die("No hay conexion");

    //ingresar a la base 

    $consulta = "INSERT INTO datos(nombre, celular, placa, direccionin, direccionfin, comentario) VALUES ('$nombre','$celular','$placa','$direccionin','$direccionfin','$infoadd')";
    $mysqliquery =mysqli_query($conectar, $consulta);
    header("location:../index.html")

?>