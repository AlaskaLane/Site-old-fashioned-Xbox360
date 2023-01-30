<?php

// Connexion à la base de données
include 'db.php';

// Démarrage de la session
session_start();

// Récupération des données du formulaire
$login = $_POST['login'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Vérification que les mots de passe correspondent
if ($password != $confirm_password) {
    $_SESSION['errorMessage'] = "Les mots de passe ne correspondent pas.";
    header('Location: inscription.php');
    exit;
}

$passwordStatment = $mysqlClient->prepare('INSERT INTO user (login, password) VALUES(:login, :password)');
$passwordStatment->execute(array(
    'login'=> $login,
    'password'=> $password
));


if ($result->num_rows > 0) {
    $_SESSION['errorMessage'] = "Le login est déjà pris.";
    header('Location: inscription.php');
    exit;
}


// Redirection vers la page de login
header('Location: index.php');
exit;
