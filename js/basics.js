/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var elementosCesta = [];

/*
 * Inicializaciones materialize
 */

//$(document).ready(function () {
//    $('.sidenav').sidenav();
//});
$(document).ready(function () {
    $('.collapsible').collapsible();
});

$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.tabs').tabs();
    //Línea para el cambio de número de la cesta.
    //document.getElementById('numeroCesta').setAttribute('data-count', 12);
});

//Prueba de quitar un plato ya hecho y recuperarlo si hiciera falta
$('.quitar').click(function () {
    $('.card1').fadeOut(500);
    var toastHTML = '<span id="toast">Eliminado Espinacas al Ajillo</span><button class="btn-flat toast-action recupera1">Recuperar</button>';
    M.toast({html: toastHTML});
    $('.recupera1').click(function () {
        $('.card1').fadeIn(500);

        // Quito el toast
        var toastElement = document.querySelector('.toast');
        var toastInstance = M.Toast.getInstance(toastElement);
        toastInstance.dismiss();
    });
});






/*
 * Onclicks
 */
$('.collapsible').click(function () {
    if (elementosCesta.length > 0) {
        var texto = "<table class='centered'><th class='center' colspan='2'>Artículos en la Cesta</th>"
        for (var i = 0; i < elementosCesta.length; i++) {

            texto += "<tr>";
            texto += "<td col s10>" + listaPlatos[elementosCesta[i] - 1][1] + "</td>" + "<td>" + listaPlatos[elementosCesta[i] - 1][2] + " €</td>";
            texto += "</tr>";

        }
        texto += "<th class='center' style='border-bottom:1px solid #f44336' colspan='2'><a class='waves-effect waves-light btn-flat white red-text'><i class='fa fa-check-circle left'></i>Realizar pedido</a></th></table>";
        $('#contenidoCesta').html(texto);
        console.log(texto);
        console.log(elementosCesta);
    }else M.toast({html: 'La cesta está vacía'});



});

function muestraArticulos() {
    var output = "";
    for (var i = 0; i < elementosCesta.length; i++) {
        output += "" + (i + 1) + "\n ";
    }
    return output;
}