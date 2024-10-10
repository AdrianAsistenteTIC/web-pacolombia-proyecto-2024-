<?php
// Datos de la sección "HISTORIA" - establecidos de manera estática
$historia = [
    'titulo1' => 'P.A. - COLOMBIA.',
    'titulo2' => 'HISTORIA'
];
?>
<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="UTF-8" />
  <title data-rh="true">
    <?php echo htmlspecialchars($historia['titulo2']); ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    type="text/css" media="all" />
  <style type="text/css">
  @charset "UTF-8";

  @font-face {
    font-family: 'Mont-SemiBold';
    src: url('./bower_components/css/fonts/Mont-SemiBold.ttf');
  }

  @font-face {
    font-family: 'interstate-bold-italic';
    src: url('./bower_components/css/fonts/interstate-bold-italic.ttf');
  }

  /* Para navegadores WebKit (Safari, Chrome) */
  ::-webkit-scrollbar {
    width: 8px;
    /* Estrecho para hacerlo menos visible */
    background-color: transparent;
    /* Fondo transparente para el track */
  }

  ::-webkit-scrollbar-thumb {
    border-radius: 10px;
    /* Bordes redondeados para darle suavidad */
    background-color: rgba(0, 0, 0, 0.2);
    /* Color del scrollbar semi-transparente */
    transition: background-color 0.3s ease;
    /* Transición suave en el color */
  }

  ::-webkit-scrollbar-thumb:hover {
    background-color: rgba(0, 0, 0, 0.5);
    /* Cambio de color al hacer hover */
  }

  ::-webkit-scrollbar-track {
    background-color: transparent;
    /* Mantener el track invisible */
  }

  /* Para Firefox */
  ::-webkit-scrollbar {
    scrollbar-width: thin;
    /* Hacer la barra fina */
    scrollbar-color: rgba(0, 0, 0, 0.2) transparent;
    /* Color similar al de WebKit */
  }

  body {
    background-color: #ffffff;
    margin-top: 5px;
    font-family: var(--si-body-font-family);
    --si-font-sans-serif: 'Mont-SemiBold', sans-serif;
    --si-font-italic: 'interstate-bold-italic', italic;
    --si-font-monospace: sans-serif, italic;
    --si-body-font-family: var(--si-font-sans-serif), var(--si-font-italic);
  }

  .timeline-container {
    margin: 50px auto;
    max-width: 700px;
    text-align: center;
  }

  /* Estilo de la barra de la línea de tiempo */
  .timeline-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    position: relative;
  }

  /* Puntos de la línea de tiempo */
  .timeline-bar div {
    width: 50px;
    height: 50px;
    background-color: #000000;
    /* Color negro */
    border-radius: 50%;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.4s ease, transform 0.4s ease;
    z-index: 1;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    /* Sombra negra */
    border: 2px solid white;
    /* Borde blanco */
  }

  .timeline-bar div.active {
    background-color: #d50057;
    /* Color fucsia */
  }

  .timeline-bar div:hover {
    background-color: #d50057;
    /* Cambiado a fucsia */
    transform: scale(1.1);
    /* Escalado más suave */
  }

  /* Barra de progreso animada */
  .progress {
    height: 15px;
    background-color: #e9ecef;
    border-radius: 50px;
    overflow: hidden;
    position: relative;
    width: 100%;
    margin-bottom: 20px;
  }

  .progress-bar {
    background-color: #d50057;
    /* Cambiado a fucsia */
    background-size: 30px 30px;
    animation: animate-stripes 2s linear infinite;
  }

  @keyframes animate-stripes {
    from {
      background-position: 0 0;
    }

    to {
      background-position: 30px 0;
    }
  }

  /* Contenido */
  .timeline-content {
    display: none;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }

  .timeline-content.active {
    display: block;
    opacity: 1;
    transform: translateY(0);
  }

  /* Tarjeta de contenido */
  .timeline-card {
    background-color: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  }

  .timeline-card img {
    width: 100%;
    max-width: 500px;
    /* Tamaño máximo de la imagen */
    height: auto;
    border-radius: 15px;
    margin-top: 15px;
  }

  /* Responsivo */
  @media (max-width: 768px) {
    .timeline-bar div {
      width: 45px;
      height: 45px;
      font-size: 16px;
    }
  }

  @media (max-width: 576px) {
    .timeline-bar div {
      width: 40px;
      height: 40px;
      font-size: 14px;
    }

    .timeline-card {
      padding: 20px;
    }
  }
  </style>
</head>

