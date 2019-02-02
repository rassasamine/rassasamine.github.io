<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $to      = 'rassas.amine@gmail.com';    
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = array(
        'From' =>  $_POST['email'],
        'Reply-To' => $_POST['email'],
        'X-Mailer' => 'PHP/' . phpversion()
    );

    mail($to, $subject, $message, $headers);
}

?>