<?php
// Detectar el idioma del navegador
$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);

// Detectar la localización (usando el valor de "es-CO" para Colombia)
if ($idioma == 'es-CO') {
    header("Location: /es-co/");  // Redirigir a la versión específica para Colombia
    exit();
}
// Datos de la página de inicio - definidos de manera estática
$index_panel = [
    'titulo' => 'Web Oficial Del P.A. - COLOMBIA'
];
?>
<!DOCTYPE html>
<html lang="es-CO" data-bs-theme="light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <!--===============================================================================================-->
  <meta charset="UTF-8" />
  <meta data-rh="true" id="meta-http-ua-compatible" http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <meta http-equiv="Content-Language" lang="es-CO" />
  <meta name="robots" content="all" />
  <meta name="author" content="Web Oficial Del P.A. - COLOMBIA" />
  <meta name="geo.placename" content="Acaci&aacute;s, Meta, Colombia." />
  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />
  <!--===============================================================================================-->
  <meta name="theme-color" content="#d50057" />
  <meta name="msapplication-TileColor" content="#d50057" />
  <meta name="msapplication-navbutton-color" content="#d50057" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#d50057" />
  <!--===============================================================================================-->
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="bower_components/img/ico/Recurso-31PA-icono.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="bower_components/img/ico/Recurso-31PA-icono.ico" />
  <link rel="icon" type="image/png" sizes="32x32" href="bower_components/img/ico/Recurso-31PA-icono.ico" />
  <link rel="icon" type="image/png" sizes="16x16" href="bower_components/img/ico/Recurso-31PA-icono.ico" />
  <meta name="msapplication-TileImage" content="" />
  <!--===============================================================================================-->
  <title data-rh="true">
    <?php echo htmlspecialchars($index_panel['titulo']); ?>
  </title>
  <meta property="og:title" content="Web Oficial Del P.A. - COLOMBIA" />
  <meta property="og:type" content="website" />
  <link rel="canonical" href="https://www.pacolombia.com.co/" />

  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="application-name" content="P.A. - COLOMBIA" />
  <meta name="apple-mobile-web-app-title" content="P.A. - COLOMBIA" />

  <meta name="msapplication-navbutton-color" content="#FFFFFF" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="msapplication-starturl" content="/" />
  <!--===============================================================================================-->
  <!-- FONTS AWESOME LINK -->
  <link href="bower_components/fonts-awesome/css/all.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/all.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/brands.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/brands.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/fontawesome.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/fontawesome.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/regular.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/regular.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/solid.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/solid.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/svg-with-js.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/svg-with-js.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/v4-font-face.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/v4-font-face.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/v4-shims.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/v4-shims.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/v5-font-face.css" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/fonts-awesome/css/v5-font-face.min.css" rel="stylesheet" type="text/css" media="all" />
  <!--===============================================================================================-->
  <!-- FONTS AWESOME SCRIPT -->
  <script src="bower_components/fonts-awesome/js/all.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/all.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/brands.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/brands.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/conflict-detection.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/conflict-detection.min.js" type="text/javascript" charset="UTF-8">
  </script>
  <script src="bower_components/fonts-awesome/js/fontawesome.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/fontawesome.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/regular.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/regular.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/solid.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/solid.min.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/v4-shims.js" type="text/javascript" charset="UTF-8"></script>
  <script src="bower_components/fonts-awesome/js/v4-shims.min.js" type="text/javascript" charset="UTF-8"></script>
  <!--===============================================================================================-->
  <link href="assets-plantilla/vendor/boxicons/css/boxicons.min.css" media="screen" rel="stylesheet" type="text/css"
    media="all" />
  <link href="assets-plantilla/vendor/swiper/swiper-bundle.min.css" media="screen" rel="stylesheet" type="text/css"
    media="all" />
  <link href="assets-plantilla/vendor/lightgallery/css/lightgallery-bundle.min.css" media="screen" rel="stylesheet"
    type="text/css" media="all" />
  <link href="assets-plantilla/vendor/prismjs/themes/prism.css" media="screen" rel="stylesheet" type="text/css"
    media="all" />
  <link href="assets-plantilla/vendor/prismjs/plugins/toolbar/prism-toolbar.css" media="screen" rel="stylesheet"
    type="text/css" media="all" />
  <link href="assets-plantilla/vendor/prismjs/plugins/line-numbers/prism-line-numbers.css" media="screen"
    rel="stylesheet" type="text/css" media="all" />
  <link href="assets-plantilla/vendor/img-comparison-slider/dist/styles.css" media="screen" rel="stylesheet"
    type="text/css" media="all" />
  <link href="assets-plantilla/vendor/nouislider/dist/nouislider.min.css" media="screen" rel="stylesheet"
    type="text/css" media="all" />
  <link href="bower_components/aos/aos.css" media="screen" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/apexcharts/css/apexcharts.css" media="screen" rel="stylesheet" type="text/css"
    media="all" />
  <link href="bower_components/glightbox/css/glightbox.css" media="screen" rel="stylesheet" type="text/css"
    media="all" />
  <link href="bower_components/scrollcue/scrollCue.css" media="screen" rel="stylesheet" type="text/css" media="all" />
  <link href="bower_components/tiny-slider/tiny-slider.css" media="screen" rel="stylesheet" type="text/css"
    media="all" />
  <!--===============================================================================================-->
  <!-- Main Theme Styles + Bootstrap-->
  <link href="bower_components/css/theme.min.css" media="screen" rel="stylesheet" type="text/css" media="all" />
  <!-- Page loading styles -->
  <link href="bower_components/css/styles1.css" media="screen" rel="stylesheet" type="text/css" media="all" />
  <!--===============================================================================================-->
  <script src="assets-plantilla/js/theme-switcher.js" type="text/javascript" charset="UTF-8"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" charset="UTF-8">
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
  <script type="text/javascript" charset="UTF-8">
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
  <script type="text/javascript" charset="UTF-8">
  document.addEventListener("DOMContentLoaded", function() {
    var fecha = new Date();
    var ano = fecha.getFullYear();
    var mes = fecha.getMonth() + 1;
    var dia = fecha.getDate();
    var fechaActual = dia + '/' + mes + '/' + ano;
    var elementoFecha = document.getElementById("fecha-actualizacion");
    elementoFecha.innerHTML = 'Última Actualización: ' + fechaActual;
  });
  </script>
  <!--===============================================================================================-->
</head>