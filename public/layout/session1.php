<?php
// Datos de la sección "Portafolio" - establecidos de manera estática
$portfolio = [
    'portada' => 'bower_components/img/portafolio/BANNER1.png',
    'title-portada' => 'INFRAESTRUCTURA OBRAS VIALES',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'INFRAESTRUCTURA OBRAS VIALES',
    'title_portafolio' => 'INFRAESTRUCTURA OBRAS VIALES',
    'card' => [
        'titulo1' => 'INFRAESTRUCTURA OBRAS VIALES',
        'imagen-card1' => 'bower_components/img/portafolio/OBRAS-VIALES/CARD1.png',
        'titulo-card1' => 'Contrato 690 - Alcaldía Local de Kennedy.',
        'comentario-card1' => 'Contratar las obras de construcción para la
malla vial local y su espacio público asociado
de la localidad de Kennedy - Grupo 2.',
        'imagen-card2' => 'bower_components/img/portafolio/OBRAS-VIALES/CARD2.png',
        'titulo-card2' => 'Contrato 1811 - Instituto de Desarrollo Urbano - IDU.',
        'comentario-card2' => 'Construcción de la Cra. 14 entre calles 80
- 84 Bis. Calle 82 entre Cra. 13-15. Obras
de la red peatonal Zona Rosa.',
        'imagen-card3' => 'bower_components/img/portafolio/OBRAS-VIALES/CARD3.png',
        'titulo-card3' => 'Contrato 3894 de 2023 - Cliente: INVIAS.',
        'comentario-card3' => 'MEJORAMIENTO Y MANTENIMIENTO DE LAS VIAS MUNCHIQUE - EL TABLON - POPAYAN RUTA 2001, TIMBIO - EL HATO - EL TABLON RUTA 25CC02, CARRETERA 25CC04 POPAYÁN – EL ROSARIO VÍAS 2601 MORALES - PIENDAMÓ, 2602A PIENDAMÓ - SILVIA - TOTORÓ DEL DEPARTAMENTO DEL CAUCA.',
        'imagen-card4' => 'bower_components/img/portafolio/OBRAS-VIALES/CARD4.png',
        'titulo-card4' => 'Contrato 406 de 2022 - Alcaldía de Bucaramanga.',
        'comentario-card4' => 'Mejoramiento y mantenimiento
de la red vial urbana del municipio
de Bucaramanga.'
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

      <!-- Add as many items as you need -->
    </div>
  </div>
</section>
<section class="container pt-5"></section>