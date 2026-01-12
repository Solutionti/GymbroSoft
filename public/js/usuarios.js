

$(document).ready( function () {
  $('#tabla-usuarios').DataTable({
    "lengthChange": false,
     "dom": 'frtip',
     "lengthMenu": [10, 50, 100, 200],
    "language":{
    "processing": "Procesando",
    "search": "Buscar: ",
    "lengthMenu": "Ver _MENU_ Usuarios",
    "info": "Mirando _START_ a _END_ de _TOTAL_ Usuarios",
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

function getUsuariosId(documento) {
  let url = baseurl + "usuarios/getusuariosid/" + documento

  $.ajax({
        url: url,
        type: "GET",
        success: function(response) {
            console.log(response.usuarios);
            $("#nombre").val(response.usuarios[0].nombre);
            $("#documento").val(response.usuarios[0].documento);
            $("#telefono").val(response.usuarios[0].telefono);
            $("#correo").val(response.usuarios[0].email);
            $("#usuario").val(response.usuarios[0].usuario);

            $("#crear").attr("disabled", true);
            $("#actualizar").removeAttr("disabled");
        },
        error: function(xhr, status, error) {
            alert("Error al obtener la membresía: " + error);
        }
    });
}

function crearUsuarios() {
  let url = baseurl  + "usuarios/crear";
  let nombre = $("#nombre").val(),
      documento = $("#documento").val(),
      telefono = $("#telefono").val(),
      correo = $("#correo").val(),
      usuario = $("#usuario").val(),
      password = $("#password").val();

      $.ajax({
    url: url,
    type: "POST",
    data: {
        nombre: nombre,
        documento: documento,
        telefono: telefono,
        correo: correo,
        usuario: usuario,
        password: password,
    },
    success: function(response) {
        alert("Membresía creada exitosamente");
        location.reload();
    },
    error: function(xhr, status, error) {
        alert("Error al crear la membresía: " + error);
    }
  });

}

function editarUsuarios() {
  let url = baseurl  + "usuarios/actualizar";
  let nombre = $("#nombre").val(),
      documento = $("#documento").val(),
      telefono = $("#telefono").val(),
      correo = $("#correo").val(),
      usuario = $("#usuario").val(),
      password = $("#password").val();

      $.ajax({
    url: url,
    type: "POST",
    data: {
        nombre: nombre,
        documento: documento,
        telefono: telefono,
        correo: correo,
        usuario: usuario,
        password: password,
    },
    success: function(response) {
        alert("Membresía creada exitosamente");
        location.reload();
    },
    error: function(xhr, status, error) {
        alert("Error al crear la membresía: " + error);
    }
  });

}

function eliminarUsuarios(documento) {

}