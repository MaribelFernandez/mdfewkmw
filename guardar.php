<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $mensaje = $_POST["opinion"];

  $destinatario = "maribelfernandezcampos20@gmail.com"; 

  $asunto = "Nuevo mensaje del formulario";
  $cuerpo = "Nombre: $nombre\nCorreo: $correo\nOpinion: $mensaje";

  // Envía el correo electrónico
  if (mail($destinatario, $asunto, $cuerpo)) {
    echo "¡Gracias por tu mensaje! Pronto nos pondremos en contacto contigo.";
  } else {
    echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
}
?>
