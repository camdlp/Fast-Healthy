/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/*
 * Inicializaciones materialize
 */

$(document).ready(function () {
    $('.sidenav').sidenav();
});



/*
 * Onclicks
 */


$('.menu').click(function () {
    $('#contenido').load('menu.php');
    $('.sidenav').sidenav('close');

    //Incializo los tabs de materialize
    $(document).ready(function () {
        $('.tabs').tabs();
    });
});

