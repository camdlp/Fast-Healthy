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
$('.collapsible-header').click(function () {
    if (elementosCesta.length > 0) {

        var texto = "<table class='centered'><th class='center' colspan='2'>Artículos en la Cesta</th>"
        
        //Cuenta los elementos introducidos en el array
        var contadorElementos = 0;
        for (var i = 0; i < elementosCesta.length; i++) {
            
            texto += "<tr id="+contadorElementos+" class='elementoDeLaCesta'>";
            texto += "<td>" + listaPlatos[elementosCesta[i] - 1][1] + "</td>" + "<td>" + listaPlatos[elementosCesta[i] - 1][2] + " €</td>";
            texto += "</tr>";
            
            
            contadorElementos++;

        }
        texto += "<th class='center' style='border-bottom:1px solid #f44336' colspan='2'><a class='waves-effect waves-light btn-flat white red-text'><i class='fa fa-check-circle left'></i>Realizar pedido</a></th></table>";
        
    }else {
        M.toast({html: 'La cesta está vacía'});
        var texto = "<h6 style='margin-top: 0'><b>La cesta está vacía</b></h6>"
    }
    
    $('#contenidoCesta').html(texto);
    //console.log(texto);
    console.log(elementosCesta);



});

function muestraArticulos() {
    var output = "";
    for (var i = 0; i < elementosCesta.length; i++) {
        output += "" + (i + 1) + "\n ";
    }
    return output;
}


$('#contenidoCesta').on('click', '.elementoDeLaCesta', function () {
    
    console.log("Se ha eliminado el elemento " + $(this).attr('id'));
    console.log(elementosCesta.length);
    //la función splice sirve para eliminar elementos de un array, el primer número 
    //indica la posición de inicio y el segundo los elementos que se borrarán a partir 
    //de ella.
    elementosCesta.splice(this.id, 1);
    
    //Cierro el collapsible y lo vuelvo a abrir pero con un click para activar 
    //los métodos asociados al click como mostrar los elementos de la cesta.
    $('.collapsible').collapsible('close');
    $('.collapsible-header').click();
    
    //Calculo de nuevo el precio y los elemento que hay en la cesta.
    $('#numeroCesta').attr('data-count', elementosCesta.length);
    calculaPrecio();
    
    
    
    
});
    
    
    
    
    
