<!DOCTYPE html>
<!--
TFG Carlos Abia. Universidad Francisco de Vitoria 2019.
Modelo seguido: https://magoz.is/
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="css/basics.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">        

        <title>Menú Fast & Healthy®</title>

    </head>
    <body>

        <!-- NAVBAR -->
        <div class="navbar-login">
            <h4 class="center red-text">Fast & Healthy</h4>
            <div class="row">
                <img class="col s4 offset-s4" src="img/icon-color.png">
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
                            
                            <button type="submit" class='col s8 offset-s2 btn btn-large waves-effect red accent-2'>Entrar</button>                          
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row"><a href="#" class="col s12 center">Crear cuenta</a></div>
        </div>      
        <!-- END NAVBAR -->


        <!-- CARGA DE JAVASCRIPTS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/basics.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <!-- END CARGA DE JAVASCRIPTS -->

    </body>
</html>
