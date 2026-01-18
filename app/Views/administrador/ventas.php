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
                  <div class="col-md-11">
                    <label class="mb-2">Codigo Deportista</label>
                    <div class="input-group">
                      <input 
                        type="number"
                        class="form-control form-control-sm"
                        id="codigo_deportista"
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
                  <div class="col-md-1 mt-4">
                    <div class="form-check form-switch form-switch-lg">
                      <?php if(session()->get('validacion') == 0) { ?>
                      <input
                        class="form-check-input mt-3"
                        type="checkbox"
                        id="sesionvalidacion"
                      >
                      <?php } else { ?>
                      <input
                        class="form-check-input mt-3"
                        type="checkbox"
                        id="sesionvalidacion"
                        checked
                        >
                        <?php } ?>
                   </div>
                  </div>
                 </div>
                 <!--  -->
                 <!-- <div class="row mt-2">
                  <div class="col-md-6">
                    <label class="mb-2">Nombres</label>
                    <input 
                      type="text"
                      class="form-control form-control-sm text-uppercase"
                      id="nombre_ventas"
                      readonly
                    >
                  </div>
                  <div class="col-md-6">
                    <label class="mb-2">Apellidos</label>
                    <input 
                      type="text"
                      class="form-control form-control-sm text-uppercase"
                      id="apellido_ventas"
                      readonly
                    >
                  </div>
                 </div> -->
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
                    <?php foreach ($membresia->getResult() as $membresias): ?>
                    <input 
                      type="checkbox"
                      class="btn-check"
                      id="<?=  $membresias->nombre; ?>"
                      onclick="asociarMembresia(<?=  $membresias->codigo_membresia; ?>)"
                      autocomplete="off"
                    >
                      <label class="btn btn-outline-danger text-white text-capitalize" for="<?=  $membresias->nombre; ?>">
                        <?=  $membresias->nombre; ?>
                      </label>
                    <?php endforeach; ?>

                  </div>
                 </div>
                 <hr>
                 <div class="row mt-4">
                  <div class="col-md-12">
                    <label class="mb-2">Codigo del producto</label>
                    <div class="input-group">
                      <input 
                        type="text"
                        class="form-control form-control-lg"
                        id="codigo_producto"
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
                <h4 class="mb-4 mt-1 h5  font-weight-bold text-uppercase">Detalle de la venta</h4>
                <hr>
                <dl class="row contenido_detalle" id="contenido_detalle">
                  <!-- <div>
                    <div class="row">
                      <div class="col-md-9">
                        <i class=" fas fa-times mt-1" title="eliminar"></i> <span class="title text-uppercase">fefeefefecr eatina en polvo</span> - $23,000
                      </div>
                      <div class="col-md-2">
                        <span>
                          <input type="number" class="form-control form-control-sm" style="width:60px; font-size:12px; text-align:center;" value="1" min="1" />
                        </span>
                      </div>
                    </div>
                  </div> -->
                </dl>
                <hr>
                <dl class="row">
                  <dt class="col-sm-8 text-uppercase">
                    Total de la venta
                  </dt>
                  <dt class="col-sm-4 itemCartTotalDetalle text-uppercase" id="totalventa">
                    $0
                  </dt>
                </dl>
              </div>
              <button
                class="btn btn-success btn-lg btn-block text-white"
                type="button"
                onclick="finalizarVenta()"
                id="crearventa"
                >
                 Crear venta
              </button>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 offset-md-7">
                <div class="form-check">
                  <input class="form-check-input mx-2" type="checkbox" id="imprimirfactura">
                  <label class="form-check-label" for="imprimirfactura">
                    ¿Imprimir factura?
                  </label>
                </div>
              </div>
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
                        id="documento_deportista"
                        
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
                        type="text"
                        class="form-control form-control-sm"
                        id="nommbres_deportista"
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
                        type="text"
                        class="form-control form-control-sm"
                        id="apellidos_deportista"
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
                        id="telefono_deportista"
                        
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
                        type="text"
                        class="form-control form-control-sm"
                        id="correo_deportista"
                        
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
                      
                      <select
                        class="form-control form-control-sm"
                        id="sexo_deportista"
                      >
                        <option value="">Seleccione una opcion</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                      </select>
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
        <button type="button" class="btn btn-primary" onclick="crearDeportista()">Guardar</button>
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
        <div class="row">
          <div class="col-md-12">
          <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover" id="tablaProductosVenta">
            <thead>
              <tr class="bg-danger">
                <th class="bg-danger text-uppercase" ><i class="fas fa-barcode"></i> Codigo</th>
                <th class="bg-danger text-uppercase">Nombre</th>
                <th class="bg-danger text-uppercase">Precio</th>
                <th class="bg-danger text-uppercase">Stock</th>
                <th class="bg-danger text-uppercase" ></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($producto->getResult() as $productos): ?>
              <tr>
                <td><?= $productos->barras; ?></td>
                <td class="text-uppercase"><?= $productos->nombre; ?></td>
                <td>$<?= number_format($productos->precio_venta, 0, ',', '.'); ?></td>
                <td><?= $productos->stock; ?></td>
                <td width="10%">
                 <input
                   type="radio"
                   class="btn-check ml-4"
                   name="options"
                   id="<?= $productos->barras; ?>"
                   onclick="asociarProductoModal('<?= $productos->barras; ?>')"
                 >
                 <label
                   class="btn btn-outline-primary text-white btn-sm ml-4" for="<?= $productos->barras; ?>">
                   Seleccionar
                  </label>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cerrar</button> -->
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<!-- INGRESO A CENTRO DE ACONDICIONAMIENTO -->
 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">VALIDACION DEL DEPORTISTA</h5>
    <button type="button" class="btn-close" data-coreui-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="row mt-5">
      <style>
        .athlete-card {
            max-width: 320px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
        }
        
        .athlete-card:hover {
            transform: translateY(-10px);
        }
        
        .card-header-custom {
            background: linear-gradient(135deg, rgba(255, 152, 0, 0.9) 0%, rgba(255, 87, 34, 0.9) 100%),
                        url('https://api.qrserver.com/v1/create-qr-code/?size=500x500&data=https://ejemplo-gym.com/carlos-rodriguez') center/cover;
            padding: 0;
            position: relative;
            height: 70px;
        }
        
        .athlete-photo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 4px solid white;
            position: absolute;
            bottom: -35px;
            left: 50%;
            transform: translateX(-50%);
            object-fit: cover;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 45px;
            color: #666;
        }
        
        .card-body-custom {
            padding-top: 60px;
            text-align: center;
        }
        
        .athlete-name {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        
        .athlete-specialty {
            color: #FF5722;
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }
        
        .stats-container {
            display: flex;
            justify-content: space-around;
            margin: 15px 0;
            padding: 15px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 20px;
            font-weight: bold;
            color: #FF5722;
        }
        
        .stat-label {
            font-size: 10px;
            color: #777;
            text-transform: uppercase;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: transform 0.3s ease;
        }
        
        .social-icon:hover {
            transform: scale(1.1);
            color: white;
        }
        
        .contact-btn {
            background: linear-gradient(135deg, #FF9800 0%, #FF5722 100%);
            border: none;
            padding: 10px 35px;
            border-radius: 25px;
            color: white;
            font-weight: 600;
            transition: transform 0.3s ease;
            font-size: 14px;
        }
        
        .contact-btn:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #FF5722 0%, #FF9800 100%);
        }
    </style>
    <div class="col-md-8 mt-4 offset-md-2" id="tarjeta_deportista">
      <!-- <div class="card athlete-card">
        <div class="card-header-custom">
            <div class="athlete-photo">
                <i class="fas fa-user"></i>
            </div>
        </div>
        <div class="card-body card-body-custom">
            <h3 class="athlete-name text-white">Carlos Rodríguez</h3>
            <p class="athlete-specialty">CLIENTE PREMIUM ZONAFIT</p>
            <div class="stats-container">
              <div class="stat-item">
                <div class="stat-number">MES</div>
                <div class="stat-label">Menbresia</div>
              </div>
              <div class="stat-item">
                <div class="stat-number text-success">PAGO</div>
                <div class="stat-label">Estado</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">15</div>
                <div class="stat-label">Dias</div>
              </div>
            </div>
            <p class="text-muted mb-3" style="font-size: 13px; padding: 0 15px;">
                Deportista premium enfocado en disciplina, rendimiento, constancia y bienestar físico integral.
            </p>
        </div>
      </div> -->
    </div>
  </div>
</div>
</div>


    <?php require_once 'componentes/scripts.php'; ?>
    <script src="<?= base_url('js/ventas.js') ?>"></script>
</body>
</html>