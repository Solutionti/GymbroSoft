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
    <title>GymbroSoft - Ventas</title>
    <?php require_once 'componentes/head.php'; ?>
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="card mb-4">
            <div class="card-header">Ventas </div>
              <div class="card-body">
              <div class="row">
          <div class="col-lg-7">
            <div class="tab-content ">
              <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">
                <!-- aca va el contenido -->
                 <div class="row">
                  <div class="col-md-4">
                    <label class="mb-2">Codigo Deportista (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        autofocus
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-dumbbell text-morado"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="mb-2">Nombres</label>
                    <input 
                      type="text"
                      class="form-control form-control-sm"
                      id="nombres_pedido"
                      readonly
                    >
                  </div>
                  <div class="col-md-4">
                    <label class="mb-2">Apellidos</label>
                    <input 
                      type="text"
                      class="form-control form-control-sm"
                      id="nombres_pedido"
                      readonly
                    >
                  </div>
                 </div>
                 <!--  -->
                 <div class="row mt-2">
                  <div class="col-md-6">
                    <label class="mb-2">Fecha inicial</label>
                    <input 
                      type="date"
                      class="form-control form-control-sm"
                      id="fecha_inicial"
                      value="<?= date("Y-m-d") ?>"
                    >
                  </div>
                  <div class="col-md-5">
                    <label class="mb-2">Fecha final</label>
                    <input 
                      type="date"
                      class="form-control form-control-sm"
                      id="fecha_final"
                    >
                  </div>
                  <div class="col-md-1 mt-2">
                    <i class="fab fa-cc-mastercard fa-2x mt-4 text-success"></i>
                  </div>
                 </div>
                 <div class="row mt-3">
                  <h6>Membresias</h6>
                  <div class="col-md-12">

                    <input type="checkbox" class="btn-check" id="btn-check1" autocomplete="off">
                    <label class="btn btn-outline-danger text-white" for="btn-check1">Diaria</label>

                    <input type="checkbox" class="btn-check" id="btn-check2" autocomplete="off">
                    <label class="btn btn-outline-danger text-white" for="btn-check2">Mensual</label>

                    <input type="checkbox" class="btn-check" id="btn-check3" autocomplete="off">
                    <label class="btn btn-outline-danger text-white" for="btn-check3">Trimestral</label>

                    <input type="checkbox" class="btn-check" id="btn-check4" autocomplete="off">
                    <label class="btn btn-outline-danger text-white" for="btn-check4">Semestral</label>

                    <input type="checkbox" class="btn-check" id="btn-check5" autocomplete="off">
                    <label class="btn btn-outline-danger text-white" for="btn-check5">Anual</label>

                  </div>
                 </div>
                 <hr>
                 <div class="row mt-4">
                  <div class="col-md-12">
                    <label class="mb-2">Codigo del producto</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-lg"
                        id="fecha_final"
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#listaproductos"
                        
                      >
                        <i id="changePassIcon" class="fas fa-store text-morado"></i>
                      </a>
                    </div>
                  </div>
                 </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 mb-4">
            
            <div class="card z-depth-0 border border-light rounded-0">
              <div class="card-body">
                <h4 class="mb-4 mt-1 h5  font-weight-bold text-uppercase">Detalle del pedido</h4>
                <hr>
                <dl class="row contenido_detalle" id="contenido_detalle">
                  <pre>
                    mensualidad x1 mes $85.000
                  </pre>
                </dl>
                <hr>
                <dl class="row">
                  <dt class="col-sm-8 text-uppercase">
                    Total de la venta
                  </dt>
                  <dt class="col-sm-4 itemCartTotalDetalle text-uppercase">
                    $200.000
                  </dt>
                </dl>
              </div>
              <button
                class="btn btn-success btn-lg btn-block text-white"
                type="button"
               >
                 Crear venta
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      </div>
      <?php require_once 'componentes/footer.php'; ?>
              </div>
            </div>
          </div>
          <!--  -->
        </div>
    </div>

    <!-- CREAR DEPORTISTA -->
<div class="modal fade" id="creardeportista" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="creardeportistaLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="creardeportistaLabel">Crear deportista</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
<label class="mb-2">Documento (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        autofocus
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-dumbbell text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-4">
<label class="mb-2">Nombres (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        autofocus
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-user text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-4">
<label class="mb-2">Apellidos (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        autofocus
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-user text-morado"></i>
                      </a>
                    </div>
          </div>
        </div>
        <!--  -->
        <div class="row mt-3">
          <div class="col-md-3">
<label class="mb-2">Telefono (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        autofocus
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-phone text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-6">
<label class="mb-2">Correo (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        autofocus
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-at text-morado"></i>
                      </a>
                    </div>
          </div>
          <div class="col-md-3">
<label class="mb-2">Sexo (*)</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="nombres_pedido"
                        autofocus
                      >
                      <a
                        class="input-group-append input-group-text"
                        data-coreui-toggle="modal" data-coreui-target="#creardeportista"
                      >
                        <i id="changePassIcon" class="fas fa-venus-mars text-morado"></i>
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

<!-- LISTA DE PRODUCTOS  -->
<div class="modal fade" id="listaproductos" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="listaproductosLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="listaproductosLabel">Lista de productos para la venta</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover" id="tablaProductosVenta">
            <thead>
              <tr class="bg-danger">
                <th class="bg-danger text-uppercase" >Codigo</th>
                <th class="bg-danger text-uppercase">Nombre</th>
                <th class="bg-danger text-uppercase">Precio</th>
                <th class="bg-danger text-uppercase">Stock</th>
                <th class="bg-danger text-uppercase" ></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>154658</td>
                <td>Creatina en polvo</td>
                <td>23000</td>
                <td>87</td>
                <td width="10%">
                 <input type="radio" class="btn-check ml-4" name="options" id="option1" autocomplete="off">
                 <label class="btn btn-outline-primary text-white btn-sm ml-4" for="option1">Seleccionar</label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cerrar</button> -->
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

    <?php require_once 'componentes/scripts.php'; ?>
    <script src="<?= base_url('js/ventas.js') ?>"></script>
</body>
</html>