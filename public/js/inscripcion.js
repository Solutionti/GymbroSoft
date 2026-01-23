
function inscribirse() {
   var documento = $('#documento').val();
   var nombres = $('#nombres').val();
   var apellidos = $('#apellidos').val();
   var clase = $('#clase').val();
   
   if(documento === '' || nombres === '' || apellidos === '' || clase === '') {
        $("body").overhang({
        type: "error",
        message: "Complete todos los campos requeridos",
    });
   }
   else {
        $.ajax({
            url: baseurl + 'clases/crearInscripciones',
            type: 'POST',
            data: {
                documento: documento,
                nombres: nombres,
                apellidos: apellidos,
                clase_codigo: clase
            },
            success: function(response) {
              window.location.href = baseurl + 'respuestaInscripcion';
            },
            error: function(xhr, status, error) {
             alert('Error al realizar la inscripción. Por favor, inténtelo de nuevo.');
            }
        });
   }   
}