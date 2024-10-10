<?php
// Datos de contacto - establecidos de manera estática
$contacto = [
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo' => 'Contáctanos',
    'titulo-1' => 'Contacto',
    'titulo-contacto' => 'Contacto',
    'titulo-contacto1' => 'Contacta Con Nosotros',
    'titulo-nombre1' => 'Pascual Neira Rivera',
    'titulo-area1' => 'Gerente General',
    'titulo-phone1' => '(318) 735-05-39',
    'titulo-correo1' => 'pascual.neira@pacolombia.com.co',
    'titulo-nombre2' => 'Andrea Barrios Olmos',
    'titulo-area2' => 'Dir. Administrativa y Financiera',
    'titulo-phone2' => '(310) 561-78-87',
    'titulo-correo2' => 'andrea.barrios@pacolombia.com.co',
    'titulo-nombre3' => 'Angie Vargas Moncada',
    'titulo-area3' => 'Directora Comercial',
    'titulo-phone3' => '(318) 281-81-64',
    'titulo-correo3' => 'director.comercial@pacolombia.com.co',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'CONTACTOS',
    'imagen-qr' => 'bower_components/img/portafolio/wa.link_1rh7vg.png',
    'redes_sociales' => [
        'facebook' => 'https://www.facebook.com/profile.php?id=100063802800139',
        'instagram' => 'https://www.instagram.com/profesionales.asociados/',
        'youtube' => 'https://www.youtube.com/@PA.Colombia',
        'linkedin' => 'https://co.linkedin.com/company/profesionales-asociados',
        'whatsapp' => 'https://wa.link/1rh7vg'
    ]
];

// Verificación del envío del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Envío de correo electrónico
    $para = 'director.comercial@pacolombia.com.co'; // Reemplaza con tus correos electrónicos de destino
    $asunto = "Nuevo mensaje de contacto de: $nombre";
    $cuerpo = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";

    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($para, $asunto, $cuerpo, $headers)) {
        $mensaje_exito = "Tu mensaje ha sido enviado con éxito.";
    } else {
        $mensaje_error = "Hubo un problema al enviar tu mensaje. Por favor, intenta de nuevo.";
    }
}
?>
<!-- Links + Contact form -->
<section class="position-relative bg-white pt-5">
  <div class="container position-relative zindex-2 pt-5">

    <!-- Breadcrumb -->
    <nav class="pt-lg-4 pb-3 mb-2 mb-sm-3" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="index.php" class="text-dark" rel="noopener noreferrer">
            <i class="bx bx-home-alt fs-lg me-1"></i><?php echo htmlspecialchars($contacto['menu-title1']); ?>
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          <?php echo htmlspecialchars($contacto['menu-title2']); ?>
        </li>
      </ol>
    </nav>

    <div class="row">

      <div class="row pt-md-2 pt-lg-5 pb-2 pb-md-4">
        <div class="col-xxl-4 col-xl-5 col-lg-6 pt-3 mt-3">
          <h1 class="h3 mb-2">
            <span>
              <strong>
                <b>
                  <code>
                    <?php echo htmlspecialchars($contacto['titulo']); ?>
                  </code>
                </b>
              </strong>
            </span>
          </h1>
          <h4 class="display-1 pb-sm-2 pb-md-3 mb-3">
            <?php echo htmlspecialchars($contacto['titulo-contacto']); ?>
          </h4>
          <div class="nav d-block lead pt-lg-5">
            <div class="text-nav">
              <i class="fa-solid fa-user"></i>
              <?php echo htmlspecialchars($contacto['titulo-nombre3']); ?>
            </div>
            <div class="text-nav">
              <i class="fa-solid fa-user-tie"></i>
              <?php echo htmlspecialchars($contacto['titulo-area3']); ?>
            </div>
            <div class="text-nav">
              <i class="fa-solid fa-phone"></i>
              <?php echo htmlspecialchars($contacto['titulo-phone3']); ?>
              <image src="<?php echo htmlspecialchars($contacto['imagen-qr']); ?>" class="img-thumbnail rounded-3"
                width="150" alt="<?php echo htmlspecialchars($contacto['titulo1']); ?>"
                title="<?php echo htmlspecialchars($contacto['titulo1']); ?>" />
            </div>
            <a href="mailto:director.comercial@pacolombia.com.co" rel="noopener noreferrer"
              class="nav-link fw-normal text-decoration-underline p-0 mb-4">
              <i class="fa-solid fa-envelope"></i> <?php echo htmlspecialchars($contacto['titulo-correo3']); ?>
            </a>
          </div>
        </div>
        <div class="col-lg-6 offset-xl-1 offset-xxl-2 pt-3 pt-md-4 pt-lg-3 mt-3">
          <h4 class="card-title pb-3 mb-4 text-dark">
            <?php echo htmlspecialchars($contacto['titulo-contacto1']); ?>
          </h4>
          <?php if (!empty($mensaje_exito)) echo '<p style="color: green;">' . htmlspecialchars($mensaje_exito) . '</p>'; ?>
          <?php if (!empty($mensaje_error)) echo '<p style="color: red;">' . htmlspecialchars($mensaje_error) . '</p>'; ?>
          <form class="row g-4 needs-validation" novalidate action="contactos_reviews.php" method="POST"
            enctype="multipart/form-data">
            <div class="col-12">
              <label for="nombre" class="form-label fs-base">
                Nombre:
              </label>
              <input type="text" class="form-control form-control-lg" name="nombre" key="nombre" id="nombre"
                placeholder="Nombre." required />
              <div class="invalid-feedback">
                ¡Por favor ingrese su nombre completo!
              </div>
            </div>
            <div class="col-12">
              <label for="correo" class="form-label fs-base">
                Correo Electrónico:
              </label>
              <input type="email" class="form-control form-control-lg" name="correo" key="correo" id="correo"
                placeholder="Correo Electrónico" required />
              <div class="invalid-feedback">
                ¡Proporcione una dirección de correo electrónico válida!
              </div>
            </div>
            <div class="col-12">
              <label for="mensaje" class="form-label fs-base">
                Mensaje:
              </label>
              <textarea class="form-control form-control-lg" name="mensaje" key="mensaje" id="mensaje" rows="10"
                cols="10" placeholder="Mensaje." required></textarea>
              <div class="invalid-feedback">
                ¡Por favor ingrese con el mensaje!
              </div>
            </div>
            <div class="col-12 pt-2 pt-sm-3">
              <button type="submit" class="btn btn-lg btn-danger w-100 w-sm-auto">
                Enviar Mensaje
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="position-absolute bottom-0 start-0 w-100 bg-light" style="height: 8rem;"></div>
</section>


