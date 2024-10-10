<?php
// Datos de la sección "Nosotros" - establecidos de manera estática
$nosotros = [
    'titulo1' => 'P.A. - COLOMBIA.',
    'title_history' => 'HISTORIA',
    'title_nosotros' => '',
    'titulo-mision' => 'MISIÓN',
    'comentario-mision' => 'MISIÓN',
    'titulo-vision' => 'VISIÓN',
    'comentario-vision' => 'VISIÓN',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'MISIÓN Y VISIÓN.',
    'portada1' => 'bower_components/img/landing/saas-5/hero-bg-pattern.png',
    'banner-nosotros' => 'bower_components/img/portafolio/banner-nosotros.jpg',
    'titulo-one' => 'MISIÓN',
    'comentario-one' => 'P.A. Colombia somos una empresa de obras de infraestructura e ingeniería que busca brindar la mejor solución técnica, humana y financiera para la ejecución de proyectos de ingeniería y sus diferentes especialidades. Nuestras operaciones buscan viabilizar, construir y rentabilizar los proyectos de infraestructura basados en cuatro principios básicos: optimización de recursos, prioridad la vida de nuestros colaboradores y grupos de interés, sostenibilidad ambiental y la equidad, inclusión y diversidad en todas las áreas de nuestros proyectos.',
    'titulo-two' => 'VISIÓN',
    'comentario-two' => 'Para el año 2030 P.A. Colombia busca posicionarse dentro de las 10 empresas más importantes de infraestructura e ingeniería de Colombia, siendo reconocida por los altos estándares de calidad de sus servicios, por su compromiso con la sostenibilidad ambiental, por priorizar la vida, higiene y seguridad de sus colaboradores, y por promover la diversidad, inclusión y equidad de sus empleados, proveedores, clientes y grupos de interés.',
    'titulo-valores' => 'MISIÓN VISIÓN VALORES',
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
    'title_valores' => 'NUESTROS VALORES'
];
?>
<style type="text/css">
.iframe-container-flex-three {
  display: flex;
  justify-content: space-between;
  /* Espacio entre los iframes */
  align-items: center;
  width: 100%;
  height: 120vh;
  /* Toda la altura visible del viewport */
  gap: 10px;
  /* Espacio entre los iframes */
}

.iframe-container-flex-three .iframe-three {
  width: 100%;
  /* Ambos iframes tomarán el 48% del ancho, dejando un 4% para el gap */
  height: 100%;
  border: 0;
}
</style>
<style type="text/css">
.iframe-container-flex-four {
  display: flex;
  justify-content: space-between;
  /* Espacio entre los iframes */
  align-items: center;
  width: 100%;
  height: 150vh;
  /* Toda la altura visible del viewport */
  gap: 10px;
  /* Espacio entre los iframes */
}

.iframe-container-flex-four .iframe-four {
  width: 100%;
  /* Ambos iframes tomarán el 48% del ancho, dejando un 4% para el gap */
  height: 100%;
  border: 0;
}
</style>
<?php include 'option.php'; ?>
<main class="page-wrapper">
  <?php include 'navbar-two.php'; ?>
  <section class="container pt-5">
    <section class="bg-light py-5">
      <section class="container mb-5 pb-lg-5 pt-2 pt-md-4">
        <image src="<?php echo htmlspecialchars($nosotros['banner-nosotros']); ?>"
          alt="<?php echo htmlspecialchars($nosotros['menu-title2']); ?>"
          title="<?php echo htmlspecialchars($nosotros['menu-title2']); ?>" class="rounded-3" />
      </section>
      <div class="row row-cols-1 row-cols-md-2 gx-3 gx-lg-4">
        <div class="col-md-6 mb-3 mb-md-0">
          <div class="card border-0 bg-light h-100 p-xl-4">
            <div class="card border-0 p-4 p-xxl-5">
              <div class="card-body">
                <p class="card-text fs-sm" style="text-align: justify;">
                <h2 class="h2 text-center pb-3 pb-md-0 mb-md-5">
                  <span>
                    <strong>
                      <b>
                        <code>
                            <?php echo htmlspecialchars($nosotros['titulo-mision']); ?>
                          </code>
                      </b>
                    </strong>
                  </span>
                </h2>
                <!-- Quotation -->
                <figure class="position-relative ps-4">
                  <span class="position-absolute top-0 start-0 w-3 h-100 bg-danger"></span>
                  <blockquote class="blockquote fs-xl fw-medium text-dark ps-1 ps-sm-3">
                    <p style="text-align: justify; font-size: 18px;">
                      <?php echo htmlspecialchars($nosotros['comentario-one']); ?>
                    </p>
                  </blockquote>
                </figure>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3 mb-md-0">
          <div class="card border-0 bg-light h-100 p-xl-4">
            <div class="card border-0 p-4 p-xxl-5">
              <div class="card-body">
                <p class="card-text fs-sm" style="text-align: justify;">
                <h2 class="h2 text-center pb-3 pb-md-0 mb-md-5">
                  <span>
                    <strong>
                      <b>
                        <code>
                            <?php echo htmlspecialchars($nosotros['titulo-vision']); ?>
                          </code>
                      </b>
                    </strong>
                  </span>
                </h2>
                <!-- Quotation -->
                <figure class="position-relative ps-4">
                  <span class="position-absolute top-0 start-0 w-3 h-100 bg-danger"></span>
                  <blockquote class="blockquote fs-xl fw-medium text-dark ps-1 ps-sm-3">
                    <p style="text-align: justify; font-size: 19px;">
                      <?php echo htmlspecialchars($nosotros['comentario-two']); ?>
                    </p>
                  </blockquote>
                </figure>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <h2 class="h2 text-center pb-3 pb-md-0 mb-md-5">
      <span>
        <strong>
          <b>
            <code>
                  <?php echo htmlspecialchars($nosotros['title_valores']); ?>
                </code>
          </b>
        </strong>
      </span>
    </h2>
    <div class="iframe-container-flex-three">
      <iframe src="nosotros-valores.php" class="iframe-three" frameborder="0" allowfullscreen="" loading="lazy"
        title="NOSOTROS"></iframe>
    </div>
    <section class="container pt-5"></section>
    <div class="col-lg-12 mb-5 mb-lg-0">
      <h2 class="h2 text-center pb-3 pb-md-0 mb-md-5">
        <span>
          <strong>
            <b>
              <code>
                  <?php echo htmlspecialchars($nosotros['title_history']); ?>
                </code>
            </b>
          </strong>
        </span>
      </h2>
      <div class="iframe-container-flex-four">
        <iframe src="linea-de-tiempo.php" class="iframe-four" frameborder="0" allowfullscreen="" loading="lazy"
          title="HISTORIA"></iframe>
      </div>
    </div>
  </section>
  <section class="container pt-5"></section>
</main>
<?php include 'barra-vertical-social.php'; ?>
<?php include 'footer.php'; ?>
<?php include 'data-scroll.php'; ?>
