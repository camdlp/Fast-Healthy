<!DOCTYPE html>
<!--
TFG Carlos Abia. Universidad Francisco de Vitoria 2019.
Modelo seguido: https://magoz.is/
-->
<html>
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
    <body>

        <!-- NAVBAR -->
        <div class="navbar-login">
            <h4 class="center red-text">Fast & Healthy</h4>
            <div class="row">
                <img class="col s4 offset-s4 flip-scale-up-hor" src="img/icon-color.png">
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" id="nombre-cuenta" class="autocomplete">
                            <label for="nombre-cuenta">Nombre cuenta</label>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">dialpad</i>
                            <input type="password" id="pass-cuenta" class="autocomplete">
                            <label for="pass-cuenta">Contraseña</label>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">

                            <button id="accederLogin" type="submit" class='col s8 offset-s2 btn btn-large waves-effect red accent-2'>Entrar</button>                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="row"><a href="sms.php" class="col s12 center teal-text">Crear cuenta</a></div>
            <!--<a href="#" onclick="openNewTab()">Nueva</a>
            <a href="#" onclick="refreshExistingTab()">Refresh</a> Prueba recargar página desde otra-->
        </div>      
        <!-- END NAVBAR -->


        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <!-- END CARGA DE JAVASCRIPTS -->
        <script type="text/javascript">

            $('#accederLogin').click(function () {
                window.location.href = 'kitchenDesign.php';
            });

            var childWindow = "http://localhost:8080/Fast-Healthy/kitchenDesign.php";
            var newTabUrl = "http://localhost:8080/Fast-Healthy/index.php";

            function openNewTab() {
                childWindow = window.open(newTabUrl);
            }

            function refreshExistingTab() {
                childWindow.location.href = newTabUrl;
            }


        </script>
    </body>
</html>
