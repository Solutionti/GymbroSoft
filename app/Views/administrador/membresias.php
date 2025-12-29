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
    <title>GymbroSoft - membresias</title>
    <?php require_once 'componentes/head.php'; ?>
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="row">
            <div class="col-md-8">
                <div class="container-lg px-4">
                  <div class="card mb-4">
                    <div class="card-header">Lista de Membresias</div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr> 
                                <th class="text-uppercase bg-danger">Codigo</th>
                                <th class="text-uppercase bg-danger">Nombre</th>
                                <th class="text-uppercase bg-danger">Días</th>
                                <th class="text-uppercase bg-danger">Precio</th>
                                <th class="text-uppercase bg-danger"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>MRB001</td>
                                <td>RUTINA PRINCIPAL</td>
                                <td>30</td>
                                <td>85.000</td>
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
                <div class="col-md-4">
                  <div class="container-lg px-4">
                    <div class="card mb-4">
                      <div class="card-header">Agregar Membresia</div>
                        <div class="card-body">
                          <form>
                            <div class="form-group">
                                <label for="nombre">Codigo</label>
                                <input type="text" class="form-control" id="codsigo" readonly>
                            </div>
                            <div class="form-group mt-2">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" >
                            </div>
                            <div class="form-group mt-2">
                                <label for="dias">Días</label>
                                <input type="number" class="form-control" id="dias" >
                            </div>
                            <div class="form-group mt-2">
                                <label for="precio">Precio</label>
                                <input type="number" class="form-control" id="precio">
                            </div>
                            <button type="button" class="btn btn-primary mt-3">Aceptar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <?php require_once 'componentes/footer.php'; ?>
        </div>
        <!--  -->
    </div>
    <?php require_once 'componentes/scripts.php'; ?>
</body>
</html>