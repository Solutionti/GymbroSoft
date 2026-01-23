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
    <title>GymbroSoft - Usuarios</title>
    <?php require_once 'componentes/head.php'; ?>
    <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="row">
            <div class="col-md-8">
                <div class="container-lg px-4">
                  <div class="card mb-4">
                    <div class="card-header">Lista de Usuarios</div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-striped table-hover" id="tabla-usuarios">
                            <thead>
                              <tr> 
                                <th class="text-uppercase naraja-background"></th>
                                <th class="text-uppercase naraja-background"></th>
                                <th class="text-uppercase naraja-background">Nombre</th>
                                <th class="text-uppercase naraja-background">Codigo</th>
                                <th class="text-uppercase naraja-background">Telefono</th>
                                <th class="text-uppercase naraja-background">Rol</th>
                                <th class="text-uppercase naraja-background">Estado</th>
                                <th class="text-uppercase naraja-background"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($usuario->getResult() as $usuarios) : ?>
                              <tr>
                                <td>
                                  <td class="text-center">
                                <div class="avatar avatar-md">
                                  <img 
                                    class="avatar-img"
                                    src="https://ui-avatars.com/api/?name=<?= $usuarios->nombre ?>&size=128&background=C76E00&color=fff"
                                    alt="user@email.com"
                                  >
                                    <span class="avatar-status bg-success"></span>
                                </div>
                              </td>
                              <td>
                                <div class="text-nowrap text-uppercase"><?= $usuarios->nombre;?></div>
                                <div class="small text-body-secondary text-nowrap"><span>Administrador</span> | Registrado <?= $usuarios->fecha; ?>, <?= $usuarios->hora; ?></div>
                              </td>
                                </td>
                                <td><?= $usuarios->documento; ?></td>
                                <td><?= $usuarios->telefono; ?></td>
                                <td><?= $usuarios->rol; ?></td>
                                <td>Activo</td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" onclick="getUsuariosId(<?= $usuarios->documento; ?>)">Ver</a>
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
                      <div class="card-header">Agregar Usuario</div>
                        <div class="card-body">
                          <form>
                            
                            <div class="form-group mt-2">
                                <label for="nombre">Nombres y Apellidos <span class="color-naranja">*</span></label>
                                <input type="text" class="form-control" id="nombre" >
                            </div>
                            <div class="form-group mt-2">
                                <label for="dias">Documento <span class="color-naranja">*</span></label>
                                <input type="number" class="form-control" id="documento" >
                            </div>
                            <div class="form-group mt-2">
                                <label for="precio">Telefono <span class="color-naranja">*</span></label>
                                <input type="number" class="form-control" id="telefono">
                            </div>
                            <div class="form-group mt-2">
                                <label for="precio">Correo <span class="color-naranja">*</span></label>
                                <input type="text" class="form-control" id="correo">
                            </div>
                            <div class="form-group mt-2">
                                <label for="precio">Usuario <span class="color-naranja">*</span></label>
                                <input type="text" class="form-control" id="usuario">
                            </div>
                            <div class="form-group mt-2">
                                <label for="precio">Contraseña <span class="color-naranja">*</span></label>
                                <input type="text" class="form-control" id="password">
                            </div>
                            <button type="button" class="btn naraja-background mt-3" id="crear" onclick="crearUsuarios()">Aceptar</button>
                            <button type="button" class="btn btn-danger mt-3 mx-2 text-white" id="actualizar" disabled onclick="editarUsuarios()">Actualizar</button>
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
    <script src="<?= base_url('js/usuarios.js') ?>"></script>
</body>
</html>