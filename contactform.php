<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $comment = $_POST['comment'];
    $type = $_POST['type'];
    $subject = 'Contact';

    $mailTo = "phpmailer@gregkhmara.webhostingforstudents.com";
    $headers = "From: " . $mailFrom;
    $txt = "NAME: " . $name . "\n\n" . "E-Mail: " . $mailFrom . "\n\n" . "Question or Comment: " . $comment
        . "\n\n" . "Type: " . $type;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}