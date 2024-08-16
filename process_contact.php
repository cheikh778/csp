

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Valider les données
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);
        try {
            // Paramètres du serveur
            $mail->isSMTP();
            $mail->Host       = 'smtp.example.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'locheikhndao778@gmail.com';
            $mail->Password   = 'vfxb hpqq rkon gfzg    ';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Destinataires
            $mail->setFrom($email, $name);
            $mail->addAddress('locheikhndao778@gmail.com');

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
    header("Location: index.html");
    exit();
}
?>


