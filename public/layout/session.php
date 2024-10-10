<?php
// Datos de la página de inicio - definidos de manera estática
$index_panel = [
    'titulo1' => 'P.A. - COLOMBIA.',
    'portada' => 'bower_components/img/portafolio/IMAGEN1.jpg',
    'portada_concremack' => 'bower_components/img/portafolio/fondo-concremack.png',
    'portada_pei' => 'bower_components/img/portafolio/fondo-pei.png',
    'imagen_pa_one' => 'bower_components/img/logo/Logo-PA-Colombia-color-2.png',
    'imagen_pa_two' => 'bower_components/img/logo/Logo-PA-Colombia-color-2.png',
    'imagen_pais' => 'bower_components/img/logo/pais.png',
    'card-titulo1' => 'LÍNEAS DE NEGOCIO',
    'link_conoce_mas1' => 'Conoce más',
    'card-coment1' => '',
    'comentario-hse-one' => 'Campañas preventivas y
divulgación de lineamientos
HSE para promover el uso
apropiado de EPP según la
naturaleza de la actividad.',
    'comentario-hse-two' => 'Inspección
preoperacional de los
equipos y maquinaria,
simulacros en caso de
emergencia',
    'card-titulo2' => 'INTRODUCCIÓN',
    'card-coment2' => 'En P.A. - Colombia, nos destacamos como una empresa de ingeniería,
obras civiles e infraestructura, con una sólida trayectoria de más de
23 años construyendo los proyectos que mueven al país. Contamos con
la experiencia, el personal calificado, la capacidad de contratación, así
como la maquinaria y equipos necesarios para posicionarnos como su
principal aliado en el desarrollo de sus proyectos.
Además, nos enorgullece nuestra innovación y compromiso con la
sostenibilidad, logrando reducir 305,40 toneladas de CO2eq en 2023.
Nuestra evolución y crecimiento van de la mano con una dedicación
inquebrantable a la responsabilidad ambiental, dejando una huella
verde en cada proyecto',
    'imagen_banner1' => 'bower_components/img/portafolio/CARD1.png',
    'title1' => 'INFRAESTRUCTURA OIL & GAS',
    'coment1' => 'Conoce más sobre nuestros servicios y lo que ofrecemos.',
    'imagen_banner2' => 'bower_components/img/portafolio/CARD2.png',
    'title2' => 'INFRAESTRUCTURA OBRAS CIVILES',
    'coment2' => 'Conoce más sobre nuestros servicios y lo que ofrecemos.',
    'imagen_banner3' => 'bower_components/img/portafolio/CARD3.png',
    'title3' => 'INFRAESTRUCTURA OBRAS VIALES',
    'coment3' => 'Conoce más sobre nuestros servicios y lo que ofrecemos.',
    'title_seven' => 'NUESTROS CLIENTES',
    'title_hse' => 'GESTIÓN HSE',
    'comentario_hse_three' => 'Nuestra gestión en HSE, ha sido destacada por nuestros
clientes, especialmente en actividades críticas. Agradecemos el
reconocimiento y reafirmamos nuestro compromiso continuo con
la seguridad y el bienestar de nuestro equipo.',
    'comentario_aliados' => 'Contamos con la habilidad y la oportunidad de intervenir en cada
departamento del territorio nacional, dejando un impacto tangible y
perdurable en la comunidad a través de nuestras obras.',
    'imagen_one' => 'bower_components/img/portafolio/fondo3.jpg',
    'imagen_two' => 'bower_components/img/portafolio/fondo4.jpg',
    'titulo-five' => 'Gracias al compromiso con la seguridad
aseguramos cada proceso con nuestra política de:',
'titulo-five-accidentes' => '0 ACCIDENTES E INCIDENTES',
    'comentario-five' => 'En la ejecución de cada uno de nuestros proyectos, impera la responsabilidad
con la vida, la seguridad y el bienestar de nuestros colaboradores. Por este
motivo, garantizamos un entorno laboral seguro y protegido, mediante el
análisis de la gestión de riesgos, cumpliendo con los requisitos de la norma
NTC ISO 31000: 2018 al implementar estrategias de prevención de
accidentes e incidentes como:',
    'titulo_pa_one' => 'CERTIFICACIONES',
    'comentario_pa_one' => 'Para garantizar los máximos niveles de calidad que permitan satisfacer las
necesidades de nuestros clientes, todas nuestras actividades están
certificadas según las normas internacionales',
    'imagen_six' => 'bower_components/img/portafolio/IMAGEN1.jpg',
    'title_nacional1' => 'COBERTURA',
    'title_nacional2' => 'NACIONAL',
    'title_reloj' => 'CARGANDO HORA...',
    'title_aliados' => 'ALIADOS ESTRATÉGICOS',
    'imagen_concremack' => 'bower_components/img/logo/logo-empresa/Recurso-10Logo-Concremack-largo-BN.png',
    'title_concremack' => 'CONCREMACK',
    'imagen_pei' => 'bower_components/img/logo/logo-empresa/Logo-PEI-BN.png',
    'title_pei' => 'PEI PERFORACIONES E INGENIERÍA',
    'imagen_hse1' => 'bower_components/img/portafolio/personas1.jpeg',
    'imagen_hse2' => 'bower_components/img/portafolio/maquina1.jpg',
];
?>
<!-- CARDS VIEW -->
<section class="container pt-5">
  <div class="row">
    <div class="col-xl-3">
      <div class="d-xl-block d-flex align-items-center justify-content-between mb-xl-0 mb-4 pb-xl-0 pb-3">
        <h2 class="h1 mb-xl-4 mb-0 pb-xl-3">
          <p>
            <span>
              <strong>
                <b>
                  <code>
                    <?php echo htmlspecialchars($index_panel['card-titulo1']); ?>&#46;
                  </code>
                </b>
              </strong>
            </span>
          </p>
        </h2>
        <span>
          <image src="<?php echo htmlspecialchars($index_panel['imagen_pais']); ?>" class="rounded-3"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </span>
      </div>
    </div>

    <!-- Carousel -->
    <div class="col-xl-9">
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
                <image src="<?php echo htmlspecialchars($index_panel['imagen_banner1']); ?>" class="rounded-3"
                  alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
                  title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <div class="card-body text-center p-3">
                      <p class="fs-sm mb-0">
                        <a href="index7.php" rel="noopener noreferrer" class="btn btn-danger bg-gradient" type="button"
                          aria-label="Dismiss">
                          <?php echo htmlspecialchars($index_panel['link_conoce_mas1']); ?>
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
                <image src="<?php echo htmlspecialchars($index_panel['imagen_banner2']); ?>" class="rounded-3"
                  alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
                  title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <div class="card-body text-center p-3">
                      <p class="fs-sm mb-0">
                        <a href="index6.php" rel="noopener noreferrer" class="btn btn-danger bg-gradient" type="button"
                          aria-label="Dismiss">
                          <?php echo htmlspecialchars($index_panel['link_conoce_mas1']); ?>
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
                <image src="<?php echo htmlspecialchars($index_panel['imagen_banner3']); ?>" class="rounded-3"
                  alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
                  title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <div class="card-body text-center p-3">
                      <p class="fs-sm mb-0">
                        <a href="index2.php" rel="noopener noreferrer" class="btn btn-danger bg-gradient" type="button"
                          aria-label="Dismiss">
                          <?php echo htmlspecialchars($index_panel['link_conoce_mas1']); ?>
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
<!-- BANNER VIEW -->
<section class="container pt-5">
  <div class="container">
    <h2 class="h2">
      <span>
        <strong>
          <b>
            <code>
                  <?php echo htmlspecialchars($index_panel['card-titulo2']); ?>
                </code>
          </b>
        </strong>
      </span>
    </h2>
    <div class="row align-items-center pb-5">
      <div class="col-md-12 col-lg-12 col-xl-12 text-center text-md-start">
        <p class="d-md-none d-lg-block text-dark pb-3 mb-2 mb-md-3" style="text-align: justify;">
          <?php echo htmlspecialchars($index_panel['card-coment2']); ?>&#46;
        </p>
      </div>
    </div>
  </div>
