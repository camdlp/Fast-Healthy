<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC80f19b1d144821573e5ea80139343196';
$auth_token = '309fec38bae1c12282e0b9b95874f3d3';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+34911061996";
$mensaje = "Fast & Healthy\nYa puede recoger el pedido del cliente que consta de: \n-Espinacas al ajillo\n-Pollo a la plancha\nResidencia: "
        . "Calle de la pantomima, 6\nTeléfono de contacto: +34610956815\nHora de la expedición: ".date('H:i');
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+34610956815',
    array(
        'from' => $twilio_number,
        'body' => $mensaje
    )
);

