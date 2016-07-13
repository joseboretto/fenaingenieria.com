<?php
$remitente = $_POST['email'] ;
$destino = "info@fenaingenieria.com" ;
$asunto = "Contacto FENA" ;
$nombre = $_POST['name'] ;
$mensaje = $_POST['message'] ;
$texto = " <b> Nombre: </b>";
$texto .= $nombre; 
$texto .= "<br/> Mensaje: "; 
$texto .= $mensaje;
$encabezados = "From: $remitente\nReply-To: $remitente\nContent-Type: text/html; charset=iso-8859-1" ;

mail($destino, $asunto, $texto, $encabezados) or die ("No se ha podido enviar tu mensaje. Ha ocurrido un error") ;


echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Gracias Por su Mensaje')
    window.location.href='http://fenaingenieria.com/';
    </SCRIPT>");

?>