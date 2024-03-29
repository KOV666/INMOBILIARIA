<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css" />
    <script src="jquery.js"></script>
    <!-- import -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- import -->

    <style>
      .material-symbols-outlined {
        font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
      }
    </style>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg bg-body-primary bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Inmobiliaria</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" aria-current="page"  href="home.php">Hogar</a>
            <a class="nav-link active" href="alquileres.php">Alquilar</a>
            <a class="nav-link active" aria-current="page" href="#" id="clickCarrito" style="color:grey;">Carrito</a> 
            <a class="nav-link" href="close.php" style="color: rgb(245, 90, 90);">Cerrar Sesion</a>
            <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
          </div>
        </div>
      </div>
    </nav>


     <!-- import -->

     <style>
      .material-symbols-outlined {
        font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
      }
    </style>

<div class="container">
      <div class="carrito">

      </div>
    </div>

    <!-- carousel -->

    <!-- <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://plus.unsplash.com/premium_photo-1663134055347-9bc8782f1190?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://plus.unsplash.com/premium_photo-1663134055347-9bc8782f1190?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://plus.unsplash.com/premium_photo-1663134055347-9bc8782f1190?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="modal-1"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              268 San Gabriel St, Winter Springs, FL 32708
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-10">
                <img
                  src="https://photos.zillowstatic.com/fp/5b5bbe7b5e16e75eaf2dc74eeb176511-cc_ft_960.webp"
                  class="img-thumbnail"
                  alt="..."
                />
              </div>

              <div class="col-sm-12 col-md-2">
                <a
                  href="https://photos.zillowstatic.com/fp/7aa5c64dc38c66c35605bbf2e586521a-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/7aa5c64dc38c66c35605bbf2e586521a-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>

                <a
                  href="https://photos.zillowstatic.com/fp/d07e500565375ccdfff2d2607c268d4e-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/d07e500565375ccdfff2d2607c268d4e-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  ¡Tu Casa de Sueños te espera en Winter Springs! ¡Bienvenido a
                  su oasis completamente renovado en uno de los barrios y
                  distritos escolares más deseables! ¡Esta casa unifamiliar de 3
                  dormitorios y 2 baños bellamente actualizada está lista para
                  nuevos propietarios! Prepárese para ser cautivado por el
                  impecable concepto de espacio abierto con una espaciosa isla
                  de cocina, encimeras de granito, gabinetes de madera, etc, y
                  despensa para todas tus aventuras culinarias con brillantes
                  electrodomésticos de acero inoxidable para el chef moderno.
                  Pisos de vinilo en toda la casa, haciendo que la limpieza sea
                  muy fácil. Baño Maestro Contemporáneo con exquisito trabajo de
                  azulejos, interior y exterior recién pintado, y almacenamiento
                  adicional con un cómodo cobertizo de almacenamiento en un
                  patio de concreto, donde podrá disfrutar de una tarde
                  relajante. Se instaló una nueva CA en 2015, se instalaron un
                  nuevo techo, un panel eléctrico y un patio descubierto en
                  2017.Se instalaron nuevas tuberías y calentadores de agua en
                  2023 - Worry-Free Living!. ¡No pierdas la oportunidad de hacer
                  de esta extraordinaria propiedad la tuya y abrazar un estilo
                  de vida de confort a un precio inigualable!
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-success" id="rent-0">Alquilar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- --- -->

    <div
      class="modal fade"
      id="modal-2"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-10">
                <img
                  src="https://photos.zillowstatic.com/fp/d8b3507578c2f271d5596fd1aa83ed09-cc_ft_960.webp"
                  class="img-thumbnail"
                  alt="..."
                />
              </div>

              <div class="col-sm-12 col-md-2">
                <a
                  href="https://photos.zillowstatic.com/fp/e14e0fe967e48f0e530898dd561fae6e-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/e14e0fe967e48f0e530898dd561fae6e-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>

                <a
                  href="https://photos.zillowstatic.com/fp/bcf67a123faf13ec18a1d9cf19edad4b-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/bcf67a123faf13ec18a1d9cf19edad4b-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  Ubicación privilegiada de Kernan y Atlántico. ¡Lote grande!
                  Disfrute de la proximidad a la I-295 y JTB. Sólo un corto
                  trayecto en coche a las playas o el centro de Jacksonville. La
                  atención médica es de fácil acceso en la Clínica Mayo de
                  renombre. Esta casa cuenta con cuatro dormitorios y una sala
                  de flex, perfecto como un estudio, oficina, sala de juegos o
                  habitación de invitados. El patio trasero vallado enorme
                  ofrece un refugio privado, ideal para la relajación,
                  entretenimiento o mascotas. Enorme patio cubierto.
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-success" id="rent-1">Alquilar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- --- -->

    <div
      class="modal fade"
      id="modal-3"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              715 NE 12th Ter, Crystal River, FL 34428
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-10">
                <img
                  src="https://photos.zillowstatic.com/fp/b733448e8095f61c612e73345427a914-cc_ft_960.webp"
                  class="img-thumbnail"
                  alt="..."
                />
              </div>

              <div class="col-sm-12 col-md-2">
                <a
                  href="https://photos.zillowstatic.com/fp/b733448e8095f61c612e73345427a914-cc_ft_960.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/78570ced9c9ea5645675d65f35fb0623-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>

                <a
                  href="https://photos.zillowstatic.com/fp/deca7b0fb64a9d65a8cc4bab15fefffc-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/deca7b0fb64a9d65a8cc4bab15fefffc-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  ¡Bienvenido a este maravillosamente remodelado 2 dormitorios,
                  2 baños, situado en el corazón de Crystal River! Esta
                  propiedad ha sido meticulosamente actualizado para ofrecer
                  comodidades modernas, manteniendo su encanto de estilo casa de
                  campo. Desde el momento en que entras por la puerta principal,
                  usted será cautivado por los detalles y el diseño. El amplio
                  salón abierto se conecta perfectamente con el comedor y la
                  cocina, por lo que es perfecto para el entretenimiento. Una
                  pared de ventanas proporciona luz natural en todo, la mejora
                  de la sensación brillante y acogedor de esta casa. Un plano
                  dividido con un dormitorio y baño completo en cada extremo de
                  la casa ofrece privacidad y espacio para todos. ¡Casi todo en
                  esta casa es nuevo - AC (2023), calentador de agua caliente
                  (2023), panel eléctrico (2023), pisos de lujo LVP (2023),
                  iluminación de bajo consumo (2023), e incluso un nuevo techo
                  (2017)! La cocina ha sido completamente modernizado con
                  electrodomésticos nuevos, armarios, fregadero de granja, y
                  contadores magníficos. Los baños también están recién
                  transformados con nuevos extractores, tocadores actualizados y
                  accesorios. Paso fuera y encontrará hermosos jardines en un
                  lote de esquina amplia, un camino de entrada recién vertido y
                  acera (2023), y recién pintado exterior. Cerca de todo lo que
                  Crystal River tiene para ofrecer - Escuelas, centros médicos,
                  tiendas, restaurantes, Hunter Springs Community Park, Kings
                  Bay Park, Three Sisters Springs, Fort Island Trail, histórico
                  Citrus Avenue y el centro de Crystal River. Y no HOA, no CDD,
                  no Deed Re Traducción realizada con la versión gratuita del
                  Hogar.
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-success" id="rent-2">Alquilar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- --- -->

    <div
      class="modal fade"
      id="modal-2"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-10">
                <img
                  src="https://photos.zillowstatic.com/fp/d8b3507578c2f271d5596fd1aa83ed09-cc_ft_960.webp"
                  class="img-thumbnail"
                  alt="..."
                />
              </div>

              <div class="col-sm-12 col-md-2">
                <a
                  href="https://photos.zillowstatic.com/fp/e14e0fe967e48f0e530898dd561fae6e-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/e14e0fe967e48f0e530898dd561fae6e-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>

                <a
                  href="https://photos.zillowstatic.com/fp/bcf67a123faf13ec18a1d9cf19edad4b-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/bcf67a123faf13ec18a1d9cf19edad4b-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  Ubicación privilegiada de Kernan y Atlántico. ¡Lote grande!
                  Disfrute de la proximidad a la I-295 y JTB. Sólo un corto
                  trayecto en coche a las playas o el centro de Jacksonville. La
                  atención médica es de fácil acceso en la Clínica Mayo de
                  renombre. Esta casa cuenta con cuatro dormitorios y una sala
                  de flex, perfecto como un estudio, oficina, sala de juegos o
                  habitación de invitados. El patio trasero vallado enorme
                  ofrece un refugio privado, ideal para la relajación,
                  entretenimiento o mascotas. Enorme patio cubierto.
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-success" id="rent-3">Alquilar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- --- -->

    <div
      class="modal fade"
      id="modal-4"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              911 TYLER ST, JACKSONVILLE, FL 32209
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-10">
                <img
                  src="https://photos.zillowstatic.com/fp/54c30a8331af0bcccdcccd73c124109b-cc_ft_960.webp"
                  class="img-thumbnail"
                  alt="..."
                />
              </div>

              <div class="col-sm-12 col-md-2">
                <a
                  href="https://photos.zillowstatic.com/fp/1fbc5f59b4eaa40b12b28b3a93d64c83-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/1fbc5f59b4eaa40b12b28b3a93d64c83-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>

                <a
                  href="https://photos.zillowstatic.com/fp/b22a347e32732c72c418768eb50e8cdd-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/b22a347e32732c72c418768eb50e8cdd-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  Esta encantadora casa ofrece una paleta de colores naturales
                  en todo, proporcionando un ambiente tranquilo y acogedor. El
                  espacio de vida flexible incluye otras habitaciones para uso
                  creativo, y el cuarto de baño principal ofrece un buen
                  almacenamiento bajo el fregadero. En el exterior, un patio
                  trasero vallado ofrece un espacio seguro para cualquier
                  persona, y una zona de estar para la relajación y el
                  entretenimiento. Nueva HVAC asegura una temperatura agradable
                  durante todo el año. Esta propiedad es una gran oportunidad
                  para una persona en busca de una casa que ofrece un ambiente
                  tranquilo y seguro. ¡Venga a ver todo lo que esta propiedad
                  tiene para ofrecer!
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-success" id="rent-4">Alquilar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- --- -->

    <div
      class="modal fade"
      id="modal-5"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              1684 NE 31st Ct, Pompano Beach, FL 33064
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-10">
                <img
                  src="https://photos.zillowstatic.com/fp/058922857c25a616223a3a428de5051d-cc_ft_960.webp"
                  class="img-thumbnail"
                  alt="..."
                />
              </div>

              <div class="col-sm-12 col-md-2">
                <a
                  href="https://photos.zillowstatic.com/fp/ca6dbd066bcaefbbe4de97c82621fbf4-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/ca6dbd066bcaefbbe4de97c82621fbf4-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>

                <a
                  href="https://photos.zillowstatic.com/fp/b5d9c5cd6b281b01fed674bfe5d84dd3-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/b5d9c5cd6b281b01fed674bfe5d84dd3-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  ¡NOVEDAD! ¡NUEVO! ¡NUEVO! ¡TODO en esta casa es nuevo de la
                  losa a las vigas! Nueva planta, pisos newseamless, techos
                  nuevos, nuevas paredes, nueva electricidad, fontanería nueva,
                  nueva iluminación, nueva a / c, calentador de agua nuevo,
                  electrodomésticos nuevos, nueva cocina, baños nuevos, nuevas
                  ventanas de impacto de huracanes y puertas, nueva pasarela y
                  asfalto en la calzada. IGS w / nueva bomba. Patio cercado en
                  esquina w mucho / puerta del barco y espacio para la piscina.
                  Simpson correas y madera contrachapada instalada en el ático,
                  el techo pasó la inspección de mitigación de viento. Situado
                  en el centro justo al lado de la muestra Rd y Federal Hwy,
                  cerca de Costco, Walmart, Target, Publix, Aldi, Whole Foods,
                  LA Fitness, You Fit, campos de golf, playa de 1,2 millas, 1,3
                  millas a la I-95. ¡Grandes vecinos son su bono! ¡NUEVO!
                  ¡NUEVO! ¡NUEVO! ¡Todo en esta casa es NUEVO desde la losa
                  hasta las vigas! Utilizar el contrato FAR BAR As Is 6x. Las
                  adendas que deban adjuntarse al contrato se cargan en
                  Suplementos. Por favor indique todos estos addenda incluyendo
                  el Seller's Property Disclosure en el Párrafo 19 del contrato.
                  Title Alliance addendum es opcional, el Vendedor prefiere
                  Title Alliance.
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-success" id="rent-5">Alquilar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- --- -->

    <div
      class="modal fade"
      id="modal-6"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              12420 PECAN HICKORY CT, JACKSONVILLE, FL 32226
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-10">
                <img
                  src="https://photos.zillowstatic.com/fp/f5e189217686561347a90c0aa3cc609f-cc_ft_960.webp"
                  class="img-thumbnail"
                  alt="..."
                />
              </div>

              <div class="col-sm-12 col-md-2">
                <a
                  href="https://photos.zillowstatic.com/fp/57f7141c125330896f7663ba69717822-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/57f7141c125330896f7663ba69717822-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>

                <a
                  href="https://photos.zillowstatic.com/fp/760c09a2fe4921142dd09534bdf690d3-cc_ft_576.webp"
                >
                  <img
                    src="https://photos.zillowstatic.com/fp/760c09a2fe4921142dd09534bdf690d3-cc_ft_576.webp"
                    class="img-thumbnail"
                    alt="..."
                    style="height: 100px"
                    id="zoom-img"
                  />
                </a>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  Entra en tu pedazo de cielo. Este encantador 5 dormitorios, 2
                  baños retiro ofrece un generoso 2.275 pies cuadrados de
                  espacio habitable.Imagínese noches por la chimenea de leña
                  crepitante donde el resplandor del fuego se reflejará en los
                  hermosos pisos de madera y la comodidad de los refrigeradores
                  duales. Con un techo fresco instalado en julio de 2023,
                  preocuparse menos por el mantenimiento y más acerca de hacer
                  recuerdos. Toques modernos abundan, desde accesorios de
                  plomería Moen a un sistema de seguridad Vivint casa de
                  vanguardia completa con 2 cámaras. Otras características
                  incluyen una contraventana de aluminio y un nuevo calentador
                  de agua. Y no se olvide de la increíble comodidad de la
                  piscina de la comunidad / parque, tiendas y restaurantes a
                  pocos pasos de distancia. Esto no es sólo una casa, es su
                  próximo capítulo a la espera de ser escrito. ¡Hágalo suyo hoy!
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-success" id="rent-6">Alquilar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- cartas -->

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" id="casa-1">
          <div class="card" style="width: 18rem; height: 25rem">
            <img
              src="https://photos.zillowstatic.com/fp/5b5bbe7b5e16e75eaf2dc74eeb176511-cc_ft_960.webp"
              class="img-thumbnail"
              alt="..."
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title">32.000,000 USD</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="#"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-1"
              >
                Ver Producto
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" id="casa-2">
          <div class="card" style="width: 18rem; height: 25rem">
            <img
              src="https://photos.zillowstatic.com/fp/d8b3507578c2f271d5596fd1aa83ed09-cc_ft_960.webp"
              class="img-thumbnail"
              alt="..."
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title">350.000,000 USD</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="#"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-2"
                >Ver Producto</a
              >
              <br />
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" id="casa-3">
          <div class="card" style="width: 18rem; height: 25rem">
            <img
              src="https://photos.zillowstatic.com/fp/b733448e8095f61c612e73345427a914-cc_ft_960.webp"
              class="img-thumbnail"
              alt="..."
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title">224.900,000 USD</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="#"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-3"
                >Ver Producto</a
              >
              <br />
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" id="casa-4">
          <div class="card" style="width: 18rem; height: 25rem">
            <img
              src="https://photos.zillowstatic.com/fp/54c30a8331af0bcccdcccd73c124109b-cc_ft_960.webp"
              class="img-thumbnail"
              alt="..."
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title">187.000,000 USD</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="#"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-4"
                >Ver Producto</a
              >
            </div>
            <br />
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" id="casa-5">
          <div class="card" style="width: 18rem; height: 25rem">
            <img
              src="https://photos.zillowstatic.com/fp/058922857c25a616223a3a428de5051d-cc_ft_960.webp"
              class="img-thumbnail"
              alt="..."
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title">475.000,000 USD</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="#"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-5"
                >Ver Producto</a
              >
              <br />
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" id="casa-6">
          <div class="card" style="width: 18rem; height: 25rem">
            <img
              src="https://photos.zillowstatic.com/fp/f5e189217686561347a90c0aa3cc609f-cc_ft_960.webp"
              class="img-thumbnail"
              alt="..."
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title">365.000,000 USD</h5>
              <p class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Soluta, natus minus porro architecto velit deleniti hic
                excepturi ullam qui delectus nam illo sit! Quam consequatur
                perferendis ullam distinctio nulla pariatur.
              </p>
              <a
                href="#"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-6"
                >Ver Producto</a
              >
              <br />
            </div>
          </div>
        </div>
      </div>
    </div>
    
 <!-- footer -->
    
 <footer class="bg-light text-center">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Reseña del sitio</strong>
                </p>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="reseña" class="form-control" />
                  <label class="form-label" for="form5Example27">Sea Amable</label>
                </div>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" id="enviarReseña" class="btn btn-primary mb-4">
                  Enviar
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright: Andres Wasilczuk
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
