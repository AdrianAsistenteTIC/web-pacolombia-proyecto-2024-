<?php
// Datos de la página de inicio - definidos de manera estática
$index_panel = [
    'portada' => 'bower_components/img/logo/Logo-PA-Colombia-color-2.png',
    'titulo1' => 'P.A. - COLOMBIA.',
    'menu_option' => 'MENÚ',
    'menu1' => 'INICIO',
    'menu2' => 'NOSOTROS',
    'menu3' => 'LÍNEA DE NEGOCIO',
    'menu4' => 'CONTACTOS',
    'menu5' => 'Oil & gas',
    'menu6' => 'Obras Civiles',
    'menu7' => 'Obras Viales',
    'menu8' => 'MAQUINARÍA Y EQUIPOS'
];
?>
<header class="header navbar navbar-expand-lg bg-light shadow-sm fixed-top">
  <div class="container px-3">
    <a href="index.php" rel="noopener noreferrer" class="navbar-brand pe-3">
      <image src="<?php echo htmlspecialchars($index_panel['portada']); ?>" width="200"
        alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
        title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
    </a>
    <div id="navbarNav" class="offcanvas offcanvas-end">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title">
          <?php echo htmlspecialchars($index_panel['menu_option']); ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="index.php" rel="noopener noreferrer" class="nav-link">
              <?php echo htmlspecialchars($index_panel['menu1']); ?>
            </a>
          </li>
          <li class="nav-item">
            <a href="index8.php" rel="noopener noreferrer" class="nav-link">
              <?php echo htmlspecialchars($index_panel['menu2']); ?>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" rel="noopener noreferrer" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
              data-bs-auto-close="outside" aria-expanded="false">
              <?php echo htmlspecialchars($index_panel['menu3']); ?>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="index7.php" rel="noopener noreferrer">
                  <?php echo htmlspecialchars($index_panel['menu5']); ?>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="index6.php" rel="noopener noreferrer">
                  <?php echo htmlspecialchars($index_panel['menu6']); ?>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="index2.php" rel="noopener noreferrer">
                  <?php echo htmlspecialchars($index_panel['menu7']); ?>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="index9.php" rel="noopener noreferrer" class="nav-link">
              <?php echo htmlspecialchars($index_panel['menu8']); ?>
            </a>
          </li>
        </ul>
      </div>
      <div class="offcanvas-header border-top">
        <a href="index5.php" rel="noopener noreferrer" class="btn btn-danger w-100">
          <i class="bx bx-support fs-4 lh-1 me-1"></i>
          <?php echo htmlspecialchars($index_panel['menu4']); ?>
        </a>
      </div>
    </div>
    <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="index5.php" rel="noopener noreferrer" class="btn btn-danger btn-sm fs-sm rounded d-none d-lg-inline-flex">
      <i class="bx bx-support fs-5 lh-1 me-1"></i>
      &nbsp;<?php echo htmlspecialchars($index_panel['menu4']); ?>
    </a>
  </div>
</header>