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
    <style>
      .avatar-container {
  position: relative;
  width: 90px;
  height: 90px;
  margin: auto;
}

.avatar-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #ddd;
}

/* Overlay */
.avatar-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 35%;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 12px;
  cursor: pointer;
  opacity: 0;
  border-bottom-left-radius: 50%;
  border-bottom-right-radius: 50%;
  transition: opacity 0.3s;
}

.avatar-container:hover .avatar-overlay {
  opacity: 1;
}
    </style>
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
                      <div>Total de entradas</div>
                        <div class="progress progress-thin my-2">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          </div>
                        </div>
                        <!-- <small class="text-body-secondary">Widget helper text</small> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                   <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">89.9%</div>
                            <div>Total de salidas</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- <small class="text-body-secondary">Widget helper text</small> -->
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">89.9%</div>
                            <div>Total en stock venta</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- <small class="text-body-secondary">Widget helper text</small> -->
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">89.9%</div>
                            <div>Total en stock proveedor</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- <small class="text-body-secondary">Widget helper text</small> -->
                          </div>
                        </div>
                  </div>
                </div>
                </div>
              <br>
        <div class="container-lg px-4">
          <div class="card mb-4 ">
            <div class="card-header ">
              Inventario de productos
              <button
                class="btn btn-primary float-end btn-sm btn-rounded"
                data-coreui-toggle="modal"
                data-coreui-target="#crearproducto"
              >
                <i class="fas fa-plus"></i> Agregar Producto
              </button>
              <br>
            </div>
              <div class="card-body">
               <div class="table-responsive">
                          <table class="table table-striped table-hover" id="tabla-productos">
                            <thead>
                              <tr> 
                                <th class="text-uppercase bg-danger"></th>
                                <th class="text-uppercase bg-danger">NOMBRE PRODUCTO</th>
                                <th class="text-uppercase bg-danger">MEDIDA</th>
                                <th class="text-uppercase bg-danger">PRECIO COMPRA</th>
                                <th class="text-uppercase bg-danger">PRECIO VENTA</th>
                                <th class="text-uppercase bg-danger">STOCK</th>
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
                                    src="https://ui-avatars.com/api/?name=CREATINA EN POLVO=128&background=4f46e5&color=fff"
                                    alt="user@email.com"
                                  >
                                    <span class="avatar-status bg-success"></span>
                                </div>
                              </td>
                              <td>
                                <div class="text-nowrap text-uppercase">CREATINA EN POLVO</div>
                                <div class="small text-body-secondary text-nowrap"><span>1256848285</span> | PROTEINAS</div>
                              </td>
                                <td>VTA00</td>
                                <td>$15000</td>
                                <td>$20000</td>
                                <td class="text-uppercase" >01</td>
                                <td>
                                  <span class="badge rounded-pill text-bg-success text-white text-uppercase">activo</span>
                                </td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Ver</a>
                                      <a class="dropdown-item text-success" href="#">Ingreso</a>
                                      <a class="dropdown-item text-danger" href="#">Salida</a>
                                      <a class="dropdown-item text-primary" href="#">Historico</a>
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

    <!-- CREAR PRODUCTOS -->
<div class="modal fade" id="crearproducto" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="creardeportistaLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="creardeportistaLabel">Crear productos</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center mb-4">
          <div class="avatar-container">
            <img
              id="previewImage"
              src="https://ui-avatars.com/api/?name=productos+venta&size=128&background=4f46e5&color=fff"
              alt="Producto"
            >
            <label for="imageUpload" class="avatar-overlay">📷 Cambiar</label>
            <input type="file" id="imageUpload" accept="image/*" hidden>
          </div>
        </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <label class="mb-2">Codigo (*)</label>
                    <div class="input-group">
                      <input 
                        type="text"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-barcode text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-8">
                    <label class="mb-2">Nombre del Producto o Servicio (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-book text-morado"></i>
                      </a>
                    </div>
          </div>
          
        </div>
        <!--  -->
        <div class="row mt-3">
          <div class="col-md-4">
           <label class="mb-2">Categoria (*)</label>
                    <div class="input-group">
                      <select
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                      >
                        <option value="">Seleccione una opcion</option> 
                      </select>
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-users text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-4">
<label class="mb-2">Unidad Medida (*)</label>
                    <div class="input-group">
                      <select
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                      >
                        <option value="">Seleccione una opcion</option> 
                        <option value="Unidad">Unidad</option>
                        <option value="Caja">Caja</option>
                        <option value="Kilogramo">Kilogramo</option>
                        <option value="Gramo">Gramo</option>
                        <option value="Litro">Litro</option>
                        <option value="Mililitro">Mililitro</option>

                      </select>
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-balance-scale text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-4">
<label class="mb-2">Ganancia Maxima (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-wallet text-morado"></i>
                      </a>
                    </div>
          </div>
        </div>
        <!--  -->
        <div class="row mt-3">
          <div class="col-md-4">
           <label class="mb-2">Precio Compra (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-money-bill text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-4">
<label class="mb-2">Precio Venta (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-money-bill text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-2">
<label class="mb-2">Stock Inicial (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        value="0"
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-cash-register text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-2">
<label class="mb-2">Stock Minimo (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        value="0"
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-cash-register text-morado"></i>
                      </a>
                    </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
    <?php require_once 'componentes/scripts.php'; ?>
    <script src="<?= base_url('js/productos.js') ?>"></script>
</body>
</html>