<?php

    //recuperar datos
    $nombre=$_POST['nombrecompleto'];
    $celular=$_POST['numerocelular'];
    $placa=$_POST['placavehiculo'];
    $direccionin=$_POST['direccionin'];
    $direccionfin=$_POST['direccionfin'];
    $infoadd=$_POST['infoadd'];

    //conectarnos con el servidor 
    $conectar = mysqli_connect("remotemysql.com:3306", "zan3VAgXqc", "NfKerm0qqC", "zan3VAgXqc")or die("No hay conexion");

    //ingresar a la base 

    $consulta = "INSERT INTO datos(nombre, celular, placa, direccionin, direccionfin, comentario) VALUES ('$nombre','$celular','$placa','$direccionin','$direccionfin','$infoadd')";
    $mysqliquery =mysqli_query($conectar, $consulta);
    header("location:../index.html")

?>