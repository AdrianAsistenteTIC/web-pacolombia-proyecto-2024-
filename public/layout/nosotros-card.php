<?php
// Datos de la sección "Nosotros" - establecidos de manera estática
$nosotros = [
    'titulo1' => 'P.A. - COLOMBIA.',
    'title_nosotros' => '',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo-mision' => 'MISIÓN',
    'comentario-mision' => 'MISIÓN',
    'titulo-vision' => 'VISIÓN',
    'comentario-vision' => 'VISIÓN',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'MISIÓN Y VISIÓN.',
    'titulo-one' => 'MISIÓN',
    'comentario-one' => 'P.A. Colombia somos una empresa de obras de infraestructura e ingeniería que busca brindar la mejor solución técnica, humana y financiera para la ejecución de proyectos de ingeniería y sus diferentes especialidades. Nuestras operaciones buscan viabilizar, construir y rentabilizar los proyectos de infraestructura basados en cuatro principios básicos: optimización de recursos, prioridad la vida de nuestros colaboradores y grupos de interés, sostenibilidad ambiental y la equidad, inclusión y diversidad en todas las áreas de nuestros proyectos.',
    'titulo-two' => 'VISIÓN',
    'comentario-two' => 'Para el año 2030 P.A. Colombia busca posicionarse dentro de las 10 empresas más importantes de infraestructura e ingeniería de Colombia, siendo reconocida por los altos estándares de calidad de sus servicios, por su compromiso con la sostenibilidad ambiental, por priorizar la vida, higiene y seguridad de sus colaboradores, y por promover la diversidad, inclusión y equidad de sus empleados, proveedores, clientes y grupos de interés.',
    'titulo-valores' => 'VALORES CORPORATIVOS',
    'titulo-valores-one' => 'INTEGRIDAD',
    'comentario-valores-one' => 'Aseguramos coherencia entre lo que nos proponemos y lo que hacemos. Actuamos con transparencia, honestidad y ética, generando confianza y respeto en nuestros clientes, colaboradores y comunidad.',
    'titulo-valores-two' => 'SOSTENIBILIDAD',
    'comentario--valores-two' => 'Buscamos constantemente mejorar nuestras prácticas para hacer nuestros procesos más eficaces y amigables con el medio ambiente y el entorno.',
    'titulo-valores-three' => 'FELICIDAD DE NUESTRO COLABORADORES',
    'comentario--valores-three' => 'Fomentamos un entorno donde las personas puedan desarrollar todo su potencial, sintiendo satisfacción del deber cumplido y la plenitud de su crecimiento profesional y personal.',
    'titulo-valores-four' => 'HUMILDAD',
    'comentario--valores-four' => 'Reconocemos nuestras fortalezas y logros, así como nuestras debilidades y oportunidades de mejora, manteniéndonos en constante aprendizaje y desarrollo.',
    'titulo-valores-five' => 'EXCELENCIA EN EL SERVICIO',
    'comentario--valores-five' => 'Nos anticipamos a las necesidades, superamos las expectativas y nos convertimos en los principales aliados de nuestros clientes en el desarrollo de sus proyectos, generando valor en sus operaciones.',
    'imagen_one' => 'bower_components/img/portafolio/1.png',
    'imagen_two' => 'bower_components/img/portafolio/2.png',
    'imagen_three' => 'bower_components/img/portafolio/3.png',
    'imagen_four' => 'bower_components/img/portafolio/4.png',
    'imagen_five' => 'bower_components/img/portafolio/5.png'
];
?>
<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title data-rh="true"></title>
  <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="assets/libs/glightbox/dist/css/glightbox.min.css" rel="stylesheet" type="text/css" media="all" />

  <link href="assets/libs/simplebar/dist/simplebar.min.css" media="screen" rel="stylesheet" type="text/css"
    media="all" />
  <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" media="screen" rel="stylesheet" type="text/css"
    media="all" />

  <link href="assets/libs/scrollcue/scrollCue.css" media="screen" rel="stylesheet" type="text/css" media="all" />
  <link href="assets/fonts/css/boxicons.min.css" media="screen" rel="stylesheet" type="text/css" media="all" />
  <link href="assets/css/theme.min.css" media="screen" rel="stylesheet" type="text/css" media="all" />

  <script src="assets/js/vendors/color-modes.js" type="text/javascript" charset="UTF-8"></script>

  <!-- Analytics Code -->
  <script async="" src="gtag/js?id=G-M8S4MT3EYG" type="text/javascript" charset="UTF-8"></script>
  <script type="text/javascript" charset="UTF-8">
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag("js", new Date());

  gtag("config", "G-M8S4MT3EYG");
  </script>
  <script type="text/javascript" charset="UTF-8">
  (function(c, l, a, r, i, t, y) {
    c[a] =
      c[a] ||
      function() {
        (c[a].q = c[a].q || []).push(arguments);
      };
    t = l.createElement(r);
    t.async = 1;
    t.src = "https://www.clarity.ms/tag/" + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
  })(window, document, "clarity", "script", "kss8za9j58");
  </script>
