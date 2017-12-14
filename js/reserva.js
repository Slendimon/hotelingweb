jQuery(document).on('submit','#reser1',function(event){
    event.preventDefault();

    jQuery.ajax({
        url: '../php/valreserva.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.reservar_boton').val('Reservando...')
        }
    })
    .done(function(respuestare) {
        console.log(respuestare);
        if (!respuestare.error) {
            alert("Reserva realiza con exito");
            location.href = '../index.html';
            
        } else {
            alert("No se ha completado su reserva");
            location.href = 'index.html';
        }
    })
    .fail(function(respre) {
        console.log("fail");
    })
    .always(function(){
        console.log("complete");
    });
});
