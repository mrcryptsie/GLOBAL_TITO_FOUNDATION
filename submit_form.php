<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Adresse e-mail de destination
    $to = "contacts@globaltitofoundation.com";

    // Sujet de l'e-mail
    $email_subject = "Nouveau message de formulaire: $subject";

    // Corps de l'e-mail
    $email_body = "Vous avez reçu un nouveau message du formulaire de contact.\n\n" .
        "Nom: $name\n" .
        "Téléphone: $phone\n" .
        "E-mail: $email\n" .
        "Sujet: $subject\n" .
        "Message:\n$message";

    // En-têtes pour l'e-mail
    $headers = "De: $email\r\nRépondre à: $email\r\n";

    // Envoyer l'e-mail
    mail($to, $email_subject, $email_body, $headers);

    // Redirection après envoi du formulaire (facultatif)
    header("Location: merci.html");
} else {
    // Redirection en cas d'accès direct au script (facultatif)
    header("Location: index.html");
}
?>
