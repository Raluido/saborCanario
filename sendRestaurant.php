<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html; charset=UTF-8\r\n";

$comments = "Este mensaje fue enviado por: " . $name . " \r\n";
$comments .= "Su e-mail es: " . $email . " \r\n";
$comments .= "Teléfono de contacto: " . $phone . " \r\n";
$comments .= "Mensaje: " . $_POST['comments'] . " \r\n";
$comments .= "Enviado el: " . date('d/m/Y', time());

$para = 'info@hotelruralorotava.es';
$asunto = 'Mensaje de Hotel Rural Orotava';

mail($para, $asunto, $comments, $header);

if(!$send){
    echo '<script type="text/javascript">alert("El email NO se ha enviado correctamente a ' . $para . '");</script>';

}
else{
    echo '<script type="text/javascript">alert("El email se ha enviado correctamente a ' . $para . '");</script>';

}


header("Location:html/restaurante.html");
?>