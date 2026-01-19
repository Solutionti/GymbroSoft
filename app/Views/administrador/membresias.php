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
    <title>GymbroSoft - Planes</title>
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
                    <div class="card-header">Lista de Planes</div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-striped table-hover" id="tabla-membresias">
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
                              <?php foreach ($membresia->getResult() as $membresias): ?>
                              <tr>
                                <td class="text-uppercase">MRB00<?= $membresias->codigo_membresia; ?></td>
                                <td class="text-uppercase"> <?= $membresias->nombre; ?></td>
                                <td class="text-uppercase"> <?= $membresias->dias; ?></td>
                                <td class="text-uppercase">$ <?= number_format($membresias->precio, 0, '', '.'); ?></td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" onclick="getMembresiaId(<?= $membresias->codigo_membresia; ?>)">Ver</a>
                                      <a class="dropdown-item text-danger" href="#">Eliminar</a>
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
                </div>
                <div class="col-md-4">
                  <div class="container-lg px-4">
                    <div class="card mb-4">
                      <div class="card-header">Agregar Plan</div>
                        <div class="card-body">
                          <form>
                            <div class="form-group">
                                <label>Codigo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="codigo" readonly>
                            </div>
                            <div class="form-group mt-2">
                                <label>Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nombre" >
                            </div>
                            <div class="form-group mt-2">
                                <label for="dias">Días <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="dias" >
                            </div>
                            <div class="form-group mt-2">
                                <label for="precio">Precio <span class="text-danger">*</span> </label>
                                <input type="number" class="form-control" id="precio">
                            </div>
                            <div class="form-group mt-2">
                                <label for="precio">Estado <span class="text-danger">*</span></label>
                                <select class="form-control" id="estado">
                                  <option value="Activo">Activo</option>
                                  <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary mt-3" onclick="crearMembresia()" id="crear">Aceptar</button>
                            <button type="button" class="btn btn-success mt-3 mx-2 text-white" onclick="actualizarMembresia()" id="actualizar" disabled>Actualizar</button>
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
    <script src="<?= base_url('js/membresias.js') ?>"></script>
</body>
</html>