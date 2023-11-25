<?php
include "conexion.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = ("INSERT INTO registrarse (id, nombre, apellido, email, password) 
    values ('','$nombre','$apellido','$email','$password')");    
    
    echo mysqli_query($conexion, $sql);

    $session = ("INSERT INTO sesion (id, email, password) 
    values ('','$email','$password')");    
    
    echo mysqli_query($conexion, $session);
?>