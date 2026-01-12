
$(document).ready( function () {
  $('#tabla-miembros').DataTable({
    "lengthChange": false,
     "dom": 'frtip',
     "lengthMenu": [10, 50, 100, 200],
    "language":{
    "processing": "Procesando",
    "search": "Buscar: ",
    "lengthMenu": "Ver _MENU_ Deportistas",
    "info": "Mirando _START_ a _END_ de _TOTAL_ Deportistas",
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