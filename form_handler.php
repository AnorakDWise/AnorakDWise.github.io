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

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-KJFB453BET"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-KJFB453BET");
    </script>
    <link rel="icon" href="/assets/icons/contact.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/style/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-mail sent!</title>
  </head>
  <body>
    <div class="validace container">
        <img src="assets/icons/email sent.svg">
        <h1>Your message has been sent!<br><span id="SB">I'll reply to your e-mail as soon as possible.</span></h1>
        <a href="index.html" alt="Back to the home page">Back to the home page</a>
    </div>
  </body>
</html>
