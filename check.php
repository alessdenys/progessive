<?php
$honey = ($_POST['nickname']);
$name = ($_POST['name']);
$surname = ($_POST['surname']);
$email = ($_POST['email']);
$message = ($_POST['message']);
// sanitize
$valName = filter_var($name, FILTER_SANITIZE_STRING);
$valEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$valSurname = filter_var($surname, FILTER_SANITIZE_STRING);
$valMessage = filter_var($message, FILTER_SANITIZE_STRING);
//validate
$error = [];
$valide = [];
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error["email"] = " votre email semble invalide, veuillez vérifier et réessayer <br/>";
    echo($error["email"]);
}
else {
    array_push($valide,$valEmail);
}
if (preg_match("/^[A-Za-z]+$/", $_POST['name'])) {
    array_push($valide,$valName);
}
else {
    $error["name"] = " nous détectons des caractère illégaux danx votre nom, réessayer <br/>";
    echo($error["name"]);
}

if (preg_match("/^[A-Za-z]+$/", $_POST['surname'])) {
   
    array_push($valide,$valSurname);
}
else {
    $error["surname"] = " nous détectons des caractère illégaux danx votre prénom, réessayer <br/>";
    echo($error["surname"]);
}

