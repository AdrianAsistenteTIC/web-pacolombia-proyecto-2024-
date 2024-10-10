<?php
// Datos de la Línea De Negocio - definidos de manera estática
$linea_negocio = [
    'titulo1' => 'P.A. - COLOMBIA.',
    'imagen1' => 'bower_components/img/año/6.png',
    'imagen2' => 'bower_components/img/año/3.png',
    'imagen3' => 'bower_components/img/año/5.png',
    'imagen4' => 'bower_components/img/año/4.png',
    'portada' => 'bower_components/img/portafolio/IMAGEN1.jpg',
    'imagen-banner-one' => 'bower_components/img/portafolio/CARD1.png',
    'title-one' => 'INFRAESTRUCTURA OIL & GAS',
    'coment-one' => 'Conoce más sobre nuestros servicios y lo que ofrecemos.',
    'imagen-banner-two' => 'bower_components/img/portafolio/CARD2.png',
    'title-two' => 'INFRAESTRUCTURA OBRAS CIVILES',
    'coment-two' => 'Conoce más sobre nuestros servicios y lo que ofrecemos.',
    'imagen-banner-three' => 'bower_components/img/portafolio/CARD3.png',
    'title-three' => 'INFRAESTRUCTURA OBRAS VIALES',
    'coment-three' => 'Conoce más sobre nuestros servicios y lo que ofrecemos.',
    'title_history' => 'HISTORIA',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'LÍNEA DE NEGOCIO',
    'titulo' => 'LÍNEA DE NEGOCIO',
    'subtitulo' => 'Conoce más sobre nuestros servicios y lo que ofrecemos.',
    'imagen_banner' => 'banner_empresa.png', // Asegúrate de que el archivo de la imagen esté en la misma carpeta que este archivo PHP
    'link_conoce_mas' => 'index4.php', // Reemplaza con el enlace real a más información
    'link_conoce_mas1' => 'Conoce más', // Reemplaza con el enlace real a más información
    'mision-vision-valores' => 'MISIÓN VISIÓN VALORES',
    'imagen_banner1' => 'bower_components/img/portafolio/IMAGEN3.png',
    'title1' => 'TITULO 1',
    'coment1' => 'COMENTARIO 1',
    'imagen_banner2' => 'bower_components/img/portafolio/IMAGEN3.png',
    'title2' => 'TITULO 2',
    'coment2' => 'COMENTARIO 2',
    'imagen_banner3' => 'bower_components/img/portafolio/IMAGEN3.png',
    'title3' => 'TITULO 3',
    'coment3' => 'COMENTARIO 3',
    'imagen_banner4' => 'bower_components/img/portafolio/IMAGEN3.png',
    'title4' => 'TITULO 4',
    'coment4' => 'COMENTARIO 4',
    'title_one' => 'TITULO 1',
    'title_two' => 'TITULO 2',
    'portada-one' => 'bower_components/img/portafolio/personas3.jpg',
    'titulo-one' => 'DETALLES DEL AÑO 2016',
    'comentario-one' => 'En Hotel Dann Carlton Bogota D.C. - COLOMBIA.',
    'portada-two' => 'bower_components/img/portafolio/personas2.jpg',
    'titulo-two' => 'DETALLES DEL AÑO 2020',
    'comentario-two' => 'Nos encontramos ejecutando obras civiles, eléctricas, mecánicas e instrumentación para el hub sur de @ecopetroloficial',
    'portada-three' => 'bower_components/img/portafolio/fondo5.jpeg',
    'titulo-three' => 'DETALLES DEL AÑO 2022',
    'comentario-three' => '¡Finalizamos nuestra ODS2!

Dando cumplimiento al contrato marco 3045405 con nuestro cliente @ecopetroloficial, culminamos las obras correspondientes a la intervención en el CPF 2 de Campo Rubiales con el objetivo de realizar obras para la contrucción de facilidades y ampliación de tratamientos y disposición de fluidos en Puerto Gaitán.

En esta intervención represento un reto constructivo para nuestra compañ+ia ya que cubrimos la obra desde direfentes frentes: Obras civiles, mecánicas, eléctricas, de instrumentación. En las actividades que se destacan, se encuentra la puesta en marcha del sistema de inyección de fluidos a través de las bombas booster, y la construcción de la linea de alta presión por una extensión de 934 metros.

Un dato clave en la ejecución de este proyecto, es la meta de cero accidentes e incidentes, lo que deja claro nuestro compromiso con la seguridad y el bienestar de nuestros colaboradores

¡Juntos construimos país!',
    'portada-four' => 'bower_components/img/portafolio/maquina14.jpg',
    'titulo-four' => 'DETALLES DEL AÑO 2024',
    'comentario-four' => 'Avanzamos con la Intervención en nuestra ODS 008 - HUB - OQ en Acacías! 🚀 para nuestro cliente @ecopetroloficial

En este proyecto emplearemos la tecnología de Perforación Horizontal Dirigida (PHD) para interconectar la estación Acacias con la estación Castilla 3 a través de Tres cruces dirigidos.

Entre los avances más representativos se encuentra el halado de tubería de 24" del cruce N° 2.
La perforación piloto del cruce N° 1, que atravesará el Río Orotoy🌊, este cruce es el más representativo, por su distancia y el diámetro de la tubería.

Por último, realizamos las adecuaciones locativas para el cruce N° 3 con la conformación de las plataformas, este cruce asegura el ecosistema presente en la zona teniendo en cuenta que evitara el paso por el Caño Alfare.

Próximamente te mostraremos las medidas de control ambiental y de aseguramiento HSE que adoptamos en la ejecución de esta ODS.',
    'imagen_pa' => 'bower_components/img/logo/Logo-PA-Colombia-color-2.png',
    'imagen_pa_one' => 'bower_components/img/logo/Logo-PA-Colombia-color-2.png',
    'titulo-speaker-one' => 'INNOVACIÓN',
    'titulo-speaker-two' => 'SOSTENIBILIDAD',
    'titulo-speaker-three' => 'SOLUCIONES VERDES',
    'titulo-speaker-four' => 'LÍNEA DE TRANSPARENCIA'
];
?>

