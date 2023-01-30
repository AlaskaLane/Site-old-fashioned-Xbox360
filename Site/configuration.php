<?php
function getVariable($_GET[$name]){
    if(!isset($_GET[$name])){
        return false;
    }
    elseif($_GET[$name]=== ""){ //Le "===" à la place du "==" permet de vérifier que la chaine est bien vide et ne contient ni espaces ni tabulations
        return true;
    }
    else{
        return $_GET[$name];
    }
}
function postVariable($_POST[$name]){
    if(!isset($_POST[$name])){
        return false;
    }
    elseif($_POST[$name]=== ""){ //Le "===" à la place du "==" permet de vérifier que la chaine est bien vide et ne contient ni espaces ni tabulations
        return true;
    }
    else{
        return $_POST[$name];
    }
}
require_once db.php;

global $VAR_LOGIN;
$VAR_LOGIN = $user['login'];

global $VAR_PASSWORD;
$VAR_PASSWORD = $user['password'];
