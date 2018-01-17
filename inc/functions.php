<?php

function account_exists() : array{
    return [
        'id' => 2,
        'password' => 'azerty123'
    ];
}

function mail_free() : bool {
    return false;
}

function mail_html( string $subject, string $message) {
    $headers = 'From: Daniel <dan_dev@hotmail.com>' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8';

    mail(  $_POST['email'], $subject, $message, $headers);
}

function password_save( string $password = '' ) {

    $newpassword = $_POST['newpassword'] ?? $password; 

    if (isset( $_POST['email'])) {
        // la gestion de l'oubli de mot de passe 
    }
    else {
        // gestion pour changement de mot de passe 
    }
}



