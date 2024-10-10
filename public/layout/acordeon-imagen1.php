<?php
// Datos de la sección "MAQUINARIA Y EQUIPOS" - establecidos de manera estática
$maquinaria_and_equipos = [
    'titulo_maquinaria_and_equipos' => 'MAQUINARÍA Y EQUIPOS',
    'portada1' => 'bower_components/img/portafolio/maquina8.png',
    'titulo1' => 'EXCAVADORAS',
    'portada2' => 'bower_components/img/portafolio/maquina9.png',
    'titulo2' => 'BULLDOZERS',
    'portada3' => 'bower_components/img/portafolio/maquina10.png',
    'titulo3' => 'VIBROCOMPACTADORES',
    'portada4' => 'bower_components/img/portafolio/maquina11.png',
    'titulo4' => 'MOTONIVELADORAS',
    'portada5' => 'bower_components/img/portafolio/maquina12.png',
    'titulo5' => 'GRÚAS',
    'portada6' => 'bower_components/img/portafolio/maquina13.png',
    'titulo6' => 'RETROCARGADORES'
];
?>
<!DOCTYPE html>
<html lang="es-CO">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acordeón Animado con Texto</title>
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
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: var(--si-body-font-family);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #ffffff;
  }

  :root,
  [data-bs-theme='light'] {
    --si-font-sans-serif: 'Mont-SemiBold', sans-serif;
    --si-font-italic: 'interstate-bold-italic', italic;
    --si-font-monospace: sans-serif, italic;
    --si-body-font-family: var(--si-font-sans-serif), var(--si-font-italic);
  }

  .accordion-container {
    display: flex;
    width: 100%;
    max-width: 1220px;
    height: 20%;
    justify-content: space-between;
  }

  .accordion-item {
    position: relative;
    flex: 1;
    margin: 0 4px;
    overflow: hidden;
    transition: flex 0.5s ease;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  }

  .accordion-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    border-radius: 10px;
  }

  .accordion-item:hover {
    flex: 2;
  }

  .accordion-item:hover img {
    transform: scale(1.0);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  }

  .accordion-item:hover .accordion-text {
    opacity: 1;
    transform: translateY(0);
  }

  .accordion-item:hover {
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
  }

  .accordion-text {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: #d50057;
    font-size: 10px;
    font-family: var(--si-body-font-family);
    opacity: 0;
    transition: opacity 0.5s ease, transform 0.5s ease;
    transform: translateY(20px);
    padding: 10px;
    border-radius: 15px;
    background-color: white;
  }

  /* Media queries para pantallas medianas (tabletas) */
  @media (max-width: 900px) {
    .accordion-container {
      flex-direction: column;
      height: 1460px;
    }

    .accordion-item {
      width: 72%;
      /* Ajusta el ancho de las tarjetas */
    }

    .accordion-text {
      font-size: 8px;
      /* Ajusta el tamaño de la fuente */
    }
  }

  /* Media queries para pantallas pequeñas (móviles) */
  /* Estilos responsivos */
  @media (max-width: 1024px) {
    .accordion-item {
      flex: 1 1 calc(50% - 10px);
      /* 2 columnas en tablets */
      height: 250px;
    }

    .accordion-item:hover {
      flex: 1 1 calc(100%);
      /* En pantallas pequeñas, ocupará el ancho completo */
    }

    h3 {
      font-size: 1.2rem;
    }
  }

  @media (max-width: 768px) {
    .accordion-item {
      flex: 1 1 calc(100%);
      /* 1 columna en móviles */
      height: 200px;
    }

    h3 {
      font-size: 1rem;
    }
  }
  </style>
</head>

<body>
  <div class="accordion-container">
    <div class="accordion-item">
      <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada1']); ?>"
        alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
        title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
      <div class="accordion-text">
        <h2>
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo1']); ?>
        </h2>
      </div>
    </div>
    <div class="accordion-item">
      <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada2']); ?>"
        alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
        title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
      <div class="accordion-text">
        <h2>
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo2']); ?>
        </h2>
      </div>
    </div>
    <div class="accordion-item">
      <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada3']); ?>"
        alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
        title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
      <div class="accordion-text">
        <h2>
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo3']); ?>
        </h2>
      </div>
    </div>
    <div class="accordion-item">
      <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada4']); ?>"
        alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
        title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
      <div class="accordion-text">
        <h2>
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo4']); ?>
        </h2>
      </div>
    </div>
    <div class="accordion-item">
      <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada5']); ?>"
        alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
        title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
      <div class="accordion-text">
        <h2>
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo5']); ?>
        </h2>
      </div>
    </div>
    <div class="accordion-item">
      <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada6']); ?>"
        alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
        title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
      <div class="accordion-text">
        <h2>
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo6']); ?>
        </h2>
      </div>
    </div>
  </div>
</body>

</html>