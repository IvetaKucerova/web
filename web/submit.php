<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kucerova.web@seznam.cz"; // E-mailová adresa, kam se mají posílat zprávy
    $subject = "Nová zpráva z kontaktního formuláře";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "Jméno: $name<br>";
    $body .= "E-mail: $email<br>";
    $body .= "Zpráva:<br>$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Zpráva byla úspěšně odeslána.</h2>";
    } else {
        echo "<h2>Došlo k chybě při odesílání zprávy.</h2>";
    }
}
?>