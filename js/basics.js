/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/*
 * Inicializaciones materialize
 */

//$(document).ready(function () {
//    $('.sidenav').sidenav();
//});

$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.tabs').tabs();
    //Línea para el cambio de número de la cesta.
    //document.getElementById('numeroCesta').setAttribute('data-count', 12);
});

//Prueba de quitar un plato ya hecho y recuperarlo si hiciera falta
$('.quitar').click(function () {
    $('.card1').fadeOut(500);
    var toastHTML = '<span>Eliminado Espinacas al Ajillo</span><button class="btn-flat toast-action recupera1">Recuperar</button>';
    M.toast({html: toastHTML});
    $('.recupera1').click(function () {
        $('.card1').fadeIn(500);
    });
});



/*
 * Onclicks
 */

