<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="index.css" />
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>

  <body>
  <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}
</style>
    <style>
      .material-symbols-outlined {
        font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
      }
    </style>
    <!-- <header>
        <p>
            <a href="home.html" style="color: white;">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
            </a>
            
        </p>
    </header> -->

    <!-- INICIAR SESION --> 

    

    <div class="iniciar-sesion">
      <form action="" method="post">
        <input type="text" name="correo" id="email-2" placeholder="Correo Electronico">
        <input type="password" name="clave" id="password-2" placeholder="************">
        <input id="btn-login" name="btnIngresar" type="submit"> 
      </form>
    </div>
    <?php
      include"conexion.php";
      include"validar.php";
    ?>

    <!-- REGISTRO -->

    <div class="crear-cuenta">
      <h1 style="text-align: center">CREAR CUENTA</h1>
      <div class="formulario">
        <form method="post" id="registro-ajax">
          <table>
            <tr>
              <td style="margin-right: 100px">
                <input
                  type="text"
                  name="nombre"
                  id="nombre"
                  placeholder="Nombre"
                />
              </td>
              <br />
              <td style="margin-left: 100px">
                <input
                  type="text"
                  name="apellido"
                  id="apellido"
                  placeholder="Apellido"
                />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="Ejemplo@gmail.com"
                  style="width: 90%"
                />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <input
                  type="password"
                  name="password"
                  id="contraseña"
                  placeholder="***************"
                  style="width: 90%"
                />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="boton">
                  <button id="submit-registro">Crear Cuenta</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <input
                  type="checkbox"
                  name="terminos"
                  id="terminos"
                  checked
                  style="width: 15px"
                />
                <b style="font-family: monospace; color: white"
                  >Acepto los terminos</b
                >
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