<section class="container pt-5">
  <div class="row">
    <!-- Breadcrumb -->
    <nav class="py-4" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 py-3">
        <li class="breadcrumb-item">
          <a href="index.php" rel="noopener noreferrer">
            <i class="bx bx-home-alt fs-lg me-1"></i><?php echo htmlspecialchars($linea_negocio['menu-title1']); ?>
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          <?php echo htmlspecialchars($linea_negocio['menu-title2']); ?>
        </li>
      </ol>
    </nav>
    <!-- Sección de Banner -->
    <div class="col-lg-12 mb-5 mb-lg-0">
      <h2 class="h2 text-center pb-3 pb-md-0 mb-md-5">
        <span>
          <strong>
            <b>
              <code>
                  <?php echo htmlspecialchars($linea_negocio['title_history']); ?>
                </code>
            </b>
          </strong>
        </span>
      </h2>
      <div class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden">
        <iframe class="d-block h-100" src="linea-de-tiempo.php" allowfullscreen="" loading="lazy"
          title="HISTORIA"></iframe>
      </div>
    </div>
  </div>
</section>
<section class="container pt-5">
  <hr />
</section>
<section class="container pt-5">
  <div class="row">

    <!-- Carousel -->
    <div class="col-xl-12">
      <div class="swiper" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "loop": true,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "576": {
                  "slidesPerView": 2
                },
                "768": {
                  "slidesPerView": 3
                },
                "1000": {
                  "slidesPerView": 3
                }
              }
            }'>
        <div class="swiper-wrapper">

          <!-- Item -->
          <article class="swiper-slide h-auto pb-3">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <image src="<?php echo htmlspecialchars($linea_negocio['imagen-banner-one']); ?>" class="rounded-3"
                  alt="<?php echo htmlspecialchars($linea_negocio['titulo1']); ?>"
                  title="<?php echo htmlspecialchars($linea_negocio['titulo1']); ?>" />
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <div class="card-body text-center p-3">
                      <p class="fs-sm mb-0">
                        <a href="index7.php" rel="noopener noreferrer" class="btn btn-danger bg-gradient" type="button"
                          aria-label="Dismiss">
                          <?php echo htmlspecialchars($linea_negocio['link_conoce_mas1']); ?>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <!-- Item -->
          <article class="swiper-slide h-auto pb-3">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <image src="<?php echo htmlspecialchars($linea_negocio['imagen-banner-two']); ?>" class="rounded-3"
                  alt="<?php echo htmlspecialchars($linea_negocio['titulo1']); ?>"
                  title="<?php echo htmlspecialchars($linea_negocio['titulo1']); ?>" />
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <div class="card-body text-center p-3">
                      <p class="fs-sm mb-0">
                        <a href="index6.php" rel="noopener noreferrer" class="btn btn-danger bg-gradient" type="button"
                          aria-label="Dismiss">
                          <?php echo htmlspecialchars($linea_negocio['link_conoce_mas1']); ?>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <!-- Item -->
          <article class="swiper-slide h-auto pb-3">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <image src="<?php echo htmlspecialchars($linea_negocio['imagen-banner-three']); ?>" class="rounded-3"
                  alt="<?php echo htmlspecialchars($linea_negocio['titulo1']); ?>"
                  title="<?php echo htmlspecialchars($linea_negocio['titulo1']); ?>" />
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <div class="card-body text-center p-3">
                      <p class="fs-sm mb-0">
                        <a href="index2.php" rel="noopener noreferrer" class="btn btn-danger bg-gradient" type="button"
                          aria-label="Dismiss">
                          <?php echo htmlspecialchars($linea_negocio['link_conoce_mas1']); ?>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
      </div>
    </div>
  </div>
</section>