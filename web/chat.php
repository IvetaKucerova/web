<?php

//zpracování příchozích zpráv

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];

    //uložení zprávy do souboru
    $file = fopen("chatlog.txt", "a");
    fwrite($file, "User: " . $message . PHP_EOL);
    fclose($file);

    //potvrzení klientovi
    echo "Message received: " . $message;
    exit();
}


//načtení exostujících zpráv

if (file_exists("chatlog.txt")) {
    $chatlog = file_get_contents("chatlog.txt");
    echo $chatlog;
} else {
    echo "No messages yet.";
}

?>