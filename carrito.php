<?php

session_start();

    Include "conexion.php";


    $precio = $_POST['precio'];
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO carrito (sesion, nombre, precio) VALUES ('$_SESSION[correo]','$nombre','$precio')";
    mysqli_query($conexion,$sql);

    
?>