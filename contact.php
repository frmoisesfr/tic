<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $body = "Nombre: $nombre \n".
            "Email: $email \n".
            "Teléfono: $telefono\n";

    $headers = "From: frmoisesfr@gmail.com \r\n";
    $headers .= "Reply-To: $email \r\n";


    mail("frmoisesfr@gmail.com","Formulario de contacto",$cuerpo,$headers);
    header("Location: Formulario.html");
?>
