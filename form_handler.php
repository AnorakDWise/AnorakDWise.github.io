<?php
    $name = $_POST["jmeno"];
    $from = $_POST["email"];
    $message_subject = $_POST["predmet"];
    $message = $_POST["zprava"];

    $email_from = "gregory.stehlik@creativehill.cz"
    $email_subject = "Nová zpráva z formuláře"
    $email_body =   "Od: $name.\n".
                    "e-mail: $from.\n".
                    "Předmět zprávy: $message_subject.\n".
                    "Zpráva: $message.\n";

    $to = "gregory442005@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $form \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location = kontakt.html");

?>