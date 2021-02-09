function orden() {


    var parametros = {

    };
    $.ajax({
        data: parametros,
        url: 'ordenes/orden.php',
        type: 'post',
        beforeSend: function() {
            $("#opcion").html("");
        },
        success: function(response) {
            $("#opcion").html(response);
        }
    });

}



function detalle() {


    var parametros = {

    };
    $.ajax({
        data: parametros,
        url: 'ordenes/detalle.php',
        type: 'post',
        beforeSend: function() {
            $("#opcion").html("");
        },
        success: function(response) {
            $("#opcion").html(response);
        }
    });

}


function detalle2() {


    var parametros = {

    };
    $.ajax({
        data: parametros,
        url: 'ordenes/detalle2.php',
        type: 'post',
        beforeSend: function() {
            $("#detalle_orden").html("");
        },
        success: function(response) {
            $("#detalle_orden").html(response);
        }
    });

}

function mySelect() {
    var pro = document.getElementById("articulo").value;
    var cant = document.getElementById("cantidad").value;
    var parametros = {
        "pro": pro,
        "cant": cant,
    };
    $.ajax({
        data: parametros,
        url: 'ordenes/articulos.php',
        type: 'post',
        beforeSend: function() {
            $("#subtotal").html("");
        },
        success: function(response) {
            $("#subtotal").html(response);
        }
    });
}

function mySelect2() {
    var pro = document.getElementById("articulo").value;
    var cant = document.getElementById("cantidad").value;
    var parametros = {
        "pro": pro,
        "cant": cant,
    };
    $.ajax({
        data: parametros,
        url: 'ordenes/cantidad.php',
        type: 'post',
        beforeSend: function() {
            $("#subtotal").html("");
        },
        success: function(response) {
            $("#subtotal").html(response);
        }
    });
}


function eliminarform(id) {
    var tipo = "eliminar";
    var parametros = {
        "producto": id,
        "tipo": tipo,
    };
    $.ajax({
        data: parametros,
        url: 'ordenes/eliminarArticulo.php',
        type: 'post',
        beforeSend: function() {
            $("#opcion").html("");
        },
        success: function(response) {
            $("#opcion").html(response);
        }
    });

}
/*
$('#formularioaenviar').submit(function(ev) {
    $.ajax({
        type: $('#formularioaenviar').attr('method'),
        url: $('ordenes/agregarOrden.php').attr('action'),
        data: $('#formularioaenviar').serialize(),
        beforeSend: function() {
            $("#subtotal").html("");
        },
        success: function(response) {
            $("#subtotal").html(response);
        }
    });
    ev.preventDefault();
});*/

function cargarCompras() {


    var parametros = {

    };
    $.ajax({
        data: parametros,
        url: 'ordenes/compras.php',
        type: 'post',
        beforeSend: function() {
            $("#compras").html("");
        },
        success: function(response) {
            $("#compras").html(response);
        }
    });

}