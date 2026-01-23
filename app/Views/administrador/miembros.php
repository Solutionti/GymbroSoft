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
    <title>GymbroSoft - Deportistas</title>
    <?php require_once 'componentes/head.php'; ?>
    <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="card mb-4">
            <div class="card-header">Deportistas</div>
              <div class="card-body">
                <div class="table-responsive">
                          <table class="table table-striped table-hover" id="tabla-miembros">
                            <thead>
                              <tr> 
                                <th class="text-uppercase naraja-background"></th>
                                <th class="text-uppercase naraja-background">Deportista</th>
                                <th class="text-uppercase naraja-background">Telefono</th>
                                <th class="text-uppercase naraja-background">Fecha Inicio</th>
                                <th class="text-uppercase naraja-background">Fecha final</th>
                                <th class="text-uppercase naraja-background">Dias</th>
                                <th class="text-uppercase naraja-background">Estado</th>
                                <th class="text-uppercase naraja-background">Membresia</th>
                                <th class="text-uppercase naraja-background">Sexo</th>
                                <th class="text-uppercase naraja-background"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($deportista->getResult() as $deportistas): ?>
                              <tr>
                                  <td class="text-center">
                                  <div class="avatar avatar-md">
                                    
                                  <img 
                                    class="avatar-img"
                                    src="https://ui-avatars.com/api/?name=<?= $deportistas->nombre .'+'. $deportistas->apellido;?>&size=128&background=C76E00&color=fff"
                                    alt="user@email.com"
                                  >
                                    <span class="avatar-status bg-success"></span>
                                </div>
                              </td>
                              <td>
                                <div class="text-nowrap text-uppercase"><?= $deportistas->nombre .' '. $deportistas->apellido;?></div>
                                <div class="small text-body-secondary text-nowrap"><span><?= $deportistas->documento;?></span> | Registro: <?= $deportistas->fecha;?></div>
                              </td>
                                <td><?= $deportistas->telefono;?>
                                  <a href="http://wa.me/+57<?php echo $deportistas->telefono; ?>" target="_blank">
                                    <span class="fab fa-whatsapp text-success"></span>
                                  </a>
                                </td>
                                <td><?= $deportistas->fecha_inicio;?></td>
                                <td><?= $deportistas->fecha_final;?></td>
                                <td>
                                  <?php
                                    $fechaInicio = new DateTime($deportistas->fecha_final);
                                    $fechaFinal  = new DateTime(date("Y-m-d"));

                                    $diferencia = $fechaInicio->diff($fechaFinal);
                                    echo $diferencia->days;
                                  ?>
                                </td>
                                <?php if($deportistas->fecha_final <= date("Y-m-d")) { ?>
                                  <td><span class="badge rounded-pill text-bg-danger text-white">Vencido</span></td>
                                  <?php } else { ?>
                                   <td><span class="badge rounded-pill text-bg-success text-white">Pago</span></td>
                                <?php } ?>
                                <td class="text-uppercase"><?= $deportistas->membresia;?></td>
                                <td><?= $deportistas->sexo;?></td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <!-- <a class="dropdown-item" href="#">Ver</a> -->
                                      <a class="dropdown-item text-danger">Penalizar</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
              </div>
            </div>
          </div>
          <!--  -->
        </div>
      <?php require_once 'componentes/footer.php'; ?>
    </div>
    <?php require_once 'componentes/scripts.php'; ?>
    <script src="<?= base_url('js/miembros.js') ?>"></script>
</body>
</html>