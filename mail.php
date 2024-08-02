<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Raccogli i dati del form e sanitizza l'input
    $nome = htmlspecialchars($_POST['nome']);
    $cognome = htmlspecialchars($_POST['cognome']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $messaggio = htmlspecialchars($_POST['messaggio']);

    // Imposta gli header dell'email
    $to = 'info@finvideoholding.it';
    $subject = 'Nuovo messaggio dal modulo di contatto';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Imposta il contenuto dell'email
    $body = "Nome: $nome\n\n";
    $body .= "Cognome o Ragione Sociale: $cognome\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Telefono: $telefono\n\n";
    $body .= "Messaggio:\n$messaggio";

    // Invia l'email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect alla pagina principale dopo l'invio
        header('Location: index.html'); // Cambia '/' con il percorso della tua pagina principale
        exit();
    } else {
        echo "<p>Errore nell'invio dell'email.</p>";
    }
}
?>

</body>
</html>
