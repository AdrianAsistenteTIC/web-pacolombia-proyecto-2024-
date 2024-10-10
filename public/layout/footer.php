<?php
// Datos de la página de inicio - definidos de manera estática
$index_panel = [
    'portada' => 'bower_components/img/logo/Logo-PA-Colombia-color-2.png',
    'titulo1' => 'Web Oficial Del P.A. - COLOMBIA',
    'titulo-1' => 'Contacto',
    'menu_option' => 'MENÚ',
    'menu1' => 'INICIO',
    'menu2' => 'NOSOTROS',
    'menu3' => 'LÍNEA DE NEGOCIO',
    'menu4' => 'CENTRO DE AYUDA',
    'menu5' => 'CONTACTOS',
    'menu6' => 'Oil & gas',
    'menu7' => 'Obras Civiles',
    'menu8' => 'Obras Viales',
    'menu9' => 'MAQUINARÍA Y EQUIPOS',
];
?>
<!-- Footer -->
<footer class="footer bg-dark-subtle pt-5 pb-4 pb-lg-5" data-bs-theme="white">
  <div class="container pt-lg-4">
    <div class="row gy-5 pb-5">
      <div class="col-lg-7">
        <div style="max-width: 40rem;">
          <div class="d-flex align-items-center pb-3 mb-1">
            <div class="navbar-brand text-dark p-0 pe-1 me-0">
              <image src="<?php echo htmlspecialchars($index_panel['portada']); ?>" width="200"
                alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
                title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
            </div>
          </div>
          <p class="text-body mb-4 pb-2">
          <h5 class="h5 mb-4">
            <?php echo htmlspecialchars($index_panel['titulo-1']); ?>
          </h5>
          <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
            <li class="d-flex">
              <i class="bx bx-map text-dark fs-xl me-2" style="margin-top: .125rem;"></i>
              <div class="text-dark">
                <h6 class="mb-1 text-nav" style="font-size: 15px">
                  DIRECCI&Oacute;N&#58;
                </h6>
                <h6 style="font-size: 15px">
                  <br />CALLE 104 N&#176; 14A &#45; 45 &#47; OFICINA &#8209; 401&#46; <br /> CENTRO EMPRESARIAL &#8209;
                  104&#46;
                  BOGOT&#193;
                  D&#46;C&#46; &#8209; &#40;COLOMBIA&#41;
                </h6>
              </div>
            </li>
            <li class="d-flex">
              <a href="https://pacolombia.com.co/" rel="noopener noreferrer"
                class="nav-link align-items-start fw-normal px-0 py-1">
                <i class="bx bx-world fs-5 text-danger me-2"></i>
                <div class="text-dark">
                  <h6 class="mb-1 text-nav" style="font-size: 15px">
                    SITIO WEB&#58;
                  </h6>
                  <h6 style="font-size: 15px">
                    <br /><span><code><b>www&#46;pacolombia&#46;com&#46;co</b></code></span>
                  </h6>
                </div>
              </a>
            </li>
            <li class="d-flex">
              <i class="bx bx-phone-call text-dark fs-xl me-2" style="margin-top: .125rem;"></i>
              <div class="text-dark">
                <h6 class="mb-1 text-nav" style="font-size: 15px">
                  TEL&Eacute;FONO&#58;
                </h6>
                <h6 style="font-size: 15px">
                  <br />&#40;&#43;601&#41; &#40;215&#41;&nbsp;04&#8209;82 &#8209; &#40;&#43;601&#41;
                  &#40;637&#41;&nbsp;10&#8209;65
                </h6>
              </div>
            </li>
            <li class="d-flex">
              <i class="bx bx-time-five text-dark fs-xl me-2" style="margin-top: .125rem;"></i>
              <div class="text-dark">
                <h6 class="mb-1 text-nav" style="font-size: 15px">LUNES A VIERNES&#58;</h6>
                <h6 style="font-size: 15px">
                  08&#58;00 A&#46;M&#46; A 06&#58;00 P&#46;M&#46;
                </h6>
                <h6 class="mb-1 text-nav" style="font-size: 15px">DOMINGO&#58;</h6>
                <h6 style="font-size: 15px">CERRADO</h6>
              </div>
            </li>
          </ul>
          </p>
        </div>
      </div>
      <div class="col-lg-3 offset-lg-1">
        <div class="d-flex flex-lg-row flex-column justify-content-lg-between mt-n4 mx-n2">
          <div class="mt-7 px-2">
            <h5 class="mb-4 pb-lg-2 text-dark">
              <?php echo htmlspecialchars($index_panel['menu_option']); ?>
            </h5>
            <ul class="nav flex-column mb-0">
              <li class="nav-item mb-1">
                <a href="index.php" rel="noopener noreferrer" class="nav-link fs-sm fw-medium px-0 py-1 text-dark"
                  style="font-size: 15px">
                  <?php echo htmlspecialchars($index_panel['menu1']); ?>
                </a>
              </li>
              <li class="nav-item mb-1">
                <a href="index8.php" rel="noopener noreferrer" class="nav-link fs-sm fw-medium px-0 py-1 text-dark"
                  style="font-size: 15px">
                  <?php echo htmlspecialchars($index_panel['menu2']); ?>
                </a>
              </li>
              <li class="nav-item mb-1">
                <a href="index7.php" rel="noopener noreferrer" class="nav-link fs-sm fw-medium px-0 py-1 text-dark"
                  style="font-size: 15px">
                  <?php echo htmlspecialchars($index_panel['menu6']); ?>
                </a>
              </li>
              <li class="nav-item mb-1">
                <a href="index6.php" rel="noopener noreferrer" class="nav-link fs-sm fw-medium px-0 py-1 text-dark"
                  style="font-size: 15px">
                  <?php echo htmlspecialchars($index_panel['menu7']); ?>
                </a>
              </li>
              <li class="nav-item mb-1">
                <a href="index2.php" rel="noopener noreferrer" class="nav-link fs-sm fw-medium px-0 py-1 text-dark"
                  style="font-size: 15px">
                  <?php echo htmlspecialchars($index_panel['menu8']); ?>
                </a>
              </li>
              <li class="nav-item mb-1">
                <a href="index9.php" rel="noopener noreferrer" class="nav-link fs-sm fw-medium px-0 py-1 text-dark"
                  style="font-size: 15px">
                  <?php echo htmlspecialchars($index_panel['menu9']); ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container pt-4">
    <div
      class="d-flex flex-sm-row flex-column align-items-center justify-content-between text-center text-md-start pt-4 border-top border-light">
      <p class="nav d-block fs-sm mb-sm-0 mb-4">
        <span class="text-dark">
          CopyRight&#8218; &copy; &#124; <script type="text/javascript" charset="UTF-8">
          document.write(new Date().getFullYear());
          </script> &#124; <span class="text-danger"><a href="#" rel="noopener noreferrer"
              class="nav-link d-inline-block p-0 text-dark">Página Oficial Del
            </a></span>
          <span>
            <image src="<?php echo htmlspecialchars($index_panel['portada']); ?>" width="150"
              alt="<?php echo htmlspecialchars($index_panel['titulo1']); ?>"
              title="<?php echo htmlspecialchars($index_panel['titulo1']); ?>" />
          </span>
        </span> &#124; <a class="nav-link d-inline-block p-0 text-dark" href="#" rel="noopener noreferrer"
          target="_blank">
          TODOS LOS DERECHOS RESERVADOS&#46;
        </a>
      </p>
      <div class="mt-n3 ms-n3">
        <a href="https://www.facebook.com/profile.php?id=100063802800139" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-facebook rounded-circle mt-3 ms-3" aria-label="Facebook">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="https://www.instagram.com/profesionales.asociados/" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-instagram rounded-circle mt-3 ms-3" aria-label="Instagram">
          <i class="bx bxl-instagram"></i>
        </a>
        <a href="https://www.youtube.com/@PA.Colombia" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-youtube rounded-circle mt-3 ms-3" aria-label="YouTube">
          <i class="bx bxl-youtube"></i>
        </a>
        <a href="https://co.linkedin.com/company/profesionales-asociados" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-linkedin rounded-circle mt-3 ms-3" aria-label="LinkedIn">
          <i class="bx bxl-linkedin"></i>
        </a>
        <a href="https://wa.link/1rh7vg" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-whatsapp rounded-circle mt-3 ms-3" aria-label="WhatsAPP">
          <i class="bx bxl-whatsapp"></i>
        </a>
      </div>
    </div>
  </div>
</footer>