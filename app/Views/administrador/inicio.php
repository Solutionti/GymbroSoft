
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
    <title>GymbroSoft - Inicio</title>
    <?php require_once 'componentes/head.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-4">
                        <div class="card text-white bg-primary">
                          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                              <div class="fs-4 fw-semibold"><?php echo $deportista->getResult()[0]->total_deportistas; ?><span class="fs-6 fw-normal"> ( Total )</span></div>
                              <div>Deportistas</div>
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                          </div>
                          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" height="70"></canvas>
                          </div>
                      </div>
                </div>
                <!--  -->
                <div class="col-md-4">
<div class="card text-white bg-info">
                          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                              <div class="fs-4 fw-semibold">$<?php echo number_format($pago->getResult()[0]->total_pagos, 0, '', '.'); ?> <span class="fs-6 fw-normal">(Diario
                                  )</span></div>
                              <div>Pagos Hoy</div>
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                          </div>
                          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart2" height="70"></canvas>
                          </div>
                        </div>
                </div>
                <!--  -->
                <div class="col-md-4">
                  <div class="card text-white bg-warning">
                          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                              <div class="fs-4 fw-semibold"><?php echo $visita->getResult()[0]->total_visitas; ?> <span class="fs-6 fw-normal">(Diario
                                  )</span></div>
                              <div>Visitas</div>
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                          </div>
                          <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" height="70"></canvas>
                          </div>
                        </div>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-md-12">
                  <div class="flot-chart-wrapper">
                      <div id="flotChart" class="flot-chart">
                        <canvas class="flot-base" id="miGrafico"  width="850" height="200"></canvas>
                      </div>
                    </div>
                </div>
              </div>
              <!--  -->
              <div class="row mt-4">
                <div class="col-md-12">
                  <div class="progress-group">
                        <div class="progress-group-header">
                          <svg class="icon icon-lg me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                          </svg>
                          <div>Hombres</div>
                          <div class="ms-auto fw-semibold">(<?php echo $hombre->getResult()[0]->total_hombres; ?>) <?php echo $hombre->getResult()[0]->total_hombres / $deportista->getResult()[0]->total_deportistas * 100  ?>%</div>
                        </div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $hombre->getResult()[0]->total_hombres / $deportista->getResult()[0]->total_deportistas * 100  ?>%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="progress-group mb-5">
                        <div class="progress-group-header">
                          <svg class="icon icon-lg me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-female"></use>
                          </svg>
                          <div>Mujeres</div>
                          <div class="ms-auto fw-semibold">(<?php echo $mujer->getResult()[0]->total_mujeres; ?>) <?php echo $mujer->getResult()[0]->total_mujeres / $deportista->getResult()[0]->total_deportistas * 100  ?>%</div>
                        </div>
                        <div class="progress-group-bars">
                          <div class="progress progress-thin">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $mujer->getResult()[0]->total_mujeres / $deportista->getResult()[0]->total_deportistas * 100  ?>%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      
                </div>
              </div>
              <!--  -->
            </div>
            <div class="col-md-4">
              <div class="card mb-4">
                <div class="card-header"></div>
                  <div class="card-body">
                    <table class="table border mb-0">
                          <thead class="fw-semibold text-nowrap">
                            <tr class="align-middle">
                              <th class="bg-body-secondary text-center">
                                <i class="fas fa-users"></i>
                              </th>
                              <th class="bg-body-secondary">Deportistas</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($activo->getResult() as $activos): ?>
                            <tr class="align-middle">
                              <td class="text-center">
                                <div class="avatar avatar-md">
                                  <img 
                                    class="avatar-img"
                                    src="https://ui-avatars.com/api/?name=<?= $activos->nombre .'+'. $activos->apellido;?>&size=128&background=C76E00&color=fff"
                                    alt="user@email.com"
                                  >
                                    <?php if($activos->estado == "Activo") { ?>
                                      <span class="avatar-status bg-success"></span>
                                      <?php } else { ?>
                                        <span class="avatar-status bg-danger"></span>
                                        <?php } ?>
                                </div>
                              </td>
                              <td>
                                <div class="text-nowrap text-capitalize"><?= $activos->nombre.' '.$activos->apellido; ?></div>
                                <div class="small text-body-secondary text-nowrap">
                                   <?php if($activos->estado == "Activo") { ?>
                                    <span>Activo</span> | en sala de ejercicio
                                      <?php } else { ?>
                                        <span>Desconectado</span> | en descanso
                                        <?php } ?>
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
          </div>
          <!--  -->
          
        </div>
      <?php require_once 'componentes/footer.php'; ?>
      <script>
const ctx = document.getElementById('miGrafico');

new Chart(ctx, {
  type: 'bar', // tipos: bar, line, pie, doughnut, radar, polarArea, etc.
  data: {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    datasets: [{
      label: 'Asistencias',
      data: [12, 19, 3, 5,10, 2,13,3],
      borderWidth: 1,
      backgroundColor: ['#36a2eb', '#ff6384', '#ffcd56', '#4bc0c0', '#ff6384', '#ffcd56', '#4bc0c0',, '#ff6384', '#ffcd56', '#4bc0c0']
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
    </div>
    <?php require_once 'componentes/scripts.php'; ?>
</body>
</html>