<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "eliecerbautistabelen@gmail.com";
    $email_subject = "Nuevo mensaje del PortFolio $name: $subject";
    $body = "Nombre: $name\nTeléfono: $phone\nCorreo: $email\nAsunto: $subject\n\nMensaje:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $email_subject, $body, $headers)) {
        echo "<script>alert('Mensaje enviado correctamente. :)');</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje. :(');</script>";
    }
} else {
    echo "Método no soportado.";
}
?>
