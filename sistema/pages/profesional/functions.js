
$(document).ready(function(){       

    $('#form_datos_cuenta_prof').submit(function(e) {
        /* Act on the event */
        e.preventDefault();        
        
        var action='actualizar_datos_cuenta';
        var id_usuario = $('#id_usuario').val();
        var usuario_cuenta = $('#usuario_cuenta_prof').val();
        var clave_cuenta = $('#clave_cuenta_prof').val();

        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            async: true,
            data: {action:action, id_usuario:id_usuario,usuario_cuenta:usuario_cuenta,clave_cuenta:clave_cuenta},

            success: function(response){                
                if (response != 'error') 
                {                 
                 alert(response);
                }
            },
        });         

    });

    $('#form_datos_pers_prof').submit(function(e) {
        /* Act on the event */
        e.preventDefault(); 
       
        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            async: true,
            data: $('#form_datos_pers_prof').serialize(),

            success: function(response){
                if (response != 'error') 
                {                 
                 alert(response);                  
                }
            }, 
        });               

    });



 // FIN FUNCION READY      
});
