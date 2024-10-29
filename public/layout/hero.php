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
  .video-iframe {
    position: relative;
    padding-bottom: -0.5%;
    /* Relación de aspecto 16:9 */
    top: 0;
    left: 0;
    width: 100%;
    /* Ancho del contenedor */
    /*height: 0;*/
    /* Altura inicial */
    overflow: hidden;
    object-fit: cover;
    border: solid #212529;
    border-radius: 0px;
    /* Bordes redondeados */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    /* Sombra */
  }
</style>
<!-- Video section -->
<section class="container-fluid position-relative px-0 pt-5 mt-3 mt-lg-4">
  <div class="row g-0">
    <div class="col-xl-12 col-lg-12 pe-lg-12">
      <div>
        <video class="video-iframe" autoplay muted loop>
          <source src="bower_components/img/imagen-video/PA-COLOMBIA-23.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
</section>
