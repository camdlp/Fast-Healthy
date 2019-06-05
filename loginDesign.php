<!DOCTYPE html>
<!--
TFG Carlos Abia. Universidad Francisco de Vitoria 2019.
Modelo seguido: https://magoz.is/
-->
<?php
//Comprueba si la sesión está empezada.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Si la variable de sesión no existe lanza el javascript del login
if (isset($_SESSION['nombreUsuario'])) {
    echo "<script type='text/javascript'>location.href='https://carlosabiamer.000webhostapp.com/index.php'</script>";
}
?>
<html style="height: auto">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" type="image/png" href="img/icon-outline.png"/>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="css/basics.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">        

        <title>Acceder a Fast & Healthy®</title>

    </head>
    <body id="principal">

        <!-- NAVBAR -->
        <div class="navbar-login">
            <h4 class="center red-text">Fast & Healthy</h4>
            <div class="row">
                <a href="loginDesign.php"><img class="col s6 offset-s3 flip-scale-up-hor" src="img/icon-color.png"></a>
            </div>
        </div>      
        <form id="contenidoLogin" class="row">
            <div class="col s12 l6 offset-l3">
                <div class="row">
                    <div class="input-field col s12 l6 offset-l3">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" id="cajaNombre" class="autocomplete">
                        <label for="cajaNombre">Nombre de Usuario</label>
                    </div>
                </div>
            </div>
            <div class="col s12 l6 offset-l3">
                <div class="row">
                    <div class="input-field col s12 l6 offset-l3">
                        <i class="material-icons prefix">dialpad</i>
                        <input type="password" id="cajaPassword" class="autocomplete">
                        <label for="cajaPassword">Contraseña</label>
                    </div>
                </div>
            </div>
            <div class="col s12 l6 offset-l3">
                <div class="row">
                    <div class="col s12 l6 offset-l3">
                        <button id="accederLogin" class='col s8 offset-s2 btn btn-large waves-effect red accent-2 l6 offset-l3' type="submit">Entrar</button>                          
                    </div>
                </div>
            </div>
            <div class="row"><a href="#" class="col s12 center teal-text">Crear cuenta</a></div>
        </form>


        <!--<a href="#" onclick="openNewTab()">Nueva</a>
        <a href="#" onclick="refreshExistingTab()">Refresh</a> Prueba recargar página desde otra-->
        <!-- END NAVBAR -->


        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <!-- END CARGA DE JAVASCRIPTS -->
        <script type="text/javascript">
            $("#contenidoLogin").submit(function (e) {
                e.preventDefault();
            });


            $('#accederLogin').click(function () {
                //leo el contenido de las cajas de nombre y contraseña.
                var _cajaNombre = $('#cajaNombre').val();
                var _cajaPassword = $('#cajaPassword').val();

                console.log("Usario: " + _cajaNombre + "; Pass: " + _cajaPassword);

                $('#contenidoLogin').load('login.php', {

                    cajaNombre: _cajaNombre,
                    cajaPassword: _cajaPassword
                });


            });
            
            



        </script>
    </body>
</html>
