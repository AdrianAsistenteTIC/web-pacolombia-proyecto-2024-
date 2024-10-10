<?php
// Datos de la sección "Nosotros" - establecidos de manera estática
$nosotros = [
    'titulo1' => 'P.A. - COLOMBIA.',
    'title_history' => 'HISTORIA',
    'title_nosotros' => '',
    'titulo-mision' => 'MISIÓN',
    'comentario-mision' => 'MISIÓN',
    'titulo-vision' => 'VISIÓN',
    'comentario-vision' => 'VISIÓN',
    'menu-title1' => 'VOLVER INICIO',
    'menu-title2' => 'MISIÓN Y VISIÓN.',
    'portada1' => 'bower_components/img/landing/saas-5/hero-bg-pattern.png',
    'titulo-one' => 'MISIÓN',
    'comentario-one' => 'P.A. Colombia somos una empresa de obras de infraestructura e ingeniería que busca brindar la mejor solución técnica, humana y financiera para la ejecución de proyectos de ingeniería y sus diferentes especialidades. Nuestras operaciones buscan viabilizar, construir y rentabilizar los proyectos de infraestructura basados en cuatro principios básicos: optimización de recursos, prioridad la vida de nuestros colaboradores y grupos de interés, sostenibilidad ambiental y la equidad, inclusión y diversidad en todas las áreas de nuestros proyectos.',
    'titulo-two' => 'VISIÓN',
    'comentario-two' => 'Para el año 2030 P.A. Colombia busca posicionarse dentro de las 10 empresas más importantes de infraestructura e ingeniería de Colombia, siendo reconocida por los altos estándares de calidad de sus servicios, por su compromiso con la sostenibilidad ambiental, por priorizar la vida, higiene y seguridad de sus colaboradores, y por promover la diversidad, inclusión y equidad de sus empleados, proveedores, clientes y grupos de interés.',
    'titulo-valores' => 'MISIÓN VISIÓN VALORES',
    'titulo-valores-one' => 'INTEGRIDAD',
    'comentario-valores-one' => 'Aseguramos coherencia entre lo que nos proponemos y lo que hacemos. Actuamos con transparencia, honestidad y ética, generando confianza y respeto en nuestros clientes, colaboradores y comunidad.',
    'titulo-valores-two' => 'SOSTENIBILIDAD',
    'comentario--valores-two' => 'Buscamos constantemente mejorar nuestras prácticas para hacer nuestros procesos más eficaces y amigables con el medio ambiente y el entorno.',
    'titulo-valores-three' => 'FELICIDAD DE NUESTRO COLABORADORES',
    'comentario--valores-three' => 'Fomentamos un entorno donde las personas puedan desarrollar todo su potencial, sintiendo satisfacción del deber cumplido y la plenitud de su crecimiento profesional y personal.',
    'titulo-valores-four' => 'HUMILDAD',
    'comentario--valores-four' => 'Reconocemos nuestras fortalezas y logros, así como nuestras debilidades y oportunidades de mejora, manteniéndonos en constante aprendizaje y desarrollo.',
    'titulo-valores-five' => 'EXCELENCIA EN EL SERVICIO',
    'comentario--valores-five' => 'Nos anticipamos a las necesidades, superamos las expectativas y nos convertimos en los principales aliados de nuestros clientes en el desarrollo de sus proyectos, generando valor en sus operaciones.',
    'imagen_one' => 'bower_components/img/portafolio/1.png',
    'imagen_two' => 'bower_components/img/portafolio/2.png',
    'imagen_three' => 'bower_components/img/portafolio/3.png',
    'imagen_four' => 'bower_components/img/portafolio/4.png',
    'imagen_five' => 'bower_components/img/portafolio/5.png'
];
?>
<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php echo htmlspecialchars($nosotros['titulo-valores']); ?>
  </title>
  <style>
  @font-face {
    font-family: 'Mont-SemiBold';
    src: url('./assets-plantilla/css/fonts/Mont-SemiBold.ttf');
  }

  @font-face {
    font-family: 'interstate-bold-italic';
    src: url('./assets-plantilla/css/fonts/interstate-bold-italic.ttf');
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: var(--si-body-font-family);
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
  }

  :root,
  [data-bs-theme='light'] {
    --si-font-sans-serif: 'Mont-SemiBold', sans-serif;
    --si-font-italic: 'interstate-bold-italic', italic;
    --si-font-monospace: sans-serif, italic;
    --si-body-font-family: var(--si-font-sans-serif), var(--si-font-italic);
  }

  .container {
    width: 90%;
    max-width: 1200px;
    text-align: center;
  }

  img {
    width: 250px;
    border-radius: 10px;
  }

  h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #d50057;
    font-family: var(--si-font-italic);
  }

  .cards {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
  }

  .card {
    position: relative;
    width: 22%;
    height: 200px;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: scale(1.05);
  }

  .card .overlay {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100%;
    background-color: #d50057;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    font-size: 12px;
  }

  .card:hover .overlay {
    opacity: 1;
  }

  .overlay h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
  }

  .overlay p {
    font-size: 1em;
    text-align: center;
    padding: 0 15px;
  }

  #integridad {
    background-color: #d50057;
  }

  #sostenibilidad {
    background-color: #d50057;
  }

  #felicidad {
    background-color: #d50057;
  }

  #humildad {
    background-color: #d50057;
  }

  #servicio {
    background-color: #d50057;
  }

  /* Media Queries para Responsividad */
  @media (max-width: 1200px) {
    .card {
      width: 30%;
    }

    h1 {
      font-size: 2.2em;
    }
  }

  @media (max-width: 900px) {
    .card {
      width: 45%;
    }

    h1 {
      font-size: 2em;
    }
  }

  @media (max-width: 600px) {
    .cards {
      flex-direction: column;
      align-items: center;
    }

    .card {
      width: 100%;
      height: 250px;
    }

    h1 {
      font-size: 1.8em;
    }
  }
  </style>
