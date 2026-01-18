document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  let respuesta = baseurl + "clases/getClasesHorarios";
  var calendar = new FullCalendar.Calendar(calendarEl, {
      slotLabelFormat:{
             hour: '2-digit',
             minute: '2-digit',
             hour12: true
      },
      eventTimeFormat: {
        hour: '2-digit',
        minute: '2-digit',
        hour12: true
       },
        initialView: 'dayGridMonth',
        themeSystem: 'bootstrap5',
        locale: 'es',
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek',
       },
       buttonText: {
            today:'Hoy',
             month:'Mes',
             week:'Semanal',
             day: 'Dia',
             list: 'Lista'
        },
       allDayText: "Todo el dia",
       height: 580,
       eventSources: {
         url: respuesta,
         method: "GET",
         color: "green"
       },
       editable: false,
       eventClick: function(info){
        //aca va el codigo para mostrar modal con info de la clase
       },
       dateClick: function(info) {
        // console.log(info.dateStr);
        $("#programaciondeclases").modal("show");
        $("#fecha_inicial_calendario").val(info.dateStr);
        $("#fecha_final_calendario").val(info.dateStr);
       }
      });
        calendar.render();
    });

function crearHorario() {
  let nombre = document.getElementById("nombre_horario").value;
  let horarios = document.getElementById("horarios_clase").value;
  let hora = document.getElementById("hora_clase").value;
  let url = baseurl + "clases/crearHorario";

  $.ajax({
    type: "POST",
    url: url,
    data: {
      nombre: nombre,
      horarios: horarios,
      hora: hora
    },
    dataType: "json",
    success: function (response) {
      if (response.success) {
         $("body").overhang({
          type: "success",
          message: "Horario creado exitosamente"
        });  
      }
    },
    error: function (xhr, status, error) {
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      }); 
    }
  });
}

function crearClaseCalendario() {
  let fechainicial = $("#fecha_inicial_calendario").val();
  let fechafinal = $("#fecha_final_calendario").val();
  let hora = $("#hora_calendario").val();
  let evento = $("#evento_calendario").val();
  let descripcion = $("#descripcion_calendario").val();
  let url = baseurl + "clases/crearClaseCalendario";

  $.ajax({
    type: "POST",
    url: url,
    data: {
      fechainicial: fechainicial,
      fechafinal: fechafinal,
      hora: hora,
      evento: evento,
      descripcion: descripcion
    },
    dataType: "json",
    success: function (response) {
        $("body").overhang({
          type: "success",
          message: "Clase programada con exito"
        });
        setTimeout(reloadPage, 3000);

    },
    error: function (xhr, status, error) {
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