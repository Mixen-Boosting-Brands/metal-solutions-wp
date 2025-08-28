<?php
/**
 * PHPMailer multiple files upload and send
 */

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

//Server settings
$mail->isSMTP();
$mail->Host = "metalsolutions.com.mx";
$mail->SMTPAuth = true;
$mail->Username = "noreply@metalsolutions.com.mx";
$mail->Password = "VVYBddzO@~_t";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

if (isset($_POST["nombre"])) {
    // Sanitización de todos los campos
    $nombre = strip_tags(trim($_POST["nombre"]));
    $telefono = strip_tags(trim($_POST["telefono"]));
    $correo = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    // Eliminar saltos de línea
    $nombre = str_replace(["\r", "\n"], [" ", " "], $nombre);

    try {
        //Recipients
        $mail->setFrom(
            "noreply@metalsolutions.com.mx",
            "Correo noreply@metalsolutions.com.mx"
        );
        $mail->addAddress("karla@metalsolutions.com.mx", "Karla");
        $mail->addAddress("luis@metalsolutions.com.mx", "Luis");
        $mail->addReplyTo($correo, "Deseo obtener más información.");

        //Content
        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de " . $nombre;

        // Construir el cuerpo del mensaje
        $mail->Body = "
            <strong>Información del contacto:</strong><br>
            Nombre: {$nombre}<br>
            Teléfono: {$telefono}<br>
            Correo electrónico: {$correo}<br>
            <br>
            <br>
            Este mensaje fue enviado a través del formulario de contacto en el sitio web de Metal Solutions.";

        $mail->send();
        echo "Gracias por contactarnos, nos pondremos en contacto contigo a la brevedad.";
    } catch (Exception $e) {
        echo "Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo. Mailer Error: " .
            $mail->ErrorInfo;
    }
} else {
    echo "Por favor, complete todos los campos requeridos, incluyendo los términos y condiciones.";
}
