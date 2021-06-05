<?php

    $_POST;

    $userName = $_POST["jmeno"];
    $userEmail = $_POST["email"];
    $messageSubject = $_POST["predmet"];
    $message = $_POST["zprava"];

    $to = "gregory.stehlik@creativehill.cz";
    $body = "";

    $body .= "Od: ".$userName. "\r\n";
    $body .= "E-mail: ".$userEmail. "\r\n";
    $body .= "Zpráva: ".$message. "\r\n";

    mail($to,$messageSubject,$body);

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
    <title>E-mail odeslán!</title>
  </head>
  <body>
    <div class="validace container">
        <img src="assets/icons/email sent.svg">
        <h1>Vaše zpráva byla odeslána!<br><span id="SB">Odepíši Vám na e-mail co nejdříve.</span></h1>
        <a href="index-cs.html" alt="Zpět na úvodní stránku">Zpět na úvodní stránku</a>
    </div>
  </body>
</html>
