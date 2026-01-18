const tbody = document.querySelector('.tbody');
let carrito = [];
let totalPedidos = 0;
$(document).ready( function () {
  $('#tablaProductosVenta').DataTable({
    "lengthChange": false,
     "dom": 'frtip',
     "lengthMenu": [10, 50, 100, 200],
    "language":{
    "processing": "Procesando",
    "search": "Buscar: ",
    "lengthMenu": "Ver _MENU_ Productos",
    "info": "Mirando _START_ a _END_ de _TOTAL_ Productos",
    "zeroRecords": "No encontraron resultados",
    "paginate": {
      "first":      "Primera",
      "last":       " Ultima ",
      "next":       " Siguiente ",
      "previous":   "Anterior"
    }
  }
  });
});

document.addEventListener('DOMContentLoaded', function () {

    let fechainicial = $("#fecha_inicial").val();
    const fecha = new Date(fechainicial);
    fecha.setDate(fecha.getDate() + 30);
    $("#fecha_final").val(fecha.toISOString().split('T')[0]);
    $("#validacioningreso").modal('show');
});

$("#fecha_inicial").on("change", function () {
      let fechainicial = $("#fecha_inicial").val();
      const fecha = new Date(fechainicial);
      fecha.setDate(fecha.getDate() + 30);
    
      $("#fecha_final").val(fecha.toISOString().split('T')[0]);
});


$("#codigo_producto").on("blur", function () {
      
    let codigo = $("#codigo_producto").val();
    let url = baseurl + "ventas/getproductoventa/" + codigo;

    $.ajax({
      url: url,
      type: "GET",
      // dataType: "json",
      success: function (response) {
        if(response === "error") {
          $("body").overhang({
            type: "error",
            message: "Producto no se encontrado en la base de datos",
          });
        }
        else {
          $("body").overhang({
            type: "success",
            message: "Producto encontrado exitosamente",
          });
          response = JSON.parse(response);
          const nombre = response.nombre;
          const codigo = response.barras;
          const precio = response.precio_venta;

          const newItem = {
            nombre: nombre,
            codigo: codigo,
            precio: precio,
            cantidad: 1
          }
          addItemCarrito(newItem);
          $("#codigo_producto").val("");
          $("#codigo_producto").focus();
        }
      }
    });
});

function addItemCarrito(newItem){
    // var  inputelemento = tbody.getElementsByClassName('cantidad_products');
    for(let i= 0; i < carrito.length; i++ ){
        if(carrito[i].nombre.trim() === newItem.nombre.trim()){
          carrito[i].cantidad ++;
          // const inputValue = inputelemento[i];
          // inputValue.value ++;
          carritoTotal();
          return null;
        }
    }
    carrito.push(newItem);
    renderCarrito();
}

function renderCarrito(){
    const contenedor = document.getElementById("contenido_detalle");
    contenedor.innerHTML = "";
    carrito.forEach((item, index) => {
        const producto = document.createElement("div");
        producto.classList.add('ItemCarrito');
        precio = Number(item.precio);
        producto.innerHTML = `
            <div class="row">
  <div class="col-md-9">
    <i class=" fas fa-times mt-1 delete text-danger" title="eliminar"></i> <span class="title text-uppercase">${item.nombre}</span> - $${precio.toLocaleString(undefined, {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            })}
  </div>
  <div class="col-md-2">
    <span>
      <input type="number" class="form-control form-control-sm" style="width:60px; font-size:12px; text-align:center;" value="1" min="1" />
    </span>
  </div>
</div>
        `;

        // Evento para eliminar el producto correcto
        producto.querySelector(".delete").addEventListener("click", () => {
            removeItemCarrito(item.nombre);
        });

        contenedor.appendChild(producto);
    });
    carritoTotal();
}

