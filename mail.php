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
    $headers .= "Reply-To: info@finvideoholding.it\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Imposta il contenuto dell'email
    $subject = 'Nuovo messaggio di contatto';
    $body = "Nome: $nome\nCognome o Ragione Sociale: $cognome\nEmail: $email\nTelefono: $telefono\nMessaggio:\n$messaggio";

    // Invia l'email a info@finvideoholding.it
    if (mail('info@finvideoholding.it', $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Email inviata con successo.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Errore nell\'invio dell\'email.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Metodo di richiesta non valido.']);
}
?>
