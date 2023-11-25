<?php

    session_start();
    include"conexion.php";

    $reseña = $_POST['reseña'];

    $sql = "INSERT INTO `reseña`(`reseña`, `user`) VALUES ('$reseña','$_SESSION[correo]')";
    mysqli_query($conexion,$sql);
    
?>