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