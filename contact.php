<?php

    $name = $_POST['name']; // visitor names
    $email = $_POST['email']; // visitor email
    $message = $_POST['message']; // visitor message

    $email_from = 'brownisaac229@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                    "User Message: $message.\n";

    $to = 'brownisaac229@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $$email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");

?>