</head>

<body>
  <section class="py-xl-9 py-5" data-cue="fadeIn">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card-grid" data-cue="zoomIn">
            <div class="card-grid-inner">
              <h3 class="card-grid-heading" style="text-align: justify;">
                <?php echo htmlspecialchars($nosotros['titulo-valores-one']); ?>
              </h3>
              <div class="card-grid-text">
                <p class="mb-0" style="text-align: justify;">
                  <?php echo htmlspecialchars($nosotros['comentario-valores-one']); ?>
                </p>
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="d-block d-lg-none">
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="card-grid-image">
              <image src="<?php echo htmlspecialchars($nosotros['imagen_one']); ?>" class="rounded-3 img-fluid"
                width="200" alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
                title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-grid" data-cue="zoomIn">
            <div class="card-grid-inner">
              <h3 class="card-grid-heading" style="text-align: justify;">
                <?php echo htmlspecialchars($nosotros['titulo-valores-two']); ?>
              </h3>
              <div class="card-grid-text">
                <p class="mb-0" style="text-align: justify;">
                  <?php echo htmlspecialchars($nosotros['comentario--valores-two']); ?>
                </p>
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="d-block d-lg-none">
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="card-grid-image">
              <image src="<?php echo htmlspecialchars($nosotros['imagen_two']); ?>" class="rounded-3 img-fluid"
                width="200" alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
                title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-grid" data-cue="zoomIn">
            <div class="card-grid-inner">
              <h3 class="card-grid-heading" style="text-align: justify;">
                <?php echo htmlspecialchars($nosotros['titulo-valores-three']); ?>
              </h3>
              <div class="card-grid-text">
                <p class="mb-0" style="text-align: justify;">
                  <?php echo htmlspecialchars($nosotros['comentario--valores-three']); ?>
                </p>
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="d-block d-lg-none">
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="card-grid-image">
              <image src="<?php echo htmlspecialchars($nosotros['imagen_three']); ?>" class="rounded-3 img-fluid"
                width="200" alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
                title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-grid" data-cue="zoomIn">
            <div class="card-grid-inner">
              <h3 class="card-grid-heading" style="text-align: justify;">
                <?php echo htmlspecialchars($nosotros['titulo-valores-four']); ?>
              </h3>
              <div class="card-grid-text">
                <p class="mb-0" style="text-align: justify;">
                  <?php echo htmlspecialchars($nosotros['comentario--valores-four']); ?>
                </p>
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="d-block d-lg-none">
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="card-grid-image">
              <image src="<?php echo htmlspecialchars($nosotros['imagen_four']); ?>" class="rounded-3 img-fluid"
                width="200" alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
                title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-grid" data-cue="zoomIn">
            <div class="card-grid-inner">
              <h3 class="card-grid-heading" style="text-align: justify;">
                <?php echo htmlspecialchars($nosotros['titulo-valores-five']); ?>
              </h3>
              <div class="card-grid-text">
                <p class="mb-0" style="text-align: justify;">
                  <?php echo htmlspecialchars($nosotros['comentario--valores-five']); ?>
                </p>
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="d-block d-lg-none">
                <a href="#" rel="noopener noreferrer" class="icon-link icon-link-hover card-grid-link mt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-arrow-right" viewbox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="card-grid-image">
              <image src="<?php echo htmlspecialchars($nosotros['imagen_five']); ?>" class="rounded-3 img-fluid"
                width="200" alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
                title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Libs JS -->
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript" charset="UTF-8">
  </script>
  <script src="assets/libs/simplebar/dist/simplebar.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/libs/headhesive/dist/headhesive.min.js" type="text/javascript" charset="UTF-8"></script>

  <!-- Theme JS -->
  <script src="assets/js/theme.min.js" type="text/javascript" charset="UTF-8"></script>

  <script src="assets/libs/jarallax/dist/jarallax.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/js/vendors/jarallax.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/libs/parallax-js/dist/parallax.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/js/vendors/parallax.js" type="text/javascript" charset="UTF-8"></script>
  <!-- Swiper JS -->
  <script src="assets/libs/swiper/swiper-bundle.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/js/vendors/swiper.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/libs/glightbox/dist/js/glightbox.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/js/vendors/glight.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/libs/scrollcue/scrollCue.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/js/vendors/scrollcue.js" type="text/javascript" charset="UTF-8"></script>
  <script src="assets/js/vendors/tab-to-dropdown.js" type="text/javascript" charset="UTF-8"></script>
</body>

</html>