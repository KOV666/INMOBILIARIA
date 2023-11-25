<?php
    include"conexion.php";

    $estado = $_POST['estado'];


    $update = "UPDATE `stock` SET `estado`= 0 WHERE `id` = 1";
    echo mysqli_query($conexion, $update);


    $estado2 = $_POST['estado2'];


    $update2 = "UPDATE `stock` SET `estado`= 0 WHERE `id` = 2";
    echo mysqli_query($conexion, $update2);

?>