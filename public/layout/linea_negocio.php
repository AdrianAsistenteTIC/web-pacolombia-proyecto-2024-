<?php
// Datos de la Línea de Negocio - estos datos se establecen de manera estática, sin base de datos
$empresa = [
    'titulo' => 'LÍNEA DE NEGOCIO XYZ',
    'titulo1' => 'P.A. - COLOMBIA.',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'LÍNEA DE NEGOCIO - DETALLES.',
    'subtitulo' => 'Subtítulo de la línea de negocio',
    'logo' => 'bower_components/img/portafolio/IMAGEN3.png', // Asegúrate de que el archivo de la imagen del logo esté en la misma carpeta que este archivo PHP
    'pdf_link' => 'documento_empresa.pdf', // Asegúrate de que el archivo PDF esté en la misma carpeta que este archivo PHP
    'articulo' => [
        'titulo' => 'Título del Artículo',
        'imagen' => 'bower_components/img/portafolio/IMAGEN1.jpg', // Asegúrate de que el archivo de la imagen del artículo esté en la misma carpeta que este archivo PHP
        'comentario' => 'Este es un comentario o descripción del artículo de la línea de negocio.'
    ]
];
?>
<?php include 'option.php'; ?>
<main class="page-wrapper">
  <?php include 'navbar-two.php'; ?>
  <section class="container pt-5">
    <div class="row">
      <!-- Breadcrumb -->
      <nav class="py-4" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 py-3">
          <li class="breadcrumb-item">
            <a href="index.php" rel="noopener noreferrer">
              <i class="bx bx-home-alt fs-lg me-1"></i><?php echo htmlspecialchars($empresa['menu-title1']); ?>
            </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            <?php echo htmlspecialchars($empresa['menu-title2']); ?>
          </li>
        </ol>
      </nav>
      <!-- Información de la Empresa -->
      <h1>
        <?php echo htmlspecialchars($empresa['titulo']); ?>
      </h1>
      <h3>
        <?php echo htmlspecialchars($empresa['subtitulo']); ?>
      </h3>

      <!-- Logo de la Empresa con Enlace al PDF -->
      <div>
        <a href="<?php echo htmlspecialchars($empresa['pdf_link']); ?>" rel="noopener noreferrer" target="_blank">
          <image src="<?php echo htmlspecialchars($empresa['logo']); ?>"
            alt="<?php echo htmlspecialchars($empresa['titulo1']); ?>"
            title="<?php echo htmlspecialchars($empresa['titulo1']); ?>" />
        </a>
      </div>

      <!-- Artículo de la Empresa -->
      <div>
        <h2>
          <?php echo htmlspecialchars($empresa['articulo']['titulo']); ?>
        </h2>
        <image src="<?php echo htmlspecialchars($empresa['articulo']['imagen']); ?>"
          alt="<?php echo htmlspecialchars($empresa['titulo1']); ?>"
          title="<?php echo htmlspecialchars($empresa['titulo1']); ?>" />
        <p>
          <?php echo htmlspecialchars($empresa['articulo']['comentario']); ?>
        </p>
      </div>
    </div>
  </section>
</main>
<?php include 'barra-vertical-social.php'; ?>
<?php include 'footer.php'; ?>
<?php include 'data-scroll.php'; ?>
