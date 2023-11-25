<?php
    include("conexion.php");

    $query = "SELECT * FROM `stock` WHERE estado = 1";
    $result = mysqli_query($conexion,$query);
    while($row=mysqli_fetch_array($result)){

            echo '<div id="row" class="column" style="display: flex;">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" id="casa-1">
            <div class="card" style="width: 18rem; height: 25rem">
              <img
                src="'.$row['ruta'].'"
                class="img-thumbnail"
                alt="..."
                style="height: 200px"
              />
              <div class="card-body">
                <h5 class="card-title">'.$row['precio'].'</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the cards content.
                </p>
                <a
                  href="#"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#modal-'.$row['id'].'"
                >
                  Ver Producto
                </a>
              </div>
            </div>
          </div>

          
                </div>
                <br>';
    };


?>