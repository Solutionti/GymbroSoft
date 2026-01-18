<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción a clases programadas</title>
    <?php require_once 'componentes/head.php'; ?> 
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- <div class="text-center"> -->
          <img 
            src="https://static.vecteezy.com/system/resources/thumbnails/051/226/424/small/abstract-flame-logo-design-with-orange-yellow-and-brown-shades-ideal-for-business-branding-technology-companies-and-modern-designs-png.png"
            class="img-fluid mx-1 mt-4"
            width="80"
          >
        <!-- </div> -->
      </div>
    </div>

    <!--  -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="mt-2 display-2 mx-2">Inscripcion a  Clases</h1>
        <hr>
      </div>
    </div>
    <!--  -->
    <div class="row mt-3">
      <div class="col-md-12">
        <label class="mb-2">Documento *</label>
        <input type="number" class="form-control">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label class="mb-2">Nombres *</label>
        <input type="text" class="form-control">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label class="mb-2">Apellidos *</label>
        <input type="text" class="form-control">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label class="mb-2">Clase a participar *</label>
        <select name="" id="" class="form-control text-uppercase">
          <option value="">Seleccione una clase a participar</option>
          <?php foreach($clases->getResult() as $clase): ?>
            <option value="<?= $clase->codigo_clase ?>"><?= $clase->nombre ?> -  <?= $clase->fechainicio ?>  - Hora: <?= $clase->hora ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
     <button class="btn btn-primary mt-4">Inscribirse</button>
    <br>
    <br>
    <?php require_once 'componentes/footer.php'; ?>
  </div>
  <?php require_once 'componentes/scripts.php'; ?>
    <script src="<?= base_url('js/miembros.js') ?>"></script>
</body>
</html>