<?php
session_start();
require 'db.php';
$login= $_POST['login'];
$password=$_POST['password'];
$user= authenticate($login,$password);
if(isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (empty($login) || empty($password)) {
        // Afficher le message d'erreur
        $_SESSION['errorMessage'] = sprintf("Erreur d'authentification : il manque le mot de passe et/ou le login");
        // Ajouter un message dans le fichier 'error_log'
        error_log("Erreur d'authentification : il manque le mot de passe et/ou le login \n", 3, "/var/www/html/error_log.txt");
        header('Location: index.php');
    } else {
        // pour répondre à une consigne mais déreangeant pour l'execution du script :
        //echo $login, $password;
        authenticate($login, $password);
        if (isset($user)) {
            $_SESSION['login']= $login;
            $_SESSION['date']= date('d/m/Y');
            $_SESSION['hour']= date('H:i:s');
            header('Location: home.php');
        } else {
            // Afficher le message d'erreur
            $_SESSION['errorMessage'] = sprintf("Erreur d'authentification : le login ou le mot de passe est incorrect.");
            // Ajouter un message dans le fichier 'error_log'
            error_log("Erreur d'authentification : le login ou le mot de passe est incorrect.\n", 3, "/var/www/html/error_log.txt");
            header('Location: index.php');
        }
    }
}else {
    $_SESSION['errorMessage']= sprintf("Erreur d'authentification : problème lors de l'envoi du formulaire");
    error_log("Erreur d'authentification : problème lors de l'envoi du formulaire\n", 3, "/var/www/html/error_log.txt");
}

