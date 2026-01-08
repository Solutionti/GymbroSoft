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
    <title>GymbroSoft - Programacion de clases</title>
    <?php require_once 'componentes/head.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src='fullcalendar/dist/index.global.js'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var baseurl = "<?php echo base_url();?>";
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
       eventClick: function(info){
        var texto = info.event.title;
        var cadena = texto.split(" || ");
        var tipo_cancha = $("#tipo_cancha_act").val(cadena[1]),
            estado = $("#estado_act").val(cadena[3]),
            fecha = $("#fecha_act").val(),
            hora = $("#hora_act").val(),
            nombre = $("#nombre_act").val(cadena[0]),
            comentarios = $("#comentarios_act").val(cadena[2]);
            
        $("#editarorganigrama").modal("show");
       }
      });
        calendar.render();
    });
  </script>
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="row">
            <div class="col-md-8">
            <div class="card mb-4">
             <div class="card-header">Programacion de clases</div>
               <div class="card-body">
                 <div class="row">
                   <div class="col-md-12">
                     <div id='calendar'></div>
                   </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header">Horarios</div>
                <div class="card-body">
                  <ol>
                    <li>Cardio rumba - lunes y jueves</li>
                    <li>spinning - martes y miercoles</li>
                    <li>Aerobicos - sabados</li>
                    <li>Libre - domingos</li>
                  </ol>
                </div>
            </div>

            <!--  -->
            <div class="card mb-4">
              <div class="card-header">Codigo QR de la inscripción</div>
                <div class="card-body">
                  <!--  -->
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php require_once 'componentes/footer.php'; ?>
    </div>
    <?php require_once 'componentes/scripts.php'; ?>
</body>
</html>