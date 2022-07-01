<?php
// conecto mi form / name / con el server a travez de los name
$nombre = $_POST ['name']
$mail = $_POST ['email']
$mensaje = $_POST ['textarea']

// Como llega el cuerpo del mail; lo que la gente escribio en el form

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

// Mail al que llega el mensaje

$para = 'contacto@findersocialapp.com';
$asunto = 'Este mail fue enviado desde la web de Finder';
mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');

?>