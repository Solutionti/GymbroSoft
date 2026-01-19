$(document).ready( function () {
  $('#tabla-membresias').DataTable({
    "lengthChange": false,
     "dom": 'frtip',
     "lengthMenu": [10, 50, 100, 200],
    "language":{
    "processing": "Procesando",
    "search": "Buscar: ",
    "lengthMenu": "Ver _MENU_ Planes",
    "info": "Mirando _START_ a _END_ de _TOTAL_ Planes",
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

function getMembresiaId(codigo) {
    let url = baseurl + "membresias/getMembresiaId/" + codigo;
    $.ajax({
        url: url,
        type: "GET",
        success: function(response) {
            console.log(response.membresias);
            // let membresia = JSON.parse(response);
            $("#codigo").val(response.membresias[0].codigo_membresia);
            $("#nombre").val(response.membresias[0].nombre);
            $("#dias").val(response.membresias[0].dias);
            $("#precio").val(response.membresias[0].precio);
            $("#estado").val(response.membresias[0].estado);

            $("#crear").attr("disabled", true);
            $("#actualizar").removeAttr("disabled");
        },
        error: function(xhr, status, error) {
            alert("Error al obtener la membresía: " + error);
        }
    });
}


function crearMembresia() {
  let url = baseurl + "membresias/crear"; 
  let nombre = $("#nombre").val(),
      dias = $("#dias").val(),
      precio = $("#precio").val(),
      estado = $("#estado").val();

  if(nombre == "" || dias == "" || precio == "" || estado == "") {
    $("body").overhang({
        type: "error",
        message: "Complete todos los campos requeridos",
    });
  }
  else {

    $.ajax({
      url: url,
      type: "POST",
      data: {
          nombre: nombre,
          dias: dias,
          precio: precio,
          estado: estado
      },
      success: function(response) {
  
          $("body").overhang({
            type: "success",
            message: "Membresía creada exitosamente"
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

}

function actualizarMembresia() {
    let url = baseurl + "membresias/actualizar" ;
    let codigo = $("#codigo").val(),
        nombre = $("#nombre").val(),
        dias = $("#dias").val(),
        precio = $("#precio").val(),
        estado = $("#estado").val();

    $.ajax({
      url: url,
      type: "POST",
        data: {
            codigo: codigo,
            nombre: nombre,
            dias: dias,
            precio: precio,
            estado: estado
        },
      success: function(response) {
            $("body").overhang({
                type: "success",
                message: "Membresía actualizada exitosamente"
            });
            setTimeout(reloadPage, 3000);
        },
        error: function(xhr, status, error) {
            alert("Error al actualizar la membresía: " + error);
        }
    });
}

function reloadPage() {
  location.reload();
}