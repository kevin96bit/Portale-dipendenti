<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i dati dal form
    $email = $_POST["email"];
    $descrizioneProblema = $_POST["descrizioneProblema"];

    // Configura le impostazioni SMTP per Mailtrap
    $smtpHost = "sandbox.smtp.mailtrap.io";
    $smtpPort = 2525;
    $smtpUsername = "331df758c3f93c";
    $smtpPassword = "8b73e21f9ebcbb";

    // Configura l'e-mail
    $destinatario = "kevin96bit@gmail.com"; // Sostituisci con il tuo indirizzo e-mail
    $oggetto = "Nuovo messaggio dal form";
    $messaggio = "Nuova richiesta:\n\nEmail: $email\nDescrizione Problema: $descrizioneProblema";

    // Imposta le impostazioni SMTP
   
        ini_set("SMTP", $smtpHost);
        ini_set("smtp_port", $smtpPort);
        ini_set("sendmail_from", $email);
        ini_set("smtp_auth", "login");
        ini_set("smtp_user", $smtpUsername);
        ini_set("smtp_pass", $smtpPassword);

    // Invia l'e-mail
    mail($destinatario, $oggetto, $messaggio);

    // Puoi anche reindirizzare l'utente a una pagina di conferma
    
    exit();
} 
?>

<!-- da vedere -->


