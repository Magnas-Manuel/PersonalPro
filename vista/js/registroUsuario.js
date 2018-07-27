$(document).ready(function () {
   
  
    var letras = /[A-Za-z]/;
    var numeros = /[0-9]/;
    var pasaporte = /[a-zA-Z]{1,3}[0-9]{6,9}/;
    var DNI = /[0-9]{9}[A-Z]{1}/;
    var celular = /^(\+)[0-9]{1,3}\s[0-9]{10,14}/;
    var correo = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    $('#usu_nombre').focusout(function () {
       
        var nombre = $("#usu_nombre").val();
        if (!letras.test(nombre) || numeros.test(nombre)) {
            $('#id1').html("<span style = 'color:#BA1C2E;'>No debe contener numeros\n\
             o estar vacio</span>");
        } else {
            $('#id1').empty().html();
        }
    });
    $('#usu_apellido').focusout(function () {
        var apellido = $('#usu_apellido').val();
        if (!letras.test(apellido) || numeros.test(apellido)) {
            $('#id2').html("<span style = 'color:#BA1C2E;'>No debe contener numeros\n\
             o estar vacio</span>");
        } else {
            $('#id2').empty().html();
        }
    });

    $('#usu_numero_documento').focusout(function () {

        var Doc = $('#usu_numero_documento').val();
        if (pasaporte.test(Doc) || Doc.length === 10 || DNI.test(Doc)) {
            $('#id3').empty().html();
        } else {
            $('#id3').html("<span style = 'color:#BA1C2E;'>\n\
            la cantidad de numeros o letras no es valida</span>");
        }
    });


  $('#usu_celular').focusout(function () {
        
        var cel = $('#usu_celular').val();
        if (celular.test(cel)) {
            $('#id4').empty().html();
            
        } else {
            
            $('#id4').html("<span style = 'color:#BA1C2E; '>\n\
            este campo es obligatorio o verifique la cantidad de numeros</span>");
            
        }
    });
  
  $('#usu_correo').focusout(function () {
        
        var cor = $('#usu_correo').val();
        if (correo.test(cor)) {
            $('#id5').empty().html();
            
        } else {
            
            $('#id5').html("<span style = 'color:#BA1C2E; '>\n\
            este campo es obligatorio o verifique el correo</span>");
            
        }
    });







});