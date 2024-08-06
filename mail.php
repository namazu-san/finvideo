<?php
$to = 'info@finvideoholding.it';
$subject = 'Test Email';
$message = 'Questo è un test.';
$headers = 'From: webmaster@finvideoholding.it' . "\r\n" .
           'Reply-To: webmaster@finvideoholding.it' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email inviata con successo.';
} else {
    echo 'Errore nell\'invio dell\'email.';
}
?>
