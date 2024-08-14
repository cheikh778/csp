<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Charger Composer's autoloader (si vous avez installé via Composer)
require 'vendor/autoload.php';

// Si vous avez téléchargé PHPMailer manuellement, incluez les fichiers suivants
// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Valider les données
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Configurer PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Paramètres du serveur
            $mail->isSMTP();
            $mail->Host       = 'smtp.example.com'; // Remplacez par le serveur SMTP de votre choix
            $mail->SMTPAuth   = true;
            $mail->Username   = 'votre_email@example.com'; // Remplacez par votre adresse email SMTP
            $mail->Password   = 'votre_mot_de_passe'; // Remplacez par votre mot de passe SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Destinataires
            $mail->setFrom($email, $name);
            $mail->addAddress('locheikhndao778@gmail.com'); // Remplacez par votre adresse email de réception

            // Contenu de l'email
            $mail->isHTML(true);
            $mail->Subject = "Nouveau message de contact de $name";
            $mail->Body    = "
                <html>
                <head>
                    <title>Nouveau message de contact</title>
                </head>
                <body>
                    <h2>Nouveau message de contact</h2>
                    <p><strong>Nom:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Message:</strong><br>$message</p>
                </body>
                </html>";

            // Envoyer l'email
            $mail->send();
            echo "<script>alert('Message envoyé avec succès!'); window.location.href = 'index.html';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Échec de l\'envoi du message. Erreur: {$mail->ErrorInfo}'); window.location.href = 'index.html';</script>";
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
