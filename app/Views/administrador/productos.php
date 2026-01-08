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
    <title>GymbroSoft - Productos</title>
    <?php require_once 'componentes/head.php'; ?>
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
        <div class="body flex-grow-1">
          <div class="container-lg px-4">
            <div class="row">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="fs-4 fw-semibold">89.9%</div>
                      <div>Diario de productos</div>
                        <div class="progress progress-thin my-2">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          </div>
                        </div><small class="text-body-secondary">Widget helper text</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                   <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">89.9%</div>
                            <div>Diario de membresias</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-body-secondary">Widget helper text</small>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
<div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">89.9%</div>
                            <div>Venta de productos mensual</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-body-secondary">Widget helper text</small>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">89.9%</div>
                            <div>Total de membresias mensual</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-body-secondary">Widget helper text</small>
                          </div>
                        </div>
                  </div>
                </div>
                </div>
              <br>
        <div class="container-lg px-4">
          <div class="card mb-4">
            <div class="card-header">Inventario de productos</div>
              <div class="card-body">
               <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr> 
                                <th class="text-uppercase bg-danger"></th>
                                <th class="text-uppercase bg-danger">Deportista</th>
                                <th class="text-uppercase bg-danger">Consecutivo</th>
                                <th class="text-uppercase bg-danger">Fecha</th>
                                <th class="text-uppercase bg-danger">Total pagado</th>
                                <th class="text-uppercase bg-danger">Membresia</th>
                                <th class="text-uppercase bg-danger">Estado</th>
                                <th class="text-uppercase bg-danger"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td class="text-center">
                                  <div class="avatar avatar-md">
                                  <img 
                                    class="avatar-img"
                                    src="https://coreui.io/demos/bootstrap/5.3/free/assets/img/avatars/1.jpg"
                                    alt="user@email.com"
                                  >
                                    <span class="avatar-status bg-success"></span>
                                </div>
                              </td>
                              <td>
                                <div class="text-nowrap text-uppercase">JERSON GALVEZ</div>
                                <div class="small text-body-secondary text-nowrap"><span>1110542802</span> | Registro: Junio 01, 2025</div>
                              </td>
                                <td>VTA00</td>
                                <td>01</td>
                                <td>$01</td>
                                <td class="text-uppercase" >01</td>
                                <td>
                                  <span class="badge rounded-pill text-bg-success text-white">activo</span>
                                </td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Ver</a>
                                      <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
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
</body>
</html>