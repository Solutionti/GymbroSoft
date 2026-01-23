<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción a clases programadas</title>
    <?php require_once 'componentes/head.php'; ?>
    <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- <div class="text-center"> -->
          <img 
            src="<?= base_url('img/logo-zonafit.svg') ?>"
            class="img-fluid mx-1 mt-4"
            width="100"
          >
        <!-- </div> -->
      </div>
    </div>

    <!--  -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="mt-2 display-2 mx-2 color-naranja">Inscripcion a  Clases</h1>
        <hr>
      </div>
    </div>
    <!--  -->
    <div class="row mt-3">
      <div class="col-md-12">
        <label class="mb-2">Documento <span class="color-naranja">*</span></label>
        <input type="number" class="form-control" id="documento">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label class="mb-2">Nombres <span class="color-naranja">*</span></label>
        <input type="text" class="form-control" id="nombres">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label class="mb-2">Apellidos <span class="color-naranja">*</span></label>
        <input type="text" class="form-control" id="apellidos">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label class="mb-2">Clase a participar <span class="color-naranja">*</span></label>
        <select name="" id="clase" class="form-control text-uppercase">
          <option value="">Seleccione una clase a participar</option>
          <?php foreach($clases->getResult() as $clase): ?>
            <option value="<?= $clase->codigo_clase ?>"><?= $clase->nombre ?> -  <?= $clase->fechainicio ?>  - Hora: <?= $clase->hora ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
     <button class="btn naraja-background mt-4" onclick="inscribirse()">Inscribirse</button>
    <br>
    <br>
    <?php require_once 'componentes/footer.php'; ?>
  </div>
  <?php require_once 'componentes/scripts.php'; ?>
    <script src="<?= base_url('js/inscripcion.js') ?>"></script>
</body>
</html>