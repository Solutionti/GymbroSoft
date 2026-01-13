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
      dataType: "json",
      success: function (response) {
        if(response == "error") {

        }
        else {
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
    
    for(let i = 0; i < carrito.length; i++){
      if(carrito[i].nombre.trim() === nombre.trim()){
        carrito.splice(i, 1);
      }
    }
    renderCarrito();
    carritoTotal();
  }

  $("#codigo_deportista").on("blur", function () {
    let codigo = $("#codigo_deportista").val();
    let url = baseurl + "deportistas/getDeportista/" + codigo;
    $.ajax({
      url: url,
      type: "GET",
      dataType: "json",
      success: function (response) {
        if(response == "error") {
        }
        else {
        $("#nombre_ventas").val(response.nombre);
        $("#apellido_ventas").val(response.apellido);
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
          console.log(response);

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
      alert("El carrito está vacío. Agrega productos antes de finalizar la venta.");
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
        if(response == "error") {
          alert("Error al procesar la venta. Inténtalo de nuevo.");
        }
        else {
          alert("Venta realizada con éxito.");
          setTimeout(reloadPage, 3000);
         
        }
      }
    });
  }

  function reloadPage() {
    location.reload();
  }



   