</section>
<!-- HSE VIEW -->
<section class="container pt-5">
  <div class="container">
    <h2 class="h2 text-center text-md-start mb-lg-4">
      <span>
        <strong>
          <b>
            <code>
              <?php echo htmlspecialchars($index_panel['title_hse']); ?>
            </code>
          </b>
        </strong>
      </span>
    </h2>
    <div class="row align-items-center pb-5">
      <div class="col-md-12 col-lg-12 col-xl-12 text-center text-md-start">
        <p class="fs-lg text-dark mb-md-0" style="text-align: justify;">
          <?php echo htmlspecialchars($index_panel['comentario-five']); ?>
        </p>
      </div>
    </div>
  </div>

  <div class="position-relative py-lg-4 py-xl-5">

    <!-- Swiper tabs -->
    <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
      <div id="image-1" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab active" data-jarallax
        data-speed="0.4">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
        <div class="jarallax-img"
          style="background-image: url(<?php echo htmlspecialchars($index_panel['imagen_one']); ?>);">
        </div>
      </div>
      <div id="image-2" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab" data-jarallax
        data-speed="0.4">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
        <div class="jarallax-img"
          style="background-image: url(<?php echo htmlspecialchars($index_panel['imagen_two']); ?>);">
        </div>
      </div>
    </div>

    <!-- Swiper slider -->
    <div class="container position-relative zindex-5 py-5">
      <div class="row py-2 py-md-3">
        <div class="col-xl-5 col-lg-7 col-md-9">

          <!-- Slider controls (Prev / next) -->
          <div class="d-flex justify-content-center justify-content-md-start pb-3 mb-3">
            <button type="button" id="case-study-prev" class="btn btn-prev btn-icon btn-sm bg-white me-2"
              aria-label="Previous">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="case-study-next" class="btn btn-next btn-icon btn-sm bg-white ms-2"
              aria-label="Next">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>

          <!-- Card -->
          <div class="card bg-white shadow-sm p-3">
            <div class="card-body">
              <div class="swiper" data-swiper-options='{
                      "spaceBetween": 30,
                      "loop": true,
                      "tabs": true,
                      "pagination": {
                        "el": "#case-study-pagination",
                        "clickable": true
                      },
                      "navigation": {
                        "prevEl": "#case-study-prev",
                        "nextEl": "#case-study-next"
                      }
                    }'>
                <div class="swiper-wrapper">

                  <!-- Item -->
                  <div class="swiper-slide" data-swiper-tab="#image-1">
                    <image src="<?php echo htmlspecialchars($index_panel['imagen_hse1']); ?>"
                      class="d-block mb-3 img-thumbnail" width="250"
                      alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
                      title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
                    <h3 class="mb-2">
                    </h3>
                    <p class="fs-sm text-dark border-bottom pb-3 mb-3" style="text-align: justify;">
                      <?php echo htmlspecialchars($index_panel['comentario-hse-one']); ?>
                    </p>
                    <p class="pb-2 pb-lg-3 mb-3 text-dark" style="text-align: justify;">
                      <?php echo htmlspecialchars($index_panel['titulo-five']); ?><br />
                      <span>
                        <strong>
                          <b>
                            <code>
                              <?php echo htmlspecialchars($index_panel['titulo-five-accidentes']); ?>
                            </code>
                          </b>
                        </strong>
                      </span>
                    </p>
                    <p class="pb-2 pb-lg-3 mb-3 text-dark" style="text-align: justify;">
                      <?php echo htmlspecialchars($index_panel['comentario_hse_three']); ?>
                    </p>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide" data-swiper-tab="#image-2">
                    <image src="<?php echo htmlspecialchars($index_panel['imagen_hse2']); ?>"
                      class="d-block mb-3 img-thumbnail" width="250"
                      alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
                      title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
                    <h3 class="mb-2">
                    </h3>
                    <p class="fs-sm text-dark border-bottom pb-3 mb-3" style="text-align: justify;">
                      <?php echo htmlspecialchars($index_panel['comentario-hse-two']); ?>
                    </p>
                    <p class="pb-2 pb-lg-3 mb-3 text-dark" style="text-align: justify;">
                      <?php echo htmlspecialchars($index_panel['titulo-five']); ?><br />
                      <span>
                        <strong>
                          <b>
                            <code>
                              <?php echo htmlspecialchars($index_panel['titulo-five-accidentes']); ?>
                            </code>
                          </b>
                        </strong>
                      </span>
                    </p>
                    <p class="pb-2 pb-lg-3 mb-3 text-dark" style="text-align: justify;">
                      <?php echo htmlspecialchars($index_panel['comentario_hse_three']); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="pt-4 mt-3" data-bs-theme="dark">
            <div id="case-study-pagination" class="swiper-pagination position-relative bottom-0"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Awards -->
