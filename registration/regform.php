<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $emergencyPhone = $_POST['emergencyPhone'];
    $emergencyContact = $_POST['emergencyContact'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $event = $_POST['event'];
    $accommodations = $_POST['accommodations'];
    $type = $_POST['type'];
    $subject = 'Registration';

    $mailTo = "phpmailer@gregkhmara.webhostingforstudents.com";
    $headers = "From: " . $mailFrom;
    $txt = "NAME: " . $name . "\n\n" . "E-Mail: " . $mailFrom . "\n\n" . "Emergency Phone Number: " . $emergencyPhone
        . "\n\n" . "Emergency Contact: " . $emergencyContact . "\n\n" . "Gender: " . $gender . "\n\n" . "Age: " . $age
        . "\n\n" . "Event: " . $event . "\n\n" . "Accommodations: " . $accommodations . "\n\n" . "Type: " . $type;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}