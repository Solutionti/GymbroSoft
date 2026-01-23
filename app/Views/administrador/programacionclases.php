<!-- nombre
dias
precio -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>GymbroSoft - Programacion de clases</title>
    <?php require_once 'componentes/head.php'; ?>
    <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="row">
            <div class="col-md-8">
            <div class="card mb-4">
             <div class="card-header">Programacion de clases</div>
               <div class="card-body">
                 <div class="row">
                   <div class="col-md-12">
                     <div id='calendar'></div>
                   </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header">Horarios 
                <a href="#" data-coreui-toggle="modal" data-coreui-target="#listahorarios">
                  <i class=" fas fa-calendar-alt text-danger"></i>
                </a>
              </div>
                <div class="card-body">
                  <ol>
                    <?php foreach($horario->getResult() as $horarios): ?>
                      <li class="text-uppercase"><?= $horarios->nombre ?> - <?= $horarios->horarios ?></li>
                   <?php endforeach; ?>
                  </ol>
                </div>
            </div>

            <!--  -->
            <div class="card mb-4">
              <div class="card-header">Codigo QR de la inscripción</div>
                <div class="card-body">
                  <div class="text-center">
                    <img src="<?= base_url('img/qrcode.png') ?>" class="img-fluid" width="230">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php require_once 'componentes/footer.php'; ?>
    </div>

    <!-- LISTA DE HORARIOS  -->
<div class="modal fade" id="listahorarios" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="listahorariosLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="listahorariosLabel">HORARIOS</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="">Nombre <span class="color-naranja"> *</span></label>
        <div class="input-group mb-3">
          <span class="input-group-text">
            <i class="fas fa-dumbbell"></i>
          </span>
          <input
            class="form-control"
            type="text"
            id="nombre_horario"
          >
        </div>
        <!--  -->
        <label for="">Horarios <span class="color-naranja"> *</span></label>
        <div class="input-group mb-3">
          <span class="input-group-text">
            <i class="fas fa-calendar"></i>
          </span>
          <input
            class="form-control"
            type="text"
            id="horarios_clase"
          >
        </div>
        <!--  -->
        <label for="">Hora <span class="color-naranja"> *</span></label>
        <div class="input-group mb-3">
          <span class="input-group-text">
            <i class="fas fa-clock"></i>
          </span>
          <input
            class="form-control"
            type="time"
            id="hora_clase"
          >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger text-white" data-coreui-dismiss="modal">Cerrar</button>
        <button type="button" class="btn naraja-background" onclick="crearHorario()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- LISTA DE HORARIOS  -->
<div class="modal fade" id="programaciondeclases" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="programaciondeclasesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="programaciondeclasesLabel">programar clase</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
            <label for="">Fecha inicial <span class="color-naranja"> *</span></label>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-calendar"></i>
              </span>
              <input
                class="form-control"
                type="date"
                id="fecha_inicial_calendario"
              >
            </div>
          </div>
          <div class="col-md-4">
          <label for="">Fecha Final <span class="color-naranja"> *</span></label>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-calendar"></i>
              </span>
              <input
                class="form-control"
                type="date"
                id="fecha_final_calendario"
              >
            </div>
          </div>
          <div class="col-md-3">
            <label for="">Hora <span class="color-naranja"> *</span></label>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-clock"></i>
              </span>
              <input
                class="form-control"
                type="time"
                id="hora_calendario"
              >
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-md-12">
            <label for="">Evento <span class="color-naranja"> *</span></label>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-calendar"></i>
              </span>
             
              <select
                class="form-control text-uppercase"
                id="evento_calendario"
              > 
                <option value="">Seleccione el evento a programar</option>
                <?php foreach($horario->getResult() as $horarios): ?>
                  <option value="<?= $horarios->nombre; ?>"><?= $horarios->nombre .' ('.$horarios->horarios.')'; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <!--  -->
        
        <div class="row">
          <div class="col-md-12">
            <label for="">Descripcion</label>
            <div class="input-group mb-3">
              <textarea class="form-control" rows="5" id="descripcion_calendario"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger text-white" data-coreui-dismiss="modal">Cerrar</button>
        <button type="button" class="btn naraja-background" onclick="crearClaseCalendario()">Guardar</button>
      </div>
    </div>
  </div>
</div>

    <?php require_once 'componentes/scripts.php'; ?>
    <script src="<?= base_url('js/programacionclases.js') ?>"></script>
</body>
</html>