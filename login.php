<?php

//Inicia la sesión del navegador en el servidor PHP o 
//la continúa si ya estuviera iniciada.
session_start(); 
//Si la variable de sesión no existe lanza el javascript del login
if (isset($_SESSION['nombreUsuario'])) {
    echo "<script type='text/javascript'>location.href='https://carlosabiamer.000webhostapp.com/index.php'</script>";
}


include 'misFunciones.php';


function limpiarPalabra($palabra) {
    //filtro muy básico para evitar la inyección SQL -> 'OR'1'='1
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "´");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, '"');
    return $palabra;
}

$mysqli = conectaBBDD();

$cajaNombre = limpiarPalabra($_POST['cajaNombre']);

$cajaPassword = limpiarPalabra($_POST['cajaPassword']);

$mensajeError = '<div class="row center">
                    <h5 class="grey-text text-darken-3">Usuario o contraseña incorrectos</h5><br/>
                    <h6 class="grey-text text-darken-2">¿Quieres volver a intentarlo?</h6><br/>
                    <a href="loginDesign.php"class="btn-large red">
                        Volver al Login
                    </a>
                </div>';
//echo 'Has escrito el usuario '.$cajaNombre.' y la contraseña '.$cajaPassword;


$resultadoQueryPass = $mysqli->query("SELECT pass FROM usuarios WHERE alias = '".$cajaNombre."'");
if($resultadoQueryPass->num_rows > 0){
    $cajaPasswordHash = $resultadoQueryPass->fetch_assoc();
    if(password_verify($cajaPassword, $cajaPasswordHash['pass'])){
            
        $_SESSION['nombreUsuario'] = $cajaNombre;
        
        
        if($cajaNombre === "admin"){
            
            echo "<script type='text/javascript'>location.href='https://carlosabiamer.000webhostapp.com/kitchen.php'</script>";
            $_SESSION['admin'] = true;
        }else echo "<script type='text/javascript'>location.href='https://carlosabiamer.000webhostapp.com/index.php'</script>";
        
    } else {
        echo $mensajeError;
    }
} else {
    echo $mensajeError;
}


//$numUsuarios = $resultadoQuery->num_rows;
//echo $numUsuarios;
//
//if ($numUsuarios > 0) {
//    $r = $resultadoQuery -> fetch_array();
//    //en la variable de sesión "nombreUsuario" guardo el nombre de usuario
//    $_SESSION['nombreUsuario'] = $cajaNombre;
//    
//    //en la variable de sesión idUsuario guardo el id de usuario leído de la BBDD
//    $_SESSION['idUsuario'] = $r['idUsuario'];
//    
//    
//    //muestro la pantalla de las aplcación
//    require 'index.php';
//} else {
//    //muestro una pantalla de error
//    //header("Refresh:0");
//}