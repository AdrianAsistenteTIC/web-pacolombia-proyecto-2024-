<?php
// Datos de la página de inicio - definidos de manera estática
$index_panel = [
    'portada' => 'bower_components/img/landing/software-agency-2/hero-bg.png',
    'portada1' => 'bower_components/img/imagen-video/camera.jpg',
    'logo1' => 'bower_components/img/logo/logo-empresa/Logo-PA-Colombia-Blanco.png',
    'titulo1' => 'P.A. - COLOMBIA.',
    'logo2' => 'bower_components/img/logo/logo-empresa/Recurso-10Logo-Concremack-largo-BN.png',
    'titulo2' => 'CONCREMACK',
    'logo3' => 'bower_components/img/logo/logo-empresa/Logo-PEI-BN.png',
    'titulo3' => 'PEI PERFORACIONES E INGENIERÍA'
];
?>
<style>
.container-iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  object-fit: cover;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
}
</style>
<!-- Video section -->
<section class="container-fluid position-relative px-0 pt-5 mt-3 mt-lg-4">
  <div class="row g-0">
    <div class="col-xl-12 col-lg-12 pe-lg-12">
      <div style="position: relative; padding-bottom: 37.5%; height: 0; overflow: hidden;">
        <iframe
          src="https://www.youtube.com/embed/4OP1GUUdK_g?autoplay=1&mute=1&loop=1&playlist=4OP1GUUdK_g&controls=0&modestbranding=1&rel=0&iv_load_policy=3&vq=hd1080"
          frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="container-iframe">
        </iframe>
      </div>
    </div>
  </div>
</section>