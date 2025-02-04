<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Eingabedaten aus dem Formular
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    // E-Mail-Adresse, an die die Buchung gesendet wird
    $to = "elly.dura@be-websolutions.de";  // Ersetze dies mit deiner E-Mail-Adresse
    $subject = "Neue Terminbuchung";
    
    // E-Mail-Inhalt
    $message = "Ein neuer Termin wurde gebucht:\n\n";
    $message .= "Name: $name\n";
    $message .= "E-Mail: $email\n";
    $message .= "Datum: $date\n";
    $message .= "Uhrzeit: $time\n";
    
    // E-Mail-Kopfzeilen
    $headers = "From: no-reply@example.com";
    
    // E-Mail senden
    if (mail($to, $subject, $message, $headers)) {
        echo "Ihre Buchung war erfolgreich!";
    } else {
        echo "Fehler: Die Buchung konnte nicht gesendet werden.";
    }
}
?>
