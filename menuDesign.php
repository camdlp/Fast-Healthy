<!DOCTYPE html>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!--
TFG Carlos Abia. Universidad Francisco de Vitoria 2019.
Modelo seguido: https://magoz.is/
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" type="image/png" href="img/icon-color.png"/>
        
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/basics.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">        

        <title>Menú Fast & Healthy®</title>

    </head>
    <body>

        <!-- NAVBAR -->
        <nav id="" class="navbar-material white no-shadows">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo left"><img class="responsive-img" id="logo" style="margin: 10%;" src="img/icon-color.png"/></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons red-text">menu</i></a>
                <ul class="right hide-on-med-and-down">                    
                    <li><a href="#"><i class="material-icons red-text">account_circle</i>Cuenta</a></li>
                    <li><a class="menu"><i class="material-icons red-text">restaurant_menu</i>Menú</a></li>
                    <li><a href="#"><i class="material-icons red-text">shopping_cart</i>Cesta</a></li>
                </ul>
            </div>



        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="img/icon-color.png" class="responsive-img" >
                    </div>
                    <a href="#user"><img class="circle white" src="img/icon-color.png" class="responsive-img"></a>
                    <a href="#name"><span class="grey-text" id="nickSideBar">Acceder</span></a>
                    <a href="#email"><span class="grey-text" id="emailSideBar">Registrarse</span></a>
                </div>
            </li>          
            <li><a href=""><i class="material-icons red-text">account_circle</i>Cuenta</a></li>
            <li><a class="menu"><i class="material-icons red-text">restaurant_menu</i>Menú</a></li>
            <li><a href=""><i class="material-icons red-text">shopping_cart</i>Cesta</a></li>
        </ul>
        <!-- END NAVBAR -->


        <!-- CONTENIDO -->
        <div id="contenido">
            <div class="row">
                <div class="col s12">
                    <h5>Platos del menú</h5>
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#primeros">Primeros</a></li>
                        <li class="tab col s3"><a href="#segundos">Segundos</a></li>                    
                        <li class="tab col s3"><a href="#postres">Postres</a></li>
                    </ul>


                    <!-- PRIMEROS -->
                    <div class="col s12" id="primeros" >

                    </div>
                    <!-- END PRIMEROS -->

                    <!-- SEGUNDOS -->
                    <div id="segundos" class="col s12">

                    </div>
                    <!-- END SEGUNDOS -->

                    <!-- POSTRES -->
                    <div id="postres" class="col s12">

                    </div>
                    <!-- END POSTRES -->
                </div>
            </div>



            <!-- CESTA -->

            <div class="cesta row">
                
                    <ul class="collapsible red white-text">
                        <li>
                            
                            <div class="collapsible-body" id="cuerpoCesta" >
                                <div id="contenidoCesta">
                                    
                                    <h6 style="margin-top: 0"><b>La cesta está vacía</b></h6>
                                    
                                </div>
                            </div>
                            
                            <div class="collapsible-header transparent row">
                                <div class="col s1 offset-s1">
                                    <span id="numeroCesta" class="fa-stack" data-count="0" >                            
                                        <i id=""class="fa fa-shopping-cart"></i>
                                    </span>
                                </div>
                                <div class="col s7 center contenido-cesta">
                                    
                                    <b>Total cesta</b>
                                
                                </div>
                                <span class="col s3"><b><span id="precio-cesta">0</span>€</b></span>
                            </div>
                            
                        </li>
                    </ul>


                              
            </div>



            <!-- END CESTA -->
        </div>
        <!-- END CONTENIDO -->        






        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <!-- END CARGA DE JAVASCRIPTS -->
        
        <!-- MODALES -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h5 class="red-text darken-2">¿Seguro que quieres eliminar este plato?</h5>
                <p>Este plato se eliminará de tu cesta.</p>
            <div>
            <div class="modal-footer">                
                <a class="modal-close waves-effect waves-green btn-flat">No</a>
                <a onclick="borra()" class="modal-close waves-effect waves-green btn-flat red-text">Sí</a>
            </div>
        </div>

    </body>
</html>
<!-- CARGO LOS PLATOS DESDE EL SERVIDOR EN CARDS -->
<script type="text/javascript">

    var numeroPlatos = <?php echo $numPlatos ?>;

//cargo el array php de platos en una variable js
    var listaPlatos = <?php echo json_encode($listaPlatos); ?>;
    var output = "";
    for (var i = 0; i < numeroPlatos; i++) {

        output += '<div id="' + listaPlatos[i][0] + '" class="card">\
                <div class="card-image">\
                    <img class="responsive-img"src="img/icon-color.png">\
                    <span class="card-title black-text">' + listaPlatos[i][1] + '</span>\
                    <a id="' + listaPlatos[i][0] + '" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>\
                </div>\
                    <div class="card-content">\
                        <h5>'+ listaPlatos[i][2] +' €</p>\
                </div>\
              </div><br>';

    }

    $('#primeros').append(output);

//Pulso el botón de añadir plato
    $('.btn-floating').click(function () {
        //Sumo 1 plato a la cesta y guardo el id del plato en el array de la cesta
        elementosCesta.push(this.id);
        console.log(this.id);
        console.log(elementosCesta);
        $('#numeroCesta').attr('data-count', elementosCesta.length);
        
        calculaPrecio();
        
        //Toast
        //Resto 1 al id porque los ids empiezan en 1 y el array en 0
        var toastHTML = '<span>' + listaPlatos[this.id - 1][1] + ' añadido a la cesta</span><button class="btn-flat toast-action recupera1">Deshacer</button>';
        M.toast({html: toastHTML});

        //Deshacer
        $('.recupera1').click(function () {
            //Borro el último plato añadido
            elementosCesta.splice(-1,1);
            console.log(elementosCesta);
            
            calculaPrecio();
            $('#numeroCesta').attr('data-count', elementosCesta.length);
            
            
            // Quito el toast
            M.Toast.dismissAll();
        });

    });
    
    function calculaPrecio() {
        var total = 0;
        for (var i = 0; i < elementosCesta.length; i++){      
 
            //console.log(actual);
            //Resto 1 a elementoscesta por ser un array y lo que contiene el id del plato que empieza en 1
            total += parseFloat(listaPlatos[elementosCesta[i]-1][2]);
            
            
            //Evitamos los números periódicos con una simple función matemática. 
            total = Math.round(total * 100) / 100;
            
        }
        
        $('#precio-cesta').text(total.toString());
            
    }
    
</script>





















