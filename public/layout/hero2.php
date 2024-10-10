<?php
// Datos de la sección "Linea De Negocio" - establecidos de manera estática
$linea = [
    'portada' => 'bower_components/img/portafolio/IMAGEN1.jpg',
    'titulo' => 'TITULO',
    'subtitulo' => 'SUBTITULO'
];
?>
<!-- Hero -->
<section class="position-relative jarallax pb-xl-3" data-jarallax data-speed="0.4" data-bs-theme="dark">

  <!-- Parallax img -->
  <div class="jarallax-img bg-dark opacity-70"
    style="background-image: url(<?php echo htmlspecialchars($linea['portada']); ?>);">
  </div>

  <!-- Overlay bg -->
  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-70 zindex-1"></span>

  <!-- Overlay content -->
  <div class="container position-relative pb-5 zindex-5">
    <!-- Breadcrumb -->
    <nav class="py-4" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 py-3">
        <li class="breadcrumb-item">
          <a href="#" rel="noopener noreferrer"></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"></li>
      </ol>
    </nav>
    <!-- Featured article -->
    <div class="row mb-xxl-5 py-md-4 py-lg-5">
      <div class="col-lg-6 col-md-7 pb-3 pb-md-0 mb-4 mb-md-5">
        <h1 class="display-5 pb-md-3">
          <?php echo htmlspecialchars($linea['titulo']); ?>
        </h1>
        <div class="mb-3 fs-lg text-light">
          <h3 class="display-5 pb-md-3">
            <?php echo htmlspecialchars($linea['subtitulo']); ?>
          </h3>
        </div>
        <div class="d-flex flex-wrap mb-md-5 mb-4 pb-md-2 text-white">
          <div class="border-end border-light h-100 mb-2 pe-3 me-3">
            <span class="badge bg-faded-light fs-base">
              <p id="fecha-actualizacion"></p>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>