@include('includes/head')
@include('includes/navbar')
<br>
<?php
$to = "contact@autoayuda.com";
$subject = "Nuevo Contacto";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$content= "Nombre: $name\r\n";
$content.="Mail: $email\r\n";
$content.= "Mensaje: $message";

$headers = "From: contactos@autoayuda.com";
mail($to,$subject,$content,$headers);
?>
@include('content/welcome_content')
@include('includes/bottom_bar')
@include('includes/bottom')
