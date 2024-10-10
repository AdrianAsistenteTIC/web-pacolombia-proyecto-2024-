<?php
// Datos de la sección "MAQUINARIA Y EQUIPOS" - establecidos de manera estática
$maquinaria_and_equipos = [
    'titulo_maquinaria_and_equipos' => '',
    'portada' => 'bower_components/img/portafolio/banner-maquinaria.png',
    'menu-title2' => 'MAQUINARÍA Y EQUIPOS',
    'title_maquinaria_and_equipos_one' => 'EQUIPO DE PERFORACIÓN HORIZONTAL DIRIGIDA - (MAQUINARÍA PHD)',
    'descripcion_maquinaria_and_equipos_one' => 'Descripción',
    'coment_maquinaria_and_equipos_one' => 'Equipo especializado con capacidad para cruces
dirigidos superiores a 800 metros lineales con
diámetros que varían entre 4 y 42 pulgadas.',
    'title_maquinaria_and_equipos_two' => '(MAQUINARÍA AMARILLA)',
    'descripcion_maquinaria_and_equipos_two' => 'Descripción',
    'coment_maquinaria_and_equipos_two' => 'La versátilidad de nuestra flota nos permite
asegurar la ejecución eficiente y precisa, en los
puntos determinantes de cada proyecto.',
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
    'titulo6' => 'RETROCARGADORES',
    'portada7' => 'bower_components/img/portafolio/maquina2.png',
    'titulo7' => 'D 1000 X 900 - PHD VEERMER',
    'portada8' => 'bower_components/img/portafolio/maquina14.jpg',
    'titulo8' => 'DD 440T - PDH AMERICAN AUGER',
    'portada9' => 'bower_components/img/portafolio/maquina4.png',
    'titulo9' => '330 X 500 - PDH VEERMER',
    'portada10' => 'bower_components/img/portafolio/maquina5.png',
    'titulo10' => 'D 100 X 120 - PDH VEERMER',
    'portada11' => 'bower_components/img/portafolio/maquina6.png',
    'titulo11' => '50 X 100 - PDH VEERMER',
    'portada12' => 'bower_components/img/portafolio/maquina7.png',
    'titulo12' => 'D 24 X 40A - PDH VEERMER'
];
?>
<style>
.accordion {
  display: flex;
  justify-content: space-between;
  align-items: center;
  overflow: hidden;
  width: 100%;
  max-width: 1300px;
  height: 40%;
}

.accordion-item {
  position: relative;
  flex: 1;
  transition: flex 0.3s ease;
  border-radius: 15px;
  margin: 0 3px;
  overflow: hidden;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
  height: 190px;
}

.accordion-item img {
  width: 100%;
  height: 100%;
  object-fit: fill;
  border: 2px #f5f5f5 solid;
  /* Cambiado a contain para mostrar la imagen completa */
  border-radius: 15px;
  transition: transform 0.3s ease;
}

.accordion-item:hover {
  flex: 2;
}

.accordion-item:hover img {
  transform: scale(1.1);
}

.label {
  position: absolute;
  bottom: 1px;
  left: 31%;
  color: #D50032;
  transform: translateX(0%);
  background-color: rgba(255, 255, 255, 0.65);
  padding: 4px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: bold;
  text-align: center;
  opacity: 0;
  /* Oculto por defecto */
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.accordion-item:hover .label {
  opacity: 1;
  /* Mostrar texto al pasar el mouse */
}

/* Estilos para pantallas pequeñas */
@media (max-width: 768px) {
  .accordion {
    flex-direction: column;
    width: 100%;
    height: auto;
  }

  .accordion-item {
    margin: 10px 0;
    height: 300px;
    /* Ajustado a 300px para pantallas medianas */
  }

  .label {
    font-size: 13px;
    padding: 8px;
  }
}

@media (max-width: 480px) {
  .accordion-item {
    height: 250px;
    /* Ajustado a 250px para pantallas móviles */
  }

  .label {
    font-size: 12px;
    padding: 6px;
  }
}
</style>
<section class="container pt-5">
  <div class="row">
    <section class="container mb-5 pb-lg-5 pt-2 pt-md-4">
      <hr />
    </section>
    <div class="card border-light">
      <div class="card-header border-light text-dark">
        <h3 class="h3 mb-lg-5 mb-4 pb-lg-0 pb-md-2 text-left">
          <span>
            <strong>
              <b>
                <code>
                  <?php echo htmlspecialchars($maquinaria_and_equipos['title_maquinaria_and_equipos_one']); ?>
                </code>
              </b>
            </strong>
          </span>
        </h3>
      </div>
      <div class="card-body">
        <p class="card-text text-dark fs-sm" style="text-align: justify;">
        <h3 class="text-dark" style="text-align: justify;">
          <?php echo htmlspecialchars($maquinaria_and_equipos['coment_maquinaria_and_equipos_one']); ?>
        </h3>
        </p>
      </div>
    </div>
    <div class="accordion">
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada1']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo1']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada2']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo2']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada3']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo3']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada4']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo4']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada5']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo5']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada6']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo6']); ?>
        </div>
      </div>
    </div>
    <section class="container pt-5"></section>
    <div class="card border-light">
      <div class="card-header border-light text-dark">
        <h3 class="h3 mb-lg-5 mb-4 pb-lg-0 pb-md-2 text-left">
          <span>
            <strong>
              <b>
                <code>
                  <?php echo htmlspecialchars($maquinaria_and_equipos['title_maquinaria_and_equipos_two']); ?>
                </code>
              </b>
            </strong>
          </span>
        </h3>
      </div>
      <div class="card-body">
        <p class="card-text text-dark fs-sm" style="text-align: justify;">
        <h3 class="text-dark" style="text-align: justify;">
          <?php echo htmlspecialchars($maquinaria_and_equipos['coment_maquinaria_and_equipos_two']); ?>
        </h3>
        </p>
      </div>
    </div>
    <div class="accordion">
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada7']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo7']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada8']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo8']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada9']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo9']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada10']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo10']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada11']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo11']); ?>
        </div>
      </div>
      <div class="accordion-item">
        <image src="<?php echo htmlspecialchars($maquinaria_and_equipos['portada12']); ?>"
          alt="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>"
          title="<?php echo htmlspecialchars($maquinaria_and_equipos['titulo_maquinaria_and_equipos']); ?>" />
        <div class="label">
          <?php echo htmlspecialchars($maquinaria_and_equipos['titulo12']); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container pt-5"></section>