</head>

<body>
  <div class="container">
    <h1>
      <?php echo htmlspecialchars($nosotros['titulo-valores']); ?>
    </h1>
    <div class="cards">
      <div class="card" id="integridad">
        <image src="<?php echo htmlspecialchars($nosotros['imagen_one']); ?>" class="rounded-3 img-fluid"
          alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
          title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
        <div class="overlay">
          <h2>
            <?php echo htmlspecialchars($nosotros['titulo-valores-one']); ?>
          </h2>
          <p style="text-align: justify;">
            <?php echo htmlspecialchars($nosotros['comentario-valores-one']); ?>
          </p>
        </div>
      </div>
      <div class="card" id="sostenibilidad">
        <image src="<?php echo htmlspecialchars($nosotros['imagen_two']); ?>" class="rounded-3 img-fluid"
          alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
          title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
        <div class="overlay">
          <h2>
            <?php echo htmlspecialchars($nosotros['titulo-valores-two']); ?>
          </h2>
          <p style="text-align: justify;">
            <?php echo htmlspecialchars($nosotros['comentario--valores-two']); ?>
          </p>
        </div>
      </div>
      <div class="card" id="felicidad">
        <image src="<?php echo htmlspecialchars($nosotros['imagen_three']); ?>" class="rounded-3 img-fluid"
          alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
          title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
        <div class="overlay">
          <h2>
            <?php echo htmlspecialchars($nosotros['titulo-valores-three']); ?>
          </h2>
          <p style="text-align: justify;">
            <?php echo htmlspecialchars($nosotros['comentario--valores-three']); ?>
          </p>
        </div>
      </div>
      <div class="card" id="humildad">
        <image src="<?php echo htmlspecialchars($nosotros['imagen_four']); ?>" class="rounded-3 img-fluid"
          alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
          title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
        <div class="overlay">
          <h2>
            <?php echo htmlspecialchars($nosotros['titulo-valores-four']); ?>
          </h2>
          <p style="text-align: justify;">
            <?php echo htmlspecialchars($nosotros['comentario--valores-four']); ?>
          </p>
        </div>
      </div>
      <div class="card" id="servicio">
        <image src="<?php echo htmlspecialchars($nosotros['imagen_five']); ?>" class="rounded-3 img-fluid"
          alt="<?php echo htmlspecialchars($nosotros['titulo1']); ?>"
          title="<?php echo htmlspecialchars($nosotros['titulo1']); ?>" />
        <div class="overlay">
          <h2>
            <?php echo htmlspecialchars($nosotros['titulo-valores-five']); ?>
          </h2>
          <p style="text-align: justify;">
            <?php echo htmlspecialchars($nosotros['comentario--valores-five']); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>