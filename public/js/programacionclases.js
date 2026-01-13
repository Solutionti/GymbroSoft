document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  let respuesta = baseurl + "ventas/getdataCalendario";
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
    //    eventClick: function(info){
    //     alert("holas");
    //    }
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
        alert("Horario creado con exito");
        location.reload();
      }
    },
    error: function (xhr, status, error) {
      console.error("Error en la solicitud AJAX:", status, error);
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
      if (response.success) {
        alert("Clase programada con exito");
        location.reload();
      }
    },
    error: function (xhr, status, error) {
      console.error("Error en la solicitud AJAX:", status, error);
    }
  });
}