<!-- Branches -->
<section class="container py-2 py-lg-4 py-xl-5 mb-2 mb-md-3">
  <div class="row py-5">
    <div class="col-lg-6 mb-5 mb-lg-0">
      <div class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden">
        <iframe class="d-block h-100"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.468007319709!2d-74.04902752636033!3d4.688435741766555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9abdcb363d99%3A0x1d89a7c0013f2704!2zQ2wuIDEwNCAjMTRBLTQ1LCBVc2FxdcOpbiwgQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1726585308725!5m2!1ses!2sco"
          style="border: 0; min-height: 300px;" allowfullscreen="" loading="lazy" title="Map"></iframe>
      </div>
    </div>
    <div class="col-lg-5 offset-lg-1">
      <h2 class="h4 mb-4">
        <?php echo htmlspecialchars($contacto['titulo-1']); ?>
      </h2>
      <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
        <li class="d-flex pb-1 mb-2">
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
        <li class="d-flex pb-1 mb-2">
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
      <div class="d-flex pt-1 pt-md-3 pt-xl-4">
        <a href="https://www.facebook.com/profile.php?id=100063802800139" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-facebook me-3" aria-label="Facebook">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="https://www.instagram.com/profesionales.asociados/" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-instagram me-3" aria-label="Instagram">
          <i class="bx bxl-instagram"></i>
        </a>
        <a href="https://www.youtube.com/@PA.Colombia" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-youtube me-3" aria-label="YouTube">
          <i class="bx bxl-youtube"></i>
        </a>
        <a href="https://co.linkedin.com/company/profesionales-asociados" rel="noopener noreferrer"
          class="btn btn-icon btn-secondary btn-linkedin me-3" aria-label="LinkedIn">
          <i class="bx bxl-linkedin"></i>
        </a>
        <a href="https://wa.link/1rh7vg" rel="noopener noreferrer" class="btn btn-icon btn-secondary btn-whatsapp me-3"
          aria-label="WhatsAPP">
          <i class="bx bxl-whatsapp"></i>
        </a>
      </div>
    </div>
  </div>
</section>