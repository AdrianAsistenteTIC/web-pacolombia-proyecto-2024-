<?php
// Datos de la sección "Portafolio" - establecidos de manera estática
$portfolio = [
    'portada' => 'bower_components/img/portafolio/BANNER2.png',
    'title-portada' => 'INFRAESTRUCTURA OBRAS CIVILES',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'INFRAESTRUCTURA OBRAS CIVILES',
    'title_portafolio' => 'INFRAESTRUCTURA OBRAS CIVILES',
    'card' => [
        'titulo1' => 'INFRAESTRUCTURA OBRAS CIVILES',
        'imagen-card1' => 'bower_components/img/portafolio/OBRAS-CIVILES/CARD1.png',
        'titulo-card1' => 'Contrato 4077644 - Secretaría Distrital de Educación.',
        'comentario-card1' => 'Obras de adecuación, mejoramiento y
mantenimiento correctivo de las plantas
físicas de la Secretaría de Educación.',
        'imagen-card2' => 'bower_components/img/portafolio/OBRAS-CIVILES/CARD2.png',
        'titulo-card2' => 'Contrato 2665 - Instituto Distrital de Recreación y Deporte.',
        'comentario-card2' => 'Mantenimiento, adecuación reparación y
recuperación de la infraestructura de los
parques de la red de proximidad - Grupo 5.',
        'imagen-card3' => 'bower_components/img/portafolio/OBRAS-CIVILES/CARD3.png',
        'titulo-card3' => 'Contrato 1867-2020 - Secretaría Distrital de Convivencia.',
        'comentario-card3' => 'Optimización de la infraestructura de los
centros, sedes y predios donde la
Secretaría presta sus servicios sociales.',
        'imagen-card4' => 'bower_components/img/portafolio/OBRAS-CIVILES/CARD4.png',
        'titulo-card4' => 'Contrato 12132 - Secretaria Distrital de Integración.',
        'comentario-card4' => 'Optimización de la infraestructura
de los centros, sedes y predios
del Grupo 2.',
        'imagen-card5' => 'bower_components/img/portafolio/OBRAS-CIVILES/CARD5.png',
        'titulo-card5' => 'Contrato LP-DALL-UAC-043 - Alcaldía Mayor de Cartagena',
        'comentario-card5' => 'Obras de mantenimiento y reparaciones locativas en sedes educativas oficiales del Distrito de Cartagena.'
    ]
];
?>

<section class="container pt-5">
  <div class="row">
    <section class="container mb-5 pb-lg-5 pt-2 pt-md-4">
      <image src="<?php echo htmlspecialchars($portfolio['portada']); ?>"
        alt="<?php echo htmlspecialchars($portfolio['menu-title2']); ?>"
        title="<?php echo htmlspecialchars($portfolio['menu-title2']); ?>" class="rounded-3" />
    </section>
    <div class="gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" data-video="true">

      <!-- Item 1 -->
      <div class="col">
        <!-- Portfolio grid view: Card style 1 -->
        <a href="#" rel="noopener noreferrer" class="card card-portfolio card-hover bg-transparent border-0">
          <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
            <div class="position-relative zindex-2">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-autohide="false">
                <div class="toast-header bg-danger text-white">
                  <i class="bx bx-chevrons-right fs-lg me-2"></i>
                  <span class="me-auto">
                    <?php echo htmlspecialchars($portfolio['card']['titulo-card1']); ?>
                  </span>
                </div>
                <div class="toast-body text-dark">
                  <p class="card-text" style="text-align: justify;">
                    <?php echo htmlspecialchars($portfolio['card']['comentario-card1']); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-img">
            <image src="<?php echo htmlspecialchars($portfolio['card']['imagen-card1']); ?>" class="rounded-3"
              alt="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>"
              title="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>" />
          </div>
        </a>
      </div>

      <!-- Item 2 -->
      <div class="col">
        <!-- Portfolio grid view: Card style 2 -->
        <a href="#" rel="noopener noreferrer" class="card card-portfolio card-hover bg-transparent border-0">
          <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
            <div class="position-relative zindex-2">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-autohide="false">
                <div class="toast-header bg-danger text-white">
                  <i class="bx bx-chevrons-right fs-lg me-2"></i>
                  <span class="me-auto">
                    <?php echo htmlspecialchars($portfolio['card']['titulo-card2']); ?>
                  </span>
                </div>
                <div class="toast-body text-dark">
                  <p class="card-text" style="text-align: justify;">
                    <?php echo htmlspecialchars($portfolio['card']['comentario-card2']); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-img">
            <image src="<?php echo htmlspecialchars($portfolio['card']['imagen-card2']); ?>" class="rounded-3"
              alt="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>"
              title="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>" />
          </div>
        </a>
      </div>

      <!-- Item 3 -->
      <div class="col">
        <!-- Portfolio grid view: Card style 3 -->
        <a href="#" rel="noopener noreferrer" class="card card-portfolio card-hover bg-transparent border-0">
          <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
            <div class="position-relative zindex-2">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-autohide="false">
                <div class="toast-header bg-danger text-white">
                  <i class="bx bx-chevrons-right fs-lg me-2"></i>
                  <span class="me-auto">
                    <?php echo htmlspecialchars($portfolio['card']['titulo-card3']); ?>
                  </span>
                </div>
                <div class="toast-body text-dark">
                  <p class="card-text" style="text-align: justify;">
                    <?php echo htmlspecialchars($portfolio['card']['comentario-card3']); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-img">
            <image src="<?php echo htmlspecialchars($portfolio['card']['imagen-card3']); ?>" class="rounded-3"
              alt="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>"
              title="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>" />
          </div>
        </a>
      </div>

      <!-- Item 4 -->
      <div class="col">
        <!-- Portfolio grid view: Card style 4 -->
        <a href="#" rel="noopener noreferrer" class="card card-portfolio card-hover bg-transparent border-0">
          <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
            <div class="position-relative zindex-2">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-autohide="false">
                <div class="toast-header bg-danger text-white">
                  <i class="bx bx-chevrons-right fs-lg me-2"></i>
                  <span class="me-auto">
                    <?php echo htmlspecialchars($portfolio['card']['titulo-card4']); ?>
                  </span>
                </div>
                <div class="toast-body text-dark">
                  <p class="card-text" style="text-align: justify;">
                    <?php echo htmlspecialchars($portfolio['card']['comentario-card4']); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-img">
            <image src="<?php echo htmlspecialchars($portfolio['card']['imagen-card4']); ?>" class="rounded-3"
              alt="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>"
              title="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>" />
          </div>
        </a>
      </div>

      <!-- Item 5 -->
      <div class="col">
        <!-- Portfolio grid view: Card style 5 -->
        <a href="#" rel="noopener noreferrer" class="card card-portfolio card-hover bg-transparent border-0">
          <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
            <div class="position-relative zindex-2">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-autohide="false">
                <div class="toast-header bg-danger text-white">
                  <i class="bx bx-chevrons-right fs-lg me-2"></i>
                  <span class="me-auto">
                    <?php echo htmlspecialchars($portfolio['card']['titulo-card5']); ?>
                  </span>
                </div>
                <div class="toast-body text-dark">
                  <p class="card-text" style="text-align: justify;">
                    <?php echo htmlspecialchars($portfolio['card']['comentario-card5']); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-img">
            <image src="<?php echo htmlspecialchars($portfolio['card']['imagen-card5']); ?>" class="rounded-3"
              alt="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>"
              title="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>" />
          </div>
        </a>
      </div>

      <!-- Add as many items as you need -->
    </div>
  </div>
</section>
<section class="container pt-5"></section>