<body class="elemento">
  <div class="container timeline-container">
    <!-- Barra de la línea de tiempo -->
    <div class="timeline-bar">
      <div data-year="2016" class="active">2016</div>
      <div data-year="2020">2020</div>
      <div data-year="2022">2022</div>
      <div data-year="2024">2024</div>
    </div>

    <!-- Barra de progreso animada -->
    <div class="progress">
      <div id="timeline-progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
    </div>

    <!-- Contenido de la línea de tiempo con Placeholders -->
    <div id="content-2016" class="timeline-content active">
      <div class="timeline-card">
        <h5 style="text-align: justify;">
          4 de noviembre de 2016 - BOGOTA D.C. - COLOMBIA - (En Hotel Dann Carlton.)
        </h5>
        <image src="bower_components/img/portafolio/año/personas2.jpg"
          alt="<?php echo htmlspecialchars($historia['titulo1']); ?>"
          title="<?php echo htmlspecialchars($historia['titulo1']); ?>" />
      </div>
    </div>

    <div id="content-2020" class="timeline-content">
      <div class="timeline-card">
        <h5 style="text-align: justify;">
          18 de septiembre de 2020 - (@ecopetroloficial)
        </h5>
        <p style="text-align: justify; font-size: 14px;">
          Nos encontramos ejecutando obras civiles, eléctricas, mecánicas e instrumentación para el hub
          sur de @ecopetroloficial
        </p>
        <image src="bower_components/img/portafolio/año/personas3.jpg"
          alt="<?php echo htmlspecialchars($historia['titulo1']); ?>"
          title="<?php echo htmlspecialchars($historia['titulo1']); ?>" />
      </div>
    </div>

    <div id="content-2022" class="timeline-content">
      <div class="timeline-card">
        <h5 style="text-align: justify;">
          23 de noviembre de 2022 - (@ecopetroloficial)
        </h5>
        <p style="text-align: justify; font-size: 14px;">
          ¡Finalizamos nuestra ODS2!

          Dando cumplimiento al contrato marco 3045405 con nuestro cliente @ecopetroloficial, culminamos
          las obras correspondientes a la intervención en el CPF 2 de Campo Rubiales con el objetivo de
          realizar obras para la contrucción de facilidades y ampliación de tratamientos y disposición
          de fluidos en Puerto Gaitán.

          En esta intervención represento un reto constructivo para nuestra compañ+ia ya que cubrimos la
          obra desde direfentes frentes: Obras civiles, mecánicas, eléctricas, de instrumentación. En
          las actividades que se destacan, se encuentra la puesta en marcha del sistema de inyección de
          fluidos a través de las bombas booster, y la construcción de la linea de alta presión por una
          extensión de 934 metros.

          Un dato clave en la ejecución de este proyecto, es la meta de cero accidentes e incidentes, lo
          que deja claro nuestro compromiso con la seguridad y el bienestar de nuestros colaboradores

          ¡Juntos construimos país!
        </p>
        <image src="bower_components/img/portafolio/año/obra1.jpeg"
          alt="<?php echo htmlspecialchars($historia['titulo1']); ?>"
          title="<?php echo htmlspecialchars($historia['titulo1']); ?>" />
      </div>
    </div>

    <div id="content-2024" class="timeline-content">
      <div class="timeline-card">
        <h5 style="text-align: justify;">
          30 de junio de 2024 - (@ecopetroloficial)
        </h5>
        <p style="text-align: justify; font-size: 14px;">
          Avanzamos con la Intervención en nuestra ODS 008 - HUB - OQ en Acacías! 🚀 para nuestro
          cliente @ecopetroloficial

          En este proyecto emplearemos la tecnología de Perforación Horizontal Dirigida (PHD) para
          interconectar la estación Acacias con la estación Castilla 3 a través de Tres cruces
          dirigidos.

          Entre los avances más representativos se encuentra el halado de tubería de 24" del cruce N° 2.
          La perforación piloto del cruce N° 1, que atravesará el Río Orotoy🌊, este cruce es el más
          representativo, por su distancia y el diámetro de la tubería.

          Por último, realizamos las adecuaciones locativas para el cruce N° 3 con la conformación de
          las plataformas, este cruce asegura el ecosistema presente en la zona teniendo en cuenta que
          evitara el paso por el Caño Alfare.

          Próximamente te mostraremos las medidas de control ambiental y de aseguramiento HSE que
          adoptamos en la ejecución de esta ODS.
        </p>
        <image src="bower_components/img/portafolio/año/maquina1.jpg"
          alt="<?php echo htmlspecialchars($historia['titulo1']); ?>"
          title="<?php echo htmlspecialchars($historia['titulo1']); ?>" />
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    type="text/javascript" charset="UTF-8"></script>
  <script type="text/javascript" charset="UTF-8">
  // JavaScript para manejar la interacción
  const timelineBar = document.querySelectorAll('.timeline-bar div');
  const contents = document.querySelectorAll('.timeline-content');
  const progressBar = document.getElementById('timeline-progress');

  const progressSteps = {
    '2016': 0,
    '2020': 33,
    '2022': 66,
    '2024': 100
  };

  timelineBar.forEach(dot => {
    dot.addEventListener('click', function() {
      const year = this.getAttribute('data-year');

      // Activar el círculo correspondiente
      timelineBar.forEach(d => d.classList.remove('active'));
      this.classList.add('active');

      // Actualizar barra de progreso animada
      progressBar.style.width = progressSteps[year] + '%';

      // Mostrar placeholders y luego cambiar al contenido real
      contents.forEach(content => {
        content.classList.remove('active');
      });

      const activeContent = document.getElementById('content-' + year);
      activeContent.classList.add('active');
    });
  });
  </script>
</body>

</html>