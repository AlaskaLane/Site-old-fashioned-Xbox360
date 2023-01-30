<?php

try{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=tp_php;charset=utf8', 'root', '23_Password');
    // Activation des erreurs PDO
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
    $mysqlClient->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

function getUserById($id){
    global $mysqlClient;
    $sql = 'SELECT * FROM user WHERE id_user =:id';
    $stmt = $mysqlClient->prepare($sql ); //prépare la requête en évitant les injonctions sql
    $stmt->execute(['id' => $id]); //vérifie si l'utiisateur existe bien
    $user = $stmt->fetch(); // ajoute les résultats de la colonne au tableau $user
    return $user;
}

function authenticate($login, $password){
    global $mysqlClient;
    $sql = 'SELECT * FROM user WHERE login =:login';
    $stmt = $mysqlClient->prepare($sql);
    $stmt->execute(['login' => $login]);
    $user = $stmt->fetch(); // ajoute les résultats de la colonne au tableau $user

    if(isset($user['password']) && isset($user['login'])){
        $bddPswd = $user['password'];
        if($password == $bddPswd){
        return $user['id_user'];
        }
        else{
        echo ("Login et/ou le mot de passe invalide(s)");
        return null;
        }
    }
    else{
            return null;
        }
}