<?php 

function account_exists() : array {
    return [
        'id' => 2, 
        'password' => 'azerty123'
    ];
}

function account_informations() : array {
    return [];
}

function bdd_delete(string $query, array $params = []) {
    require 'pdo.php';
    if ($params){
        $req = $bdd->prepare($query);
        $req->execute($params);
    }
    else{
        $req = $bdd->query($query);
    }
    $deleted = $req->rowCount();
    return $deleted;
}

function bdd_insert(string $query, array $params = []) : int {
    require 'pdo.php';
    if ($params){
        $req = $bdd->prepare($query);
        $req->execute($params);
    }
    else{
        $req = $bdd->query($query);
    }
    $inserted = $req->rowCount();
    return $inserted;
}

function bdd_select(string $query, array $params = []){
    require 'pdo.php';
    if ($params){
        $req = $bdd->prepare($query);
        $req->execute($params);
    }
    else {
        $req = $bdd->query($query);
    }
    $data = $req->fetchAll();
    return $data;
}

function bdd_update (string $query, array $params = []) : int {
    require 'pdo.php';
    if ($params){
        $req = $bdd->prepare($query);
        $req->execute($params);
    }
    else{
        $req = $bdd->query($query);
    }
    $updated = $req->rowCount();
    return $updated;
}

function mail_free(): bool {
    $membre = bdd_select('SELECT id FROM membre WHERE mail = ?' [$_POST['email']]);
    if (!$membre){
        return true;
    }
    else { 
        return true;
    }
}

function mail_html(string $subject, string $message){
    $headers = 'From: Amandine <amandine.meeus@outlook.com>' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8';
    
    mail($_POST['email'], $subject, $message, $headers);
}

function password_ok() : bool {
    return true;
}

function password_save(string $password = '') {
    $newpassword = $_POST['newpassword'] ?? $password;
    if (isset($POST['email'])) {
        //gestion pour l'oubli de mot de passe
    }
    else {
        //gestion pour changement de mot de passe
    }
}; 

?>