<section class="container pt-5">
  <h2 class="h2 mb-lg-5 mb-4 pb-lg-0 pb-md-2 text-center">
    <span>
      <strong>
        <b>
          <code>
            <?php echo htmlspecialchars($index_panel['titulo_pa_one']); ?>
          </code>
        </b>
      </strong>
    </span>
  </h2>
  <p class="fs-lg pb-lg-3 mb-4 text-dark" style="text-align: justify;">
    <?php echo htmlspecialchars($index_panel['comentario_pa_one']); ?>&#46;
  </p>
  <section class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
        <div class="d-inline-block bg-light rounded-circle p-3 mb-4">
          <image src="bower_components/img/portafolio/certificado/certificado4.png" width="200"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
        <div class="d-inline-block bg-light rounded-circle p-3 mb-4">
          <image src="bower_components/img/portafolio/certificado/certificado3.png" width="200"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
        <div class="d-inline-block bg-light rounded-circle p-3 mb-4">
          <image src="bower_components/img/portafolio/certificado/certificado2.png" width="200"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
        <div class="d-inline-block bg-light rounded-circle p-3 mb-4">
          <image src="bower_components/img/portafolio/certificado/certificado1.png" width="200"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>
    </div>
  </section>
</section>
<!-- ALIADOS VIEW -->
<section class="container py-5 mb-lg-2">
  <div class="row py-2 py-md-4 py-lg-5">
    <div class="col-xl-12 col-md-5 text-center text-md-start pt-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
      <h2 class="pb-3 mb-1 mb-lg-3">
        <span>
          <strong>
            <b>
              <code>
                  <?php echo htmlspecialchars($index_panel['title_nacional1']); ?>
                  <?php echo htmlspecialchars($index_panel['title_nacional2']); ?>
                </code>
            </b>
          </strong>
        </span>
      </h2>
      <p class="fs-lg pb-3 mb-2 mb-lg-3 text-dark" style="text-align: justify;">
        <?php echo htmlspecialchars($index_panel['comentario_aliados']); ?>
      </p>
      <h5 class="text-center">
        <span>
          <strong>
            <b>
              <code>
                <?php echo htmlspecialchars($index_panel['title_aliados']); ?>
              </code>
            </b>
          </strong>
        </span>
      </h5>
      <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4">
        <div class="col">
          <article class="card card-body border-0 bg-light card-hover-danger">
            <a href="https://concremack.com/" target="_blank" rel="noopener noreferrer">
              <image src="<?php echo htmlspecialchars($index_panel['portada_concremack']); ?>" width="1000"
                class="d-block mx-auto my-2 rounded-3 border-danger shadow-sm card-hover"
                alt="<?php echo htmlspecialchars($index_panel['title_concremack']); ?>"
                title="<?php echo htmlspecialchars($index_panel['title_concremack']); ?>" />
            </a>
          </article>
        </div>
        <div class="col">
          <article class="card card-body border-0 bg-light card-hover-danger">
            <a href="https://peicolombia.co/" target="_blank" rel="noopener noreferrer">
              <image src="<?php echo htmlspecialchars($index_panel['portada_pei']); ?>" width="1000"
                class="d-block mx-auto my-2 rounded-3 border-danger shadow-sm card-hover"
                alt="<?php echo htmlspecialchars($index_panel['title_pei']); ?>"
                title="<?php echo htmlspecialchars($index_panel['title_pei']); ?>" />
            </a>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Swiper slider modo automatico -->
