<?php
// Datos de la sección "Portafolio" - establecidos de manera estática
$portfolio = [
    'portada' => 'bower_components/img/portafolio/BANNER3.png',
    'title-portada' => 'INFRAESTRUCTURA OIL & GAS',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'INFRAESTRUCTURA OIL & GAS',
    'title_portafolio' => 'INFRAESTRUCTURA OIL & GAS',
    'card' => [
        'titulo1' => 'INFRAESTRUCTURA OIL & GAS',
        'imagen-card1' => 'bower_components/img/portafolio/OIL-GAS/CARD1.png',
        'titulo-card1' => 'ODS 008 - Contrato Marco con Ecopetrol: 3045305',
        'comentario-card1' => 'Construcción de líneas mecánicas en la
estación Castilla 3, entre las estaciones Castilla
3 - Acacias y clústeres de la línea de
interconexión.',
        'imagen-card2' => 'bower_components/img/portafolio/OIL-GAS/CARD2.png',
        'titulo-card2' => 'ODS 007 - Contrato Marco con Ecopetrol: 3045305',
        'comentario-card2' => 'Construcción de la locación y todas
las facilidades de superficie para la
perforación del pozo PYE Machín.',
        'imagen-card3' => 'bower_components/img/portafolio/OIL-GAS/CARD3.png',
        'titulo-card3' => 'ODS 006 - Contrato Marco Con Ecopetrol: 3045305',
        'comentario-card3' => 'Obras para la construcción de líneas y
cruces dirigidos campo Chichimene.',
        'imagen-card4' => 'bower_components/img/portafolio/OIL-GAS/CARD4.png',
        'titulo-card4' => 'ODS 003 - Contrato Marco con Ecopetrol: 3045305',
        'comentario-card4' => 'Construcción de facilidades de
superficie y obras de geotecnia
en proyecto vertimientos.',
        'imagen-card5' => 'bower_components/img/portafolio/OIL-GAS/CARD5.png',
        'titulo-card5' => 'ODS 002 - Contrato Marco con Ecopetrol: 3045305',
        'comentario-card5' => 'Construcción de facilidades para la
ampliación de tratamiento y
disposición de fluidos en el CPF2.',
        'imagen-card6' => 'bower_components/img/portafolio/OIL-GAS/CARD6.png',
        'titulo-card6' => 'ODS 001 - Contrato Marco con Ecopetrol: 3045305',
        'comentario-card6' => 'Obras civiles, mecánicas, eléctricas y de
control para la ampliación del clúster Nueva
Esperanza y trabajos complementarios para
los clúster del campo CPO9.',
        'imagen-card7' => 'bower_components/img/portafolio/OIL-GAS/CARD7.png',
        'titulo-card7' => 'Contrato Marco 8000008729 - con Cenit',
        'comentario-card7' => 'Obras civiles, mecánicas, de tubería,
eléctricas y de instrumentación para
plantas y estaciones que forman parte de
la infraestructura de transporte de
hidrocarburos.',
        'imagen-card8' => 'bower_components/img/portafolio/OIL-GAS/CARD8.png',
        'titulo-card8' => 'Contrato Marco 3019409 - con Ecopetrol',
        'comentario-card8' => 'Construcción de obras civiles,
eléctricas, mecánicas e instrumentación
requeridas por Ecopetrol S.A. y su grupo
empresarial para HUB Sur para la
vigencia 2018 - 2021.'
    ]
];
?>

<section class="container pt-5">
  <div class="row">
    <!-- Gallery grid with gutters -->
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

      <!-- Item 6 -->
      <div class="col">
        <!-- Portfolio grid view: Card style 6 -->
        <a href="#" rel="noopener noreferrer" class="card card-portfolio card-hover bg-transparent border-0">
          <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
            <div class="position-relative zindex-2">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-autohide="false">
                <div class="toast-header bg-danger text-white">
                  <i class="bx bx-chevrons-right fs-lg me-2"></i>
                  <span class="me-auto">
                    <?php echo htmlspecialchars($portfolio['card']['titulo-card6']); ?>
                  </span>
                </div>
                <div class="toast-body text-dark">
                  <p class="card-text" style="text-align: justify;">
                    <?php echo htmlspecialchars($portfolio['card']['comentario-card6']); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-img">
            <image src="<?php echo htmlspecialchars($portfolio['card']['imagen-card6']); ?>" class="rounded-3"
              alt="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>"
              title="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>" />
          </div>
        </a>
      </div>

      <!-- Item 7 -->
      <div class="col">
        <!-- Portfolio grid view: Card style 7 -->
        <a href="#" rel="noopener noreferrer" class="card card-portfolio card-hover bg-transparent border-0">
          <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
            <div class="position-relative zindex-2">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-autohide="false">
                <div class="toast-header bg-danger text-white">
                  <i class="bx bx-chevrons-right fs-lg me-2"></i>
                  <span class="me-auto">
                    <?php echo htmlspecialchars($portfolio['card']['titulo-card7']); ?>
                  </span>
                </div>
                <div class="toast-body text-dark">
                  <p class="card-text" style="text-align: justify;">
                    <?php echo htmlspecialchars($portfolio['card']['comentario-card7']); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-img">
            <image src="<?php echo htmlspecialchars($portfolio['card']['imagen-card7']); ?>" class="rounded-3"
              alt="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>"
              title="<?php echo htmlspecialchars($portfolio['card']['titulo1']); ?>" />
          </div>
        </a>
      </div>

      <!-- Item 8 -->
      <div class="col">
        <!-- Portfolio grid view: Card style 8 -->
        <a href="#" rel="noopener noreferrer" class="card card-portfolio card-hover bg-transparent border-0">
          <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
            <div class="position-relative zindex-2">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-autohide="false">
                <div class="toast-header bg-danger text-white">
                  <i class="bx bx-chevrons-right fs-lg me-2"></i>
                  <span class="me-auto">
                    <?php echo htmlspecialchars($portfolio['card']['titulo-card8']); ?>
                  </span>
                </div>
                <div class="toast-body text-dark">
                  <p class="card-text" style="text-align: justify;">
                    <?php echo htmlspecialchars($portfolio['card']['comentario-card8']); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-img">
            <image src="<?php echo htmlspecialchars($portfolio['card']['imagen-card8']); ?>" class="rounded-3"
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