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
<!DOCTYPE html>
<html lang="es-CO" data-bs-theme="light">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8" />
  <title></title>

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Theme switcher (color modes) -->
  <script src="assets-plantilla/js/theme-switcher.js"></script>

  <!-- Vendor Styles -->
  <link rel="stylesheet" media="screen" href="assets-plantilla/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" media="screen" href="assets-plantilla/vendor/swiper/swiper-bundle.min.css">

  <!-- Main Theme Styles + Bootstrap -->
  <link rel="stylesheet" media="screen" href="assets-plantilla/css/theme.min.css">

  <!-- Page loading styles -->
  <style>
  .page-loading {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-transition: all .4s .2s ease-in-out;
    transition: all .4s .2s ease-in-out;
    background-color: #fff;
    opacity: 0;
    visibility: hidden;
    z-index: 9999;
  }

  [data-bs-theme="dark"] .page-loading {
    background-color: #0b0f19;
  }

  .page-loading.active {
    opacity: 1;
    visibility: visible;
  }

  .page-loading-inner {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    text-align: center;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: opacity .2s ease-in-out;
    transition: opacity .2s ease-in-out;
    opacity: 0;
  }

  .page-loading.active>.page-loading-inner {
    opacity: 1;
  }

  .page-loading-inner>span {
    display: block;
    font-size: 1rem;
    font-weight: normal;
    color: #9397ad;
  }

  [data-bs-theme="dark"] .page-loading-inner>span {
    color: #fff;
    opacity: .6;
  }

  .page-spinner {
    display: inline-block;
    width: 2.75rem;
    height: 2.75rem;
    margin-bottom: .75rem;
    vertical-align: text-bottom;
    border: .15em solid #b4b7c9;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner .75s linear infinite;
    animation: spinner .75s linear infinite;
  }

  [data-bs-theme="dark"] .page-spinner {
    border-color: rgba(255, 255, 255, .4);
    border-right-color: transparent;
  }

  @-webkit-keyframes spinner {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @keyframes spinner {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  </style>

  <!-- Page loading scripts -->
  <script>
  (function() {
    window.onload = function() {
      const preloader = document.querySelector('.page-loading');
      preloader.classList.remove('active');
      setTimeout(function() {
        preloader.remove();
      }, 1000);
    };
  })();
  </script>

  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
  </script>
</head>


<!-- Body -->

<body>
  <!-- Page wrapper for sticky footer -->
  <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
  <main class="page-wrapper">


    <!-- Navbar -->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
    <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
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
                <a href="#" rel="noopener noreferrer" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <?php echo htmlspecialchars($index_panel['menu3']); ?>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="index7.php" class="dropdown-item" rel="noopener noreferrer">
                      <?php echo htmlspecialchars($index_panel['menu5']); ?>
                    </a>
                  </li>
                  <li>
                    <a href="index6.php" class="dropdown-item" rel="noopener noreferrer">
                      <?php echo htmlspecialchars($index_panel['menu6']); ?>
                    </a>
                  </li>
                  <li>
                    <a href="index2.php" class="dropdown-item" rel="noopener noreferrer">
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
            <a href="index5.php" class="btn btn-danger w-100" target="_blank" rel="noopener noreferrer">
              <i class="bx bx-support fs-4 lh-1 me-1"></i>
              &nbsp;<?php echo htmlspecialchars($index_panel['menu4']); ?>
            </a>
          </div>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index5.php" class="btn btn-danger btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank"
          rel="noopener noreferrer">
          <i class="bx bx-support fs-5 lh-1 me-1"></i>
          &nbsp;<?php echo htmlspecialchars($index_panel['menu4']); ?>
        </a>
      </div>
    </header>
  </main>


  <!-- Vendor Scripts -->
  <script src="assets-plantilla/vendor/rellax/rellax.min.js"></script>
  <script src="assets-plantilla/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main Theme Script -->
  <script src="assets-plantilla/js/theme.min.js"></script>
</body>

</html>