<section class="container mb-5 pb-lg-5 pb-md-4 pb-3">
  <h2 class="mb-0">
    <span>
      <strong>
        <b>
          <code>
            <?php echo htmlspecialchars($index_panel['title_seven']); ?>
          </code>
        </b>
      </strong>
    </span>
  </h2>
  <!-- Swiper slider -->
  <div class="swiper mb-xl-3 text-center" data-swiper-options='{
          "spaceBetween": 24,
          "autoplay": true,
          "breakpoints": {
            "0": {
              "slidesPerView": 2
            },
            "500": {
              "slidesPerView": 3
            },
            "768": {
              "slidesPerView": 4
            },
            "1200": {
              "slidesPerView": 6
            }
          },
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          }
        }'>
    <div class="swiper-wrapper">

      <!-- Swiper item 1 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente1.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 2 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente2.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 3 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente3.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 4 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente4.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 5 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente5.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 6 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente6.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 7 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente7.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 8 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente8.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 9 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente9.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 10 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente10.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 11 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente11.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 12 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente12.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 13 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente13.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 14 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente14.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 15 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente15.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>

      <!-- Swiper item 16 -->
      <div class="swiper-slide">
        <div class="mb-3">
          <image src="bower_components/img/logo/clientes/cliente16.png" class="d-dark-mode-none d-inline-block"
            alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
            title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
        </div>
      </div>
    </div>

    <!-- Swiper pagination -->
    <div class="swiper-pagination position-static mt-4 pt-lg-3 pt-2"></div>
  </div>
</section>
