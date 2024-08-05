<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invio Email</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati dal modulo
        $nome = htmlspecialchars($_POST['nome']);
        $cognome = htmlspecialchars($_POST['cognome']);
        $email = htmlspecialchars($_POST['email']);
        $telefono = htmlspecialchars($_POST['telefono']);
        $messaggio = htmlspecialchars($_POST['messaggio']);

        // Imposta gli header dell'email
        $headers = "From: info@finvideoholding.it\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

        // Imposta il contenuto dell'email
        $subject = 'Nuovo messaggio di contatto';
        $body = "Nome: $nome\nCognome o Ragione Sociale: $cognome\nEmail: $email\nTelefono: $telefono\nMessaggio:\n$messaggio";

        // Invia l'email a info@finvideoholding.it
        if (mail('info@finvideoholding.it', $subject, $body, $headers)) {
            echo "Email inviata con successo.";
            error_log("Email inviata a info@finvideoholding.it");
        } else {
            echo "Errore nell'invio dell'email.";
            error_log("Errore nell'invio dell'email a info@finvideoholding.it");
        }
    } else {
        echo "Metodo di richiesta non valido.";
    }
    ?>
</body>
</html>
