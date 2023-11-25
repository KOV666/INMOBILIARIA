<?php  
    include("conexion.php");

    echo '<div>
        <h1>Carrito</h1>';
                
        $sql = "SELECT `id`, `sesion`, `nombre`, `precio` FROM `carrito`";
        $result = mysqli_query($conexion,$sql);
        while($row=mysqli_fetch_array($result)){
            echo '<div class="areaCarrito" style="backgropund-color: white; ">

            <b>
                '.$row["sesion"].'
            </b>
            <br>
            '.$row["nombre"].'
            <br>
            '.$row["precio"].'    
            </div>';
        }

        echo '</div>';
        
?>