function sumaCantidad(e){
    const sumaInput = e.target;
    const tr = sumaInput.closest(".ItemCarrito");
    const title = tr.querySelector('.title').textContent;
    carrito.forEach(item => {
      if(item.nombre.trim() === title.trim()){
        sumaInput.value < 1 ? (sumaInput.value = ''): sumaInput.value;
        item.cantidad = sumaInput.value;
        carritoTotal();
      }
    });
  }

  function carritoTotal(){
    let total = 0;
    const itemCartTotal  = document.querySelector('.total-compra');
    carrito.forEach((item) => {
      const precio = Number(item.precio.replace("$", ''));
      total = total + precio*item.cantidad
    });
    $("#compracero").attr("hidden", true);
    $("#total-compra").attr("hidden", false);
    // itemCartTotal.innerHTML = '$' + total.toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0});
    totalPedido = total;
    $("#total").val(totalPedido);
    document.getElementById("totalventa").innerHTML = '$' + totalPedido.toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0});
    totalPedidos = totalPedido;
  }

  function removeItemCarrito(nombre){

    $("body").overhang({
      type: "confirm",
      yesMessage: "Sí",
      noMessage: "No",
      message: "¿Desea eliminar este producto de la venta?" ,
      overlay: true,
      callback: function (value) {
       if (value) {
          for(let i = 0; i < carrito.length; i++){
           if(carrito[i].nombre.trim() === nombre.trim()){
           carrito.splice(i, 1);
          }
       }
        renderCarrito();
        carritoTotal();
      }
      else {

     }
  }
 });
  }

  function asociarProductoModal(codigo) {
    let url = baseurl + "ventas/getproductoventa/" + codigo;

    $.ajax({
      url: url,
      type: "GET",
      // dataType: "json",
      success: function (response) {
        if(response === "error") {
          $("body").overhang({
            type: "error",
            message: "Producto no se encontrado en la base de datos",
          });
        }
        else {
          $("body").overhang({
            type: "success",
            message: "Producto encontrado exitosamente",
          });
          response = JSON.parse(response);
          const nombre = response.nombre;
          const codigo = response.barras;
          const precio = response.precio_venta;

          const newItem = {
            nombre: nombre,
            codigo: codigo,
            precio: precio,
            cantidad: 1
          }
          addItemCarrito(newItem);
          $("#listaproductos").modal('hide');
          $("#codigo_producto").val("");
          $("#codigo_producto").focus();
        }
      }
    });
  }

  $("#codigo_deportista").on("blur", function () {
    let codigo = $("#codigo_deportista").val();
    let url = baseurl + "deportistas/getDeportista/" + codigo;
    $.ajax({
      url: url,
      type: "GET",
      success: function (response) {
        if(response === "error") {
          $("body").overhang({
            type: "error",
            message: "Deportista no se encontrado en la base de datos",
          });
          $("#creardeportista").modal('show');
          $("#documento_deportista").val($("#codigo_deportista").val());
        }
        else {
          response = JSON.parse(response);
          $("body").overhang({
            type: "success",
            message: "Deportista encontrado exitosamente",
          });
          $("#nombre_ventas").val(response.nombre);
          $("#apellido_ventas").val(response.apellido);

          $validacion = $('#sesionvalidacion').is(':checked');
          if($validacion == true) {
            if(response.membresia == 0) {
              membresiaact = "NP";
              dias = 0;
            }
            else {
              membresiaact = "PAGO";
              dias = 15;

            }
            $("#offcanvasRight").offcanvas('show');

            document.getElementById("tarjeta_deportista").innerHTML =
            `
            <div class="card athlete-card"><div class="card-header-custom">
            <div class="athlete-photo"><i class="fas fa-user"></i></div></div>
            <div class="card-body card-body-custom"><h3 class="athlete-name text-white text-capitalize">${response.nombre + " " + response.apellido}</h3><p class="athlete-specialty">CLIENTE PREMIUM ZONAFIT</p>
            <div class="stats-container"><div class="stat-item"><div class="stat-number">${response.membresia}</div><div class="stat-label">Menbresia</div></div>
            <div class="stat-item"><div class="stat-number text-success">${membresiaact}</div><div class="stat-label">Estado</div></div>
            <div class="stat-item"><div class="stat-number">${dias}</div><div class="stat-label">Dias</div></div></div>
            <p class="text-muted mb-3" style="font-size: 13px; padding: 0 15px;">Deportista premium enfocado en disciplina, rendimiento, constancia y bienestar físico integral.</p>
            </div></div>
            `;
          }
          else {
          }
        }
      }
    });   
  });

  function asociarMembresia($codigo) {
    
    $.ajax({
      url: baseurl + "membresias/getMembresiaId/" + $codigo,
      type: "GET",
      dataType: "json",
      success: function (response) {
        if(response == "error") {
        }
        else {

          const nombre = response.membresias[0].nombre;
          const codigo = response.membresias[0].codigo_membresia;
          const precio = response.membresias[0].precio;

          const newItem = {
            nombre: nombre,
            codigo: codigo,
            precio: precio,
            cantidad: 1
          }
          addItemCarrito(newItem);
          $("#codigo_producto").val("");
          $("#codigo_producto").focus();
          
        }
      } 
    });
  }

  function finalizarVenta() {
    if(carrito.length === 0) {
      $("body").overhang({
        type: "error",
        message: "No hay productos en el carrito de ventas",
      });
      return;
    }

    let deportista = $("#codigo_deportista").val(),
        fecha_inicio = $("#fecha_inicial").val(),
        fecha_final = $("#fecha_final").val(),
        url = baseurl + "ventas/finalizarVenta";

    let ventas = [];
    for (let i = 0; i < carrito.length; i++) {
        ventas [i] = carrito[i];
    }

    $.ajax({
      url: url,
      type: "POST",
      data: {
        deportista: deportista,
        ventas: ventas,
        total: totalPedidos,
        fecha_inicio: fecha_inicio,
        fecha_final: fecha_final
      },

      success: function (response) {
        $("#crearventa").prop("disabled", true);
        if(response == "error") {
          $("body").overhang({
            type: "error",
            message: "Error al procesar la venta. Inténtalo de nuevo.",
          });
          $("#crearventa").prop("disabled", false);
        }
        else {
          $("body").overhang({
            type: "success",
            message: "Venta realizada con éxito.",
          });
          setTimeout(reloadPage, 3000);
          $("#crearventa").prop("disabled", false);
        }
      }
    });
  }

  function crearDeportista() {
    let url = baseurl + "ventas/crearDeportista";
    let documento = $("#documento_deportista").val(),
        nombre = $("#nommbres_deportista").val(),
        apellido = $("#apellidos_deportista").val(),
        telefono = $("#telefono_deportista").val(),
        correo = $("#correo_deportista").val(),
        sexo = $("#sexo_deportista").val();

    $.ajax({
      url: url,
      type: "POST",
      data: {
        documento: documento,
        nombre: nombre,
        apellido: apellido,
        telefono: telefono,
        correo: correo,
        sexo: sexo
      },

      success: function (response) {
        if(response == "error") {
          $("body").overhang({
            type: "error",
            message: "Error al crear el deportista. Inténtalo de nuevo.",
          });
        }
        else {
          $("body").overhang({
            type: "success",
            message: "Deportista creado con éxito.",
          });
          $("#creardeportista").modal('hide');
          $("#codigo_deportista").val(documento); 
          $("#nombre_ventas").val(nombre); 
          $("#apellido_ventas").val(apellido); 
        }
      }
    });
  }

  $("#sesionvalidacion").on("change", function () {
    var url = baseurl + '/ventas/CrearVariableSesion';
    if($(this).is(":checked")) {
  
    $.ajax({
      url: url,
      method: 'POST',
      data: {codigo: 1},
      success: function(response) {
        
        setTimeout(reloadPage, 100);
    },
    error: function() {
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      });
    }
  });
    }
    else {
     $.ajax({
      url: url,
      method: 'POST',
      data: {codigo: 0},
      success: function(response) {
        
        setTimeout(reloadPage, 100);
    },
    error: function() {
      
    }
  });
    }
  });

  function reloadPage() {
    location.reload();
  }



   
