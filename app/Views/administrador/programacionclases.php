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
              <div class="card-header">Horarios</div>
                <div class="card-body">
                  <ol>
                    <li>Cardio rumba - lunes y jueves - 8:00 pm</li>
                    <li>spinning - martes y miercoles - 8:00 pm</li>
                    <li>Aerobicos - sabados - 8:00 pm</li>
                    <li>Libre - domingos - 8:00 pm</li>
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
    <?php require_once 'componentes/scripts.php'; ?>
    <script src="<?= base_url('js/programacionclases.js') ?>"></script>
</body>
</html>