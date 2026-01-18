
$(document).ready( function () {
  $('#tabla-productos').DataTable({
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

function crearProducto(){
  var url = baseurl + 'productos/crear';
  var codigo = $('#codigo_producto').val();
  var nombre = $('#nombres_producto').val();
  var categoria = $('#categoria_producto').val();
  var unidad_medida = $('#unidad_medida_producto').val();
  var ganancia_maxima = $('#ganancia_maxima_producto').val();
  var precio_compra = $('#precio_compra_producto').val();
  var precio_venta = $('#precio_venta_producto').val();
  var stock_inicial = $('#stock_inicial_producto').val();
  var stock_minimo = $('#stock_minimo_producto').val();

  $.ajax({
    url: url,
    type: 'POST',
    data: {
      codigo: codigo,
      nombre: nombre,
      categoria: categoria,
      unidad_medida: unidad_medida,
      ganancia_maxima: ganancia_maxima,
      precio_compra: precio_compra,
      precio_venta: precio_venta,
      stock_inicial: stock_inicial,
      stock_minimo: stock_minimo
    },
    success: function(response) {
      $("body").overhang({
          type: "success",
          message: "Producto creado exitosamente"
        });
      setTimeout(reloadPage, 3000);
    },
    error: function(xhr, status, error) {
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      });
    }
  });
}

function getModalIngreso(codigo) {
  var url = baseurl + 'productos/getProductosId/' + codigo;
  $.ajax({
    url: url,
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      $("#codigo_entrada").val(data.barras);
      $("#nombre_entrada").val(data.nombre);
      $("#stock_entrada").val(data.stock);
       $('#entradaproductos').modal('show');
    },
    error: function(xhr, status, error) {
      alert('Error al obtener los datos del producto: ' + error);
    }
  });

}

function getModalSalida(codigo) {
  var url = baseurl + 'productos/getProductosId/' + codigo;

  $.ajax({
    url: url,
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      $("#codigo_salida").val(data.barras);
      $("#nombre_salida").val(data.nombre);
      $("#stock_salida").val(data.stock);
        $('#salidaproductos').modal('show');
    },
    error: function(xhr, status, error) {
      alert('Error al obtener los datos del producto: ' + error);
    }
  });
}

function verProductos(codigo) {
  var url = baseurl + 'productos/getProductosId/' + codigo;
  $.ajax({
    url: url,
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      $('#crearproducto').modal('show');
      $("#guardarprouducto").prop('disabled', true);
      $("#codigo_producto").val(data.barras);
      $("#nombres_producto").val(data.nombre);
      $("#categoria_producto").val(data.categoria);
      $("#unidad_medida_producto").val(data.medida);
      $("#ganancia_maxima_producto").val(data.ganancia_max);
      $("#precio_compra_producto").val(data.precio_proveedor);
      $("#precio_venta_producto").val(data.precio_venta);
      $("#stock_inicial_producto").val(data.stock);
      $("#stock_minimo_producto").val(data.stock_minimo);
    },
    error: function(xhr, status, error) {
      alert('Error al obtener los datos del producto: ' + error);
    }
  });

}

function registrarEntrada() {
  var url = baseurl + 'productos/ingresoKardex';
  var codigo_ingreso = $('#codigo_entrada').val();
  var cantidad_ingreso = $('#cantidad_entrada').val();
  var motivo_ingreso = $('#motivo_entrada').val();
  var observacion_ingreso = $('#observacion_entrada').val();
  var stock_actual = $('#stock_entrada').val();

  $.ajax({
    url: url,
    type: 'POST',
    data: {
      codigo_ingreso: codigo_ingreso,
      cantidad_ingreso: cantidad_ingreso,
      motivo_ingreso: motivo_ingreso,
      observacion_ingreso: observacion_ingreso,
      stock_actual: stock_actual
    },
    success: function(response) {
      $("body").overhang({
          type: "success",
          message: "Entrada registrada exitosamente"
        });
      setTimeout(reloadPage, 3000);
    },
    error: function(xhr, status, error) {
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      });
    }
  });
}

function registrarSalida() {
  var url = baseurl + 'productos/salidaKardex';
  var codigo_salida = $('#codigo_salida').val();
  var cantidad_salida = $('#cantidad_salida').val();
  var motivo_salida = $('#motivo_salida').val();
  var observacion_salida = $('#observacion_salida').val();
  var stock_actual = $('#stock_salida').val();

  $.ajax({
    url: url,
    type: 'POST',
    data: {
      codigo_salida: codigo_salida,
      cantidad_salida: cantidad_salida,
      motivo_salida: motivo_salida,
      observacion_salida: observacion_salida,
      stock_actual: stock_actual
    },
    success: function(response) {
      $("body").overhang({
          type: "success",
          message: "Salida registrada exitosamente"
        });
      setTimeout(reloadPage, 3000);
    },
    error: function(xhr, status, error) {
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      });
    }
  });
}

function actualizarProducto() {
  var url = baseurl + 'productos/actualizar';

  var codigo = $('#codigo_producto').val();
  var nombre = $('#nombres_producto').val();
  var categoria = $('#categoria_producto').val();
  var unidad_medida = $('#unidad_medida_producto').val();
  var ganancia_maxima = $('#ganancia_maxima_producto').val();
  var precio_compra = $('#precio_compra_producto').val();
  var precio_venta = $('#precio_venta_producto').val();
  var stock_inicial = $('#stock_inicial_producto').val();
  var stock_minimo = $('#stock_minimo_producto').val();

  $.ajax({
    url: url,
    type: 'POST',
    data: {
      codigo: codigo,
      nombre: nombre,
      categoria: categoria,
      unidad_medida: unidad_medida,
      ganancia_maxima: ganancia_maxima,
      precio_compra: precio_compra,
      precio_venta: precio_venta,
      stock_inicial: stock_inicial,
      stock_minimo: stock_minimo
    },
    success: function(response) {
      $("body").overhang({
          type: "success",
          message: "Producto actualizado exitosamente"
        });
      setTimeout(reloadPage, 3000);
    },
    error: function(xhr, status, error) {
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      });
    }
  });
}

function reloadPage() {
  location.reload();
}