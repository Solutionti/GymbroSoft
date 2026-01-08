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
    <title>GymbroSoft - Visita regular</title>
    <?php require_once 'componentes/head.php'; ?>
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="row">
            <div class="col-md-12">
                <div class="container-lg px-4">
                  <div class="card mb-4">
                    <div class="card-header">Lista de Visitas Regulares</div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr> 
                                <th class="text-uppercase bg-danger"></th>
                                <th class="text-uppercase bg-danger"></th>
                                <th class="text-uppercase bg-danger">Nombre</th>
                                <th class="text-uppercase bg-danger">Codigo</th>
                                <th class="text-uppercase bg-danger">Telefono</th>
                                <th class="text-uppercase bg-danger">Rol</th>
                                <th class="text-uppercase bg-danger">Estado</th>
                                <th class="text-uppercase bg-danger"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
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
                                <div class="text-nowrap">Yiorgos Avraamu</div>
                                <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                              </td>
                                </td>
                                <td>RUTINA PRINCIPAL</td>
                                <td>3155639791</td>
                                <td>Administrador</td>
                                <td>Activo</td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Ver</a>
                                      <a class="dropdown-item" href="#">Editar</a>
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
                </div>
                <!-- <div class="col-md-4">
                  <div class="container-lg px-4">
                    <div class="card mb-4">
                      <div class="card-header">Agregar visita</div>
                        <div class="card-body">
                          <form>
                            <div class="form-group">
                                <label for="nombre">Membresia</label>
                                <select
                                  class="form-control"
                                  id="codsigo"
                                >
                                    <option value="">Seleccione la Opcion de Membresia</option>
                                    <option value="mensual">Mensual</option>
                                    <option value="trimestral">Trimestral</option>
                                    <option value="semestral">Semestral</option>
                                    <option value="anual">Anual</option>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="nombre">Documento</label>
                                <input type="text" class="form-control" id="nombre" >
                            </div>
                            <div class="form-group mt-2">
                                <label for="dias">Nombres y Apellidos</label>
                                <input type="text" class="form-control" id="dias" >
                            </div>
                            <button type="button" class="btn btn-primary mt-3">Aceptar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
            </div>
        </div>
        <!--  -->
      <?php require_once 'componentes/footer.php'; ?>
    </div>
    <?php require_once 'componentes/scripts.php'; ?>
</body>
</html>