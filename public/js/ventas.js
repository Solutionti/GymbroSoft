
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