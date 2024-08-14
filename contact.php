<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Valider les données
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Adresse email où vous souhaitez recevoir les messages
        $to = "locheikhndao778@gmail.com"; 
        $subject = "Nouveau message de contact de $name";
        $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";

        // Envoyer l'email
        if (mail($to, $subject, $body, $headers)) {
            echo "<script>alert('Message envoyé avec succès!'); window.location.href = 'index.html';</script>";
        } else {
            echo "<script>alert('Échec de l\'envoi du message. Veuillez réessayer plus tard.'); window.location.href = 'index.html';</script>";
        }
    } else {
        echo "<script>alert('Veuillez remplir tous les champs correctement.'); window.location.href = 'index.html';</script>";
    }
} else {
    // Redirection si la requête n'est pas de type POST
    header("Location: index.html");
    exit();
}
?>
