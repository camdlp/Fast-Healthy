/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var elementosCesta = 0;

/*
 * Inicializaciones materialize
 */

//$(document).ready(function () {
//    $('.sidenav').sidenav();
//});
$(document).ready(function(){
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
var activo = false;
$('.collapsible').click(function () {
        
    if(activo){
        //Cierra la cesta
        $('#numeroCesta').fadeIn(500);
        $('#numeroCesta').attr('data-count', elementosCesta);        
        activo = false;
    }else{
        //Abre la cesta
        $('#numeroCesta').attr('data-count', null);
        $('#numeroCesta').fadeOut(500);
        activo = true;
        
        $('#cuerpoCesta').text(muestraArticulos());
        console.log(muestraArticulos());
        
        
    }
    
    
});

function muestraArticulos(){
    var output = "";
    for(var i = 0; i < elementosCesta; i++){
        output += ""+ (i+1) + "\n ";
    }
    return output;
}