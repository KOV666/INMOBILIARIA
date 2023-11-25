<?php
    include "conexion.php";

    session_start();
    

    if(!empty($_POST["btnIngresar"])){
        if(empty($_POST['correo']) and empty($_POST['clave'])){
            echo '<div class="php-error"><h2>NINGUN CAMPO DEBE ESTAR VACIO</h2> </div>';
        }else{
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $sql = $conexion->query("select * from registrarse where email='$correo' and password = '$clave'");

            $_SESSION['correo'] = $correo;

            if($datos=$sql->fetch_object()){
                header("location:home.php");
            }else{
                echo '<div class="php-error"><h2>CLAVE O CORREO INCORRECTAS</h2> </div>';
            }
        }
    }



?>
